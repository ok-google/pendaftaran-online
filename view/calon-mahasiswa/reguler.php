<?php
	require "../../config/koneksi.php";
	require "../../class/Pendaftaran.class.php";

	$pendaftaran = new Pendaftaran(Database::connect());

	if($_SESSION['username'] == NULL){
		header("location:../auth/login.php");
	}

	if($_SESSION['role'] == 'A')
		$pendaftaran->cmhs->id = $_GET['id'];
	else{
		$pendaftaran->id = $_SESSION['id'];
        $pendaftaran->getCalonMahasiswaId();
    }
    
	$result = $pendaftaran->getDetailReguler()->fetchObject();

    
    include "../app/header.php";
?>

<div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#dokumen" data-toggle="tab" class="nav-link">Document</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#biaya" data-toggle="tab" class="nav-link">Biaya</a>
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <h4 class="mb-3">Profil Calon Mahasiswa</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-sm table-hover table-striped">
                                <tbody>                                    
                                    <tr>
                                        <td><strong>Nama</strong></td>
                                        <td><?php echo $result->NAMA_CMHS; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tempat, Tanggal Lahir</strong></td>
                                        <td><?php echo $result->TEMPAT_LAHIR; ?>, <?php echo $result->TGL_LAHIR; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Jenis Kelamin</strong></td>
                                        <td><?php echo $result->JK; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Alamat</strong></td>
                                        <td><?php echo $result->ALAMAT; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Nomer KTP</strong></td>
                                        <td><?php echo $result->NO_KTP; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Nomer KK</strong></td>
                                        <td><?php echo $result->NO_KK; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Nomer Telepon</strong></td>
                                        <td><?php echo $result->NO_TELP; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Asal Sekolah</strong></td>
                                        <td><?php echo $result->ASAL; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Nomer Ijazah</strong></td>
                                        <td><?php echo $result->NO_IJAZAH; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total Nilai UN</strong></td>
                                        <td><?php echo $result->TOTAL_NILAI_UN; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tanggal Daftar</strong></td>
                                        <td><?php echo $result->TGL_DAFTAR; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Jalur</strong></td>
                                        <td><?php echo $result->JALUR; ?></td>
                                    </tr>
                                </tbody>
                            </table>

                            <?php
                                if($result->DATA_CMHS == 'T'){
                                    if($_SESSION['role'] == 'A'){
                                        echo  '<div class="btn-group" role="group" aria-label="Basic example">
                                              <button type="button" class="btn btn-secondary" onclick="verDataYes('.$result->VER_ID.')">Verified</button>
                                              <button type="button" class="btn btn-success">Not Verified</button>
                                        </div>';       
                                    }
                                    else{
                                        echo '<div class="alert alert-info alert-dismissable">
                                                Data Kamu <strong>Belum Di Verifikasi </strong>
                                            </div>';
                                    }

                                  
                                }

                                else{
                                    if($_SESSION['role'] == 'A'){
                                        echo  '<div class="btn-group" role="group" aria-label="Basic example">
                                                  <button type="button" class="btn btn-success">Verified</button>
                                                  <button type="button" class="btn btn-secondary" onclick="verDataYes()">Not Verified</button>
                                                </div>'; 
                                    }
                                        else{
                                        echo '<div class="alert alert-info alert-dismissable">
                                                <strong>Selamat !!! </strong>Data Kamu <strong>Sudah Di Verifikasi </strong>
                                            </div>';
                                    }
                                }
                            ?>
                            
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="dokumen">
                    <table class="table table-hover table-striped">
                        <tbody>                                    
                            <tr>
                                <td><strong>Ijazah</strong></td>
                                <td>
                                   <a href="../<?php echo $result->IJAZAH; ?>" class="btn btn-primary"> Lihat </a>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>KTP</strong></td>
                                <td>
                                   <a href="../<?php echo $result->KTP; ?>" class="btn btn-primary"> Lihat </a>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>KK</strong></td>
                                <td>
                                   <a href="../<?php echo $result->KK; ?>" class="btn btn-primary"> Lihat </a>
                                </td>
                            </tr>
                        </tbody> 
                    </table>
                    <?php
                        if($result->DOKUMEN == 'T'){
                            if($_SESSION['role'] == 'A'){
                                echo  '<div class="btn-group" role="group" aria-label="Basic example">
                                      <button type="button" class="btn btn-secondary">Verified</button>
                                      <button type="button" class="btn btn-success">Not Verified</button>
                                </div>';       
                            }
                            else{
                                echo '<div class="alert alert-info alert-dismissable">
                                        Dokumen Kamu <strong>Belum Di Verifikasi </strong>
                                    </div>';
                            }

                          
                        }

                        else{
                            if($_SESSION['role'] == 'A'){
                                echo  '<div class="btn-group" role="group" aria-label="Basic example">
                                          <button type="button" class="btn btn-success">Verified</button>
                                          <button type="button" class="btn btn-secondary">Not Verified</button>
                                        </div>'; 
                            }
                                else{
                                echo '<div class="alert alert-info alert-dismissable">
                                        Dokumen Kamu <strong>Belum Di Verifikasi </strong>
                                    </div>';
                            }
                        }
                    ?>
                </div>

                <div class="tab-pane" id="biaya">
                    <table class="table table-hover table-striped">
                        <tbody>                                    
                            <tr>
                                <td><strong>Biaya Pembangunan</strong></td>
                                <td>Rp <?php echo number_format($result->BIAYA); ?></td>
                            </tr>
                            <tr>
                                <td><strong>SPP Bulan Pertama</strong></td>
                                <td>Rp <?php echo number_format($result->SPP); ?></td>
                            </tr>
                            <tr>
                                <td><strong>Biaya Pendaftaran</strong></td>
                                <td>Rp 1,000,000</td>
                            </tr>
                            <tr>
                                <td><strong>Biaya HER</strong></td>
                                <td>Rp 300,000</td>
                            </tr>
                            <tr>
                                <td><strong>Biaya Prodi dan Prodik</strong></td>
                                <td>Rp 1,650,000</td>
                            </tr>
                            <tr>
                                <td><strong>Total Keseluruhan</strong></td>
                                <td>Rp <?php echo number_format($result->BIAYA+$result->SPP+1000000+300000+1650000); ?></td>
                            </tr>
                            <div class="alert alert-info alert-dismissable">
                                Pembayaran Minimal (40% Biaya Pembangunan) menjadi <strong>Rp <?php echo number_format(($result->BIAYA*0.4)
                                    +$result->SPP+1000000+300000+1650000); ?> </strong>
                            </div>
                            <div class="alert alert-info alert-dismissable">
                                Pembayaran Penuh (- 10% Biaya Pembangunan) menjadi <strong>Rp <?php echo number_format(($result->BIAYA - 
                                    (0.1*$result->BIAYA))+$result->SPP+1000000+300000+1650000); ?> </strong>
                            </div>
                        </tbody>
                    </table>  
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#transfer">Upload Bukti Transfer</button>
                </div>
            </div>
        </div>
        <div class="col-lg-4 order-lg-1 text-center">
            <img src="../<?php echo $result->FOTO; ?>" class="mx-auto img-fluid img-circle d-block" alt="avatar" width="150" height="150">
            <h6 class="mt-2">Upload a different photo</h6>
            <label class="custom-file">
                <input type="file" id="file" class="custom-file-input">
                <span class="custom-file-control btn btn-primary">Choose file</span>
            </label>
        </div>
    </div>
</div>

<div class="modal fade" id="transfer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Transfer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="google.com" method="POST" id="form-transfer">
            <div class="form-group">
                <label for="exampleInputEmail1">Bukti Transfer</label>
                <input type="file" class="form-control-file" name="transfer">
            </div>

            <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0">Penuh</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="penuh" id="gridRadios1" value="Y">
                      <label class="form-check-label" for="gridRadios1">
                        Ya
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="penuh" id="gridRadios2" value="T">
                      <label class="form-check-label" for="gridRadios2">
                        Tidak
                      </label>
                    </div>
                  </div>
                </div>
            </fieldset>

            <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0">SPP</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="penuh" id="gridRadios1" value="1">
                      <label class="form-check-label" for="gridRadios1">
                        1 Bulan
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="penuh" id="gridRadios2" value="6">
                      <label class="form-check-label" for="gridRadios2">
                        1 Semester
                      </label>
                    </div>
                  </div>
                </div> 
            </fieldset>

            <div class="form-group">
              <label for="validationCustomUsername">Total Transfer</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">Rp</span>
                </div>
                <input type="text" class="form-control" id="transfer" placeholder="Total Transfer" required>
              </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="formSubmit()">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    function formSubmit() {
        document.getElementById("form-transfer").submit();// Form submission
    }

    function verDataYes(){
        window.location = "http://localhost/Pendaftaran-Online/controller/Verifikasi.controller.php?id=<?php echo $result->VER_ID; ?>&data=Y";
    }

    function verDataNo(){
        window.location = "http://www.yoururl.com";
    }    
</script>


<?php
	include "../app/footer.php";
?>