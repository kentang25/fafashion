<div class="container">

    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#modal_barang">
    <i class="fas fa-plus fa-sm"></i>Tambah Barang</button>

        <table class="table table-bordered">
            <tr>
                <td>NO</td>
                <td>Nama Barang</td>
                <td>Keterangan</td>
				<td>kategori</td>
                <td colspan="3">Aksi</td>
            </tr>

				<?php
					$d = $this->uri->segment(4);
					foreach($data_barang as $key => $d_brg) :
				?>

			<tr>
				<td>
					<?php
						if(!empty($this->uri->segment(4))){
							echo $d+=1;
						}else{
							echo $key+1;
						}
					?>
				</td>

				<td><?= $d_brg->nama_barang ?></td>
				<td><?= $d_brg->keterangan ?></td>
				<td><?= $d_brg->kategori ?></td>
				<td><?= anchor('admin/data-barang/edit/'. $d_brg->id_barang,'<div class="btn btn-primary"><i class="fa fa-edit"></i></div>' ) ?></td>
				<td><?= anchor('admin/data-barang/delete/'. $d_brg->id_barang,'<div class="btn btn-warning"><i class="fa fa-trash"></i></div>' ) ?></td>
				<td><?= anchor('admin/data-barang/detail/'. $d_brg->id_barang,'<div class="btn btn-info"><i class="fa fa-search"></i></div>' ) ?></td>

			</tr>
			<?php endforeach; ?>
        </table>
		
        <?= $this->pagination->create_links(); ?>
        
    <!-- Modal -->
	<div class="modal fade" id="modal_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA BARANG</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">

	        <?= form_open_multipart('fa_admin/data_barang/insert'); ?>
	        	<div class="form-group">
	        		<label>Nama Barang</label>
	        		<input type="text" name="nama_barang" class="form-control">
	        	</div>
	        	<div class="form-group">
	        		<label>Keterangan</label>
	        		<input type="text" name="keterangan" class="form-control">
	        	</div>
	        	<div class="form-group">
	        		<label>Kategori</label>
	        		<select class="form-control" name="kategori">
	        			<option>Pakaian Pria</option>
	        			<option>Accessories</option>
	        			<option>Shoes</option>
	        			<option>Kaset</option>
	        		</select>
	        	</div>
	        	<div class="form-group">
	        		<label>Harga</label>
	        		<input type="text" name="harga" class="form-control">
	        	</div>
	        	<div class="form-group">
	        		<label>Stok</label>
	        		<input type="text" name="stok" class="form-control">
	        	</div>
	        	<div class="form-group">
	        		<label>Gambar Produk</label>
	        		<input type="file" name="gambar" class="form-control">
	        	</div>

		        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
		        <button type="submit" class="btn btn-primary">Simpan</button>
	        <?= form_close(); ?>
	      </div>
	    </div>
	  </div>
	</div>
</div>