<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Application - Comment List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">CRUD APPLICATION</a>
            {{--  <a href="{{ asset('/countries')}}" class="btn btn-primary"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Show Countries</a>  --}}
        </div>
    </div>
    
    <div class="container" style="padding-top: 10px;">
        
        <div class="row">
            <div class="col-md-6"><h3>Comment List</h3></div>
            <div class="col-md-6">
                {{-- <a href="{{ asset('/countries')}}" class="btn btn-primary offset-md-4"><i class="fa fa-user-plus" aria-hidden="true"></i>Show Countries</a> --}}
                <a href="{{ asset('/videos')}}" class="btn btn-primary offset-md-5"><i class="fa fa-video-camera" aria-hidden="true"></i> Show All Videos</a>
                <a href="{{ asset('/posts')}}" class="btn btn-success pull-right"><i class="fa fa-pencil" aria-hidden="true"></i> Show All Post</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>Comment</th>
                        <th>Type (Post / Video)</th>
                        <th>Id (Post / Video)</th>
                        <th>Created On</th>
                        <th>Updated On</th>
                        <th colspan="3" style="text-align: center">Action</th>
                    </tr>
                     
                    @forelse ($comments as $comment)
                        <tr>
                            <td>{{ $comment->id }}</td>
                            <td>{{ $comment->comment_body }}</td>
                            <td>{{ $comment->commentable_type }}</td>
                            <td>{{ $comment->commentable_id }}</td>
                            <td>{{ $comment->created_at->format('d-m-Y') }}</td>
                            <td>{{ $comment->updated_at->diffForHumans() }}</td>
                            
                            <td><a href="{{url('/comments/'.$comment->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> Show</a></td>
                            {{--  <td><a href="/comments/{{$comment->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a></td>  --}}
                            <td><a href="{{url('/comments/'.$comment->id.'/edit')}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a></td>
                            <td>
                                <form action="/comments/{{$comment->id}}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button> 
                            </td>        
                                </form>        
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">Record not found.</td>
                        </tr
                    @endforelse
                                       
                </table>
            </div>
        </div>
        
    </div>

</body>
</html>