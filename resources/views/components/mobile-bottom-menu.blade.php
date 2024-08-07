<div class="mobile_bottom_menu">

    <a href="{{ route('bascet') }}" class="bm_btn">
        <div class="menue_icon">
            <svg class="sprite_icon">
                <use xlink:href="#cart_menue_icon"></use>
            </svg>
            <span id="counter_app2" class="bascet_counter"><cart-counter></cart-counter></span>
        </div>
        <p>Корзина</p>
    </a>

    <a href="https://wa.me/79107310799" class="bm_btn">
        <div class="menue_icon">
            <svg class="sprite_icon">
                <use xlink:href="#ws_icon"></use>
            </svg>
        </div>
        <p>WhatsApp</p>
    </a>

    <a href="tg://resolve?domain=KurskAlfa" class="bm_btn">
        <div class="menue_icon">
            <svg class="sprite_icon">
                <use xlink:href="#tg_icon"></use>
            </svg>
        </div>
        <p>Telegram</p>
    </a>

    <a href="#" onclick="window.scrollTo({ top: 0, behavior: 'smooth' }); return false;" class="bm_btn">
        <div class="menue_icon">
            <svg class="sprite_icon revers">
                <use xlink:href="#arrow_down"></use>
            </svg>
        </div>
        <p>Наверх</p>
    </a>

    <a href="#" class="bm_btn show_mob_menu">
        <div class="menue_icon icon_close_menu">
            <svg class="sprite_icon menu_open">
                <use xlink:href="#mob_menue"></use>
            </svg>

            <svg class="sprite_icon menu_close">
                <use xlink:href="#close_menu_icon"></use>
            </svg>
        </div>
        <p>Меню</p>
    </a>

</div>
