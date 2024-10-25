<div class="container">
	<section class="ceritamu mt-5">
	<div class="row">
		<div class="col-md-8">
			<?php foreach($ceritamu as $key => $ctm){ ?>

				<h3><?= $ctm->tema ?></h3>
				<p id="text"><?= $ctm->cerita ?></p>
				<a href="<?= base_url('detail_ceritamu/'. $ctm->id_cerita) ?>" target="_self" class="btn btn-success mb-4">Read</a>

			<?php
			}
			?>
		</div>

			
		<div class="col-md-3 pt-2 ml-5" id="kategori">
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