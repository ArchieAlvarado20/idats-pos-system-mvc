<?php
defined("ABSPATH") ? "" : die();

//capture ajax data
$raw_data = file_get_contents("php://input");
if(!empty($raw_data))
{
    $obj = json_decode($raw_data, true);
    if(is_array($obj))
    {
        if($obj['data_type'] == "search")
        {
            $productClass = new Product();
            $limit = 1000;
            $rows = [];

            if($obj['text']){
                //search
                $barcode = $obj['text'];
                $text = "%".$obj['text']."%";
                $qry = "select * from tblproduct where description like :find || barcode = :barcode order by view desc";
                $row = $productClass->query($qry,['find'=>$text,'barcode'=>$barcode]); 
            }else{
                //get all
                $row = $productClass->getAll($limit,0,'desc','view');
            }
           

            if($row){

                foreach($row as $key => $rows) {

                    $row[$key]['description'] = strtoupper($rows['description']);
                    // $row[$key]['image'] = crop($rows['image']);
                }
                $info['data_type'] = "search";
                $info['data'] = $row;
                echo json_encode($info);
            } 
        }else
        if($obj['data_type'] == 'checkout')
        {
            date_default_timezone_set("Asia/Manila");
            $data    = ($obj['text']);
            $transno   = get_transno();
            $user_id = auth('id');
            $date    = date("Y-m-d");
            $time = date("h:i:sa");
            $date_tr = date("Ymd-His");
            $status = "Sold";
        

            $db = new Database();

            //fetch tblcart
            foreach ($data as $row){
                $arr = [];
                $arr['id'] = $row['id'];
                $qry = "select * from tblproduct where id = :id limit 1";
                $check = $db->query($qry,$arr);

                if(is_array($check)){
                        // show($check);
                        // die;
                    $check = $check[0];
                    //save to database
                    $arr = [];
                    $arr['status'] = $status;
                    $arr['p_id'] = $row['id'];
                    $arr['qty'] = $row['qty'];
                    $arr['price'] = $check['price'];
                    $arr['total'] = $row['qty'] * $check['price'];
                    $arr['transno'] ='TR-'.$date_tr;
                    $arr['sdate'] = $date;
                    $arr['stime'] = $time;
                    $arr['user_id'] = $user_id;

                    $qry = "insert into tblcart(transno,qty,price,total,sdate,stime,user_id,p_id,status)values(:transno,:qty,:price,:total,:sdate,:stime,:user_id,:p_id,:status)";
                    $db->query($qry,$arr);

                    $qry = "update tblproduct set view = view + 1 where id = :id limit 1";
                    $db->query($qry,['id'=>$check['id']]);

                    $qty = $arr['qty'];
                    $p_id = $arr['p_id'];
                    $db->query("update tblproduct set qty = qty - '$qty' where id = '$p_id' limit 1");
                }
            }
            //	barcode	refno	description	qty	amount	total	date	user_id	

            $info['data_type'] = "checkout";
            $info['data'] = "Payment rendered successfully";
            echo json_encode($info);
        }
    }
}



