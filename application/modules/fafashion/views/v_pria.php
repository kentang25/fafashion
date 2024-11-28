 <!-- Categories Section Begin -->
    
 <section class="categories">
                <div class="categories__item_2 categories__large__item set-bg"
                data-setbg="<?=base_url() ?>assets/img/category-2.jpg.webp">
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
            <?php foreach($f_pria as $key => $f_pri) : ?>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url(). 'assets/uploads/'. $f_pri->gambar ?>">
                        <div class="label new">New</div>
                        <ul class="product__hover">
                            <li><a href="<?= base_url(). 'assets/uploads/'. $f_pri->gambar ?>" class="image-popup"><span><i class="fa-solid fa-maximize"></i></span></a></li>
                            <li><a href="#"><span><i class="fa-solid fa-heart"></span></i></a></li>
                            <li><a data-toggle="modal" data-target="#modal_barang"><span><i class="fa-solid fa-bag-shopping"></span></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#"><?= $f_pri->nama_barang ?></a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price"><?= $f_pri->harga ?></div>
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
            <?php foreach($a_pria as $key => $a_pri) : ?>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url(). 'assets/uploads/'. $a_pri->gambar ?>">
                        <div class="label new">New</div>
                        <ul class="product__hover">
                            <li><a href="<?= base_url(). 'assets/uploads/'. $a_pri->gambar ?>" class="image-popup"><span><i class="fa-solid fa-maximize"></i></span></a></li>
                            <li><a href="#"><span><i class="fa-solid fa-heart"></span></i></a></li>
                            <li><a data-toggle="modal" data-target="#modal_barang"><span><i class="fa-solid fa-bag-shopping"></span></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#"><?= $a_pri->nama_barang ?></a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price"><?= $a_pri->harga ?></div>
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
            <?php foreach($s_pria as $key => $s_pri) : ?>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url(). 'assets/uploads/'. $s_pri->gambar ?>">
                        <div class="label new">New</div>
                        <ul class="product__hover">
                            <li><a href="<?= base_url(). 'assets/uploads/'. $s_pri->gambar ?>" class="image-popup"><span><i class="fa-solid fa-maximize"></i></span></a></li>
                            <li><a href="#"><span><i class="fa-solid fa-heart"></span></i></a></li>
                            <li><a data-toggle="modal" data-target="#modal_barang"><span><i class="fa-solid fa-bag-shopping"></span></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#"><?= $s_pri->nama_barang ?></a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price"><?= $s_pri->harga ?></div>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Product Section End -->


<!-- Product Wanita Section -->


<!-- Product Wanita Section End -->