<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div id="relaciones" class="large-12 columns">
	<?php if (!empty($title)): ?>
	  <h3><?php print $title; ?></h3>
	<?php endif; ?>
	<ul id="myList" class="row"> 
		<?php foreach ($rows as $id => $row): ?>
		  <li class="large-3 small-12 end columns">
			<?php print $row; ?>
		  </li> 
		<?php endforeach; ?>
	</ul>
	<span class="button tiny" id="loadMore">Ver Mas</span>
	<span class="button tiny alert" id="showLess">Esconder</span>
</div>


