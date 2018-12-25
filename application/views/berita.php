<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/berita.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/sosmed-button.css">
<section id="othersservice" class="othersservice">
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php foreach ($berita->result() as $key) { ?>
                
                <div class="panel panel-default">
                    <div class="panel-body">
                        
                        <div class="post-detail">
                            <h4><?php echo $key->judul;?></h4>
                            <div class="info-meta">
                                <ul class="list-inline">
                                    <li><i class="fa fa-clock-o"></i><?php echo $key->tanggal;?></li>
                                </ul>
                            </div>
                            <hr>
                            <div class="col-md-12">
                                <img src="<?php echo $key->gambar;?>" width="100%" alt="..." style="float:center;padding:5px 10px 5px 10px;" >
                            </div>
                            <div class="col-md-12">
                                <span align="justify"><?php echo $key->isi;?>
                            </p>
                        </span>
                    </div>
                </div>
                
                <div class="row">
                    <br/><br/>
                    <div class="col-md-12">
                    <ul class="list-inline">Share :</ul>
                    <a href="http://scripteden.com/download/eden-ui/" target="_blank" class="btn-social btn-facebook"><i class="fa fa-facebook"></i></a>
                    <a href="http://scripteden.com/download/eden-ui/" target="_blank" class="btn-social btn-google-plus"><i class="fa fa-google-plus"></i></a>
                    <a href="http://scripteden.com/download/eden-ui/" target="_blank" class="btn-social btn-instagram"><i class="fa fa-instagram"></i></a>
                    <a href="http://scripteden.com/download/eden-ui/" target="_blank" class="btn-social btn-linkedin"><i class="fa fa-linkedin"></i></a>
                    <a href="http://scripteden.com/download/eden-ui/" target="_blank" class="btn-social btn-pinterest"><i class="fa fa-pinterest"></i></a>
                    <a href="http://scripteden.com/download/eden-ui/" target="_blank" class="btn-social btn-reddit"><i class="fa fa-reddit"></i></a>
                    <a href="http://scripteden.com/download/eden-ui/" target="_blank" class="btn-social btn-tumblr"><i class="fa fa-tumblr"></i></a>
                    <a href="http://scripteden.com/download/eden-ui/" target="_blank" class="btn-social btn-twitter"><i class="fa fa-twitter"></i></a>
                    <a href="http://scripteden.com/download/eden-ui/" target="_blank" class="btn-social btn-wordpress"><i class="fa fa-wordpress"></i></a>
                    <a href="http://scripteden.com/download/eden-ui/" target="_blank" class="btn-social btn-yahoo"><i class="fa fa-yahoo"></i></a>
                    <a href="http://scripteden.com/download/eden-ui/" target="_blank" class="btn-social btn-youtube"><i class="fa fa-youtube"></i></a>
                    <a href="http://scripteden.com/download/eden-ui/" target="_blank" class="btn-social btn-email"><i class="fa fa-envelope"></i></a>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>
<div class="col-sm-3">
    
    <div class="panel panel-default">
        <div class="panel-heading"><h4 class="text-center">Berita Terbaru</h4></div>
        <div class="panel-body">
            <div class="recent">
                <a href="#"><img class="img-responsive" src="images/sport.jpg" alt="" /></a>
                <div class="info-meta">
                    <ul class="list-inline">
                        <li><i class="fa fa-clock-o"></i> Jan 5, 2016 </a></li>
                    </ul>
                </div>
                <h4>
                <a href="">Pertandingan Basket NBA berlangsung sangat sengit</a>
                </h4>
            </div>
        </div>
    </div>
    
    
    <div class="panel panel-default">
        <div class="panel-heading"><h4 class="text-center">Acara Terbaru</h4></div>
        <div class="panel-body">
            <div class="recent">
                <a href="#"><img class="img-responsive" src="images/sport.jpg" alt="" /></a>
                <div class="info-meta">
                    <ul class="list-inline">
                        <li><i class="fa fa-clock-o"></i> Jan 5, 2016 </a></li>
                    </ul>
                </div>
                <h4>
                <a href="">Pertandingan Basket NBA berlangsung sangat sengit</a>
                </h4>
            </div>
        </div>
    </div>
</div>
</section>