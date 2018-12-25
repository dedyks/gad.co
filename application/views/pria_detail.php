
 <!--      <section class="bar background-white""><div class="container text-center"><img src="img/bar.png" alt="" class="img-fluid">
      </div></section> -->
      <div id="heading-breadcrumbs" style="background: url('<?php echo base_url();?>assets/img/texture-bw.png') center center repeat; background-size: cover;">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Pria</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/pria">pria</a></li>
                <li class="breadcrumb-item active">detail</li>
              </ul>
            </div>
          </div>
        </div>
      </div>



      <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-md-3">
              <!-- MENUS AND FILTERS-->
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Kategori</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm category-menu">
                    <li class="nav-item"><a href="shop-category.html" class="nav-link active d-flex align-items-center justify-content-between"><span>Pria </span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Atasan</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Bawahan</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Jas</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Aksesoris</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-between"><span>Wanita</span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Kebaya</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Aksesoris</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-between"><span>Hadiah Wisuda</span></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading d-flex align-items-center justify-content-between">
                  <h3 class="h4 panel-title">Ukuran</h3><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times-circle"></i><span class="d-none d-md-inline-block">Bersihkan</span></a>
                </div>
                <div class="panel-body">
                  <form>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> XS
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> S
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> M
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> L
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> XL
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> XXL
                        </label>
                      </div>
                    </div>
                    <button class="btn btn-sm btn-template-outlined"><i class="fa fa-pencil"></i> Proses</button>
                  </form>
                </div>
              </div>
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading d-flex align-items-center justify-content-between">
                  <h3 class="h4 panel-titlen">Warna</h3><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times-circle"></i><span class="d-none d-md-inline-block">Bersihkan</span></a>
                </div>
                <div class="panel-body">
                  <form>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour white"></span> Putih
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour blue"></span> Biru
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour green"></span>  Hijau
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour yellow"></span>  Kuning
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour red"></span>  Merah
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour black"></span>  Mix
                        </label>
                      </div>
                    </div>
                    <button class="btn btn-sm btn-template-outlined"><i class="fa fa-pencil"></i> Proses</button>
                  </form>
                </div>
              </div>
            </div>
            <!-- LEFT COLUMN _________________________________________________________-->
            <div class="col-lg-9">
              <div id="productMain" class="row">
                <div class="col-sm-6">
                  <?php foreach ($detail as $key ){ ?>
                  <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                    <div> <img src="<?php echo base_url();?>assets/img/Pria/<?php echo $key->gambar; ?>" alt="" class="img-fluid"></div>
                    <div> <img src="<?php echo base_url();?>assets/img/Pria/<?php echo $key->gambar2; ?>" alt="" class="img-fluid"></div>
                    <div> <img src="<?php echo base_url();?>assets/img/Pria/<?php echo $key->gambar3; ?>" alt="" class="img-fluid"></div>
                    <div> <img src="<?php echo base_url();?>assets/img/Pria/<?php echo $key->gambar4; ?>" alt="" class="img-fluid"></div>
                  </div>
                </div>    
                
                <div class="col-sm-6">
                  <form action="<?php echo base_url('index.php/Pria/simpan_order');?>" method="POST" enctype="multipart/form-data" >
                    <p class="price"><?php echo $key->nama; ?></p>
                  
                  <div class="box">
                   
                      <div class="sizes">
                        
                        <h3>Jumlah</h3>
                        <select class="bs-select" name="jumlah">
                          <option name="jumlah" value="1" selected="selected" >1</option>
                          <option name="jumlah" value="2">2</option>
                          <option name="jumlah" value="3">3</option>
                          <option name="jumlah" value="4">4</option>
                        </select>

                      </div>
                      <p class="price"><?php echo $key->harga; ?></p>

                        
                        <input type="hidden" name="nama" value="<?php echo $key->nama; ?>" />
                        <input type="hidden" name="gambar" value="<?php echo $key->gambar; ?>" />
                        <input type="hidden" name="harga" value="<?php echo $key->harga; ?>" />

                      <p class="text-center">
                      <button type="submit" name="submit"><i class="fa fa-shopping-cart"></i>Keranjang</button>
                      
                      </p>
                    </form>
                  </div>
                  <div data-slider-id="1" class="owl-thumbs" style="margin-top: -40px;">
                    <button class="owl-thumb-item"><img src="<?php echo base_url();?>assets/img/Pria/<?php echo $key->gambar2; ?>" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="<?php echo base_url();?>assets/img/Pria/<?php echo $key->gambar3; ?>" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="<?php echo base_url();?>assets/img/Pria/<?php echo $key->gambar4; ?>" alt="" class="img-fluid"></button>
                  </div>
                </div>
              </div>
              <div id="details" class="box mb-4 mt-4">
                <p></p>
                <h4>Detail Produk</h4>
                <p>Warna : Coklat<br>
                Bahan : Brukat, Sutera<br>
                Berat : 600 Gram</p>
                <h4>Perawatan Khusus</h4>
                <ul>
                  <li>Jangan dicuci menggunakan mesin</li>
                  <li>Gunakan air dengan suhu ruangan</li>
                </ul>
                
              </div>
            <?php } ?>
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="box text-uppercase mt-0 mb-small">
                    <h3>Produk Serupa</h3>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="<?php echo base_url();?>assets/img/Pria/p3-1.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Bambang Jas</a></h3>
                      <p class="price">Rp. XXXX,-</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="<?php echo base_url();?>assets/img/Pria/p4-1.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Abu Vulkanik Tux</a></h3>
                      <p class="price">Rp. XXXX,-</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="<?php echo base_url();?>assets/img/Pria/p5-2.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                     <h3 class="h5"><a href="shop-detail.html">Mantul Tuxedo</a></h3>
                      <p class="price">Rp. XXXX,-</p>   
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>