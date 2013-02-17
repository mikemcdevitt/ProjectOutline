<?php 
	include_once('../inc/header.php'); 
	include_once('../lib/connect.php'); 
?>
</head>
<body>
	<div id="wrapper">
<?php include_once('../inc/nav.php'); ?>
		<div id="content">


<h1>Projects</h1>

<?php 

	include_once('poInc/readAll.php'); 

echo "Total projects - " . $projectCount . "<br/>";

	for ($p = 0; $p < $projectCount; $p++){
	echo $projectIdArray[$p] . ' - ' . $nameArray[$p] . "<br/>";
	echo "<input type='file' /><br/>";
	}
	
?>


<?php include_once('../inc/footer.php'); ?>