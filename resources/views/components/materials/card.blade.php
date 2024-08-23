<div class="material_card">
    <div class="img_wrapper">
        <img class="img-obj" src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}">
    </div>
    <div class="info_blk">
        <h2 class="mt_0">{{ $item->title }}</h2>
        <p class="mb_20">{{ mb_strimwidth(strip_tags($item->description), 0, 280, '...') }}</p>
        <x-a-icon :href=" route('blog_page', $item->slug)" icon="pi ap_info">Читать далее</x-a-icon>
    </div>
</div>
