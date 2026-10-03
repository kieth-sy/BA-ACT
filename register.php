<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | AIM Smile Dental Clinic</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>

<body class="register-page">

    <main class="container">

        <section class="form-card register-card">

            <div class="logo">
                <img src="logo.jpg" alt="AIM Smile Dental Clinic Logo">
            </div>

            <h1>AIM Smile</h1>

            <p class="clinic-name">
                DENTAL CLINIC
            </p>

            <h2>
                Create Account
            </h2>

            <p class="subtitle">
                Register for your dental care account
            </p>

            <form id="registerForm" method="post">

                <div class="form-group">

                    <label for="fullname">
                        Full Name
                    </label>

                    <input
                        type="text"
                        id="fullname"
                        name="fullname"
                        placeholder="Enter your full name"
                    >

                </div>


                <div class="form-group">

                    <label for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter your email"
                    >

                </div>


                <div class="form-group">

                    <label for="username">
                        Username
                    </label>

                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Enter your username"
                    >

                </div>


                <div class="form-group">

                    <label for="register-password">
                        Password
                    </label>

                    <input
                        type="password"
                        id="register-password"
                        name="password"
                        placeholder="Create a password"
                    >

                </div>


                <div class="form-group">

                    <label for="confirm-password">
                        Confirm Password
                    </label>

                    <input
                        type="password"
                        id="confirm-password"
                        name="confirm-password"
                        placeholder="Confirm your password"
                    >

                </div>


                <div class="terms">

                    <input
                        type="checkbox"
                        id="terms"
                        name="terms"
                    >

                    <label for="terms">
                        I agree to the Terms and Conditions.
                    </label>

                </div>


                <button type="submit">
                    Create Account
                </button>

            </form>


            <p class="account-text">

                Already have an account?

                <a href="login.php">
                    Login
                </a>

            </p>

        </section>

    </main>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.21.0/dist/jquery.validate.min.js"></script>


    <script>

        $(document).ready(function(){

            $("#registerForm").validate({

                rules: {

                    fullname: {
                        required: true,
                        minlength: 5,
                        maxlength: 50
                    },

                    email: {
                        required: true,
                        email: true
                    },

                    username: {
                        required: true,
                        minlength: 5,
                        maxlength: 20
                    },

                    password: {
                        required: true,
                        minlength: 7
                    },

                    "confirm-password": {
                        required: true,
                        equalTo: "#register-password"
                    },

                    terms: {
                        required: true
                    }

                },


                messages: {

                    fullname: {
                        required: "Name is required",
                        minlength: "Name must be at least 5 characters long",
                        maxlength: "Name cannot exceed 50 characters"
                    },

                    email: {
                        required: "Email is required",
                        email: "Please enter a valid email address"
                    },

                    username: {
                        required: "Username is required",
                        minlength: "Username must be at least 5 characters long",
                        maxlength: "Username cannot exceed 20 characters"
                    },

                    password: {
                        required: "Password is required",
                        minlength: "Password must be at least 7 characters long"
                    },

                    "confirm-password": {
                        required: "Confirm password is required",
                        equalTo: "Confirm password must be the same as your password"
                    },

                    terms: {
                        required: "You must agree to the Terms and Conditions"
                    }

                },


                errorClass: "error",


                errorPlacement: function(error, element) {

                    if (element.attr("name") == "terms") {

                        error.insertAfter(element.closest(".terms"));

                    } else {

                        error.insertAfter(element);

                    }

                }

            });

        });

    </script>

</body>
</html>