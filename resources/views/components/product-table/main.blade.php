<table class="brand_table">
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
            <td class="name_td">
                <x-product-table.foto-icon :item="$item"></x-product-table.foto-icon>
                <span>{{$item['caption']}}</span>
            </td>
            <td>{{$item['deliverydays']}}</td>
            <td>{{$item['stock']}}</td>
            <td>{{$item['rest']}}</td>
            <td>{{$item['price']}}</td>
            <td>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
