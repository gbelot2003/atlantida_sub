 <footer class="l-footer panel" role="contentinfo">
    <div class="row">	
		<div class="large-12 columns logos-images">
				<div class="sponsor1">
					<ul class="logos-li">
						<li class="premium"><a class="canaturh" href="http://www.canaturh.org/">Canaturh</a></li>
						<li class="lpremium"><a class="iht" href="http://www.iht.hn/">IHT</a></li>
					</ul>
				</div>
				<div class="sponsor2">
					<ul class="logos-li">
						<li class="lpremium-2"><a class="usaid" href="http://www.usaid-proparque.org/">usaid</a></li>
						<li class="lpremium-3"><a class="nwt" href="http://www.nwtrips.com/">New World Trips</a></li>
					</ul>
				</div>
				<div class="sponsor3">
					<ul class="logos-li">
						<li class="sponsor"><a class="imc" href="http://www.imcmedios.com/">patrocinador</a></li>
						<li class="sponsor"><a class="divesa" href="http://www.divesahn.com/">patrocinador</a></li>

					</ul>
				</div>
				<div class="sponsor3">
					<ul class="logos-li">
						<li class="sponsor"><a class="patrocinador" href="#">patrocinador</a></li>
						<li class="sponsor"><a class="patrocinador" href="#">patrocinador</a></li>						
					</ul>
				</div>
				<div class="sponsor3">
					<ul class="logos-li">
						<li class="sponsor"><a class="patrocinador" href="#">patrocinador</a></li>
						<li class="sponsor"><a class="patrocinador" href="#">patrocinador</a></li>						
					</ul>
				</div>
				<div class="sponsor3">
					<ul class="logos-li">
						<li class="sponsor"><a class="patrocinador" href="#">patrocinador</a></li>
						<li class="sponsor"><a class="patrocinador" href="#">patrocinador</a></li>						
					</ul>
				</div>
		</div>
	</div>
    <div class="row">
	  <?php if (!empty($page['footermenu'])): ?>
		<div id="subfooter" class="large-12 columns">
			<?php print render($page['subfooter']); ?>
		</div>
	  <?php endif; ?>	
      
      <div class="copyright large-12 columns">
		<div class="large-2 small-6 columns copy">&copy; <?php print date('Y') . ' CANATURH '?></div>
		  
		<div class="large-8 small-6 columns">
			
		<?php if (!empty($page['footermenu'])): ?>
			<?php print render($page['footermenu']); ?>
		<?php endif; ?>
		
		</div>
		  
		<div class="large-2 small-12 columns">
			<img src="http://drkuf9gftqtsg.cloudfront.net/atlantida/sites/default/files/logos//marca1.png" />
		</div>
      </div>
    </div>
 </footer>