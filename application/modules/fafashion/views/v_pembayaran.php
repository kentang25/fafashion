<section class="checkout spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6 class="coupon__link"><span class="icon_tag_alt"></span> <a href="#">Have a coupon?</a> Click
                here to enter your code.</h6>
            </div>
        </div>
        <?php foreach($order_items as $key => $o_item) : ?>
        <form action="<?= site_url('fafashion/pembayaran/transaksi/'. $o_item->id_user) ?>" class="checkout__form">
        <?php endforeach; ?>
            <div class="row">
                <div class="col-lg-8">
                    <h5>Billing detail</h5>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <p>First Name <span>*</span></p>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <p>Last Name <span>*</span></p>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="checkout__form__input">
                                <p>Country <span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__form__input">
                                <p>Address <span>*</span></p>
                                <input type="text" placeholder="Street Address">
                            </div>
                            <div class="checkout__form__input">
                                <p>Town/City <span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__form__input">
                                <p>Country/State <span>*</span></p>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <p>Phone <span>*</span></p>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <p>Email <span>*</span></p>
                                <input type="text">
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-lg-4">
                    <div class="checkout__order">
                        <h5>Your order</h5>
                        <div class="checkout__order__product">
                        
                            <ul>
                                <li>
                                    <span class="top__text">Product</span>
                                    <span class="top__text__right">Total</span>
                                </li>
                            <?php 

                                $total = 0;
                                foreach($order_items as $key => $o_item) :

                                    $subtotal = $o_item->harga * $o_item->jumlah;
                                    $total += $subtotal;

                            ?>
                                <li><?= $o_item->nama ?> <span>Rp. <?= number_format( $subtotal,0,',','.') ?></span></li>
                            <?php endforeach; ?>
                            </ul>
                            
                        </div>
                        <div class="checkout__order__total">
                            <ul>
                                <li>Subtotal <span><?= number_format($total,0,',','.') ?></span></li>
                                <li>Total <span><?= number_format($total,0,',','.') ?></span></li>
                            </ul>
                        </div>
                        <div class="checkout__order__widget">
                            <label for="o-acc">
                                Create an acount?
                                <input type="checkbox" id="o-acc">
                                <span class="checkmark"></span>
                            </label>
                            <p>Create am acount by entering the information below. If you are a returing customer
                            login at the top of the page.</p>
                            <label for="check-payment">
                                Cheque payment
                                <input type="checkbox" id="check-payment">
                                <span class="checkmark"></span>
                            </label>
                            <label for="paypal">
                                PayPal
                                <input type="checkbox" id="paypal">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <button type="submit" class="site-btn">Place order</button>
                    </div>
                </div>
                
            </div>
        </form>
    </div>
</section>
