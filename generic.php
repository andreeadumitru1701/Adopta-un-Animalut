<!DOCTYPE HTML>
<html>
	<head>
		<title>Adoptie - ADOPTA NU CUMPARA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

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
				<ul class="actions vertical">
					<li><a href="#" class="button fit">Login</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>Adoptia</h1>
						<p>Este un act de responsabilitate, atat din partea unei asociatii, cat si a persoanei care preia animalul.</p>
					</header>
					<div class="image fit">
						<img src="images/pic05.jpg" alt="" />
					</div>
					<p>Aceasta se realizeaza prin semnarea unui contract prin care noul stapan se obliga sa aiba grija de animalut, sa nu il abandoneze si sa ii asigure un camin potrivit. Spre exemplu, nu se accepta tinerea in lant a cainilor. Nu se dau animale in adoptie catre minori sau persoane care nu doresc sa se legitimeze si sa ne ofere datele personale si de contact. Astfel, incercam sa ne asiguram ca animalele vor ajunge sa fie iubite si ingrijite asa cum au nevoie. </p>
					<p> Adoptia la distanta - daca nu poti adopta un animal si nu il poti gazdui temporar din diferite motive, ne poti ajuta cu transferarea unei sume lunare care va fi folosita exclusiv pentru cainele sau pisica aleasa de tine. Banii vor fi folositi pentru deparazitarile necesare, pentru vaccinuri si hrana. Reprezentatii asociatiilor continua sa aibe grija de animalute asa cum s-a intamplat si inaintea adoptiei la distanta, doar ca dupa adoptie, asociatia respectiva primeste un ajutor de nadejde.</p>
					<p>Adoptii internationale - se urmeaza aceiasi pasi ca si in Romania, dar totul se intampla cu ajutorul voluntarilor din respectivul oras unde pleaca patrupedul. Cetatenii straini sunt mai deschisi la adoptii si nu tin cont neaparat de varsta animalului, ei adopta si animale cu nevoi speciale in comparatie cu cetatenii Romaniei care vor in procent de 90% doar pui sanatosi. </p>

        <!-- Form -->
            <h3>Formular pentru adoptie/sterilizare</h3>
				<form method="post" action="transfer_catre_bd.php">
				<div class="row uniform">
				<div class="6u 12u$(xsmall)">
				<input type="text" name="nume" id="nume" value="" placeholder="Nume" />
				</div>
				<div class="6u$ 12u$(xsmall)">
				<input type="text" name="prenume" id="prenume" value="" placeholder="Prenume" />
				</div>
				<!-- Break -->
                    <p>*Pentru optiunea sterilizare se va selecta doar caine/pisica si mediul rural/urban.</p>
				<div class="12u$">
				<div class="select-wrapper">
						<select name="category" id="category">
                            <option value="">- Categorie -</option>
                            <option value="Adoptie">Adoptie</option>
                            <option value="Sterilizare">Sterilizare</option>
					   </select>
				</div>
				</div>
				<!-- Break -->
				<div class="6u 12u$(small)">
						<input type="radio" id="caine" name="caine_pisica" value="Caine">
						<label for="caine">Pentru caine</label>
						<input type="radio" id="pisica" name="caine_pisica" value="Pisica">
						<label for="pisica">Pentru pisica</label>
				</div>
					<!-- Break -->
					<div class="6u 12u$(small)">
						<input type="radio" id="rural" name="rural_urban" value="Rural">
						<label for="rural">Locuiesc in mediul rural</label>
						<input type="radio" id="urban" name="rural_urban" value="Urban"> 
						<label for="urban">Locuiesc in mediul urban</label>
					</div>
                    <p>In ce zona locuiti?</p>
                    <div class="6u 12u$(small)">
						<input type="radio" id="casa" name="casa_apartament" value="Casa">
						<label for="casa">La casa</label>
					</div>
					<div class="6u$ 12u$(small)">
						<input type="radio" id="apartament" name="casa_apartament" value="Apartament">
						<label for="apartament">In apartament</label>
					</div>
                    <p>Ce fel de mediu social exista in casa dvs.?</p>
                    <div class="12u$">
				<div class="select-wrapper">
						<select name="category1" id="category1">
                            <option value="">- Mediu social -</option>
                            <option value="Un mediu linistit in general">Un mediu linistit in general</option>
                            <option value="Un mediu linistit uneori">Un mediu linistit uneori</option>
                            <option value="Un mediu agitat in general">Un mediu agitat in general</option>
                            <option value="Un mediu agitat uneori">Un mediu agitat uneori</option>
                            <option value="Un mediu galagios (copii)">Un mediu galagios (copii)</option>
					   </select>
				</div>
				</div>
                    <p>Unde planuiti sa cresteti patrupedul?</p>
                    <div class="12u$">
				    <div class="select-wrapper">
						<select name="category2" id="category2">
                            <option value="">- Alegeti o optiune -</option>
                            <option value="In interior (cu plimbari in exterior)">In interior (cu plimbari in exterior)</option>
                            <option value="Doar in interior">Doar in interior</option>
                            <option value="Afara dar si cu acces in interior">Afara dar si cu acces in interior</option>
                            <option value="In interior dar si cu acces afara">In interior dar si cu acces afara</option>
                            <option value="Doar afara">Doar afara</option>
                            <option value="Afara, legat">Afara, legat</option>
					   </select>
				</div>
				</div>
					<!-- Break -->
					<div class="12u$">
				<textarea name="mesaj" id="mesaj" placeholder="Introduceti orice detalii suplimentare despre care doriti sa luam la cunostiinta." rows="6"></textarea>
				</div>
				<!-- Break -->
				<div class="12u$">
					<ul class="actions">
					<li><input type="submit" value="Trimite" /></li>
					<li><input type="reset" value="Reset" class="alt" /></li>
				</ul>
				</div>
					</div>
				</form>
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
			</footer>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>