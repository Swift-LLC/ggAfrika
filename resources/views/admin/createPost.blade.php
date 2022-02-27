<html>

<head>
  <title> Creating Blog </title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
 

  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;700&family=Varela+Round&display=swap" rel="stylesheet">

</head>

<body>
  <style>
    .card {
      /* Add shadows to create the "card" effect */
      margin: 20px;
      padding: 8px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
    }

    /* On mouse-over, add a deeper shadow */
    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    /* Add some padding inside the card container */
    .container {
      padding: 2px 16px;
      font-weight:200;
    }
    label{
       font-weight:700;
    }
  </style>




  <div class="container">
    <div class="">
      <a href="{{route('admin')}}" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="{!! trans('tooltips.post.create') !!}">
        <i class="fas fa-arrow-left" aria-hidden="true"></i>
        <span class="hidden-xs">
          Back To DashBoard
        </span>
      </a>
      
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1>Create post</h1>
          <div class="card-body">
            <form action="{{route('store')}}" method="POST" enctype='multipart/form-data'>
              @csrf
              @if($errors->any())
                        <h4 class="invalid-feedback text-center alert alert-danger" role="alert">{{$errors->first()}}</h4>
                @endif
              <div class="form-group has-error">
                <label for="slug">Slug <span class="require">*</span> <small>(This field use in url path.)</small></label>
                <input type="text" class="form-control" name="slug" required />
                <span class="help-block">Field not entered!</span>
              </div>
              <div class="form-group">
                <label for="title">Title <span class="require">*</span></label>
                <input type="text" class="form-control" name="title" required />
              </div>
              <div class="form-group">
                <label for="category">Choose Category</label>
                <select class="form-control" id="category" name="category">
                  @foreach ($categories as $category)
                  <option value="{{ $category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="image" class="form-label">Post Image </label>
                <input class="form-control form-control-lg" id="image" name="image" type="file">
               
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea rows="5" class="form-control" name="description" required></textarea>
              </div>
              <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" required></textarea>
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
  <script>
   $(document).ready(function() {
        $('#content').summernote({
          height:260,
        });
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</body>

</html>