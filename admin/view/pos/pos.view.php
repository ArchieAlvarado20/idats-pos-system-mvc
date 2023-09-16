<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css"> -->

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Alertify -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
  <!-- Font -->
  <link href="assets/css/nucleo.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/brand-style.css">

  <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
    <!-- calculator-font -->
    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
  <body class="dark">
   <style>
    @import url("assets/css/modal.css");
   </style>
   
                     <div class="user-panel mt-2 mb-0 d-flex row px-4" style="background-color: #141414;">
                                <div class="image row d-flex">
                                    <img src="assets/img/user_male.jpg" class="img-square elevation-2 mt-1 mb-1" alt="User Image" >
                                    <p class="col mt-3"><strong>CASHIER: <?=strtoupper(auth('name'))?></strong></p>
                                </div>
                                   <h1 class="js-gtotal text-success col text-right" style="font-family: 'Orbitron', sans-serif;font-weight:bolder; padding-right: 60px;">₱ 00.00</h1> 
                            </div>
    
   <div class="col-3 mt-2 text-center">
    </div>
   </div>
<div class="row-sm-12 ms-2 d-flex mt-0 dark">
    <div class="col-sm-10 ms-2 mt-0">
        <!-- Items -->
            <div class="p-2">
                          
                    <div class="d-flex">
                            <div class="row d-flex">
                            <h4 class="col">ITEMS:</h4><h4 class="js-items-count col">0</h4>
                            </div>  
                         
                                <!-- dark mode -->
                                <!-- <ul>
                                <li class="nav-item">
                                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                                        <i class="fas fa-expand-arrows-alt"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                                        <i class="fas fa-th-large"></i>
                                        </a>
                                    </li>
                                </ul> -->
                                     <!-- end dark mode -->
                    </div>
                        <div class="table-responsive" style="height:430px;overflow-y: scroll">
                            <table class="table table-sm bg-light">
                        <thead>
                            <tr  class="text-center">
                                <th>Pcode</th>
                                <th>Barcode</th>
                                <th style="width: 600px;">Description</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody class="js-items">
                        
                        </tbody>

                        </table>
                    </div>
                </div>
                <!-- end items -->
                <!-- products -->
             <div class="card-body">
                    <div class="row-12">
                          <div class="input-group mb-3 mt-1" >
                                <input onkeypress="check_for_enter_key(event)" value="" oninput="search_item(event)"  type="text"  accesskey="z" class="form-control ms-3 js-search" onclick="this.select()" placeholder="Scan barcode or search product(ALT + Z to focus)" aria-label="Username" aria-describedby="basic-addon1" autofocus>
                                <span class="input-group-text bg-dark text-light" id="basic-addon1"><i class="fa fa-search"></i></span>
                            </div>
                    </div>   
                <div class="table-responsive" style="flex-wrap: wrap;height:300px;overflow-y: scroll">
                    <table id="myTable1" class="table-sm  table-hover bg-light text-center ">
                    <thead>
                        <tr>
                            <th>Pcode</th>
                            <th>Barcode</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Stocks</th>
                           
                        </tr>
                    </thead>
                    <tbody onclick="add_item(event)" class="js-products">
                    </tbody>
                    </table>
                </div>
        </div>
        <!-- end products -->
    
 
  
    </div>

    <!-- calculate pannel -->
    <div class="col-sm-2 ms-2">
                <div class="col-sm-12 float-end">
                  
                        <div class="card mb-5 dark">
                            <img src="assets/img/store.png" class="mt-5" alt="">
                        </div>
                        <div class="row"><button onclick="show_modal('payment-modal')" accesskey="x" class="col-sm-12 btn btn-success mb-2 float-end">Check-out (ALT + X)</button> </div> 
                        <div class="row"><button accesskey="c" onclick="clear_all()" class="col-sm-12 btn btn-warning mb-2 me-5">Clear-all (ALT + C)</button></div>
                        <div class="row"><button accesskey="l" onclick="logout()" class="col-sm-12 btn btn-danger  mb-2me-5">Logout (ALT + L)</button></div>
                        
                    
                </div>
    </div>
</div>
 <!-- end calculate pannel -->
     <!--modals start-->
     <!--payment-modal start-->
     <div role="close-button" onclick="hide_modal(event,'payment-modal')" class="js-payment-modal d-none" style="background-color: #000000aa; width: 100%; height: 100%;position: absolute; left: 0px;top:0px;z-index:2;">
         <div style="background-color: white;animation: appear 0.5s; border-radius:10px;width: 400px; height: 250px;padding: 20px; margin: auto;margin-top:200px">
         <div class="row-sm-12 d-flex">
         <h3 class="mt-0 text-dark col-sm-11 text-center mb-2">&nbsp;&nbsp;&nbsp;<strong>PAYMENT</strong></h3>
            <!-- <div class="float-end p-1 text-right col-sm-1"><i class="fa fa-times text-dark " onclick="hide_modal(event,'payment-modal')" role="close-button"  type="button"></i></div> -->
         </div>
                
                <div class="row d-flex">
                    <p class="col text-left text-dark mt-1">SUB-TOTAL:</p><h3 class="js-gtotal_mod col text-right text-dark" style="font-weight: bolder;"></h3>
                </div>
                <div class="row d-flex mb-3">
                        <p class="col text-left text-dark mt-1">PAYMENT:</p>
                        <input onkeyup="if(event.keyCode == 13)checkout(event)" class="js-payment-input form-control col" type="number"  placeholder="Enter amount" name="">
                </div>

                            <!-- <button role="close-button" onclick="hide_modal(event,'payment-modal')" type="button" class="col-md-5 btn btn-danger me-1">Cancel</button> -->
                            <button role="close-button" onclick="checkout(event)" class=" col-md-12 btn btn-primary float-end mb-2">Payment</button>  
                          
                   
            </div>
    </div>
             <!--payment-modal end-->
            <!--change-modal start-->
     <div role="close-button"  onclick="{hide_modal(event,'change');rendered_success()}" class="js-change-modal d-none" style="background-color: #000000aa; width: 100%; height: 100%;position: absolute; left: 0px;top:0px;z-index:2;">
            <div style="background-color: white;animation: appear 0.5s; border-radius:10px;width: 400px; height: 320px;padding: 20px; margin: auto;margin-top:200px">
            <div class="row-sm-12 d-flex">
         <h3 class="ms-2 text-dark col-sm-11 text-center mb-3"><strong>&nbsp;&nbsp;&nbsp;CHANGE</strong></h3>
            <!-- <div class="float-end p-1 text-right col-sm-1"><i class="fa fa-times text-dark " onclick="hide_modal(event,'payment-modal')" role="close-button"  type="button"></i></div> -->
         </div>
                <div class="row d-flex">
         <p class="col text-left text-dark mt-1">TOTAL:</p><h4 class="js-gtotal_change col text-right text-dark fw-bold" style="font-weight: bolder;"></h4>
         </div>
         <div class="row d-flex">
         <p class="col text-left text-dark mt-1">PAYMENT:</p><h4 class="js-payment-result col text-right text-success fw-bold"  style="font-weight: bolder;"></h4>
         </div>
         <hr class="p-0">
         <div class="row d-flex mb-2">
         <p class="col-sm-8 text-left text-dark mt-1">CHANGE:</p>
                <!-- <input class="js-change-input form-control text-right col-sm-4 bg-white border-0 text-xl" type="number" readonly> -->
                <h4 class="js-change text-danger col text-right" style="font-weight: bolder;"></h4>
         </div>
              
                           <center><button class="js-change-modal-close col-md-5 btn btn-primary float-center mt-3" role="close-button"  onclick="{hide_modal(event,'change');rendered_success()}">Done</button>  </center> 
                          
                   
            </div>
    </div>
    <!--change-modal end-->
     <!--modals end-->
  </body>
<script>
    var PRODUCTS = [];
    var ITEMS = [];
    var BARCODE = false;
    var GTOTAL = 0;
    var TOTAL = 0;
    var CHANGE = 0;
    var AMOUNT = 0;
    var COUNT = 0;

    var main_input = document.querySelector(".js-search");

   function search_item(e){

   
            var text = e.target.value.trim();

                var data = {};
                data.data_type = "search";
                data.text = text;
                send_data(data);
    }
    
    function send_data(data)
    {
        var ajax = new XMLHttpRequest();

        ajax.addEventListener('readystatechange',function(e){
            if(ajax.readyState == 4){

                if(ajax.status == 200){
                    if(ajax.responseText.trim() != "")
                    {
                        handle_result(ajax.responseText);
                    }
                    else
                        if(BARCODE)
                            {
                                swal.fire({
                                title: 'No Item',
                                text: 'That item was not found!',
                                icon: 'error',
                                confirmButtonText: 'Okay',
                                 });
                                     main_input.value = "";       
                            }  
                }else{
                    console.log("An error occured. Err Code:"+ajax.status+" Err Message:"+ajax.statusText);
                    console.log(ajax);
                }
                //clear main input...
                if(BARCODE)
                {
                     main_input.value = "";
                    //  main_input.focus();
                }
                BARCODE = false;
            }
           
        });

        ajax.open('post', 'index.php?pg=ajax-pos',true);
        ajax.send(JSON.stringify(data));
    }
    
    function handle_result(result){
        //console.log(result);
        var obj = JSON.parse(result);

        if(typeof obj != "undifined"){
            
            //valid json
            if(obj.data_type == "search"){

                var mydiv = document.querySelector(".js-products");
                mydiv.innerHTML = "";
                PRODUCTS = [];

                    if(obj.data != "")
                    {
                            PRODUCTS = obj.data;
                            for(var i = 0; i < obj.data.length; i++){
                            mydiv.innerHTML +=  product_html(obj.data[i],i);
                            }

                            if(BARCODE && PRODUCTS.length == 1 )
                            {
                                add_item_from_index(0)
                            }
                    }  
            }
        }
      
         

      
    }
    function product_html(data,index){
        return `
                                    <!-- card -->
                    <tr index="${index}">
                            <td  style="cursor: pointer" index="${index}" class="text-center">${data.pcode}</td>
                            <td  style="cursor: pointer" index="${index}" class="text-center">${data.barcode}</td>
                            <td  style="cursor: pointer" index="${index}" class=" text-center">${data.description}</td>
                            <td  style="cursor: pointer" index="${index}" class="fw-bold text-center">${data.price}</td>
                            <td  style="cursor: pointer" index="${index}" class="fw-bold text-center">${data.qty}</td>
                        </tr>
                                <!-- end card -->
                                `;
    }

    function item_html(data,index){
        return `
        <tr  class="text-center py-0">
                        <td><center>${data.pcode}</center></td>
                        <td>${data.barcode}</td>
                        <td><center>${data.description}</center></td>
                        <td class="text-sm fw-bold" style="width:150px;align-content:center">
                            <div class="d-flex">
                                <button index="${index}"onclick="change_qty('down', event)" class="btn btn-sm input-group-text bg-dark text-light text-center">-</button>
                                <input index="${index}" onblur="change_qty('input', event)"  accesskey="v" onclick="this.select()" type="number" class="form-control text-center text-sm"style="width:100px" value="${data.qty}">
                                <button index="${index}"onclick="change_qty('up', event)" class="btn btn-sm input-group-text bg-dark text-light text-center">+</button>
                            </div>
                        </td>
                        <td class="text-md"style="font-weight:bolder">₱&nbsp;${data.price}</td>
                        <td class="text-md"style="font-weight:bolder">${((data.price) * (data.qty)).toFixed(2)}</td>
                        <td> <button onclick="clear_item(${index})" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button></td>
  
                    </tr>    
                                `;
    }
    function add_item_from_index(index)
    {
        //check if item exists
        for (var i = ITEMS.length - 1; i >= 0; i--){
                    if(ITEMS[i].id == PRODUCTS[index].id){
                        ITEMS[i].qty += 1;
                        refresh_items_display();
                        return;
                    }
                }
                var temp =PRODUCTS[index];
                temp.qty = 1;

            ITEMS.push(temp);
            console.log(ITEMS);

            refresh_items_display();
    }

    function add_item(e){
        if(e.target.tagName == "TD"){
               var index = e.target.getAttribute("index");

               add_item_from_index(index)
        }
     
    }
    // fot the badge
    function refresh_items_display(){
        var item_count = document.querySelector(".js-items-count");
        item_count.innerHTML = ITEMS.length;

        var items_div = document.querySelector(".js-items");
        items_div.innerHTML = "";
        var grand_total = 0;
        var count = 0;

       
        for (var i = ITEMS.length - 1; i >= 0; i--){
            items_div.innerHTML += item_html(ITEMS[i],i);
            grand_total += ITEMS[i].qty * ITEMS[i].price;
            count += ITEMS[i].qty;
        }

        var gtotal_div = document.querySelector(".js-gtotal");
        gtotal_div.innerHTML = "₱ " + grand_total.toFixed(2);
        GTOTAL  = grand_total;

        var gtotal_mod = document.querySelector(".js-gtotal_mod");
        gtotal_mod.innerHTML = "₱ " + grand_total.toFixed(2);

        var gtotal_mod = document.querySelector(".js-gtotal_change");
        gtotal_mod.innerHTML = "₱ " + grand_total.toFixed(2);

        COUNT = count;

    }
    function change_qty(direction, e)
    {
        var index = e.currentTarget.getAttribute("index");
        
        if(direction == "up")
        {
            ITEMS[index].qty += 1;
        }
        else
        if(direction == "down")
        {
            ITEMS[index].qty -= 1;
        }
        else
        {
            ITEMS[index].qty = parseInt(e.currentTarget.value);
        }

        //make sure its not less than 1
        if(ITEMS[index].qty < 1)
        {
            ITEMS[index].qty = 1;
        }
        refresh_items_display();
    }

    function check_for_enter_key(e)
    {
       if(e.keyCode == 13)
       {
        BARCODE = true;
        search_item(e);
       }
    }

    function show_modal(modal)
    {
        if(modal == "payment-modal"){

            if(ITEMS.length == 0){
                swal.fire({
                        title: 'Empty Cart',
                        text: 'Please put an item into the cart',
                        icon: 'error',
                        confirmButtonText: 'Okay',
                       
                    });
                    return;
                      
            }
            var mydiv = document.querySelector(".js-payment-modal");
            mydiv.classList.remove("d-none");
           
            mydiv.querySelector(".js-payment-input").value = "";
            mydiv.querySelector(".js-payment-input").focus();
        }else
        if(modal == "change"){
            // if(ITEMS.length == 0){
            //     // alert("Please put an item into the cart");
            //     // return;
            // }
            var mydiv = document.querySelector(".js-change-modal");
            mydiv.classList.remove("d-none");

            // mydiv.querySelector(".js-change-input").value = CHANGE;

            var change = document.querySelector(".js-change");
            change.innerHTML = "₱ " + CHANGE.toFixed(2);
            mydiv.querySelector(".js-change-modal-close").focus();

            var amount = document.querySelector(".js-payment-result");
            amount.innerHTML = "₱ " + AMOUNT.toFixed(2);

            }
                
    }
    

    function hide_modal(e,modal)
    {
        if(e == true || e.target.getAttribute("role") == "close-button")
        {
            if(modal == "payment-modal"){
            var mydiv = document.querySelector(".js-payment-modal");
            mydiv.classList.add("d-none");
            }
            else
            if(modal == "change"){
            var mydiv = document.querySelector(".js-change-modal");
            mydiv.classList.add("d-none");
            }
            refresh_items_display();
        }
     
    }
    
    function checkout(e)
    {
        var amount = e.currentTarget.parentNode.querySelector(".js-payment-input").value.trim();
       
        if(amount == "")
        { 
            swal.fire({
                        title: 'No amount entered',
                        icon: 'error',
                        confirmButtonText: 'Okay'
                    });
                        return;
        }
        amount = parseFloat(amount);
        if(amount < GTOTAL){
            swal.fire({
                        title: 'Please enter right amount',
                        icon: 'error',
                        confirmButtonText: 'Okay'
                    });
                   return;
        }
        CHANGE = amount - GTOTAL;
        AMOUNT = amount
        // CHANGE = CHANGE.toFixed(2);

        hide_modal(true,'payment-modal');
        show_modal('change');

        //remove unwanted information
        var ITEM_NEW = [];
        for (var i = 0; i < ITEMS.length; i++)
        {
            var tmp = {};
            tmp.id = ITEMS[i]['id'];
            tmp.qty = ITEMS[i]['qty'];
            tmp.description = ITEMS[i]['description'];

            ITEM_NEW.push(tmp);
        }

        //send cart data through ajax
        send_data({
        data_type: "checkout",
        text: ITEM_NEW
    });
    //open receipt page
		print_receipt({
			company:'Idats Store',
			amount:amount,
			change:CHANGE,
			gtotal:GTOTAL,
            count:COUNT,
			data:ITEMS
		});

    //clear items
    // ITEMS = [],
    // refresh_items_display();

    //reload products
    send_data({
        data_type: "search",
        text: ""
    });
    }

    
	function print_receipt(obj)
	{
		var vars = JSON.stringify(obj);

		RECEIPT_WINDOW = window.open('index.php?pg=print&vars='+vars,'printpage',"width=100px;");

		setTimeout(close_receipt_window,2000);
		
	}
 
 	function close_receipt_window()
 	{
 		RECEIPT_WINDOW.close();
 	}

    send_data({
        data_type: "search",
        text: ""
    });

    function clear_all()
    {
        if(ITEMS < 1)
        {
            swal.fire({
                        title: 'Theres no item into the cart',
                        icon: 'error',
                        confirmButtonText: 'Okay'
                    })
        }else
        if( Swal.fire({
                    title: 'Removing Item',
                    text: "Are you sure you want to remove all this item?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, remove this item!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        ITEMS = [];
                        refresh_items_display();
                        Swal.fire(
                        'Deleted!',
                        'The item has been removed.',
                        'success'
                        )
                    }
                    }))
            return;  
    }

    function clear_item(index)
    {
                    Swal.fire({
                    title: 'Removing Item',
                    text: "Are you sure you want to remove this item?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, remove this item!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        ITEMS.splice(index, 1);
                        refresh_items_display();
                        Swal.fire(
                        'Deleted!',
                        'The item has been removed.',
                        'success'
                        )
                    }
                    });return; 
    }

function rendered_success(){
    Swal.fire(
                        'Success',
                        'Transaction Completed',
                        'success'
                        )
                        ITEMS = [];
                        refresh_items_display();   
                        main_input.value = "";
  
}
function logout(){
    if(ITEMS.length > 0){
                swal.fire({
                        title: 'Not Empty Cart',
                        text: 'Please remove all the item from table before logging-out',
                        icon: 'error',
                        confirmButtonText: 'Okay',
                       
                    }); return; 
        }else
        if(ITEMS.length == 0){
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
}
  //select all in input by click           
  $(function(){
              $(document).on('click','input[type=number]',function(){ this.select(); });
          });

</script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="assets/js/table.js"></script>

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>


<!-- Bootsrap -->
<script src="assets/js/jquery-3.7.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/assets/js/bootstrap.bundle.min.js" ></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="assets/js/jquery.tabledit.min.js"></script>
<script src="assets/js/demo.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="plugins/toastr/toastr.min.js"></script>