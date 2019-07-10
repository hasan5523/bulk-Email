<?php
include 'db/DbFunction.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $fname                     = $db->test_input($_POST['fName']);
    $lName                     = $db->test_input($_POST['lName']);
    $email                     = $db->test_input($_POST['email']);
    $phonNumber                = $db->test_input($_POST['phonNumber']);
    $companyName               = $db->test_input($_POST['companyName']);
    $productQuality            = $db->test_input($_POST['productQuality']);
    $productQuantity           = $db->test_input($_POST['productQuantity']);
    $baseMetals                = $db->test_input($_POST['baseMetals']);
    $carbonSteel               = $db->test_input($_POST['carbonSteel']);
    $structuralSections        = $db->test_input($_POST['structuralSections']);
    $northAmericaCanada        = $db->test_input($_POST['northAmericaCanada']);
    $northAmericaUnitedStates  = $db->test_input($_POST['northAmericaUnitedStates']);
    $mexico                    = $db->test_input($_POST['mexico']);
    $centralAmerica            = $db->test_input($_POST['centralAmerica']);
    $asia                      = $db->test_input($_POST['asia']);
    $comments                  = $db->test_input($_POST['comments']);

    $result = $db->insertFirstFormData( $fname, $lName, $email, $phonNumber, $companyName, $productQuality, $productQuantity, $baseMetals, $carbonSteel, $structuralSections, $northAmericaCanada, $northAmericaUnitedStates, $mexico, $centralAmerica, $asia, $comments );

    if($result){
      echo "ok";
    }else{
      echo"fail";
    }


}else{
  echo"not";
}

?>
