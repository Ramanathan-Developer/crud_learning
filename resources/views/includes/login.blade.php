<form action="" method="post">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <label for="username" class="form-label fw-bold"><small>User Name</small><span
                            class="text-danger">*</span></label>
                    <input type="text"
                        class="form-control @error('username')
                        is-invalid
                    @enderror"
                        id="username" name="username" aria-describedby="nameHelp" value="{{ old('username') }}">
                    <div id="nameHelp" class="form-text text-danger">
                        @error('username')
                            {{ $message }}
                        @enderror
                    </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
                <label for="country" class="form-label fw-bold"><small>Password</small><span
                        class="text-danger">*</span></label>
                <input type="password"
                    class="form-control @error('password')
                    is-invalid
                @enderror"
                    id="password" name="password" aria-describedby="pwdHelp" value="{{ old('password') }}">
                <div id="pwdHelp" class="form-text text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-3">
            <input type="submit" value="Login" class="btn btn-primary">
        </div>        
    </div>
    
</div>
</form>