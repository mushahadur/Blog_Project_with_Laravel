@extends('website.Layout.app')

@section('content')

    <div class="container-fluid">
        <div id="content" class="mx-auto tm-content-container">
            <main>
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-page-title mb-4">Our Image Catalog</h2>
                        <div class="tm-categories-container mb-5">
                            <h3 class="tm-text-primary tm-categories-text">Categories:</h3>
                            <ul class="nav tm-category-list">
                                <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link active">All</a></li>
                                <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Drone Shots</a></li>
                                <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Nature</a></li>
                                <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Actions</a></li>
                                <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Featured</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="row tm-catalog-item-list">
                    @foreach ($image as $image)
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="{{ asset('/')}}{{$image->image}}" alt="" class="img-fluid tm-catalog-item-img">
                                <a href="video-page.html" class="position-absolute ">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">{{$image->name}}</h3>


                                @foreach ($image->comments as $comment)
                                        <p> Comment : {{$comment->comment}}</p>
                                    @endforeach
                                    <form  action="{{route('addImageComment',$image->id)}}" method="POST" class="tm-subscribe-form">
                                        @csrf
                                        <input type="text" name="comment" placeholder="Your Comment..." required>
                                        <button type="submit" class="btn rounded-0 btn-primary tm-btn-small">Comment</button>
                                    </form>
                            </div>
                        </div>
                    @endforeach
                </div>


                <!-- Catalog Paging Buttons -->
                <div>
                    <ul class="nav tm-paging-links">
                        <li class="nav-item active"><a href="#" class="nav-link tm-paging-link">1</a></li>
                        <li class="nav-item"><a href="#" class="nav-link tm-paging-link">2</a></li>
                        <li class="nav-item"><a href="#" class="nav-link tm-paging-link">3</a></li>
                        <li class="nav-item"><a href="#" class="nav-link tm-paging-link">4</a></li>
                        <li class="nav-item"><a href="#" class="nav-link tm-paging-link">></a></li>
                    </ul>
                </div>
            </main>

        </div> <!-- tm-content-container -->
    </div>
@endsection
