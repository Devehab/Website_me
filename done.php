
<?php
// info Get ------------------
if($_GET)
{
	$name =$_GET['name'];
}
?>
<!DOCTYPE html>
<!-- Source CSS Website 24.2.2015 Developer Ehab Kahwati  -->

<head>
<title>Thanks <?php echo $name; ?> </title>
<meta charset='UTF-8' />
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link rel='icon' type='image/png' href='Image/favicon.png' />
        
</head>
<html>
<body>
<style type='text/css'>
@font-face
{
font-family: Casper_Bold;
src: url('font/Casper_Bold.ttf'),
     url('font/GESS/GESS.eot'); /* IE9 */
} 
@media screen and (min-width:960px) {
	body{
		margin: 0px;
		padding: 0px;
		background: #09b349;
	}
	.logo{
		    text-align: center;
    margin-top: 45px;
	}
	.logo img{
    text-align: center;
    width: 552px;
    height: 176px;
	}

	.thinks{
	 text-align: center;
    margin-top: 63px;
    color: #fff;
       padding-right: 20%;
    padding-left: 20%;

	}
	.thinks h2{
		    word-wrap: break-word;
		margin: 0px;
		color: #fff;
	  font-family: Casper_Bold;
    font-size: 36px;
    text-align: center;


	}}

	@media screen and (max-width:960px)  {
		body{
		margin: 0px;
		padding: 0px;
		background: #09b349;
	}
	.logo{
		    text-align: center;
    margin-top: 34px;
	}
	.logo img{
    text-align: center;
    width: 254;
    height: 81px;
	}

	.thinks{
	 text-align: center;
    margin-top: 30px;
    color: #fff;

	}
.thinks h2{
	  font-family: Casper_Bold;
    font-size: 26px;
    padding-right: 5%;
    padding-left: 5%;
    text-align: center;
    overflow-x: hidden !important;
    width: auto !important;
   word-break: break-all;
    color: #fff;
	}
	}

    
</style>

<div class='logo'><img src='Image/Logo_W_328_105.png' ></div>
<div class='thinks'><h2>Thank you ♥ <?php echo $name; ?></h2></div>
</br> </br> </br>
</body>
</html>