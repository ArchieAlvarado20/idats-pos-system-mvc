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
      <div class="container col-md-8 mt-3">

        <div class="card shadow">
        <div class=" text-center text-secondary mt-4">
                    <h3 class="mb-2"><strong><i class="fa fa-hamburger"></i> Cancelled Item Details</strong></h3>
                </div>  
              <!-- /.card-header -->
              <div class="card-body row d-flex">
                <div class="col-sm-6 border p-3">
                  <center> <label for=""><u>(Transaction Details)</u></label></center>

                <div class="mb-3">
  
                  <label for="">Transaction no.</label>
                  <input type="text" name="transno" id="transno" class="form-control" autocomplete="off" value="<?=set_value('transno',$row['transno'])?>" readonly>
                </div>
                <div class="mb-3">
                  <label for="">Pcode</label>
                  <input type="text" name="pcode" id="pcode" class="form-control" autocomplete="off" value="<?=set_value('pcode',$row['pcode'])?>" readonly>
                </div>

                <div class="mb-3">
                  <label for="">Description</label>
                  <input type="text" name="description" id="description" class="form-control description" autocomplete="off" value="<?php echo $row['description']?>" readonly>
                </div>
                <div class="mb-3">
                  <label for="">Price</label>
                  <input type="text" name="price" id="price" class="form-control price" autocomplete="off" value="<?php echo $row['price']?>" readonly>
                </div>

                <div class="mb-3">
                  <label for="">Quantity</label>
                  <input type="text"  class="form-control" autocomplete="off" value="<?php echo $row['t_qty']?>" readonly>
                </div>
                
                <div class="mb-3">
                  <label for="">Total</label>
                  <input type="text" name="total" id="total" class="form-control total" autocomplete="off" value="<?php echo $row['total']?>" readonly>
                </div>

                <div class="mb-3 row">
                  <div class="col-sm-6">
                      <label for="">Date Purchased</label>
                      <input type="text" name="sdate" id="sdate" class="form-control sdate" autocomplete="off" value="<?php echo $row['sdate']?>" readonly>
                  </div>
                  <div class="col-sm-6">
                  <label for="">Time Purchased</label>
                      <input type="text" name="stime" id="stime" class="form-control stime" autocomplete="off" value="<?php echo $row['stime']?>" readonly>
                  </div>
                
                </div>
               
                <div class="row d-flex mt-4">
                  <div class="col-sm-6">
                    <a href="index.php?pg=cancelled-items"><button type="button" class="btn btn-warning text-light px-5">
                          Back
                        </button></a>
                  </div>
             
      
                </div>
              </div>
              <!-- second card -->
              <div class="col-sm-6 border p-3">
              <center> <label for="" ><u>(Cancelation Details)</u></label></center>
                <div class="mb-3">
                
                  <label for="">Void by</label>
                  <input type="text" name="void_by" id="void_by" class="form-control" autocomplete="off" value="<?php echo $row['void_by']?>" readonly>
                </div>
                <div class="mb-3">
                  <label for="">Cancel requested by</label>
                  <input type="text" name="cancel_request" id="cancel_request" class="form-control" autocomplete="off" value="<?php echo $row['cancel_request']?>" readonly>
                </div>

                <div class="mb-3">
                  <label for="">Cancelled Qty</label>
                  <input type="number" name="qty" id="qty" class="form-control" autocomplete="off"  value="<?php echo $row['c_qty']?>" readonly>
                </div>
                <div class="mb-3">
                  <label for="">Action</label>
                  <input type="text" name="action" id="action" class="form-control action" autocomplete="off"  value="<?php echo $row['action']?>" readonly>
                </div>

                <div class="mb-3">
                  <label for="">Reason</label>
                  <input type="text" name="reason" id="reason" class="form-control reason" autocomplete="off" value="<?php echo $row['reason']?>" readonly>
                </div>
                <div class="mb-3">
                  <label for="">Date Cancelled</label>
                  <input type="text" name="date" id="date" class="form-control date" autocomplete="off"  value="<?php echo $row['date']?>" readonly>
                </div>

                <div class="mb-3">
                  <label for="">Time Cancelled</label>
                  <input type="text" name="time" id="time" class="form-control time" autocomplete="off" value="<?php echo $row['time']?>" readonly>
          </div>
          
              </div>
            </div>
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
