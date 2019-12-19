<!DOCTYPE html>
<html lang="en">
<head>
<title>BIBLIOPHILE</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
     <style type="text/css">
         input[type=text] {
  							width: 100%;
  							padding: 20px 20px;
  							margin: 8px 0;
  							box-sizing: border-box;
  							border: 1px solid rgb(230, 230, 230);
  							-webkit-transition: 0.5s;
  							transition: 0.5s;
  							outline: none;
		}
		input[type=text]:focus {
  								border: 2px solid rgb(255, 153, 128);
		}
		input[type=email] {
  							width: 100%;
  							padding: 20px 20px;
  							margin: 8px 0;
  							box-sizing: border-box;
  							border: 1px solid rgb(230, 230, 230);
  							-webkit-transition: 0.5s;
  							transition: 0.5s;
  							outline: none;
		}
		input[type=email]:focus {
  								border: 2px solid rgb(255, 153, 128);
		}
		.label {
				font-family: veradana;
		}
		#select_options	{
  							padding: 5px 20px;
  							margin: 8px 0;
  							border: 2px solid rgb(230, 230, 230);
		}
		#select_options:focus {
				border: 3px solid rgb(255, 153, 128);
		}
		input[type=password] {
  							width: 100%;
  							padding: 20px 20px;
  							margin: 8px 0;
  							box-sizing: border-box;
  							border: 1px solid rgb(230, 230, 230);
  							-webkit-transition: 0.5s;
  							transition: 0.5s;
  							outline: none;
		}
		input[type=password]:focus {
  								border: 2px solid rgb(255, 153, 128);
		}
		.container {
  					display: flex;
  					justify-content: center;
  					align-items: center;
  					align-content: center;
  					flex-wrap: wrap;
  					width: 80vw;
  					margin: 0 auto;
  					min-height: 100vh;
  		}
		.btn {
  				width: 100%;
  				flex: 1 1 auto;
  				margin: 10px;
  				padding: 15px;
  				text-align: center;
  				text-transform: uppercase;
  				transition: 0.5s;
  				background-size: 200% auto;
 	 			color: white;
 				/* text-shadow: 0px 0px 10px rgba(0,0,0,0.2);*/
  				box-shadow: 0 0 20px #eee;
  				border-radius: 10px;
 		}
 		.btn:hover {
  				background-position: right center; /* change the direction of the change here */
		}
		.btn-1 {
  				background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);
		}
		
	  </style>

	
    
</head>
    
    <body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">A WEBSITE FOR BOOK LOVERS.</div>
					</div>
					</div>
			</div>
		</div>
        <!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#"><span>BIBLIO</span>PHILE</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
        </header>
    <div class="fs_menu_overlay"></div>
    <div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
    </div>
    
    
    
    
    
    <?php error_reporting (E_ALL ^ E_NOTICE); ?>
    
  <?php
  if(isset($_POST["sign_up_submit"]))
  {  
  $username_err = "";
  $name_err = "";
  $email_err = "";
  $country_err = "";
  $phone_err = "";
  $pwd_err = "";
  $pwdr_err = "";

   $message = "";
  
  $servername = "localhost";
  $usrname = "root";
  $password = "";
  $dbname = "user_info";

  function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


  $username = test_input($_POST["username"]);
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $country = test_input($_POST["country"]);
  $phone = test_input($_POST["phone"]);
  $pwd = test_input($_POST["pwd"]);
  $pwdr = test_input($_POST["pwdr"]);

  

  if(empty($username)) 
  {
      $username_err = "*Username is required";
    } 

    if(empty($name)) 
  {
      $name_err = "*Name is required";
    } 

  if(empty($email)) 
  {
      $email_err = "*Email is required";
    } 

    if(empty($phone)) 
  {
      $phone_err = "*Phone no. is required";
    } 

    if(empty($pwd)) 
  {
      $pwd_err = "*password is required";
    } 
    if(empty($pwdr)) 
  {
      $pwdr_err = "*Password is required";
    } 
    if(strlen($pwd) < 8)
    {
      $pwd_err = "*Password atleast 8 characters long";
    }
    if(strlen($pwdr) < 8)
    {
      $pwdr_err = "*Password atleast 8 characters long";
    }
    if($pwd != $pwdr)
    {
      $pwdr_err = "*Passwords dont match";
    }
    if(strlen($phone) != 10)
    {
      $phone_err = "*Invalid phone no.";
    }
    if(strlen($username) > 100)
    {
      $username_err = "*Username too long";
    }

  if(empty($username_err) && empty($name_err) && empty($email_err) && empty($phone_err) && empty($pwd_err) && empty($pwdr_err))
  {                                   // Create connection
    $conn = mysqli_connect($servername, $usrname, $password, $dbname);
                                        // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $hash_pwd = password_hash($pwd, PASSWORD_DEFAULT);
   
    $sql = "INSERT INTO userdata (username,name, email, country_code, phone_no, passwd)
    VALUES ('$username','$name', '$email', '$country', '$phone', '$hash_pwd')";
    if (mysqli_query($conn, $sql)) 
    {
        header("Location: login.php");
    } 
    else 
    {
        $message = "Couldn't sign up,Please try again!";
    }
    mysqli_close($conn);
  }
  }
?>

	<div class="container" >
  	<div class="col-md-3"></div>         <!--page is divided into three parts in 1:2:1 ratio,middle part contains a bootstrap form-->
  	<div class="col-md-6" id="styles">
	    <h2 style="text-align: center; padding-bottom: 10px; color: rgb(64, 64, 64);"><b>SIGN UP TO BIBLIOPHILE</b></h2>
      <div style="color: red;"><?php if($message!="") { echo $message; } ?></div>
	    <form name="signup" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style=" padding: 20px">   
	     <div class="form-group" >
	        <label for="name">Name(Must contain less than 100 characters):</label>
	        <input type="text" class="form-control" placeholder="Your Name" name="name">
          <span style="color: red;"><?php echo "$name_err"; ?></span>
	     </div>	
	     <div class="form-group">	
        <label for="name">Userame(Must contain less than 100 characters):</label>	     
		 <input type="text" class="form-control" placeholder="Your Username" name="username">
     <span style="color: red;"><?php echo "$username_err"; ?></span>
		    </div>
		    
	     <div class="form-group">
         <label for="name">Email(Must be a valid and existing ID):</label>
	        <input type="email" class="form-control" placeholder="Your Email" name="email">
          <span style="color: red;"><?php echo "$email_err"; ?></span>
	     </div>
		    
	     <div class="form-group">
	        <label for="country">Country Code: &nbsp</label>
	        <select name="country" id="select_options">
	        	<option value="Afganistan">Afghanistan</option>
     			<option value="Albania">Albania</option>
     			<option value="Algeria">Algeria</option>
     			<option value="American Samoa">American Samoa</option>
     			<option value="Andorra">Andorra</option>
     			<option value="Angola">Angola</option>
     			<option value="Anguilla">Anguilla</option>
     			<option value="Antigua & Barbuda">Antigua & Barbuda</option>
     			<option value="Argentina">Argentina</option>
     			<option value="Armenia">Armenia</option>
     			<option value="Aruba">Aruba</option>
   			  <option value="Australia">Australia</option>
         <option value="Austria">Austria</option>
         <option value="Azerbaijan">Azerbaijan</option>
         <option value="Bahamas">Bahamas</option>
         <option value="Bahrain">Bahrain</option>
         <option value="Bangladesh">Bangladesh</option>
         <option value="Barbados">Barbados</option>
         <option value="Belarus">Belarus</option>
         <option value="Belgium">Belgium</option>
         <option value="Belize">Belize</option>
         <option value="Benin">Benin</option>
         <option value="Bermuda">Bermuda</option>
         <option value="Bhutan">Bhutan</option>
         <option value="Bolivia">Bolivia</option>
         <option value="Bonaire">Bonaire</option>
         <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
         <option value="Botswana">Botswana</option>
         <option value="Brazil">Brazil</option>
         <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
         <option value="Brunei">Brunei</option>
         <option value="Bulgaria">Bulgaria</option>
         <option value="Burkina Faso">Burkina Faso</option>
         <option value="Burundi">Burundi</option>
         <option value="Cambodia">Cambodia</option>
         <option value="Cameroon">Cameroon</option>
         <option value="Canada">Canada</option>
         <option value="Canary Islands">Canary Islands</option>
         <option value="Cape Verde">Cape Verde</option>
         <option value="Cayman Islands">Cayman Islands</option>
         <option value="Central African Republic">Central African Republic</option>
         <option value="Chad">Chad</option>
         <option value="Channel Islands">Channel Islands</option>
         <option value="Chile">Chile</option>
         <option value="China">China</option>
         <option value="Christmas Island">Christmas Island</option>
         <option value="Cocos Island">Cocos Island</option>
         <option value="Colombia">Colombia</option>
         <option value="Comoros">Comoros</option>
         <option value="Congo">Congo</option>
         <option value="Cook Islands">Cook Islands</option>
         <option value="Costa Rica">Costa Rica</option>
         <option value="Cote DIvoire">Cote DIvoire</option>
         <option value="Croatia">Croatia</option>
         <option value="Cuba">Cuba</option>
         <option value="Curaco">Curacao</option>
         <option value="Cyprus">Cyprus</option>
         <option value="Czech Republic">Czech Republic</option>
         <option value="Denmark">Denmark</option>
         <option value="Djibouti">Djibouti</option>
         <option value="Dominica">Dominica</option>
         <option value="Dominican Republic">Dominican Republic</option>
         <option value="East Timor">East Timor</option>
         <option value="Ecuador">Ecuador</option>
         <option value="Egypt">Egypt</option>
         <option value="El Salvador">El Salvador</option>
         <option value="Equatorial Guinea">Equatorial Guinea</option>
         <option value="Eritrea">Eritrea</option>
         <option value="Estonia">Estonia</option>
         <option value="Ethiopia">Ethiopia</option>
         <option value="Falkland Islands">Falkland Islands</option>
         <option value="Faroe Islands">Faroe Islands</option>
         <option value="Fiji">Fiji</option>
         <option value="Finland">Finland</option>
         <option value="France">France</option>
         <option value="French Guiana">French Guiana</option>
         <option value="French Polynesia">French Polynesia</option>
         <option value="French Southern Ter">French Southern Ter</option>
         <option value="Gabon">Gabon</option>
         <option value="Gambia">Gambia</option>
         <option value="Georgia">Georgia</option>
         <option value="Germany">Germany</option>
         <option value="Ghana">Ghana</option>
         <option value="Gibraltar">Gibraltar</option>
         <option value="Great Britain">Great Britain</option>
         <option value="Greece">Greece</option>
         <option value="Greenland">Greenland</option>
         <option value="Grenada">Grenada</option>
         <option value="Guadeloupe">Guadeloupe</option>
         <option value="Guam">Guam</option>
         <option value="Guatemala">Guatemala</option>
         <option value="Guinea">Guinea</option>
         <option value="Guyana">Guyana</option>
         <option value="Haiti">Haiti</option>
         <option value="Hawaii">Hawaii</option>
         <option value="Honduras">Honduras</option>
         <option value="Hong Kong">Hong Kong</option>
         <option value="Hungary">Hungary</option>
         <option value="Iceland">Iceland</option>
         <option value="Indonesia">Indonesia</option>
         <option value="India" selected>India</option>
         <option value="Iran">Iran</option>
         <option value="Iraq">Iraq</option>
         <option value="Ireland">Ireland</option>
         <option value="Isle of Man">Isle of Man</option>
         <option value="Israel">Israel</option>
         <option value="Italy">Italy</option>
         <option value="Jamaica">Jamaica</option>
         <option value="Japan">Japan</option>
         <option value="Jordan">Jordan</option>
         <option value="Kazakhstan">Kazakhstan</option>
         <option value="Kenya">Kenya</option>
         <option value="Kiribati">Kiribati</option>
         <option value="Korea North">Korea North</option>
         <option value="Korea Sout">Korea South</option>
         <option value="Kuwait">Kuwait</option>
         <option value="Kyrgyzstan">Kyrgyzstan</option>
         <option value="Laos">Laos</option>
         <option value="Latvia">Latvia</option>
         <option value="Lebanon">Lebanon</option>
         <option value="Lesotho">Lesotho</option>
         <option value="Liberia">Liberia</option>
         <option value="Libya">Libya</option>
         <option value="Liechtenstein">Liechtenstein</option>
         <option value="Lithuania">Lithuania</option>
         <option value="Luxembourg">Luxembourg</option>
         <option value="Macau">Macau</option>
         <option value="Macedonia">Macedonia</option>
         <option value="Madagascar">Madagascar</option>
         <option value="Malaysia">Malaysia</option>
         <option value="Malawi">Malawi</option>
         <option value="Maldives">Maldives</option>
         <option value="Mali">Mali</option>
         <option value="Malta">Malta</option>
         <option value="Marshall Islands">Marshall Islands</option>
         <option value="Martinique">Martinique</option>
         <option value="Mauritania">Mauritania</option>
         <option value="Mauritius">Mauritius</option>
         <option value="Mayotte">Mayotte</option>
         <option value="Mexico">Mexico</option>
         <option value="Midway Islands">Midway Islands</option>
         <option value="Moldova">Moldova</option>
         <option value="Monaco">Monaco</option>
         <option value="Mongolia">Mongolia</option>
         <option value="Montserrat">Montserrat</option>
         <option value="Morocco">Morocco</option>
         <option value="Mozambique">Mozambique</option>
         <option value="Myanmar">Myanmar</option>
         <option value="Nambia">Nambia</option>
         <option value="Nauru">Nauru</option>
         <option value="Nepal">Nepal</option>
         <option value="Netherland Antilles">Netherland Antilles</option>
         <option value="Netherlands">Netherlands (Holland, Europe)</option>
         <option value="Nevis">Nevis</option>
         <option value="New Caledonia">New Caledonia</option>
         <option value="New Zealand">New Zealand</option>
         <option value="Nicaragua">Nicaragua</option>
         <option value="Niger">Niger</option>
         <option value="Nigeria">Nigeria</option>
         <option value="Niue">Niue</option>
         <option value="Norfolk Island">Norfolk Island</option>
         <option value="Norway">Norway</option>
         <option value="Oman">Oman</option>
         <option value="Pakistan">Pakistan</option>
         <option value="Palau Island">Palau Island</option>
         <option value="Palestine">Palestine</option>
         <option value="Panama">Panama</option>
         <option value="Papua New Guinea">Papua New Guinea</option>
         <option value="Paraguay">Paraguay</option>
         <option value="Peru">Peru</option>
         <option value="Phillipines">Philippines</option>
         <option value="Pitcairn Island">Pitcairn Island</option>
         <option value="Poland">Poland</option>
         <option value="Portugal">Portugal</option>
         <option value="Puerto Rico">Puerto Rico</option>
         <option value="Qatar">Qatar</option>
         <option value="Republic of Montenegro">Republic of Montenegro</option>
         <option value="Republic of Serbia">Republic of Serbia</option>
         <option value="Reunion">Reunion</option>
         <option value="Romania">Romania</option>
         <option value="Russia">Russia</option>
         <option value="Rwanda">Rwanda</option>
         <option value="St Barthelemy">St Barthelemy</option>
         <option value="St Eustatius">St Eustatius</option>
         <option value="St Helena">St Helena</option>
         <option value="St Kitts-Nevis">St Kitts-Nevis</option>
         <option value="St Lucia">St Lucia</option>
         <option value="St Maarten">St Maarten</option>
         <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
         <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
         <option value="Saipan">Saipan</option>
         <option value="Samoa">Samoa</option>
         <option value="Samoa American">Samoa American</option>
         <option value="San Marino">San Marino</option>
         <option value="Sao Tome & Principe">Sao Tome & Principe</option>
         <option value="Saudi Arabia">Saudi Arabia</option>
         <option value="Senegal">Senegal</option>
         <option value="Seychelles">Seychelles</option>
         <option value="Sierra Leone">Sierra Leone</option>
         <option value="Singapore">Singapore</option>
         <option value="Slovakia">Slovakia</option>
         <option value="Slovenia">Slovenia</option>
         <option value="Solomon Islands">Solomon Islands</option>
         <option value="Somalia">Somalia</option>
         <option value="South Africa">South Africa</option>
         <option value="Spain">Spain</option>
         <option value="Sri Lanka">Sri Lanka</option>
         <option value="Sudan">Sudan</option>
         <option value="Suriname">Suriname</option>
         <option value="Swaziland">Swaziland</option>
         <option value="Sweden">Sweden</option>
         <option value="Switzerland">Switzerland</option>
         <option value="Syria">Syria</option>
         <option value="Tahiti">Tahiti</option>
         <option value="Taiwan">Taiwan</option>
         <option value="Tajikistan">Tajikistan</option>
         <option value="Tanzania">Tanzania</option>
         <option value="Thailand">Thailand</option>
         <option value="Togo">Togo</option>
         <option value="Tokelau">Tokelau</option>
         <option value="Tonga">Tonga</option>
         <option value="Trinidad & Tobago">Trinidad & Tobago</option>
         <option value="Tunisia">Tunisia</option>
         <option value="Turkey">Turkey</option>
         <option value="Turkmenistan">Turkmenistan</option>
         <option value="Turks & Caicos Is">Turks & Caicos Is</option>
         <option value="Tuvalu">Tuvalu</option>
         <option value="Uganda">Uganda</option>
         <option value="United Kingdom">United Kingdom</option>
         <option value="Ukraine">Ukraine</option>
         <option value="United Arab Erimates">United Arab Emirates</option>
         <option value="United States of America">United States of America</option>
         <option value="Uraguay">Uruguay</option>
         <option value="Uzbekistan">Uzbekistan</option>
         <option value="Vanuatu">Vanuatu</option>
         <option value="Vatican City State">Vatican City State</option>
         <option value="Venezuela">Venezuela</option>
         <option value="Vietnam">Vietnam</option>
         <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
         <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
         <option value="Wake Island">Wake Island</option>
         <option value="Wallis & Futana Is">Wallis & Futana Is</option>
         <option value="Yemen">Yemen</option>
         <option value="Zaire">Zaire</option>
         <option value="Zambia">Zambia</option>
         <option value="Zimbabwe">Zimbabwe</option>
	        </select>
	     </div>
	     <div class="form-group">
         <label for="name">Phone no.(Must be a valid number of 10 digits):</label>
	        <input type="number" class="form-control" placeholder="Your Phone no." name="phone">
          <span style="color: red;"><?php echo "$phone_err"; ?></span>
	     </div>
	     <div class="form-group">
         <label for="name">Password(Must contain ateast 8 characters):</label>
	        <input type="password" class="form-control" name="pwd" placeholder="Type Password">
          <span style="color: red;"><?php echo "$pwd_err"; ?></span>
     	</div>
     	<div class="form-group">
         <label for="name">Re-type password(Same as the above password):</label>
	        <input type="password" class="form-control" name="pwdr" placeholder="Retype Password">
          <span style="color: red;"><?php echo "$pwdr_err"; ?></span>
     	</div>
      	
      	<div align="center">
      	<button type="submit" class="btn btn-1" name="sign_up_submit"><b>Sign Up</b></button>
      	</div>
    	</form>
  	</div>
  	<div class="col-md-3"></div>
	</div>
    
    
    
    
    <!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>Read anywhere</h6>
							<p>easily available e-books </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>pay safe</h6>
							<p>digital payment </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>responsive </h6>
							<p>Making it Look Like Readable</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>anytime</h6>
							<p>duh</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						
                        <p><i><span>“A reader lives a thousand lives before he dies . . . The man who never reads lives only one.”</span> – George R.R. Martin</i></p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							
							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2018 All Rights Reserverd. </div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>
        <script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>

