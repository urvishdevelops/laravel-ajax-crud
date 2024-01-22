<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>LaraCRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 col-6">
        <div class="card p-5">
            <form action="{{url('student/store')}}" method="POST" id="form" enctype="multipart/form-data">

                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name">

                    <label for="course">Course</label>
                    <input type="text" class="form-control" id="course" placeholder="Enter course">

                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" placeholder="Enter Image">

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function(e) {
            e.preventDefault();
            $('#form').on('submit', function(event) {
                url: {{url('student/store')}};
                data: jquery('#form').serialize(),
                type: POST,
                success: function(result) {
                    console.log(result);
                }
            })
        })
    </script>
</body>

</html>
