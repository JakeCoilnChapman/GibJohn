<!-- dropdown_content.php -->
<?php if (isset($_SESSION['UsersID']) && isset($_SESSION['Username'])) { ?>
    <div class="dropdown">
        <?php
        $displayName = $_SESSION['Name'];

        if (isset($_SESSION['Admin']) && $_SESSION['Admin']) {
            $displayName .= ' (Admin)';
        }
        ?>
        <button onclick="myFunction()" class="dropbtn"><?php echo $displayName; ?></button>
        <div id="myDropdown" class="dropdown-content">
            <a href="\CarMax\AccountPage.php">Account</a>
            <a href="PHP/logoutSystem.php">Logout</a>
            <?php if (isset($_SESSION['Admin']) && $_SESSION['Admin']) { ?>
                <a href=" \CarMax/admin_panel/AdminMan.php">Admin Panel</a>
            <?php } ?>
        </div>
    </div>
<?php } else { ?>
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Sign In</button>
        <div id="myDropdown" class="dropdown-content">
            <form id="login-form" action="PHP/LoginSystem.php" method="post">
                <h2>Login</h2>
                <?php if (isset($_GET['error']))  {?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" placeholder="username" name="uname" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" placeholder="Password"  name="password" required>
                </div>
                <div class="button-container">
                    <button type="submit" class="login-button">Login</button>
                    <button type="button" class="signup-button" onclick="showSignupForm()">Sign up</button>
                </div>

                <label>
                    <input type="checkbox" checked="checked" name="remember"> <?php if (isset($_COOKIE["user"]) && isset($_COOKIE["pass"])){ echo "checked";}?> Remember me
                </label> 
            </form>
            <form id="signup-form" action="PHP/SignUp.php" style="display: none;" method="post">
                <h2>Sign Up</h2>
                <label for="Name"><b>Name:</b></label>
                <input type="text" placeholder="Enter Name" name="Name" id="Name" required>

                <label for="Surname"><b>Surname:</b></label>
                <input type="text" placeholder="Enter Surname" name="Surname" id="Surname" required>

                <label for="Email"><b>Email:</b></label>
                <input type="text" placeholder="Enter Email" name="Email" id="Email" required>

                <label for="signup-username"><b>Username:</b></label>
                <input type="text" placeholder="Enter Username" name="signup-username" id="signup-username" required>

                <label for="signup-password"><b>Password:</b></label>
                <input type="password" placeholder="Enter Password" name="signup-password" id="signup-password" required>

                <button type="submit" class="signup-button" onclick="signup()">Sign up</button>
                <button type="button" class="login-button" onclick="showLoginForm()">Back to Login</button>
            </form>
        </div>
    </div>
<?php } ?>
