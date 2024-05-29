<table class="tovar_table">
    <thead>
        <tr>
            <th>Наименование</th>
            <th>Срок</th>
            <th>Склад</th>
            <th>Наличие</th>
            <th>Цена</th>
            <th>Корзина</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($brand as $item)
        <tr>
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
                    {{$item['deliverydays']}}
                </div>
            </td>
            <td>
                <div class="m_title">Склад</div>
                <div class="content content_stock">
                    <span>{{$item['stock']}}</span>
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
