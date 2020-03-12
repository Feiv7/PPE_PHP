
<section>
	<h2>Contact</h2>
		<form action="./contact.php" method="post">
			<label for="Cursus"></label>
			<input type="text" name="Cursus" id="Cursus" placeholder="Cursus">
			<label for="nom"></label>
			<input type="text" name="nom" id="nom" placeholder="nom" required aria-required="true" autofocus>
			<label for="prenom"></label>
			<input type="text" name="prenom" id="prenom" placeholder="prénom" required aria-required="true">
			<label for="mail"></label>
			<input type="email" name="mail" id="mail" placeholder="mail" required aria-required="true">
			<label for="telephone"></label>
			<input type="text" name="telephone" id="telephone" placeholder="Telephone" required aria-required="true">
			<label for="commentaire"></label>
			<input type="text" name="commentaire" id="commentaire" placeholder="niveau d'etudes actuel" required aria-required="true">
			<input type="submit" value="Envoyer">
			
		</form>
</section>
<?php	
	include_once("./template/footer.inc.php");
?>