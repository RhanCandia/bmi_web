<div class="container">
  <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
    <h1 class="work-title"><?php echo $workout[0]->title ?></h1>

    <div class="videoWrapper">
      <div id="videoWrapper">

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="workout-modal" tabindex="-1" role="dialog" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="workout-title"></h4>
      </div>
      <div class="modal-body">
        <h2 class="workout-note">Please enter you Heart BPM</h2>
        <p class="workout-note">How was your workout? Please measure your BPM and enter it below so we can track your records.</p>
        <br />
        <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
          <input class="form-control input-lg" type="number" min="1" name="bpm" id="bpm" placeholder="Beats Per Minute" style="text-align: center;" value="">
        </div>
        <br />
        <br />
        <br />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">CANCEL</button>
        <button type="button" class="btn btn-primary" id="btn-continue" disabled>CONTINUE</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="http://www.youtube.com/player_api"></script>

<script>

    // create youtube player
    var player;
    function onYouTubePlayerAPIReady() {
        player = new YT.Player('videoWrapper', {
          height: '390',
          width: '640',
          videoId: '<?php echo $workout[0]->embed; ?>',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
    }

    // autoplay video
    function onPlayerReady(event) {
        event.target.playVideo();
    }

    // when video ends
    function onPlayerStateChange(event) {
        if(event.data === 0) {
            $('#workout-modal').modal('show');
        }
    }

</script>

<script>

$('#bpm').keyup(function(){
  if ($(this).val() != '') {
    $('#btn-continue').removeAttr('disabled');
  } else {
    $('#btn-continue').attr('disabled', 'disabled');
  }
});

$('#btn-continue').click(function(){
  $.ajax({
    url: '<?php echo base_url(); ?>workout/update_record',
    method: 'POST',
    data: {
      "rid":  <?php echo $record[0]->id; ?>,
      "abpm": $('#bpm').val()
    },
    dataType: 'JSON',
    success: function(response){
      if (response.status == 200) {
        window.location = '<?php echo base_url(); ?>user?ref=workout';
      } else {
        // error popup
      }
    }
  });
});

</script>
