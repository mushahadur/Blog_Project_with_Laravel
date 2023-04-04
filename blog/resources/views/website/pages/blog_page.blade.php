@extends('website.Layout.app')

@section('content')

<main>
    <div class="container-fluid px-0">
        <div class="mx-auto tm-content-container">

            <!-- Subscribe form and footer links -->
            <div class="row mt-5 pt-3">
                @foreach ($post as $post)
                    <div class="col-xl-6 col-lg-12 mb-4">
                        <div class="tm-bg-gray p-5 h-100">
                            <h3 class="tm-text-primary mb-3">{{$post->title}}</h3>
                            <p class="mb-5">{{$post->body}}</p>

                            <div class="pt-3">
                                @foreach ($post->comments as $comment)
                                    <p> Comment : {{$comment->comment}}</p>
                                @endforeach
                            </div>

                            <form  action="{{route('addblogComment',$post->id)}}" method="POST" class="tm-subscribe-form">
                                @csrf
                                <input type="text" name="comment" placeholder="Your Comment..." required>
                                <button type="submit" class="btn rounded-0 btn-primary tm-btn-small">Comment</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div> <!-- row -->


        </div>



        <div class="parallax-window" data-parallax="scroll" data-image-src="img/about-3.jpg"></div>
    </div>
</main>

@endsection
