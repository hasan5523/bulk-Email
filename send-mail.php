<?php
include 'db/DbFunction.php';
?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">

  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
<br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
              <div class="collapsibleGate">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Products
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">

                        <?php
                          $distinctResults = $db->getDistinctData('sellertable','baseMetals');
                          foreach ($distinctResults as $distinctResult) {
                            if( !empty($distinctResult)){
                        ?>

                        <p>
                          <input type="checkbox" class="checked_value" id="product" name="" value="<?php echo $distinctResult['baseMetals'];?>">&nbsp;<?php echo $distinctResult['baseMetals'];?>
                        </p>
                      <?php } } ?>

                      <?php
                        $distinctResults = $db->getDistinctData('sellertable','carbonSteel');
                        foreach ($distinctResults as $distinctResult) {
                          if( !empty($distinctResult)){
                      ?>

                      <p>
                        <input type="checkbox" class="checked_value" id="product" name="" value="<?php echo $distinctResult['carbonSteel'];?>">&nbsp;<?php echo $distinctResult['carbonSteel'];?>
                      </p>
                    <?php } } ?>


                    <?php
                      $distinctResults = $db->getDistinctData('sellertable','structuralSections');
                      foreach ($distinctResults as $distinctResult) {
                        if( !empty($distinctResult)){
                    ?>

                    <p>
                      <input type="checkbox" class="checked_value" id="product" name="" value="<?php echo $distinctResult['structuralSections'];?>">&nbsp;<?php echo $distinctResult['structuralSections'];?>
                    </p>
                  <?php } } ?>

                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Regions
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">

                        <?php
                          $distinctResults = $db->getDistinctData('sellertable','northAmericaCanada');
                          foreach ($distinctResults as $distinctResult) {
                            if( !empty($distinctResult)){
                        ?>

                        <p>
                          <input type="checkbox" class="checked_value" id="region" name="" value="<?php echo $distinctResult['northAmericaCanada'];?>">&nbsp;<?php echo $distinctResult['northAmericaCanada'];?>
                        </p>
                      <?php } } ?>
<!-- ===================================================================================== -->
                      <?php
                        $distinctResults = $db->getDistinctData('sellertable','northAmericaUnitedStates');
                        foreach ($distinctResults as $distinctResult) {
                          if( !empty($distinctResult)){
                      ?>

                      <p>
                        <input type="checkbox" class="checked_value" id="region" name="" value="<?php echo $distinctResult['northAmericaUnitedStates'];?>">&nbsp;<?php echo $distinctResult['northAmericaUnitedStates'];?>
                      </p>
                    <?php } } ?>

<!-- ===================================================================================== -->

                      <?php
                        $distinctResults = $db->getDistinctData('sellertable','mexico');
                        foreach ($distinctResults as $distinctResult) {
                          if( !empty($distinctResult)){
                      ?>

                      <p>
                        <input type="checkbox" class="checked_value" id="region" name="" value="<?php echo $distinctResult['mexico'];?>">&nbsp;<?php echo $distinctResult['mexico'];?>
                      </p>
                      <?php } } ?>

  <!-- ===================================================================================== -->

                      <?php
                        $distinctResults = $db->getDistinctData('sellertable','centralAmerica');
                        foreach ($distinctResults as $distinctResult) {
                          if( !empty($distinctResult)){
                      ?>

                      <p>
                        <input type="checkbox" class="checked_value" id="region" name="" value="<?php echo $distinctResult['centralAmerica'];?>">&nbsp;<?php echo $distinctResult['centralAmerica'];?>
                      </p>
                      <?php } } ?>

  <!-- ===================================================================================== -->


                    <?php
                      $distinctResults = $db->getDistinctData('sellertable','asia');
                      foreach ($distinctResults as $distinctResult) {
                        if( !empty($distinctResult)){
                    ?>

                    <p>
                      <input type="checkbox" class="checked_value" id="region" name="" value="<?php echo $distinctResult['asia'];?>">&nbsp;<?php echo $distinctResult['asia'];?>
                    </p>
                    <?php } } ?>


  <!-- ===================================================================================== -->


                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-md-9">
              <div class="table-responsive" id="result">
                <table id="myTable2" class="display table" style="width: 1000px;">
                  <thead>
                      <tr>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th> <input type="checkbox" name="" value="" id="select_all"> Select All</th>
                      </tr>
                  </thead>

                  <tbody>
                    <?php
                      $results = $db->getData('sellertable','id');

                      foreach ($results as $result) {


                    ?>

                    <tr>
                      <td><?php echo $result['fname'];?></td>
                      <td><?php echo $result['lName'];?></td>
                      <td><?php echo $result['email'];?></td>
                      <td> <input type="checkbox" name="" value="" class="checkbox" data-mail="<?php echo $result['email'];?>">  </td>
                    </tr>

                  <?php }?>
                  </tbody>
                </table>



              </div>
            </div>
        </div>
    </div>
<br><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="form-group">
            <label for="emailFrom">Email From</label>
            <input type="text" class="form-control" id="emailFrom" placeholder="Email From">
          </div>

          <div class="form-group">
            <label for="emailSubject">Email Subject</label>
            <input type="text" class="form-control" id="emailSubject" placeholder="Email Subject">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Email Body</label>
            <textarea name="name" rows="8" cols="80" class="form-control" id="emailBody"></textarea>
          </div>

            <a href="#" class="btn btn-primary" id="send_mail_a">Send Mail</a>
        </div>
      </div>
    </div>

<br><br><br>
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/respond.js"></script>

    <script src="js/plugins.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
    </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
