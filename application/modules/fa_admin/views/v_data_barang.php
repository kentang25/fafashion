<div class="container">

    <button class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#modal_barang">
    <i class="fas fa-plus fa-sm"></i>Tambah Barang</button>

		<form
            class=" d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100  navbar-search"  method="GET">
            <div class="input-group">
                <input type="text" name="keyword" id="search-bar" class="form-control bg-light border-1 mb-4 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary mb-4" id="btn-search" type="button">
                        <i class="fas fa-search fa-sm "></i>
                    </button>
                </div>
            </div>
        </form>

        <table class="table table-bordered">
			<thead>
				<tr>
					<td>NO</td>
					<td>Nama Barang</td>
					<td>Keterangan</td>
					<td>kategori</td>
					<td colspan="3">Aksi</td>
				</tr>
			</thead>
			<?php
					$d = $this->uri->segment(4);
					foreach($barang as $key => $d_brg) :
				?>
			<tbody id="search-result">
				
			
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
			</tbody>
			<?php endforeach; ?>
        </table>
		
        <?= $pagination ?>
        
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
						<option>Pakaian Wanita</option>
						<option>Pakaian Baby</option>
	        			<option>Accessories Pria</option>
						<option>Accessories Wanita</option>
	        			<option>Shoes Pria</option>
						<option>Shoes Wanita</option>
						<option>Bag Pria</option>
						<option>Bag Wanita</option>
	        		</select>
	        	</div>
				<div class="form-group">
	        		<label>News</label>
	        		<select class="form-control" name="news">
						<option>None</option>
	        			<option>Hot Trend</option>
						<option>Best Seller</option>
						<option>Feature</option>	        			
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

<script>
	$(document).ready(function(){
		$('#search-bar').on('input', function(){
			let keyword = $(this).val();
			console.log(keyword);

			$.ajax({
				url: "<?= base_url('admin/searching') ?>",
				type: "GET",
				data: { keyword: keyword },
				success: function(response){
					$('#search-result').html(response);
				},
				error: function(xhr,error,status){
					console.error("AJAX Error: ", status, error);
				}
			});
		});
	});
</script>