
<section>
	<h2>Contact</h2>
		<form action="" method="post">
			<label for="nom">Votre Nom</label>
			<input type="text" name="nom" id="nom" placeholder="nom" required aria-required="true" autofocus="true">

			<label for="prenom">Votre Prénom</label>
			<input type="text" name="nom" id="prenom" placeholder="prénom" required aria-required="true">

			<label for="prenom">Votre Mail</label>
			<input type="email" name="mail" id="prenom" placeholder="mail" required aria-required="true">
			<label for="prenom">Votre message</label>
			<input type="submit" value="Envoyer">
			
		</form>
</section>
<?php	
	include_once("./template/footer.inc.php");
?>