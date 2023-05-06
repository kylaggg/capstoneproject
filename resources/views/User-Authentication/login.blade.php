<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdU - Appraisal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/styles/style.css">
</head>

<body background="white" id="loginPage">
    <div class="container" id="formcard">
        <img src="/images/adulogo.png" id="logo">
        <form method="post" action="login_process.php">
            <div>
                <input type="text" class="form-control" id="email" placeholder="Adamson Email" name="email" required>
            </div>
            <div class="input-group" id="passwordContainer">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password"
                    required>
                <button class="btn btn-outline-secondary" type="button" id="togglePasswordButton"
                    onclick="togglePasswordVisibility()">
                    <i class='bx bx-show' id="password-toggle-icon"></i>
                </button>
            </div>
            <div id="wrong-password-alert"></div>
            <div id="user-not-found-alert"></div>
            <div id="user-deactivated-alert"></div>

            <div id="resetPassword">
                <a href="reset_password.php" id="forgotPassword">Forgot Password?</a>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" id="signinButton" value="Sign in">Sign in</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
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

    $('#formcard form').submit(function(event) {
        event.preventDefault();

        // Get the form data
        var formData = $(this).serialize();

        $.ajax({
            url: '/login', // Replace with your Laravel route URL
            method: 'POST',
            data: formData,
            success: function(response) {
                // Handle the successful response
            },
            error: function(xhr) {
                // Handle the error response
            }
        });
    });


    /*const form = document.querySelector('form');
    form.addEventListener('click', function(event) {
        isAduEmail();
    });

    document.querySelector('form').addEventListener('submit', function(event) {
        event.preventDefault();
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        const password_alert = document.getElementById('wrong-password');
        const user_not_found_alert = document.getElementById('user-not-found');

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            console.log(this.responseText)
            if (this.responseText.trim() == 'admin privileges') {
                window.location.href = '../Dashboard/dashboard.php';
            } else if (this.responseText.trim() == 'user deactivated') {
                const user_deactivated_alert = document.querySelector('#user-deactivated-alert');
                const user_deactivated = document.createElement('div');
                user_deactivated.classList.add('alert', 'alert-danger', 'alert-dismissible', 'fade', 'show');
                user_deactivated.setAttribute('role', 'alert');
                user_deactivated.setAttribute('id', 'user-deactivated');
                user_deactivated.innerHTML = 'User deactivated. Contact your HR department. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" id="user-deactivated-dismiss"></button>';
                user_deactivated_alert.insertBefore(user_deactivated, user_deactivated_alert.firstChild);
            } else if (this.responseText.trim() == 'valid password') {
                window.location.href = 'two_factor_authentication.php';
            } else if (this.responseText.trim() == 'invalid password') {
                const wrong_password_alert = document.querySelector('#wrong-password-alert')
                const wrong_password = document.createElement('div');
                wrong_password.classList.add('alert', 'alert-danger', 'alert-dismissible', 'fade', 'show');
                wrong_password.setAttribute('role', 'alert');
                wrong_password.setAttribute('id', 'wrong-password');
                wrong_password.innerHTML = 'You have entered a wrong password. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" id="wrong-password-dismiss"></button>';
                wrong_password_alert.insertBefore(wrong_password, password_alert);
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
        xhttp.open('POST', 'login_process.php');
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        console.log(password);

        xhttp.send(`email=${email}&password=${password}`);
    });
    */
    </script>
</body>

</html>