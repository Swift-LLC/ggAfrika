<html>
<head>
  <title> Admin - ggAfrika Creating Blog </title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Font Awesome Icons -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
   <link
	rel="stylesheet"
	href="//cdnjs.cloudflare.com/ajax/libs/jodit/3.18.9/jodit.min.css"
/>
<script src="//cdnjs.cloudflare.com/ajax/libs/jodit/3.18.9/jodit.min.js"></script>
</head>
<style>
  body {
    font-family: 'Varela Round', sans-serif;
  }
  .btn-primary {
    background-color: #ffc107;
    border-color: #ffc107;
  }
  .btn-primary:hover {
    background-color: #ffc107;
    border-color: #ffc107;
  }
</style>

<body>
  <div class="bg-white">
    <div class="container">
      <div class="">
        <a href="{{route('admin')}}" class="btn btn-success" data-toggle="tooltip" data-placement="left">
          <i class="bi bi-arrow-left" aria-hidden="true"></i>
          <span class="hidden-xs">
            Back
          </span>
        </a>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h4 class="text-center"> Create post </h4>
            <div class="card-body">
              <form action="{{route('store')}}" method="POST" enctype='multipart/form-data'>
                @csrf
                @method('POST')
                
                <div class="form-group">
                  <label for="title" class="form-label">Blog Title <span class="require">*</span></label>
                  <input type="text" class="form-control" name="title" />
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                </div>

                <div class="form-group">
                  <label for="category" class="form-label">Choose Blog Category</label>
                  <select class="form-control" id="category" name="category">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                   @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                </div>

                <div class="form-group">
                  <label for="image" class="form-label">blog Post Image </label>
                  <input class="form-control form-control-file" value="" id="image" name="image" type="file">
                   @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                </div>

                <div class="form-group">
                  <label for="description" class="form-label">Blog Description</label>
                  <textarea  rows="5" class="form-control" name="description"></textarea>
                   @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                </div>

                <div class="form-group">
                  <label for="content" class="form-label">Blog Content</label>
                  <textarea  name="content" id="edito"></textarea>
                   @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                </div>

                <div class="form-group">
                  <p><span class="require">*</span> - required fields</p>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary">
                    Create
                  </button>
                  <button class="btn btn-default">
                    Cancel
                  </button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
	const editor = Jodit.make('#editor', {
    height: 370
  });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>