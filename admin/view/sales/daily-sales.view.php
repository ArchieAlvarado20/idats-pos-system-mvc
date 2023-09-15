<?php require view_path('partials/header');?>
<style>
  @import url('assets/css/brand-style.css');
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
     <section class="content">
      <div class="container col-md-11">
        <div class="card shadow">
              <!-- /.card-header -->
              <div class="card-body ">
                  <div class="row p-0">
                      <div class="col-sm-3 mt-1">
                        <h3 class="text-secondary "><strong><i class="fa fa-hamburger"></i> Daily Sales</strong> </h3>
                      </div>
                      <div class="col-sm-6 text-center mt-3 text-primary"><strong><?php echo $_SESSION['revenue'] ?? null ?></strong></div>
                      <div class="col-sm-3">
                          <ol class="float-sm-right">
                              <?php foreach($daily_sales as $count) {?>
                            <h1>₱ <?= $count['total'] ?? "0" ?></h1>
                                <?php } ?>
                          </ol>
                      </div>
                    </div>
                    <form action="" method="post">
                    <?php date_default_timezone_set("Asia/Manila"); ?>
                            <div class="row d-flex mb-3">
                              <div class="col-sm-5"></div>
                                  <div class="col-sm-2">
                                      <div class="">
                                        <label for="">Cashier</label>
                                        <select class="form-control" id="cashier" name="cashier" >
                                        <?php foreach($cashier as $row){?>
                                          <option value="" disabled selected hidden>All Cashier</option>
                                          <option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
                                          <?php } ?>
                                        </select>
                                 

                                      </div>
                                    </div>
                                   
                                <div class="col-sm-2">
                                <label for="">Start-date</label><input type="date" class="form-control" name="start" value="<?php echo $start ?? date('Y-m-d') ?>"></div>
                                <div class="col-sm-2">
                                <label for="">End-date</label><input type="date" class="form-control" name="end" value="<?php echo $end ?? date('Y-m-d')?>" ></div>
                                <div class="col-sm-1">
                                <label for="">Action</label><button class="btn btn-primary px-4" name="filter">Filter</button> </div>
                        </div>
                    </form>
                  
                
                <table id="myTable" class="myTable table table-sm table-bordered table-striped table-hover bg-white mb-0 text-center">
                  <thead class="bg-light">
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Transno</th>
                    <th class="text-center">Pcode</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Qty</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Total</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">Cashier</th>
              
                  </tr>
                  </thead>
                  <tbody>
                  <!-- 'barcode',
                    'transno',
                    'description',
                    'qty',
                    'price',
                    'total',
                    'date',
                    'user_id',
                    'p_id' -->
                  <?php $no=1;if(!empty($sales)):?>
                <?php foreach ($sales as $sale):?>
                            <tr>
                              <td class="text-center"><?= $no?></td>
                              <td class="text-center"><?= $sale['transno'] ?></td>
                              <td class="text-center"><?= $sale['pcode'] ?></td>
                              <td class="text-center" style="font-weight:bolder"><?= $sale['description'] ?></td>
                              <td class="text-center"><?= $sale['qty'] ?></td>
                              <td class="text-center"><?= $sale['price'] ?></td>
                              <td class="text-center"><?= $sale['total'] ?></td>
                              <td class="text-center"><?= date("F j, Y", strtotime($sale['sdate'])) ?></td>
                              <td class="text-center"><?= $sale['user_id'] ?></td>
                            </tr>
                            
                            <?php $no++; endforeach?>
                        <?php endif ?>
                         
                  </tbody>
                </table>
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
  
  
 
  <?php require view_path('partials/footer');?>

  
  