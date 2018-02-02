
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
        <li class=""><a href="<?php echo site_url('backend/news');?>">Happenings</a></li>
        <li class="active">Gallery</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">จัดการหน้า Happenings</h3>
        </div>
        <div class="box-body">
          <?php echo form_open_multipart('backend/news/upload', array('class' => 'form-inline'));?>
          <input type="hidden" name="news_id" value="<?php echo $news_id;?>">
          <div class="form-group">
            <label for="file">File</label>
            <input type="file" class="form-control" id="file" name="img_path" placeholder="">
          </div>
          
          <button type="submit" class="btn btn-default">Upload</button>

          <?php echo form_close();?>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ภาพ</th>
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
                    <td>
                      <img src="<?php echo base_url();?>upload/<?php echo $r->img_path;?>" class='img-responsive'>
                    </td>
                    
                    <td width="200">
                      <center>
                        <div class="btn-group">
                          <a href="<?php echo site_url('backend/news/delete_image/'.$r->news_id.'/'.$r->gid);?>" onclick="javascript:return confirm('ต้องการลบหรือไม่ ?');" class='btn btn-sm btn-default'><i class="fa fa-trash"></i> Delete</a>
                          
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
