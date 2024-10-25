<div class="container">
	<section class="ceritamu mt-5">
	<div class="row">
		<div class="col-md-8">
			<?php foreach($detail_ceritamu as $key => $dtl_crt){ ?>

				<h3><?= $dtl_crt->tema ?></h3>
				<p><?= $dtl_crt->cerita ?></p>
				

			<?php
			}
			?>
		</div>

		<div id="kategori" class="col-md-3 pt-2 ml-5">
			<h3 style="text-decoration: underline;">Kategori</h3>
			<?php foreach($kategori as $key => $ktg){ ?>
			<ul>
				<li class="mt-2"><a href="<?= base_url('kategori/'.$ktg->id_kategori) ?>"><?= $ktg->kategori ?></a></li>
				
			</ul>
			<?php } ?>
	</div>
	</section>
</div>