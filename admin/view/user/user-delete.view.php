<?php 
require_once view_path('partials/header');
?>
 <div class="content-wrapper">
 <section class="content-header">
    </section>
      <div class="container col-md-8">
        <div class="card shadow">
          <div class="card-header">
            <div class="col-sm-12">
              <h4 class="fw-bold text-center text-secondary mt-1 p-3" style="font-weight: bolder;"><i class="fa fa-user"></i> Delete User Information</h4>
              <div class="alert alert-danger text-center alert-dismissible fade show mb-1" role="alert">Are you sure you want to  delete this User Information?
                </div>
            </div>
          </div>
        <div class="card-body">
        <?php if(!empty($row)):?>
              <form action="" method="POST" enctype="multipart/form-data">
            <div class="col-sm-12">
              <div class="mb-3">
                <label for="">Name</label>        
                  <input readonly value="<?=set_value('name',$row['name'])?>" type="text" class="form-control <?=!empty($error['name']) ? 'border-danger' : '' ;?>" name="name">
                    <?php if(!empty($error['name'])):?><small class="text-danger"><?=$error['name']?></small><?php endif; ?>
              </div> 

             <div class="mb-3">
                <label for="">Email</label>
                  <input readonly value="<?=set_value('email',$row['email'])?>" type="email" class="form-control <?=!empty($error['email']) ? 'border-danger' : '' ;?>" name="email">
                  <?php if(!empty($error['email'])):?><small class="text-danger"><?=$error['email']?></small><?php endif; ?>
              </div>

              <div class="mb-3">
                <label for="">Phone</label>
                  <input readonly value="<?=set_value('phone',$row['phone'])?>" type="text" class="form-control <?=!empty($error['phone']) ? 'border-danger' : '' ;?>" name="phone">
                  <?php if(!empty($error['phone'])):?><small class="text-danger"><?=$error['phone']?></small><?php endif; ?>
              </div>      
                    
                    <div class="row-md-12 d-flex">
                      <div class="col-sm-6 mt-2">
                          <a href="index.php?pg=user" class="btn btn-warning" style="width: 100px;">Back</a>
                      </div>
                      <div class="col-sm-6 text-right mt-2">
                        <button class="btn btn-danger" style="width: 100px;">Delete</button>
                      </div>
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
        </div>        
      </div>
  </div>



<?php 
include view_path('partials/footer');
?>