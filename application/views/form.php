<link rel="stylesheet" href="<?php echo base_url();?>assets/css/form.css">
<link rel="stylesheet" href="<?php  echo base_url();?>asset/plugins/datepicker/datepicker3.css">
<link rel="stylesheet" media="(min-width: 0px)" href="<?php echo base_url();?>assets/css/form.css">
<script src="<?php  echo base_url();?>asset/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
		$(document).ready(function(){
			$(".wifi-form").hide();
			$(".wifi").css("background","none");
			$(".event-form").hide();
			$(".event").css("background","none")
			$(".booking-form").show();
			$(".booking").css("background","#fff");
			$(".wifi").click(function(){
				$(".booking-form").hide();
				$(".wifi-form").show();
				$(".event-form").hide();
				$(".booking").css("background","none")
				$(".event").css("background","none")
				$(".wifi").css("background","#fff");
			});
			$(".booking").click(function(){
				$(".booking-form").show();
				$(".wifi-form").hide();
				$(".event-form").hide();
				$(".booking").css("background","#fff")
				$(".event").css("background","none")
				$(".wifi").css("background","none");
			});
			$(".event").click(function(){
				$(".booking-form").hide();
				$(".wifi-form").hide();
				$(".event-form").show();
				$(".booking").css("background","none")
				$(".event").css("background","#fff")
				$(".wifi").css("background","none");
			});
			$(".btn").click(function(){
				$(".input").val("");
			})
		});
</script>
<section id="othersservice" class="othersservice">
	<div class="container">
		<div class="main_othersservice_area sections">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-md-offset-3">
					<div>
						<div class="booking">Booking Ruang</div>
						<div class="wifi">Registrasi WiFi</div>
						<div class="event">Registrasi Event</div>
						<div class="booking-form">
							<input type="text" placeholder="Nama Lengkap" class="input"><br>
							<input type="email" placeholder="Email" class="input"><br>
							<input type="text" placeholder="No. HP" class="input"><br>
							<input type="text" placeholder="Asal Komunitas/Instansi" class="input"><br>
							<input type="text" placeholder="Tujuan Peminjaman" class="input"><br>
							<input placeholder="Tanggal Peminjaman" class="input" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date"><br>
							<input placeholder="Waktu Peminjaman" class="input" type="text" onfocus="(this.type='time')" onblur="(this.type='text')" id="time"><br>
							<input type="text" placeholder="Ruang yang Dipinjam" class="input"><br>
							<div class="btn2">Booking Sekarang</div>
						</div>
						<div class="wifi-form">
							<input type="text" placeholder="Nama Lengkap" class="input"><br>
							<input type="email" placeholder="Email" class="input"><br>
							<input type="text" placeholder="No. HP" class="input"><br>
							<input type="text" placeholder="Tujuan Penggunaan" class="input"><br>
							<input placeholder="Tanggal Penggunaan" class="input" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date"><br>
							<input placeholder="Waktu Penggunaan" class="input" type="text" onfocus="(this.type='time')" onblur="(this.type='text')" id="time"><br>
							<div class="btn2">Registrasi WiFi</div>
						</div>
						<div class="event-form">
							<input type="text" placeholder="Nama Lengkap" class="input"><br>
							<input type="email" placeholder="Email" class="input"><br>
							<input type="text" placeholder="No. HP" class="input"><br>
							<input type="text" placeholder="Penyelenggara" class="input"><br>
							<input type="text" placeholder="Jenis Acara" class="input"><br>
							<input type="text" placeholder="Nama Acara" class="input"><br>
							<input placeholder="Tanggal Acara" class="input" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date"><br>
							<input placeholder="Waktu Acara" class="input" type="text" onfocus="(this.type='time')" onblur="(this.type='text')" id="time"><br>
							<input type="text" placeholder="Tempat Acara" class="input"><br>
							<input type="textarea" name="deskripsi" placeholder="Deskripsi Kegiatan" class="input" rows="5"></textarea>
							<input type="text" placeholder="Nama Pembicara" class="input"><br>
							<input type="text" placeholder="Link Pendaftaran" class="input"><br>
							<form action="proses.php" method="post" enctype="multipart/form-data">
								<p>Upload Poster Acara <input type='file' name='foto' accept='image/*' /></p>
							</form>
							<form action="proses.php" method="post" enctype="multipart/form-data">
								<p>Upload Rundown Acara <input type='file' name='foto' accept='image/*' /></p>
							</form>
							<div class="btn2">Publikasi Event</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>