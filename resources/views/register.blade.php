<!DOCTYPE html>
<html lang="en">

@include('includes.header')
@include('includes.navbar')

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <h5 class="card-header bg-dark text-white">Registration Form</h5>
                    <div class="card-body">
                        @include('includes.registration')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('includes.footer')

</html>
