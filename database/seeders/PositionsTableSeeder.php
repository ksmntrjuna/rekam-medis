<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('positions')->delete();
        
        \DB::table('positions')->insert(array (
            0 => 
            array (
                'created_at' => '2021-01-25 08:11:19',
                'id' => '017cf1dd-0a57-42fd-815d-44c15d9b346f',
                'image' => '',
                'name' => 'Tampak Depan Kaki Kiri',
                'brand_id' => '1',
                'role_id' => '4',
                'status' => 1,
                'updated_at' => '2021-01-25 08:11:19',
            ),
            1 => 
            array (
                'created_at' => '2023-03-23 21:17:11',
                'id' => '03cf5484-a579-49fa-8f13-6b6800205bff',
                'image' => '',
                'name' => 'Tampak Belakang Kepala',
                'brand_id' => '2',
                'role_id' => '4',
                'status' => 1,
                'updated_at' => '2023-03-23 21:17:11',
            ),
            2 => 
            array (
                'created_at' => '2021-01-25 08:15:25',
                'id' => '05887963-200d-418b-aaa6-caf78218d494',
                'image' => '',
                'name' => 'Tampak kanan Pipi Kanan',
                'brand_id' => '1',
                'role_id' => '4',
                'status' => 1,
                'updated_at' => '2021-01-25 08:15:25',
            ),
            3 => 
            array (
                'created_at' => '2023-03-23 21:08:36',
                'id' => '0bafda70-e891-4448-b7bc-1d072d014d0b',
                'image' => '',
                'name' => 'Tampak Depan Kaki/Lengan/ARM/Paha Kanan',
                'brand_id' => '2',
                'role_id' => '4',
                'status' => 1,
                'updated_at' => '2023-03-23 21:08:36',
            ),
            4 => 
            array (
                'created_at' => '2023-03-23 21:09:27',
                'id' => '0fca3c0d-a1fa-4173-bb81-91debbe0eb37',
                'image' => '',
                'name' => 'Tampak Kanan Kaki/Lengan/ARM/Paha Kiri',
                'brand_id' => '1',
                'role_id' => '4',
                'status' => 1,
                'updated_at' => '2023-03-23 21:09:27',
            ),
            // 5 => 
            // array (
            //     'created_at' => '2023-04-04 12:52:18',
            //     'id' => '14ca890d-682b-4fa3-b9ba-503d60de26fe',
            //     'image' => '',
            //     'name' => 'Tampak Depan Kiri Pejam Mata Kuat Kuat',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2023-04-04 12:52:18',
            // ),
            // 6 => 
            // array (
            //     'created_at' => '2020-12-15 11:47:15',
            //     'id' => '17f316bc-d392-4352-aa8d-cc8637c97d0b',
            //     'image' => NULL,
            //     'name' => 'Wajah Samping Kiri',
            //     'role_id' => '3',
            //     'status' => 1,
            //     'updated_at' => '2020-12-15 11:47:15',
            // ),
            // 7 => 
            // array (
            //     'created_at' => '2023-03-23 21:18:57',
            //     'id' => '1de471e1-3007-4c83-9229-bb3925c57abf',
            //     'image' => '',
            //     'name' => 'Tampak posisi sesuai dengan area tempat injeksi',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2023-03-23 21:18:57',
            // ),
            // 8 => 
            // array (
            //     'created_at' => '2023-03-23 15:24:35',
            //     'id' => '1f52094f-0ab4-4dd6-8c26-c46d69e79f7c',
            //     'image' => '',
            //     'name' => 'Tampak Depan posisi sesuai dengan area tempat injeksi',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2023-03-23 15:24:35',
            // ),
            // 9 => 
            // array (
            //     'created_at' => '2020-12-15 04:42:18',
            //     'id' => '22a5079f-7bb8-4434-b8ee-ed969212b713',
            //     'image' => NULL,
            //     'name' => 'Tampak Depan Kerutkan Hidung, dengan Mengernyitkan Hidung',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2023-04-04 13:09:38',
            // ),
            // 10 => 
            // array (
            //     'created_at' => '2021-01-25 08:14:45',
            //     'id' => '22c11396-a6b6-4fb4-996f-5064c3b3c458',
            //     'image' => '',
            //     'name' => 'Tampak Kanan Lengan Kiri',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:14:45',
            // ),
            // 11 => 
            // array (
            //     'created_at' => '2021-01-25 08:08:23',
            //     'id' => '2e112c42-c67b-414a-9866-2839da3c4e58',
            //     'image' => '',
            //     'name' => 'Tampak Kiri 90 derajat',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:08:23',
            // ),
            // 12 => 
            // array (
            //     'created_at' => '2023-03-23 21:16:41',
            //     'id' => '31befd42-3ad0-40fe-94cf-61fc36a67183',
            //     'image' => '',
            //     'name' => 'Tampak Atas Kepala',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2023-03-23 21:16:41',
            // ),
            // 13 => 
            // array (
            //     'created_at' => '2020-12-15 11:47:15',
            //     'id' => '3ddc3a97-8506-48be-9b8a-3dd25bba2ece',
            //     'image' => NULL,
            //     'name' => 'Wajah Depan',
            //     'role_id' => '3',
            //     'status' => 1,
            //     'updated_at' => '2020-12-15 11:47:15',
            // ),
            // 14 => 
            // array (
            //     'created_at' => '2021-01-25 08:14:28',
            //     'id' => '44aed1e0-b059-4ac3-9d84-b63d2be78412',
            //     'image' => '',
            //     'name' => 'Tampak Depan Lengan Kiri',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:14:28',
            // ),
            // 15 => 
            // array (
            //     'created_at' => '2021-01-25 08:16:18',
            //     'id' => '49cd9954-411c-4fad-be5f-6b1885104584',
            //     'image' => '',
            //     'name' => 'Tampak Kiri Pipi Kiri',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:16:18',
            // ),
            // 16 => 
            // array (
            //     'created_at' => '2021-01-25 08:11:47',
            //     'id' => '4de86a76-1227-49f2-ae2e-521502594337',
            //     'image' => '',
            //     'name' => 'Tampak Kiri Kaki Kiri',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:11:47',
            // ),
            // 17 => 
            // array (
            //     'created_at' => '2021-01-25 08:12:35',
            //     'id' => '4eb238be-bebe-4a38-8787-c99557dddf1c',
            //     'image' => '',
            //     'name' => 'Tampak Kiri Lengan Kanan',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:12:35',
            // ),
            // 18 => 
            // array (
            //     'created_at' => '2023-03-23 21:09:17',
            //     'id' => '50973525-3d60-4b94-8e0c-3553ef672e3d',
            //     'image' => '',
            //     'name' => 'Tampak Depan Kaki/Lengan/ARM/Paha Kiri',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2023-03-23 21:09:17',
            // ),
            // 19 => 
            // array (
            //     'created_at' => '2021-01-25 08:09:21',
            //     'id' => '50f2343e-4b80-46ff-8ada-9b2c14b719a5',
            //     'image' => '',
            //     'name' => 'Tampak Kanan 45 derajat',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:09:21',
            // ),
            // 20 => 
            // array (
            //     'created_at' => '2021-01-25 08:15:40',
            //     'id' => '5121fae8-d03c-4216-80f2-8673da7ccca4',
            //     'image' => '',
            //     'name' => 'Tampak Kiri Pipi Kanan',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:15:40',
            // ),
            // 21 => 
            // array (
            //     'created_at' => '2021-01-25 08:08:57',
            //     'id' => '52947872-0d10-4b2b-afa7-769741032f53',
            //     'image' => '',
            //     'name' => 'Tampak Kanan Tertawa',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:08:57',
            // ),
            // 22 => 
            // array (
            //     'created_at' => '2023-03-23 15:12:22',
            //     'id' => '58640a92-114f-40dc-ad36-21946cbb3602',
            //     'image' => '',
            //     'name' => 'Tampak Belakang  Kaki Kanan',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2023-03-23 15:12:22',
            // ),
            // 23 => 
            // array (
            //     'created_at' => '2021-01-25 08:02:51',
            //     'id' => '5cbc5b93-edc2-41fa-a0ba-35b221c5cf76',
            //     'image' => '',
            //     'name' => 'Tampak Kiri',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:02:51',
            // ),
            // 24 => 
            // array (
            //     'created_at' => '2020-12-30 05:25:25',
            //     'id' => '66044a99-48f8-48c4-9c86-0e6357e211c2',
            //     'image' => '',
            //     'name' => 'Tampak Depan Mata Lihat Atas, Mengerutkan Dahi',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2023-04-04 13:10:06',
            // ),
            // 25 => 
            // array (
            //     'created_at' => '2021-01-25 08:03:03',
            //     'id' => '686e59b0-1e1e-4bb5-9110-896af204afa1',
            //     'image' => '',
            //     'name' => 'Tampak Depan',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:03:03',
            // ),
            // 26 => 
            // array (
            //     'created_at' => '2021-01-25 08:15:12',
            //     'id' => '6b012cca-8c24-4e5d-8beb-1bb287a79e91',
            //     'image' => '',
            //     'name' => 'Tampak Depan Pipi Kanan',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:15:12',
            // ),
            // 27 => 
            // array (
            //     'created_at' => '2021-01-25 08:07:39',
            //     'id' => '6eec3d21-c61a-4dbf-b24d-8b910d33c854',
            //     'image' => '',
            //     'name' => 'Tampak Pipi Kiri',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:07:39',
            // ),
            // 28 => 
            // array (
            //     'created_at' => '2021-01-25 08:11:30',
            //     'id' => '6f0694ff-97da-4458-a5df-f3baf55ca051',
            //     'image' => '',
            //     'name' => 'Tampak Kanan Kaki Kiri',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:11:30',
            // ),
            // 29 => 
            // array (
            //     'created_at' => '2021-01-25 08:16:06',
            //     'id' => '71948b04-af61-490c-b51a-3837e5b78a42',
            //     'image' => '',
            //     'name' => 'Tampak Kanan Pipi Kiri',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:16:06',
            // ),
            // 30 => 
            // array (
            //     'created_at' => '2021-01-25 08:12:09',
            //     'id' => '76e2ea90-7b96-44a6-bc5b-50e32d4f197a',
            //     'image' => '',
            //     'name' => 'Tampak Depan Lengan Kanan',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:12:09',
            // ),
            // 31 => 
            // array (
            //     'created_at' => '2021-01-25 08:09:50',
            //     'id' => '7aa89e04-f660-4224-8d46-a61462b50650',
            //     'image' => '',
            //     'name' => 'Tampak Kanan 90 derajat',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:09:50',
            // ),
            // 32 => 
            // array (
            //     'created_at' => '2023-03-23 21:08:59',
            //     'id' => '7b492d61-61c8-4b2d-b9e2-2a7438d88ed8',
            //     'image' => '',
            //     'name' => 'Tampak Kiri Kaki/Lengan/ARM/Paha Kanan',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2023-03-23 21:08:59',
            // ),
            // 33 => 
            // array (
            //     'created_at' => '2023-03-23 15:12:36',
            //     'id' => '847dc2f1-ffdd-4b99-94dd-e32361f1fd43',
            //     'image' => '',
            //     'name' => 'Tampak Belakang  Kaki Kiri',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2023-03-23 15:12:36',
            // ),
            // 34 => 
            // array (
            //     'created_at' => '2021-01-25 08:15:55',
            //     'id' => '86647adc-be14-47c4-b945-3495a8d7ff79',
            //     'image' => '',
            //     'name' => 'Tampak Depan Pipi Kiri',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:15:55',
            // ),
            // 35 => 
            // array (
            //     'created_at' => '2020-12-15 11:47:15',
            //     'id' => '9199e46f-912a-455a-9ca0-e64fba13ebd2',
            //     'image' => NULL,
            //     'name' => 'Wajah Samping Kanan',
            //     'role_id' => '3',
            //     'status' => 1,
            //     'updated_at' => '2020-12-15 11:47:15',
            // ),
            // 36 => 
            // array (
            //     'created_at' => '2021-01-25 08:08:40',
            //     'id' => '91fb3fe7-ed5e-4a47-85bc-f9e67d6c209d',
            //     'image' => '',
            //     'name' => 'Tampak Depan Tertawa',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:08:40',
            // ),
            // 37 => 
            // array (
            //     'created_at' => '2023-03-23 21:09:08',
            //     'id' => '94ee8b44-0be4-4846-b491-b9e829994f25',
            //     'image' => '',
            //     'name' => 'Tampak Belakang Kaki/Lengan/ARM/Paha Kanan',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2023-03-23 21:09:08',
            // ),
            // 38 => 
            // array (
            //     'created_at' => '2023-03-23 21:14:23',
            //     'id' => 'a3becde0-c78b-414d-8ab1-2f7f32fec67f',
            //     'image' => '',
            //     'name' => 'Tampak Belakang',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2023-03-23 21:14:23',
            // ),
            // 39 => 
            // array (
            //     'created_at' => '2023-03-23 21:08:48',
            //     'id' => 'a486c36d-1d68-4bf8-a0fa-8a27871cc996',
            //     'image' => '',
            //     'name' => 'Tampak Kanan Kaki/Lengan/ARM/Paha Kanan',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2023-03-23 21:08:48',
            // ),
            // 40 => 
            // array (
            //     'created_at' => '2023-03-23 21:09:45',
            //     'id' => 'a87e5c2d-7532-49da-ba37-9f8a83edeadd',
            //     'image' => '',
            //     'name' => 'Tampak Kiri Kaki/Lengan/ARM/Paha Kiri',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2023-03-23 21:09:45',
            // ),
            // 41 => 
            // array (
            //     'created_at' => '2021-01-25 08:09:34',
            //     'id' => 'a9d9da6f-7ac3-41bd-ad17-ae52c481ea3c',
            //     'image' => '',
            //     'name' => 'Tampak Kiri 45 derajat',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:09:34',
            // ),
            // 42 => 
            // array (
            //     'created_at' => '2023-03-23 21:09:54',
            //     'id' => 'aff44d9d-049e-4415-8f28-047a7c99eaaa',
            //     'image' => '',
            //     'name' => 'Tampak Belakang Kaki/Lengan/ARM/Paha Kiri',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2023-03-23 21:09:54',
            // ),
            // 43 => 
            // array (
            //     'created_at' => '2021-01-25 08:09:08',
            //     'id' => 'b2b0a6c3-0a00-4461-9175-78029e674755',
            //     'image' => '',
            //     'name' => 'Tampak Kiri Tertawa',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:09:08',
            // ),
            // 44 => 
            // array (
            //     'created_at' => '2023-03-23 21:17:03',
            //     'id' => 'c2fe7299-575c-40dc-87b4-146a043793ae',
            //     'image' => '',
            //     'name' => 'Tampak Samping Kiri Kepala',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2023-03-23 21:17:03',
            // ),
            // 45 => 
            // array (
            //     'created_at' => '2021-01-25 08:10:34',
            //     'id' => 'c4a4ce3e-b453-4220-b1b5-4d8998644cff',
            //     'image' => '',
            //     'name' => 'Tampak Depan Kaki Kanan',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:10:34',
            // ),
            // 46 => 
            // array (
            //     'created_at' => '2021-01-25 08:04:10',
            //     'id' => 'd2bff80d-71ce-4fbe-928b-af3e19d2b13e',
            //     'image' => '',
            //     'name' => 'Tampak Pipi Kanan',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:04:10',
            // ),
            // 47 => 
            // array (
            //     'created_at' => '2021-01-25 08:02:39',
            //     'id' => 'd686d1a8-e7f9-4e61-b600-2eb191794c41',
            //     'image' => '',
            //     'name' => 'Tampak Kanan',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:02:39',
            // ),
            // 48 => 
            // array (
            //     'created_at' => '2023-04-04 12:52:03',
            //     'id' => 'd7394568-c023-45d6-b16a-217ba37ae499',
            //     'image' => '',
            //     'name' => 'Tampak Depan Kanan Pejam Mata Kuat Kuat',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2023-04-04 12:52:03',
            // ),
            // 49 => 
            // array (
            //     'created_at' => '2021-01-25 08:19:05',
            //     'id' => 'e92b421b-5601-45bf-ae67-19fc5b3c3548',
            //     'image' => '',
            //     'name' => 'Tampak Kiri Kaki Kanan',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:19:05',
            // ),
            // 50 => 
            // array (
            //     'created_at' => '2021-01-25 08:14:57',
            //     'id' => 'ec0bfebe-1e19-4e14-90b4-7338a020114a',
            //     'image' => '',
            //     'name' => 'Tampak Kiri Lengan Kiri',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:14:57',
            // ),
            // 51 => 
            // array (
            //     'created_at' => '2021-01-25 08:11:01',
            //     'id' => 'f33066f3-7a41-4d49-a856-7ef75f7ea208',
            //     'image' => '',
            //     'name' => 'Tampak Kanan Kaki Kanan',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:11:01',
            // ),
            // 52 => 
            // array (
            //     'created_at' => '2021-01-25 08:12:23',
            //     'id' => 'f500ff9d-6e51-43cb-ac85-1d174f40fe66',
            //     'image' => '',
            //     'name' => 'Tampak kanan Lengan Kanan',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:12:23',
            // ),
            // 53 => 
            // array (
            //     'created_at' => '2023-03-23 21:16:53',
            //     'id' => 'f6acb240-b637-4f7e-b853-d3677d18dc01',
            //     'image' => '',
            //     'name' => 'Tampak Samping Kanan Kepala',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2023-03-23 21:16:53',
            // ),
            // 54 => 
            // array (
            //     'created_at' => '2020-12-15 04:42:18',
            //     'id' => 'fb0b8ce9-9be0-48cf-b6b2-58a48cc16e3d',
            //     'image' => NULL,
            //     'name' => 'Tampak Depan Mengerutkan Dahi',
            //     'role_id' => '4',
            //     'status' => 1,
            //     'updated_at' => '2021-01-25 08:07:09',
            // ),
        ));
        
        
    }
}