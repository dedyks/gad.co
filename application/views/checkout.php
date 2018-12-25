<div id="heading-breadcrumbs">
      <div class="container">
        <div class="row d-flex align-items-center flex-wrap">
          <div class="col-md-7">
            <h1 class="h2">Checkout - Alamat</h1>
          </div>
          <div class="col-md-5">
            <ul class="breadcrumb d-flex justify-content-end">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Checkout - Alamat</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="content">
      <div class="container">
        <div class="row">
          <div id="checkout" class="col-lg-12">
            <div class="box border-bottom-0">
              <form method="POST" action="<?php echo base_url('index.php/Pria/save_post');?>" enctype="multipart/form-data" class="form-horizontal ">
                <ul class="nav nav-pills nav-fill">
                  <li class="nav-item"><a href="<?php echo base_url();?>index.php/checkout" class="nav-link active"> <i class="fa fa-eye"></i><br>Order Review</a></li>
                </ul>
                <div class="content">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="firstname">Nama</label>
                        <input id="firstname" name="nama" type="text" class="form-control" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="company">Alamat</label>
                        <input id="company" name="alamat" type="text" class="form-control" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label for="city">Kecamatan</label>
                        <input id="city" type="text" name="kecamatan" class="form-control" value="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label for="zip">Kode Pos</label>
                        <input id="zip" name="kode_pos" type="text" class="form-control" value="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label for="state">Kab/Kota</label>
                        <select id="state" class="form-control">
                          <option>Pilih Kab/Kota...</option>
                          <option>...</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label for="country">Provinsi</label>
                        <select id="country" class="form-control">
                          <option>Pilih Provinsi...</option>
                          <option>DKI Jakarta</option>
                          <option>DI Yogyakarta</option>
                          <option>Jawa Timur</option>
                          <option>Jawa Tengah</option>
                          <option>Jawa Barat</option>
                          <option>Banten</option>
                          <option>Bali</option>
                          <option>Sumatera Utara</option>
                          <option>Bengkulu</option>
                          <option>Sulawesi Selatan</option>
                          <option>Nusa Tenggara Barat</option>
                          <option>Maluku</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="phone">No. Telepon</label>
                        <input id="phone" name="no_telp" type="text" class="form-control" value="">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="text" class="form-control" value="">
                      </div>
                    </div>
                  </div>
            <!--     </div>
               <ul class="nav nav-pills nav-fill">
                  <li class="nav-item"><a href="<?php echo base_url();?>index.php/checkout" class="nav-link active"> <i class="fa fa-eye"></i><br>Order Review</a></li>
                </ul> -->
                <hr style="border-width: 20px;">
                 <div class="content">
                  <div class="table-responsive">
                    
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="2">Product</th>
                          <th>Jumlah</th>
                           <th></th>
                          <th>Harga/Unit</th>
                          <th>Total</th>

                        </tr>
                      </thead>
                      <?php foreach ($checkout as $key ){ ?>
                      <tbody>
                        <tr>  
                          <td><a href="#"><img src="<?php echo base_url();?>assets/img/Pria/<?php echo $key->Gambar; ?>" alt=""></a></td>
                          <td><a href="#"><?php echo $key->Product; ?></a></td>
                          <td><?php echo $key->Jumlah; ?></td>
                           <th></th>
                          <td><?php echo $key->Harga; ?></td>
                          <td><?php echo $key->Total; ?></td>
                        </tr>
                      </tbody>
                      <?php }?>
                      <tfoot>
                        <tr>
                          <th colspan="5">Total Pembayaran</th>
                          <?php foreach ($totalSemua as $key ){ ?>
                          <th><?php echo $key->total; ?></th>
                          <?php }?>
                        </tr>
                      </tfoot>
                    </table>
                  
                  </div>
                </div>
           
                <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                  <div class="left-col"><a href="<?php echo base_url();?>index.php/wanita_detail" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i>Kembali ke Keranjang</a></div>
                  <div class="right-col">
                    <button type="submit" class="btn btn-template-main">Selesai<i class="fa fa-chevron-right"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>