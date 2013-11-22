<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>">
  <div class="node-inner">
    <header>
        <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>

      <?php print $user_picture; ?>
          
      <?php if ($display_submitted): ?>
        <span class="submitted"><?php print $date; ?> — <?php print $name; ?></span>
      <?php endif; ?>
    </header>
    <div class="content centered_content_960">
      <div class="left"> 
        <div class="cycle-slideshow" 
            data-cycle-fx=scrollHorz
            data-cycle-timeout=0
            data-cycle-pager-event="mouseover"
            data-cycle-pager="#custom-pager"
            data-cycle-pager-template="<a href=#> {{slideNum}} </a>"
            > 
          <?php 
            foreach($content["field_images"]["#object"]->field_images["und"] as $k=>$v){
              echo theme('image_style', array('style_name' => 'product_display', 'path' => $v["uri"]));
            }
          ?>
        </div>
        <div id="custom-pager" class="center"></div>        
        
        <div class="description"><?php print render($content["field_description"]); ?></div>
      </div>
      <div class="right">
        <h2><?php print render($content["field_images"]["#object"]->title); ?></h2>
        <div class="h2"><?php print render($content["product:commerce_price"]); ?></div>
        <?php
          $block = module_invoke('commerce_multicurrency', 'block_view', 'currency_menu');
          print $block['content']; ?>
        <?php print render($content["field_product_reference"]); ?>

      </div>
      <br class="clear-flow" style="clear:both">
    </div>
    <?php if (!empty($content['links']['terms']) || !empty($content['links'])): ?>
      <footer>
      <?php if (!empty($content['links']['terms'])): ?>
        <div class="terms"><?php print render($content['links']['terms']); ?></div>
      <?php endif;?>
      
      <?php if (!empty($content['links'])): ?>
        <div class="links"><?php print render($content['links']); ?></div>
      <?php endif; ?>
      </footer>
    <?php endif; ?>
  </div> <!-- /node-inner -->
</article> <!-- /node-->
<?php print render($content['comments']); ?>