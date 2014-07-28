<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<div id="relaciones2" class="large-12 columns">
	<div class="row"> 
		<?php foreach ($rows as $id => $row): ?>
		  <div class="large-12 small-12 columns division">
		    <?php print $row; ?>
		  </div>
		<?php endforeach; ?>
	</div>
</div>

