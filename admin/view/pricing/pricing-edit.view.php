<?php require view_path('partials/header')?>
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
      <div class="container-fluid">
      </div>
    </section>
     <!-- Main content -->
     <section class="content">
      <div class="container col-md-8 mt-4">
      
        <div class="card shadow">
                 
              <!-- /.card-header -->
              <div class="card-body">
              <center><h3 class="text-secondary p-2"><strong><i class="fa fa-dollar-sign"></i> Update Price</strong></h3></center>
              <?php if(!empty($row)):?>
              <form action="" method="POST" enctype="multipart/form-data">

               <div class="mb-3">
                  <label for="">Pcode</label>
                  <input type="text" name="pcode" id="pcode" class="form-control" autocomplete="off" value="<?=set_value('pcode',$row['pcode'])?>" readonly>
                </div>
                <div class="mb-3">
                  <label for="">Description</label>
                  <input type="text" readonly name="description" id="description" class="form-control" autocomplete="off" value="<?=set_value('description',$row['description'])?>" required>
                </div>
                <div class="mb-3">
                  <label for="">Cost</label>
                  <input type="text" name="cost" id="cost" class="form-control cost" autocomplete="off" value="<?=set_value('cost',$row['cost'])?>" required>
                </div>
                <div class="mb-3">
                  <label for="">Price</label>
                  <input type="text" name="price" id="price" class="form-control price" autocomplete="off" value="<?=set_value('price',$row['price'])?>" required>
                </div>
                <div class="mb-3">
                  <label for="">Profit</label>
                  <input type="number" name="profit" id="profit" class="form-control profit" autocomplete="off" value="<?=set_value('profit',$row['profit'])?>" readonly>
                </div>
                <div class="mb-3">
                  <label for="">Percent</label>
                  <input type="number" name="percent" id="percent" class="form-control" autocomplete="off" value="<?=set_value('percent',$row['percent'])?>" readonly>
                </div>
                <div class="row d-flex mt-4">
                  <div class="col-sm-6 ">
                    <a href="index.php?pg=pricing"><button type="button" class="btn btn-warning  px-5" data-bs-toggle="modal" data-bs-target="#transactionAddModal">
                          Back
                        </button></a>
                  </div>
                <div class="col-sm-6 text-right">
                   <button class="btn btn-success px-5">Update</button>
                </div>
               
              </div>
            
               </form>
               <?php else: ?>
                No product was found.
                <br><br>
            
                    <a href="index.php?pg=admin&tab=product">
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
  require_once view_path('partials/footer');
  ?>
  
  <script>
  //Get profit from addItemModal
$(document).ready(function(){
    	// Get value on keyup funtion
    	$(".price, .cost").keyup(function(){

    	var total=0;    	
    	var x = Number($(".price").val());
    	var y = Number($(".cost").val());
    	var total= x - y;  

    	$('.profit').val(total);

    });
});
//profit percentage
$(function(){

$('#price').on('input', function() {
  calculate();
});
$('#cost').on('input', function() {
 calculate();
});
function calculate(){
    var price = parseInt($('#price').val()); 
    var cost = parseInt($('#cost').val());
    var perc="";
    if(isNaN(price) || isNaN(cost)){
        perc="";
       }else{
       perc = ((price-cost)/(cost) * 100).toFixed(2);
       }

    $('#percent').val(perc);
}

});

</script>

  
  