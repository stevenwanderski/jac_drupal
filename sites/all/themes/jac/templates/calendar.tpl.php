<div id="calendar"></div>

<script type="text/javascript" charset="utf-8">

  (function($){

    $('#calendar').fullCalendar({
      events: <?php print $shows; ?>,
      eventRender: function(event, element) {
        element.find('span.fc-event-title').html(element.find('span.fc-event-title').text());
      }
    });

  })(jQuery);

</script>