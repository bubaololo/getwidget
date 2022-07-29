<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\DB;

class FillWidgets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fill:widgets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fill widgets tables in db with initial data';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('widgets')->truncate();
        DB::table('widget_types')->truncate();
        DB::table('users_widgets')->truncate();


        $widget_types = [
            'Мессенджеры' => 'Messengers',
            'Другое' => 'Other',
        ];
        
        foreach ($widget_types as $ru => $en) {
            DB::table('widget_types')->insert([
                'name_ru' => $ru,
                'name_en' => $en,
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
                'widget_type_id' => 1
            ]);
        }
        $types = [
            1,1,1,2
        ];
        for($i=1;$i<count($types);$i++)
         {
            DB::table('widgets')
            ->where('id', $i)
            ->update([
                'widget_type_id' => $types[$i],
            ]);
        }
        $widgets_desc = [
            'Общайтесь с посетителями сайта нон стоп с помощью Telegram' => 'Interact with your customers non-stop using Telegram',
            'Общайтесь с посетителями сайта нон стоп с помощью Whatsapp' => 'Interact with your customers non-stop using Whatsapp',
            'Общайтесь с посетителями сайта нон стоп с помощью Viber' => 'Interact with your customers non-stop using Viber',
            'Отзывы' => 'Testimonials',
        ];
        $counter = 0;
        foreach ($widgets_desc as $ru => $en) {
            $counter++;
            DB::table('widgets')
            ->where('id', $counter)
            ->update([
                'description_ru' => $ru,
                'description_en' => $en,
            ]);
        }
        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
