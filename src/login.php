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
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Log in</a>
            <?php include "php/include/nav.php"?>
        </div>
    </nav>
</header>

<main>
    <div class="section">
        <div class="container">
            <h1 class="header center purple-text lighten-1">Welcome Back!</h1>
            <div class="row">
                <form class="col s12" method="post" action="php/common.php">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" name="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" name="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                </form>
            </div>

            <a class="waves-effect waves-light btn purple lighten-1" id="loginConfirm">Log In</a>
        </div>
    </div>
</main>

<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/init.js"></script>
</body>
</html>