<x-layout>
    @if(session('success'))
        <div class="alert alert-success text-center">{{session('success')}}</div>
    @endif
    <x-hero></x-hero>
    <x-blog-section :blogs="$blogs"></x-blog-section>
</x-layout>

  