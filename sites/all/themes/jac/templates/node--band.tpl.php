<div class="page-band">
<section id="content-area" class="left">

  <h1><?php print $node->title; ?></h1>

  <?php if($content['field_main_image']): ?>
    <div class="main-pic"><?php print render($content['field_main_image']); ?></div>
  <?php endif; ?>

  <div class="body"><?php print render($content['field_bio']); ?></div>

</section><!-- end col-main -->

<aside class="col col-sidebar right">

  <?php if($shows): ?>
    <div class="block block-shows">
      <h3>Shows</h3>
      <?php foreach($shows as $show): ?>
        <div class="row row-show">
          <div class="venue"><?php print $show->node_field_data_field_venue_title; ?></div>
          <div class="band"><?php print $show->node_field_data_field_band_title; ?> <?php print $show->taxonomy_term_data_field_data_field_show_type_name; ?></div>
          <div class="date-time"><span class="date"><?php print render($show->field_field_date); ?></span> <span class="time"><?php print render($show->field_field_time); ?></span></div>
          <?php if($show->field_field_description): ?>
            <div class="description"><?php print render($show->field_field_description); ?></div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
      <div class="view-calendar"><a href="/calendar">View full calendar</a></div>
    </div><!-- end block-shows -->
  <?php endif; ?>


  <?php if($content['field_band_images']): ?>
    <div class="block block-pics clearfix">
      <?php foreach($content['field_band_images'] as $key => $pic): ?>
        <?php if(is_numeric($key)): ?>
          <div class="img img-grid left"><a href="<?php print image_style_url('band_popup', $pic['#item']['uri']) ?>" rel="gallery" class="fancybox"><img src="<?php print image_style_url('band_thumb', $pic['#item']['uri']) ?>" /></a></div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div><!-- end block-pics -->

  <?php endif; ?>

</aside><!-- end col-sidebar -->

</div>