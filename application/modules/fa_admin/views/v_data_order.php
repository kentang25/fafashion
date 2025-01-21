<div class="container">
    <table class="table table-bordered">
        <tr>
            <th>No. </th>
            <th>Total Harga</th>
            <th>Status</th>
            <th>Jumlah</th>
            <th>ID User</th>
            <th>Created</th>
        </tr>

        
            <?php
            
                $no = 0;
                foreach($orders as $key => $odr) :
             
             ?>
                
            
        <tr>
            <td><?= $no+=1 ?></td>
            <td><?= $odr->total_harga ?></td>
            <td><?= $odr->status ?></td>
            <td><?= $odr->jumlah ?></td>
            <td><?= $odr->id_user ?></td>
            <td><?= $odr->created_at ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>