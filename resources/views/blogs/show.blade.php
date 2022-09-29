<x-layout>
<!-- singloe blog section -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center">
          <img
          src='{{asset("storage/$blog->thumbnail")}}'
            class="card-img-top"
            alt="..."
          />
          <h3 class="my-3">{{$blog->title}}</h3>
          <div>
            <div>Author - <a href="/users/{{$blog->author->username}}">{{ $blog->author->name }}</a></div>
            <div><a href="/categories/{{$blog->category->slug}}"><span class="badge bg-primary">{{ $blog->category->name }}</span></a></div>
            <div class="text-secondary">{{ $blog->created_at->diffForHumans()}}</div>
            <div class="text-secondary">
              <form action="/blogs/{{$blog->slug}}/subscriptions" method="POST">
                @csrf
                @auth
                @if(auth()->user()->isSubscribedBlogs($blog))
                  <button class="btn btn-danger mt-2">unsubscribe</button>
                @else
                  <button class="btn btn-warning mt-2">subscribe</button>
                @endif
                @endauth
              </form>
            </div> 
          </div>
          <p class="lh-md mt-3">
           {!!$blog->body!!}
          </p>
        </div>
      </div>
    </div>
    <x-comment-form :blog="$blog"></x-comment-form>
    @if($blog->comments->count());
    <x-comments :comments="$blog->comments()->latest()->paginate(3)"></x-comments>
    @endif
   
    <x-blogs_you_may_like_sections :randomBlogs="$randomBlogs"></x-blogs_you_may_like_sections>
</x-layout>