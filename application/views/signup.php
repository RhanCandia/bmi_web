<div class="container">

  <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
    <form class="form-horizontal" id="form-signup">
      <div class="form-group">
        <label for="fname" class="col-sm-3 col-md-3 control-label">First name</label>
        <div class="col-sm-9 col-md-9">
          <input type="text" class="form-control" name="fname" id="fname" placeholder="First name">
        </div>
      </div>
      <div class="form-group">
        <label for="lname" class="col-sm-3 col-md-3 control-label">Last name</label>
        <div class="col-sm-9 col-md-9">
          <input type="text" class="form-control" name="lname" id="lname" placeholder="Last name">
        </div>
      </div>
      <div class="form-group">
        <label for="level" class="col-sm-3 col-md-3 control-label">Year &amp; Section</label>
        <div class="col-sm-9 col-md-9">
          <input type="text" class="form-control" name="level" id="level" placeholder="Year &amp; Section">
        </div>
      </div>
      <div class="form-group">
        <label for="gender" class="col-sm-3 col-md-3 control-label">Gender</label>
        <div class="col-sm-9 col-md-9">
          <label class="radio-inline">
            <input type="radio" name="gender" id="gender" value="0" checked> Male
          </label>
          <label class="radio-inline">
            <input type="radio" name="gender" id="gender" value="1"> Female
          </label>
        </div>
      </div>
      <div class="form-group">
        <label for="bdate" class="col-sm-3 col-md-3 control-label">Birthdate</label>
        <div class="col-sm-9 col-md-9">
          <input type="date" class="form-control" name="bdate" id="bdate" placeholder="Birthdate">
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-3 col-md-3 control-label">Email</label>
        <div class="col-sm-9 col-md-9">
          <input type="email" class="form-control" name="email" id="email" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-sm-3 col-md-3 control-label">Password</label>
        <div class="col-sm-9 col-md-9">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9">
          <button type="submit" class="btn btn-default col-sm-4 col-md-4">Sign up</button>
        </div>
      </div>
    </form>
  </div>

</div>

<script>

$('#form-signup').submit(function(e){
  e.preventDefault();
  var signupData = new FormData($(this)[0]);
  $.ajax({
    url: '<?php echo base_url(); ?>user/register',
    method: 'POST',
    data: signupData,
    dataType: 'JSON',
    processData: false,
    contentType: false,
    success: function(response){
      console.log(response);
    }
  });
});

</script>
