<div class="container">
    
    <div class="table-responsive d-none d-md-block">
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

    <div class ="d-block d-md-none">
        <?php 
            $no = 0;
            foreach($data_transaksi as $key => $d_trs) :
        ?>
        <div class="card mb-3">
            <div class="body-card p-4">
            <h5 class="card-title"><strong>Data Transaksi</strong><?= ++$no ?></h5>
                    <p><strong>Metode Pembayaran</strong><?= $d_trs->metode_pembayaran ?></p>
                    <p><strong>Status</strong><?= $d_trs->status ?></p>
                    <p><strong>Total Harga</strong><?= $d_trs->total_harga ?></p>
                    <p><strong>ID Order</strong><?= $d_trs->id_order ?></p>
                    <p><strong>Created at</strong><?= $d_trs->created_at ?></p>
            </div>
        </div>
        <?php
            endforeach;
            echo $pagination;
        ?>
    </div>
    
    
</div>