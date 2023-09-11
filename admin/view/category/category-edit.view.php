<?php
require_once view_path('partials/header');
?>
<style>
  @import url('dist/css/brand-style.css');
</style>
<!-- Google Font: Source Sans Pro -->

  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </section>
     <!-- Main content -->
     <section class="content mt-3">
      <div class="container col-md-8">
      
        <div class="card shadow ">
        
              <!-- /.card-header -->
              <div class="card-body">
                    <div class="card-header mb-3">
                      <div class="row mb-2">
                        <div class="col-sm-12">
                          <h4 class="fw-bold text-center text-secondary" style="font-weight: bolder;"><strong><i class="fa fa-mug-hot"></i> Update Category</strong></h4>
                        </div>
                      </div>
                    </div>
                    <?php if(!empty($row)):?>
               <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="">Category</label>
                  <input value="<?=set_value('category', $row['category'])?>" type="text" name="category" id="category" class="form-control <?=!empty($error['category']) ? 'border-danger' : '' ;?>" autocomplete="off" >
                  <?php if(!empty($error['category'])):?><small class="text-danger"><?=$error['category']?></small><?php endif; ?>
                </div>
               
                <div class="row d-flex">
                  <div class="col-sm-6 mt-2">
                      <a href="index.php?pg=category"><button type="button" class="btn btn-warning px-5">
                            Back
                          </button></a>
                  </div>
                  <div class="col-sm-6 text-right mt-2">
                <button class="btn btn-success px-5">Update</button>
                  </div>
              </div>
            
               </form>
               <?php else: ?>
                No product was found.
                <br><br>
            
                    <a href="index.php?pg=product">
                        <button type="button" class="col-md-5 btn btn-danger me-1">Back</button>
                    </a>
    
             <?php endif; ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
         
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  
  <?php
  require view_path('partials/footer');
  ?>