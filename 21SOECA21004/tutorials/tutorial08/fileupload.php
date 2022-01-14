<?php
		echo "<pre>";
		print_r($_FILES);
		echo "<pre>";

		$file=$_FILES['image'];
		$frompath=$file['tmp_name'];
		$topath="upload/".$file['name'];
		
		move_uploaded_file($frompath,$topath);
?>