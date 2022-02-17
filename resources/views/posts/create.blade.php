<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">




  <form action="/posts" method="post">
      @csrf
    <div class="mb-3">
      <label for="title">Title</label>
      <input type="text" class="form-control" value="{{old('title')}}"  name="title" >
      @error('title')
      @if($errors->any())
 <div class="alert alert-danger">{{ $message }}</div> @endif
   @enderror

    </div>
    <div class="mb-3">
      <label for="description">Description:</label>
      <input type="text" class="form-control" value="{{old('description')}}"  name="description" >
      @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
   @enderror
    </div>
    <div class="mb-3">
      <label for="created_at">Created At:</label>
      <input type="text" class="form-control"  name="created_at">
    </div>
    <div class="mb-3">
      <label for="updated_at">Updated At:</label>
      <input type="text" class="form-control"  name="updated_at">
    </div>

    <button type="submit" class="btn btn-primary">Add</button>
  </form>
 



  <!-- @if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
</div>
@endif -->
</div>

</body>
</html>
