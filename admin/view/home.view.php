<?php require view_path('partials/header');?>

<div class="main-content">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-secondary" style="font-weight: bolder;">Sales</h1>
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
              <h3>₱ <?= $count['total'] ?? 0 ?><sup style="font-size: 20px"></sup></h3>
                  <?php } ?>
                <p>Sales (Today)</p>
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
              <h3><?= $count['count']?><sup style="font-size: 20px"></sup></h3>
                  <?php } ?>
                <p>Transaction (Today)</p>
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
                <p>Cancelled Transaction (Today)</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-paper"></i>
              </div>
              <a href="index.php?pg=cancelled-items" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <?php foreach($cashiers_duty as $cashier) {?>
              <h3><?= $cashier['cashier'] ?><sup style="font-size: 20px"></sup></h3>
                  <?php } ?>
                <p>Cashier On Duty (Today)</p>
              </div>
              <div class="icon">
                <i class="ion ion ion-person"></i>
              </div>
              <a href="index.php?pg=user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

              <!-- BAR CHART -->
              <div class="card col-sm-6 m-1">
              <div class="card-header bg-warning">
                <h3 class="card-title text-white">Sales per Month</h3>
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
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>

        </div>
        <div class="row container-fluid mb-3 mt-3">
          <h3 class="text-secondary " style="font-weight: bolder;">Products</h3>
        </div>
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
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
               
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
            <div class="inner">
                <?php foreach($full_stocks as $full_stock) {?>
              <h3><?= $full_stock['full_stock'] ?><sup style="font-size: 20px"></sup></h3>
                  <?php } ?>

                <p>Full Stock Items</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="index.php?pg=critical" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

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
                         <!-- DONUT CHART -->
            <div class="card card-white col-sm-6 m-1">
              <div class="card-header bg-warning">
                <h3 class="card-title text-white">Top Selling Product (Top 5)</h3>

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
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
        <!-- /.row -->
        <div class="row container-fluid mb-3 mt-3">
          <h3 class="text-secondary " style="font-weight: bolder;">User Accounts</h3>
        </div>
        <div class="row">
          <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info" style="background-color: orange; color:white" >
              <div class="inner">
                  <?php foreach($admins as $admin){?>
                <h3><?=$admin['admin']?><sup style="font-size: 20px"></sup></h3>
                    <?php } ?>
                  <p>Admins</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="index.php?pg=user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success" style="background-color: orange; color:white" >
              <div class="inner">
                  <?php foreach($cashiers as $cashier){?>
                <h3><?=$cashier['cashier']?><sup style="font-size: 20px"></sup></h3>
                    <?php } ?>
                  <p>Cashiers</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="index.php?pg=user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
          </div>
          <!-- ./col -->
        </div>
      </div>
	   <!-- Footer -->
        
       </section>
       <section>
                  .
       </section>
       <!--chart section--> 
    <!-- /.content -->
  </div>
</div>

  <?php require view_path('partials/footer');?>


  <script>
 
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: <?php echo json_encode($month);?>,
      datasets: [
        {
          data: <?php echo json_encode($total);?>,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

//-------------
    //- BAR CHART -
    //-------------
    const ctx = document.getElementById('barChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?php echo json_encode($months);?>,
      datasets: [{
        label: 'Sales per Month',
        data: <?php echo json_encode($totals);?>,
        backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
    
</script>