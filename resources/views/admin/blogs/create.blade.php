<x-admin-layout>
    <h1 class="my-3 text-center">Blog Create Form</h1>
    
    <x-card-wrapper>
        <form enctype="multipart/form-data" action="/blogs/admin/store" method="POST">
            @csrf
            <x-form.input name="title"></x-form.input>
            <x-form.input name="slug"></x-form.input>
            <x-form.input name="intro"></x-form.input>
            <x-form.textarea name="body"></x-form.textarea>
            <x-form.input name="thumbnail" type="file"></x-form.input>
            <x-form.input-wrapper>
                <x-form.label name="category"/>
                <select name="category_id" id="category" class="form-control">
                   @foreach($categories as $category)
                        <option {{$category->id==old('category_id') ? 'selected' : ""}} value="{{$category->id}}">{{$category->name}}</option>
                   @endforeach
                </select>
                <x-error name="category_id"></x-errror>
            </x-form.input-wrapper>

            <div class="d-flex justify-content-start mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </x-card-wrapper>
   
</x-admin-layout>