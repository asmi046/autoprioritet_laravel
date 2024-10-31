<table class="tovar_table">
    <thead>
        <tr>
            <th>Наименование</th>
            <th>Срок</th>
            <th>Склад</th>
            <th>Наличие</th>
            <th>Цена

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
        @foreach ($brand as $item)
        <tr @class(['is_express' => (strpos(get_express_stock(clear_trinity_stoc($item['stock'])), "ЭКСПРЕСС") !== false)])>
            <td>
                <div class="m_title">Наименование</div>
                <div class="name_td">
                    <x-product-table.foto-icon :item="$item"></x-product-table.foto-icon>
                    <span>{{$item['caption']}}</span>
                </div>
            </td>
            <td title="Приблизительный срок поставки {{$item['deliverydays']}} дней">
                <div class="m_title">Срок</div>
                <div class="content">
                    @if (strpos(get_express_stock(clear_trinity_stoc($item['stock'])), "ЭКСПРЕСС") !== false)
                        12 часов
                    @else
                        {{$item['deliverydays']}}
                    @endif

                </div>
            </td>
            <td>
                <div class="m_title">Склад</div>
                <div class="content content_stock">
                    <span>{{ get_express_stock(clear_trinity_stoc($item['stock'])) }}</span>
                    <x-stock-info.table-vidget :item="$item"></x-stock-info.table-vidget>
                    <span @class([
                        'vozvrat',
                        'vozvrat_red' => ($item['ПредставлениеСтатуса'] === "Возврат невозможен"),
                        'vozvrat_green' => ($item['ПредставлениеСтатуса'] === "Возврат без удержаний")
                        ])>{{ $item['ПредставлениеСтатуса'] }}</span>
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
                    {{ $item['price'] }}
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
