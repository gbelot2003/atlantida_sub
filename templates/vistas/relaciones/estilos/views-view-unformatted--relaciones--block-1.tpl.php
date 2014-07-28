<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div id="relaciones2" class="large-12 columns">
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
	<div class="row"> 
		<?php foreach ($rows as $id => $row): ?>
		  <div class="large-3 small-12 en columns">
		    <?php print $row; ?>
		  </div>
		<?php endforeach; ?>
	</div>
</div>

