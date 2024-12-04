<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tab icon -->
    <link href="../assets/img/favicon.webp" rel="icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>NLSA - E-pubs</title>
</head>
<body>
    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo" id="#index">
                <p>E-pubs</p>
            </div>

            <div class="nav-menu">
                <ul>
                    <li><a href="#" class="link active">Home</a></li>
                    <li><a href="#" class="link">Overview</a></li>
                    <li><a href="#" class="link">Form</a></li>
                </ul>
            </div>
            
            <div class="nav-button">
                <button class="btn white-btn" id="loginBtn">Sign In</button>
                <button class="btn" id="signupBtn">Sign Up</button>
            </div>

            <div class="nav-menu-btn">
                <i class='bx bx-menu'></i>
            </div>
        </nav>

            <!---------form box------>
            <div class="form-box">
                
                <!----------Sign-Up form---------->
                <div class="registartion-container" id="register">
                    <div class="top">
                        <span>Have an account? <a href="#index" onclick="login()">Login</a></span>
                        <header>Sign UP</header>
                    </div>
                    <div class="two-forms">
                        <div class="input-field">
                            <i class="bx bx-user"></i>
                            <input type="text" class="input-field" name="fullName" placeholder="Full name">
                        </div>
                        <div class="input-field">
                            <i class="bx bx-user"></i>
                            <input type="email" class="input-field" name="emailAddress" placeholder="name@domain.com">
                        </div>
                        <div class="input-field">
                            <i class="bx bx-user"></i>
                            <input type="text" class="input-field" name="contactNo" placeholder="+27 763 324 8964">
                        </div>
                        <div class="input-field">
                            <i class="bx bx-user"></i>
                            <input type="password" class="input-field" name="password" placeholder="Password">
                        </div>
                        <div class="input-field">
                            <i class="bx bx-user"></i>
                            <input type="password" class="input-field" name="confirm_password" placeholder="Confirm password">
                        </div>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>