<?php
        include("header.php");
        include_once 'Database.php';
        $db=new Database('root','','localhost', 'adoptie');
        $conn=$db->getConnection();

        $id="";
        $lname="";
        $fname="";
        $mail="";

        function getPosts()
        {
            $posts=array();
            $posts[0]=$_POST['id'];
            $posts[1]=$_POST['name'];
            $posts[2]=$_POST['prename'];
            $posts[3]=$_POST['mail'];
            return $posts;
        }

        if(isset($_POST['search']))
        {
            $data=getPosts();
            $search_Query="SELECT * FROM utilizatori WHERE id=$data[0]";
            $search_Result=mysqli_query($conn, $search_Query);
            if ($search_Result)
            {
                if(mysqli_num_rows($search_Result))
                {
                    while($row=mysqli_fetch_array($search_Result))
                    {
                        $id=$row['id'];
                        $lname=$row['nume'];
                        $fname=$row['prenume'];
                        $mail=$row['email'];
                    }
                } else 
                {
                    echo 'Nicio inregistrare pentru acest id.';
                }
            } else
            {
                echo 'Rezultat eronat.';
            }
        }

        if(isset($_POST['insert']))
        {
            $data=getPosts();
            $insert_Query="INSERT INTO `utilizatori`(`nume`, `prenume`, `email`) VALUES ('$data[1]','$data[2]','$data[3]')";
            try{
                $insert_Result=mysqli_query($conn, $insert_Query);

                if ($insert_Result)
                {
                    if (mysqli_affected_rows($conn)>0)
                    {
                        echo 'Date inserate cu succes.';
                    } else
                    {
                        echo 'Datele nu au putut fi inserate.';
                    }
                }
            } catch (Exception $ex){
                echo 'Eroare la inserarea in baza de date'.$ex->getMessage();
            }
        }

        if(isset($_POST['delete']))
        {
            $data=getPosts();
            $delete_Query="DELETE FROM `utilizatori` WHERE `id` = $data[0]";
            try{
                $delete_Result=mysqli_query($conn, $delete_Query);

                if ($delete_Result)
                {
                    if (mysqli_affected_rows($conn)>0)
                    {
                        echo 'Date sterse cu succes.';
                    } else
                    {
                        echo 'Datele nu au putut fi sterse.';
                    }
                }
            } catch (Exception $ex){
                echo 'Eroare la stergerea din baza de date'.$ex->getMessage();
            }
        }

        if(isset($_POST['update']))
        {
            $data=getPosts();
            $update_Query="UPDATE `utilizatori` SET `nume`='$data[1]',`prenume`='$data[2]',`email`='$data[3]' WHERE `id` =$data[0]";
            try{
                $update_Result=mysqli_query($conn, $update_Query);

                if ($update_Result)
                {
                    if (mysqli_affected_rows($conn)>0)
                    {
                        echo 'Date actualizate cu succes.';
                    } else
                    {
                        echo 'Datele nu au putut fi actualizate.';
                    }
                }
            } catch (Exception $ex){
                echo 'Eroare la actualizarea din baza de date'.$ex->getMessage();
            }
        }
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>ADOPTA NU CUMPARA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
            <!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Acasa</a></li>
					<li><a href="generic.php">Adoptie</a></li>
					<li><a href="elements.php">Galerie</a></li>
					<li><a href="script_aditional.php">Mai multe</a></li>
				</ul>
			</nav>
            <section id="one" class="wrapper">
				<div class="inner flex flex-3">
                <form action="script_aditional.php" method="post">
                <p>Oferim posibilitatea de a va introduce numele si adresa de email in baza noastra de date pentru a beneficia de noutati gratuite privind campaniile aflate in desfasurare. De asemenea, va oferim posibilitatea de a va actualiza informatiile din baza noastra de date.</p>
                    <input type="number" name="id" placeholder="id" value="<?php echo $id;?>"><br><br>
                    <input type="text" name="name" placeholder="Nume" value="<?php echo $lname;?>"><br><br>
                    <input type="text" name="prename" placeholder="Prenume" value="<?php echo $fname;?>"><br><br>
                    <input type="text" name="mail" placeholder="E-mail" value="<?php echo $mail;?>"><br><br>
                    <div>
                        <input type="submit" name="insert" value="Add">
                        <input type="submit" name="update" value="Update">
                        <input type="submit" name="delete" value="Delete">
                        <input type="submit" name="search" value="Find">
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

