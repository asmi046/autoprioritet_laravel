<table id="cart_app" class="tovar_table">
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
                <span class="content">
                    {{$item['deliverydays']}}
                </span>
            </td>
            <td>
                <div class="m_title">Склад</div>
                <span class="content">
                    {{$item['stock']}}
                </span>
            </td>
            <td>
                <div class="m_title">Наличие</div>
                <span class="content">
                    {{$item['rest']}}
                </span>
            </td>
            <td>
                <div class="m_title">Цена</div>
                <span class="content">
                    {{$item['price']}}
                </span>
            </td>
            <td>
                <div class="m_title">Корзина</div>
                <span class="content">
                    <page-to-cart sku="{{ generate_sku($item) }}" :price="{{ $item['price'] }}" :product="{{json_encode($item)}}"></page-to-cart>
                </span>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
