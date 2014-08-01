 <footer class="l-footer panel" role="contentinfo">
    <div class="row">	
		<div class="large-12 columns logos-images">
				<div class="sponsor1">
					<ul class="logos-li">
						<li class="premium"><a class="canaturh" href="#">Canaturh</a></li>
						<li class="lpremium"><a class="iht" href="#">IHT</a></li>
					</ul>
				</div>
				<div class="sponsor2">
					<ul class="logos-li">
						<li class="lpremium-2"><a class="usaid" href="#">usaid</a></li>
						<li class="lpremium-3"><a class="nwt" href="#">New World Trips</a></li>
					</ul>
				</div>
				<div class="sponsor3">
					<ul class="logos-li">
						<li class="sponsor"><a class="imc" href="#">patrocinador</a></li>
						<li class="sponsor"><a class="divesa" href="#">patrocinador</a></li>

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