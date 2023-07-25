<div class="w-full">
    <input
        class="border-sgray border rounded-md px-3 py-2 w-full outline-none mb-4 "
        name="{{isset($name)?$name:"field"}}"
        type="{{isset($type)?$type:"text"}}"
        placeholder="{{isset($placeholder)?$placeholder:""}}"
        value="{{isset($value)?$value:""}}">
</div>

@isset($name)
    @error($name)
    <p class="bg-red-400 px-3 py-1 text-white rounded-md mb-4 text-xs">{{$message}}</p>
    @enderror
@endisset

