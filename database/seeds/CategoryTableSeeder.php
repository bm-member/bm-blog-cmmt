<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            'PHP',
            'Java',
            'Python',
            'SQL'
        ];
        foreach ($datas as $data) {
            $cat = new Category();
            $cat->name = $data;
            $cat->save();
        }
    }

}
