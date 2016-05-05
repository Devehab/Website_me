<?php
// info Get ------------------

if(!isset($_POST['name']) ||
    !isset($_POST['email']) ||
    !isset($_POST['msg'])
    ) {
    echo '<script language="Javascript">
        document.location.replace("http://www.devehab.com/Error.html");
        </script>' ;
    die();
  }

$name =$_POST['name'];
$email =$_POST['email'];
$msg = $_POST['msg'];


//--------------------------

$subject1="Message - $name";
$subject2="devehab.com";

$mesthink="
<html>
<body style='text-decoration: none;color: #fff; margin-top:0px;margin-bottom:0px;margin-right:0px;margin-left:0px;padding-top:50px;padding-bottom:50px;padding-right:0px;padding-left:0px;background-color:#09b349;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;' >
<div  style='text-align:center;margin-top:50px;' ><img src='http://www.devehab.com/Image/Logo_W_328_105.png' style='width: 60%;'></div>
<div  style='text-align:center;margin-top:90px;color:#fff;' ><h2 style='padding-left: 10%;padding-right: 10%;font-family:sans-serif;font-size:24px;font-weight: 100;' >Name : $name</h2></div>
<div  style='text-align:center;margin-top:20px;color:#fff;' ><h2 style='padding-left: 10%;padding-right: 10%;font-family:sans-serif;font-size:24px;font-weight: 100;' >E-mail : <a style='text-decoration: none;color: #fff;'>$email</a></h2></div>
<div  style='text-align:center;margin-top:20px;color:#fff;' ><h2 style='padding-left: 10%;padding-right: 10%;font-family:sans-serif;font-size:24px;font-weight: 100;' >Message : $msg</h2></div></br></br>
</body>
</html> " ;
$data_info = "
<html>
<body style='margin-top:0px;margin-bottom:0px;margin-right:0px;margin-left:0px;padding-top:50px;padding-bottom:50px;padding-right:0px;padding-left:0px;background-color:#09b349;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;' >
<div  style='text-align:center;margin-top:50px;' ><img src='http://www.devehab.com/Image/Logo_W_328_105.png' style='width: 60%;'></div>
<div  style='text-align:center;margin-top:90px;color:#fff;' ><h2 style='padding-left: 10%;padding-right: 10%;font-family:sans-serif;font-size:25px;font-weight: 100;' >Thank you ♥ $name</h2></div></br></br>
</body>
</html> ";

$headers = array(
  'From: devehab.com <info@devehab.com>' ,
  'Content-type: text/html; charset=utf-8' ,
  'MIME-Version: 1.0'
 );
$headers2 = "MIME-Version: 1.0" . "\r\n";
$headers2 .= "Content-type: text/html; charset=utf-8" . "\r\n";
$headers2 .= 'From: Developer Ehab Kahwati <info@devehab.com>' . "\r\n";

// ارسال ايميلات

$togmail  = 'pro2014learning@gmail.com'; // Send to Gmail



 
  mail($togmail , $subject1, "$mesthink",implode("\r\n", $headers));
   mail($email , $subject2, "$data_info",$headers2);
  
  
// Save info -----------------------

  echo "<script language='Javascript'>
           document.location.replace('http://www.devehab.com/done.php?name=$name');
           </script>" ;

?>

