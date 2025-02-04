<div class="container">
    <!-- Tabel untuk perangkat medium ke atas -->
    <div class="table-responsive d-none d-md-block">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                    <th>Jumlah</th>
                    <th>ID User</th>
                    <th>Created</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                foreach ($orders as $key => $odr) :
                ?>
                    <tr>
                        <td><?= ++$no ?></td>
                        <td><?= $odr->total_harga ?></td>
                        <td><?= $odr->status ?></td>
                        <td><?= $odr->jumlah ?></td>
                        <td><?= $odr->id_user ?></td>
                        <td><?= $odr->created_at ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?= $pagination ?>
    </div>

    <!-- Tampilan alternatif untuk perangkat kecil -->
    <div class="d-block d-md-none">
        <?php 
        $no = 0;
        foreach ($orders as $key => $odr) : 
        ?>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title"><strong>Order</strong> <?= ++$no ?></h5>
                    <p><strong>Total Harga:</strong> <?= $odr->total_harga ?></p>
                    <p><strong>Status:</strong> <?= $odr->status ?></p>
                    <p><strong>Jumlah:</strong> <?= $odr->jumlah ?></p>
                    <p><strong>ID User:</strong> <?= $odr->id_user ?></p>
                    <p><strong>Created:</strong> <?= $odr->created_at ?></p>
                </div>
            </div>
        <?php endforeach; ?>
        <?= $pagination ?>
    </div>
</div>
