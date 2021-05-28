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
		<a href="./temperature.html">Temperature</a>
	</div>
	<div class = "lumiere">
		<a href="./lumiere.html">Lumières</a>
	</div>
	<div class = "tdb">
		<a href="#">Tableau de Bord</a>
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
							<td>
								<?php echo file_get_contents ('./temp1.txt'); ?>
							</td>
							<td>
								<?php echo file_get_contents ('./temp2.txt'); ?>
							</td>
							<td>
								<?php echo file_get_contents ('./temp3.txt'); ?>
							</td>
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
							<td class="secondRow">
								<div class="progress-background">
									<div class="progress-bar" style="width: <?php echo file_get_contents ('./lum1.txt');?>%;">
										<span><?php echo file_get_contents ('./lum1.txt'); ?> %</span>
									</div>
								</div>

								<!-- <progress max="100" value=<?php echo file_get_contents ('./lum1.txt'); ?>
																		data-label =<?php echo file_get_contents ('./lum1.txt'); ?>+"%">
								</progress> -->
							</td>
							<td rowspan="3" class="capteurLum"> <img src="./images/capteur_lum.png" alt="capteur lumière"> </td>
						</tr>
						<tr>
							<td>capteur 2 (lum 2)</td>
							<td class="secondRow">
								<div class="progress-background">
									<div class="progress-bar" style="width: <?php echo file_get_contents ('./lum2.txt');?>%;">
										<span><?php echo file_get_contents ('./lum2.txt'); ?> %</span>
									</div>
								</div>

								<!-- <progress max="100" value=<?php echo file_get_contents ('./lum2.txt'); ?>
																		data-label =<?php echo file_get_contents ('./lum2.txt'); ?>+"%" >
								</progress> -->
							</td>
						</tr>
						<tr>
							<td>capteur 3 (lum 3)</td>
							<td class="secondRow">
								<div class="progress-background">
									<div class="progress-bar" style="width: <?php echo file_get_contents ('./lum3.txt');?>%;">
										<span><?php echo file_get_contents ('./lum3.txt'); ?> %</span>
									</div>
								</div>

								<!-- <progress max="100" value=<?php echo file_get_contents ('./lum3.txt'); ?>
																		data-label =<?php echo file_get_contents ('./lum3.txt'); ?>+"%">
								</progress> -->
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<a href="https://www.isen.fr/" class="logo"><img src="./images/logo_isen.jpg" alt="logo isen"></a>
		</fieldset>
	</div>

</body>
</html>
