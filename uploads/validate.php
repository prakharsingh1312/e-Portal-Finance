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
	$ext = end((explode(".", $request_url)));
	if($ext=="pdf"){
    header('Content-type: application/pdf');
		header('Content-Disposition: inline; filename='.$filename);
    
	}
	else
	{
		header("Content-Type: image/jpeg");
	}
	
    
    // Output file content
    @readfile($document_root.$request_url);
}