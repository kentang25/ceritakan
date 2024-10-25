<div class="header">
	<div class="container">
		<h1>Kontak Kami</h1>
	</div>
</div>

<div class="container mt-5">
	<div class="text-3" align="center">
		<h2>Kontak Kami</h2>
		<p>Apabila kamu mempunyai pertanyaan, kritik, atau saran. Jangan sungkan untuk hubungi kami,
             tentunya kami akan coba untuk membalas secepat kilat.
        </p>
	</div>

	<div class="form-group">
		<form method="POST" action="<?= site_url().'ceritakan/kontak_kami/kontak' ?>">
			<input type="text" name="nama" class="form-control mt-3" placeholder="Nama">

			<input type="email" name="email" class="form-control mt-3" placeholder="Email">

			<textarea cols="20" rows="10" class="form-control mt-3" name="pesan" placeholder="Pesan Kamu"></textarea>

			<input type="submit" value="Kirim" class="btn btn-primary mt-2" id="kirim">
		</form>
	</div>
</div>