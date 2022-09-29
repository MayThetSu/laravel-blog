@props(['blogs'])
<section class="container text-center" id="blogs">
      <h1 class="display-5 fw-bold mb-4">Blogs</h1>
      <div class="">
      <x-category-dropdown></x-category-dropdown>
        <!-- <select name="" id="" class="p-1 rounded-pill mx-3">
          <option value="">Filter by Tag</option>
        </select> -->
      </div>
      <form action="/" class="my-3">
        <div class="input-group mb-3">
          @if(request('category'))
          <input
            type="hidden"
            name="category"
            value="{{request('category')}}"
          />
          @endif
          @if(request('username'))
          <input
            type="hidden"
            name="username"
            value="{{request('username')}}"
          />
          @endif
          <input
            type="text"
            name="search"
            value="{{request('search')}}"
            autocomplete="false"
            class="form-control"
            placeholder="Search Blogs..."
          />
          <button
            class="input-group-text bg-primary text-light"
            id="basic-addon2"
            type="submit"
          >
            Search
          </button>
        </div>
      </form>
      <div class="row">
        @forelse($blogs as $blog)
          <div class="col-md-4 mb-4">
            <x-blog-card :blog="$blog"></x-blog-card>
          </div>
        @empty
          <p class="text-center">No blogs found</p>
        @endforelse
       
      </div>
      {{$blogs->links()}}
</section>