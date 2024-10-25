<div class="header">
	<div class="container">
		<h1>Ceritakan Sekarang</h1>
	</div>
</div>

<div class="container mt-5">
	<div class="text-3" align="center">
		<h2>Kamu boleh bercerita online disini</h2>
		<p>silahkan cerita disini, kamu bebas bisa cerita apa aja.</p>
	</div>

	<div class="form-group">
		<form method="POST" action="<?= site_url().'ceritakan/cerita/insert' ?>">
			<input type="text" name="nama" class="form-control mt-3" placeholder="Nama">

			<input type="text" name="tema" class="form-control mt-3" placeholder="Tema">

			<select class="form-control mt-3" name="get_kategori">
				<option>--- Kategori ---</option>
			<?php foreach($kategori as $key => $ktg){ ?>
				<option value="<?= $ktg->id_kategori ?>"><?= $ktg->kategori; ?></option>
			<?php } ?>
			</select>
			<input type="email" name="email" class="form-control mt-3" placeholder="Email">

			<textarea cols="20" rows="10" class="form-control mt-3" name="cerita" placeholder="Cerita Kamu"></textarea>

			<input type="submit" value="Kirim" class="btn btn-primary mt-2" id="kirim">
		</form>
	</div>
</div>