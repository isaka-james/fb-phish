<?php

/************************************************|
 *         Welcome, This is the,                 |
 *         Heart of this Project!                |
 *  - All the important variables are here!      |
 *    i.e database, project details and many..   |
 *                                               |
 ************************************************/


$PROJECT_NAME="fb-phish";
$PROJECT_VERSION="v0.0.1";
$PROJECT_OWNER="masterplan";
$MAINTANANCE_EMAIL="mr.isakajames@gmail.com"; // Put the organization's customer care email or phone







/***************  $PROJECT_STATUS ****************|
 *     1=> "development",
 *     2=> "production",
 *     3=> "maintanance"
 * 
 * ***********************************************/
$PROJECT_STATUS=1;







/************  DATABASE SERVER SETTINGS *************|
 *  Currently db: mysql
 * 
 * 
 * 
 * 
 * 
 * **************************************************/

/**** For now let , not use the database! */ 
// $SERVER_NAME="localhost";
// $USERNAME="root";
// $PASSWORD="";
// $DATABASE="fb-phish";





/************  CUSTOM SERVER SETTINGS **************|
 * 
 * 
 * 
 * 
 * 
 * 
 * **************************************************/

/* not found is disabled on the app/Helpers/logic-route.php */
//$NOT_FOUND_ROUTE="/404";

/* Put here your server time location in strings, otherwise server will use global time */
$SERVER_TIME="";

















// Don't delete this require_once -> This is route helper
require_once __DIR__.'/Helpers/project-helper.php';