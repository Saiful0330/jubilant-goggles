<!DOCTYPE html>
<html>
  <head>
    <title>DATA BUKU PERPUSTAKAAN</title>
	
	<!-- include css file here-->
   <link rel="stylesheet" href="css/style.css"/>
   
	<!-- include JavaScript file here-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/metode.js"></script>
  
  </head>	
  <body>
	<div class="container">
		<div class="main">
	      <form  method="get" action="index.php" id="form">
			<h2>DATA BUKU PERPUSTAKAAN</h2><hr/>		
			
			<label>Judul Buku :</label>
			<input type="text" name="judul" id="judul" />
			
			<label>Nama Pengarang :</label>
			<input type="text" name="nama" id="nama" />
			
			<input type="submit" name="submit" id="submit" value="Submit">
		  </form>
		<?php include "method.php";?>
		</div>
   </div>

  </body>
</html>