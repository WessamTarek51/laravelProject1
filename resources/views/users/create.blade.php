<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">

  <form action="/users" method="post">
      @csrf
    <div class="mb-3">
      <label for="name">Name</label>
      <input type="text" class="form-control"  name="name" >
    </div>
    <div class="mb-3">
      <label for="email">Email:</label>
      <input type="text" class="form-control"  name="email" >
    </div>
    <div class="mb-3">
      <label for="password">Password</label>
      <input type="text" class="form-control"  name="password">
    </div>


    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>

</body>
</html>
