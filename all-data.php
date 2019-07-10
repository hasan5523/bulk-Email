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
            <div class="col-md-12">
              <div class="table-responsive">
                <table id="myTable" class="display table" style="width: 1000px;">
                  <thead>
                      <tr>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Phon Number</th>
                          <th>Company Name</th>
                          <th>Product Quality</th>
                          <th>Product Quantity</th>
                          <th>Base Metals</th>
                          <th>Carbon Steel</th>
                          <th>Structural Sections</th>
                          <th>North America ( Canada )</th>
                          <th>North America ( United States )</th>
                          <th>Mexico</th>
                          <th>Central America</th>
                          <th>Asia</th>
                          <th>Comments</th>
                          <th>Action</th>


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
                      <td><?php echo $result['phonNumber'];?></td>
                      <td><?php echo $result['companyName'];?></td>
                      <td><?php echo $result['productQuality'];?></td>
                      <td><?php echo $result['productQuantity'];?></td>
                      <td><?php echo $result['baseMetals'];?></td>
                      <td><?php echo $result['carbonSteel'];?></td>
                      <td><?php echo $result['structuralSections'];?></td>
                      <td><?php echo $result['northAmericaCanada'];?></td>
                      <td><?php echo $result['northAmericaUnitedStates'];?></td>
                      <td><?php echo $result['mexico'];?></td>
                      <td><?php echo $result['centralAmerica'];?></td>
                      <td><?php echo $result['asia'];?></td>
                      <td><?php echo $db->limit_text($result['comments'],10);?></td>
                      <td class="delete"> <a href="delete.php?id=<?php echo $result['id'];?>"> <i class="fa fa-trash" aria-hidden="true"></i></a> </td>

                    </tr>

                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>



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
