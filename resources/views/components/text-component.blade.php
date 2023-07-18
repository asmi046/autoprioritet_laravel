<div class="w-full">
    <input
        class="border-sgray border rounded-md px-3 py-2 w-full outline-none mb-4 "
        name="{{isset($name)?$type:"field"}}"
        type="{{isset($type)?$type:"text"}}"
        placeholder="{{isset($placeholder)?$placeholder:""}}"
        value="{{isset($value)?$value:""}}">
</div>
