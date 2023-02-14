
<div class="container mt-5">
        <form action="/login/process" method="POST">
            @csrf
            <div class="modal fade" tabindex="-1" id="loginModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">LOGIN</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="mb-2 mt-2">
                            <label for="email" class="form-label">Email </label>
                            <label class="signUp float-end">Need an Account?<a href="#" class="text-decoration-none mx-2" data-bs-toggle="modal" data-bs-target="#signUpModal" >SignUp</a></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ old('email') }}" required>
                        </div>
                        <div class="">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                        </div>
                    </div>
                    <div class="" align="center">
                        <a href="#" class="signUp text-decoration-none text-dark">Forgot Password?</a>
                    </div>
                    <hr>
                        <div class="row mx-2" align="end">
                            <div class="col mb-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>   
    </div>