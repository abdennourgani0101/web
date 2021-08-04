<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>mon cv </title>
	
</head>
<body>
 	<form class="inform" action="mon_cv.php" method="post">
 		<center>
	 		<ul>
	 			<!--<label>Nom</label>-->
	 			<h2>Détails personnels</h2><br/> 
	 			<li><input type="text" name="nom" placeholder="Nom complet" required=""/></li>
	 			<!--<label>Adresse-mail</label>-->
	 			<li><input type="email" name="email" placeholder="Adresse-mail" required=""/></li><br/>
	 			<!--<label>Numéro de téléphone</label>-->
	 			<li><input type="nember" name="nember" placeholder="Numéro de téléphone" required=""/></li><br/>
	 			<h3>adress</h3>
	 			<li><input type="text" name="rue" placeholder="rue" required=""/></li>
	 			<li><input type="text" name="ville" placeholder="ville" required=""/></li><br/>
	 			<li><input type="text" name="code" placeholder="code postal" required=""/></li>
	 			<li><input type="text" name="wilaya" placeholder="wilaya" required=""/></li><br/>
	 			<li><input type="date" name="date_n" placeholder="date de naissance" required=""/></li>
	 			<li><input type="text" name="lieux" placeholder="lieu de naissance" required=""/></li><br/>
	 			<li><input type="text" name="sexe" placeholder="sexe" required=""/></li>
	 			<li><input type="text" name="nat" placeholder="nationalite" required=""/></li><br/>
			</ul>
		</center>
		<center>
			<h2>Formation</h2>
			<ul>
				<label>Date de debut de formation</label>
				<li><input type="date" name="date_d" required=""/></li>
				<label>date du fin de formation</label>
				<li><input type="date" name="date_f" required=""/></li><br/>
				<label>nom de formation</label>
				<li><input type="text" name="format1" placeholder="nom de formation" required=""/></li>
				<label>nom de l'ecole</label>
				<li><input type="text" name="uni1" placeholder="nom de l'ecole"/></li>
			</ul>
			<ul>
				<label>Date de debut de formation</label>
				<li><input type="date" name="date_d" required=""/></li>
				<label>date du fin de formation</label>
				<li><input type="date" name="date_f" required=""/></li><br/>
				<label>nom de formation</label>
				<li><input type="text" name="format2" placeholder="nom de formation" required=""/></li>
				<label>nom de l ecole </label>
				<li><input type="text" name="uni2" placeholder="nom de l ecole"/></li><b/>
			</ul>
			<h2>Compétences </h2>
			<ul>
				<li><input type="text" name="comp1"placeholder="Compétence" required=""/></li>
				<li><input type="text" name="niv1" placeholder="le niveau " required=""/></li><br/>
				<li><input type="text" name="comp2"placeholder="Compétence" required=""/></li>
				<li><input type="text" name="niv2" placeholder="le niveau " required=""/></li><br/>
				<li><input type="text" name="comp3"placeholder="Compétence" required=""/></li>
				<li><input type="text" name="niv3" placeholder="le niveau " required=""/></li><br/>
				<li><input type="text" name="comp4"placeholder="Compétence" required=""/></li>
				<li><input type="text" name="niv4" placeholder="le niveau " required=""/></li>
			</ul>
			<h2>Centres intérêt</h2>
			<ul>
				<li><input type="text" name="int1" required=""/></li><br/>
				<li><input type="text" name="int2" required=""/></li><br/>
				<li><input type="text" name="int3" required=""/></li>
			</ul>
			<h2>Stages</h2>
			<ul>
				<label>Date de debut du stage</label>
				<li><input type="date" name="date_ds" required=""/></li>
				<label>date du fin du stage</label>
				<li><input type="date" name="date_fs" required=""/></li><br/>
				<label>nom du societe</label>
				<li><input type="text" name="st" placeholder="nom du societe" required=""/></li>
				<label>le titre de stage</label>
				<li><input type="text" name="sc" placeholder="le titre de stage"/></li><br/>
				<li><input type="submit" value="next"/></li>
			</ul>			
		</center>

 	</form>
</body>

<style>

	form{
	padding-top: 30px ;
	padding-bottom: 35px ;
	}
	.inform input[type = "text"],.inform input[type = "email"],.inform input[type = "nember"],.inform input[type = "date"] {
  border:0;
  background: none;
  display: block;
  margin: 10px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  /*color: white;*/
  border-radius: 24px;
  transition: 0.25s;
}
.inform input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.inform input[type = "email"]:focus{
border-color: #2ecc71;
width: 220px;

}
.inform input[type = "date"]:focus{
border-color: #2ecc71;
width: 220px;

}
.inform input[type = "submit"]:hover{
  background: #2ecc71;
}
.inform input[type = "text"]:focus,.inform input[type = "nember"]:focus{
border-color: #2ecc71;
width: 220px;
}

	.inform ul li {
		text-decoration: none;
		display: inline-block;
	}
	.inform input{
		border-radius: 25px;
		outline: none;
		text-align: center;}

</style>
</html>
