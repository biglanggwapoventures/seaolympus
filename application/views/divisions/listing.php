<section class="content-header">
  <h1>
    Divisions
    <a class="btn btn-flat btn-default pull-right btn-sm" href="<?= base_url('divisions/create')?>"><i class="fa fa-plus"></i> Add new division</a>
  </h1>
</section>
<section class="content">

  <!-- Default box -->
  <div class="box box-solid">
    <div class="box-body no-padding">
      <table class="table table-hover table-striped">
      	<thead>
			<tr><th>Division #</th><th>Name</th></tr>      		
      	</thead>
      	<tbody>
      		<?php foreach($items AS $row):?>
      			<tr>
              <td><a href="<?= base_url("divisions/edit/{$row['id']}")?>"><?= $row['id_number']?></a></td>
      				<td><?= $row['name']?></td>
      			</tr>
      		<?php endforeach;?>
      	</tbody>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</section>