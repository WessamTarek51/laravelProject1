<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">

  <form action="/posts/{{$id}}" method="POST">
      @csrf
      @method("PATCH")
    <div class="mb-3 mt-3">
      <label for="title">Title:</label>
      <input type="text" class="form-control" name="title" value={{$title}}>
    </div>
    <div class="mb-3">
      <label for="description">Description:</label>
      <input type="text" class="form-control"  name="description" value={{$description}}>
    </div>
    <div class="mb-3">
      <label for="created_at">created_at:</label>
      <input type="text" class="form-control"  name="created_at" value={{$created_at}}>
    </div>
    <div class="mb-3">
      <label for="updated_at">updated_at:</label>
      <input type="text" class="form-control"  name="updated_at" value={{$updated_at}}>
    </div>
   
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

</body>
</html>
