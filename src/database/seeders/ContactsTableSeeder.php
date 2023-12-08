<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $param = [
        //     'fullname' => '針谷 陸叶',
        //     'gender' => '2',
        //     'email' => 'aaaaa@gmail.com',
        //     'postcode' => '489-0879',
        //     'address' => '愛知県瀬戸市瘤木町',
        //     'building_name' => '',
        //     'opinion' => 'aiueokakikukeko',
        // ];
        // DB::table('contacts')->insert($param);

        // $param = [
        //     'fullname' => 'hariya rikuto',
        //     'gender' => '1',
        //     'email' => 'aaaaa@gmail.com',
        //     'postcode' => '489-0879',
        //     'address' => '愛知県瀬戸市瘤木町',
        //     'building_name' => '',
        //     'opinion' => 'sasisuseso',
        // ];
        // DB::table('contacts')->insert($param);

        // $param = [
        //     'fullname' => 'hohohohohoh',
        //     'gender' => '2',
        //     'email' => 'aaaaa@gmail.com',
        //     'postcode' => '489-0879',
        //     'address' => '愛知県瀬戸市瘤木町',
        //     'building_name' => '',
        //     'opinion' => 'tatitutteto',
        // ];
        // DB::table('contacts')->insert($param);

        Contact::factory()->count(3)->create();
    }
}
