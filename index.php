<?php
$nbForm = 10 
if ($nbForm > 10) {
	echo "Vous avez atteint la limite maximal de création de comptes bancaire, si vous voulez créer un autre compte vous devez tout d'abord en supprimer un déjà existant";
	else { 
		echo "Vous pouvez créer un compte supplémentaire";

	}

}
?> 

<!DOCTYPE html/>	

	<form method="GET" action="Formulaire.html" name="monFormulaire" id="formulaire" class="monForm">
		<main id="form">
			<div>
				<label for="accountId">ID Bancaire:</label>
				<input type="text" name="nomduCompte" id="accountId" value="" placeholder="Identifiant de votre compte" />
			</div>

			<div>
				<label for="userId">ID Utilisateur:</label>
				<input type="text" name="nomdelutilisateur" id="userId" value="" placeholder="Votre Identifiant" />
			</div>

			<div>
				<label for="accountName">Nom du Compte:</label>
				<input type="text" name="nomduCompte" id="accountName" value="" placeholder="Nom de votre compte" />
			</div>

			<div>
				<label for="accountType">Type de Compte:</label>
					<select name="cars" id="accountType">
					   <option value="Compte SUISSE">Compte Suisse</option>
					   <option value="Courant">Courant</option>
					   <option value="épargne">Epargne</option>
					   <option value="Compte joint">Compte joint</option>
					</select>
			</div>

			<div>
				<label for="accountBalance">Provision du Compte:</label>
				<input type="number" step="0.01" name="provisionCompte" id="accountBalance" value="" placeholder="Provision de votre compte" />
			</div>

			<div>
				<label for="accountCurrency">Devise du compte:</label>
					<input type="radio" name="currency" id="accountCurrency" value="dollard"> USD $
  					<input type="radio" name="currency" id="accountCurrency" value="euro"> EUR €
			</div>

			<div>
				<label for="Add"></label>
				<input class="envoyer " type="submit" id="Add" value="Envoyer" />
			</div>
		</main>
	</form>




	