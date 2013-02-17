<?php
	$projectQuery = "SELECT * FROM  `PO_Projects` LIMIT 0, 30";
	$projectIdArray = array();
	$nameArray = array();
	$subjectTypeArray = array();
	$creationDateArray = array();
	$creatorArray = array();
	$descriptionArray = array();
	$projectCount = 0;
	
	$projects = mysql_query($projectQuery);
	
	if (!$projects) {
    	die('Invalid query: ' . mysql_error());
	}
	
	while ($row = mysql_fetch_assoc($projects)) {
		$projectIdArray[] = $row['projectId'];
		$nameArray[] = $row['name'];
		$subjectTypeArray[] = $row['subjectType'];
		$creationDateArray[] = $row['creationDate'];
		$creatorArray[] = $row['creator'];
		$descriptionArray[] = $row['description'];
		$projectCount++;
    }
?>