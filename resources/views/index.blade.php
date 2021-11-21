<!DOCTYPE html>
<html lang="en">

@include('includes.header')
@include('includes.navbar')

<body>
    <div class="container">
        <div class="row" style="margin:10% 0">
            <div class="col-lg-4 col-md-4"></div>
            <div class="col-lg-4 col-md-4">
                <div class="card">
                    <h5 class="card-header bg-dark text-white">Login</h5>
                    <div class="card-body">
                        @include('includes.login')
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4"></div>
        </div>
    </div>
</body>
@include('includes.footer')

</html>
