

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="shop__sidebar">
                        <div class="sidebar__categories">
                            <div class="section-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="categories__accordion">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-heading active">
                                            <a data-toggle="collapse" data-target="#collapseOne">Women</a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Shirts</a></li>
                                                    <li><a href="#">T-shirts</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseTwo">Men</a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Coats</a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Shirts</a></li>
                                                    <li><a href="#">T-shirts</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseThree">Kids</a>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Coats</a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Shirts</a></li>
                                                    <li><a href="#">T-shirts</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseFour">Accessories</a>
                                        </div>
                                        <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Rings</a></li>
                                                    <li><a href="#">bracelets</a></li>
                                                    <li><a href="#">wathces</a></li>
                                                    <li><a href="#">necklaces</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseFive">Cosmetic</a>
                                        </div>
                                        <div id="collapseFive" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Coats</a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Shirts</a></li>
                                                    <li><a href="#">T-shirts</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                
                    <div class="row">
                    <?php 
                        $num_pag = $this->uri->segment(4);
                        // var_dump($num_pag);
                        // exit();
                        foreach($pakaian_wanita as $key => $p_wnt) :
                    ?>
                        <div class="col-lg-4 col-md-6">
                            
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?= base_url(). 'assets/uploads/'. $p_wnt->gambar; ?>">
                                    <div class="label new">New</div>
                                    <ul class="product__hover">
                                        <li><a href="<?= base_url(). 'assets/uploads/'. $p_wnt->gambar; ?>" class="image-popup"><span><i class="fa-solid fa-maximize"></i></span></a></li>
                                        <li><a href="#"><span><i class="fa-solid fa-heart"></span></i></a></li>
                                        <li>
                                            <form action="<?= base_url('add-cart/'.$p_wnt->id_barang) ?>" method="post" style="display: none;" id="form-cart-<?= $p_wnt->id_barang ?>">
                                                <input type="hidden" name="qty" value="1">
                                            </form>
                                            <a href="#" onclick="return confirmSubmit('form-cart-<?= $p_wnt->id_barang ?>');">
                                                <span><i class="fa-solid fa-bag-shopping"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#"><?= $p_wnt->nama_barang ?></a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price"> Rp <?= number_format($p_wnt->harga, 0, ',', '.') ?></div>
                                </div>
                            </div>
                            
                        </div>
                        <?php
                            // if(!empty($this->uri->segment(4))){
                            //     echo $num_pag+=1;
                            // }else{
                            //     echo $key+1;
                            // }
                        ?>
                        <?php endforeach; ?>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <?php 
                        echo $this->data['pagination_links'] = $this->pagination->create_links(); 
                        // var_dump($this->data['pagination_links']);
                        // exit();
                    ?>
    </section>
    <!-- Shop Section End -->

     <!-- Modal -->
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
                
             <form method="POST" action="<?= base_url('add-cart/'. $f_shp->id_barang) ?>">
                
                <input type="number" name="qty" id="<?= $f_shp->id_barang ?>" max="<?= $f_shp->stok ?>" min="1" value="1" class="d-inline"><br><br>
		        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
		        <button type="submit" class="btn btn-primary">Add to Cart</button>

            </form>
	      </div>
	    </div>
	  </div>
	</div>

    <script>
        function confirmSubmit(formId) {
            // Menampilkan alert konfirmasi
            if (confirm('Apakah Anda yakin ingin menambahkan barang ini ke keranjang?')) {
                document.getElementById(formId).submit(); // Kirim form jika "OK" dipilih
                return true;
            }
            return false; // Tidak melakukan apa-apa jika "Cancel" dipilih
        }
    </script>