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
				<form action="tambah.php" method="POST">
					<div class="user-details">
						<div class="input-box">
							<span class="details">Nama</span>
							<input type="text" name="nama" placeholder="Enter your name" required>
						</div>
						<div class="input-box">
							<span class="details">No Hp</span>
							<input type="number" name="no_hp" placeholder="Enter your phone number" required>
						</div>
						<div class="input-box">
							<span class="details">Email</span>
							<input type="text" name="email" placeholder="Enter your Email" required>
						</div>
						<div class="input-box">
							<span class="details">Alamat</span>
							<input type="text" name="alamat" placeholder="Enter your Address" required>
						</div>
					</div>	
					<div class="button2">
						<input type="submit" name="submit" value="Simpan">
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php if($_GET['status'] == "berhasil") :?>
		<div class="alert alert-primary" role="alert">
		<?php
			if($_GET['from'] == "tambah"){
				echo "Data berhasil disimpan";
			}
			elseif($_GET['from'] == "edit"){
				echo "Data berhasil di edit";
			}
			else{
				echo "Data berhasil di hapus";
			}
		?>
		</div>
	<?php endif; ?>
	
	<?php if($_GET['status'] == "gagal") :?>
		<div class="alert alert-danger" role="alert">
		<?php
			if($_GET['from'] == "tambah"){
				echo "Data gagal disimpan";
			}
			elseif($_GET['from'] == "edit"){
				echo "Data gagal di edit";
			}
			else{
				echo "Data gagal di hapus";
			}
		?>
		</div>

	<?php endif; ?>

	<?php

	require_once("connector.php");
	$query = mysqli_query($conn,"SELECT * FROM crud ORDER BY nama ASC");

	?>

	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-hover table-stripped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama </th>
						<th>No Hp</th>
						<th>Email</th>
						<th>Alamat</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; ?>
					<?php while($row = mysqli_fetch_array($query)) : ?>
					<tr>
						<td><?php echo $no ?></td>
						<td><?php echo $row['nama'] ?></td>
						<td><?php echo $row['no_hp'] ?></td>
						<td><?php echo $row['email'] ?></td>
						<td><?php echo $row['alamat'] ?></td>
						<td>
						<a href="edit.php?id=<?php echo $row ['id']?>" class="btn btn-sm btn-success">Edit</a>
						<a href="hapus.php?id=<?php echo $row ['id']?>" class="btn btn-sm btn-primary">Hapus</a>
						</td>
					</tr>
					<?php $no++?>
					<?php endwhile; ?>
				</tbody>
			</table>
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