<?php
    @include '../../connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SIA UNIROW | Kartu Hasil Study </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <!--<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../../index.php" class="nav-link">Menu Utama</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Kontak</a>
        </li>
      </ul>
    </nav><!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
    @include '../sidebar.php';
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center">
            <h1 class="m-0 text-dark"><b>Daftar Nama Mahasiswa Selesai Studi</b></h1>
          </div><!-- /.col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <!-- /.row -->
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <form action="belum_input.php" method="get">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                                <select class="custom-select" id="prodi_search" name="prodi_search">
                                                    <option selected value="">Semua Jurusan ...</option>
                                                    <?php
                                                    $query = "select * from prodi";
                                                    $hasil = mysqli_query($koneksi, $query);
                                                    while ($qtabel = mysqli_fetch_assoc($hasil)){
                                                      echo '<option value="'.$qtabel['namaProdi'].'">'.$qtabel['namaProdi'].'</option>';
                                                    } ?>
                                                </select>
                                        </div>
                                        <div class="col-md-5">
                                                <input type="text"
                                                       name="npm_search"
                                                       class="form-control"
                                                       placeholder="Cari NPM">
                                                </button>
                                        </div>
                                        <div class="col-md-1">
                                            <button type="submit"
                                                    class="btn btn-default"
                                                    value="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                  </div><!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-center align-middle">
                        <thead>
                        <tr>
                            <th>NPM</th>
                            <th>Nama</th>
                            <th>Progam Studi</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <?php
                        if (isset($_GET['prodi_search']) && $_GET['prodi_search'] !== 'unknown'){
                            $cari = $_GET['prodi_search'];
                            $query2 = "
                                    SELECT
                                        krs.npm,
                                        mahasiswa.nama,
                                        prodi.namaProdi 
                                    FROM
                                        krs
                                        JOIN mahasiswa ON krs.npm = mahasiswa.npm
                                        JOIN prodi ON mahasiswa.idProdi = prodi.idProdi
                                    WHERE prodi.namaProdi LIKE '%".$cari."%'";
                        }
                        elseif (isset($_GET['npm_search'])){
                            $cari = $_GET['npm_search'];
                            $query2 = "
                                    SELECT
                                        krs.npm,
                                        mahasiswa.nama,
                                        prodi.namaProdi 
                                    FROM
                                        krs
                                        JOIN mahasiswa ON krs.npm = mahasiswa.npm
                                        JOIN prodi ON mahasiswa.idProdi = prodi.idProdi
                                    WHERE mahasiswa.npm LIKE '%".$cari."%'";
                        }
                        else{
                        $query2 = "
                                    SELECT
                                        krs.npm,
                                        mahasiswa.nama,
                                        prodi.namaProdi 
                                    FROM
                                        krs
                                        JOIN mahasiswa ON krs.npm = mahasiswa.npm
                                        JOIN prodi ON mahasiswa.idProdi = prodi.idProdi";
                        }
                        $hasil2 = mysqli_query($koneksi, $query2);
                        while ($qtabel2 = mysqli_fetch_assoc($hasil2)){ ?>
                            <tbody>
                            <tr>
                                <td>
                                    <?php
                                        echo $qtabel2["npm"];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $qtabel2["nama"];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $qtabel2["namaProdi"];
                                    ?>
                                </td>
                                <td>
                                    <button class="btn btn-outline-success"
                                            onclick="openForm()"
                                            data-toggle="modal"
                                            data-target="#input_new">
                                        Input
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        <?php } ?>


                    </table>
                  </div><!-- /.card-body -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../../dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<script src="../../dist/js/demo.js"></script>
<script src="../../dist/js/pages/dashboard.js"></script>

        <div class="modal fade -modal-lg" id="input_new" role="dialog">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <!--Modal Header-->
              <div class="modal-header">
                <h5 class="modal-title" id="labelModalKu">
                  <b>Nama :</b> Juli Wing Moula <br>
                  <b>NPM :</b> 1412160015
                </h5>
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <!--Modal Body-->
              <div class="modal-body">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-4">
                      <label class="col-form-label"><b>Pemrograman 6 </b></label>
                      <label class="col-form-label"><b>[Nilai SKS : 3]</b></label>
                    </div>
                    <div class="col-md-2">
                      <input class="form-control"
                             type="text"
                             name="nilai_tugas"
                             placeholder="Nilai Tugas"
                             required>
                    </div>
                    <div class="col-md-2">
                      <input class="form-control"
                             type="text"
                             name="nilai_absensi"
                             placeholder="Nilai Absensi"
                             required>
                    </div>
                    <div class="col-md-2">
                      <input class="form-control"
                             type="text"
                             name="nilai_uts"
                             placeholder="Nilai UTS"
                             required>
                    </div>
                    <div class="col-md-2">
                      <input class="form-control"
                             type="text"
                             name="nilai_uas"
                             placeholder="Nilai UAS"
                             required>
                    </div>
                  </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label class="col-form-label"><b>Pemrograman 6 </b></label>
                            <label class="col-form-label"><b>[Nilai SKS : 3]</b></label>
                        </div>
                        <div class="col-md-2">
                            <input class="form-control"
                                   type="text"
                                   name="nilai_tugas"
                                   placeholder="Nilai Tugas"
                                   required>
                        </div>
                        <div class="col-md-2">
                            <input class="form-control"
                                   type="text"
                                   name="nilai_absensi"
                                   placeholder="Nilai Absensi"
                                   required>
                        </div>
                        <div class="col-md-2">
                            <input class="form-control"
                                   type="text"
                                   name="nilai_uts"
                                   placeholder="Nilai UTS"
                                   required>
                        </div>
                        <div class="col-md-2">
                            <input class="form-control"
                                   type="text"
                                   name="nilai_uas"
                                   placeholder="Nilai UAS"
                                   required>
                        </div>
                    </div>
                </div>
              </div>
              <!--Modal Footer-->
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="kirimContactForm()">SIMPAN</button>
              </div>
            </div>
          </div>
        </div>

        <script src="script.js"></script>
        <script>
            function openForm() {
                document.getElementById("js_input").style.display = "block";
            }

            function closeForm() {
                document.getElementById("js_input").style.display = "none";
            }
        </script>
</body>
</html>