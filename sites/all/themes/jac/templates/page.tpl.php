<header>
  <h1 class="logo"><a href="/"><img src="/sites/all/themes/jac/images/logo.svg" /></a></h1>
</header>

<section id="main"><div class="inner clearfix">
  <h2 class="tagline"><span>Chicago</span> Event Musicians</h2>
  <nav class="sub clearfix"><?php print $main_menu; ?></nav>

  <nav class="main clearfix"><?php print $band_menu; ?></nav>

  <?php print $messages; ?>
  <?php print render($page['content']); ?>

</section><!-- end #main -->

<footer><div class="inner clearfix">
  <div class="left">
    <nav class="clearfix"><?php print $band_menu; ?></nav>
    <nav class="clearfix"><?php print $main_menu; ?></nav>
  </div>

  <div class="right">
    <div><a href="mailto:coaxandfolks@gmail.com">coaxandfolks@gmail.com</a></div>
    <div>708.612.6034</div>
    <div class="blurb">Built by bxCreative - <a href="http://bxcreative.com" target="_blank">Web development</a></div>
  </div>

</div></footer>
