<div class="container">

  <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">

    <table class="table table-bordered">
      <thead class="chart-boys-head">
        <tr>
          <th>AGE IN MONTHS</th>
          <th>L(t)</th>
          <th>M(t)</th>
          <th>S(t)</th>
          <th>ACTION</th>
        </tr>
        <?php if($personal_info->user_group): ?>
          <tr>
            <th><input class="form-control" type="text" name="agemos" id="agemos" placeholder="" value=""></th>
            <th><input class="form-control" type="text" name="val_l" id="val_l" placeholder="" value=""></th>
            <th><input class="form-control" type="text" name="val_m" id="val_m" placeholder="" value=""></th>
            <th><input class="form-control" type="text" name="val_s" id="val_s" placeholder="" value=""></th>
            <th><button type="button" class="btn btn-primary" id="submit-chart-entry"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button></th>
          </tr>
        <?php endif; ?>
      </thead>
      <tbody class="chart-body">

      </tbody>
    </table>

  </div>

</div>

<script>

$(document).ready(function(){
  update_chart(0);
});

$('#submit-chart-entry').click(function(){
  $.ajax({
    url: '<?php echo base_url(); ?>growth/add',
    method: 'POST',
    data: {
      "agem"  : $('#agemos').val(),
      "val_l" : $('#val_l').val(),
      "val_m" : $('#val_m').val(),
      "val_s" : $('#val_s').val(),
      "gender": 0
    },
    dataType: 'JSON',
    success: function(response){
      if (response.status == 200) {
        update_chart(0);
        $('input').each(function(){
          $(this).val('');
        });
      }
    }
  });
});

function update_chart(gender) {
  $.ajax({
    url: '<?php echo base_url(); ?>growth/fetch',
    method: 'GET',
    data: {
      "gender": gender
    },
    dataType: 'JSON',
    success: function(response){
      if (response.status == 200) {
        var chartHtml = '';
        for (var key in response.chart) {
          chartHtml += '<tr>';
          chartHtml += '<td><span>' + response.chart[key].agem + '</span></td>';
          chartHtml += '<td><span>' + response.chart[key].val_l + '</span></td>';
          chartHtml += '<td><span>' + response.chart[key].val_m + '</span></td>';
          chartHtml += '<td><span>' + response.chart[key].val_s + '</span></td>';
          chartHtml += '<td><button type="button" class="btn btn-primary delete-chart-entry" onclick="remove_entry(this, ' + response.chart[key].id + ')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>';
          chartHtml += '</tr>';
        }
        $('.chart-body').empty().html(chartHtml);
      }
    }
  });
}

function remove_entry(element, id){
  $.ajax({
    url: '<?php echo base_url(); ?>growth/remove',
    method: 'GET',
    data: {
      "id": id
    },
    dataType: 'JSON',
    success: function(response){
      if (response.status == 200) {
        $(element).parent().parent().remove();
      } else {
        // error popup
      }
    }
  });
}

</script>
