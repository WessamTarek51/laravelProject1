<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<a href="posts/create">add  Post</a>
<table class="table">
    <thead>
      <tr>
        <th>User name</th>
        <th>User email</th>
        <th>User id</th>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Created_at</th>
        <th>Updated_at</th>


      </tr>
    </thead>
    <tbody>
       @foreach ($posts as $post)
      <tr>
        <!--   {{$post->id}} used it when get data from database -->
        <!--    {{$post['description']}} used it when get data from conrol static data -->
        <td>{{$post->user->name}}</td>
        <td>{{$post->user->email}}</td>
        <td>{{$post->user->id}}</td>
        <td>{{$post->id}}</td>
        <td>{{$post['title']}}</td>
        <td>{{$post['description']}}</td>
        <td>{{$post['created_at']}}</td>
        <td>{{$post['updated_at']}}</td>

         <!-- used route when the route is long should name in file controller -->
        <td><a href="/posts/{{$post->id}}">Show</a></td>

        <td><a href="/posts/{{$post->id}}/edit">Edit</a></td>
        <td>
        <form  action="/posts/{{$post->id}}" method="POST">
        @csrf
      @method("DELETE")
        <input type="submit" value="delete" name="delete">
        </form>
</td>


      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>



