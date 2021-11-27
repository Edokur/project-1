<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    </head>
    <body>
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #232130">
            <form action="check_login.php" method="post">
                <div class="content-3-6 d-flex flex-column align-items-center h-100 flex-lg-row"
        style="font-family: 'Poppins', sans-serif;">
        <div class="position-relative d-none d-lg-block h-100 width-left">
            <img class="position-absolute img-fluid centered" width="100%"
            src="../images/welcome.png"
            alt="">
        </div>
        <div class="d-flex mx-auto align-items-left justify-content-left width-right mx-lg-0">
            <div class="right mx-lg-0 mx-auto">
            <div class="align-items-center justify-content-center d-lg-none d-flex">
                <img class="img-fluid"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Empty%20State/EmptyState3/Empty-3-6.png"
                alt="">
            </div>
            <h3 class="title-text">Log In to continue</h3>
            <p class="caption-text">Please log in using that account has<br>
                registered on the website.</p>
            <form style="margin-top: 1.5rem;" action="check_login.php" method="post">
                <div style="margin-bottom: 1.75rem;">
                <label for="exampleInputEmail1" class="d-block input-label">Email Address</label>
                <div class="d-flex w-100 div-input">
                    <svg class="icon" style="margin-right: 1rem;" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M5 5C3.34315 5 2 6.34315 2 8V16C2 17.6569 3.34315 19 5 19H19C20.6569 19 22 17.6569 22 16V8C22 6.34315 20.6569 5 19 5H5ZM5.49607 7.13174C5.01655 6.85773 4.40569 7.02433 4.13168 7.50385C3.85767 7.98337 4.02427 8.59422 4.50379 8.86823L11.5038 12.8682C11.8112 13.0439 12.1886 13.0439 12.4961 12.8682L19.4961 8.86823C19.9756 8.59422 20.1422 7.98337 19.8682 7.50385C19.5942 7.02433 18.9833 6.85773 18.5038 7.13174L11.9999 10.8482L5.49607 7.13174Z"
                        fill="#4E4B62" />
                    </svg>
                    <input class="input-field" type="email" name="email_user" id="exampleInputEmail1" placeholder="Your Email Address" autocomplete="on"
                    required>
                </div>
                </div>
                <div style="margin-top: 1rem;">
                <label for="password-content-3-6" class="d-block input-label">Password</label>
                <div class="d-flex w-100 div-input">
                    <svg class="icon" style="margin-right: 1rem;" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.81592 4.25974C7.12462 5.48872 7 6.95088 7 8H6C4.34315 8 3 9.34315 3 11V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V11C21 9.34315 19.6569 8 18 8L17 7.99998C17 6.95087 16.8754 5.48871 16.1841 4.25973C15.829 3.62845 15.3194 3.05012 14.6031 2.63486C13.8875 2.22005 13.021 2 12 2C10.979 2 10.1125 2.22005 9.39691 2.63486C8.68058 3.05012 8.17102 3.62845 7.81592 4.25974ZM9.55908 5.24026C9.12538 6.01128 9 7.04912 9 8H15C15 7.04911 14.8746 6.01129 14.4409 5.24027C14.2335 4.87155 13.9618 4.57488 13.6 4.36514C13.2375 4.15495 12.729 4 12 4C11.271 4 10.7625 4.15495 10.4 4.36514C10.0382 4.57488 9.76648 4.87155 9.55908 5.24026ZM14 14C14 14.7403 13.5978 15.3866 13 15.7324V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V15.7324C10.4022 15.3866 10 14.7403 10 14C10 12.8954 10.8954 12 12 12C13.1046 12 14 12.8954 14 14Z"
                        fill="#4E4B62" />
                    </svg>
                    <input class="input-field" type="password" name="password_user" id="password-content-3-6" placeholder="Your Password"
                    minlength="6" required>
                    <div onclick="togglePassword()">
                    <svg style="margin-left: 0.75rem; cursor:pointer" width="20" height="14" viewBox="0 0 20 14"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="icon-toggle" fill-rule="evenodd" clip-rule="evenodd"
                        d="M0 7C0.555556 4.66667 3.33333 0 10 0C16.6667 0 19.4444 4.66667 20 7C19.4444 9.52778 16.6667 14 10 14C3.31853 14 0.555556 9.13889 0 7ZM10 5C8.89543 5 8 5.89543 8 7C8 8.10457 8.89543 9 10 9C11.1046 9 12 8.10457 12 7C12 6.90536 11.9934 6.81226 11.9807 6.72113C12.2792 6.89828 12.6277 7 13 7C13.3608 7 13.6993 6.90447 13.9915 6.73732C13.9971 6.82415 14 6.91174 14 7C14 9.20914 12.2091 11 10 11C7.79086 11 6 9.20914 6 7C6 4.79086 7.79086 3 10 3C10.6389 3 11.2428 3.14979 11.7786 3.41618C11.305 3.78193 11 4.35535 11 5C11 5.09464 11.0066 5.18773 11.0193 5.27887C10.7208 5.10171 10.3723 5 10 5Z"
                        fill="#4E4B62" />
                    </svg>
                    </div>
                </div>
                <div style="margin-top: 1rem;">
                    <label for="captcha_code" class="d-block input-label">Captcha</label>
                    <div class="d-flex w-100 div-input">
                        <img src="captcha.php" />
                        <input type="text" class="input-field" name="captcha_code" id="captcha_code" required/>
                    </div>
                </div>
                </div>
                <div class="d-flex justify-content-end" style="margin-top: 0.75rem;">
                <a href="forgot-password.php" class="forgot-password fst-italic">Forgot Password?</a>
                </div>
                <input type="submit" value="Login" class="btn btn-fill text-white d-block w-100">
            </form>
            <p class="text-center bottom-caption">Don't have an account yet?
                <span class="green-bottom-caption"><a href="../registration.php" >Register Here</a></span>
            </p>
            </div>
        </div>


        </div>
        </div>
    </section>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
