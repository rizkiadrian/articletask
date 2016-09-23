
<!-- <login form> -->
<div class="container">
    <div class="row">
        
        <div class="col-xs-2">
            <div class="login-box well">
                    <form action="">
                        <legend>Sign In</legend>
                        <div class="form-group">
                            <label for="username-email">E-mail</label>
                            {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control'])!!}
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control', 'required' => 'required'])!!}
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-default btn-login-submit btn-block m-t-md" value="Login" />
                        </div>
                        <span class='text-center'><a href="/resetting/request" class="text-sm">Forgot Password?</a></span>
                        <div class="form-group">
                            <p class="text-center m-t-xs text-sm">Do not have an account?</p> 
                            <a href="{{ route('users.create') }}" class="btn btn-default btn-block m-t-md">Create an account</a>
                        </div>
                    </form>
                
            </div>
        </div>
        
    </div>
</div>
<!-- <login form> -->