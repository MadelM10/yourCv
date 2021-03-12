<?php
//Items of the CV as Variables
$name=$_POST['name'];
$birth=$_POST['birth'];
$nationality=$_POST['nationality'];
$military=$_POST['military'];
$driving=$_POST['driving'];
$address=$_POST['address'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$image="siren-song1__800_800.jpg";
$bachelor=$_POST['bachelor'];
$course=$_POST['course'];
$lang=$_POST['lang'];
$comp=$_POST['comp'];
$other=$_POST['other'];
$job=$_POST['job'];

//connect to database
$connect=mysqli_connect("localhost","root","","cv");
if (!$connect) {
	echo mysqli_connect_error();
	exit();
}
//operation
$query="INSERT INTO `cv` (`name`,`birth`,`nationality`,`military`,`driving`,`address`,`telephone`,`email`,`image`,`bachelor`,`course`,`lang`,`comp`,`other`,`job`) VALUES ('".$name."','".$birth."','".$nationality."','".$military."','".$driving."','".$address."','".$telephone."','".$email."','".$image."','".$bachelor."','".$course."','".$lang."','".$comp."','".$other."','".$job."')";
$list=mysqli_query($connect,$query);
if($list){
		echo 'Updated '.$name.'\'s CV.';
}else{
	echo 'error'. mysqli_error($connect);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    	<!-- css &js files -->
	<link rel="stylesheet" type="text/css" href="css/yourCv.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>
<!-- the page contain all items of CV like any body -->
<div class="container">
		<div class="row">
			<div class="col-10 personal">
				<h1>PERSONAL DATA</h1><br><hr>
				<pre><p><b>Name</b>                              <?= $name; ?></p></pre>
				<pre><p><b>Date of Birth</b>                <?= $birth; ?></p></pre>
				<pre><p><b>Nationality</b>                   <?= $nationality; ?></p></pre>
				<pre><p><b>Military Service</b>         <?= $military; ?></p></pre>
				<pre><p><b>Driving license</b>           <?= $driving; ?></p></pre>
				<pre><p><b>Address</b>                        <?= $address; ?></p></pre>
				<pre><p><b>Tel.</b>                                 <?= $telephone; ?></p></pre>
				<pre><p><b>E-mail</b>                            <?= $email; ?></p></pre>
				
			</div>
			<div class="col-2">
				<br><br><br><br><br>
				<img src="./<?=$image;?>" alt="img">
			</div>
		</div>
	</div>
	<div class="qualifications">
		<h1>QUALIFICATIONS</h1><hr>
		<ul><li><?= $bachelor; ?></li></ul>
	</div>
	<div class="advanced">
		<h1>ADVANCED COURSES</h1><hr>
		<ul><li><?= $course; ?></li></ul>
	</div>
	<div class="languages">
		<h1>LANGUAGES</h1><hr>
		<ul><li><?= $lang; ?></li></ul>
	</div>
	<div class="computer">
		<h1>COMPUTER SKILLS</h1><hr>
		<ul><li><?= $comp; ?></li></ul>
	</div>
	<div class="other">
		<h1>OTHER SKILLS</h1><hr>
		<ul><li><?= $other; ?></li></ul>
	</div>
	<div class="job">
		<h1>JOB EXPERIENCE</h1><hr>
		<ul><li><?= $job; ?></li></ul>
	</div>    
</body>
</html>
