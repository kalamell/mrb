
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Press and Media
        <small>จัดการหน้า Press and Media</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
        <li class="active">Press and Media</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">จัดการหน้า Press and Media</h3>

          <div class="box-tools pull-right">
            <a href="<?php echo site_url('backend/media/add');?>" class='btn btn-sm btn-info'><i class='fa fa-plus'></i> เพิ่ข้อมูล</a>
          </div>
        </div>
        <div class="box-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Title</th>
                <th>Youtube</th>
                <th>&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php if(count($rs)==0):?>
                <tr>
                  <td colspan="4"><center>ไม่มีข้อมูล</center></td>
                </tr>
              <?php else:?>
                <?php foreach($rs as $r):?>
                  <tr>
                    <td><?php echo $r->title;?></td>
                    <td width="300">
                      <a href="https://www.youtube.com/watch?v=<?php echo $r->youtubeid;?>" target="_blank">
                        <img src="https://img.youtube.com/vi/<?php echo $r->youtubeid;?>/0.jpg">
                      </a>
                    </td>
                    <td width="200">
                      <div class="btn-group">
                        <a href="<?php echo site_url('backend/media/edit/'.$r->id);?>" class='btn btn-sm btn-default'><i class="fa fa-edit"></i> Edit</a>
                        <a href="<?php echo site_url('backend/media/delete/'.$r->id);?>" onclick="javascript:return confirm('ต้องการลบหรือไม่ ?');" class='btn btn-sm btn-default'><i class="fa fa-trash"></i> Delete</a>
                        
                      </div>
                    </td>
                  </tr>
                <?php endforeach;?>
              <?php endif;?>
            </tbody>
            
          </table>
        </div>
        
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
