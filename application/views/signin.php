<div class="container">

  <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 signin-main">

    <div class="col-sm-12 col-md-12 alert alert-success alert-success-signup">
      <p>
        Registration successful! You can now sign in.
      </p>
    </div>

    <form class="form-horizontal" id="form-signin">
      <div class="form-group">
        <label for="email" class="col-sm-2 col-md-2 control-label">Email</label>
        <div class="col-sm-10 col-md-10">
          <input type="email" class="form-control" name="email" id="email" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-sm-2 col-md-2 control-label">Password</label>
        <div class="col-sm-10 col-md-10">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10 col-md-offset-2 col-md-10">
          <button type="submit" class="btn btn-default col-sm-4 col-md-4">Sign in</button>
        </div>
      </div>
    </form>
  </div>

</div>

<script>

$('#form-signin').submit(function(e){
  e.preventDefault();
  var signinData = new FormData($(this)[0]);
  $.ajax({
    url: '<?php echo base_url(); ?>user/login',
    method: 'POST',
    data: signinData,
    dataType: 'JSON',
    processData: false,
    contentType: false,
    success: function(response){
      if (response.status == 200) {
        window.location = '<?php echo base_url(); ?>';
      } else {
        // error popup
      }
    }
  });
});

</script>
