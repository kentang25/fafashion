 <!-- Categories Section Begin -->
    
 <section class="categories">
                <div class="categories__item_2 categories__large__item set-bg"
                data-setbg="<?=base_url() ?>assets/img/category-1.jpg.webp">
                    <div class="categories__text">
                        <h1>Women’s fashion</h1>
                        <p>Sitamet, consectetur adipiscing elit, sed do eiusmod tempor incidid-unt labore
                        edolore magna aliquapendisse ultrices gravida.</p>
                        <a href="#">Shop now</a>
                    </div>            
</section>

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>New product</h4>
                </div>
            </div>
        </div>
        <div class="row property__gallery">
            <?php foreach($f_wanita as $key => $f_wnt) : ?>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url(). 'assets/uploads/'. $f_wnt->gambar ?>">
                        <div class="label new">New</div>
                        <ul class="product__hover">
                            <li><a href="<?= base_url(). 'assets/uploads/'. $f_wnt->gambar ?>" class="image-popup"><span><i class="fa-solid fa-maximize"></i></span></a></li>
                            <li><a href="#"><span><i class="fa-solid fa-heart"></span></i></a></li>
                            <li><a data-toggle="modal" data-target="#modal_barang"><span><i class="fa-solid fa-bag-shopping"></span></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#"><?= $f_wnt->nama_barang ?></a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price"><?= $f_wnt->harga ?></div>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>Accessories</h4>
                </div>
            </div>
        </div>
        <div class="row property__gallery">
            <?php foreach($a_wanita as $key => $a_wnt) : ?>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url(). 'assets/uploads/'. $a_wnt->gambar ?>">
                        <div class="label new">New</div>
                        <ul class="product__hover">
                            <li><a href="<?= base_url(). 'assets/uploads/'. $a_wnt->gambar ?>" class="image-popup"><span><i class="fa-solid fa-maximize"></i></span></a></li>
                            <li><a href="#"><span><i class="fa-solid fa-heart"></span></i></a></li>
                            <li><a data-toggle="modal" data-target="#modal_barang"><span><i class="fa-solid fa-bag-shopping"></span></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#"><?= $a_wnt->nama_barang ?></a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price"><?= $a_wnt->harga ?></div>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>Shoes</h4>
                </div>
            </div>
        </div>
        <div class="row property__gallery">
            <?php foreach($s_wanita as $key => $s_wnt) : ?>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url(). 'assets/uploads/'. $s_wnt->gambar ?>">
                        <div class="label new">New</div>
                        <ul class="product__hover">
                            <li><a href="<?= base_url(). 'assets/uploads/'. $s_wnt->gambar ?>" class="image-popup"><span><i class="fa-solid fa-maximize"></i></span></a></li>
                            <li><a href="#"><span><i class="fa-solid fa-heart"></span></i></a></li>
                            <li><a data-toggle="modal" data-target="#modal_barang"><span><i class="fa-solid fa-bag-shopping"></span></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#"><?= $s_wnt->nama_barang ?></a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price"><?= $s_wnt->harga ?></div>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Product Section End -->


<!-- Modal Wanita Section -->

<div class="modal fade" id="modal_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title" id="exampleModalLabel">FORM CART</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
                
             <form method="POST" action="<?= site_url('fafashion/cart/addCart/'. $f_wnt->id_barang) ?>">
                
                <input type="number" name="qty" id="<?= $f_wnt->id_barang ?>" max="<?= $f_wnt->stok ?>" min="1" value="1" class="d-inline"><br><br>

		        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
		        <button type="submit" class="btn btn-primary">Add to Cart</button>

            </form>
	      </div>
	    </div>
	  </div>
	</div>
    
    <div class="modal fade" id="modal_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title" id="exampleModalLabel">FORM CART</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
                
             <form method="POST" action="<?= site_url('fafashion/cart/addCart/'. $a_wnt->id_barang) ?>">
                
                <input type="number" name="qty" id="<?= $a_wnt->id_barang ?>" max="<?= $a_wnt->stok ?>" min="1" value="1" class="d-inline"><br><br>

		        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
		        <button type="submit" class="btn btn-primary">Add to Cart</button>

            </form>
	      </div>
	    </div>
	  </div>
	</div>

    <div class="modal fade" id="modal_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title" id="exampleModalLabel">FORM CART</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
                
             <form method="POST" action="<?= site_url('fafashion/cart/addCart/'. $s_wnt->id_barang) ?>">
                
                <input type="number" name="qty" id="<?= $s_wnt->id_barang ?>" max="<?= $s_wnt->stok ?>" min="1" value="1" class="d-inline"><br><br>

		        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
		        <button type="submit" class="btn btn-primary">Add to Cart</button>

            </form>
	      </div>
	    </div>
	  </div>
	</div>

<!-- Modal Wanita Section End -->