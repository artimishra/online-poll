
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109904717-1"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>

<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109904717-1');
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MintLime</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template style.css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <!-- Font used in template -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
    <!--font awesome icon -->
    <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	 <script type="text/javascript">
   function ShowHideDiv(free1) {
        var ticket_price1 = document.getElementById("ticket_price1");
        ticket_price1.style.display = free1.checked ? "none" : "block";
    }
	</script>
</head>

<body>
    <div class="collapse" id="searcharea">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
    <button class="btn tp-btn-primary" type="button">Search</button>
    </span> </div>
    </div>
 <div class="top-bar">
             <div class="container">
            <div class="row">
                <div class="col-md-6 top-message">
                 
                </div>
              <div class="col-md-6 top-links">
                        <ul class="listnone">
                            <li><a href="partners.php"> Partners</a></li>
                            <li><a href="members.php">Members</a></li>
                            <li><a href="http://1assam.com/services/login">Vendor</a></li>
                             <li>
                                <!--a role="button" data-toggle="collapse" href="#searcharea" aria-expanded="false" aria-controls="searcharea"> <i class="fa fa-search"></i> </a-->
                            </li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header">
     <div class="container">
            <div class="row">
                <div class="col-md-3 logo">
                    <div class="navbar-brand">
                        <a href="index.php"><img src="images/logo.png" alt="!Assam" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="navigation" id="navigation">
                        <ul>
                            <li class="active"><a href="index.php">Home</a></li>
                            <li class="active"><a href="aboutus.php">Team	</a></li>
                            <li class="active"><a href="http://1assam.com/services/">Services</a></li>
                            <li class="active"><a href="Opportunities.php">Opportunities</a></li>
                            <li class="active"><a href="http://news.1assam.com/">Media</a></li>
                            <li class="active"><a href="http://1assam.com/jobs">Jobs</a></li>
                     
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Event Details</li>
                    </ol>
                </div>
            </div>
        </div>
		
		<div class="col-md-7">
                    <div class="side-box" id="inquiry">
                        <h2>Event Registration Form</h2>
                        <p>Fill in your details and a our Specialist will get back to you shortly.</p>
                                                                               <form class="form-horizontal" method="post" action="config.php">
                                                                               <div class="form-group">
                                                                               <label for="event_name" class="col-md-3 control-label">
	                                                                           <font size="3" face="times new roman">Event Title:</font> </label>     
	                                                                           <div class="col-md-7">
                                                                               <input type="text" class="form-control" id="event_name" placeholder="e.g. Wedding,Summit" required="" name="event_name"><br>
                                                                               </div>
                                                                               </div>
     
	                                                                            <div class="form-group">
                                                                                <label for="event_type" class="col-md-3 control-label"><font size="3" face="times new roman">Category:</font> </label>
                                                                                <div class="col-md-7">
                                                                                    <select class="form-control" required="" name="event_type">
                                                                                        <option id="education">Education</option>
                                                                                        <option id="entertainment">Entertainment</option>
                                                                                        <option id="healthcare">Healthcare</option>
                                                                                        <option id="finance">Finance</option>
																						<option id="community">Community</option>
																						<option id="animal&wildlife">Animal & Wildlife</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div><br>
                                                                    
                                                                            <div class="form-group">
                                                                                <label for="Event_Desc" class="col-md-3 control-label"><font size="3" face="times new roman">Event Description:</font> </label>
                                                                                <div class="col-md-7">
                                                                                    <textarea class="form-control" rows="3" name="Event_Desc"></textarea>
                                                                                </div>
                                                                            </div><br>
                                                                    
                                                                            <div class="form-group">
                                                                                <label for="address" class="col-md-3 control-label"><font size="3" face="times new roman">Event Location: </font></label>
                                                                                <div class="col-md-7">
                                                                                    <textarea placeholder="Enter Location" name="address" onFocus="initializeAutocomplete()" id="locality" ></textarea><br>
                                                                                </div>
                                                                            </div><br>
																			
<input type="text" name="latitude" id="latitude" placeholder="Latitude" value="" ><br>
<input type="text" name="longitude" id="longitude" placeholder="Longitude" value="" ><br>


                                                                    
                                                                            <div class="form-group">
                                                                                <label for="event_date" class="col-md-3 control-label"><font size="3" face="times new roman">Event Start Date:</font> </label>
                                                                                <div class="col-md-7">
                                                                                    <input type="Date" class="form-control" id="event_date" placeholder="" required="" name="event_date">
                                                                                </div>
                                                                            </div><br>
                                                                    
                                                                            <div class="form-group">
                                                                                <label for="event_end" class="col-md-3 control-label"><font size="3" face="times new roman">Event End Date: </font></label>
                                                                                <div class="col-md-7">
                                                                                    <input type="Date" class="form-control" id="event_end" placeholder="" required="" name="event_end">
                                                                                </div>
                                                                            </div><br>
                                                                    
                                                                            <div class="form-group">
                                                                                <label for="organizer_name" class="col-md-3 control-label"><font size="3" face="times new roman">Organizer Name:</font> </label>
                                                                                <div class="col-md-7">
                                                                                    <input type="text" class="form-control" id="organizer_name" placeholder="" required="" name="organizer_name">
                                                                                </div>
                                                                            </div><br>
																			<div class="form-group">
                                                                                <label for="mobile_no" class="col-md-3 control-label"><font size="3" face="times new roman">Phone no:</font> </label>
                                                                                <div class="col-md-7">
                                                                                    <input type="text" class="form-control" id="mobile_no" placeholder="" required="" name="mobile_no">
                                                                                </div>
                                                                            </div><br>
																			<div class="form-group">
                                
                                                                    
                                                                            <div class="form-group">
                                                                                <label for="website" class="col-md-3 control-label"><font size="3" face="times new roman">Website:</font> </label>
                                                                                <div class="col-md-7">
                                                                                    <input type="url" class="form-control" id="website" placeholder="" name="website">
                                                                                </div>
                                                                            </div><br>
                                                                    
                                                                            <div class="form-group">
                                                                                <label for="logo" class="col-md-3 control-label"> <font size="3" face="times new roman">Logo Upload:</font></label>
                                                                                <div class="col-md-7">
                                                                                    <input type="file" id="logo" name="logo">
                                                                                </div>
                                                                            </div><br>
                                                                    
                                                                            <div class="form-group">
                                                                                <label for="no_of_tickets" class="col-md-3 control-label"><font size="3" face="times new roman">No.of Tickets:<font> </label>
                                                                                <div class="col-md-7">
                                                                                    <input type="number" class="form-control" id="no_of_tickets" min="0" placeholder="" required="" name="no_of_tickets">
                                                                                </div>
                                                                            </div><br>
																			<div class="form-group" id="free1">
                                                                                   <input type="checkbox" class="" id="free"  placeholder="" required="" name="free" onClick="ShowHideDiv(this)">
																					<label for="free" class="col-md-3 control-label"><font size="3" face="times new roman">Do You Want to make the entry Free: </font></label>
                                                                            </div><br>
                                                                    
                                                                            <div class="form-group" id="ticket_price1">
                                                                                <label for="ticket_price" class="col-md-3 control-label"><font size="3" face="times new roman">Price of a Ticket: </font></label>
                                                                                <div class="col-md-7" id="ticket_price">
                                                                                    <input type="number" class="form-control" id="ticket_price" min="0" placeholder="" name="ticket_price">
                                                                                </div>
                                                                            </div><br>
																			
                                                                    
                                                                            <div class="form-group">
                                                                                <label for="" class="col-md-3 control-label"></label>
                                                                                <div class="col-md-7 text-center">
                                                                                    <button type="Submit" class="btn btn-primary btn-lg " style="">Submit</button>
                                                                                    <button type="reset" class="btn btn-danger btn-lg " style="">Reset</button></center>
                                                                    
                                                                                </div>
                                                                            </div>
                                                                    
                                                                        </form>
																		<script type="text/javascript">
  function initializeAutocomplete(){
    var input = document.getElementById('locality');
    // var options = {
    //   types: ['(regions)'],
    //   componentRestrictions: {country: "IN"}
    // };
    var options = {}

    var autocomplete = new google.maps.places.Autocomplete(input, options);

    google.maps.event.addListener(autocomplete, 'place_changed', function() {
      var place = autocomplete.getPlace();
      var lat = place.geometry.location.lat();
      var lng = place.geometry.location.lng();
      var placeId = place.place_id;
	   var componentForm = {
        locality: 'short_name',
      };
      for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
          var val = place.address_components[i][componentForm[addressType]];
          document.getElementById("city").value = val;
        }
      }
      document.getElementById("latitude").value = lat;
      document.getElementById("longitude").value = lng;
      document.getElementById("location_id").value = placeId;
    });
  }
</script>
																		</body>
																		</html>
																		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDbBjKoCXv11UpFdj0n6ul9YYaLO4SwtLU"></script>


<script src="https://fonts.googleapis.com/css?family=Roboto:300,400,500></script>
																		
                   
				
   