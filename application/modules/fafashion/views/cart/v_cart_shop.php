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
                                    <td class="cart__price">
                                     <span class="total-harga" id="total-harga-<?= $c_item->id_barang ?>">
                                                <?= number_format($c_item->harga * $c_item->jumlah,0,',','.') ?>
                                     </span>
                                    </td>
                                    <td class="cart__quantity">
									<div class="pro-qty">
                                        <!-- Tambahkan atribut data-id untuk mengidentifikasi barang -->
                                        <form>
                                            <input 
                                                type="number" 
                                                class="qty-input" 
                                                data-id-barang="<?= $c_item->id_barang ?>" 
                                                data-harga="<?= $c_item->harga ?>" 
                                                value="<?= $c_item->jumlah ?>" 
                                                min="1" 
                                                max="10">
                                            
                                        </form>

                                    </div>

                                    </td>
                                    <td class="cart__total"><span class="total-harga" id="total-harga-<?= $c_item->id_barang ?>">
                                                <?= number_format($c_item->harga * $c_item->jumlah,0,',','.') ?>
                                     </span></td>
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

<form id="formx">
    <input type="text" name="r" value="ss">
</form>
<!-- masih ada yang salah -->
<script>
$(document).ready(function() {
    $('.qty-input').on('change', function() {
        // Ambil data dari input
        let inputElement = $(this);
        let idBarang = inputElement.data('id-barang');
        let hargaSatuan = inputElement.data('harga');
        let jumlahBaru = inputElement.val();

        // Hitung total harga baru
        let totalHarga = hargaSatuan * jumlahBaru;

        // Data yang akan dikirim ke server
        let datasend = {
            id_barang: idBarang,
            jumlah: jumlahBaru
        };
        // console.log(datasend);

        // Kirim data ke server dengan AJAX
        $.ajax({
            url: '<?= base_url("cart/update_qty") ?>', // Ganti dengan URL yang sesuai
            type: 'POST',
            dataType: 'json',
            // headers: {
            //     "Accept" : "application/ld+json",
            //     "Content-Type": "text/json; charset=utf-8"
            // },
            data: datasend,
            success: function(response) {
                if (response.status === 'success') {
                    console.log('Kuantitas berhasil diperbarui di server.');
                    
                    // Perbarui total harga di UI
                    inputElement.closest('tr').find('.total-harga').text('Rp ' + totalHarga.toLocaleString());
                } else {
                    console.error('Gagal memperbarui kuantitas.');
                }
            },
            error: function(xhr, status, error) {
                console.error('Kesalahan saat mengirim data ke server:', error);
                console.log(xhr.responseText);
            }
        });
    });
});




</script>


