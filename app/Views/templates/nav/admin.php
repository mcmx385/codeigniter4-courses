<?php
$loggedIn = isset($_SESSION['username']) && $_SESSION['username'];
?>

<nav class="navbar navbar-expand-md navbar-dark shadow-sm font-weight-bold">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <div>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Account</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">
                        <?php if (!$isLoggedIn): ?>
                            <a class="dropdown-item" href="/user/login">Login</a>
                        <?php else: ?>
                            <a class="dropdown-item" href="/user/logout">Logout</a>
                        <?php endif; ?>
                        <a class="dropdown-item" href="/user/signup">Signup</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/user/profile">Profile</a>
                        <a class="dropdown-item" href="/user/forgot_password">Forgot Password</a>
                        <a class="dropdown-item" href="/user/reset_password">Reset Password</a>
                        <a class="dropdown-item" href="/user/update_password">Update Password</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>