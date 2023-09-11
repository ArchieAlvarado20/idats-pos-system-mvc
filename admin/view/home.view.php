<?php require view_path('partials/header');?>

<div class="main-content">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-secondary" style="font-weight: bolder;"> Today's Sales</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php foreach($daily_sales as $count) {?>
              <h3>₱ <?= $count['total'] ?><sup style="font-size: 20px"></sup></h3>
                  <?php } ?>
                <p>Sales</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-paper"></i>
              </div>
              <a href="index.php?pg=daily-sales" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php foreach($transaction as $count) {?>
              <h3><?= $count['count'] ?><sup style="font-size: 20px"></sup></h3>
                  <?php } ?>
                <p>Transaction</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-paper"></i>
              </div>
              <a href="index.php?pg=daily-sales" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <?php foreach($transaction as $count) {?>
              <h3><?= $count['count'] ?><sup style="font-size: 20px"></sup></h3>
                  <?php } ?>
                <p>Today's Transaction</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-paper"></i>
              </div>
              <a href="index.php?pg=daily-sales" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php foreach($cancel as $count) {?>
              <h3><?= $count['count'] ?><sup style="font-size: 20px"></sup></h3>
                  <?php } ?>
                <p>Cancelled Transaction</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-paper"></i>
              </div>
              <a href="index.php?pg=daily-sales" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="row container-fluid mb-3">
          <h3 class="text-secondary " style="font-weight: bolder;">Products</h3>
        </div>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php foreach($daily_sales as $count) {?>
              <h3><?= $count['total'] ?><sup style="font-size: 20px"></sup></h3>
                  <?php } ?>
                <p>Today's Sales</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-camera"></i>
              </div>
              <a href="index.php?pg=daily-sales" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php foreach($counts as $count) {?>
              <h3><?= $count['count'] ?><sup style="font-size: 20px"></sup></h3>
                  <?php } ?>
                <p>Product Line</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="index.php?pg=product" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color: orange; color:white" >
            <div class="inner">
                <?php foreach($users as $user){?>
              <h3><?=$user['user']?><sup style="font-size: 20px"></sup></h3>
                  <?php } ?>
                <p>Staff and Admins</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="index.php?pg=user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
            <div class="inner">
                <?php foreach($criticals as $critical) {?>
              <h3><?= $critical['critical'] ?><sup style="font-size: 20px"></sup></h3>
                  <?php } ?>

                <p>Critical Items</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="index.php?pg=critical" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div>
	   <!-- Footer -->
     <div class="container-fluid row d-flex">
      <div class="col-sm-1"></div>
     <div class="card col-sm-3 m-2">
              <div class="card-header">
                <h3 class="card-title">Donut Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 90%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card col-md-3 m-2">
              <div class="card-header">
                <h3 class="card-title">Donut Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 90%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card col-md-3 m-2">
              <div class="card-header">
                <h3 class="card-title">Donut Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 90%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
          </div>

          
       </section>
       <!--chart section--> 
            
    <!-- /.content -->
  </div>
</div>
  <?php require view_path('partials/footer');?>