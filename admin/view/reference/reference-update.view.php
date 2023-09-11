<?php include view_path('partials/header')?>
 <!-- Main content -->
 <div class="main-content">
    <!-- Top navbar -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid" style="height: 200px;">
      </div><!-- /.container-fluid -->
    </section>
     <!-- Main content -->
     <section class="content">
      <div class="container col-md-6">
        <div class="card shadow" style="height: 220px;">
        
              <!-- /.card-header -->
              <div class="card-body ">
                    <center><h4 class="mt-5">Are you sure you want to set this reference as accomplised?<br><small>It will not be available again.</small></h4></center>
                    <div class="row d-flex mt-4">
                        <div class="col-sm-5"></div>
                        <form action="" method="post">
                            <div class="col">
                                <button class="btn btn-success" name="accomplised" onclick="alert('Successfully set as accomplished')"><i class="fa fa-thumbs-up"></i></button>
                            </div>
                        </form>
                            <div class="col">
                                <a class="btn btn-danger" type="button" href="index.php?pg=reference"><i class="fa fa-times"></i></a>
                            </div>
                    </div>
                        
               
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
<?php include view_path('partials/footer')?>
<script>
    function accomplished(){
                        Swal.fire(
                        'Reference',
                        'Accomplished',
                        'success',
                        )
                        setTimeout(function(){window.top.location="index.php?pg=reference"} , 2000);
                    }
                

  </script>