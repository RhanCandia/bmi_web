<div class="container">

  <div class="row">
    <div class="col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
      <h1 class="studrep-heading"><?php echo $student[0]->fname . ' ' . $student[0]->lname; ?> (<?php echo $student[0]->level; ?>) </h1>
    </div>
  </div>

  <br />
  <br />

  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#records" aria-controls="records" role="tab" data-toggle="tab">BMI RECORDS</a></li>
    <li role="presentation"><a href="#workouts" aria-controls="workouts" role="tab" data-toggle="tab">WORKOUTS</a></li>
  </ul>

  <div class="tab-content profile-tab-content">
    <div role="tabpanel" class="tab-pane active" id="records">
      <table class="table table-striped">
        <thead class="records-thead">
          <tr>
            <th>Weight</th>
            <th>Height</th>
            <th>BMI</th>
            <th>Z-Score</th>
            <th>Class</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody class="records-tbody">
          <?php if ($records): ?>
            <?php foreach ($records as $record): ?>
              <tr>
                <td>
                  <?php echo $record->weight; ?>
                </td>
                <td>
                  <?php echo $record->height; ?>
                </td>
                <td>
                  <?php echo $record->bmi; ?>
                </td>
                <td>
                  <?php echo $record->zscore; ?>
                </td>
                <td>
                  <?php echo $record->class; ?>
                </td>
                <td>
                  <?php echo date('Y-m-d', $record->date_tracked); ?>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="workouts">
      <table class="table table-striped">
        <thead class="workouts-thead">
          <tr>
            <th>Workout</th>
            <th>Heart BPM Before</th>
            <th>Heart BPM After</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody class="workouts-tbody">
          <?php if ($workouts): ?>
            <?php foreach ($workouts as $workout): ?>
              <tr>
                <td>
                  <?php echo $workout->title; ?>
                </td>
                <td>
                  <?php echo $workout->bpm_before; ?>
                </td>
                <td>
                  <?php echo $workout->bpm_after; ?>
                </td>
                <td>
                  <?php echo date('Y-m-d', $workout->date_tracked); ?>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>

</div>
