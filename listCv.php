<?php
//connect to database
$connect=mysqli_connect("localhost","root","","cv");
if (!$connect) {
	echo mysqli_connect_error();
	exit();
}
//operation
$query="SELECT * FROM `cv`";
$list=mysqli_query($connect,$query);
if($list){
		echo 'Updated all CVs.';
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
    <title>List of CVs</title>
    	<!-- css &js files -->
	<link rel="stylesheet" type="text/css" href="css/listCv.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Birth Day</th>
            <th>Nationality</th>
            <th>Military Status</th>
            <th>Driving License</th>
            <th>Address</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>Personal Image</th>
            <th>Qualifications</th>
            <th>Courses</th>
            <th>Languages</th>
            <th>Computer Skills</th>
            <th>Other Skills</th>
            <th>Job Experience</th>
        </tr>
        <?php while($row=mysqli_fetch_assoc($list)){ ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['birth']; ?></td>
            <td><?= $row['nationality']; ?></td>
            <td><?= $row['military']; ?></td>
            <td><?= $row['driving']; ?></td>
            <td><?= $row['address']; ?></td>
            <td><?= $row['telephone']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['image']; ?></td>
            <td><?= $row['bachelor']; ?></td>
            <td><?= $row['course']; ?></td>
            <td><?= $row['lang']; ?></td>
            <td><?= $row['comp']; ?></td>
            <td><?= $row['otder']; ?></td>
            <td><?= $row['job']; ?></td>
        </tr>
        <?php } ?>
    </table>    
</body>
</html>