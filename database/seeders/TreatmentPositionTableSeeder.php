<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TreatmentPositionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('treatment_position')->delete();
        
        \DB::table('treatment_position')->insert(array (
            0 => 
            array (
                'created_at' => '2021-01-25 12:40:58',
                'id' => 1,
            'name' => '1 Posisi (Kerutkan Hidung)',
                'position_id' => '22a5079f-7bb8-4434-b8ee-ed969212b713',
                'status' => '1',
                'treatment_code' => NULL,
                'treatment_id' => NULL,
                'updated_at' => '2021-01-25 12:40:58',
            ),
            1 => 
            array (
                'created_at' => '2021-01-25 12:41:35',
                'id' => 2,
            'name' => '1 Posisi (Mata Lihat Atas)',
                'position_id' => '66044a99-48f8-48c4-9c86-0e6357e211c2',
                'status' => '1',
                'treatment_code' => NULL,
                'treatment_id' => NULL,
                'updated_at' => '2021-01-25 12:41:35',
            ),
            2 => 
            array (
                'created_at' => '2021-01-25 12:42:22',
                'id' => 3,
            'name' => '1 Posisi (Kerutkan Dahi)',
                'position_id' => 'fb0b8ce9-9be0-48cf-b6b2-58a48cc16e3d',
                'status' => '1',
                'treatment_code' => NULL,
                'treatment_id' => NULL,
                'updated_at' => '2021-01-25 12:42:22',
            ),
            3 => 
            array (
                'created_at' => '2021-01-25 12:43:47',
                'id' => 4,
            'name' => '1 Posisi (Tampak Depan)',
                'position_id' => '686e59b0-1e1e-4bb5-9110-896af204afa1',
                'status' => '1',
                'treatment_code' => NULL,
                'treatment_id' => NULL,
                'updated_at' => '2021-01-25 12:43:47',
            ),
            4 => 
            array (
                'created_at' => '2021-01-25 12:44:40',
                'id' => 5,
            'name' => '2 Posisi (Tampak Kanan Kiri)2 Posisi (1)',
                'position_id' => 'd686d1a8-e7f9-4e61-b600-2eb191794c41,5cbc5b93-edc2-41fa-a0ba-35b221c5cf76',
                'status' => '1',
                'treatment_code' => NULL,
                'treatment_id' => NULL,
                'updated_at' => '2021-01-25 12:44:40',
            ),
            5 => 
            array (
                'created_at' => '2021-01-25 12:45:55',
                'id' => 6,
            'name' => '2 Posisi (Tampak Depan, Pipi Kanan)',
                'position_id' => '686e59b0-1e1e-4bb5-9110-896af204afa1,d2bff80d-71ce-4fbe-928b-af3e19d2b13e',
                'status' => '1',
                'treatment_code' => NULL,
                'treatment_id' => NULL,
                'updated_at' => '2021-01-25 12:45:55',
            ),
            6 => 
            array (
                'created_at' => '2021-01-25 12:46:23',
                'id' => 7,
            'name' => '2 Posisi (Tampak Depan Pipi Kiri)',
                'position_id' => '686e59b0-1e1e-4bb5-9110-896af204afa1,6eec3d21-c61a-4dbf-b24d-8b910d33c854',
                'status' => '1',
                'treatment_code' => NULL,
                'treatment_id' => NULL,
                'updated_at' => '2021-01-25 12:46:23',
            ),
            7 => 
            array (
                'created_at' => '2021-01-25 12:48:27',
                'id' => 8,
            'name' => '3 Posisi (Depan Kanan Kiri 90 Derajat)',
                'position_id' => '686e59b0-1e1e-4bb5-9110-896af204afa1,7aa89e04-f660-4224-8d46-a61462b50650,2e112c42-c67b-414a-9866-2839da3c4e58',
                'status' => '1',
                'treatment_code' => NULL,
                'treatment_id' => NULL,
                'updated_at' => '2021-01-25 12:48:27',
            ),
            8 => 
            array (
                'created_at' => '2021-01-25 12:49:28',
                'id' => 9,
            'name' => '3 Posisi (Tertawa)',
                'position_id' => '91fb3fe7-ed5e-4a47-85bc-f9e67d6c209d,52947872-0d10-4b2b-afa7-769741032f53,b2b0a6c3-0a00-4461-9175-78029e674755',
                'status' => '1',
                'treatment_code' => NULL,
                'treatment_id' => NULL,
                'updated_at' => '2021-01-25 12:49:28',
            ),
            9 => 
            array (
                'created_at' => '2021-01-25 12:57:59',
                'id' => 10,
            'name' => '5 Posisi (45, 90 Derajat)',
                'position_id' => '686e59b0-1e1e-4bb5-9110-896af204afa1,50f2343e-4b80-46ff-8ada-9b2c14b719a5,7aa89e04-f660-4224-8d46-a61462b50650,a9d9da6f-7ac3-41bd-ad17-ae52c481ea3c,2e112c42-c67b-414a-9866-2839da3c4e58',
                'status' => '1',
                'treatment_code' => NULL,
                'treatment_id' => NULL,
                'updated_at' => '2021-01-25 12:57:59',
            ),
            10 => 
            array (
                'created_at' => '2021-01-25 13:01:35',
                'id' => 11,
            'name' => '6 Posisi (Kaki Kanan Kiri)',
                'position_id' => 'c4a4ce3e-b453-4220-b1b5-4d8998644cff,017cf1dd-0a57-42fd-815d-44c15d9b346f,f33066f3-7a41-4d49-a856-7ef75f7ea208,6f0694ff-97da-4458-a5df-f3baf55ca051,e92b421b-5601-45bf-ae67-19fc5b3c3548,4de86a76-1227-49f2-ae2e-521502594337',
                'status' => '1',
                'treatment_code' => NULL,
                'treatment_id' => NULL,
                'updated_at' => '2021-01-25 13:01:35',
            ),
            11 => 
            array (
                'created_at' => '2021-01-25 13:03:15',
                'id' => 12,
            'name' => '6 Posisi (Lengan Kanan Kiri)',
                'position_id' => '76e2ea90-7b96-44a6-bc5b-50e32d4f197a,44aed1e0-b059-4ac3-9d84-b63d2be78412,f500ff9d-6e51-43cb-ac85-1d174f40fe66,22c11396-a6b6-4fb4-996f-5064c3b3c458,4eb238be-bebe-4a38-8787-c99557dddf1c,ec0bfebe-1e19-4e14-90b4-7338a020114a',
                'status' => '1',
                'treatment_code' => NULL,
                'treatment_id' => NULL,
                'updated_at' => '2021-01-25 13:03:15',
            ),
            12 => 
            array (
                'created_at' => '2021-01-25 13:07:11',
                'id' => 13,
            'name' => '6 Posisi (Pipi Kanan Kiri)',
                'position_id' => '6b012cca-8c24-4e5d-8beb-1bb287a79e91,86647adc-be14-47c4-b945-3495a8d7ff79,05887963-200d-418b-aaa6-caf78218d494,71948b04-af61-490c-b51a-3837e5b78a42,5121fae8-d03c-4216-80f2-8673da7ccca4,49cd9954-411c-4fad-be5f-6b1885104584',
                'status' => '1',
                'treatment_code' => NULL,
                'treatment_id' => NULL,
                'updated_at' => '2021-01-25 13:07:11',
            ),
            13 => 
            array (
                'created_at' => '2023-03-23 15:25:28',
                'id' => 14,
            'name' => '1 Posisi (Injeksi)',
                'position_id' => '1f52094f-0ab4-4dd6-8c26-c46d69e79f7c',
                'status' => '1',
                'treatment_code' => NULL,
                'treatment_id' => NULL,
                'updated_at' => '2023-03-23 15:25:28',
            ),
            14 => 
            array (
                'created_at' => '2023-03-23 21:11:22',
                'id' => 15,
            'name' => '8 Posisi (Kanan Kiri)',
                'position_id' => '94ee8b44-0be4-4846-b491-b9e829994f25,aff44d9d-049e-4415-8f28-047a7c99eaaa,0bafda70-e891-4448-b7bc-1d072d014d0b,50973525-3d60-4b94-8e0c-3553ef672e3d,a486c36d-1d68-4bf8-a0fa-8a27871cc996,0fca3c0d-a1fa-4173-bb81-91debbe0eb37,7b492d61-61c8-4b2d-b9e2-2a7438d88ed8,a87e5c2d-7532-49da-ba37-9f8a83edeadd',
                'status' => '1',
                'treatment_code' => NULL,
                'treatment_id' => NULL,
                'updated_at' => '2023-03-23 21:11:22',
            ),
            15 => 
            array (
                'created_at' => '2023-03-23 21:15:00',
                'id' => 16,
            'name' => '4 Posisi (Semua Arah)',
                'position_id' => 'a3becde0-c78b-414d-8ab1-2f7f32fec67f,686e59b0-1e1e-4bb5-9110-896af204afa1,d686d1a8-e7f9-4e61-b600-2eb191794c41,5cbc5b93-edc2-41fa-a0ba-35b221c5cf76',
                'status' => '1',
                'treatment_code' => NULL,
                'treatment_id' => NULL,
                'updated_at' => '2023-03-23 21:15:00',
            ),
            16 => 
            array (
                'created_at' => '2023-03-23 21:17:51',
                'id' => 17,
            'name' => '4 Posisi (Kepala Semua arah)',
                'position_id' => '31befd42-3ad0-40fe-94cf-61fc36a67183,03cf5484-a579-49fa-8f13-6b6800205bff,f6acb240-b637-4f7e-b853-d3677d18dc01,c2fe7299-575c-40dc-87b4-146a043793ae',
                'status' => '1',
                'treatment_code' => NULL,
                'treatment_id' => NULL,
                'updated_at' => '2023-03-23 21:17:51',
            ),
            17 => 
            array (
                'created_at' => '2023-03-23 21:19:50',
                'id' => 18,
            'name' => '4 Posisi (Injeksi)',
                'position_id' => '686e59b0-1e1e-4bb5-9110-896af204afa1,d686d1a8-e7f9-4e61-b600-2eb191794c41,5cbc5b93-edc2-41fa-a0ba-35b221c5cf76,1de471e1-3007-4c83-9229-bb3925c57abf',
                'status' => '1',
                'treatment_code' => NULL,
                'treatment_id' => NULL,
                'updated_at' => '2023-03-23 21:19:50',
            ),
            18 => 
            array (
                'created_at' => '2023-04-04 13:11:16',
                'id' => 19,
            'name' => '3 Posisi (Ketutkan Dahhi, Pejam Mata)',
                'position_id' => 'd7394568-c023-45d6-b16a-217ba37ae499,14ca890d-682b-4fa3-b9ba-503d60de26fe,fb0b8ce9-9be0-48cf-b6b2-58a48cc16e3d',
                'status' => '1',
                'treatment_code' => NULL,
                'treatment_id' => NULL,
                'updated_at' => '2023-04-04 13:11:16',
            ),
        ));
        
        
    }
}