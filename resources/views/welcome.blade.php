@extends('layout')
@section('title','view Blogs')

@section('mainBody')
        <!-- Blog items -->
        <div class="container">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
            <div class="row m-auto justify-content-center">
                @foreach($allBlogs as $blog)
                <div class="p-2">
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('assets/images/news reading.jpg') }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $blog->title }}</h5>
                                <p class="card-text">{{ $blog->description }}</p>
                                <a href="#" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
@endsection

@section('footer')
<footer class="footer">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>
@endsection