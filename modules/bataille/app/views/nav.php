<?php require_once(MODULEROOT."bataille/router/config.php");?>
<link rel="stylesheet" type="text/css" href="<?=LIBSWEBROOT?>popup/css/style.css">
<script src="<?=LIBSWEBROOT?>popup/js/popup.js"></script>
<link rel="stylesheet" type="text/css" href="<?=BATAILLEWEBROOT?>css/style.css">

<?php use \modules\bataille\app\controller\Bataille; ?>
<div class="bataille">
	<header>
		<nav class="top">
			<div class="row">
				<ul class="right">
					<li><a href="<?=WEBROOT?>bataille/aide">Aide</a></li>
					<li><a href="<?=WEBROOT?>bataille">Version 0.1</a></li>
					<li><a href="<?=WEBROOT?>bataille">Déconnexion</a></li>
				</ul>
			</div>
		</nav>

		<nav class="middle">
			<div class="row">
				<ul class="right">
					<ul>
						<li><a href="<?=WEBROOT?>bataille/messagerie"><img src="<?=BATAILLEWEBROOT?>images/messagerie.png" alt=""></a></li>
						<li><a href=""><img src="<?=BATAILLEWEBROOT?>images/carte.png" alt=""></a></li>
						<li><a href=""><img src="<?=BATAILLEWEBROOT?>images/classement.png" alt=""></a></li>
					</ul>
				</ul>
			</div>
		</nav>

		<div class="row">
			<div class="small-12 medium-9 large-9 columns medium-centered">
				<div class="row ressources">
					<div class="small-12 medium-5 large-5 columns gauche">
						<div class="row">
							<div class="small-12 medium-6 large-6 columns">
								<div class="left"><img src="" alt=""></div>
								<div class="right">
									<span class="<?=Bataille::getRessource()->getMaxEau()?>"><?=Bataille::getRessource()->getEau()?></span> (+<?=Bataille::getBatiment()->getProduction("eau")?>)
								</div>
							</div>
							<div class="small-12 medium-6 large-6 columns">
								<div class="left"><img src="" alt=""></div>
								<div class="right">
									<span class="<?=Bataille::getRessource()->getMaxElectricite()?>"><?=Bataille::getRessource()->getElectricite()?></span>(+<?=Bataille::getBatiment()->getProduction("electricite")?>)
								</div>
							</div>
						</div>
					</div>
					<div class="small-12 medium-2 large-2 columns nom-base">
						<h3 class="text-center"><?=Bataille::getBase()->getNomBase()?></h3>
					</div>
					<div class="small-12 medium-5 large-5 columns droite">
						<div class="small-12 medium-6 large-6 columns">
							<div class="left"><img src="" alt=""></div>
							<div class="right">
								<span class="<?=Bataille::getRessource()->getMaxFer()?>"><?=Bataille::getRessource()->getFer()?></span> (+<?=Bataille::getBatiment()->getProduction("fer")?>)
							</div>
						</div>
						<div class="small-12 medium-6 large-6 columns">
							<div class="left"><img src="" alt=""></div>
							<div class="right">
								<span class="<?=Bataille::getRessource()->getMaxFuel()?>"><?=Bataille::getRessource()->getFuel()?> </span>(+<?=Bataille::getBatiment()->getProduction("fuel")?>)
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
</div>

<div class="popup" id="popup-base">
	<div class="content">
		<div id="ajax">

		</div>

		<div class="lien">
			<a class="annuler">Annuler</a>
			<a href="" class="valider" id="config-suppress-ajax">Valider</a>
		</div>
		<div class="clear"></div>
	</div>
</div>

<?php require_once(BATAILLEROOT."js/batiment.php");?>