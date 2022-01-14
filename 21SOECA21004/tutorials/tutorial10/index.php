<?php
	include"connection.php";
	//echo "connection successfuly";
?>

<html>
<body>

    <?php
    $sql="select * from stud";
    $result=$db->query($sql);
    ?>
    <ul>
        <?php
        while($row=$result->fetch_assoc()){

        ?>
        <li style='font: size 240px;color:blue'>
    
            
            <?= $row['id']?>
			<?= $row['name']?>
			<?= $row['city']?>
			<?= $row['state']?>
    
    
        </li>

        <?php
        }
        ?>
</ul>

</body>
</html>

<!--<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
	<script>
		$("document").ready(function(){
		$("a.delete").click(function(){
		$(this).parents("tr").fadeOut();
	});
	});
	</script>
</head>
<body>
	<table class="modal-content bg table table-condensed table-striped ">
		<tr id="ROW1">
			<td colspan="7"><h3>Data Record</h3></td>
			<td align="center"><input type="submit" class="btn btn-primaryw-25" value="Add Record"></td>
		</tr>
		<tr class="font sr">
			<td><center>no</td>
			<td><center>Name</td>
			<td><center>Username</td>
			<td><center>Password</td>
			<td><center>Age</td>
			<td><center>City</td>
			<td><center>Country</td>
			<td><center>Action</td>
		</tr>
		<tr id="ROW1" class="tr">
			<td align="center">1</td>
			<td><center>Parth patel </td>
			<td><center>parth9053</td>
			<td><center>p8974</td>
			<td><center>39</td>
			<td><center>Surat</td>
			<td><center>India</td>
			<td><center><a href="#"><button type="button" class="btnbtn-info">Edit</button> </a>
			<a href="#" class="delete"><button type="button" class="btnbtn-danger">Delete</button></a></td>
		</tr>
		
		<tr id="ROW2" class="tr">
			<td align="center">2</td>
			<td><center>dhara patel </td>
			<td><center>dhara9053</td>
			<td><center>d8974</td>
			<td><center>29</td>
			<td><center>Baroda</td>
			<td><center>India</td>
			<td><center><a href="#"><button type="button" class="btnbtn-info">Edit</button> </a>
			<a href="#" class="delete"><button type="button" class="btnbtn-danger">Delete</button></a></td>
		</tr>
		
		<tr id="ROW3" class="tr">
			<td align="center">3</td>
			<td><center>jemini patel </td>
			<td><center>jemini01</td>
			<td><center>j2030</td>
			<td><center>20</td>
			<td><center>Rajkot</td>
			<td><center>India</td>
			<td><center><a href="#"><button type="button" class="btnbtn-info">Edit</button> </a>
			<a href="#" class="delete"><button type="button" class="btnbtn-danger">Delete</button></a></td>
		</tr>
		
		<tr id="ROW4" class="tr">
			<td align="center">4</td>
			<td><center>nirali jethva</td>
			<td><center>nirali3010</td>
			<td><center>n1234</td>
			<td><center>25</td>
			<td><center>Junagadh</td>
			<td><center>India</td>
			<td><center><a href="#"><button type="button" class="btnbtn-info">Edit</button> </a>
			<a href="#" class="delete"><button type="button" class="btnbtn-danger">Delete</button></a></td>
		</tr>
		
		<tr id="ROW5" class="tr">
			<td align="center">5</td>
			<td><center>jems patel</td>
			<td><center>jems1234</td>
			<td><center>j9087</td>
			<td><center>30</td>
			<td><center>Jasdan</td>
			<td><center>India</td>
			<td><center><a href="#"><button type="button" class="btnbtn-info">Edit</button> </a>
			<a href="#" class="delete"><button type="button" class="btnbtn-danger">Delete</button></a></td>
		</tr>
	</body>
</html>-->