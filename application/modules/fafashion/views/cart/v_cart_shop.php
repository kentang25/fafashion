<!-- Shop Cart Section Begin -->
<section class="shop-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="shop__cart__table">
                <div class="table-responsive d-none d-md-block">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $total = 0;
                                foreach($cart_item as $c_item): 
                                
                                $subtotal = $c_item->harga * $c_item->jumlah;
                                // var_dump($subtotal);
                            ?>
                            <tr data-id-barang="<?= $c_item->id_barang ?>">
                                <td class="cart__product__item">
                                    <img src="<?= base_url() ?>assets/img/cp-1.jpg.webp" alt="" style="max-width: 50px;">
                                    <div><?= $c_item->nama; ?></div>
                                </td>
                                <td class="cart__price">Rp.<?= number_format($c_item->harga, 0, ',', '.') ?></td>
                                 <td class="cart__quantity text-center pr-3">
                                    <div class="pro-qty">
                                        <form>
                                            <input 
                                                type="number" 
                                                class="qty-input form-control" 
                                                data-id-barang="<?= $c_item->id_barang ?>" 
                                                data-harga="<?= $c_item->harga ?>" 
                                                value="<?= $c_item->jumlah ?>" 
                                                min="1" 
                                                max="10">
                                        </form>
                                    </div>
                                </td>
                                <td class="cart__total">
                                    <span id="total-harga-desktop-<?= $c_item->id_barang ?>">
                                        Rp. <?= number_format($subtotal, 0, ',', '.') ?>
                                    </span>
                                </td>
                                <td><span class="icon_close"></span></td>
                            </tr>
                            <?php
                                $total += $subtotal;
                                // var_dump($total);
                                endforeach; 
                            ?>
                        </tbody>
                    </table>
                </div>


                <!-- Mobile Layout -->
                <div class="d-md-none">
                    <?php 
                        $total = 0;
                        foreach($cart_item as $c_item): 
                        
                        $subtotal = $c_item->jumlah * $c_item->harga;
                        // var_dump($subtotal);
                    ?>
                    <div class="card mb-3" data-id-barang="<?= $c_item->id_barang ?>">
                        <div class="card-body">
                            <h6><?= $c_item->nama; ?></h6>
                            <p>Price: Rp.<?= number_format($c_item->harga, 0, ',', '.') ?></p>
                            <p>Quantity: 
                                <input 
                                    type="number" 
                                    class="qty-input form-control" 
                                    data-id-barang="<?= $c_item->id_barang ?>" 
                                    data-harga="<?= $c_item->harga ?>" 
                                    value="<?= $c_item->jumlah ?>" 
                                    min="1">
                            </p>
                            <p>Total: 
                                <span id="total-harga-mobile-<?= $c_item->id_barang ?>">
                                    Rp. <?= number_format($subtotal, 0, ',', '.') ?>
                                </span>
                            </p>
                        </div>
                    </div>
                    <?php 
                        $total += $subtotal;
                        endforeach;
                    ?>
                </div>

            </div>


            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="cart__btn">
                    <a href="#" class="btn btn-secondary btn-sm">Continue Shopping</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 text-end">
                <div class="cart__btn update__btn">
                    <a href="<?= base_url('cart/update_qty') ?>" class="btn btn-primary btn-sm">
                        <span class="icon_loading"></span> Update cart
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-lg-6 offset-lg-6">
                <div class="cart__total__procced">
                    <h6>Cart total</h6>
                    <ul class="list-unstyled">
                        <li>Subtotal: <span class="subtotal-span"><?= number_format($total, 0, ',', '.'); ?></span></li>
                        <li>Total: <span class="total-span"><?= number_format($total, 0, ',', '.'); ?></span></li>
                    </ul>
                    <a href="<?= base_url('pembayaran/order') ?>" class="btn btn-success btn-sm w-100">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Cart Section End -->


<!-- <form id="formx">
    <input type="text" name="r" value="ss">
</form> -->
<!-- masih ada yang salah -->
<script>
$(document).ready(function () {
    $('.qty-input').on('change', function () {
        // Ambil elemen input yang diubah
        let inputElement = $(this);
        let idBarang = inputElement.data('id-barang');
        let hargaSatuan = inputElement.data('harga');
        let jumlahBaru = parseInt(inputElement.val());

        // Validasi jumlah
        if (jumlahBaru < 1) {
            alert('Quantity tidak boleh kurang dari 1.');
            inputElement.val(1);
            jumlahBaru = 1;
        }

        // Hitung total harga baru
        let totalHarga = hargaSatuan * jumlahBaru;
        // console.log(totalHarga);

        // Data untuk dikirim ke server
        let datasend = {
            id_barang: idBarang,
            jumlah: jumlahBaru,
            harga: totalHarga
        };
        console.log(datasend);

        // Kirim data ke server
        $.ajax({
            url: '<?= base_url("cart/update_qty") ?>',
            type: 'POST',
            dataType: 'json',
            data: datasend,
            success: function (response) {
                if (response.status === 'success') {
                    console.log('Kuantitas berhasil diperbarui.');

                    // Perbarui subtotal untuk item ini di UI desktop
                    $('#total-harga-desktop-' + idBarang).text('Rp ' + totalHarga.toLocaleString());

                    // Perbarui subtotal untuk item ini di UI mobile (jika ada)
                    $('#total-harga-mobile-' + idBarang).text('Rp ' + totalHarga.toLocaleString());

                    // Hitung ulang total keseluruhan
                    let totalKeseluruhan = 0;
                    $('.cart__total span').each(function () {
                        // Ambil angka dari setiap subtotal, konversi ke integer
                        let subtotal = parseInt($(this).text().replace(/[^0-9]/g, ''));
                        totalKeseluruhan += subtotal;
                    });

                    // Perbarui total keseluruhan di elemen <ul>
                    $('.list-unstyled .subtotal-span').text('Rp ' + totalKeseluruhan.toLocaleString());
                    $('.list-unstyled .total-span').text('Rp ' + totalKeseluruhan.toLocaleString());

                } else {
                    console.error('Gagal memperbarui kuantitas.');
                }
            },
            error: function (xhr, status, error) {
                console.error('Kesalahan saat mengirim data:', error);
            }
        });
    });
});






</script>


