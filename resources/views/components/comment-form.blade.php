@props(['blog'])
<section class="container">
      <div class="col-md-8 mx-auto">
      @auth
        <x-card-wrapper class="">
        
          <form action="/blogs/{{$blog->slug}}/comments" method="POST">
            @csrf
          <div class="mb-3">
           <textarea name="body" 
           required
           class="form-control border border-0"
           id="" cols="10" rows="5" placeholder="say something..."></textarea>
           <x-error name="body"></x-errror>
          </div>
         
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      
      </x-card-wrapper>
      @else
      <p class="text-center">please <a href="/login">login</a> to participate this discussion</p>
      @endauth
      </div>
</section>