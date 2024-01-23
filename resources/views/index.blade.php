<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <tbody>

                @foreach ($student as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->course }}</td>
                        <td><img src="studentImg/{{ $value->image }}" alt="" class="rounded-circle"
                                width="50" height="50"></td>
                        <td><a href="javascript:void(0)" class="btn btn-dark btn-sm"
                                data-id="{{ $value->id }}" id="edit">Edit</a> |
                            <a href="javascript:void(0)" class="btn btn-dark btn-sm"
                                data-id="{{ $value->id }}" id="delete">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <a href="student/create" class="btn btn-dark mt-2" id="addData">Add Data</a>



    <div class="container mt-5 col-6">
        <div class="card p-5">
            <form onsubmit="return false" method="POST" id="formData" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="hidden_id" id="hidden_id">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">

                    <label for="course">Course</label>
                    <input type="text" class="form-control" name="course" id="course" placeholder="Enter course">

                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" id="image" placeholder="Enter Image">

                    <button type="submit" class="btn btn-primary mt-3" id="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<script>
    $('#addData').on('click', function() {
        $('#formData').trigger('reset');
    })

    $('body').on('click', '#edit', function() {
        let id = $(this).data('id');
        $.get('student/'+ id + '/edit', function(res){
          // $('#id').al(res.id)
          console.log("res", res);
        })
    })


    $(document).ready(function() {

        $(document).on('click', '#submit', function() {
            var formData = new FormData($("#formData")[0]);
            $.ajax({
                url: "<?php echo url('student/store'); ?>",
                // url: {{ url('student/store') }},
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function(response) {
                    console.log(response);

                    var data = JSON.parse(response);
                    console.log(data);
                }
            });
        })
    })
</script>

</html>
