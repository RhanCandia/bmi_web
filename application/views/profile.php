<div class="container">

  <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">

    <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#personal" aria-controls="personal" role="tab" data-toggle="tab">PERSONAL INFO</a></li>
        <li role="presentation"><a href="#recall" id="toggle-recall" aria-controls="recall" role="tab" data-toggle="tab">RECALL</a></li>
        <li role="presentation"><a href="#day1" aria-controls="day1" role="tab" data-toggle="tab">DAY 1</a></li>
        <li role="presentation"><a href="#day2" aria-controls="day2" role="tab" data-toggle="tab">DAY 2</a></li>
        <li role="presentation"><a href="#day3" aria-controls="day3" role="tab" data-toggle="tab">DAY 3</a></li>
        <li role="presentation"><a href="#day4" aria-controls="day4" role="tab" data-toggle="tab">DAY 4</a></li>
        <li role="presentation"><a href="#day5" aria-controls="day5" role="tab" data-toggle="tab">DAY 5</a></li>
        <li role="presentation"><a href="#summary" aria-controls="summary" role="tab" data-toggle="tab">SUMMARY</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content profile-tab-content">
        <div role="tabpanel" class="tab-pane active" id="personal">
          PROFILE
        </div>
        <div role="tabpanel" class="tab-pane" id="recall">
          <h2 style="text-align: center;">FOOD RECALL</h2>
          <p style="text-align: center;">
            Recall your food intake yesterday. Use <a href="http://www.myfitnesspal.com/en/nutrition-facts-calories/filipino-food" target="_blank">this</a> (http://www.myfitnesspal.com/en/nutrition-facts-calories/filipino-food) as your reference.
          </p>
          <br />
          <table class="table table-bordered dietary-table">
            <thead>
              <tr>
                <th>FOOD</th>
                <th>PROTEIN</th>
                <th>CARBOHYDRATES</th>
                <th>FATS</th>
                <th>CALORIES</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span>BREAKFAST</span></td>
                <td><input class="form-control" type="text" name="bfprotein" id="bfprotein_rc" value=""></td>
                <td><input class="form-control" type="text" name="bfcarbs" id="bfcarbs_rc" value=""></td>
                <td><input class="form-control" type="text" name="bffats" id="bffats_rc" value=""></td>
                <td><input class="form-control" type="text" name="bfcalories" id="bfcalories_rc" value=""></td>
              </tr>
              <tr>
                <td><span>LUNCH</span></td>
                <td><input class="form-control" type="text" name="lhprotein" id="lhprotein_rc" value=""></td>
                <td><input class="form-control" type="text" name="lhcarbs" id="lhcarbs_rc" value=""></td>
                <td><input class="form-control" type="text" name="lhfats" id="lhfats_rc" value=""></td>
                <td><input class="form-control" type="text" name="lhcalories" id="lhcalories_rc" value=""></td>
              </tr>
              <tr>
                <td><span>DINNER</span></td>
                <td><input class="form-control" type="text" name="drprotein" id="drprotein_rc" value=""></td>
                <td><input class="form-control" type="text" name="drcarbs" id="drcarbs_rc" value=""></td>
                <td><input class="form-control" type="text" name="drfats" id="drfats_rc" value=""></td>
                <td><input class="form-control" type="text" name="drcalories" id="drcalories_rc" value=""></td>
              </tr>
              <tr>
                <td><span>TOTAL CALORIE INTAKE</span></td>
                <td><input class="form-control" type="text" name="ttprotein" id="ttprotein_rc" value="" readonly></td>
                <td><input class="form-control" type="text" name="ttcarbs" id="ttcarbs_rc" value="" readonly></td>
                <td><input class="form-control" type="text" name="ttfats" id="ttfats_rc" value="" readonly></td>
                <td><input class="form-control" type="text" name="ttcalories" id="ttcalories_rc" value="" readonly></td>
              </tr>
            </tbody>
          </table>
          <button class="btn btn-primary pull-right" type="button" id="btn-save-recall">SAVE CHANGES</button>
          <br />
          <br />
        </div>
        <div role="tabpanel" class="tab-pane" id="day1">
          <h2 style="text-align: center;">DAY 1</h2>
          <p style="text-align: center;">
            How much calorie did you take today? Use <a href="http://www.myfitnesspal.com/en/nutrition-facts-calories/filipino-food" target="_blank">this</a> (http://www.myfitnesspal.com/en/nutrition-facts-calories/filipino-food) as your reference.
          </p>
          <br />
          <table class="table table-bordered dietary-table">
            <thead>
              <tr>
                <th>FOOD</th>
                <th>PROTEIN</th>
                <th>CARBOHYDRATES</th>
                <th>FATS</th>
                <th>CALORIES</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span>BREAKFAST</span></td>
                <td><input class="form-control" type="text" name="bfprotein" id="bfprotein_d1" value=""></td>
                <td><input class="form-control" type="text" name="bfcarbs" id="bfcarbs_d1" value=""></td>
                <td><input class="form-control" type="text" name="bffats" id="bffats_d1" value=""></td>
                <td><input class="form-control" type="text" name="bfcalories" id="bfcalories_d1" value=""></td>
              </tr>
              <tr>
                <td><span>LUNCH</span></td>
                <td><input class="form-control" type="text" name="lhprotein" id="lhprotein_d1" value=""></td>
                <td><input class="form-control" type="text" name="lhcarbs" id="lhcarbs_d1" value=""></td>
                <td><input class="form-control" type="text" name="lhfats" id="lhfats_d1" value=""></td>
                <td><input class="form-control" type="text" name="lhcalories" id="lhcalories_d1" value=""></td>
              </tr>
              <tr>
                <td><span>DINNER</span></td>
                <td><input class="form-control" type="text" name="drprotein" id="drprotein_d1" value=""></td>
                <td><input class="form-control" type="text" name="drcarbs" id="drcarbs_d1" value=""></td>
                <td><input class="form-control" type="text" name="drfats" id="drfats_d1" value=""></td>
                <td><input class="form-control" type="text" name="drcalories" id="drcalories_d1" value=""></td>
              </tr>
              <tr>
                <td><span>TOTAL CALORIE INTAKE</span></td>
                <td><input class="form-control" type="text" name="ttprotein" id="ttprotein_d1" value="" readonly></td>
                <td><input class="form-control" type="text" name="ttcarbs" id="ttcarbs_d1" value="" readonly></td>
                <td><input class="form-control" type="text" name="ttfats" id="ttfats_d1" value="" readonly></td>
                <td><input class="form-control" type="text" name="ttcalories" id="ttcalories_d1" value="" readonly></td>
              </tr>
            </tbody>
          </table>
          <button class="btn btn-primary pull-right" type="button" id="btn-save-d1">SAVE CHANGES</button>
          <br />
          <br />
        </div>
        <div role="tabpanel" class="tab-pane" id="day2">
          <h2 style="text-align: center;">DAY 2</h2>
          <p style="text-align: center;">
            How much calorie did you take today? Use <a href="http://www.myfitnesspal.com/en/nutrition-facts-calories/filipino-food" target="_blank">this</a> (http://www.myfitnesspal.com/en/nutrition-facts-calories/filipino-food) as your reference.
          </p>
          <br />
          <table class="table table-bordered dietary-table">
            <thead>
              <tr>
                <th>FOOD</th>
                <th>PROTEIN</th>
                <th>CARBOHYDRATES</th>
                <th>FATS</th>
                <th>CALORIES</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span>BREAKFAST</span></td>
                <td><input class="form-control" type="text" name="bfprotein" id="bfprotein_d2" value=""></td>
                <td><input class="form-control" type="text" name="bfcarbs" id="bfcarbs_d2" value=""></td>
                <td><input class="form-control" type="text" name="bffats" id="bffats_d2" value=""></td>
                <td><input class="form-control" type="text" name="bfcalories" id="bfcalories_d2" value=""></td>
              </tr>
              <tr>
                <td><span>LUNCH</span></td>
                <td><input class="form-control" type="text" name="lhprotein" id="lhprotein_d2" value=""></td>
                <td><input class="form-control" type="text" name="lhcarbs" id="lhcarbs_d2" value=""></td>
                <td><input class="form-control" type="text" name="lhfats" id="lhfats_d2" value=""></td>
                <td><input class="form-control" type="text" name="lhcalories" id="lhcalories_d2" value=""></td>
              </tr>
              <tr>
                <td><span>DINNER</span></td>
                <td><input class="form-control" type="text" name="drprotein" id="drprotein_d2" value=""></td>
                <td><input class="form-control" type="text" name="drcarbs" id="drcarbs_d2" value=""></td>
                <td><input class="form-control" type="text" name="drfats" id="drfats_d2" value=""></td>
                <td><input class="form-control" type="text" name="drcalories" id="drcalories_d2" value=""></td>
              </tr>
              <tr>
                <td><span>TOTAL CALORIE INTAKE</span></td>
                <td><input class="form-control" type="text" name="ttprotein" id="ttprotein_d2" value="" readonly></td>
                <td><input class="form-control" type="text" name="ttcarbs" id="ttcarbs_d2" value="" readonly></td>
                <td><input class="form-control" type="text" name="ttfats" id="ttfats_d2" value="" readonly></td>
                <td><input class="form-control" type="text" name="ttcalories" id="ttcalories_d2" value="" readonly></td>
              </tr>
            </tbody>
          </table>
          <button class="btn btn-primary pull-right" type="button" id="btn-save-d2">SAVE CHANGES</button>
          <br />
          <br />
        </div>
        <div role="tabpanel" class="tab-pane" id="day3">
          <h2 style="text-align: center;">DAY 3</h2>
          <p style="text-align: center;">
            How much calorie did you take today? Use <a href="http://www.myfitnesspal.com/en/nutrition-facts-calories/filipino-food" target="_blank">this</a> (http://www.myfitnesspal.com/en/nutrition-facts-calories/filipino-food) as your reference.
          </p>
          <br />
          <table class="table table-bordered dietary-table">
            <thead>
              <tr>
                <th>FOOD</th>
                <th>PROTEIN</th>
                <th>CARBOHYDRATES</th>
                <th>FATS</th>
                <th>CALORIES</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span>BREAKFAST</span></td>
                <td><input class="form-control" type="text" name="bfprotein" id="bfprotein_d3" value=""></td>
                <td><input class="form-control" type="text" name="bfcarbs" id="bfcarbs_d3" value=""></td>
                <td><input class="form-control" type="text" name="bffats" id="bffats_d3" value=""></td>
                <td><input class="form-control" type="text" name="bfcalories" id="bfcalories_d3" value=""></td>
              </tr>
              <tr>
                <td><span>LUNCH</span></td>
                <td><input class="form-control" type="text" name="lhprotein" id="lhprotein_d3" value=""></td>
                <td><input class="form-control" type="text" name="lhcarbs" id="lhcarbs_d3" value=""></td>
                <td><input class="form-control" type="text" name="lhfats" id="lhfats_d3" value=""></td>
                <td><input class="form-control" type="text" name="lhcalories" id="lhcalories_d3" value=""></td>
              </tr>
              <tr>
                <td><span>DINNER</span></td>
                <td><input class="form-control" type="text" name="drprotein" id="drprotein_d3" value=""></td>
                <td><input class="form-control" type="text" name="drcarbs" id="drcarbs_d3" value=""></td>
                <td><input class="form-control" type="text" name="drfats" id="drfats_d3" value=""></td>
                <td><input class="form-control" type="text" name="drcalories" id="drcalories_d3" value=""></td>
              </tr>
              <tr>
                <td><span>TOTAL CALORIE INTAKE</span></td>
                <td><input class="form-control" type="text" name="ttprotein" id="ttprotein_d3" value="" readonly></td>
                <td><input class="form-control" type="text" name="ttcarbs" id="ttcarbs_d3" value="" readonly></td>
                <td><input class="form-control" type="text" name="ttfats" id="ttfats_d3" value="" readonly></td>
                <td><input class="form-control" type="text" name="ttcalories" id="ttcalories_d3" value="" readonly></td>
              </tr>
            </tbody>
          </table>
          <button class="btn btn-primary pull-right" type="button" id="btn-save-d3">SAVE CHANGES</button>
          <br />
          <br />
        </div>
        <div role="tabpanel" class="tab-pane" id="day4">
          <h2 style="text-align: center;">DAY 4</h2>
          <p style="text-align: center;">
            How much calorie did you take today? Use <a href="http://www.myfitnesspal.com/en/nutrition-facts-calories/filipino-food" target="_blank">this</a> (http://www.myfitnesspal.com/en/nutrition-facts-calories/filipino-food) as your reference.
          </p>
          <br />
          <table class="table table-bordered dietary-table">
            <thead>
              <tr>
                <th>FOOD</th>
                <th>PROTEIN</th>
                <th>CARBOHYDRATES</th>
                <th>FATS</th>
                <th>CALORIES</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span>BREAKFAST</span></td>
                <td><input class="form-control" type="text" name="bfprotein" id="bfprotein_d4" value=""></td>
                <td><input class="form-control" type="text" name="bfcarbs" id="bfcarbs_d4" value=""></td>
                <td><input class="form-control" type="text" name="bffats" id="bffats_d4" value=""></td>
                <td><input class="form-control" type="text" name="bfcalories" id="bfcalories_d4" value=""></td>
              </tr>
              <tr>
                <td><span>LUNCH</span></td>
                <td><input class="form-control" type="text" name="lhprotein" id="lhprotein_d4" value=""></td>
                <td><input class="form-control" type="text" name="lhcarbs" id="lhcarbs_d4" value=""></td>
                <td><input class="form-control" type="text" name="lhfats" id="lhfats_d4" value=""></td>
                <td><input class="form-control" type="text" name="lhcalories" id="lhcalories_d4" value=""></td>
              </tr>
              <tr>
                <td><span>DINNER</span></td>
                <td><input class="form-control" type="text" name="drprotein" id="drprotein_d4" value=""></td>
                <td><input class="form-control" type="text" name="drcarbs" id="drcarbs_d4" value=""></td>
                <td><input class="form-control" type="text" name="drfats" id="drfats_d4" value=""></td>
                <td><input class="form-control" type="text" name="drcalories" id="drcalories_d4" value=""></td>
              </tr>
              <tr>
                <td><span>TOTAL CALORIE INTAKE</span></td>
                <td><input class="form-control" type="text" name="ttprotein" id="ttprotein_d4" value="" readonly></td>
                <td><input class="form-control" type="text" name="ttcarbs" id="ttcarbs_d4" value="" readonly></td>
                <td><input class="form-control" type="text" name="ttfats" id="ttfats_d4" value="" readonly></td>
                <td><input class="form-control" type="text" name="ttcalories" id="ttcalories_d4" value="" readonly></td>
              </tr>
            </tbody>
          </table>
          <button class="btn btn-primary pull-right" type="button" id="btn-save-d4">SAVE CHANGES</button>
          <br />
          <br />
        </div>
        <div role="tabpanel" class="tab-pane" id="day5">
          <h2 style="text-align: center;">DAY 5</h2>
          <p style="text-align: center;">
            How much calorie did you take today? Use <a href="http://www.myfitnesspal.com/en/nutrition-facts-calories/filipino-food" target="_blank">this</a> (http://www.myfitnesspal.com/en/nutrition-facts-calories/filipino-food) as your reference.
          </p>
          <br />
          <table class="table table-bordered dietary-table">
            <thead>
              <tr>
                <th>FOOD</th>
                <th>PROTEIN</th>
                <th>CARBOHYDRATES</th>
                <th>FATS</th>
                <th>CALORIES</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span>BREAKFAST</span></td>
                <td><input class="form-control" type="text" name="bfprotein" id="bfprotein_d5" value=""></td>
                <td><input class="form-control" type="text" name="bfcarbs" id="bfcarbs_d5" value=""></td>
                <td><input class="form-control" type="text" name="bffats" id="bffats_d5" value=""></td>
                <td><input class="form-control" type="text" name="bfcalories" id="bfcalories_d5" value=""></td>
              </tr>
              <tr>
                <td><span>LUNCH</span></td>
                <td><input class="form-control" type="text" name="lhprotein" id="lhprotein_d5" value=""></td>
                <td><input class="form-control" type="text" name="lhcarbs" id="lhcarbs_d5" value=""></td>
                <td><input class="form-control" type="text" name="lhfats" id="lhfats_d5" value=""></td>
                <td><input class="form-control" type="text" name="lhcalories" id="lhcalories_d5" value=""></td>
              </tr>
              <tr>
                <td><span>DINNER</span></td>
                <td><input class="form-control" type="text" name="drprotein" id="drprotein_d5" value=""></td>
                <td><input class="form-control" type="text" name="drcarbs" id="drcarbs_d5" value=""></td>
                <td><input class="form-control" type="text" name="drfats" id="drfats_d5" value=""></td>
                <td><input class="form-control" type="text" name="drcalories" id="drcalories_d5" value=""></td>
              </tr>
              <tr>
                <td><span>TOTAL CALORIE INTAKE</span></td>
                <td><input class="form-control" type="text" name="ttprotein" id="ttprotein_d5" value="" readonly></td>
                <td><input class="form-control" type="text" name="ttcarbs" id="ttcarbs_d5" value="" readonly></td>
                <td><input class="form-control" type="text" name="ttfats" id="ttfats_d5" value="" readonly></td>
                <td><input class="form-control" type="text" name="ttcalories" id="ttcalories_d5" value="" readonly></td>
              </tr>
            </tbody>
          </table>
          <button class="btn btn-primary pull-right" type="button" id="btn-save-d5">SAVE CHANGES</button>
          <br />
          <br />
        </div>
        <div role="tabpanel" class="tab-pane" id="summary">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </div>

  </div>

</div>

<script>

$(document).ready(function(){
  var ref = '<?php echo $this->input->get('ref'); ?>';
  if (ref == 'calculator') {
    $('#toggle-recall').trigger('click');
  }
});

$('#btn-save-recall').click(function(){
  var bfprotein = $('#bfprotein_rc').val();
  var bfcarbs = $('#bfcarbs_rc').val();
  var bffats = $('#bffats_rc').val();
  var bfcalories = $('#bfcalories_rc').val();

  var lhprotein = $('#lhprotein_rc').val();
  var lhcarbs = $('#lhcarbs_rc').val();
  var lhfats = $('#lhfats_rc').val();
  var lhcalories = $('#lhcalories_rc').val();

  var drprotein = $('#drprotein_rc').val();
  var drcarbs = $('#drcarbs_rc').val();
  var drfats = $('#drfats_rc').val();
  var drcalories = $('#drcalories_rc').val();

  $.ajax({
    url: '<?php echo base_url(); ?>user/save_intake',
    method: 'POST',
    data: {
      'day': 0,
      'bfprotein': bfprotein,
      'bfcarbs': bfcarbs,
      'bffats': bffats,
      'bfcalories': bfcalories,
      'lhprotein': lhprotein,
      'lhcarbs': lhcarbs,
      'lhfats': lhfats,
      'lhcalories': lhcalories,
      'drprotein': drprotein,
      'drcarbs': drcarbs,
      'drfats': drfats,
      'drcalories': drcalories
    },
    dataType: 'JSON',
    success: function(response){
      if (response.status == 200) {
        console.log('UPDATES');
        $('#bfprotein_rc').val(response.intake.bfprotein);
        $('#bfcarbs_rc').val(response.intake.bfcarbs);
        $('#bffats_rc').val(response.intake.bffats);
        $('#bfcalories_rc').val(response.intake.bfcalories);

        $('#lhprotein_rc').val(response.intake.lhprotein);
        $('#lhcarbs_rc').val(response.intake.lhcarbs);
        $('#lhfats_rc').val(response.intake.lhfats);
        $('#lhcalories_rc').val(response.intake.lhcalories);

        $('#drprotein_rc').val(response.intake.drprotein);
        $('#drcarbs_rc').val(response.intake.drcarbs);
        $('#drfats_rc').val(response.intake.drfats);
        $('#drcalories_rc').val(response.intake.drcalories);
      }
    }
  });
});

$('#btn-save-d1').click(function(){
  var bfprotein = $('#bfprotein_d1').val();
  var bfcarbs = $('#bfcarbs_d1').val();
  var bffats = $('#bffats_d1').val();
  var bfcalories = $('#bfcalories_d1').val();

  var lhprotein = $('#lhprotein_d1').val();
  var lhcarbs = $('#lhcarbs_d1').val();
  var lhfats = $('#lhfats_d1').val();
  var lhcalories = $('#lhcalories_d1').val();

  var drprotein = $('#drprotein_d1').val();
  var drcarbs = $('#drcarbs_d1').val();
  var drfats = $('#drfats_d1').val();
  var drcalories = $('#drcalories_d1').val();

  $.ajax({
    url: '<?php echo base_url(); ?>user/save_intake',
    method: 'POST',
    data: {
      'day': 1,
      'bfprotein': bfprotein,
      'bfcarbs': bfcarbs,
      'bffats': bffats,
      'bfcalories': bfcalories,
      'lhprotein': lhprotein,
      'lhcarbs': lhcarbs,
      'lhfats': lhfats,
      'lhcalories': lhcalories,
      'drprotein': drprotein,
      'drcarbs': drcarbs,
      'drfats': drfats,
      'drcalories': drcalories
    },
    dataType: 'JSON',
    success: function(response){
      if (response.status == 200) {
        console.log('UPDATES');
        $('#bfprotein_d1').val(response.intake.bfprotein);
        $('#bfcarbs_d1').val(response.intake.bfcarbs);
        $('#bffats_d1').val(response.intake.bffats);
        $('#bfcalories_d1').val(response.intake.bfcalories);

        $('#lhprotein_d1').val(response.intake.lhprotein);
        $('#lhcarbs_d1').val(response.intake.lhcarbs);
        $('#lhfats_d1').val(response.intake.lhfats);
        $('#lhcalories_d1').val(response.intake.lhcalories);

        $('#drprotein_d1').val(response.intake.drprotein);
        $('#drcarbs_d1').val(response.intake.drcarbs);
        $('#drfats_d1').val(response.intake.drfats);
        $('#drcalories_d1').val(response.intake.drcalories);
      }
    }
  });
});

$('#btn-save-d2').click(function(){
  var bfprotein = $('#bfprotein_d2').val();
  var bfcarbs = $('#bfcarbs_d2').val();
  var bffats = $('#bffats_d2').val();
  var bfcalories = $('#bfcalories_d2').val();

  var lhprotein = $('#lhprotein_d2').val();
  var lhcarbs = $('#lhcarbs_d2').val();
  var lhfats = $('#lhfats_d2').val();
  var lhcalories = $('#lhcalories_d2').val();

  var drprotein = $('#drprotein_d2').val();
  var drcarbs = $('#drcarbs_d2').val();
  var drfats = $('#drfats_d2').val();
  var drcalories = $('#drcalories_d2').val();

  $.ajax({
    url: '<?php echo base_url(); ?>user/save_intake',
    method: 'POST',
    data: {
      'day': 2,
      'bfprotein': bfprotein,
      'bfcarbs': bfcarbs,
      'bffats': bffats,
      'bfcalories': bfcalories,
      'lhprotein': lhprotein,
      'lhcarbs': lhcarbs,
      'lhfats': lhfats,
      'lhcalories': lhcalories,
      'drprotein': drprotein,
      'drcarbs': drcarbs,
      'drfats': drfats,
      'drcalories': drcalories
    },
    dataType: 'JSON',
    success: function(response){
      if (response.status == 200) {
        console.log('UPDATES');
        $('#bfprotein_d2').val(response.intake.bfprotein);
        $('#bfcarbs_d2').val(response.intake.bfcarbs);
        $('#bffats_d2').val(response.intake.bffats);
        $('#bfcalories_d2').val(response.intake.bfcalories);

        $('#lhprotein_d2').val(response.intake.lhprotein);
        $('#lhcarbs_d2').val(response.intake.lhcarbs);
        $('#lhfats_d2').val(response.intake.lhfats);
        $('#lhcalories_d2').val(response.intake.lhcalories);

        $('#drprotein_d2').val(response.intake.drprotein);
        $('#drcarbs_d2').val(response.intake.drcarbs);
        $('#drfats_d2').val(response.intake.drfats);
        $('#drcalories_d2').val(response.intake.drcalories);
      }
    }
  });
});

$('#btn-save-d3').click(function(){
  var bfprotein = $('#bfprotein_d3').val();
  var bfcarbs = $('#bfcarbs_d3').val();
  var bffats = $('#bffats_d3').val();
  var bfcalories = $('#bfcalories_d3').val();

  var lhprotein = $('#lhprotein_d3').val();
  var lhcarbs = $('#lhcarbs_d3').val();
  var lhfats = $('#lhfats_d3').val();
  var lhcalories = $('#lhcalories_d3').val();

  var drprotein = $('#drprotein_d3').val();
  var drcarbs = $('#drcarbs_d3').val();
  var drfats = $('#drfats_d3').val();
  var drcalories = $('#drcalories_d3').val();

  $.ajax({
    url: '<?php echo base_url(); ?>user/save_intake',
    method: 'POST',
    data: {
      'day': 3,
      'bfprotein': bfprotein,
      'bfcarbs': bfcarbs,
      'bffats': bffats,
      'bfcalories': bfcalories,
      'lhprotein': lhprotein,
      'lhcarbs': lhcarbs,
      'lhfats': lhfats,
      'lhcalories': lhcalories,
      'drprotein': drprotein,
      'drcarbs': drcarbs,
      'drfats': drfats,
      'drcalories': drcalories
    },
    dataType: 'JSON',
    success: function(response){
      if (response.status == 200) {
        console.log('UPDATES');
        $('#bfprotein_d3').val(response.intake.bfprotein);
        $('#bfcarbs_d3').val(response.intake.bfcarbs);
        $('#bffats_d3').val(response.intake.bffats);
        $('#bfcalories_d3').val(response.intake.bfcalories);

        $('#lhprotein_d3').val(response.intake.lhprotein);
        $('#lhcarbs_d3').val(response.intake.lhcarbs);
        $('#lhfats_d3').val(response.intake.lhfats);
        $('#lhcalories_d3').val(response.intake.lhcalories);

        $('#drprotein_d3').val(response.intake.drprotein);
        $('#drcarbs_d3').val(response.intake.drcarbs);
        $('#drfats_d3').val(response.intake.drfats);
        $('#drcalories_d3').val(response.intake.drcalories);
      }
    }
  });
});

$('#btn-save-d4').click(function(){
  var bfprotein = $('#bfprotein_d4').val();
  var bfcarbs = $('#bfcarbs_d4').val();
  var bffats = $('#bffats_d4').val();
  var bfcalories = $('#bfcalories_d4').val();

  var lhprotein = $('#lhprotein_d4').val();
  var lhcarbs = $('#lhcarbs_d4').val();
  var lhfats = $('#lhfats_d4').val();
  var lhcalories = $('#lhcalories_d4').val();

  var drprotein = $('#drprotein_d4').val();
  var drcarbs = $('#drcarbs_d4').val();
  var drfats = $('#drfats_d4').val();
  var drcalories = $('#drcalories_d4').val();

  $.ajax({
    url: '<?php echo base_url(); ?>user/save_intake',
    method: 'POST',
    data: {
      'day': 4,
      'bfprotein': bfprotein,
      'bfcarbs': bfcarbs,
      'bffats': bffats,
      'bfcalories': bfcalories,
      'lhprotein': lhprotein,
      'lhcarbs': lhcarbs,
      'lhfats': lhfats,
      'lhcalories': lhcalories,
      'drprotein': drprotein,
      'drcarbs': drcarbs,
      'drfats': drfats,
      'drcalories': drcalories
    },
    dataType: 'JSON',
    success: function(response){
      if (response.status == 200) {
        console.log('UPDATES');
        $('#bfprotein_d4').val(response.intake.bfprotein);
        $('#bfcarbs_d4').val(response.intake.bfcarbs);
        $('#bffats_d4').val(response.intake.bffats);
        $('#bfcalories_d4').val(response.intake.bfcalories);

        $('#lhprotein_d4').val(response.intake.lhprotein);
        $('#lhcarbs_d4').val(response.intake.lhcarbs);
        $('#lhfats_d4').val(response.intake.lhfats);
        $('#lhcalories_d4').val(response.intake.lhcalories);

        $('#drprotein_d4').val(response.intake.drprotein);
        $('#drcarbs_d4').val(response.intake.drcarbs);
        $('#drfats_d4').val(response.intake.drfats);
        $('#drcalories_d4').val(response.intake.drcalories);
      }
    }
  });
});

$('#btn-save-d5').click(function(){
  var bfprotein = $('#bfprotein_d5').val();
  var bfcarbs = $('#bfcarbs_d5').val();
  var bffats = $('#bffats_d5').val();
  var bfcalories = $('#bfcalories_d5').val();

  var lhprotein = $('#lhprotein_d5').val();
  var lhcarbs = $('#lhcarbs_d5').val();
  var lhfats = $('#lhfats_d5').val();
  var lhcalories = $('#lhcalories_d5').val();

  var drprotein = $('#drprotein_d5').val();
  var drcarbs = $('#drcarbs_d5').val();
  var drfats = $('#drfats_d5').val();
  var drcalories = $('#drcalories_d5').val();

  $.ajax({
    url: '<?php echo base_url(); ?>user/save_intake',
    method: 'POST',
    data: {
      'day': 5,
      'bfprotein': bfprotein,
      'bfcarbs': bfcarbs,
      'bffats': bffats,
      'bfcalories': bfcalories,
      'lhprotein': lhprotein,
      'lhcarbs': lhcarbs,
      'lhfats': lhfats,
      'lhcalories': lhcalories,
      'drprotein': drprotein,
      'drcarbs': drcarbs,
      'drfats': drfats,
      'drcalories': drcalories
    },
    dataType: 'JSON',
    success: function(response){
      if (response.status == 200) {
        console.log('UPDATES');
        $('#bfprotein_d5').val(response.intake.bfprotein);
        $('#bfcarbs_d5').val(response.intake.bfcarbs);
        $('#bffats_d5').val(response.intake.bffats);
        $('#bfcalories_d5').val(response.intake.bfcalories);

        $('#lhprotein_d5').val(response.intake.lhprotein);
        $('#lhcarbs_d5').val(response.intake.lhcarbs);
        $('#lhfats_d5').val(response.intake.lhfats);
        $('#lhcalories_d5').val(response.intake.lhcalories);

        $('#drprotein_d5').val(response.intake.drprotein);
        $('#drcarbs_d5').val(response.intake.drcarbs);
        $('#drfats_d5').val(response.intake.drfats);
        $('#drcalories_d5').val(response.intake.drcalories);
      }
    }
  });
});

</script>
