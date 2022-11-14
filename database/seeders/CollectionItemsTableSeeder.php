<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CollectionItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('collection_items')->delete();
        
        \DB::table('collection_items')->insert(array (
            
            array (
                'id' => 3,
                'title' => 'My first project',
                'slug' => 'It\'s really my first project',
                'content' => '[{"layout":"social_media_link","key":"cjil58Uaj5nSKJUq","attributes":{"platform":"instagram","url":"https:\\/\\/www.instagram.com\\/mykolablyz\\/?hl=uk"}},{"layout":"video","key":"cCqoLc8AsHY6GMrE","attributes":{"title":"Shon Pen","url":"https:\\/\\/www.youtube.com\\/watch?v=4amElNxLopU"}}]',
                'created_at' => '2022-11-08 23:23:56',
                'updated_at' => '2022-11-11 03:31:46',
            ),
        ));
        
        
    }
}