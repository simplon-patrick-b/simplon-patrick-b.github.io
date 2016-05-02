<?php
						$message = "Prénom : ".$_POST['prenom']."<br/>Nom : ".$_POST['nom']."<br/>Email : ".$_POST['email']."<br/>Message : ".$_POST['message'];
						mail('patrick.belaire@gmail.com', $_POST['objet'], $message);
						echo "Votre message a bien été envoyé<br/>";
					?>
