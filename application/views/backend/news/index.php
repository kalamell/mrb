
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Happenings
        <small>จัดการหน้า Happenings</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
        <li class="active">Happenings</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">จัดการหน้า Happenings</h3>

          <div class="box-tools pull-right">
            <a href="<?php echo site_url('backend/news/add');?>" class='btn btn-sm btn-info'><i class='fa fa-plus'></i> เพิ่ข้อมูล</a>
          </div>
        </div>
        <div class="box-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>หัวข้อ</th>
                <th width="100">Gallery</th>
                <th width="100">&nbsp;</th>
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
                    <td><strong><?php echo $r->title;?></strong><br><?php echo $r->short_desc;?></td>
                    <td align="center"><a href="<?php echo site_url('backend/news/gallery/'.$r->id);?>" class='btn btn-sm btn-info'><i class="fa fa-image"></i></a></td>
                    
                    <td width="200">
                      <center>
                        <div class="btn-group">
                          <a href="<?php echo site_url('backend/news/edit/'.$r->id);?>" class='btn btn-sm btn-default'><i class="fa fa-edit"></i> Edit</a>
                          <a href="<?php echo site_url('backend/news/delete/'.$r->id);?>" onclick="javascript:return confirm('ต้องการลบหรือไม่ ?');" class='btn btn-sm btn-default'><i class="fa fa-trash"></i> Delete</a>
                          
                        </div>
                      </center>
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
