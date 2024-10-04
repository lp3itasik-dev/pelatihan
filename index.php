<html lang="en"><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Politeknik LP3I Kampus Tasikmalaya</title>
		<!-- Icon -->
	<link rel="icon" href="https://kuesioner.lp3itasik.com/template/global_assets/images/poltek.png" "="" type="image/x-icon">
	
	<!-- Global stylesheets -->
	<!--link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css"-->
	<link href="icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="https://kuesioner.lp3itasik.com/template/layout_4/LTR/material/full/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="https://kuesioner.lp3itasik.com/template/layout_4/LTR/material/full/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="https://kuesioner.lp3itasik.com/template/layout_4/LTR/material/full/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="https://kuesioner.lp3itasik.com/template/layout_4/LTR/material/full/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="https://kuesioner.lp3itasik.com/template/layout_4/LTR/material/full/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="https://kuesioner.lp3itasik.com/template/global_assets/js/main/jquery.min.js"></script>
	<script src="https://kuesioner.lp3itasik.com/template/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="https://kuesioner.lp3itasik.com/template/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<script src="https://kuesioner.lp3itasik.com/template/global_assets/js/plugins/ui/slinky.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="https://kuesioner.lp3itasik.com/template/global_assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="https://kuesioner.lp3itasik.com/template/global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="https://kuesioner.lp3itasik.com/template/global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="https://kuesioner.lp3itasik.com/template/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="https://kuesioner.lp3itasik.com/template/global_assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="https://kuesioner.lp3itasik.com/template/global_assets/js/plugins/pickers/daterangepicker.js"></script>

	<script src="https://kuesioner.lp3itasik.com/template/layout_4/LTR/material/full/assets/js/app.js"></script>
	<script src="https://kuesioner.lp3itasik.com/template/global_assets/js/demo_pages/dashboard.js"></script>
	<!-- /theme JS files -->

	<!-- Theme JS files -->
	<script src="https://kuesioner.lp3itasik.com/template/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="https://kuesioner.lp3itasik.com/template/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	<script src="https://kuesioner.lp3itasik.com/template/global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="https://kuesioner.lp3itasik.com/template/layout_4/LTR/material/full/assets/js/app.js"></script>
	<script src="https://kuesioner.lp3itasik.com/template/global_assets/js/demo_pages/form_inputs.js"></script>
	<script src="https://kuesioner.lp3itasik.com/template/global_assets/js/demo_pages/form_select2.js"></script>
	<!-- /theme JS files --></head>

<body class="">

	<!-- Main navbar -->
		<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand wmin-0 mr-5">
			<a href="index.html" class="d-inline-block">
				<img style="height:2rem" src="https://kuesioner.lp3itasik.com/template/global_assets/images/logo-politeknik-3.png" alt="">
			</a>
		</div>
	</div>	<!-- /main navbar -->

	<!-- Page header -->
	<div class="page-header">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex" style="padding:1rem 0">
				<h2><i class="icon-2x icon-graduation2 mr-2"></i> <span class="font-weight-semibold">Kuesioner Pelatihan</span></h2>
			</div>
		</div>
	</div>
	<!-- /page header -->
		

	<!-- Page content -->
	<div class="page-content pt-0">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">

				<!-- Dashboard content -->
				<div class="row">
					<div class="col-xl-12 col-sm-12">
                        <?php
                        if(isset($_POST['kirim'])){
                            $koneksi = mysqli_connect("localhost","lp3itasik_wp17","AMp3iS.(65","lp3itasik_beasiswa");
                            $id=date('YmdHis');
    	                    mysqli_query($koneksi,"INSERT INTO `tbl_pelatihan`
    	                    (id,nama,wa,sekolah,`1`,`2`,`3`,`4`) 
    	                    VALUES 
    	                    ('".$id."','".$_POST['nama']."','".$_POST['wa']."','".$_POST['sekolah']."','".$_POST['1']."','".$_POST['2']."','".$_POST['3']."','".$_POST['4']."')");
    	                   
    	                    for($i=1;$i<=3;$i++){
        	                    mysqli_query($koneksi,"INSERT INTO `tbl_pelatihan_detail`
        	                    (id_p,nama,sekolah,hp,kelas) 
        	                    VALUES 
        	                    ('".$id."','".$_POST['nama'.$i]."','".$_POST['sekolah'.$i]."','".$_POST['wa'.$i]."','".$_POST['jurusan'.$i]."')");
    	                    }
    	                    for($i=4;$i<=6;$i++){
    	                        if(isset($_POST['nama'.$i]) && $_POST['sekolah'.$i] && $_POST['wa'.$i] && $_POST['jurusan'.$i]){
            	                    mysqli_query($koneksi,"INSERT INTO `tbl_pelatihan_detail`
            	                    (id_p,nama,sekolah,hp,kelas) 
            	                    VALUES 
            	                    ('".$id."','".$_POST['nama'.$i]."','".$_POST['sekolah'.$i]."','".$_POST['wa'.$i]."','".$_POST['jurusan'.$i]."')");
    	                        }
    	                    }
    	                    echo '
                                <script>
                                window.location.replace("https://pelatihan.politekniklp3i-tasikmalaya.ac.id/terimakasih");
                                </script>
                            ';
                        }
    	                    
                        ?>
						<!-- Form -->
						<div class="card">
							<div class="card-header header-elements-inline">
							</div>
							<div class="card-body">
								<form action="" method="POST">
									<div class="row mb-3">
										<div class="form-group col-lg-4 mb-1">
											<label class="col-form-label">Siapakah Namamu?</label>
											<input name="nama" type="text" class="form-control" placeholder="Siapakah Namamu?" required="">
										</div>
										<div class="form-group col-lg-4 mb-1">
											<label class="col-form-label">No HP/ WA</label>
											<input name="wa" type="text" maxlength="15" class="form-control" placeholder="No HP/ WA" required="">
										</div>
										<div class="form-group col-lg-4 mb-1">
										<label class="col-form-label">Asal Sekolahmu?</label>
											<input name="sekolah" type="text" class="form-control" placeholder="Asal sekolahmu?" required="">
										</div>
										<div class="form-group col-lg-4 mb-1">
										<label class="col-form-label">Materi tersampaikan secara terstruktur sehingga mudah untuk di pahami</label>
											<input type="radio" value="1" name="1"> 1<br>
											<input type="radio" value="2" name="1"> 2<br>
											<input type="radio" value="3" name="1"> 3<br>
											<input type="radio" value="4" name="1"> 4<br>
											<input type="radio" value="5" name="1"> 5<br>
										</div>
										<div class="form-group col-lg-4 mb-1">
										<label class="col-form-label">Materi yang di sampaikan sangat relevan dan sesuai</label>
										    <input type="radio" value="1" name="2"> 1<br>
											<input type="radio" value="2" name="2"> 2<br>
											<input type="radio" value="3" name="2"> 3<br>
											<input type="radio" value="4" name="2"> 4<br>
											<input type="radio" value="5" name="2"> 5<br>
										</div>
										<div class="form-group col-lg-4 mb-1">
										<label class="col-form-label">Materi / Pelatihan apa yang kamu harapkan</label>
											<input name="3" type="text" class="form-control" placeholder="Materi / Pelatihan apa yang kamu harapkan" required="">
										</div>
										<div class="form-group col-lg-4 mb-1">
										<label class="col-form-label">Kesan setelah mengikuti kegiatan ini</label>
											<input name="4" type="text" class="form-control" placeholder="Kesan setelah mengikuti kegiatan ini" required="">
										</div>
									</div>
									<div class="row">
									    <table class="table table-bordered table-responsive p-0">
    									   <tr>
    									        <td >No</td>
    									        <td>Nama Lengkap</td>
    									        <td>Asal Sekolah</td>
    									        <td>NO HP/WA</td>
    									        <td>Jurusan/Kelas</td>
    									   </tr>
    									   <tr>
    									        <td>1 *</td>
    									        <td><input name="nama1" class="form-control" required=""></td>
    									        <td><input name="sekolah1" class="form-control" required=""></td>
    									        <td><input name="wa1" class="form-control" required=""></td>
    									        <td><input name="jurusan1" class="form-control" required=""></td>
    									   </tr>
    									   <tr>
    									        <td>2 *</td>
    									        <td><input name="nama2" class="form-control" required=""></td>
    									        <td><input name="sekolah2" class="form-control" required=""></td>
    									        <td><input name="wa2" class="form-control" required=""></td>
    									        <td><input name="jurusan2" class="form-control" required=""></td>
    									   </tr>
    									   <tr>
    									        <td>3 *</td>
    									        <td><input name="nama3" class="form-control" required=""></td>
    									        <td><input name="sekolah3" class="form-control" required=""></td>
    									        <td><input name="wa3" class="form-control" required=""></td>
    									        <td><input name="jurusan3" class="form-control" required=""></td>
    									   </tr>
    									   <tr>
    									        <td>4</td>
    									        <td><input name="nama4" class="form-control" ></td>
    									        <td><input name="sekolah4" class="form-control" ></td>
    									        <td><input name="wa4" class="form-control" ></td>
    									        <td><input name="jurusan4" class="form-control" ></td>
    									   </tr>
    									   <tr>
    									        <td>5</td>
    									        <td><input name="nama5" class="form-control" ></td>
    									        <td><input name="sekolah5" class="form-control" ></td>
    									        <td><input name="wa5" class="form-control" ></td>
    									        <td><input name="jurusan5" class="form-control" ></td>
    									   </tr>
    									   <tr>
    									        <td>6</td>
    									        <td><input name="nama6" class="form-control" ></td>
    									        <td><input name="sekolah6" class="form-control" ></td>
    									        <td><input name="wa6" class="form-control" ></td>
    									        <td><input name="jurusan6" class="form-control" ></td>
    									   </tr>
    									</table>
									</div>
									<div class="text-right col-lg-12 pt-4">
										<button type="submit" class="btn btn-dark legitRipple" name="kirim" >Submit <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
						</div>
						<!-- /form -->

					</div>
				</div>
				<!-- /dashboard content -->

			</div>
			<!--/content area -->
			
		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


	<!-- Footer -->
		<div class="navbar navbar-expand-lg navbar-light text-dark">
		<div class="text-center d-lg-none w-100">
			<button type="button" class="navbar-toggler">
				© 2020. <a href="#" class="text-dark">POLITEKNIK LP3I KAMPUS TASIKMALAYA</a>
			</button>
		</div>

		<div class="navbar-collapse collapse" id="navbar-footer">
			<span class="navbar-text">
				© 2020. <a href="#" class="text-dark">POLITEKNIK LP3I KAMPUS TASIKMALAYA</a>
			</span>
		</div>
	</div>	<!-- /footer -->


</body></html>