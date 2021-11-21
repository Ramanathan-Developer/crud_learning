<form action="{{ route('form.store') }}" method="post" enctype="multipart/form-data" class="mb-5">
    @csrf
    <!--1st Row--->
    <h5 class="text-muted">Personal Details</h5>
    <div class="row">
        <div class="col-md-4">
            <div class="input-group-sm mb-3">
                <label for="emailaddress" class="form-label fw-bold"><small>Email address</small><span
                        class="text-danger">*</span></label>
                <input type="email"
                    class="form-control @error('emailaddress')
                    is-invalid
                @enderror"
                    name="emailaddress" id="emailaddress" aria-describedby="emailHelp"
                    value="{{ old('emailaddress') }}">
                <div id="emailHelp" class="form-text text-danger">
                    @error('emailaddress')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3 input-group-sm">
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
        <div class="col-md-4">
            <div class="mb-3 input-group-sm">
                <label for="mobilenumber" class="form-label fw-bold"><small>Mobile Number</small><span
                        class="text-danger">*</span></label>
                <input type="text"
                    class="form-control @error('mobilenumber')
                    is-invalid
                @enderror"
                    id="mobilenumber" name="mobilenumber" aria-describedby="mobileNumberHelp"
                    value="{{ old('mobilenumber') }}">
                <div id="mobileNumberHelp" class="form-text text-danger">
                    @error('mobilenumber')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <!---2nd Row--->
    <div class="row">
        <div class="col-md-4">
            <div class="mb-3 input-group-sm">
                <label for="firstname" class="form-label fw-bold"><small>First Name</small><span
                        class="text-danger">*</span></label>
                <input type="text"
                    class="form-control @error('firstname')
                    is-invalid
                @enderror"
                    id="firstname" name="firstname" aria-describedby="firstNameHelp" value="{{ old('firstname') }}">
                <div id="firstNameHelp" class="form-text text-danger">
                    @error('firstname')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3 input-group-sm">
                <label for="lastname" class="form-label fw-bold"><small>Last Name</small></label>
                <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastNameHelp"
                    value="{{ old('lastname') }}">
                <div id="lastNameHelp" class="form-text"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3 input-group-sm">
                <label for="lastname" class="form-label fw-bold"><small>Gender<span
                            class="text-danger">*</span></small></label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="3">
                    <label class="form-check-label" for="3">I prefer not to say</label>
                </div>
                <div id="genderHelp" class="form-text text-danger">
                    @error('gender')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <!--3rd  Row-->
    <div class="row">
        <div class="col-md-4">
            <div class="mb-3 input-group-sm">
                <label for="doorno" class="form-label fw-bold"><small>Door No</small><span
                        class="text-danger">*</span></label>
                <input type="text"
                    class="form-control @error('doorno')
                    is-invalid
                @enderror"
                    id="doorno" name="doorno" aria-describedby="doornoHelp" value="{{ old('doorno') }}">
                <div id="doornoHelp" class="form-text text-danger">
                    @error('doorno')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3 input-group-sm">
                <label for="streetname" class="form-label fw-bold"><small>Street Name</small><span
                        class="text-danger">*</span></label>
                <input type="text"
                    class="form-control @error('streetname')
                    is-invalid
                @enderror"
                    id="streetname" name="streetname" aria-describedby="streetnameHelp"
                    value="{{ old('streetname') }}">
                <div id="streetnameHelp" class="form-text text-danger">
                    @error('streetname')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3 input-group-sm">
                <label for="city" class="form-label fw-bold"><small>City</small><span
                        class="text-danger">*</span></label>
                <input type="text"
                    class="form-control @error('city')
                    is-invalid
                @enderror "
                    id="city" name="city" aria-describedby="cityHelp" value="{{ old('city') }}">
                <div id="cityHelp" class="form-text text-danger">
                    @error('city')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <!--4th Row--->
    <div class="row">
        <div class="col-md-4">
            <div class="mb-3 input-group-sm">
                <label for="state" class="form-label fw-bold"><small>State</small><span
                        class="text-danger">*</span></label>
                <input type="text"
                    class="form-control @error('state')
                    is-invalid
                @enderror"
                    id="state" name="state" aria-describedby="stateHelp" value="{{ old('state') }}">
                <div id="stateHelp" class="form-text text-danger">
                    @error('state')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3 input-group-sm">
                <label for="country" class="form-label fw-bold"><small>Country</small><span
                        class="text-danger">*</span></label>
                <input type="text"
                    class="form-control @error('country')
                    is-invalid
                @enderror"
                    id="country" name="country" aria-describedby="countryHelp" value="{{ old('country') }}">
                <div id="countryHelp" class="form-text text-danger">
                    @error('country')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3 input-group-sm">
                <label for="pincode" class="form-label fw-bold"><small>Pincode</small><span
                        class="text-danger">*</span></label>
                <input type="text"
                    class="form-control @error('pincode')
                    is-invalid
                @enderror"
                    id="pincode" name="pincode" aria-describedby="pincodeHelp" value="{{ old('pincode') }}">
                <div id="pincodeHelp" class="form-text text-danger">
                    @error('pincode')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <hr>
    <h5 class="text-muted">Qualification Details</h5>
    <!---6th Row-->
    <div class="row">
        <div class="col-md-4">
            <div class="mb-3 input-group-sm">
                <label for="degree" class="form-label fw-bold"><small>Degree</small><span
                        class="text-danger">*</span></label>
                <input type="text"
                    class="form-control @error('degree')
                    is-invalid
                @enderror"
                    id="degree" name="degree" aria-describedby="degreeHelp" value="{{ old('degree') }}">
                <div id="degreeHelp" class="form-text text-danger">
                    @error('degree')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3 input-group-sm">
                <label for="branch" class="form-label fw-bold"><small>Branch</small><span
                        class="text-danger">*</span></label>
                <input type="text"
                    class="form-control @error('branch')
                    is-invalid
                @enderror"
                    id="branch" name="branch" aria-describedby="branchHelp" value="{{ old('branch') }}">
                <div id="branchHelp" class="form-text text-danger">
                    @error('branch')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3 input-group-sm">
                <label for="passedout" class="form-label fw-bold"><small>Passed Out</small></label>
                <input type="text" class="form-control" id="passedout" name="passedout"
                    value="{{ old('passedout') }}" aria-describedby="passedoutHelp">
                <div id="passedoutHelp" class="form-text"></div>
            </div>
        </div>
    </div>
    <!---7th Row---->
    <div class="row">
        <div class="col-md-4">
            <div class="mb-3 input-group-sm">
                <label for="clg_id" class="form-label fw-bold"><small>College ID Card</small><span
                        class="text-danger">*</span></label>
                <input type="file"
                    class="form-control @error('clg_id')
                    is-invalid
                @enderror"
                    id="clg_id" name="clg_id" value="{{ old('clg_id') }}">
                <div class="form-text text-danger">
                    @error('clg_id')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3 input-group-sm">
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
        <div class="col-md-4">
            <div class="mb-3 input-group-sm">
                <label for="cfrm_password" class="form-label fw-bold"><small>Confirm Password</small><span
                        class="text-danger">*</span></label>
                <input type="password"
                    class="form-control @error('cfrm_password')
                    is-invalid
                @enderror"
                    id="cfrm_password" name="cfrm_password" aria-describedby="cpwdHelp"
                    value="{{ old('cfrm_password') }}">
                <div id="cpwdHelp" class="form-text text-danger">
                    @error('cfrm_password')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<!-- 
{{-- <div class="mb-3 input-group-sm"> --}}
{{-- <label for="clg_name" class="form-label fw-bold"><small>College Name</small><span --}}
{{-- class="text-danger">*</span></label> --}}
{{-- <input type="text" class="form-control" id="clg_name" name="clg_name" aria-describedby="clgnameHelp"> --}}
{{-- <div id="clgnameHelp" class="form-text"></div> --}}
{{-- </div> --}} -->
