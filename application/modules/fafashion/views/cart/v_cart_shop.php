 <!-- Shop Cart Section Begin -->
 <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>

							<?php 

                            $total = 0;
                            foreach($cart_item as $key => $c_item) : 
                            $subtotal = $c_item->harga * $c_item->jumlah;

                            ?>
                            <tbody>
                                <tr>
                                    <td class="cart__product__item">
									<img src="<?= base_url() ?>assets/img/cp-1.jpg.webp" alt="">
                                        <div class="cart__product__item__title">
                                            <h6><?= $c_item->nama; ?></h6>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price">Rp. <?= number_format($c_item->harga,0,',','.'); ?></td>
                                    <td class="cart__quantity">
									<div class="pro-qty">
                                        <!-- Tambahkan atribut data-id untuk mengidentifikasi barang -->
                                        <form method="POST">
    <input 
        type="number" 
        class="qty-input" 
        data-id-barang="<?= $c_item->id_barang ?>" 
        data-harga="<?= $c_item->harga ?>" 
        value="<?= $c_item->jumlah ?>" 
        min="1" 
        max="10">
    <span class="total-harga" id="total-harga-<?= $c_item->id_barang ?>">
        <?= $c_item->harga * $c_item->jumlah ?>
    </span>
</form>

                                    </div>

                                    </td>
                                    <td class="cart__total"><?= number_format($c_item->harga * 1,0,',','.'); ?></td>
                                    <td class="cart__close"><span class="icon_close"></span></td>
                                </tr>
                            </tbody>
							<?php 
                                // hitung total 
                                $total += $subtotal;
                                endforeach; 
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="#">Continue Shopping</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn update__btn">
                        <a href="<?= base_url('cart/update_qty') ?>"><span class="icon_loading"></span> Update cart</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4 offset-lg-8">
                    <div class="cart__total__procced">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span><?= number_format($total,0,',','.'); ?></span></li>
                            <li>Total <span><?= number_format($total,0,',','.'); ?></span></li>
                        </ul>
                        <a href="<?= base_url('pembayaran/order') ?>" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Cart Section End -->



<script>
$(document).on('input', '.qty-input', function() {
    var qty = $(this).val(); // Ambil nilai qty
    var harga = $(this).data('harga'); // Ambil harga per unit
    var idBarang = $(this).data('id-barang'); // Ambil ID barang

    // Hitung total harga
    var totalHarga = qty * harga;

    // Update total harga di elemen yang sesuai
    $('#total-harga-' + idBarang).text(totalHarga.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' }));

    // Opsional: Kirim data ke server untuk pembaruan
    $.ajax({
        url: '<?= base_url("cart/update_qty") ?>',
        type: 'POST',
        data: { id_barang: idBarang, qty: qty, harga: harga },
        success: function(response) {
            if (response.status = 'success') {
                console.log('Jumlah berhasil diperbarui di server.');
            } else {
                console.log('Gagal memperbarui jumlah di server.');
            }
        },
        error: function() {
            console.error('Kesalahan saat mengirim data ke server.');
        }
    });
});


</script>


