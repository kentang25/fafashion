<div class="container">

    <table class="table table-bordered">
        <tr>
            <th>NO.</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>ID Barang</th>
            <th>ID User</th>
        </tr>

    <?php 
        $no = 0;
        foreach($data_cart as $key => $d_cart) :
    ?>
        <tr>
            <td><?= $no+=1 ?></td>
            <td><?= $d_cart->nama ?></td>
            <td><?= $d_cart->harga ?></td>
            <td><?= $d_cart->jumlah ?></td>
            <td><?= $d_cart->id_barang ?></td>
            <td><?= $d_cart->id_user ?></td>
        </tr>
    <?php endforeach; ?>
    </table>

    <?= $pagination; ?>

</div>