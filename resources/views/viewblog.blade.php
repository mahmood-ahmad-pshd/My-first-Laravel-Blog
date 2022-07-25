@extends('includings/layout')

@section('navbar')
<div>
    <div class="text-center w-50 m-auto">
        <img src="{{ asset('assets/images/logo.png') }}" class="w-25" alt="">
    </div>
    <div class="">
        <nav class="navbar navbar-expand-lg navbar-light text-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse border-top" id="navbarNav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">View Blogs</a>
                    </li>
                    <li class="nav-item">
                        <!-- Button trigger modal -->
                        <a type="button" class="btn" data-toggle="modal" data-target="#addNewBlogButton">
                            Add new
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="addNewBlogButton" tabindex="-1" role="dialog"
                            aria-labelledby="addNewBlogButtonLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addNewBlogButtonLabel">Add New Blog</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" class="text-left" action="{{ route('addblog') }}">
                                            @csrf
                                            <div class="form-group">
                                                <div class="form-group col-md-12">
                                                    <label for="blogTitle">Add Title</label>
                                                    <input type="text" class="form-control" id="blogTitle"
                                                        name="title">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="blogCaption">Add Caption</label>
                                                <textarea class="form-control" id="blogCaption" rows="2"
                                                    name="caption"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="blogDescription">Add Description</label>
                                                <textarea class="form-control" id="blogDescription" rows="3"
                                                    name="description"></textarea>
                                            </div>

                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="Upload image"
                                                    name="image">
                                                <label class="custom-file-label" for="Upload image">Choose
                                                    image...</label>
                                                <div class="invalid-feedback">Example invalid custom file feedback
                                                </div>
                                            </div>
                                            <div class="py-3">
                                                <button type="submit" class="btn btn-primary">Add Blog</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Edit Blog</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
@endsection


@section('blogItems')
        <!-- Blog items -->
        <div class="container">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
        </div>
@endsection



@section('footer')
<footer class="footer">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>
@endsection



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
