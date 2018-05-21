<?php
	require "../../config/koneksi.php";
	require "../../class/jurusan.class.php";

	if($_SESSION['username'] == NULL){
		header("location:../auth/login.php");	
	}

	
	$jurusan = new Jurusan(Database::connect());

	$result = $jurusan->all();

	include "../app/header.php";
?>

<?php
//	if($_SESSION['role'] == 'A'){
		echo '<a href="tambah" class="btn btn-primary float-right"> Tambah </a>';
//	}
?>
 <div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col"> Kode </th>
      <th scope="col"> Nama </th>
      <th scope="col"> NPM Saat Ini </th>
    </tr>
  </thead>
  <tbody>
	<?php
		while($row = $result->fetchObject()) {
			echo '<tr>';
			echo '<td> '.$row->KODE.'</td>';
			echo '<td>'.$row->NAMA.'</td>';
			echo '<td>'.$row->NPM.'</td>';
			//if($_SESSION['role'] == 'A'){
				echo '<td><a href="edit?id='.$row->ID.'" class="btn btn-primary float-right"> Edit </a></td>';
				echo '<td><a href="../../controller/jurusan.controller.php?id='.$row->ID.'" class="btn btn-warning float-right"> Delete </a></td>';
			//}
			echo '</tr>';
		}
	?>
  </tbody>
</table>
</div>

<?php
	include "../app/footer.php";
?>