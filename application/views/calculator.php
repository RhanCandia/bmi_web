<div class="container">

  <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
    <h1 class="calculator-heading">BMI CALCULATOR</h1>
    <div class="col-sm-4 col-md-4">
      <form id="form-calculator">
        <div class="form-group">
          <input class="form-control input-lg bmi-input" type="text" name="weight" id="weight" placeholder="WEIGHT (Kg)" value="" pattern="[0-9]*[.,]?[0-9]+" required>
        </div>
        </div>
        <div class="col-sm-4 col-md-4">
        <div class="form-group">
          <input class="form-control input-lg bmi-input" type="text" name="height" id="height" placeholder="HEIGHT (m)" value="" pattern="[0-9]*[.,]?[0-9]+" required>
        </div>
        </div>
        <div class="col-sm-4 col-md-4">
          <button type="submit" id="calculate-bmi" class="btn alert-info btn-lg col-md-12">CALCULATE</button>
        </div>
      </form>
  </div>

  <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
    <div class="col-sm-12 col-md-12">
      <div id="class-alert" class="alert" role="alert">

      </div>
    </div>
  </div>

  <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
    <div class="col-sm-12 col-md-12 alert-instruction-class">
      <h2 class="alert-instruction-heading">Don't worry!</h2>
      <p class="alert-instruction">We'll fix that! Click the link below.</p>
      <button class="btn btn-primary btn-lg" type="button" id="btn-proceed-recall">PROCEED TO PROFILE</button>
    </div>
  </div>

</div>

<script>

$('#form-calculator').submit(function(e){
  e.preventDefault();
  $.ajax({
    url: '<?php echo base_url(); ?>growth/calculate',
    method: 'GET',
    data: {
      "weight": $('#weight').val(),
      "height": $('#height').val()
    },
    dataType: 'JSON',
    success: function(response){
      if (response.status == 200) {
        switch (response.class.code) {
          case 1:
            $('#class-alert').html('<h1 class="alert-weight-class">Weight Class: Overweight</h1>');
            $('#class-alert').removeClass('alert-success');
            $('#class-alert').removeClass('alert-danger');
            $('#class-alert').addClass('alert-warning');
            $('.alert-weight-class').fadeIn();
            $('.alert-instruction-class').fadeIn();
            break;
          case 2:
            $('#class-alert').html('<h1 class="alert-weight-class">Weight Class: Obese</h1>');
            $('#class-alert').removeClass('alert-success');
            $('#class-alert').removeClass('alert-warning');
            $('#class-alert').addClass('alert-danger');
            $('.alert-weight-class').fadeIn();
            $('.alert-instruction-class').fadeIn();
            break;
          case 3:
            $('#class-alert').html('<h1 class="alert-weight-class">Weight Class: Wasted</h1>');
            $('#class-alert').removeClass('alert-success');
            $('#class-alert').removeClass('alert-danger');
            $('#class-alert').addClass('alert-warning');
            $('.alert-weight-class').fadeIn();
            $('.alert-instruction-class').fadeIn();
            break;
          case 4:
            $('#class-alert').html('<h1 class="alert-weight-class">Weight Class: Severely Wasted</h1>');
            $('#class-alert').removeClass('alert-success');
            $('#class-alert').removeClass('alert-warning');
            $('#class-alert').addClass('alert-danger');
            $('.alert-weight-class').fadeIn();
            $('.alert-instruction-class').fadeIn();
            break;
          case 5:
            $('#class-alert').html('<h1 class="alert-weight-class">Weight Class: Normal</h1>');
            $('#class-alert').removeClass('alert-warning');
            $('#class-alert').removeClass('alert-danger');
            $('#class-alert').addClass('alert-success');
            $('.alert-weight-class').fadeIn();
            $('.alert-instruction-class').fadeOut();
            break;
          case 6:
            $('#class-alert').html('<h1 class="alert-weight-class">Weight Class: Unknown!?</h1>');
            $('#class-alert').removeClass('alert-success');
            $('#class-alert').removeClass('alert-warning');
            $('#class-alert').addClass('alert-danger');
            $('.alert-weight-class').fadeIn();
            $('.alert-instruction-class').fadeIn();
            break;
          default:

        }
      }
    }
  });
});

$('#btn-proceed-recall').click(function(){
  window.location = '<?php echo base_url(); ?>user?ref=calculator';
});

</script>
