<!DOCTYPE html>
<html lang="en">
<head>
    <title>Age Connect</title>
    <?php
        include "php/include/head.php"
    ?>
</head>
<body>
<header>
    <nav class="light-blue" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Age Connect</a>
        <?php include "php/include/nav.php"?>
        </div>
    </nav>
</header>

<body>
    <div class="container">
      <br><br>
      <h1 class="header center purple-text lighten-1">Profile Page</h1>
      <div class="row">
	  	  <div class="col s6">
	  <h5 class="header col s12 bold">Quick links</h5>
	  <div class="collection">
        <a href="#!" class="collection-item"><i class="material-icons left">info_outline</i>Feedback and concerns</a>
        <a href="#!" class="collection-item"><i class="material-icons left">email</i>Edit contact details</a>
        <a href="#!" class="collection-item"><i class="material-icons left">note_add</i>Add interests</a>
        <a href="#!" class="collection-item"><i class="material-icons left">search</i>Find matches</a>
        <a href="#!" class="collection-item"><i class="material-icons left">live_help</i>Help</a>
      </div>
	  </div>
		<div class="col s6">
        <h5 class="header col s12 bold">Personal Profile: John Smith</h5>
		<br>
		<table>
        <thead>
 <!--         <tr>
              <th data-field="id">Name</th>
              <th data-field="name">Item Name</th>
          </tr>-->
        </thead>

        <tbody>
          <tr>
            <td>Name</td>
            <td>John Smith</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>example@gmail.com</td>
          </tr>
          <tr>
            <td>Telephone</td>
            <td>01234 567890</td>
          </tr>
          <tr>
            <td>Date of birth</td>
            <td>1 January, 1970</td>
          </tr>
        </tbody>
      </table>
	  </div>

	  </div>
	  

	  <div class="row">
	  <h5 class="header col s12 bold">Application status</h5>
		<br>
		<p> The following powerpoint presentations are provided for training purposes, please download them all, and then confirm you have watched them using the button below.</p>
      <!-- <div class="collection">
        <a class="collection-item green-text">
			<i class="tiny material-icons left">done</i>Contact details entered</a>
        <a class="collection-item green-text"><i class="tiny material-icons left">done</i>Training completed</a>
        <a class="collection-item red-text"><i class="tiny material-icons left">error</i>Checks validated</a>
        <a class="collection-item red-text"><i class="tiny material-icons left">error</i>Interests added</a>
        <a class="collection-item red-text"><i class="tiny material-icons left">error</i>Matched profiles!</a>
      </div>-->
	  
	  <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header green"><i class="material-icons">done</i>Contact details entered</div>
      <div class="collapsible-body"><p>Initial details collected: Personal details, user log in, and contact details.</p></div>
    </li>
    <li>
      <div class="collapsible-header green"><i class="material-icons">done</i>Training completed</div>
      <div class="collapsible-body"><p>Our mandatory training must be confirmed to have been read. 
	  Training information and downloads are available <a href="/training.php">here</a>.</p></div>
    </li>
    <li>
      <div class="collapsible-header green"><i class="material-icons">done</i>Interests added</div>
      <div class="collapsible-body"><p>In order to match you with an appropriate partner we take details on your interests 
	  and topics of conversation that would help find an ideal match.</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">error</i>Checks validated</div>
      <div class="collapsible-body"><p>Due to legal requirements we are required to follow up on your personal references. 
	  This process can take anywhere from a couple of days to a few weeks. 
	  If you have any questions regarding this process please call Age UK Advice on 0800 169 2081</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">error</i>Matched profiles!</div>
      <div class="collapsible-body"><p>Your profile has been matched with one or more elderly partners, and weekly calls have been scheduled!
	  If you require any support that cannot be provided on this website, please contact Age UK Advice on 0800 169 2081</p></div>
    </li>
		</ul>
	  
	  </div> 
  <br>
   </div>
   
   <br>
   	  <h5 class="header col s12 bold">Notification Settings</h5>
	  <form action="#">
    <p>
      <input type="checkbox" id="test1" />
      <label for="test1">email alerts</label>
    </p>
    <p>
      <input type="checkbox" id="test2" />
      <label for="test2">SMS reminders</label>
    </p>
    <p>
      <input type="checkbox" id="test3" />
      <label for="test3">Phone contact</label>
    </p>
	<a class="waves-effect waves-light btn purple lighten-1" id="applyNow">Update notification settings</a>
	</form>
	  
<br><br>
</body>

<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/init.js"></script>
</body>
</html>