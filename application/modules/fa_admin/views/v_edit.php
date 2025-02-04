<div class="container">
    
    <?php foreach($edit_data as $key => $e_data) : ?>

        <form method="POST" action="<?= base_url(). 'fa_admin/data_barang/update/'.$e_data->id_barang ?>">
            <label>Nama Barang</label>
            <input type="text" class="form-control mb-3" name="nama_brg" value="<?= $e_data->nama_barang ?>">

            <label>Keterangan</label>
            <textarea class="form-control mb-3" name="keterangan" cols="25" row="10">
                <?= $e_data->keterangan ?>
            </textarea>

            <label>Kategori</label>
            <select class="form-control mb-3" name="kategori">
                    <option><?= $e_data->kategori ?></option>
	        		<option>Pakaian Pria</option>
						<option>Pakaian Wanita</option>
						<option>Pakaian Baby</option>
	        			<option>Accessories Pria</option>
						<option>Accessories Wanita</option>
	        			<option>Shoes Pria</option>
						<option>Shoes Wanita</option>
						<option>Bag Pria</option>
						<option>Bag Wanita</option>
                </select>

                
	        <label>News</label>
	        	<select class="form-control mb-3" name="news">
                    <option>None</option>
	    			<option>Hot Trend</option>
					<option>Best Seller</option>
					<option>Feature</option>	        			
       		</select>
	        	

            <label>Harga</label>
            <input type="text" class="form-control mb-3" name="harga" value="<?= $e_data->harga ?>">

            <label>Stok</label>
            <input type="text" class="form-control mb-3" name="stok" value="<?= $e_data->stok ?>">

            
            <button type="submit" class="btn btn-primary btn-sm">Update</button>
            <button type="reset" class="btn btn-warning btn-sm">Reset</button>
            <a href="<?= base_url('admin/data-barang') ?>"><button class="btn btn-info btn-sm">Back</button></a>
        </form>

    <?php endforeach; ?>
</div>