<section id="content-area" class="left">

  <div class="img-wrap">
    <?php if($image): ?><div class="img img-main"><?php print render($image) ?></div><?php endif; ?>
    <?php foreach($bands as $band): ?>
      <div class="img band-pic band-pic-<?php print $band->nid; ?>"><?php print render($band->field_field_main_image); ?></div>
    <?php endforeach; ?>
  </div>

  <?php if($body): ?><div class="body"><?php print render($body); ?></div><?php endif; ?>

</section><!-- end .col-main -->

<aside class="right">

  <div class="block block-music">
    <h3>Music</h3>
    <?php if($track): ?>
    <script type="text/javascript" charset="utf-8">
      $(function(){
        $('#jquery_jplayer_1').jPlayer({
          ready: function(){
            $(this).jPlayer('setMedia', {
              mp3: '<?php print render($track); ?>'
            });
          },
          volume: 1,
          swfPath: '/sites/all/themes/jac/js/jplayer'
        });
      });
    </script>
    <div id="jquery_jplayer_1" class="jp-jplayer"></div>
    <div id="jp_container_1" class="jp-audio clearfix">
      <div class="jp-type-single">
        <div class="jp-gui jp-interface">
          <ul class="jp-controls">
            <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
            <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
          </ul>
          <div class="jp-progress">
            <div class="jp-seek-bar">
              <div class="jp-play-bar"></div>
            </div>
          </div>
          <div class="jp-volume-bar">
            <div class="jp-volume-bar-value"></div>
          </div>
          <div class="jp-time-holder clearfix">
            <div class="jp-current-time"></div>
            <div class="jp-duration"></div>
          </div>
        </div>
        <div class="jp-no-solution">
          <span>Update Required</span>
          To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
        </div>
      </div>
    </div>
    <?php else: ?>
      <p>Music coming soon!</p>
    <?php endif; ?>
  </div><!-- end block-music -->

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