    <a
        onclick="window.open(this.href, '', 'width=900,height=400,resizable=no,scrollbars=no,status=yes');	return false;"
        title="Посмотреть фото детали {{ $item['caption']." ".$item['producer'] }}"
        href="https://www.google.ru/search?q={{ $item['caption']."+".$item['producer'] }}&amp;tbm=isch"
        class="photo_lnk"
    >

        <svg class="sprite_icon">
            <use xlink:href="#photo_icon"></use>
        </svg>

    </a>
