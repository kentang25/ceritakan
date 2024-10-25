<div class="header">
	<div class="text">
		<h2>Hallo Kawan kamu nggk sendirian kok,<br>silah kan ceritakan ceritamu disini,<br> entah itu cerita sedih,cerita horor,<br>cerita lucu, atau curhat juga boleh.</h2>
	</div>
</div>

<div class="container mt-5">
	<div class="row">
		<div class="col-md-8">
			<h2>Butuh Pendengar?</h2>
			<p id="dskrp">Kamu ingin bercerita? Butuh pendengar yang baik dan menjaga privasi kamu? kami dari Ceritakan.com siap menjadi pendengar yang baik dan pastinya menjaga privasi kamu. Kami siap mendengarkan semua cerita kamu lagi senang atau lagi sedih, bahkan cerita horor dari kamu. Yuk ceritain aja disini.</p>
		</div>
		<div class="col-md-4" id="cerita">
				<div class="text-2">
					<h1>Ceritain Aja</h1>
					<button>Cerita Sekarang</button>
				</div>
		</div>
	</div>

	<h1 class="text-black mt-5 text-center"> Cerita mereka </h1>

	
		<div class="row mt-4">
			<?php
				foreach($cerita as $key => $crt){
			?>
			<div class="col-md-4 p-3 bg-white">
				<h3><?= $crt->tema ?></h3>
				<p id="text"><?= $crt->cerita ?></p>

				<a href="#" target="_self" class="btn btn-success">Read</a>
			</div>
			<?php
				}
			?>
		</div>

	<div class="flex-container">
		<section class="siap mt-5">
		<h1 class="text-black pt-2 text-center"> Kami siap menjadi pendengar yang baik </h1>
			<div class="icon" align="center">
				<div class="row">
					<div class="col-md-4">
						<img class="mt-3 p-2" src="assets/icons/save-time.png" height="100" width="100">
						<h5>Siap 24 jam</h5>
					</div>
					<div class="col-md-4">
						<img class="mt-3 p-2" src="assets/icons/heart.png" height="100" width="100">
						<h5>Siap memberikan hati kami untukmu</h5>
					</div>
					<div class="col-md-4">
						<img class="mt-3 p-2" src="assets/icons/listening.png" height="100" width="100">
						<h5>Siap dengerin cerita kamu</h5>
					</div>
				</div>

				<p id="dskrp-2" class="mt-4">Ceritakan.com adalah sebuah platform untuk melakukan cerita online, jadi kamu bisa menceritakan cerita kamu kepada kami. Kami janji, kami akan coba menjadi pendengar yang baik untuk semua cerita kamu. Udah siap bercerita?</p>

				<a href="#" target="_self" class="btn btn-sm btn-danger p-2 mb-3">Cerita Sekarang</a>
			</div>
		</section>
	</div>

		

</div>

