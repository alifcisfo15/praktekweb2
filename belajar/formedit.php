<?php 
$id_berita	= $_GET['id'];
//echo "$id_berita";

$host = 'localhost';
$dbname = 'sisfonews';
$username = 'root';
$password = '0102';
$db = '';
try {
    $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception){
    die("Connection error: " . $exception->getMessage());
}

//mengambil data berita
try {
	$stmt = $db->prepare("SELECT * FROM berita WHERE id_berita=:id");
	$stmt->bindparam(":id",$id_berita);
	$stmt->execute();
	$data = $stmt->fetch();
}
catch(PDOException $e) {
	echo $e->getMessage(); 
}

//mengambil data kategori
try {
	$stmt2 = $db->prepare("SELECT * FROM kategori");
	$stmt2->execute();
	$data2 = $stmt2->fetchAll();
}
catch(PDOException $e) {
	echo $e->getMessage(); 
}




 ?>

 <form action="aksi_ubah.php?id=<?php echo $id_berita?>" method="POST">
 	<div class="col=md-12">
 	<label for="Judul">Judul : </label><br>
 	<input type="text" name="judul" value= "<?php echo $data['judul']?>" ><br>
	</div><br>
	<div class="col-md-12">
	<label for="isi">Isi :</label><br>
	<textarea name="isi"><?php echo $data ['isi']?>
	</textarea>
	</div> <br>
	<div class="col-md-12">
	<label for="kategori">Kategori :</label><br>
		<select name="kategori">
		<?php foreach ($data2 as $dt2): ?>
			
		<br>	<option value="<?php echo $dt2['id_kategori'] ?>" 
		<?php
		if ($dt2['id_kategori']==$data['id_kategori']) {
			echo "selected"; 
			# code...
		}
		?>
		><?php echo $dt2['nama_kategori'] ?></option>
		<?php endforeach ?>
		</select><br>
	</div><br>
	<div>
		<input type="submit" value="Submit">
	</div>
 </form>