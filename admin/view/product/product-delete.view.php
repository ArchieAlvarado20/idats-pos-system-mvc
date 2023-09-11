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
      <!-- <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-12">
            <h1 class="fw-bold text-center" style="font-weight: bolder;">Delete Product</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
             
            </ol>
          </div>
        </div>
      </div> -->
      <!-- /.container-fluid -->
    </section>
     <!-- Main content -->
     <section class="content">
      <div class="container col-md-8 mt-5">
      
        <div class="card shadow">
        <div class="card-header text-center text-secondary p-3">
                    <h3 class="mb-3"><strong><i class="fa fa-hamburger"></i> Delete Product</strong></h3>
                    <div class="alert alert-danger text-center alert-dismissible fade show mb-1" role="alert">Are you sure you want to delete this product?
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                    </div>
                </div>  
              <!-- /.card-header -->
              <div class="card-body">
              <?php if(!empty($row)):?>
              <form action="" method="POST" enctype="multipart/form-data">
                
               <!-- <div class="mb-3">
                  <label for="">Pcode</label>
                  <input type="number" name="pcode" id="pcode" class="form-control" autocomplete="off" >
                </div> -->
                <div class="mb-3">
                  <label for="">Barcode</label>
                  <input type="number" name="barcode" id="barcode" class="form-control" autocomplete="off" value="<?=set_value('barcode',$row['barcode'])?>" readonly>
                </div>
                <div class="mb-3">
                  <label for="">Description</label>
                  <input type="text" name="description" id="description" class="form-control" autocomplete="off" value="<?=set_value('description',$row['description'])?>" readonly>
                </div>

                <div class="mb-3">
                <label for="">Category</label>  
                    <select disabled name="" id="" class="form-control" value="<?=set_value('category',$row['category'])?>" readonly>
                        <option value="">Category 1</option>
                        <option value="">Category 2</option>
                        <option value="">Category 3</option>
                        <option value="">Category 4</option>
                        <option value="">Category 5</option>
                      </select>
                </div>
                <div class="mb-3">
                  <label for="">Re-order level</label>
                  <input type="number" name="re_order" id="re_order" class="form-control re_order" autocomplete="off" value="<?=set_value('re_order',$row['re_order'])?>" readonly>
                </div>
               
                <div class="row d-flex mt-4">
                  <div class="col-sm-6">
                    <a href="index.php?pg=product"><button type="button" class="btn btn-warning text-light px-5">
                          Back
                        </button></a>
                  </div>
                <div class="col-sm-6 text-right">
                     <button type="" class="btn btn-danger px-5" name="" onclick="alert('Successfully Deleted!')">Delete</button>
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
