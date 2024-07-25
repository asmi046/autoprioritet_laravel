<?php

return [
    'send_from' => env('MAIL_FROM_ADDRESS', 'info@autoprioritet.ru'),
    'send_from_text' => 'Магазин АвтоПриоритет',
    'send_to' => ["asmi-work046@yandex.ru", "info@autoprioritet.ru"],
    'subject' => 'Заказ через корзину на сайте',
    'reply_to' => 'info@autoprioritet.ru',
    'reply_to_text' => 'Магазин АвтоПриоритет',
];
