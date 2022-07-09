<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="crud.css">
	<title>FOCUS CYCLE</title>
</head>

<body>

	<?php 
		if(isset($_POST['submit'])){
			$id = $_POST['id'];
			$nama = $_POST['nama'];
			$no_hp = $_POST['no_hp'];
			$email = $_POST['email'];
			$alamat = $_POST['alamat'];

			require_once("connector.php");

			$query = mysqli_query($conn, "UPDATE crud SET nama = '$nama', no_hp = '$no_hp', email = '$email', alamat = '$alamat' WHERE id=$id");
			
			if($query){
				header('Location:crud.php?status=berhasil&from=edit');
			}
			else{
				header('Location:crud.php?status=gagal&from=edit');
			}

		}
	?>
	<?php
        require_once("connector.php");
        $id = $_GET['id'];
        $query = mysqli_query($conn, "SELECT * FROM crud WHERE id = $id");
        
        $namaEdit = '';
        $nohpEdit = '';
        $emailEdit = '';
        $alamatEdit = '';
        while($data = mysqli_fetch_array($query)){
            $namaEdit = $data['nama'];
            $nohpEdit = $data['no_hp'];
            $emailEdit = $data['email'];
            $alamatEdit = $data['alamat'];
        }
    ?>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="img/focus.png" width="140">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
				aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span
					class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-link" href="index.php">Home</a>
					<a class="nav-link" href="tambah.php">Form</a>
					<a class="nav-link" href="about.html">About Us</a>
				</div>
			</div>
		</div>
	</nav>

	<div class="container3">
		<div class="container4">
			<div class="title">Guest Form</div>
			<div class="content">
				<form action="edit.php" method="POST">
					<input type="hidden" value="<?php echo $_GET['id']?> " name="id">
					<div class="user-details">
						<div class="input-box">
							<span class="details">Nama</span>
							<input type="text" name="nama" placeholder="Enter your name" required value="<?php echo $namaEdit ?>">
						</div>
						<div class="input-box">
							<span class="details">No Hp</span>
							<input type="number" name="no_hp" placeholder="Enter your phone number" required  value="<?php echo $nohpEdit ?>">
						</div>
						<div class="input-box">
							<span class="details">Email</span>
							<input type="text" name="email" placeholder="Enter your Email" required value="<?php echo $emailEdit ?>">
						</div>
						<div class="input-box">
							<span class="details">Alamat</span>
							<input type="text" name="alamat" placeholder="Enter your Address" required value="<?php echo $alamatEdit ?>">
						</div>
					</div>	
					<div class="button2">
						<input type="submit" name="submit" value="Simpan">
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="footer">
		<a href="#">
			<i class="fa fa-facebook-square fa-2x"></i>
		</a>
		<a href="#">
			<i class="fa fa-twitter-square fa-2x"></i>
		</a>
		<a href="#" target="_blank">
			<i class="fa fa-github-square fa-2x"></i>
		</a>
		<p>Focus Cycle production By Arvie Yonismara &copy; 2022.</p>
	</div>

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
		integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
		integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
		crossorigin="anonymous"></script>


</body>

</html>
