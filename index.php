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

  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form id="form_one">

				  <div class="form-group">
					<label for="fName">First Name</label>
					<input type="text" class="form-control" id="fName" placeholder="First Name">
				  </div>

				  <div class="form-group">
					<label for="lName">Last Name</label>
					<input type="text" class="form-control" id="lName" placeholder="Last Name">
				  </div>

				  <div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" placeholder="Email">
				  </div>

				  <div class="form-group">
					<label for="phoneNumber">Phone Number</label>
					<input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number">
				  </div>

				  <div class="form-group">
					<label for="companyName">Company Name</label>
					<input type="text" class="form-control" id="companyName" placeholder="Company Name">
				  </div>

				  <div class="form-group">
					<label for="productQuality">Product Quality</label>
					<select class="form-control" id="productQuality">
					  <option>New</option>
					  <option>Surplus</option>
					  <option>Used</option>
					</select>
				  </div>

				  <div class="form-group">
					<label for="productQuantity">Product Quantity</label>
					<input type="number" class="form-control" id="productQuantity" placeholder="Product Quantity">
				  </div>



				<fieldset class="col-md-12">
					<legend>Products</legend>

					<div class="form-group">
						<div class="col-sm-12">
						  <div class="checkbox">
							<label>
							  <input type="checkbox" id="baseMetal"> Base Metals
							</label>
						  </div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
						  <div class="checkbox">
							<label>
							  <input type="checkbox" id="carbonSteel"> Carbon Steel
							</label>
							<br>
							<select class="form-control" id="carbonSteelSelct">
							  <option>None</option>
							  <option>Bars</option>
							  <option>Billets</option>
							  <option>BackPlate</option>
							  <option>Blooms</option>

							</select>

						  </div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
						  <div class="checkbox">
							<label>
							  <input type="checkbox" id="structuralSections"> Structural Sections
							</label>
						  </div>
						</div>
					</div>


				</fieldset>


				<fieldset class="col-md-12">
					<legend>Regions</legend>

					<div class="form-group">
						<div class="col-sm-12">
						  <div class="checkbox">
							<label>
							  <input type="checkbox" id="northAmericaCanada"> North America ( Canada )
							</label>
							<br>
							<select class="form-control" id="northAmericaCanadaSelct">
							  <option>None</option>
							  <option>British Columbia</option>
							  <option>Alberta</option>
							  <option>Saskatchewan</option>
							  <option>Manitoba</option>

							</select>

						  </div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
						  <div class="checkbox">
							<label>
							  <input type="checkbox" id="northAmericaUnitedStates"> North America ( United States )
							</label>
							<br>
							<select class="form-control" id="northAmericaUnitedStatesSelct">
							  <option>None</option>
							  <option>Alabama</option>
							  <option>Alaska</option>
							  <option>Arizona</option>
							  <option>Arkansas</option>

							</select>

						  </div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
						  <div class="checkbox">
							<label>
							  <input type="checkbox" id="mexico"> Mexico
							</label>
						  </div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
						  <div class="checkbox">
							<label>
							  <input type="checkbox" id="centralAmerica"> Central America
							</label>
						  </div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
						  <div class="checkbox">
							<label>
							  <input type="checkbox" id="asia"> Asia
							</label>
							<br>
							<select class="form-control" id="asiaSelct">
							  <option>None</option>
							  <option>Central Asia</option>
							  <option>China</option>


							</select>

						  </div>
						</div>
					</div>


				</fieldset>

				<div class="form-group">
					<label for="comments">Comments</label>
					<textarea class="form-control" rows="3" id="comments">Comments</textarea>
				</div>


				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
            </div>
        </div>
    </div>



    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/respond.js"></script>

    <script src="js/plugins.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
    </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
