<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
            crossorigin="anonymous"
        />
        <title>All Posts</title>
    </head>

    <body>
        <div class="container mt-5">
        <div class="text-center">
            <form action="{{ route('Post.index')}}" method="get">
                <button type="submit" class="btn btn-success">
                    All Posts
                </button>
            </form>
        </div>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($authors as $author)
                    <tr>
                        <th>{{$author->id}}</th>
                        <td>{{$author->name}}</td>
                        <td>{{$author->email}}</td>
                        <td>{{$author->created_at}}</td>
                        <td>
                            <a
                                href="{{ route('Post.show',$author->id) }}"
                                class="btn btn-primary me-1"
                            >
                                View Posts
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
