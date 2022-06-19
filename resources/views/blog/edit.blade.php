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
    <div class="container">
        <a href="{{route('posts')}}" class="btn btn-success" data-toggle="tooltip" data-placement="left" >
          <i class="bi bi-arrow-left" aria-hidden="true"></i>
          Back
        </a>
    
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h4 class="text-center"> update a blog post for readers. </h4>
            <div class="card-body">
              <form action="{{route('update',$post->id)}}" method="POST" enctype='multipart/form-data'>
                @csrf
                @method('PUT')
                
                <div class="form-group">
                  <label for="title" class="form-label">Blog Title <span class="require">*</span></label>
                  <input type="text" value="{{$post->title}}" class="form-control" name="title" />
                </div>

                <div class="form-group">
                  <label for="category"  class="form-label">Choose Category</label>
                  <select class="form-control" id="category" name="category">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="image" class="form-label"  class="form-label">blog Image </label>
                  <input class="form-control form-control-file" value="{{ $post->potrait }}" id="image" name="image" type="file">
                </div>

                <div class="form-group">
                  <label for="description"  class="form-label">Blog Description</label>
                  <textarea value="" rows="5" class="form-control" name="description">{{$post->about}}</textarea>
                </div>

                <div class="form-group">
                  <label for="content"  class="form-label">Content</label>
                  <textarea value="{{$post->body}}" name="content" id="editor">{{$post->body}}</textarea>
                </div>

                <div class="form-group">
                  <p><span class="require">*</span> - required fields</p>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">
                    Update
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
    height: 400
  });
  editor.value = '';
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>