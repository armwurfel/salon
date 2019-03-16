 <!-- Datatable style -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">  

 <section class="content">
   <div class="box">
    <div class="box-header">
      <h3 class="box-title">All Assign Tasks</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive">
      <table id="example1" class="table table-bordered table-striped ">
        <thead>
        <tr>
          <th>Task Name</th>
          <th>Worker Name</th>
          <th>Task Date</th>
          <th>Task Status</th>
          <th style="width: 150px;" class="text-right">Option</th>
        </tr>
        </thead>
        <tbody>
          <?php foreach($all_assign_tasks as $row): ?>
          <tr>
            <td><?= $row['task_id']; ?></td>
            <td><?= $row['worker_id']; ?></td>
            <td><?= $row['task_date']; ?></td>
            <td>
              <span class="btn btn-primary btn-flat btn-xs">
                <?php
                 if($row['task_status'] == 0) {echo 'Not Commpleted';} 
                 else{echo 'Completed';} 
                ?>
              <span>
            </td>
            <td class="text-right"><a href="<?= base_url('admin/tasks/assign_edit/'.$row['id']); ?>" class="btn btn-info btn-flat">Edit</a><a href="<?= base_url('admin/tasks/assign_del/'.$row['id']); ?>" class="btn btn-danger btn-flat">Delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
       
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</section>  

<!-- DataTables -->
<script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script> 
<script>
$("#view_assign_tasks").addClass('active');
</script>        
