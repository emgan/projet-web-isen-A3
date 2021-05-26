<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="./tableau_de_bord.css">
	<title>Document</title>
</head>
<body>
	<h1 class="title">Menu Principal</h1>
	<div class="temperature">
		<button><a href="./temperature.html">Temperature</a></button>
	</div>
	<div class = "lumiere">
		<button> <a href="./lumiere.html">Lumières</a></button>
	</div>
	<div class = "tdb">
		<button> <a href="#">Tableau de Bord</a></button>
	</div>
	<div>
		<fieldset>
			<legend>
				Tableau de bord
				<span>Affichage</span>
			</legend>
			<div>
				<p class= temperatureP>Temperature</p>
				<table class="temperatureTable">
					<tbody>
						<tr>
							<td>Capteur 1 (temp 1)</td>
							<td>Capteur 2 (temp 2)</td>
							<td>Capteur 3 (temp 3)</td>
							<td rowspan="2" class="capteurTemp"> <img src="./images/capteur_temp.png" alt="capteur temperature"> </td>
						</tr>
						<tr>
							<td>10.25</td>
							<td>11.32</td>
							<td>20.45</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="lumiereTable">
				<p>Lumière</p>
				<table>
					<tbody>
						<tr>
							<td>Capteur 1 (lum 1)</td>
							<td>20%</td>
							<td rowspan="3"> <img src="./images/capteur_lum.png" alt="capteur lumière"> </td>
						</tr>
						<tr>
							<td>capteur 2 (lum 2)</td>
							<td>40%</td>
						</tr>
						<tr>
							<td>capteur 3 (lum 3)</td>
							<td>90%</td>
						</tr>
					</tbody>
				</table>
			</div>
			<a href="https://www.isen.fr/" class="logo"><img src="./images/logo_isen.jpg" alt="logo isen"></a>
		</fieldset>
	</div>

</body>
</html>
