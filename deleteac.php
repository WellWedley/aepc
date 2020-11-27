<?php
include('./session.php');
?>
<!DOCTYPE html>
<html>
<head>
</head>

<body>
	<div id="contentbox">
		<script type="text/javascript">
			function countdown() {
				var i = document.getElementById('timecount');
				if (parseInt(i.innerHTML) <= 1) {
					location.href = './index.php';
				}
				i.innerHTML = parseInt(i.innerHTML) - 1;
			}
			setInterval(function() {
				countdown();
			}, 1000);
		</script>
		<?php
		$id = $loggedin_id;
		$sql = "DELETE FROM animateurs WHERE mail_anim='$loggedin_session'";
		$result = mysqli_query($con, $sql);
		if ($result) {
			echo " <div align='center'>";
			echo "Votre compte a été supprimé.";
			echo " <a href='./index.php' >Accueil</a> ";
			echo "</div> ";
		} elseif (!isset($loggedin_session) || $loggedin_session == NULL) {
			header("Location: ./index.php");
		} else {
			echo "Impossible de supprimer ce compte. erreur ";
			printf("Error: %s\n", mysqli_error($con));
		}
		?>
	</div>
</body>

</html>
</div>