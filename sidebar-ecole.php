<?php
/**
 * 
 *
 * @package WordPress
 * @subpackage IESEG2
 * @since IESEG2 1.0
 */
/*
*/
global $sidebar_a_acharger;
?>
<div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
<?php
if ($sidebar_a_acharger['section']=="campus-lille-fr"){ 
?>	
	<div class="bloc">
		<div class="remove-margins">
			<iframe width="100%" height="222" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=3%20rue%20de%20la%20digue%20lille&key=AIzaSyAFz4SPvq87AbAH5da_ewmDcXEkmfHO43k" allowfullscreen></iframe>
		</div>
			<h4>Nous trouver</h4>
			<span>3 rue de la Digue <br />
				59000 Lille
			</span><br />
			<a class="btn" title="Cliquer pour ouvrir la carte dans une nouvelle fenêtre" target="_blank" href="https://www.google.com/maps?ll=50.634972,3.0481&z=14&t=m&hl=fr&gl=US&mapclient=embed&q=3+Rue+de+la+Digue+59800+Lille+France">
				Agrandir le plan
			</a>
	</div>

	<div class="bloc">
        <div class="remove-margins">
            <a target="_blank" href="https://walkinto.in/tour/bytz02hsVgZJeFGA2nsEl"><img class="img-reponsive" src="<?php bloginfo('url');?>/wp-content/uploads/lille-visite-virtuelle-2.jpg" alt="Visite virtuelle du campus de Lille" title="CLiquer pour accèder à la visite virtuelle du campus de Lille" width="100%" height="auto"></a>
        </div>
			<h4>Visite virtuelle</h4>
			<span>Depuis chez vous, visitez notre campus de Lille grâce à la visite virtuelle qui vous est proposée.</span><br />
			<a class="btn" title="Cliquer pour accèder à la visite virtuelle du campus de Lille" target="_blank" href="https://walkinto.in/tour/bytz02hsVgZJeFGA2nsEl">
				Accéder à la visite virtuelle
			</a>
	</div>
<?php
} //fin campus-lille FR
?>                              
<?php
//Campus de Paris FR
if ($sidebar_a_acharger['section']=="campus-paris-fr"){  
 ?>	
       <div class="bloc">
			<div class="remove-margins">
				<iframe width="100%" height="222" frameborder="0" style="border:0"
					src="https://www.google.com/maps/embed/v1/place?q=1%20parvis%20de%20la%20grande%20arche%20paris&key=AIzaSyAxUZS-Lj5u4m-uwMzqa98hw4-_bG1hOQE" allowfullscreen></iframe>
			</div>
			<h4>Nous trouver</h4>
			<span>1 parvis de la Défense<br />
				Socle de la Grande Arche<br />
				92044 Paris la Défense
			</span>
			<a class="btn" title="Cliquer pour ouvrir la carte dans une nouvelle fenêtre" target="_blank" href="https://www.google.com/maps?ll=48.885543,2.209548&z=13&t=m&hl=fr-FR&gl=US&mapclient=embed&cid=44418648437117820">
				Agrandir le plan
			</a>
		</div>

		<div class="bloc">
			<div class="remove-margins">
				<a target="_blank" href="https://walkinto.in/tour/eJgUHAPipelkle8S0Do6e"><img class="img-reponsive" src="<?php bloginfo('url');?>/wp-content/uploads/paris-visite-virtuelle.jpg" alt="Visite virtuelle du campus de Paris" title="Cliquer pour accèder à la visite virtuelle du campus de Paris" width="100%" height="auto"></a>
			</div>
			<h4>Visite virtuelle</h4>
			<span>Depuis chez vous, visitez notre campus de Paris grâce à la visite virtuelle qui vous est proposée.</span><br />
			<a class="btn" title="Cliquer pour ouvrir la carte dans une nouvelle fenêtre" target="_blank" href="https://walkinto.in/tour/eJgUHAPipelkle8S0Do6e">
				Accéder à la visite virtuelle
			</a>
		</div>

		<div class="bloc">
			<h4>Plan du campus de La Défense</h4>
			<span>Répérez-vous plus facilement sur la campus de Paris.</span> <br />
			<a class="btn" title="Plan du campus de La Défense" target="_blank" href="<?php bloginfo('url');?>/wp-content/uploads/plan-IESEG-campus-Paris.pdf">
				Voir le plan
			</a>
		</div>
<?php
} //fin Campus Paris FR
?>
 <?php
//Presse FR
if ($sidebar_a_acharger['section']=="presse-fr"){  
 ?>	
       <div class="bloc">
			<h4>Contact Presse</h4>
			<span>Andrew MILLER<br />
				Attaché de presse<br />
				Tél.: +33 (0)3.20.54.58.92
			</span><br /><br />
			<a class="btn" target="_blank" href="mailto:a.miller@ieseg.fr">
				a.miller@ieseg.fr
			</a>
		</div>

		<div class="bloc">
			<h4>Dossier de presse</h4>
			<br />
			<a class="btn" title="Téléchargez le Dossier de Presse" target="_blank" href="<?php bloginfo('url');?>/wp-content/uploads/DP_FR_sept2014_andrew2.pdf">
				Téléchargez le Dossier de Presse
			</a>
		</div>
<?php
} //fin Presse FR
?>                   
                    
</div><!-- #content-sidebar -->