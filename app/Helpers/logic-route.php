<?php

/************ ROUTE HELPER ***********|
 * If You Don't know what this is,    |
 * Don't come back here!              |
 *                                    |
**************************************/


// Here the logic of the routes will be implemented,
// such as the value of the routes should be the file names

// Include the project.php, contains the heart of project
require_once __DIR__.'/../project.php';


/* Adding the defaults to the routes :: disabled for now see app/project.php */
// $routes[$NOT_FOUND_ROUTE]="notFoundPage";


// Test page if only available when development mode!
if($PROJECT_STATUS==1){
    // For testing enviroment
    $routes["/test"]="testPage";
}




// Get the requested URL
$url = $_SERVER['REQUEST_URI'];


// Check if the requested URL exists in the routes
if (array_key_exists($url, $routes)) {
    // Call the corresponding function

    // Handle the special case first => 404 Error 
    if($routes[$url]=="notFoundPage"){

        //require_once __DIR__.'/../controllers/default/404.php';

        // For now we redirect everyone to '/'
        Header("Location: /");
        

    }else if($routes[$url]=="testPage"){

        //require_once __DIR__.'/../../testing/test1.php';
        //exit;

        // For now we redirect everyone to '/'
        Header("Location: /");
    }


    // And at last go to the route
    handle_link($routes[$url]);
    

} else {
    // Handle 404 - Page not found => call the not_found_route
    //Header("Location: ${NOT_FOUND_ROUTE}");
    //exit;

    // For now let redirect the user to '/'
    Header("Location: /");
}




// Function for getting controllers out of route
function handle_link($controller){
    if(file_exists(__DIR__.'/../controllers/'.$controller.'.php')){
        require_once __DIR__.'/../controllers/'.$controller.'.php';
        exit;
    }else{

        // Provide a class to deal with this -> later
        echo "The controller for that doesn't exist";

        
        exit;
    }
}

