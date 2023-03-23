<div class="shared-container">
    <div class="container-fluid g-0 h-100 w-100">
        <div class="row g-0">
            <div class="col-5">
                <section class="shared-sidebar">
                    <header class="text-center">
                        <a class="navbar-brand fs-3 fw-bold m-0 mb-3 d-block" href="/Home">Dandelion</a>
                        <div class="">
                            <h1 class="fw-bold dosis-font">Experience freshness every day</h1>
                            <h1 class="fw-bold dosis-font">Natural & Nutrition.</h1>
                        </div>
                    </header>
                    <img src="./assets/img/3.png" alt="">
                </section>
            </div>
            <div class="col-7">
                <section class="shared-content d-flex justify-content-center align-items-center h-100">
                    <!-- Sign in -->
                    <div class="shared-form">
                        <h2 class="mb-5 tilt-font text-center">Sign up to Dandelion</h2>
                        <form action="./SignUp/NewReg" id="register" method="POST" class="row g-3">
                            <div class="col-md-6">
                                <label for="firstname" class="form-label fw-bold">First Name</label>
                                <input type="text" name="firstname" class="form-control form-control-lg input-color" required>
                            </div>
                            <div class="col-md-6">
                                <label for="username" class="form-label fw-bold">Username</label>
                                <input type="text" name="username" id="username" class="form-control form-control-lg input-color" required>
                                <div id="messageUn" class="form-text" style="font-size: 0.8rem;"></div>
                            </div>
                            <div class="col-md-12">
                                <label for="email" class="form-label fw-bold">Email</label>
                                <input type="email" name="email" class="form-control form-control-lg input-color" required>
                                <div id="emailUn" class="form-text" style="font-size: 0.8rem;"><?php echo $data['emailError'] ?? '' ?></div>
                            </div>
                            <div class="col-md-12">
                                <label for="password" class="form-label fw-bold">Password</label>
                                <input type="password" name="password" class="form-control form-control-lg input-color" required>
                            </div>
                            <div class="col-md-12">
                                <label for="confirmPassword" class="form-label fw-bold">Password Confirm</label>
                                <input type="password" name="confirmPassword" class="form-control form-control-lg input-color" required>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input type="checkbox" name="terms" class="form-check-input terms" id="exampleCheck1">
                                    <label class="form-check-label user-select-none text-muted" for="exampleCheck1">Creating an
                                        account means you’re okay with our
                                        <a href="" class="text-decoration-none text-link">Terms of Service</a>,
                                        <a href="" class="text-decoration-none text-link">Privacy Policy</a>,
                                        and our default
                                        <a href="" class="text-decoration-none text-link">Notification Settings</a>.
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" name="btnSignup" class="btn btn-dark w-100 mt-3">Sign Up</button>
                            </div>
                        </form>
                        <div class="not-member d-flex justify-content-center mt-3">
                            <span>Already a member?
                                <a href="/Signin" class="text-decoration-none text-link">Sign in
                                    now</a>
                            </span>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<script src="./assets/js/signup.js"></script>

<?php if (isset($data["result"])) { ?>
    <h3><?php
        if ($data["result"]) {
            echo "Đăng ký thành công";
        } else {
            echo "Đăng ký thất bại";
        }
        ?>
    </h3>
<?php } ?>