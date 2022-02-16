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
      <input type="text" class="form-control"  name="title" >
    </div>
    <div class="mb-3">
      <label for="description">Description:</label>
      <input type="text" class="form-control"  name="description" >
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
</div>

</body>
</html>
