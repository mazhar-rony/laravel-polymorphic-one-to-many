<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Application - Create Video</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="/videos" class="navbar-brand">CRUD APPLICATION</a>
        </div>
    </div>
    
    <div class="container" style="padding-top: 10px;">
        <h3>Create Video</h3>
        <hr>
        <form action="/videos" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-group">
                    <label for="url">Video URL</label>
                    <input type="text" id="url" name="url" value="" placeholder="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="file_path">Video Path</label>
                    <input type="text" id="file_path" name="file_path" value="" placeholder="" class="form-control" required>
                </div>            

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create Video</button>
                    <a href="{{ asset('/videos')}}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
        </form>
    </div>
</body>
</html>