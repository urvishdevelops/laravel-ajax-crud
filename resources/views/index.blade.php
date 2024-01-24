{{-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content={{ csrf_token() }}>
    <title>LaraCRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link text-light" href="#">Products</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2>Student Table</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sr.no</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody> --}}

                {{-- @foreach ($student as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->course }}</td>
                        <td><img src="studentImg/{{ $value->image }}" alt="" class="rounded-circle"
                                width="50" height="50"></td>
                        <td><a href="javascript:void(0)" class="btn btn-dark btn-sm" data-id="{{ $value->id }}"
                                id="edit">Edit</a> |
                            <a href="javascript:void(0)" class="btn btn-dark btn-sm" data-id="{{ $value->id }}"
                                id="delete">Delete</a>
                        </td>
                    </tr>
                @endforeach --}}

                {{-- <a class="btn btn-dark mb-2" id="addData">Add Data</a>
            </tbody>
        </table>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Student
                        <h4>
                            <a href="{{ url('student/create')}}" class="btn btn-primary float-end">Add Data</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}


{{-- <script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'x-csrf-token': $('meta[name="csrf-token"]').attr('content')
            }
        });

        
        function showStudent(){
            $.get("{{URL::to('show')}}", function(data){
                console.log("data");
            })
        }
        
        showStudent()

    //     $(document).on('click', '#submit', function() {
    //         var formData = new FormData($("#formData")[0]);
    //         $.ajax({
    //             url: "<?php echo url('student/store'); ?>",
    //             // url: {{ url('student/store') }},
    //             type: 'POST',
    //             data: formData,
    //         }).done(function(res) {
    //             let row = '<tr id="row_todo"' + res.id + '">';
    //             row += '<td>' + res.id + '</td>">';
    //             row += '<td>' + res.name + '</td>">';
    //             row += '<td>' + res.course + '</td>">';
    //             row += '<td>' + '<button type="button" id="edit_studData" data-id=" ' + res.id +
    //                 '" class="btn btn-info btn-sm">Edit</button>' +
    //                 '<button type="button" id="edit_studData" data-id=" ' + res.id +
    //                 '" class="btn btn-danger btn-sm">Delete</button>' + '</td>">';

    //                 // if($('#id').val())

    //                 console.log(row);
    //         })
    //     })
    })


</script> --}}

{{-- </html> --}}
