<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <title>LaraCRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
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

</html>
