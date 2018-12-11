<!-- header -->
<div class="header-top">
	<header>
		<div class="top-head ml-lg-auto text-center">
			<div class="row mr-0">

				<div class="col-lg-4">

				</div>
				<!-- fungsi sercing (buka tutup) -->
				<div class="search col-md-2 col-4">
					<div class="overlay overlay-door">
						<button type="button" class="overlay-close">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<form action="#" method="post" class="d-flex">
							<input class="form-control" type="search" placeholder="Cari disini..." required="">
							<button type="submit" class="btn btn-primary submit">
								<i class="fas fa-search"></i>
							</button>
						</form>
					</div>
					<!-- fungsi sercing (buka tutup) -->
				</div>

			</div>
		</div>
		<div class="clearfix"></div>
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="logo">
				<h1>
					<a class="navbar-brand" href="index.php">
					<i class="fa fa-motorcycle"></i>Bengkol</a>
				<!-- fab blue fas white -->
				</h1>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<strong><?php echo $_SESSION['nama'];  ?></strong>
				<span class="navbar-toggler-icon">
					<i class="fas fa-bars"></i>
				</span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-lg-auto text-center">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Beranda
							
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href=# >Antrian</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="toko.php">Toko</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tentang.php">Tentang</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="login.php"><i class="fas fa-lock"></i>Masuk</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="daftar.php"><i class="fas fa-user"></i>Daftar</a>
					</li>
					<button id="trigger-overlay" type="button">
							<i class="fas fa-search"></i>
						</button>

				</ul>

			</div>
		</nav>
	</header>
</div>