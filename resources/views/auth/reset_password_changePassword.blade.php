<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../style.css">
</head>

<body background="white" id="loginPage">
    <div class="container" id="formcard">
        <center>
            <h1>RESET PASSWORD</h1>
        </center>

        <div class="container" id="changePasswordContainer">
            <center>
                <p>Email has been verified. Enter your new password:</p>
            </center>
            <form id="passwordForm" method="POST" action="{{ route('reset-password') }}">
                @csrf
                <div class="input-group">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password"
                        required>
                    <button class="btn btn-outline-secondary" type="button" id="togglePasswordButton"
                        onclick="togglePasswordVisibility()">
                        <i class='bx bx-show' id="password-toggle-icon"></i>
                    </button>
                </div>

                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>

                <div class="input-group" id="confirmPasswordContainer">
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password"
                        name="confirm_password" required>
                    <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPasswordButton"
                        onclick="toggleConfirmPasswordVisibility()">
                        <i class='bx bx-show' id="password-toggle-icon"></i>
                    </button>
                </div>

                <span class="text-danger">
                    @error('confirm_password')
                        {{ $message }}
                    @enderror
                </span>

                @if (Session::has('fail'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('fail') }}
                    </div>
                @endif
                <div class="d-grid gap-2 mt-3">
                    <button type="submit" class="btn btn-primary" id="changePasswordButton">Change Password</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    </script>
</body>

</html>
