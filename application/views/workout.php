<div class="container">

  <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">

    <div class="row workout-form-container">
      <div class="col-sm-12 col-md-12">
        <form class="form-horizontal" id="workout-form">
          <div class="form-group">
            <label for="workout-name" class="col-sm-3 col-md-3 control-label">Workout Title</label>
            <div class="col-sm-9 col-md-9">
              <input type="text" class="form-control" name="workout-name" id="workout-name" placeholder="Workout #1" required>
            </div>
          </div>
          <div class="form-group">
            <label for="workout-embed" class="col-sm-3 col-md-3 control-label">YouTube Link</label>
            <div class="col-sm-9 col-md-9">
              <input type="text" class="form-control" name="workout-embed" id="workout-embed" placeholder="https://www.youtube.com/watch?v=dQw4w9WgXcQ" required>
            </div>
          </div>
          <div class="form-group">
            <label for="workout-save" class="col-sm-3 col-md-3 control-label"></label>
            <div class="col-sm-9 col-md-9">
              <button type="submit" class="btn btn-primary pull-right" id="workout-save">SAVE</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>

  <div class="col-sm-12 col-md-12 workout-videos-container">
  <!-- Dynamically Generated -->
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
        <p class="workout-note">Before you proceed, please take note of your heart rate and encode the data below.</p>
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

<div class="modal fade" id="del-workout-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="workout-title"></h4>
      </div>
      <div class="modal-body">
        <h2 class="workout-note">Are you sure?</h2>
        <p class="workout-note">Deleting this is irreversible. Would you like to continue?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">CANCEL</button>
        <button type="button" class="btn btn-danger" id="btn-delete">DELETE</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php if(($personal_info) && ($personal_info->user_group)): ?>
  <button class="btn btn-primary btn-lg" type="button" name="btn-add-workout" id="btn-add-workout"><span class="glyphicon glyphicon-plus"></span></button>
<?php endif; ?>
<script>

var addWorkoutOpen = false;

$(document).ready(function(){
  fetch();
});

$('#btn-add-workout').click(function(){
  if (addWorkoutOpen) {
    $('.workout-form-container').slideUp();
    addWorkoutOpen = false;
  } else {
    $('.workout-form-container').slideDown();
    addWorkoutOpen = true;
  }
});

$('#workout-form').submit(function(e){
  e.preventDefault();
  var workoutData = new FormData($(this)[0]);
  $.ajax({
    url: '<?php echo base_url(); ?>workout/add',
    method: 'POST',
    data: workoutData,
    dataType: 'JSON',
    processData: false,
    contentType: false,
    success: function(response){
      if (response.status == 200) {
        // popup success
        $('#workout-name').val('');
        $('#workout-embed').val('');
        $('#btn-add-workout').trigger('click');
        fetch();
      } else {
        // popup error
      }
    }
  });
});

function fetch(id) {
  $.ajax({
    url: '<?php echo base_url(); ?>workout/fetch',
    method: 'GET',
    data: {
      'id': id
    },
    dataType: 'JSON',
    success: function(response){
      if (response.status == 200) {
        update_list(response.workouts);
      } else {
        // popup error
      }
    }
  });
}

function update_list(workouts) {
  workoutsHtml = '';
  for (var key in workouts) {
  workoutsHtml += '<div class="col-sm-3 col-md-3 workout-video-container" onclick="doWorkout(this)" data-wid="' + workouts[key].id + '">';
  workoutsHtml += '<h4 class="workout-heading">' + workouts[key].title + '</h4>';
  workoutsHtml += '<img class="workout-thumb" src="http://img.youtube.com/vi/' + workouts[key].embed + '/hqdefault.jpg" alt="" />';
  workoutsHtml += '</div>';
  }
  $('.workout-videos-container').empty().html(workoutsHtml);
}

$('#bpm').keyup(function(){
  if ($(this).val() != '') {
    $('#btn-continue').removeAttr('disabled');
  } else {
    $('#btn-continue').attr('disabled', 'disabled');
  }
});

function doWorkout(workout) {
  <?php if(($personal_info) && ($personal_info->user_group == 0)): ?>
    $('.workout-title').text($(workout).find('.workout-heading').text());
    $('#btn-continue').attr('data-wid', $(workout).data('wid'));
    $('#workout-modal').modal('show');
  <?php endif; ?>
  <?php if(($personal_info) && ($personal_info->user_group == 1)): ?>
    $('.workout-title').text($(workout).find('.workout-heading').text());
    $('#btn-delete').attr('data-wid', $(workout).data('wid'));
    $('#del-workout-modal').modal('show');
  <?php endif; ?>
}

$('#btn-continue').click(function(){
  $.ajax({
    url: '<?php echo base_url(); ?>workout/record',
    method: 'POST',
    data: {
      'wid': $('#btn-continue').data('wid'),
      'bpm': $('#bpm').val()
    },
    dataType: 'JSON',
    success: function(response){
      $('#workout-modal').modal('hide');
      if (response.status == 200) {
        window.location = '<?php echo base_url(); ?>workout/work?rid=' + response.record;
      } else {
        // error popup
      }
    }
  });
});

$('#btn-delete').click(function(){
  $.ajax({
    url: '<?php echo base_url(); ?>workout/delete',
    method: 'POST',
    data: {
      'wid': $('#btn-delete').data('wid')
    },
    dataType: 'JSON',
    success: function(response){
      $('#workout-modal').modal('hide');
      if (response.status == 200) {
        window.location = '<?php echo base_url(); ?>workout';
      } else {
        // error popup
      }
    }
  });
});

</script>
