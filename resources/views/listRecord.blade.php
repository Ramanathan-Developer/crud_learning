<!DOCTYPE html>
<html lang="en">

@include('includes.header')
@include('includes.navbar')

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <h5 class="card-header bg-dark text-white">List Records</h5>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">S.No</th>
                                    <th scope="col">UserName</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Degree</th>
                                    <th scope="col">Branch</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $rec)
                                    @if ($rec->gender == 1)
                                        <?php $gender = 'Male'; ?>
                                    @elseif($rec->gender == 2)
                                        <?php $gender = 'Female'; ?>
                                    @else
                                        <?php $gender = 'Not Mentioned'; ?>
                                    @endif
                                    <tr>
                                        <td>{{ $rec->id }}</td>
                                        <td>{{ $rec->username }}</td>
                                        <td>{{ $rec->firstname . ' ' . $rec->lastname }}</td>
                                        <td>{{ $rec->email }}</td>
                                        <td>{{ $gender }}</td>
                                        <td>{{ $rec->degree }}</td>
                                        <td>{{ $rec->branch }}</td>
                                        <td>{{ $rec->mobile }}</td>
                                        <td>
                                            <a href="/form/{{ $rec->id }}/edit"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/form/{{$rec->id}}" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('includes.footer')

</html>
