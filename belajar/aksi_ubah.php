

<?php 
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$id_kategori = $_POST['kategori'];
$id_berita = $_GET['id'];


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
	$stmt = $db->prepare("UPDATE berita SET judul=:judul, isi=:isi, id_kategori=:kategori WHERE id_berita=:id_berita");
	$stmt->bindparam(":id_berita",$id_berita);
	$stmt->bindparam(":kategori",$id_kategori);
	$stmt->bindparam(":isi",$isi);
	$stmt->bindparam(":judul",$judul);
	$stmt->execute();
	echo "Congratulation, U Can change it Dude";
}
catch(PDOException $e) {
	echo $e->getMessage(); 
}

?>