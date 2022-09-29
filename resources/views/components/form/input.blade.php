@props(['name','type'=>'text','value'=>''])
<x-form.input-wrapper>
    <x-form.label :name="$name"/> 
    <input name="{{$name}}" type="{{$type}}" class="form-control" 
    id="{{$name}}" aria-describedby="emailHelp" value="{{old($name,$value)}}">
    
    <x-error :name="$name"></x-errror>
</x-form.input-wrapper>
