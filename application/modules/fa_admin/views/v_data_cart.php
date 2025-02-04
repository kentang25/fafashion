<div class="container">

        <form
            class=" d-sm-inline-block form-inline mr-auto  my-2 my-md-0 mw-100  navbar-search"  method="GET">
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
    <div class ="table-responsive d-none d-md-block">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NO.</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>ID Barang</th>
                <th>ID User</th>
            </tr>
        </thead>
    <?php 
        $no = 0;
        foreach($data_cart as $key => $d_cart) :
    ?>
    <tbody id="search-result">
        <tr>
            <td><?= $no+=1 ?></td>
            <td><?= $d_cart->nama ?></td>
            <td><?= $d_cart->harga ?></td>
            <td><?= $d_cart->jumlah ?></td>
            <td><?= $d_cart->id_barang ?></td>
            <td><?= $d_cart->id_user ?></td>
        </tr>
    </tbody>
    <?php endforeach; ?>
    </table>

    <?= $pagination; ?>
    </div>

    <div class ="d-block d-md-none">
        <?php 
            $no = 0;
            foreach($data_cart as $key => $d_cart) :
        ?>
        <div class="card mb-3">
            <div class="body-card p-4">
                <h5 class="card-title"><strong>Data Cart </strong><?= ++$no ?></h5>
                <p><strong>Nama :</strong> <?= $d_cart->nama ?></p>
                <p><strong>Harga :</strong> <?= $d_cart->harga ?></p>
                <p><strong>Jumlah :</strong> <?= $d_cart->jumlah ?></p>
                <p><strong>ID Barang :</strong> <?= $d_cart->id_barang ?></p>
                <p><strong>ID User :</strong> <?= $d_cart->id_user ?></p>
            </div>
        </div>
        <?php
            endforeach;
            echo $pagination;
        ?>
    </div>

</div>

<script>
	$(document).ready(function(){
		$('#search-bar').on('input', function(){
			let keyword = $(this).val();
			console.log(keyword);

			$.ajax({
				url: "<?= base_url('admin/searching_cart') ?>",
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