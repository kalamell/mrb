
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Press and Media
        <small>จัดการหน้า Press and Media</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('backend');?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
        <li><a href="<?php echo site_url('backend/media');?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
        <li class="active">แก้ไขข้อมูล</li>
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
        <div class="box-body body-padd">
          <?php echo form_open('backend/media/update');?>
          <input type="hidden" name="id" value="<?php echo $r->id;?>">
            <div class="box-body">
              <div class="form-group">
                <label for="title">ชื่อหัวข้อ</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="" value="<?php echo $r->title;?>">
              </div>


              <div class="form-group">
                <label for="title">คำอธิบายสั้น</label>
                <textarea class="form-control" name="shortly" rows="5"><?php echo $r->shortly;?></textarea>
              </div>


              <div class="form-group">
                <label for="youtubeid">YOUTUBE ID</label>
                <input type="text" class="form-control" id="youtubeid" name="youtubeid" placeholder="" value="<?php echo $r->youtubeid;?>">
              </div>

              
              
              <textarea id="editor1" name="description" rows="10" cols="80"><?php echo $r->description;?></textarea>


            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>

          <?php echo form_close();?>
        </div>
        
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
