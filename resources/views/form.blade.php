<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
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
   
    <div class="container mt-5 col-6 md-5">
        <div class="card p-5">
            <div class="card-body">
                <form onsubmit="return false" method="POST" id="my-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="hidden_id" id="hidden_id">
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name"
                            placeholder="Enter name">
                    </div>

                    <div class="mb-3">
                        <label for="course">Course</label>
                        <input type="text" class="form-control" name="course" id="course"
                            placeholder="Enter course">
                    </div>

                    <div class="mb-3">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image" id="image"
                            placeholder="Enter Image">
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary mt-3" id="submit"
                            value="Add Student">Submit</button>
                    </div>
                </form>
            </div>
            <span id="output"></span>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#my-form").submit(function(e) {
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: "{{ route('student.index') }}",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                success: function(data) {
                    console.log(data.id);
                    $('#output').text(data.res)
                    $('#my-form')[0].reset();
                },

                error: function(e) {
                    $('#output').text(data.res);
                    $('#submit').prop("disabled", false);
                    console.log("error", e);
                }
            })
        })
    })
</script>

</html>
