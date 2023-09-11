

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="assets/img/shopping-basket.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><strong> IDAT'S STORE</strong></span>
      <span class="badge badge-danger navbar-badge">Admin Panel</span>
    </a>
  
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/img/archie.jpg" class="img-circle elevation-2 mt-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=auth('name')?><br>&nbsp;(<?=auth('role')?>)</a>
        </div>
      </div>
      


      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-0">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          <li class="nav-item">
            <a href="index.php?pg=home" class="nav-link <?= $tab== 'home' ? 'active' : '';?>">
              <i class="nav-icon fa-solid fa-gauge"></i>
              <p>
                Dashboard
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item <?= $tab == 'daily-sales'? 'menu-open' : '';?>
                              <?= $tab == 'top-selling' ? 'menu-open' : '';?>
                              <?= $tab == 'sold-items' ? 'menu-open' : '';?>
                              <?= $tab == 'sold-items-delete' ? 'menu-open' : '';?>
                              <?= $tab == 'cancelled-items' ? 'menu-open' : '';?>
                              <?= $tab == 'cancelled-items-details' ? 'menu-open' : '';?>
                              <?= $tab == 'cancel-sold-items' ? 'menu-open' : '';?>">
            <a href="#" class="nav-link <?= $tab == 'daily-sales' ? 'active' : '';?>
                                        <?= $tab == 'top-selling' ? 'active' : '';?>
                                        <?= $tab == 'sold-items' ? 'active' : '';?>
                                        <?= $tab == 'sold-items-delete' ? 'active' : '';?>
                                        <?= $tab == 'cancelled-items' ? 'active' : '';?>
                                        <?= $tab == 'cancelled-items-details' ? 'active' : '';?>
                                        <?= $tab == 'cancel-sold-items' ? 'active' : '';?>">
              <i class="nav-icon fa-solid fa-sack-dollar"></i>
              <p>
                Sales
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index.php?pg=daily-sales" class="nav-link <?= $tab == 'daily-sales' ? 'active' : '';?>">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Daily Sales
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?pg=top-selling" class="nav-link <?= $tab == 'top-selling' ? 'active' : '';?>">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Top Selling
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?pg=sold-items" class="nav-link <?= $tab == 'sold-items' ? 'active' : '';?>
                                                              <?= $tab == 'cancel-sold-items' ? 'active' : '';?>">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Sold Items
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          
         
          <li class="nav-item">
            <a href="index.php?pg=cancelled-items" class="nav-link <?= $tab == 'cancelled-items' ? 'active' : '';?><?= $tab == 'cancelled-items-details' ? 'active' : '';?>">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Cancelled Order
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          </ul>
          </li>
          <li class="nav-item <?= $tab == 'product' ? 'menu-open' : '';?>
                              <?= $tab == 'product-new' ? 'menu-open' : '';?>
                              <?= $tab == 'product-edit' ? 'menu-open' : '';?>
                              <?= $tab == 'product-delete' ? 'menu-open' : '';?>
                              <?= $tab == 'pricing' ? 'menu-open' : '';?>
                              <?= $tab == 'pricing-edit' ? 'menu-open' : '';?>
                              <?= $tab == 'brand' ? 'menu-open' : '';?>
                              <?= $tab == 'category' ? 'menu-open' : '';?>
                              <?= $tab == 'category-new' ? 'menu-open' : '';?>
                              <?= $tab == 'category-edit' ? 'menu-open' : '';?>
                              <?= $tab == 'category-delete' ? 'menu-open' : '';?>">
            <a href="" class="nav-link <?= $tab == 'product' ? 'active' : '';?>
                                        <?= $tab == 'product-new' ? 'active' : '';?>
                                        <?= $tab == 'product-edit' ? 'active' : '';?>
                                        <?= $tab == 'product-delete' ? 'active' : '';?>
                                        <?= $tab == 'pricing' ? 'active' : '';?>
                                        <?= $tab == 'pricing-edit' ? 'active' : '';?>
                                        <?= $tab == 'brand' ? 'active' : '';?>
                                        <?= $tab == 'category' ? 'active' : '';?>
                                        <?= $tab == 'category-new' ? 'active' : '';?>
                                        <?= $tab == 'category-edit' ? 'active' : '';?>
                                        <?= $tab == 'category-delete' ? 'active' : '';?>
            ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Product
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-warning right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="index.php?pg=product" class="nav-link <?= $tab== 'product' ? 'active' : '';?>
                                                      <?= $tab == 'product-edit' ? 'active' : '';?>
                                                      <?= $tab == 'product-new' ? 'active' : '';?>
                                                      <?= $tab == 'product-delete' ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?pg=pricing" class="nav-link <?= $tab == 'pricing' ? 'active' : '';?>
                                                                <?= $tab == 'pricing-edit' ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pricing</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="brand.php" class="nav-link <?= $tab == 'brand' ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Brand</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="index.php?pg=category" class="nav-link <?= $tab == 'category' ? 'active' : '';?>
                                                      <?= $tab == 'category-edit' ? 'active' : '';?>
                                                      <?= $tab == 'category-new' ? 'active' : '';?>
                                                      <?= $tab == 'category-delete' ? 'active' : '';?>
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item <?= $tab == 'reference'? 'menu-open' : '';?>
                              <?= $tab == 'reference-new'? 'menu-open' : '';?>
                              <?= $tab == 'reference-update'? 'menu-open' : '';?>
                              <?= $tab =='stocks' ? 'menu-open' : '';?>
                              <?= $tab =='stocks-new' ? 'menu-open' : '';?>
                              <?= $tab =='inventory' ? 'menu-open' : '';?>
                              <?= $tab =='critical' ? 'menu-open' : '';?>
                              <?= $tab =='supplier' ? 'menu-open' : '';?>
                              <?= $tab =='supplier-new' ? 'menu-open' : '';?>
                              <?= $tab =='supplier-edit' ? 'menu-open' : '';?>
                              <?= $tab =='supplier-delete' ? 'menu-open' : '';?>">
            <a href="" class="nav-link <?= $tab == 'reference'? 'active' : '';?>
                              <?= $tab == 'reference-new'? 'active' : '';?>  
                              <?= $tab =='stocks' ? 'active' : '';?>
                              <?= $tab =='stocks-new' ? 'active' : '';?>
                              <?= $tab =='inventory' ? 'active' : '';?>
                              <?= $tab =='critical' ? 'active' : '';?>
                              <?= $tab =='supplier' ? 'active' : '';?>
                              <?= $tab =='supplier-new' ? 'active' : '';?>
                              <?= $tab =='supplier-edit' ? 'active' : '';?>
                              <?= $tab =='supplier-delete' ? 'active' : '';?>
                              <?= $tab == 'reference-update'? 'active' : '';?>">
              <i class="nav-icon fa-solid fa-box"></i>
              <p>
                Stocks
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-warning right">6</span> -->
              </p>
            </a>
          <ul class="nav nav-treeview">
          <li class="nav-item">
                <a href="index.php?pg=reference" class="nav-link <?= $tab == 'reference' ? 'active' : '';?>
                                                        <?= $tab == 'reference-new'? 'active' : '';?>
                                                        <?= $tab == 'reference-update'? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Reference</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?pg=stocks" class="nav-link <?= $tab == 'stocks' ? 'active' : '';?>
                                                              <?= $tab == 'stocks-new' ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Stock</p>
                </a>
              </li>
          <li class="nav-item">
            <a href="index.php?pg=inventory" class="nav-link <?= $tab == 'inventory' ? 'active' : '';?>">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Inventory
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
              <li class="nav-item">
                <a href="index.php?pg=critical" class="nav-link <?= $tab == 'critical' ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Critical Stock</p>
                </a>
              </li>
              <li class="nav-item">
            <a href="index.php?pg=supplier" class="nav-link <?= $tab == 'supplier' ? 'active' : '';?>
                                                            <?= $tab == 'supplier-new' ? 'active' : '';?>
                                                            <?= $tab == 'supplier-edit' ? 'active' : '';?>
                                                            <?= $tab == 'supplier-delete' ? 'active' : '';?>">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Supplier
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          </ul>
          </li>

        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Settings</h6>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-store "></i>
              <p>
                Store Setting
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item <?= $tab == 'user' ? 'menu-open' : '' ;?>
                              <?= $tab == 'user-new' ? 'menu-open' : '' ;?>
                              <?= $tab == 'user-edit' ? 'menu-open' : '' ;?>
                              <?= $tab == 'user-delete' ? 'menu-open' : '' ;?>">
            <a href="" class="nav-link <?= $tab == 'user' ? 'active' : "" ;?>
                                        <?= $tab == 'user-edit' ? 'active' : "" ;?>
                                        <?= $tab == 'user-new' ? 'active' : "" ;?>
                                        <?= $tab == 'user-delete' ? 'active' : '' ;?>">
              <i class="fa-solid fa-user-gear fa-lg"></i>
              <p>
                User Setting
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-warning right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="index.php?pg=user" class="nav-link <?= $tab == 'user' ? 'active' : "" ;?>
                                                            <?= $tab == 'user-new' ? 'active' : "" ;?>
                                                            <?= $tab == 'user-edit' ? 'active' : "" ;?>
                                                            <?= $tab == 'user-delete' ? 'active' : "" ;?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Account</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="tabs/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="tabs/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active/Deactivate Account</p>
                </a>
              </li> -->
            </ul>
          </li>

   

          <li class="nav-item mt-5">
            <button href="" class="btn bg-danger nav-link active" onclick="logout()">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
                <!-- <span class="badge badge-warning right">6</span> -->
              </p>
            </button>
          </li>

       
              
      </nav>
      <!-- /.sidebar-menu -->
      </div>
    <!-- /.sidebar -->
  </aside>

  <script>
    function logout(){
      Swal.fire({
                    title: 'Logout',
                    text: "Are you sure you want to logout?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, I want to logout!',
                    }).then((result) => {
                    if (result.isConfirmed) {
                      setTimeout(function(){window.top.location="index.php?pg=logout"} , 2000);
                        Swal.fire(
                        'Logging-out...!',
                        'Successfully Logged-out',
                        'success',
                        )
                    }
                    });
    }
  </script>