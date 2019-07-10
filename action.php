<?php
include 'db/DbFunction.php';

if( isset($_POST['action']) ){

  if( isset($_POST['product'])){
    $product =  $_POST['product'];
  }else{
    $product = '';
  }

  if( isset($_POST['region'])){
      $region  =  $_POST['region'];
  }else{
    $region = '';
  }



  $results = $db->getFilterData('sellertable',$product,$region);

  $output = '';

  if($results){

    $output .='<div>  <table id="myTable2" class="display table" >
                  <thead>
                      <tr>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th> <input type="checkbox"  id="select_all"> Select All</th>
                      </tr>
                  </thead>

                  <tbody>';



  foreach ($results as $result) {

  $output .='<tr>
              <td>'.  $result['fname'].'</td>
              <td>'.  $result['lName'].'</td>
              <td>'.  $result['email'].' </td>
              <td> <input type="checkbox" class="checkbox" data-mail="'.$result['email'].'">  </td>
            </tr>';

         }
$output .='</tbody>
      </table> </div>';

  }else{
    $output = "<p class='well text-center'>No data found</p>";
  }

echo $output;
}else{
  echo"<script>window.location.href = 'send-mail.php';</script>";
}



 ?>
