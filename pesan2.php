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
	<link rel="stylesheet" href="form.css">
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
		<h1 class="text-dark fw-bold mb-4"><span class="fa fa-shopping-cart me-1"></span>Keranjang Belanja</h1>
		<?php
            include "connector.php";
            $id_barang = "";

            if(isset($_GET['id_barang'])){
                $id_barang = $_GET['id_barang'];
                $sql = "SELECT * FROM barang WHERE id_barang=".$_GET['id_barang'];
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '
                                <div class="col-md-12 d-flex flex-column justify-content-center">
                                    <div id="nama">
                                        <h1 class="display-6 fw-bold">'.$row['nm_barang'].'</h1>
                                    </div>
                                <hr>
                                <div class="col-md-12 d-flex justify-content-center mx-auto">
                                    <div class="cart_logo">
                                        <div class="gambar">
                                            <img src="img/'.$row['ft_barang'].'" class="cart_img">
                                        </div>
                                    </div>
                                </div>
                                <div id="harga">
                                    <h2 class="my-4">'.rupiah($row['harga']).'</h2>
                                </div>
                                <div id="deskripsi">
                                    <p class="lead">'.$row['deskripsi'].'</p>
                                </div>
                        ';
                    }
                } 
                else {
                    echo "0 results";
                }
            }

            if(isset($_GET['submit'])){
                $sql = "INSERT INTO pesanan (id_barang, nama, hp, jumlah, alamat)
                VALUES ('".$_GET['id_barang']."', '".$_GET['nama']."', '".$_GET['hp']."', '".$_GET['jumlah']."', '".$_GET['alamat']."')";

                if ($conn->query($sql) === TRUE) {
                echo '
                <div class="report">
                    Pesanan telah diterima. Terimakasih telah berbelanja :)
                </div>';
                } 
                else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
            } 
            ?>
			
			<div class="content">
				<form action="pesan2.php">
					<div class="user-details">
						<div class="input-box">
							<span class="details">Nama</span>
							<input type="hidden" id="id_barang" name="id_barang" class="form-control border-dark" value="<?php echo $id_barang ?>">
							<input type="text"  id="form_nama" name="nama" placeholder="Enter your name" required>
						</div>
						<div class="input-box">
							<span class="details">No Hp</span>
							<input type="number"  id="form_hp" name="hp" placeholder="Enter your phone number" required>
						</div>
						<div class="input-box">
							<span class="details">Alamat</span>
							<input type="text" id="form_alamat" name="alamat" placeholder="Enter your Address" required>
						</div>
						<div class="input-box">
                        <span class="details">Jumlah</span>
                        <select class="form-control border-dark" id="form_jumlah" name="jumlah">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
					</div>	
					<div class="button2">
						<input type="submit" name="submit" value="Beli Sekarang" onclick="beliSekarang(); return false">
					</div>
				</form>
			</div>
		</div>
		</div>
	</div>

	<script>
		function beliSekarang() {
			if (document.getElementById("form_nama").value == "") {
				alert("Nama kosong!");
			} else if (document.getElementById("form_hp").value == "") {
				alert("Nomor HP kosong!");
			} else if (document.getElementById("form_alamat").value == "") {
				alert("Alamat kosong!");
			} else if (document.getElementById("form_cek").checked == false) {
				alert("Anda tidak setuju dengan syarat dan ketentuan");
			} else {
				form.submit();
			}
		}
    </script>

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