<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../style.css">
</head>

<body background="white" id="loginPage">
    <div class="container" id="formcard">
        <center>
            <h1>RESET PASSWORD</h1>
        </center>

        <div class="container" id="emailContainer">
            <form method="post" action="{{route('password-reset')}}">
                @csrf
                <div>
                    <input type="email" class="form-control" id="email" placeholder="Adamson Email" value="{{old('email')}}" name="email">
                </div>
                <div id="user-not-found-alert">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" id="resetPasswordButton">Reset Password</button>
                </div>
            </form>
        </div>

        <div class="container" id="codeContainer" style="display:none">
            <center>
                <p>A four-digit code has been sent to your email. Enter the code below:</p>
            </center>
            <form method="POST" id="codeForm">
                <div class="d-flex justify-content-center">
                    <input type="text" pattern="[0-9]" class="form-control mx-1" id="code1" maxlength="1" oninput="moveToNext(this, 'code2')" required>
                    <input type="text" pattern="[0-9]" class="form-control mx-1" id="code2" maxlength="1" oninput="moveToNext(this, 'code3')" required>
                    <input type="text" pattern="[0-9]" class="form-control mx-1" id="code3" maxlength="1" oninput="moveToNext(this, 'code4')" required>
                    <input type="text" pattern="[0-9]" class="form-control mx-1" id="code4" maxlength="1" required>

                </div>
                <div id="wrong-code-alert"></div>
                <div class="d-grid gap-2 mt-3">
                    <button type="submit" class="btn btn-primary" id="verifyButton">Verify</button>
                </div>
            </form>
        </div>

        <div class="container" id="changePasswordContainer" style="display:none">
            <center>
                <p>Email has been verified. Enter your new password:</p>
            </center>
            <form id="passwordForm">
                <div class="input-group">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                    <button class="btn btn-outline-secondary" type="button" id="togglePasswordButton" onclick="togglePasswordVisibility()">
                        <i class='bx bx-show' id="password-toggle-icon"></i>
                    </button>
                </div>
                <div class="input-group" id="confirmPasswordContainer">
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" name="password" required>
                    <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPasswordButton" onclick="toggleConfirmPasswordVisibility()">
                        <i class='bx bx-show' id="password-toggle-icon"></i>
                    </button>
                </div>
                <div id="password-changed-alert"></div>
                <div id="password-mismatch-alert"></div>
                <div class="d-grid gap-2 mt-3">
                    <button type="submit" class="btn btn-primary" id="changePasswordButton">Change Password</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("password");
            const passwordToggleIcon = document.getElementById("password-toggle-icon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordToggleIcon.classList.remove("bi-eye-fill");
                passwordToggleIcon.classList.add("bi-eye-slash-fill");
            } else {
                passwordInput.type = "password";
                passwordToggleIcon.classList.remove("bi-eye-slash-fill");
                passwordToggleIcon.classList.add("bi-eye-fill");
            }
        }

        function toggleConfirmPasswordVisibility() {
            const passwordInput = document.getElementById("confirmPassword");
            const passwordToggleIcon = document.getElementById("password-toggle-icon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordToggleIcon.classList.remove("bi-eye-fill");
                passwordToggleIcon.classList.add("bi-eye-slash-fill");
            } else {
                passwordInput.type = "password";
                passwordToggleIcon.classList.remove("bi-eye-slash-fill");
                passwordToggleIcon.classList.add("bi-eye-fill");
            }
        }

        function moveToNext(currentInput, nextInputId) {
            if (currentInput.value.length == currentInput.maxLength) {
                document.getElementById(nextInputId).focus();
            }
        }
        
        /*
        const emailForm = document.getElementById('emailForm');
        emailForm.addEventListener('click', function(event) {
            isAduEmail();
        });
        emailForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const email = document.getElementById('email').value;

            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                if (this.responseText.trim() == 'valid') {
                    const emailContainer = document.getElementById('emailContainer');
                    const codeContainer = document.getElementById('codeContainer');
                    emailContainer.style.display = 'none';
                    codeContainer.style.display = 'block';

                    const codeForm = document.getElementById('codeForm');
                    codeForm.addEventListener('submit', function(event) {
                        event.preventDefault();
                        const inputtedCode = document.getElementById('code1').value + document.getElementById('code2').value + document.getElementById('code3').value + document.getElementById('code4').value;

                        const xhttp2 = new XMLHttpRequest();
                        xhttp2.onload = function() {
                            if (this.responseText.trim() == 'correct code') {
                                const changePasswordContainer = document.getElementById('changePasswordContainer');
                                codeContainer.style.display = 'none';
                                changePasswordContainer.style.display = 'block';

                                const passwordForm = document.getElementById('passwordForm');
                                passwordForm.addEventListener('click', function(event) {
                                    isPasswordStrong();
                                });

                                passwordForm.addEventListener('submit', function(event) {
                                    event.preventDefault();

                                    const password = document.getElementById('password').value;
                                    const confirmPassword = document.getElementById('confirmPassword').value;

                                    const xhttp3 = new XMLHttpRequest();
                                    xhttp3.onload = function() {
                                        console.log(this.responseText);
                                        if (this.responseText.trim() == 'correct password') {
                                            const success_alert = document.querySelector('#password-changed-alert');
                                            const success_message = document.createElement('div');
                                            success_message.classList.add('alert', 'alert-success', 'd-flex', 'align-items-center');
                                            success_message.setAttribute('role', 'alert');
                                            success_message.innerHTML = '<i class="bx bx-check-circle" id="checkCircle"></i><div>Password successfully changed!</div>';
                                            success_alert.insertBefore(success_message, success_alert.firstChild);

                                            (async () => {
                                                await new Promise(resolve => setTimeout(resolve, 3000));
                                                window.location.href = 'login.php';
                                            })();

                                        } else {
                                            console.log(this.responseText);
                                            const password_mismatch_alert = document.querySelector('#password-mismatch-alert');
                                            const password_mismatch = document.createElement('div');
                                            password_mismatch.classList.add('alert', 'alert-danger', 'alert-dismissible', 'fade', 'show');
                                            password_mismatch.setAttribute('role', 'alert');
                                            password_mismatch.setAttribute('id', 'password-mismatch');
                                            password_mismatch.innerHTML = 'Passwords do not match.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" id="password-mismatch-dismiss"></button>';
                                            password_mismatch_alert.insertBefore(password_mismatch, password_mismatch_alert.firstChild);
                                        }
                                    };

                                    xhttp3.open('POST', 'change_password_process.php');
                                    xhttp3.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                                    xhttp3.send(`password=${password}&confirmPassword=${confirmPassword}`);
                                });

                            } else {
                                const wrong_code_alert = document.querySelector('#wrong-code-alert');
                                const wrong_code = document.createElement('div');
                                wrong_code.classList.add('alert', 'alert-danger', 'alert-dismissible', 'fade', 'show');
                                wrong_code.setAttribute('role', 'alert');
                                wrong_code.setAttribute('id', 'wrong-code');
                                wrong_code.innerHTML = 'You have entered the wrong code.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" id="wrong-code-dismiss"></button>';
                                wrong_code_alert.insertBefore(wrong_code, wrong_code_alert.firstChild);
                            }
                        };
                        xhttp2.open('POST', 'two_factor_authentication_process.php');
                        xhttp2.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        xhttp2.send(`code=${inputtedCode}`);
                    });


                } else if (this.responseText.trim() == 'user not found') {
                    const user_not_found_alert = document.querySelector('#user-not-found-alert');
                    const user_not_found = document.createElement('div');
                    user_not_found.classList.add('alert', 'alert-danger', 'alert-dismissible', 'fade', 'show');
                    user_not_found.setAttribute('role', 'alert');
                    user_not_found.setAttribute('id', 'user-not-found');
                    user_not_found.innerHTML = 'User not found. Contact your HR department. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" id="user-not-found-dismiss"></button>';
                    user_not_found_alert.insertBefore(user_not_found, user_not_found_alert.firstChild);
                }
            };

            xhttp.open('POST', 'reset_password_process.php');
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            console.log(email);
            xhttp.send(`email=${email}`);
            //addCode();
        });
        */
    </script>
</body>

</html>