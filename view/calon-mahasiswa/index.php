<?php
	require "../../config/koneksi.php";
	require "../../class/CalonMahasiswa.class.php";

	if($_SESSION['username'] == NULL){
		header("location:../auth/login.php");	
	}

	if($_SESSION['role'] == 'U'){
		header("location:tambah.php");		
	}

	
	$cmhs = new CalonMahasiswa(Database::connect());

	$result = $cmhs->all();

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
      <th scope="col"> No </th>
      <th scope="col"> Nama </th>
      <th scope="col"> Jenis Kelamin </th>
      <th scope="col"> Asal </th>
      <th scope="col"> Jurusan </th>
      <th scope="col"> Jalur </th>
      <th scope="col"> Telepon </th>
    </tr>
  </thead>
	<?php
		while($row = $result->fetchObject()) {
			
			echo '<tr>';
			echo '<td> '.$row->NO_PENDAFTARAN.'</td>';
			echo '<td>'.$row->NAMA_CMHS.'</td>';
			echo '<td>'.$row->JK.'</td>';
			echo '<td>'.$row->ASAL.'</td>';
			echo '<td>'.$row->NAMA_JURUSAN.'</td>';
			echo '<td> '.$row->JALUR.'</td>';
			echo '<td> '.$row->NO_TELP.'</td>';
			
			if($_SESSION['role'] == 'A'){
				echo '<td><a href="reguler?id='.$row->ID.'" class="btn btn-primary float-right"> Detail </a></td>';
			//	echo '<td><a href="edit?id='.$row->ID.'" class="btn btn-primary float-right"> Edit </a></td>';
				echo '<td><a href="../../controller/CalonMahasiswa.controller.php?id='.$row->ID.'" class="btn btn-warning float-right"> Delete </a></td>';
			}
			echo '</tr>';
		}
	?>
  </tbody>
</table>
</div>

<?php
	include "../app/footer.php";
?>