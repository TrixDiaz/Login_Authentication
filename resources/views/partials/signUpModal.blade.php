
<div class="container mt-5">
        <form action="/register" method="POST">
            @csrf
            <div class="modal fade" tabindex="-1" id="signUpModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">SIGNUP</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="mb-2 mt-2">
                            <label for="text" class="form-label">Email:</label>
                            <label class="signUp float-end">Have an Account?<a href="#" class="text-decoration-none mx-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{ old('email') }}" required>
                            @if($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="mb-2 mt-2">
                            <label for="text" class="form-label">Username:</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" value="{{ old('username') }}" required >
                            @if($errors->has('username'))
                            <span class="text-danger">{{ $errors->first('username') }}</span>
                        @endif
                        </div>
                        <div class="mb-2 mt-2">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                            @if($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                        </div>
                        <div class="mb-2 mt-2">
                            <label for="password_confirmation" class="form-label">Confirm Password:</label>
                            <input type="password" class="form-control" id="password_confirmation" placeholder="Enter Confirm password" name="password_confirmation" required>
                            @if($errors->has('password_confirmation'))
                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                        </div>
                        <input type="text" class="form-control" name="role" id="role" value="user" hidden>
                    </div>
                    <div class="" align="center">
                        <a href="#" class="signUp text-decoration-none text-dark">Forgot Password?</a>
                    </div>
                    <hr>
                        <div class="row mx-2" align="end">
                            <div class="col mb-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>   
    </div>