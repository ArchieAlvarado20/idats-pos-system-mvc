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
                  <div class="row p-2">
                      <div class="col-sm-6 mt-1">
                        <h3 class="text-secondary "><strong><i class="fa fa-hamburger"></i> Product</strong> </h3>
                      </div>
                      <div class="col-sm-6">
                          <ol class="float-sm-right">
                            <a href="index.php?pg=product-new" class="btn btn-primary">New Product</a>         
                          </ol>
                      </div>
                    </div>
                
                <table id="myTable" class="table table-sm table-bordered table-striped table-hover bg-white mb-0 text-center">
                  <thead class="bg-light">
                  <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Pcode</th>
                    <th class="text-center">Barcode</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Re-order</th>
                    <th class="text-center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
             
                  <?php $no=1;if(!empty($products)):?>
                <?php foreach ($products as $product):?>
                            <tr>
                              <td class="text-center"><?= $no?></td>
                              <td class="text-center"><?= $product['pcode'] ?></td>
                              <td class="text-center" ><?= $product['barcode'] ?></td>
                              <td class="text-center" style="font-weight:bolder"><?= $product['description'] ?></td>
                              <td class="text-center"><?= $product['category'] ?></td>
                              <td class="text-center"><?= $product['re_order'] ?></td>
                              <td  class="text-center">
                              <a href="index.php?pg=product-edit&id=<?= $product['id'];?>" class="btn btn-sm btn-success m-0"><i class="fa fa-edit"></i> </a>
                                <a class="btn btn-sm btn-danger m-0" href="index.php?pg=product-delete&id=<?=$product['id'] ?>" ><i class="fa fa-trash"></i> </a>
                                
                              </td>
                              
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


  