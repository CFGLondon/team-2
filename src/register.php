<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <?php
    include "php/include/head.php"
    ?>
</head>
<body>
<header>
    <nav class="light-blue" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#"
                                              class="brand-logo">Age Connect</a>
            <?php include "php/include/nav.php" ?>
        </div>
    </nav>
</header>

<div class="container">
    <div class="row">
        <form class="col s12">
            <div class="section">
                <h5>Thank you for your interest</h5>
                <div class="row">
                    <div class="input-field col s6">
                        <input name="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6 offset-s6">
                        <input name="confirmpassword" type="password" class="validate">
                        <label for="confirmpassword">Confirm Password</label>
                    </div>

                </div>
            </div>
            <div class="divider"></div>
            <div class="section">
                <h5>Personal Details</h5>
                <div class="row">
                    <div class="input-field col s6">
                        <input name="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input name="telephone" type="email" class="validate">
                        <label for="telephone">Telephone</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="dob" type="date" class="datepicker">
                        <label for="dob">Date of birth</label>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="section">
                <h5>Address</h5>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="address1" type="text" class="validate">
                        <label for="address1">Address line 1</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="address2" type="text" class="validate">
                        <label for="address2">Address line 2</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8">
                        <input name="town" type="text" class="validate">
                        <label for="town">Town</label>
                    </div>
                    <div class="input-field col s4">
                        <input name="postcode" type="text" class="validate">
                        <label for="postcode">Postcode</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <button class="btn waves-effect waves-light" type="submit"
                        name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/init.js"></script>
</body>
</html>