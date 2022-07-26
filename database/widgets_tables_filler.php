<?php
use Illuminate\Support\Facades\DB;

$widget_types = [
    'Мессенджеры' => 'Messengers',
    'Другое' => 'Other',
];

foreach ($widget_types as $ru => $en) {
    DB::table('widget_types')->insert([
        'description_ru' => $ru,
        'description_en' => $en,
    ]);
}


$types = [
    1,1,1,0
];

foreach ($types as $type) {
    DB::table('widgets')->insert([
        'widget_type_id' => $type,
    ]);
}

$widgets = [
    'Telegram чат' => 'Telegram chat',
    'Whatsapp чат' => 'Whatsapp chat',
    'Viber чат' => 'Viber chat',
    'Отзывы' => 'Testimonials',
];
foreach ($widgets as $ru => $en) {
    DB::table('widgets')->insert([
        'name_ru' => $ru,
        'name_en' => $en,
    ]);
}
$widgets_desc = [
    'Общайтесь с посетителями сайта нон стоп с помощью Telegram' => 'Interact with your customers non-stop using Telegram',
    'Общайтесь с посетителями сайта нон стоп с помощью Whatsapp' => 'Interact with your customers non-stop using Whatsapp',
    'Общайтесь с посетителями сайта нон стоп с помощью Viber' => 'Interact with your customers non-stop using Viber',
    'Отзывы' => 'Testimonials',
];

foreach ($widgets_desc as $ru => $en) {
    DB::table('widgets')->insert([
        'description_ru' => $ru,
        'description_en' => $en,
    ]);
}


