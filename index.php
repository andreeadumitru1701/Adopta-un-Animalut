<!DOCTYPE HTML>
<html>
	<head>
		<title>ADOPTA NU CUMPARA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
	
	<?php 	
		include("header.php");
	?>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Acasa</a></li>
					<li><a href="generic.php">Adoptie</a></li>
					<li><a href="elements.php">Galerie</a></li>
					<li><a href="script_aditional.php">Mai multe</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="content">
					<h1>adopta, nu cumpara</h1>
					<p>Suntem o echipa mica de oameni inimosi. Lucram impreuna cu diverse asociatii non-profit in vederea sterilizarii si oferirii de adapost pentru animalele strazii. Daca aveti un colt liber in suflet, va invitam sa adoptati un suflet fara grai, dar cu dragoste pentru oameni.</p>
					<ul class="actions">
						<li><a href="#one" class="button scrolly">Continua</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item left">
						<div>
							<h3>Despre sterilizare</h3>
							<p>Este singura modalitate eficienta de a stopa aparitia necontrolata a animalelor. In plus, reduce riscul aparitiei tipurilor de cancer.</p>
						</div>
						<div>
							<h3>Despre animalele noastre</h3>
							<p>Animalele pe care le salvam provin in totalitate de pe strada sau, la cerere, din casele oamenilor care nu isi mai pot asuma animalul respectiv. <br /> Salvam aceste animale deoarece pe strada nu ar avea nicio sansa.  Incurajam adoptiile de animale, si nu cumpararea acestora, mai ales a celor "de rasa".</p>
						</div>
					</div>
					<div class="flex-item image fit round">
						<img src="images/pic01.jpg" alt="" />
					</div>
					<div class="flex-item right">
						<div>
							<h3>Despre website</h3>
							<p>Acest website a fost creat in vederea extinderii vizibilitatii de catre iubitorii de animale pentru animalele abandonate. Cu ajutorul vostru salvam animalele de pe strada si le oferim sansa la un camin permanent.</p>
						</div>
						<div>
							<h3>Activitatea noastra nu este finantata</h3>
							<p>Nu primim niciun fel de finantare din partea primariilor sau a altor institutii publice.<br /> Singura finantare posibila pentru animalele noastre, este DONATIA iubitorilor de animale in conturile asociatiilor noastre partenere sau a noastra.</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style1 special">
				<div class="inner">
					<h2><em>Motto:</em></h2>
					<figure>
					    <blockquote>
					        "Cel ce hraneste un animal infometat, isi hraneste propriul suflet."
					    </blockquote>
					    <footer>
					        <cite class="author">Charlie Chaplin</cite>
					        <cite class="company">1931</cite>
					    </footer>
					</figure>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/pic02.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Campanie STOP ABANDON</h3>
							<p>Campanie regionala de sensibilizare a maselor cu privire la controlul populatiei de caini fara stapan in tarile din Balcani.</p>
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/pic03.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Campanie de STERILIZARE</h3>
							<p>Asociatiile partenere au in permanenta disponibile locuri pentru campaniile de sterilizari in fiecare localitate.</p>
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/pic04.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Campanie de ATENTIONARE</h3>
							<p>Din cauza COVID-19, multi oameni si-au abandonat animalele in adaposturile publice. Campania are in vedere sanctionarea acestui comportament prin legi existente, in prisma faptului ca noul virus nu poate fi luat de animalele de companie.</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Contacteaza-ne</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">+40 123 456 789</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">adapost_animale@mail.ro</a></li>
						<li><span class="icon fa-map-marker"></span> Ploiesti, Strada Bd. Castanilor nr. 1</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; adopta un animalut <a href="https://www.facebook.com/">FACEBOOK</a>. Imagini <a href="https://www.facebook.com/arcaluinorocel/photos/?ref=page_internal">Asociatia ARCA LUI NOROCEL</a>.
				</div>
				<div>
					<p id="platform">
					</p>
				</div>

				<script type="text/javascript">
        		var plaform = document.getElementById('platform');

        		if(navigator.userAgent.match(/iPhone/i))
        		{
            		platform.textContent="Utilizati iOS.";
        		} 
       			else if (navigator.userAgent.match(/iPad/i))
        		{
            		platform.textContent="Utilizati iPadOS.";
        		}
				else if (screen.width<=699)
				{
					platform.textContent="Utilizati Android.";
				} else if (navigator.userAgent.match(/Mac OS X/i))
				{
					platform.textContent="Utilizati MAC OS X.";
				}
				else
				{
					platform.textContent="Utilizati Windows.";
				}
    		</script>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>