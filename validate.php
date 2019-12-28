/*
 * dl-file.php
 *
 * Protect uploaded files with login.
 *
 * @link http://wordpress.stackexchange.com/questions/37144/protect-wordpress-uploads-if-user-is-not-logged-in
 *
 * @author hakre <http://hakre.wordpress.com/>
 * @license GPL-3.0+
 * @registry SPDX
 */
 
require_once('wp-load.php');

is_user_logged_in() ||  auth_redirect();

list($basedir) = array_values(array_intersect_key(wp_upload_dir(), array('basedir' => 1)))+array(NULL);

$file =  rtrim($basedir,'/').'/'.str_replace('..', '', isset($_GET[ 'file' ])?$_GET[ 'file' ]:'');
if (!$basedir || !is_file($file)) {
    status_header(404);
    die('404 &#8212; File not found.');
}

$mime = wp_check_filetype($file);
if( false === $mime[ 'type' ] && function_exists( 'mime_content_type' ) )
    $mime[ 'type' ] = mime_content_type( $file );

if( $mime[ 'type' ] )
    $mimetype = $mime[ 'type' ];
else
    $mimetype = 'image/' . substr( $file, strrpos( $file, '.' ) + 1 );

header( 'Content-Type: ' . $mimetype ); // always send this
if ( false === strpos( $_SERVER['SERVER_SOFTWARE'], 'Microsoft-IIS' ) )
    header( 'Content-Length: ' . filesize( $file ) );

$last_modified = gmdate( 'D, d M Y H:i:s', filemtime( $file ) );
$etag = '"' . md5( $last_modified ) . '"';
header( "Last-Modified: $last_modified GMT" );
header( 'ETag: ' . $etag );
header( 'Expires: ' . gmdate( 'D, d M Y H:i:s', time() + 100000000 ) . ' GMT' );

// Support for Conditional GET
$client_etag = isset( $_SERVER['HTTP_IF_NONE_MATCH'] ) ? stripslashes( $_SERVER['HTTP_IF_NONE_MATCH'] ) : false;

if( ! isset( $_SERVER['HTTP_IF_MODIFIED_SINCE'] ) )
    $_SERVER['HTTP_IF_MODIFIED_SINCE'] = false;

$client_last_modified = trim( $_SERVER['HTTP_IF_MODIFIED_SINCE'] );
// If string is empty, return 0. If not, attempt to parse into a timestamp
$client_modified_timestamp = $client_last_modified ? strtotime( $client_last_modified ) : 0;

// Make a timestamp for our most recent modification...
$modified_timestamp = strtotime($last_modified);

if ( ( $client_last_modified && $client_etag )
    ? ( ( $client_modified_timestamp >= $modified_timestamp) && ( $client_etag == $etag ) )
    : ( ( $client_modified_timestamp >= $modified_timestamp) || ( $client_etag == $etag ) )
    ) {
    status_header( 304 );
    exit;
}

// If we made it this far, just serve the file
readfile( $file );