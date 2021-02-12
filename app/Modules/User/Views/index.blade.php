<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Register Boxed | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/forms/switches.css">
</head>
<body class="form">
    

    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Register</h1>
                        <p class="signup-link register">Already have an account? <a href="user/login">Log in</a></p>
                        <form class="text-left needs-validation" action="user/register" method="POST" novalidate>
                            <div class="form">

                                <div id="firstname-field" class="field-wrapper input">
                                    <label for="firstname">FIRST NAME</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input id="firstname" name="firstname" type="text" class="form-control" placeholder="First Name" value="" required>
                                    <input id="token_value" type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="invalid-feedback">
                                        Please Fill The First Name
                                    </div>
                                </div>
                                <div id="lastname-field" class="field-wrapper input">
                                    <label for="lastname">LAST NAME</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input id="lastname" name="lastname" type="text" class="form-control" placeholder="Last Name" required>
                                    <div class="invalid-feedback">
                                        Please Fill The Last Name
                                    </div>

                                </div>

                                <div id="select_menu" class="field-wrapper input">
                                    <label for="user_type">BRAND/INFLUENCER</label>
                                    <select id="user_type" name="user_type" class="custom-select" required>
                                        <option value="">Please select option</option>
                                        <option value="1">Brand</option>
                                        <option value="2">Influencer</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please Select the field
                                    </div>
                                </div>                             
                                <div id="email-field" class="field-wrapper input">
                                    <label for="email">EMAIL</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign register"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                                    <input id="email" name="email" type="email" value="" class="form-control" placeholder="Email" onblur="duplicateEmail(this)" required>
                                    <div class="invalid-feedback">
                                        Please fill the Email
                                    </div>
                                    <div id="email_exist" class="invalid-feedback">
                                        This email is already connected to an account
                                    </div>
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">PASSWORD</label>
                                        <!-- <a href="auth_pass_recovery_boxed.html" class="forgot-pass-link">Forgot Password?</a> -->
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
                                    <div class="invalid-feedback">
                                        Please fill the Password
                                    </div>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="form-check pl-0">
                                        <div class="custom-control custom-checkbox checkbox-success">
                                            <input type="checkbox" class="custom-control-input" id="invalidCheck" required>
                                            <label class="custom-control-label" for="invalidCheck">Agree to terms and conditions</label>
                                            <div class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary submit-fn mt-2" value="">Get Started!</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="/bootstrap/js/popper.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="/assets/js/authentication/form-2.js"></script>
</body>
</html>

<script type="text/javascript">
window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
}, false);
</script>
<script type="text/javascript">
    function duplicateEmail(element){
        var email = $(element).val();
        $.ajax({
            type: "POST",
            url: "user/checkemail",
            data: {email:email,
            _token:"{{ csrf_token() }}"
            },
            dataType: "json",
            success: function(res) {
                if(res.exists){
                $('#email_exist').show();//or $("#hidden").show();
                }else{
                }
            },
            error: function (jqXHR, exception) {
            }
        });
    }
</script>
