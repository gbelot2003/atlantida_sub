<?php

/**
 * @file
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - $block->subject: Block title.
 * - $content: Block content.
 * - $block->module: Module that generated the block.
 * - $block->delta: An ID for the block, unique within each module.
 * - $block->region: The block region embedding the current block.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - block: The current template type, i.e., "theming hook".
 *   - block-[module]: The module generating the block. For example, the user module
 *     is responsible for handling the default user navigation block. In that case
 *     the class would be "block-user".
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - $zebra: Same output as $block_zebra but independent of any block region.
 * - $block_id: Counter dependent on each block region.
 * - $id: Same output as $block_id but independent of any block region.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $block_html_id: A valid HTML ID and guaranteed unique.
 *
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see template_process()
 */
global $language_content; 
if($language_content->language == "es"){
	$hotels = "/atlantida/es/con-quien/hoteles";
	$rest = "/atlantida/es/con-quien/restaurantes";
	$tour = "/atlantida/es/con-quien/tour-operadores";
	$tran = "/atlantida/es/con-quien/transportes";
} else {
	$hotels = "/atlantida/en/with-whom/hotels";
	$rest = "/atlantida/en/with-whom/restarants";
	$tour = "/atlantida/en/with-whom/tour-operator";
	$tran = "/atlantida/en/with-whom/transports";
}

$arges = (int) arg(1); 
function get_title_magically($nid) {
	$result = db_query('SELECT title FROM {node} WHERE nid = :nid AND status = 1', array(':nid' => $nid))->fetchField();
	return $result;
}
$nodetitle = get_title_magically($arges);
?>
<?php if ($block->delta != 'main'):  ?>
  <section class="<?php print $classes; ?>"<?php print $attributes; ?>>
<?php endif; ?>
	<div class="block-content row">
  <?php print render($title_prefix); ?>
  <?php if ($block->subject): ?>
    <h4<?php print $title_attributes; ?>><?php print $block->subject ?></h4>
  <?php endif;?>
  <?php print render($title_suffix); ?>

  <?php !empty($content_attributes) ? print '<div ' .  $content_attributes . '>' : ''; ?>
    	<div id="relaciones2" class="large-12 small-12 columns">
			<ul>
				<li class="large-3 small-12 columns"><a class="links hotel" href="<?php print $hotels ?>?field_ref_destninos_nid=<?php print $arges ?>"><?php print t("Hotels ") . $nodetitle ?> </a></li>
				<li class="large-3 small-12 columns"><a class="links restaurantes"href="<?php print $rest ?>?field_ref_destninos_nid=<?php print $arges ?>"><?php print t("Restaurants ") . $nodetitle ?> </a></li>
				<li class="large-3 small-12 columns"><a class="links tours" href="<?php print $tour ?>?field_ref_destninos_nid=<?php print $arges ?>"><?php print t("Tours ") . $nodetitle ?> </a></li>
				<li class="large-3 small-12 columns"><a class="links transportes" href="<?php print $tran ?>?field_ref_destninos_nid=<?php print $arges ?>"><?php print t("Transports ") . $nodetitle ?> </a></li>
			</ul>
		</div>

  <?php !empty($content_attributes) ? print '</div>' : ''; ?>
	</div>
<?php $block->delta != 'main' ? print '</section>' : ''; ?>
