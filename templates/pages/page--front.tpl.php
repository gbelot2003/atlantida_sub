  <?php include("header.tpl.php"); ?>
    <!--/.featured -->
 
    <section class="l-featured row">
    	   <hr style="visibility: hidden"/>
      <div class="large-12 columns">
        <?php print render($page['featured']); ?>
      </div>
    </section>
    <section class="l-frontpage">
    	<div class="row">
			<div id="font-block-1" class="large-12 columns">
				<?php include("frontblock1.tpl.php") ?>
			</div>
			
			<hr />
			
			<div id="font-block-2" class="large-12 columns">
						
				<?php include("frontblock3.tpl.php") ?>
							
			</div>
			
			<hr style="visibility: hidden" />		
			<div id="font-block-3" class="large-12 columns">
				<!-- Sub Slide -->
				<?php include("sub_slide.tpl.php") ?>
				<!-- Sub Slide -->
			</div>
    	</div>
    </section>
    <!--/.l-featured -->
  
  <?php if (!empty($page['wide_region'])): ?>
  <div class="wide-region">
    <?php print render($page['wide_region']); ?>
  </div>
  <?php endif; ?>

<!-- Agregamos mas bloques con el mismo estilo -->
  <?php if (!empty($page['wide_two_region'])): ?>
	  <div class="wide-two-region">
		  <div class="row">
			<div class="large-12 columns">
				<?php print render($page['wide_two_region']); ?>
			
		  	</div>
		  </div>
	  </div>
  <?php endif; ?>
<!-- fin de wide-two -->

  <?php if (!empty($page['help'])): ?>
    <!--/.l-help -->
    <section class="l-help row">
      <div class="large-12 columns">
        <?php print render($page['help']); ?>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>

  <main role="main" class="row l-main">
    <div class="<?php print $main_grid; ?> main columns">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlight panel callout">
          <?php print render($page['highlighted']); ?>
        </div>
      <?php endif; ?>

      <a id="main-content"></a>

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
    <div class="row">      
       <?php if (!empty($page['before_content'])): ?>
        <div role="complementary" class="large-12 columns">
          <?php print render($page['before_content']); ?>
        </div>
      <?php endif; ?>
    </div>
      <?php if(!drupal_is_front_page()) print render($page['content']); ?>
    </div>
    <!--/.main region -->

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>
  </main>
  <!--/.main-->

  <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
    <!--.triptych-->
    <section class="l-triptych row">
      <div class="triptych-first large-4 columns">
        <?php print render($page['triptych_first']); ?>
      </div>
      <div class="triptych-middle large-4 columns">
        <?php print render($page['triptych_middle']); ?>
      </div>
      <div class="triptych-last large-4 columns">
        <?php print render($page['triptych_last']); ?>
      </div>
    </section>
    <!--/.triptych -->
  <?php endif; ?>
  
  <?php if (!empty($page['before_footer'])): ?>   
      <div class="before-footer" role="complementary" >
        <?php print render($page['before_footer']); ?>
      </div>   
  <?php endif; ?>

  <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
    <!--.footer-columns -->
    <section class="l-footer-columns">
      <div class="row">
        <?php if (!empty($page['footer_firstcolumn'])): ?>
          <div class="footer-first large-3 small-6 columns">
            <?php print render($page['footer_firstcolumn']); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($page['footer_secondcolumn'])): ?>
          <div class="footer-second large-3 small-6 columns">
            <?php print render($page['footer_secondcolumn']); ?>
          </div>
        <?php endif; ?>

        <?php if (!empty($page['footer_fourthcolumn'])): ?>
          <div class="footer-fourth large-6 small-12 columns">
            <?php print render($page['footer_fourthcolumn']); ?>
          </div>
        <?php endif; ?>
      </div>
    </section>
    <!--/.footer-columns-->
  <?php endif; ?>

	<?php if (!empty($page['down_menu'])): ?>
	<section class="large-12 columns">
		<div class="row">
			<?php print render($page['down_menu']); ?>
		</div>
	</section>
	<?php endif; ?>
		<?php  include("modal.tpl.php"); ?>
  <!--.l-footer-->
	  <?php include("footer.tpl.php"); ?>
  <!--/.footer-->

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->
