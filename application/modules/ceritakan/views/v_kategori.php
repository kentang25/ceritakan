<div class="container">
	<section class="ceritamu mt-5">
	<div class="row">
		<div class="col-md-8">
			<?php foreach($kategori_ceritamu as $key => $ktg){ ?>

				<h3><?= $ktg->tema ?></h3>
				<p id="text"><?= $ktg->cerita ?></p>
				<a href="<?= base_url('detail_ceritamu/'. $ktg->id_cerita) ?>" target="_self" class="btn btn-success mb-4">Read</a>

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
	</div>
	</section>
</div>