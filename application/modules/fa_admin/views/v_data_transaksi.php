<div class="container">
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Metode Pembayaran</th>
            <th>Status</th>
            <th>Total Harga</th>
            <th>ID Order</th>
            <th>Created</th>
        </tr>

        <?php
            $no = 0;
            foreach($data_transaksi as $key => $d_trs) :
        ?>

        <tr>
            <td><?= $no+=1 ?></td>
            <td><?= $d_trs->metode_pembayaran ?></td>
            <td><?= $d_trs->status ?></td>
            <td><?= $d_trs->total_harga ?></td>
            <td><?= $d_trs->id_order ?></td>
            <td><?= $d_trs->created_at ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>