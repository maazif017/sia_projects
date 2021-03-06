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
  <!--<link rel="stylesheet" href="http://code.ionicframework.com/1.3.3/css/ionic.min.css">-->
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/addon.css">
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
  </nav>
  <!-- /.navbar -->

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
            <h1 class="m-0 text-dark"><b>Daftar Kartu Hasil Studi Mahasiswa</b></h1>
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
                      <div class="col-md-6">
                        <div class="card-tools">
                          <div class="input-group input-group-sm">
                            <select class="custom-select" id="">
                              <option selected>Semua Jurusan ...</option>
                              <option value="1">PENDIDIKAN PANCASILA DAN KEWARGANEGARAAN</option>
                              <option value="2">PENDIDIKAN EKONOMI AKUNTANSI</option>
                              <option value="3">PENDIDIKAN BIOLOGI</option>
                              <option value="4">PENDIDIKAN MATEMATIKA</option>
                              <option value="5">PENDIDIKAN BAHASA & SASTRA INDONESIA</option>
                              <option value="6">PENDIDIKAN BAHASA INGGRIS</option>
                              <option value="7">PENDIDIKAN GURU PENDIDIKAN ANAK USIA DINI</option>
                              <option value="8">PENDIDIKAN GURU SEKOLAH DASAR</option>
                              <option value="9">ILMU POLITIK</option>
                              <option value="10">ILMU KOMUNIKASI</option>
                              <option value="11">TEKNIK INDUSTRI</option>
                              <option value="12">TEKNIK INFORMATIKA</option>
                              <option value="13">FAKANLUT</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="card-tools">
                          <div class="input-group input-group-sm">
                            <input type="text"
                                   name="table_search"
                                   class="form-control float-right"
                                   placeholder="Cari NPM">
                            <div class="input-group-append">
                              <button type="submit"
                                      class="btn btn-default">
                                <i class="fas fa-search"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- /.card-header -->
                  <div class="card-body table-responsive">
                      <table class="table table-sm table-bordered table-hover align-text-bottom">
                        <thead class="thead-dark table-head-fixed">
                        <tr>
                          <th>NPM</th>
                          <th>Nama</th>
                          <th>Prodi</th>
                          <th>IPK</th>
                          <th>IP</th>
                          <th>Predikat</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>1412160015</td>
                          <td>Juli Wing Moula</td>
                          <td><span class="tag tag-success">Teknik Informatika</span></td>
                          <td>3.5</td>
                          <td>3</td>
                          <td>Sangat Memuaskan</td>
                          <td>
                            <button class="btn btn-success"
                                    onclick="openForm()"
                                    data-toggle="modal"
                                    data-target="#tampil_new">
                              Tampil
                            </button>
                            <button class="btn btn-warning"
                                    onclick="openForm()"
                                    data-toggle="modal"
                                    data-target="#edit_new">
                              Edit
                            </button>
                            <button class="btn btn-danger"
                                    onclick="openForm()"
                                    data-toggle="modal"
                                    data-target="#hapus_new">
                              Hapus
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>1412160045</td>
                          <td>Budi Achmad</td>
                          <td><span class="tag tag-warning">Teknik Informatika</span></td>
                          <td>2</td>
                          <td>3</td>
                          <td>Sangat Memuaskan</td>
                          <td>
                            <button class="btn btn-success">Tampil</button>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1412160022</td>
                          <td>Achmad Ronal</td>
                          <td><span class="tag tag-warning">Teknik Sipil</span></td>
                          <td>3.5</td>
                          <td>3</td>
                          <td>Sangat Memuaskan</td>
                          <td>
                            <button class="btn btn-success">Tampil</button>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td>1412160011</td>
                          <td>Budi Handuk</td>
                          <td><span class="tag tag-warning">Teknik Desain</span></td>
                          <td>2</td>
                          <td>3</td>
                          <td>Sangat Memuaskan</td>
                          <td>
                            <button class="btn btn-success">Tampil</button>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                          </td>
                        </tr>
                        </tbody>
                      </table>
                  </div>

                </div>
              </div>

              </div>
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
<!-- ./wrapper -->

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

<!--Tampil-->
        <div class="modal fade -modal-lg" id="tampil_new" role="dialog">
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
                <div class="card-body table-responsive">
                  <table class="table table-sm table-bordered table-hover align-text-bottom">
                    <thead class="thead-dark table-head-fixed">
                    <tr>
                      <th>KODE MK</th>
                      <th>Mata Kuliah</th>
                      <th>SKS</th>
                      <th>Nilai</th>
                      <th>huruf</th>
                      <th>Mutu</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1412160015</td>
                      <td>Juli Wing Moula</td>
                      <td><span class="tag tag-success">Teknik Informatika</span></td>
                      <td>3.5</td>
                      <td>A</td>
                      <td>Sangat Memuaskan</td>
                    </tr>
                    <tr>
                      <td>1412160045</td>
                      <td>Budi Achmad</td>
                      <td><span class="tag tag-warning">Teknik Informatika</span></td>
                      <td>2</td>
                      <td>B</td>
                      <td>Memuaskan</td>
                    </tr>
                    <tr>
                      <td>1412160022</td>
                      <td>Achmad Ronal</td>
                      <td><span class="tag tag-warning">Teknik Sipil</span></td>
                      <td>2</td>
                      <td>3</td>
                      <td>Sangat Memuaskan</td>
                    </tr>
                    <tr>
                      <td>1412160011</td>
                      <td>Budi Handuk</td>
                      <td><span class="tag tag-warning">Teknik Desain</span></td>
                      <td>2</td>
                      <td>B</td>
                      <td>Memuaskan</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <div class="card-body table-responsive">
                  <div class="row">
                    <div class="col-md-12">
                      IPK Semester[]:
                    </div>
                    <div class="col-md-12">
                      IP Semester[]:
                    </div>
                    <div class="col-md-12">
                      Predikat:
                    </div>
                  </div>
                </div>
              </div>
              <!--Modal Footer-->
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="PrintForm()">Cetak</button>
              </div>
            </div>
          </div>
        </div>

<!--Edit-->
        <div class="modal fade -modal-lg" id="edit_new" role="dialog">
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
                      <label class="col-form-label"><b>Pemrograman 6</b></label>
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
                <button type="button" class="btn btn-primary submitBtn" onclick="UpdateForm()">PERBARUI</button>
              </div>
            </div>
          </div>
        </div>


        <script>
            function openForm() {
                document.getElementById("js_edit").style.display = "block";
            }

            function closeForm() {
                document.getElementById("js_edit").style.display = "none";
            }
        </script>


<!--Hapus-->
        <div class="modal fade" id="hapus_new" role="dialog">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <!--Modal Header-->
              <div class="modal-header">
                <h4 class="modal-title" id="labelModalKu">Peringatan!</h4>
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <!--Modal Body-->
              <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                  <div class="form-group">
                    <label class="col-form-label">Apakah kamu ingin menghapusnya?</label>
                  </div>
                </form>
              </div>

              <!--Modal Footer-->
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">TIDAK</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="kirimContactForm()">IYA</button>
              </div>
            </div>
          </div>
        </div>


        <script>
            function openForm() {
                document.getElementById("js_hapus").style.display = "block";
            }

            function closeForm() {
                document.getElementById("js_hapus").style.display = "none";
            }
        </script>

</body>
</html>
