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
          <div class="card-header">
          <div class="row p-2 mt-1">
                      <div class="col-sm-6 mt-1">
                        <h3 class="text-secondary "><strong><i class="fa fa-truck"></i> Receiving Reference</strong> </h3>
                      </div>
                      <div class="col-sm-6">
                          <ol class="float-sm-right">
                            <a href="index.php?pg=reference-new" class="btn btn-primary">New Reference</a>         
                          </ol>
                      </div>
                    </div>
          </div>
              <!-- /.card-header -->
              <div class="card-body ">

                <table id="myTable" class="table table-sm table-bordered table-striped table-hover bg-white mb-0 text-center">
                  <thead class="bg-light">
                  <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Supplier</th>
                    <th class="text-center">Reference</th>
                    <th class="text-center">Recieved by</th>
                    <th class="text-center">Recieving Date</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
             
                  <?php $no=1;if(!empty($references)):?>
                <?php foreach ($references as $reference):?>
                            <tr>
                         
                              <td class="text-center" ><?= $no ?></td>
                              <td class="text-center"><?= $reference['supplier'] ?></td>
                              <td class="text-center"><?= $reference['refno'] ?></td>
                              <td class="text-center"><?= $reference['stock_by'] ?></td>
                              <td class="text-center"><?= $reference['stock_at'] ?></td>
                              <td class="text-center"><?= $reference['status'] == "Pending" ? "<span class='badge badge-danger text-sm'>Available...</span>" : "<span class='badge badge-success text-sm'>Accomplished</span>" ?></td>
                              <td  class="text-center">
                                <?php if($reference['status']== "Pending"){?>
                              <a href="index.php?pg=reference-update&id=<?= $reference['id'];?>"  name="accomplished" class="btn btn-sm btn-success m-0" onclick=""><i class="fa fa-thumbs-up"></i></a>
                              <?php } ?>
                                <a class="btn btn-sm btn-danger m-0" href="index.php?pg=reference-delete&id=<?=$reference['id'] ?>"><i class="fa fa-trash"></i> </a>
                                
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
 

  
  