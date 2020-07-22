<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Application - Show Video</title>
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
        <div class="row">
            <div class="col-md-6 text-center">
                <h3>{{'Video URL- '.$video->url}}</h3>
                <h4>{{'Video Path- '.$video->file_path}}</h4>
            </div>
            <div class="col-md-6">
                {{-- <a href="{{ asset('/countries')}}" class="btn btn-primary offset-md-4"><i class="fa fa-user-plus" aria-hidden="true"></i>Show Countries</a> --}}
                <a href="{{ asset('/videos')}}" class="btn btn-success offset-md-8"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Show All Videos</a>
                {{--  <a href="{{ asset('/videos/create')}}" class="btn btn-success pull-right"><i class="fa fa-user-plus" aria-hidden="true"></i> Add New Video</a>  --}}
            </div>
        </div>
        
        <hr>

        <strong>Comments</strong>

        <ul>
            @foreach ($video->comments as $comment)
                <li>{{ $comment->comment_body }}</li>
            @endforeach
        </ul>

        <hr>

        <form action="/videos/{{ $video->id }}/comments" method="POST">

        @csrf

            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="form-group">
                        <label for="comment_body">Reply</label>
                        <textarea id="comment_body" name="comment_body" class="form-control" rows="5" required></textarea>
                    </div>       

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                        <a href="{{ asset('/videos/'.$video->id)}}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>