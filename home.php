<?php
	include 'config.php';

	/*
		1. mysql connection 
		2. embedding php within html
	*/
global $connect;
?>
<html>
	<head>
		<title>Section C2</title>
	</head>
	<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>dept_name</th>
            <th>Tot_cred</th>
        </tr>
        <?php


        $sql = "SELECT * FROM student";
        $student_query_result = mysqli_query($connect,$sql) or die(mysql_error());
        if(mysqli_num_rows($student_query_result) > 0)
        {
            while ($row = mysqli_fetch_array($student_query_result))
            {?>

                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['dept_name']; ?></td>
                    <td><?php echo $row['tot_cred']; ?></td>
                </tr>
            <?php }
        }
        ?>

    </table>
	</body>
</html>
<?php
	include 'close.php';
?>









<?php 
/*
$query = "SELECT lid,nick FROM location";
$location_query_result = mysqli_query($conn,$query) or die(mysql_error());
if(mysqli_num_rows($location_query_result) > 0)
{
	while ($row = mysqli_fetch_array($location_query_result))
	{
		
		echo $row['lid']; 
		echo $row['nick']; 
		
	}
}
*/
?>