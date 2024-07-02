<x-product-table.details-express
:isopen="true"
heder="Экспресс-доставка"
:didgest="$express['didgest']"
>

<table class="tovar_table">
    <thead>
        <tr>
            <th>Наименование</th>
            <th>Артикул</th>
            <th>Бренд</th>
            <th>Срок</th>
            <th>Наличие</th>
            <th>
                Цена

                <a href="{{ Request::url()."?orderby=price&order=".((empty(request('order')) || request('order') === 'asc')?'desc':'asc') }}">
                    <svg
                    @class([
                        'sprite_icon',
                        'sort_icon',
                        'desc' => request('order') == 'desc'
                        ])>
                        <use xlink:href="#arrow_down"></use>
                    </svg>
                </a>
            </th>
            <th>Корзина</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($express['tovars'] as $item)
            <tr>
                <td>
                    <div class="m_title">Наименование</div>
                    <div class="name_td">
                        <x-product-table.foto-icon :item="$item"></x-product-table.foto-icon>
                        <span>{{$item['caption']}}</span>
                    </div>
                </td>

                <td>
                    <div class="m_title">Артикул</div>
                    <div class="content">
                        {{ $item['code'] }}
                    </div>
                </td>

                <td>
                    <div class="m_title">Бренд</div>
                    <div class="content">
                        {{ $item['producer'] }}
                    </div>
                </td>

                <td title="Приблизительный срок поставки {{$item['deliverydays']}} дней">
                    <div class="m_title">Срок</div>
                    <div class="content">
                        {{$item['deliverydays']}}
                    </div>
                </td>

                <td>
                    <div class="m_title">Наличие</div>
                    <div class="content">
                        {{$item['rest']}}
                    </div>
                </td>

                <td>
                    <div class="m_title">Цена</div>
                    <div class="content">
                        {{$item['price']}}
                    </div>
                </td>

                <td>
                    <div class="m_title">Корзина</div>
                    <div class="content">
                        <page-to-cart sku="{{ generate_sku($item) }}" :price="{{ $item['price'] }}" :product="{{json_encode($item)}}"></page-to-cart>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</x-product-table.details-express>
