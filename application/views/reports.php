<div class="container">

  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
      <form class="form-inline" id="reports-search" style="text-align: center;">
        <div class="form-group">
          <input type="text" class="form-control input-lg" name="search" id="search" value="" pattern="[a-zA-Z0-9]+" placeholder="Name, Section" required>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">SEARCH</button>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
      <div class="students-list">

      </div>
    </div>
  </div>

</div>

<script>

$('#reports-search').submit(function(e){
  e.preventDefault();
  var searchQuery = $('#search').val();
  $.ajax({
    url: '<?php echo base_url(); ?>reports/search',
    method: 'GET',
    data: {
      "searchQuery": searchQuery
    },
    dataType: 'JSON',
    success: function(response){
      if (response.status == 200) {
        var studentsList = '';
        for (var key in response.results) {
          studentsList += '<div class="row">';
          studentsList += '<div class="col-sm-6 col-md-6">';
          studentsList += '<h3>';
          studentsList += response.results[key].fname + ' ' + response.results[key].lname;
          studentsList += '</h3>';
          studentsList += '</div>';
          studentsList += '<div class="col-sm-4 col-md-4">';
          studentsList += '<h3>';
          studentsList += response.results[key].level;
          studentsList += '</h3>';
          studentsList += '</div>';
          studentsList += '<div class="col-sm-2 col-md-2">';
          studentsList += '<h3><a href="<?php echo base_url(); ?>reports/student?id=' + response.results[key].id + '" class="btn btn-primary">VIEW ACTIVITY</a></h3>';
          studentsList += '</div>';
          studentsList += '</div>';
        }
        $('.students-list').empty().html(studentsList);
      }
    }
  });
});

</script>
