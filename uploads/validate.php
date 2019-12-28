<?php
session_start();
 
if (!isset($_SESSION['user_id'])) {
    header ('Location: ../index.php');
    exit();
} else {
    // Get server document root
    $document_root = $_SERVER['DOCUMENT_ROOT'];
    // Get request URL from .htaccess
    $request_url = $_GET['request_url'];
    // Get file name only
    $filename = basename($request_url);
    
    // Set headers
	$ext = end((explode(".", $name)));
	if($ext=="pdf"){
    header('Content-type: application/pdf');
    
	}
	else
	{
		header('Content-type: image/jpeg');
	}
	header('Content-Disposition: inline; filename='.$filename);
    
    // Output file content
    @readfile($document_root.$request_url);
}