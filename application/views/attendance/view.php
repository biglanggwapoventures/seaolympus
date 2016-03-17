<section class="content-header">
  <h1>
    My Attendance
    <small></small>
  </h1>
</section>
<section class="content">

  <!-- Default box -->
  <div class="box box-solid">
      <div class="box-body">
        <form class="form-inline" method="GET" action="<?= current_url()?>">
          <?php if(isset($search_employee)):?>
             <div class="form-group">
                <label>Employee number</label>
                <input type="number" class="form-control" name="employee_number" value="<?= $this->input->get('employee_number')?>">
              </div>
          <?php endif;?>
          <div class="form-group">
            <label for="start-date">Start date</label>
            <input type="text" class="form-control datepicker" id="start-date" name="start_date" value="<?= $this->input->get('start_date')?>">
          </div>
          <div class="form-group">
            <label for="end-date">End date</label>
            <input type="text" class="form-control datepicker" id="end-date" name="end_date" value="<?= $this->input->get('end_date')?>">
          </div>
          <button type="submit" class="btn btn-default btn-flat">Go!</button>
        </form>
        <hr>
        <table class="table table-bordered table-condensed table-striped">
          <thead><tr class="active"><th>Date</th><th>Time in</th><th>Time out</th><th></th></tr></thead>
          <tbody>
            <?php if(empty($data)): ?>
              <tr><td class="text-center" colspan="4">Nothing to display</td></tr>
            <?php endif;?>
            <?php foreach($data AS $row):?>
              <?php $in = date_create($row['datetime_in']) ?>
              <?php $out = date_create($row['datetime_out']) ?>
              <tr>
                <td><?= $in->format('d-M-Y')?></td>
                <td><?= $in->format('h:i A')?></td>
                <td><?= $out->format('h:i A')?></td>
                <td></td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
        <pre class="hidden">
        <?php print_r($data)?>
        </pre>
      </div><!-- /.box-body -->
  </div><!-- /.box -->
</section>