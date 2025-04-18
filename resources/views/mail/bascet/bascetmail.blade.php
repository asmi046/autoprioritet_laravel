<h1>Оформлен заказ №{{ $order_id }}</h1>
<p><strong>Имя:</strong> {{$formData['fio']}}</p>
<p><strong>Телефон:</strong> {{$formData['phone']}}</p>
<p><strong>E-mail:</strong> {{$formData['email']}}</p>
<p><strong>Комментарий:</strong> {{$formData['comment']}}</p>
<table style="width:100%; border-top:1px solid black; border-left:1px solid black; border-spacing: 0;">
    <thead style="text-align:left;">
        <tr>
            <th style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">Наименование</th>
            <th style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">Производитель</th>
            <th style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">Склад</th>
            <th style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">Срок доставки</th>
            <th style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">Цена</th>
            <th style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">Колличество</th>
            <th style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">Сумма</th>
        </tr>
    </thead>
    <tbody>
           @foreach ($formData['tovars'] as $item)
                <tr>
                    <td style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">{{$item["tovar_content"]["caption"]}}<br/>
                        <span style="font-size:12px">Артикул: {{$item["tovar_content"]["code"]}}</span>
                    </td>
                    <td style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">{{$item["tovar_content"]["producer"]}}</td>
                    <td style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">{{ clear_trinity($item["tovar_content"]["stock"]) }}</td>
                    <td style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">{{$item["tovar_content"]["deliverydays"]}}</td>
                    <td style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">{{$item["price"]}} ₽</td>
                    <td style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">{{$item["quentity"]}}</td>
                    <td style="padding: 5px; border-bottom:1px solid black; border-right:1px solid black;">{{(float)$item["quentity"] * (float)$item["price"]}} ₽</td>
                </tr>
            @endforeach
    </tbody>
</table>
<h2>ИТОГО: {{$formData['amount']}} ₽</h2>
