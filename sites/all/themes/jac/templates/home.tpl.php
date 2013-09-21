<aside class="right">

  <div class="block block-shows">
    <h3>Shows</h3>
    <?php if($shows): ?>
      <?php foreach($shows as $show): ?>
        <div class="row row-show clearfix">
          <div class="right">
            <div class="venue"><?php print $show->node_field_data_field_venue_title; ?></div>
            <div class="band"><?php print $show->node_field_data_field_band_title; ?> <?php print $show->taxonomy_term_data_field_data_field_show_type_name; ?></div>
            <?php if($show->field_field_description): ?>
              <div class="description"><?php print render($show->field_field_description); ?></div>
            <?php endif; ?>
          </div>
          <div class="left">
            <div class="date-time"><span class="date"><?php print render($show->field_field_date); ?></span> <span class="time"><?php print render($show->field_field_time); ?></span></div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p>No upcoming shows!</p>
    <?php endif; ?>
    <div class="view-calendar"><a href="/calendar">View full calendar</a></div>
  </div><!-- end  block-shows -->

  <div class="block block-fb">
    <h3>Get Social!</h3>
    <div class="facebook">
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
      <div class="fb-like" data-href="http://facebook.com/coaxandfolks" data-send="true" data-width="278" data-show-faces="true"></div>
    </div>
    <div class="twitter">
      <a href="https://twitter.com/coaxandfolks" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @johnnyandcoax</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
  </div>

</aside>