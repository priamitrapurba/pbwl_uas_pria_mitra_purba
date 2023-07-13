<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SI-GURU MKI</title>
	<!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

	<aside>

		<header>
			<img src="{{ asset('image/mitra.jpg') }}" class="brand">
			<div class="user">Admin</div>
		</header>

		<nav>
			<ul>
				<li>
					<a href="/dashboard" style="text-decoration: none !important;">
						<img class="icon" src="{{ asset('image/home.png') }}"  alt="">Home
					</a>
				</li>
				<li>
					<a href="{{ url('/kelas') }}" style="text-decoration: none !important;">
						<img class="icon" src="{{ asset('image/Golongan.png') }}" alt=""> Kelas
					</a>
				</li>
				<li>
					<a href="{{ url('/guru') }}" style="text-decoration: none !important;">
						<img class="icon" src="{{ asset('image/pelanggan.png') }}" alt=""> Guru
					</a>
				</li>
			</ul>
		</nav>

	</aside>

</body>

</html>