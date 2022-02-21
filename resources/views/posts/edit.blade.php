@extends('myLayout.app')
@section('content')

<div class="container mt-3">

  <form action="/posts/{{$id}}" method="POST">
      @csrf
      @method("PATCH")

      <div class="mb-3">
      <label for="id">ID:</label>
      <input type="text" class="form-control"  name="id" value={{$id}}>
      @error('id')
      @if($errors->any())
 <div class="alert alert-danger">{{ $message }}</div> @endif
   @enderror
    </div>
    <div class="mb-3 mt-3">
      <label for="title">Title:</label>
      <input type="text" class="form-control" name="title" value={{$title}}>
      @error('title')
      @if($errors->any())
 <div class="alert alert-danger">{{ $message }}</div> @endif
   @enderror
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

@endsection

