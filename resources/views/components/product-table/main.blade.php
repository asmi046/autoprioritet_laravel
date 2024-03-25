<table id="cart_app" class="brand_table">
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
                <div class="name_td">
                    <x-product-table.foto-icon :item="$item"></x-product-table.foto-icon>
                    <span>{{$item['caption']}}</span>
                </div>
            </td>
            <td title="Приблизительный срок поставки {{$item['deliverydays']}} дней">{{$item['deliverydays']}}</td>
            <td>{{$item['stock']}}</td>
            <td>{{$item['rest']}}</td>
            <td>{{$item['price']}}</td>
            <td>
                <page-to-cart sku="{{ $item['bid'] }}" :product="{{json_encode($item)}}"></page-to-cart>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
