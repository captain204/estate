<?php
	$rootDir = "http://localhost/realestate";
    $cssDir = $rootDir . '/css';
    $includeDir = $rootDir . '/includes';
    $pageDir = $rootDir . '/pages';
    $jsDir = $rootDir . '/js';
    $imageDir = $rootDir . '/images';
	$siteTitle = "Real Estate Management System";
	$studName = "MUHYIDEEN GARBA";

    //database connection constants
    $pdoConnectionString = 'mysql:host=localhost;dbname=realestate';
    $pdoUser = "root";
    $pdoPass = "";
    
    //date
    date_default_timezone_set("Africa/Lagos");
    
    //start session
    session_start();

