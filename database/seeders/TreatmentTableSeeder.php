<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TreatmentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('treatments')->delete();

        \DB::table('treatments')->insert(array(
            0 =>
            array(
                'code' => 'BTXBL',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 1,
                'brand_id' => '1',
                'name' => 'Botox Bunny Line',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            1 =>
            array(
                'code' => 'BTXPAXBL',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 2,
                'brand_id' => '2',
                'name' => 'BTXPAXBL',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            2 =>
            array(
                'code' => 'BTXFH',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 3,
                'brand_id' => '1',
                'name' => 'Botox Forehead',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            3 =>
            array(
                'code' => 'BTXPAXFH',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 4,
                'brand_id' => '2',
                'name' => 'BTXPAXFH',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            4 =>
            array(
                'code' => 'BTXPBLFH',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 5,
                'brand_id' => '1',
                'name' => 'BTXPBLFH',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            5 =>
            array(
                'code' => 'BTXPCFFH',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 6,
                'brand_id' => '1',
                'name' => 'BTXPCFFH',
                'updated_at' => '2023-04-04 13:15:58',
            ),
            6 =>
            array(
                'code' => 'BTXPCHFH',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 7,
                'brand_id' => '1',
                'name' => 'BTXPCHFH',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            7 =>
            array(
                'code' => 'BTXGB',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 8,
                'brand_id' => '1',
                'name' => 'Botox Glabella',
                'updated_at' => '2023-04-04 13:12:15',
            ),
            8 =>
            array(
                'code' => 'BTXPAXGB',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 9,
                'brand_id' => '1',
                'name' => 'BTXPAXGB',
                'updated_at' => '2023-04-04 13:12:35',
            ),
            9 =>
            array(
                'code' => 'BTXPBLGB',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 10,
                'brand_id' => '1',
                'name' => 'BTXPBLGB',
                'updated_at' => '2023-04-04 13:12:56',
            ),
            10 =>
            array(
                'code' => 'BTXPCFGB',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 11,
                'brand_id' => '1',
                'name' => 'BTXPCFGB',
                'updated_at' => '2023-04-04 13:14:05',
            ),
            11 =>
            array(
                'code' => 'BTXPCHGB',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 12,
                'brand_id' => '1',
                'name' => 'BTXPCHGB',
                'updated_at' => '2023-04-04 13:14:30',
            ),
            12 =>
            array(
                'code' => 'BTXPFHGB',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 13,
                'brand_id' => '1',
                'name' => 'BTXPFHGB',
                'updated_at' => '2023-04-04 13:14:49',
            ),
            13 =>
            array(
                'code' => 'NPACNE2COATD',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 14,
                'brand_id' => '1',
                'name' => 'NP ACNE 2 COAT DADA',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            14 =>
            array(
                'code' => 'NPACNE2COATP',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 15,
                'brand_id' => '1',
                'name' => 'NP ACNE 2 COAT PUNGGUNG',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            15 =>
            array(
                'code' => 'NPACNED',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 16,
                'brand_id' => '1',
                'name' => 'NPACNED',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            16 =>
            array(
                'code' => 'NPACNEP',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 17,
                'brand_id' => '2',
                'name' => 'NPACNEP',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            17 =>
            array(
                'code' => 'NPDAISYD',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 18,
                'brand_id' => '1',
                'name' => 'NPDAISYD',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            18 =>
            array(
                'code' => 'NPGL1D',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 19,
                'brand_id' => '1',
                'name' => 'Botanical Peeling Lightening 1 Dada',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            19 =>
            array(
                'code' => 'NPGL1P',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 20,
                'brand_id' => '2',
                'name' => 'Botanical Peeling Lightening 1 Punggung',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            20 =>
            array(
                'code' => 'NPGL2D',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 21,
                'brand_id' => '1',
                'name' => 'Botanical Peeling Lightening 2 Dada',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            21 =>
            array(
                'code' => 'NPGL2P',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 22,
                'brand_id' => '2',
                'name' => 'Botanical Peeling Lightening 2 Punggung',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            22 =>
            array(
                'code' => 'NPGLP',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 23,
                'brand_id' => '1',
                'name' => 'NPGLP',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            23 =>
            array(
                'code' => 'NPGLPD',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 24,
                'brand_id' => '1',
                'name' => 'BOTANICAL PEELING GLP DADA',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            24 =>
            array(
                'code' => 'NPGLPP',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 25,
                'brand_id' => '1',
                'name' => 'BOTANICAL PEELING GLP PUNGGUNG',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            25 =>
            array(
                'code' => 'NPMJP2COATD',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 26,
                'brand_id' => '1',
                'name' => 'MJP 2 Coated Dada',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            26 =>
            array(
                'code' => 'NPMJP2COATP',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 27,
                'brand_id' => '2',
                'name' => 'MJP 2 Coated Punggung',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            27 =>
            array(
                'code' => 'NPMJPD',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 28,
                'brand_id' => '1',
                'name' => 'NPMJPD',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            28 =>
            array(
                'code' => 'NPMJPP',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 29,
                'brand_id' => '1',
                'name' => 'NPMJPP',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            29 =>
            array(
                'code' => 'NPMLBD',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 30,
                'brand_id' => '1',
                'name' => 'Botanical Peeling Brightening Dada',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            30 =>
            array(
                'code' => 'NPMLBP',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 31,
                'brand_id' => '1',
                'name' => 'Botanical Peeling Brightening Punggung',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            31 =>
            array(
                'code' => 'NPMLWD',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 32,
                'brand_id' => '1',
                'name' => 'BOTANICAL PEELING MLW DADA',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            32 =>
            array(
                'code' => 'NPMLWP',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 33,
                'brand_id' => '1',
                'name' => 'BOTANICAL PEELING MLW PUNGGUNG',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            33 =>
            array(
                'code' => 'NCPBRIGHTD',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 34,
                'brand_id' => '1',
                'name' => 'NCPBRIGHTD',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            34 =>
            array(
                'code' => 'NCPACNEP',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 35,
                'brand_id' => '1',
                'name' => 'Natasha Botanical Facial Acne Punggung',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            35 =>
            array(
                'code' => 'INJKLDA',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 36,
                'brand_id' => '1',
                'name' => 'Injeksi Keloid 0',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            36 =>
            array(
                'code' => 'INJKLDAP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 37,
                'brand_id' => '1',
                'name' => 'INJEKSI KELOID 0',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            37 =>
            array(
                'code' => 'INJKLDAP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 38,
                'brand_id' => '1',
                'name' => 'INJEKSI KELOID 0',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            38 =>
            array(
                'code' => 'INJKLDAP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 39,
                'brand_id' => '1',
                'name' => 'INJEKSI KELOID 0',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            39 =>
            array(
                'code' => 'INJKLDB',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 40,
                'brand_id' => '1',
                'name' => 'Injeksi Keloid 1ml - 2ml',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            40 =>
            array(
                'code' => 'INJKLDBP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 41,
                'brand_id' => '1',
                'name' => 'INJEKSI KELOID 1ML-2ML PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            41 =>
            array(
                'code' => 'INJKLDBP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 42,
                'brand_id' => '1',
                'name' => 'INJEKSI KELOID 1ML - 2ML PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            42 =>
            array(
                'code' => 'INJKLDBP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 43,
                'brand_id' => '1',
                'name' => 'INJEKSI KELOID 1ML - 2ML PAKET 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            43 =>
            array(
                'code' => 'BTXAX',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 44,
                'brand_id' => '1',
                'name' => 'Botox Axilla',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            44 =>
            array(
                'code' => 'EPHRKETIAK',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 45,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Ketiak',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            45 =>
            array(
                'code' => 'EPHRKETIAKP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 46,
                'brand_id' => '1',
                'name' => 'E-PULSE FOR HAIR REMOVAL KETIAK',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            46 =>
            array(
                'code' => 'EPHRKETIAKP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 47,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Ketiak Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            47 =>
            array(
                'code' => 'EPHRKETIAKP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 48,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Ketiak Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            48 =>
            array(
                'code' => 'EPHRKETIAKP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 49,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Ketiak Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            49 =>
            array(
                'code' => 'IPLHRKETIAK',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 50,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Ketiak',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            50 =>
            array(
                'code' => 'IPLHRKETIAKP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 51,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Ketiak Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            51 =>
            array(
                'code' => 'IPLHRKETIAKP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 52,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Ketiak paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            52 =>
            array(
                'code' => 'IPLHRKETIAKP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 53,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Ketiak Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            53 =>
            array(
                'code' => 'IPLHRKETIAKP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 54,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Ketiak Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            54 =>
            array(
                'code' => 'LSRHRKETIAK',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 55,
                'brand_id' => '1',
                'name' => 'Laser Gentle Yag Hair Removal Ketiak',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            55 =>
            array(
                'code' => 'LSRHRKETIAKP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 56,
                'brand_id' => '1',
                'name' => 'Laser Gentle Yag Hair Removal Ketiak Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            56 =>
            array(
                'code' => 'LSRHRKETIAKP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 57,
                'brand_id' => '1',
                'name' => 'Laser Gentle Yag Hair Removal Ketiak paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            57 =>
            array(
                'code' => 'LSRHRKETIAKP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 58,
                'brand_id' => '1',
                'name' => 'Laser Gentle Yag Hair Removal Ketiak Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            58 =>
            array(
                'code' => 'NOVAHRKET',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 59,
                'brand_id' => '1',
                'name' => 'Nova Hair Removal Ketiak',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            59 =>
            array(
                'code' => 'NPMLBAX',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 60,
                'brand_id' => '1',
                'name' => 'Botanical Peeling Brightening Ketiak',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            60 =>
            array(
                'code' => 'NPMLBLIP',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 61,
                'brand_id' => '1',
                'name' => 'Botanical Peeling MLB Lipatan',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            61 =>
            array(
                'code' => 'LSRHRKETIAK',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 62,
                'brand_id' => '2',
                'name' => 'Laser Gentle Yag Hair Removal Ketiak',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            62 =>
            array(
                'code' => 'LSRHRKETIAKP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 63,
                'brand_id' => '2',
                'name' => 'Laser Gentle Yag Hair Removal Ketiak Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            63 =>
            array(
                'code' => 'LSRHRKETIAKP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 64,
                'brand_id' => '2',
                'name' => 'Laser Gentle Yag Hair Removal Ketiak paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            64 =>
            array(
                'code' => 'LSRHRKETIAKP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 65,
                'brand_id' => '2',
                'name' => 'Laser Gentle Yag Hair Removal Ketiak Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            65 =>
            array(
                'code' => 'MESOARM',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 66,
                'brand_id' => '1',
                'name' => 'MESO BODY LENGAN',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            66 =>
            array(
                'code' => 'LSRFRACPIPIKA',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 67,
                'brand_id' => '1',
                'name' => 'Laser Fractional Pipi Kanan',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            67 =>
            array(
                'code' => 'LSRFRACPIPIKAP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 68,
                'brand_id' => '1',
                'name' => 'Laser Fractional Pipi Kanan Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            68 =>
            array(
                'code' => 'LSRFRACPIPIKAP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 69,
                'brand_id' => '1',
                'name' => 'Laser Fractional Pipi Kanan paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            69 =>
            array(
                'code' => 'LSRFRACPIPIKAP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 70,
                'brand_id' => '1',
                'name' => 'Laser Fractional Pipi Kanan Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            70 =>
            array(
                'code' => 'LSRFRACPIPIKAP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 71,
                'brand_id' => '1',
                'name' => 'Laser Fractional Pipi Kanan Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            71 =>
            array(
                'code' => 'LSRFRACPIPIKI',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 72,
                'brand_id' => '1',
                'name' => 'Laser Fractional Pipi Kiri',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            72 =>
            array(
                'code' => 'LSRFRACPIPIKIP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 73,
                'brand_id' => '1',
                'name' => 'Laser Fractional Pipi Kiri Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            73 =>
            array(
                'code' => 'LSRFRACPIPIKIP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 74,
                'brand_id' => '1',
                'name' => 'Laser Fractional Pipi Kiri paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            74 =>
            array(
                'code' => 'LSRFRACPIPIKIP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 75,
                'brand_id' => '1',
                'name' => 'Laser Fractional Pipi Kiri Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            75 =>
            array(
                'code' => 'LSRFRACPIPIKIP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 76,
                'brand_id' => '1',
                'name' => 'Laser Fractional Pipi Kiri Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            76 =>
            array(
                'code' => 'NPACNE',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 77,
                'brand_id' => '1',
                'name' => 'NPACNE',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            77 =>
            array(
                'code' => 'NPACNE2COAT',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 78,
                'brand_id' => '1',
                'name' => 'NP ACNE 2 COAT',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            78 =>
            array(
                'code' => 'NPBOTANICALP12',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 79,
                'brand_id' => '1',
                'name' => 'NP Botanical Paket 12',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            79 =>
            array(
                'code' => 'NPDAISY',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 80,
                'brand_id' => '1',
                'name' => 'Natasha By Dr. Fredi Setyawan Daisy Flower Peeling',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            80 =>
            array(
                'code' => 'NPGL1',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 81,
                'brand_id' => '1',
                'name' => 'Botanical Peeling Lightening 1',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            81 =>
            array(
                'code' => 'NPGL2',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 82,
                'brand_id' => '1',
                'name' => 'Botanical Peeling Lightening 2',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            82 =>
            array(
                'code' => 'NPMJP',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 83,
                'brand_id' => '1',
                'name' => 'NPMJP',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            83 =>
            array(
                'code' => 'NPMJP2COAT',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 84,
                'brand_id' => '1',
                'name' => 'MJP 2 Coated',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            84 =>
            array(
                'code' => 'NPMLB',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 85,
                'brand_id' => '1',
                'name' => 'Botanical Peeling Brightening',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            85 =>
            array(
                'code' => 'NPMLW',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 86,
                'brand_id' => '1',
                'name' => 'NPMLW',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            86 =>
            array(
                'code' => 'NPYP',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 87,
                'brand_id' => '1',
                'name' => 'NPYP',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            87 =>
            array(
                'code' => 'CP-',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 88,
                'brand_id' => '1',
                'name' => 'Facial Standart',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            88 =>
            array(
                'code' => 'CP-AA',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 89,
                'brand_id' => '1',
                'name' => 'Facial Anti Aging',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            89 =>
            array(
                'code' => 'FOXYACNE',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 90,
                'brand_id' => '1',
                'name' => 'Facial Oxygen Botanical For Acne',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            90 =>
            array(
                'code' => 'FOXYACNEP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 91,
                'brand_id' => '1',
                'name' => 'Facial Oxygen Botanical For Acne Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            91 =>
            array(
                'code' => 'FOXYACNEP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 92,
                'brand_id' => '1',
                'name' => 'Facial Oxygen Botanical For Acne Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            92 =>
            array(
                'code' => 'FOXYACNEP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 93,
                'brand_id' => '1',
                'name' => 'Facial Oxygen Botanical For Acne Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            93 =>
            array(
                'code' => 'FOXYBRTP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 94,
                'brand_id' => '1',
                'name' => 'Facial Oxygen Botanical For Brightening Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            94 =>
            array(
                'code' => 'FOXYBRTP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 95,
                'brand_id' => '1',
                'name' => 'Facial Oxygen Botanical For Brightening Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            95 =>
            array(
                'code' => 'FOXYBRTP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 96,
                'brand_id' => '1',
                'name' => 'Facial Oxygen Botanical For Brightening Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            96 =>
            array(
                'code' => 'FOXYREJUVP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 97,
                'brand_id' => '1',
                'name' => 'Facial Oxygen Botanical For Rejuvenation Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            97 =>
            array(
                'code' => 'FOXYREJUVP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 98,
                'brand_id' => '1',
                'name' => 'Facial Oxygen Botanical For Rejuvenation Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            98 =>
            array(
                'code' => 'FOXYREJUVP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 99,
                'brand_id' => '1',
                'name' => 'Facial Oxygen Botanical For Rejuvenation Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            99 =>
            array(
                'code' => 'FOXYBRT',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 100,
                'brand_id' => '1',
                'name' => 'Facial Oxygen Botanical For Brightening',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            100 =>
            array(
                'code' => 'FOXYREJUV',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 101,
                'brand_id' => '1',
                'name' => 'Facial Oxygen Botanical For Rejuvenation',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            101 =>
            array(
                'code' => 'NCPACNE',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 102,
                'brand_id' => '1',
                'name' => 'Natasha Botanical Facial Acne',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            102 =>
            array(
                'code' => 'NCPBRIGHT',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 103,
                'brand_id' => '1',
                'name' => 'Natasha Botanical Facial Brightening',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            103 =>
            array(
                'code' => 'NCPREJUV',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 104,
                'brand_id' => '1',
                'name' => 'Natasha Botanical Facial Rejuvenation',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            104 =>
            array(
                'code' => 'NCPSERUMP12',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 105,
                'brand_id' => '1',
                'name' => 'NCP Serum Paket 12',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            105 =>
            array(
                'code' => 'PE-',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 106,
                'brand_id' => '1',
                'name' => 'Passive Exercise Min',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            106 =>
            array(
                'code' => 'PSEXE',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 107,
                'brand_id' => '1',
                'name' => 'Passive Exercise',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            107 =>
            array(
                'code' => 'BTXMASS',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 108,
                'brand_id' => '1',
                'name' => 'Botox Masseter',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            108 =>
            array(
                'code' => 'BTXPAXMASS',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 109,
                'brand_id' => '1',
                'name' => 'BTXPAXMASS',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            109 =>
            array(
                'code' => 'BTXPBLMASS',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 110,
                'brand_id' => '1',
                'name' => 'BTXPBLMASS',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            110 =>
            array(
                'code' => 'BTXPCFMASS',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 111,
                'brand_id' => '1',
                'name' => 'BTXPCFMASS',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            111 =>
            array(
                'code' => 'BTXPCHMASS',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 112,
                'brand_id' => '1',
                'name' => 'BTXPCHMASS',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            112 =>
            array(
                'code' => 'BTXPFHMASS',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 113,
                'brand_id' => '1',
                'name' => 'BTXPFHMASS',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            113 =>
            array(
                'code' => 'BTXPGBMASS',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 114,
                'brand_id' => '1',
                'name' => 'BTXPGBMASS',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            114 =>
            array(
                'code' => 'BTXCH',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 115,
                'brand_id' => '1',
                'name' => 'Botox Cuping Hidung',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            115 =>
            array(
                'code' => 'BTXPAXCH',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 116,
                'brand_id' => '1',
                'name' => 'BTXPAXCH',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            116 =>
            array(
                'code' => 'BTXPBLCH',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 117,
                'brand_id' => '1',
                'name' => 'BTXPBLCH',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            117 =>
            array(
                'code' => 'BTXPCFCH',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 118,
                'brand_id' => '1',
                'name' => 'BTXPCFCH',
                'updated_at' => '2023-04-04 13:16:33',
            ),
            118 =>
            array(
                'code' => 'EPHRJAMBANG',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 119,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Jambang',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            119 =>
            array(
                'code' => 'EPHRJAMBANGP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 120,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Jambang Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            120 =>
            array(
                'code' => 'EPHRJAMBANGP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 121,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Jambang Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            121 =>
            array(
                'code' => 'EPHRJAMBANGP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 122,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Jambang Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            122 =>
            array(
                'code' => 'EPHRJANGGUT',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 123,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Janggut',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            123 =>
            array(
                'code' => 'EPHRJANGGUTP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 124,
                'brand_id' => '1',
                'name' => 'E-PULSE FOR HAIR REMOVAL JANGGUT',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            124 =>
            array(
                'code' => 'EPHRJANGGUTP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 125,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Janggut Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            125 =>
            array(
                'code' => 'EPHRJANGGUTP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 126,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Janggut Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            126 =>
            array(
                'code' => 'EPHRJANGGUTP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 127,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Janggut paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            127 =>
            array(
                'code' => 'EPHRKUMIS',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 128,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Kumis',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            128 =>
            array(
                'code' => 'IPLHRJAMBANG',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 129,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Jambang',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            129 =>
            array(
                'code' => 'IPLHRJAMBANGP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 130,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Jambang Paket ',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            130 =>
            array(
                'code' => 'IPLHRJAMBANGP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 131,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Jambang paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            131 =>
            array(
                'code' => 'IPLHRJAMBANGP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 132,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Jambang Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            132 =>
            array(
                'code' => 'IPLHRJAMBANGP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 133,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Jambang Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            133 =>
            array(
                'code' => 'IPLHRJANGGUT',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 134,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Janggut',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            134 =>
            array(
                'code' => 'IPLHRJANGGUTP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 135,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Janggut Paket ',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            135 =>
            array(
                'code' => 'IPLHRJANGGUTP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 136,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Janggut paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            136 =>
            array(
                'code' => 'IPLHRJANGGUTP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 137,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Janggut Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            137 =>
            array(
                'code' => 'IPLHRJANGGUTP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 138,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Janggut Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            138 =>
            array(
                'code' => 'IPLHRKUMIS',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 139,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Kumis',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            139 =>
            array(
                'code' => 'IPLHRKUMISP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 140,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Kumis Paket ',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            140 =>
            array(
                'code' => 'IPLHRKUMISP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 141,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Kumis paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            141 =>
            array(
                'code' => 'IPLHRKUMISP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 142,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Kumis Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            142 =>
            array(
                'code' => 'IPLHRKUMISP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 143,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Kumis Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            143 =>
            array(
                'code' => 'LSRHRKUMIS',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 144,
                'brand_id' => '1',
                'name' => 'Laser Gentle Yag Hair Removal Kumis',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            144 =>
            array(
                'code' => 'LSRHRKUMISP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 145,
                'brand_id' => '1',
                'name' => 'Laser Gentle Yag Hair Removal Kumis Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            145 =>
            array(
                'code' => 'LSRHRKUMISP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 146,
                'brand_id' => '1',
                'name' => 'Laser Gentle Yag Hair Removal Kumis paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            146 =>
            array(
                'code' => 'LSRHRKUMISP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 147,
                'brand_id' => '1',
                'name' => 'Laser Gentle Yag Hair Removal Kumis Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            147 =>
            array(
                'code' => 'NOVAHRJAM',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 148,
                'brand_id' => '1',
                'name' => 'Nova Hair Removal Jambang',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            148 =>
            array(
                'code' => 'NOVAHRJEN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 149,
                'brand_id' => '1',
                'name' => 'Nova Hair Removal Jenggot',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            149 =>
            array(
                'code' => 'OXYACNE',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 150,
                'brand_id' => '1',
                'name' => 'Oxygen Botanical Acne',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            150 =>
            array(
                'code' => 'OXYBRIGHT',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 151,
                'brand_id' => '1',
                'name' => 'Oxygen Botanical Brightening',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            151 =>
            array(
                'code' => 'OXYREJUV',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 152,
                'brand_id' => '1',
                'name' => 'Oxygen Botanical Rejuvenation',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            152 =>
            array(
                'code' => 'OXYBRIGHTEX',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 153,
                'brand_id' => '1',
                'name' => 'OXY BRIGHT EXPRESS',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            153 =>
            array(
                'code' => 'CRYO',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 154,
                'brand_id' => '1',
                'name' => 'CRYO',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            154 =>
            array(
                'code' => 'CRYOAA',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 155,
                'brand_id' => '1',
                'name' => 'CRYO Anti Aging',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            155 =>
            array(
                'code' => 'CRYOAAP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 156,
                'brand_id' => '1',
                'name' => 'CRYO Anti Aging Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            156 =>
            array(
                'code' => 'CRYOAAP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 157,
                'brand_id' => '1',
                'name' => 'CRYO Anti Aging paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            157 =>
            array(
                'code' => 'CRYOAAP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 158,
                'brand_id' => '1',
                'name' => 'CRYO Anti Aging Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            158 =>
            array(
                'code' => 'CRYOAAP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 159,
                'brand_id' => '1',
                'name' => 'CRYO Anti Aging Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            159 =>
            array(
                'code' => 'LATACNE1P8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 160,
                'brand_id' => '1',
                'name' => 'LAT Acne Grade 1 Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            160 =>
            array(
                'code' => 'LATACNE1P8X',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 161,
                'brand_id' => '1',
                'name' => 'LAT Acne Grade 1 Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            161 =>
            array(
                'code' => 'LATACNE23P8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 162,
                'brand_id' => '1',
                'name' => 'LAT Acne Grade 2/3 Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            162 =>
            array(
                'code' => 'LATACNE23P8X',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 163,
                'brand_id' => '1',
                'name' => 'LAT Acne Grade 2/3 Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            163 =>
            array(
                'code' => 'LATB',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 164,
                'brand_id' => '1',
                'name' => 'Light Activated Therapy Blue',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            164 =>
            array(
                'code' => 'LATBEX',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 165,
                'brand_id' => '1',
                'name' => 'LATBEX',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            165 =>
            array(
                'code' => 'LATBRIGHTP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 166,
                'brand_id' => '1',
                'name' => 'LAT Hiperpigmentation Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            166 =>
            array(
                'code' => 'LATBRIGHTP8X',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 167,
                'brand_id' => '1',
                'name' => 'LAT Brightening Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            167 =>
            array(
                'code' => 'LATIR',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 168,
                'brand_id' => '1',
                'name' => 'Light Activated Therapy Infrared',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            168 =>
            array(
                'code' => 'LATIREX',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 169,
                'brand_id' => '1',
                'name' => 'LATIREX',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            169 =>
            array(
                'code' => 'LATR',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 170,
                'brand_id' => '1',
                'name' => 'Light Activated Therapy Red',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            170 =>
            array(
                'code' => 'LATREJUVP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 171,
                'brand_id' => '1',
                'name' => 'LAT Rejuvenation Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            171 =>
            array(
                'code' => 'LATREJUVP8X',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 172,
                'brand_id' => '1',
                'name' => 'LAT Rejuvenation Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            172 =>
            array(
                'code' => 'LATREX',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 173,
                'brand_id' => '1',
                'name' => 'LATREX',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            173 =>
            array(
                'code' => 'LATRHAIR',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 174,
                'brand_id' => '1',
                'name' => 'Hair Light Activated Therapy Red',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            174 =>
            array(
                'code' => 'LATRHAIRP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 175,
                'brand_id' => '1',
                'name' => 'Hair Light Activated Therapy Red Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            175 =>
            array(
                'code' => 'LATRHAIRP8X',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 176,
                'brand_id' => '1',
                'name' => 'Hair Light Activated Therapy Red Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            176 =>
            array(
                'code' => 'IRFEYEBAG',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 177,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Eyebag',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            177 =>
            array(
                'code' => 'IRFEYEBAGP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 178,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Eyebag Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            178 =>
            array(
                'code' => 'IRFEYEBAGP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 179,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Eyebag paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            179 =>
            array(
                'code' => 'IRFEYEBAGP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 180,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Eyebag Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            180 =>
            array(
                'code' => 'IRFEYEBAGP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 181,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Eyebag Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            181 =>
            array(
                'code' => 'IRFWAJAH',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 182,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Wajah',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            182 =>
            array(
                'code' => 'IRFWAJAHP12',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 183,
                'brand_id' => '1',
                'name' => 'IRF Wajah Paket 12',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            183 =>
            array(
                'code' => 'IRFWAJAHP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 184,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Wajah Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            184 =>
            array(
                'code' => 'IRFWAJAHP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 185,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Wajah paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            185 =>
            array(
                'code' => 'IRFWAJAHP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 186,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Wajah Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            186 =>
            array(
                'code' => 'IRFWAJAHP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 187,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Wajah Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            187 =>
            array(
                'code' => 'MESOWON',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 188,
                'brand_id' => '1',
                'name' => 'Mesotherapy Modern Without Needle',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            188 =>
            array(
                'code' => 'MESOWONM',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 189,
                'brand_id' => '1',
                'name' => 'Mesotherapy Modern Without Needle For Melasma',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            189 =>
            array(
                'code' => 'MESOWONMP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 190,
                'brand_id' => '1',
                'name' => 'Mesotherapy Modern Without Needle For Melasma Paket3',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            190 =>
            array(
                'code' => 'MESOWONMP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 191,
                'brand_id' => '1',
                'name' => 'Mesotherapy Modern Without Needle For Melasma paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            191 =>
            array(
                'code' => 'MESOWONMP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 192,
                'brand_id' => '1',
                'name' => 'Mesotherapy Modern Without Needle For Melasma Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            192 =>
            array(
                'code' => 'MESOWONMP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 193,
                'brand_id' => '1',
                'name' => 'Mesotherapy Modern Without Needle For Melasma Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            193 =>
            array(
                'code' => 'MESOWONP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 194,
                'brand_id' => '1',
                'name' => 'Mesotherapy Modern Without Needle Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            194 =>
            array(
                'code' => 'MESOWONP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 195,
                'brand_id' => '1',
                'name' => 'Mesotherapy Modern Without Needle paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            195 =>
            array(
                'code' => 'MESOWONP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 196,
                'brand_id' => '1',
                'name' => 'Mesotherapy Modern Without Needle Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            196 =>
            array(
                'code' => 'MESOWONP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 197,
                'brand_id' => '1',
                'name' => 'Mesotherapy Modern Without Needle Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            197 =>
            array(
                'code' => 'RADIOD',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 198,
                'brand_id' => '1',
                'name' => 'Radioderm Frequency',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            198 =>
            array(
                'code' => 'RADIODP12',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 199,
                'brand_id' => '1',
                'name' => 'Radioderm Paket 12',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            199 =>
            array(
                'code' => 'RADIODP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 200,
                'brand_id' => '1',
                'name' => 'Radioderm Frequency Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            200 =>
            array(
                'code' => 'RADIODP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 201,
                'brand_id' => '1',
                'name' => 'Radioderm Frequency Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            201 =>
            array(
                'code' => 'RADIODP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 202,
                'brand_id' => '1',
                'name' => 'Radioderm Frequency Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            202 =>
            array(
                'code' => 'TRIPRF',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 203,
                'brand_id' => '1',
                'name' => 'Tripollar Radio Frequency',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            203 =>
            array(
                'code' => 'TRIPRFP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 204,
                'brand_id' => '1',
                'name' => 'Tripollar Radio Frequency Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            204 =>
            array(
                'code' => 'TRIPRFP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 205,
                'brand_id' => '1',
                'name' => 'Tripollar Radio Frequency Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            205 =>
            array(
                'code' => 'TRIPRFP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 206,
                'brand_id' => '1',
                'name' => 'Tripollar Radio Frequency Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            206 =>
            array(
                'code' => 'RADIODBREAST',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 207,
                'brand_id' => '1',
                'name' => 'Radioderm Breast',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            207 =>
            array(
                'code' => 'RADIODBREASTP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 208,
                'brand_id' => '1',
                'name' => 'Radioderm Breast Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            208 =>
            array(
                'code' => 'RADIODBREASTP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 209,
                'brand_id' => '1',
                'name' => 'Radioderm Breast Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            209 =>
            array(
                'code' => 'RADIODBREASTP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 210,
                'brand_id' => '1',
                'name' => 'Radioderm Breast Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            210 =>
            array(
                'code' => 'TRIPRFBREAST',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 211,
                'brand_id' => '1',
                'name' => 'Tripollar RF Breast',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            211 =>
            array(
                'code' => 'TRIPRFBREASTP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 212,
                'brand_id' => '1',
                'name' => 'Tripollar RF Breast Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            212 =>
            array(
                'code' => 'TRIPRFBREASTP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 213,
                'brand_id' => '1',
                'name' => 'Tripollar RF Breast Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            213 =>
            array(
                'code' => 'TRIPRFBREASTP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 214,
                'brand_id' => '1',
                'name' => 'Tripollar RF Breast Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            214 =>
            array(
                'code' => 'AQUAMESOABD',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 215,
                'brand_id' => '1',
                'name' => 'AQUAMESOABD ',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            215 =>
            array(
                'code' => 'AQUAMESOABDP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 216,
                'brand_id' => '1',
                'name' => 'AQUAMESOABD PAKET',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            216 =>
            array(
                'code' => 'AQUAMESOABDP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 217,
                'brand_id' => '1',
                'name' => 'AQUAMESOABD PAKET PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            217 =>
            array(
                'code' => 'AQUAMESOABDP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 218,
                'brand_id' => '1',
                'name' => 'AQUAMESOABD PAKET PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            218 =>
            array(
                'code' => 'AQUAMESOABDP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 219,
                'brand_id' => '1',
                'name' => 'AQUAMESOABD PAKET 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            219 =>
            array(
                'code' => 'DIMPEELABD',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 220,
                'brand_id' => '1',
                'name' => 'DIMPEELABD',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            220 =>
            array(
                'code' => 'JPEELABD',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 221,
                'brand_id' => '1',
                'name' => 'Jetpeel Perut',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            221 =>
            array(
                'code' => 'JPEELABDP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 222,
                'brand_id' => '1',
                'name' => 'Jetpeel Perut Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            222 =>
            array(
                'code' => 'JPEELABDP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 223,
                'brand_id' => '1',
                'name' => 'Jetpeel Perut paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            223 =>
            array(
                'code' => 'JPEELABDP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 224,
                'brand_id' => '1',
                'name' => 'Jetpeel Perut Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            224 =>
            array(
                'code' => 'JPEELABDP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 225,
                'brand_id' => '1',
                'name' => 'Jetpeel Perut Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            225 =>
            array(
                'code' => 'MESOABD',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 226,
                'brand_id' => '1',
                'name' => 'Meso Body Perut',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            226 =>
            array(
                'code' => 'MESOABDP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 227,
                'brand_id' => '1',
                'name' => 'MESO BODY PERUT PAKET',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            227 =>
            array(
                'code' => 'MESOABDP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 228,
                'brand_id' => '1',
                'name' => 'MESO BODY PERUT PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            228 =>
            array(
                'code' => 'MESOABDP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 229,
                'brand_id' => '1',
                'name' => 'MESO BODY PERUT PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            229 =>
            array(
                'code' => 'MESOABDP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 230,
                'brand_id' => '1',
                'name' => 'MESO BODY PERUT PAKET 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            230 =>
            array(
                'code' => 'NOVABDSM',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 231,
                'brand_id' => '1',
                'name' => 'Nova Body Stretch Mark',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            231 =>
            array(
                'code' => 'AIRDIS',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 232,
                'brand_id' => '1',
                'name' => 'AIRDIS',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            232 =>
            array(
                'code' => 'HIFUEYE',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 233,
                'brand_id' => '1',
                'name' => 'HIFU EYE',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            233 =>
            array(
                'code' => 'HIFUEYEP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 234,
                'brand_id' => '1',
                'name' => 'HIFU EYE Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            234 =>
            array(
                'code' => 'HIFUEYEP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 235,
                'brand_id' => '1',
                'name' => 'HIFU EYE paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            235 =>
            array(
                'code' => 'HIFUEYEP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 236,
                'brand_id' => '1',
                'name' => 'HIFU EYE Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            236 =>
            array(
                'code' => 'ULTHERAEYE',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 237,
                'brand_id' => '1',
                'name' => 'Ulthera Eye Bag',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            237 =>
            array(
                'code' => 'AQUAMESOEYE',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 238,
                'brand_id' => '1',
                'name' => 'AQUAMESOEYE ',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            238 =>
            array(
                'code' => 'AQUAMESOEYEP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 239,
                'brand_id' => '1',
                'name' => 'AQUAMESOEYE PAKET',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            239 =>
            array(
                'code' => 'AQUAMESOEYEP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 240,
                'brand_id' => '1',
                'name' => 'AQUAMESOEYE PAKET PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            240 =>
            array(
                'code' => 'AQUAMESOEYEP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 241,
                'brand_id' => '1',
                'name' => 'AQUAMESOEYE PAKET PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            241 =>
            array(
                'code' => 'AQUAMESOEYEP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 242,
                'brand_id' => '1',
                'name' => 'AQUAMESOEYE PAKET PAKET 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            242 =>
            array(
                'code' => 'ULTHERABROWEYE',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 243,
                'brand_id' => '1',
                'name' => 'Ulthera Brow Lift and Eye Bag',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            243 =>
            array(
                'code' => 'MESOEYE',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 244,
                'brand_id' => '1',
                'name' => 'MESOEYE',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            244 =>
            array(
                'code' => 'MESOEYEP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 245,
                'brand_id' => '1',
                'name' => 'MESOEYEP3',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            245 =>
            array(
                'code' => 'MESOEYEP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 246,
                'brand_id' => '1',
                'name' => 'MESOEYEP4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            246 =>
            array(
                'code' => 'MESOEYEP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 247,
                'brand_id' => '1',
                'name' => 'MESOEYEP6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            247 =>
            array(
                'code' => 'MESOEYEP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 248,
                'brand_id' => '1',
                'name' => 'MESOEYEP8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            248 =>
            array(
                'code' => 'DIMPEELBUTT',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 249,
                'brand_id' => '1',
                'name' => 'DIMPEELBUTT',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            249 =>
            array(
                'code' => 'DIMPEELBUTTP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 250,
                'brand_id' => '1',
                'name' => 'DIMPEELBUTTP3',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            250 =>
            array(
                'code' => 'DIMPEELBUTTP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 251,
                'brand_id' => '1',
                'name' => 'DIMPEELBUTTP4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            251 =>
            array(
                'code' => 'DIMPEELBUTTP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 252,
                'brand_id' => '1',
                'name' => 'DIMPEELBUTTP6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            252 =>
            array(
                'code' => 'DIMPEELBUTTP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 253,
                'brand_id' => '1',
                'name' => 'DIMPEELBUTTP8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            253 =>
            array(
                'code' => 'HIFUBUTTOCK',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 254,
                'brand_id' => '1',
                'name' => 'HIFUBUTTOCK',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            254 =>
            array(
                'code' => 'HIFUBUTTOCKP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 255,
                'brand_id' => '1',
                'name' => 'HIFUBUTTOCKP3',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            255 =>
            array(
                'code' => 'HIFUBUTTOCKP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 256,
                'brand_id' => '1',
                'name' => 'HIFUBUTTOCKP4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            256 =>
            array(
                'code' => 'HIFUBUTTOCKP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 257,
                'brand_id' => '1',
                'name' => 'HIFUBUTTOCKP6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            257 =>
            array(
                'code' => 'IPLHRPUBIS',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 258,
                'brand_id' => '1',
                'name' => 'IPLHRPUBIS',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            258 =>
            array(
                'code' => 'IPLHRPUBISP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 259,
                'brand_id' => '1',
                'name' => 'IPLHRPUBISP3',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            259 =>
            array(
                'code' => 'IPLHRPUBISP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 260,
                'brand_id' => '1',
                'name' => 'IPLHRPUBISP4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            260 =>
            array(
                'code' => 'IPLHRPUBISP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 261,
                'brand_id' => '1',
                'name' => 'IPLHRPUBISP6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            261 =>
            array(
                'code' => 'IPLHRPUBISP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 262,
                'brand_id' => '1',
                'name' => 'IPLHRPUBISP8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            262 =>
            array(
                'code' => 'INJA',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 263,
                'brand_id' => '1',
                'name' => 'Injeksi Acne 0 - 0',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            263 =>
            array(
                'code' => 'INJAO',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 264,
                'brand_id' => '1',
                'name' => 'Injeksi Anti Oksidan',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            264 =>
            array(
                'code' => 'INJAOP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 265,
                'brand_id' => '1',
                'name' => 'Injeksi Anti Oksidan Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            265 =>
            array(
                'code' => 'INJAOP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 266,
                'brand_id' => '1',
                'name' => 'Injeksi Anti Oksidan paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            266 =>
            array(
                'code' => 'INJAOP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 267,
                'brand_id' => '1',
                'name' => 'Injeksi Anti Oksidan Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            267 =>
            array(
                'code' => 'INJAOP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 268,
                'brand_id' => '1',
                'name' => 'Injeksi Anti Oksidan Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            268 =>
            array(
                'code' => 'INJB',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 269,
                'brand_id' => '1',
                'name' => 'Injeksi Acne 0',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            269 =>
            array(
                'code' => 'INFAOPREM',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 270,
                'brand_id' => '1',
                'name' => 'INFUS ANTIOKSIDAN PREMIUM',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            270 =>
            array(
                'code' => 'INFAOPREMPLUS',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 271,
                'brand_id' => '1',
                'name' => 'INFAOPREMPLUS',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            271 =>
            array(
                'code' => 'INFAOPREMP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 272,
                'brand_id' => '1',
                'name' => 'INFUS ANTIOKSIDAN PREMIUM PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            272 =>
            array(
                'code' => 'INFAOPREMP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 273,
                'brand_id' => '1',
                'name' => 'INFUS ANTIOKSIDAN PREMIUM PAKET 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            273 =>
            array(
                'code' => 'INFAOPREMP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 274,
                'brand_id' => '1',
                'name' => 'INFUS ANTIOKSIDAN PREMIUM PAKET 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            274 =>
            array(
                'code' => 'INJCTD',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 275,
                'brand_id' => '1',
                'name' => 'Injeksi Cortidex',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            275 =>
            array(
                'code' => 'NPACNEL',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 276,
                'brand_id' => '1',
                'name' => 'NPACNEL',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            276 =>
            array(
                'code' => 'NPACNEN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 277,
                'brand_id' => '1',
                'name' => 'NPACNEN',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            277 =>
            array(
                'code' => 'NPDAISYN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 278,
                'brand_id' => '1',
                'name' => 'NPDAISYN',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            278 =>
            array(
                'code' => 'NPGL1N',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 279,
                'brand_id' => '1',
                'name' => 'Botanical Peeling Lightening 1 Leher',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            279 =>
            array(
                'code' => 'NPGL2N',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 280,
                'brand_id' => '1',
                'name' => 'Botanical Peeling Lightening 2 Leher',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            280 =>
            array(
                'code' => 'NPGLPN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 281,
                'brand_id' => '1',
                'name' => 'BOTANICAL PEELING GLP LEHER',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            281 =>
            array(
                'code' => 'NPMJPN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 282,
                'brand_id' => '1',
                'name' => 'NP MJP LEHER',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            282 =>
            array(
                'code' => 'NPMLBN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 283,
                'brand_id' => '1',
                'name' => 'Botanical Peeling Brightening Leher',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            283 =>
            array(
                'code' => 'NPMLWN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 284,
                'brand_id' => '1',
                'name' => 'BOTANICAL PEELING MLW LEHER',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            284 =>
            array(
                'code' => 'NPYPN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 285,
                'brand_id' => '1',
                'name' => 'NPYPN',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            285 =>
            array(
                'code' => 'NCPACNEWBRIGHTN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 286,
                'brand_id' => '1',
                'name' => 'NCPACNEWBRIGHTN',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            286 =>
            array(
                'code' => 'NCPACNEWBRIGHTND',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 287,
                'brand_id' => '1',
                'name' => 'NCPACNEWBRIGHTND',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            287 =>
            array(
                'code' => 'NCPACNEWN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 288,
                'brand_id' => '1',
                'name' => 'Natasha Botanical Facial Acne Wajah Leher',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            288 =>
            array(
                'code' => 'NCPACNEWND',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 289,
                'brand_id' => '1',
                'name' => 'Natasha Botanical Facial Acne Wajah Leher Dada',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            289 =>
            array(
                'code' => 'NCPACNEWREJUVN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 290,
                'brand_id' => '1',
                'name' => 'NCPACNEWREJUVN',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            290 =>
            array(
                'code' => 'NCPACNEWREJUVND',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 291,
                'brand_id' => '1',
                'name' => 'NCPACNEWREJUVND',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            291 =>
            array(
                'code' => 'NCPBRIGHTN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 292,
                'brand_id' => '1',
                'name' => 'NCPBRIGHTN',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            292 =>
            array(
                'code' => 'NCPBRIGHTWACNEN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 293,
                'brand_id' => '1',
                'name' => 'NCPBRIGHTWACNEN',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            293 =>
            array(
                'code' => 'NCPBRIGHTWACNEND',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 294,
                'brand_id' => '1',
                'name' => 'NCPBRIGHTWACNEND',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            294 =>
            array(
                'code' => 'NCPBRIGHTWN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 295,
                'brand_id' => '1',
                'name' => 'Natasha Botanical Facial Brightening Wajah Leher',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            295 =>
            array(
                'code' => 'NCPBRIGHTWND',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 296,
                'brand_id' => '1',
                'name' => 'Natasha Botanical Facial Brightening Wajah Leher Dada',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            296 =>
            array(
                'code' => 'NCPBRIGHTWREJUVN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 297,
                'brand_id' => '1',
                'name' => 'NCPBRIGHTWREJUVN',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            297 =>
            array(
                'code' => 'NCPBRIGHTWREJUVND',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 298,
                'brand_id' => '1',
                'name' => 'NCPBRIGHTWREJUVND',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            298 =>
            array(
                'code' => 'NCPREJUVN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 299,
                'brand_id' => '1',
                'name' => 'NCPREJUVN',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            299 =>
            array(
                'code' => 'NCPREJUVWACNEN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 300,
                'brand_id' => '1',
                'name' => 'NCPREJUVWACNEN',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            300 =>
            array(
                'code' => 'NCPREJUVWACNEND',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 301,
                'brand_id' => '1',
                'name' => 'NCPREJUVWACNEND',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            301 =>
            array(
                'code' => 'NCPREJUVWBRIGHTN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 302,
                'brand_id' => '1',
                'name' => 'NCPREJUVWBRIGHTN',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            302 =>
            array(
                'code' => 'NCPREJUVWBRIGHTND',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 303,
                'brand_id' => '1',
                'name' => 'NCPREJUVWBRIGHTND',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            303 =>
            array(
                'code' => 'NCPREJUVWN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 304,
                'brand_id' => '1',
                'name' => 'Natasha Botanical Facial Rejuv Wajah Leher',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            304 =>
            array(
                'code' => 'NCPREJUVWND',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 305,
                'brand_id' => '1',
                'name' => 'Natasha Botanical Facial Rejuv Wajah Leher Dada',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            305 =>
            array(
                'code' => 'JPAANECK',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 306,
                'brand_id' => '1',
                'name' => 'JET PEELING ANTI AGING NECK',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            306 =>
            array(
                'code' => 'JPAANECKP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 307,
                'brand_id' => '1',
                'name' => 'Jet Peeling Anti Aging Neck paket4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            307 =>
            array(
                'code' => 'JPAANECKP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 308,
                'brand_id' => '1',
                'name' => 'Jet Peeling Anti Aging Neck Paket6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            308 =>
            array(
                'code' => 'JPAANECKP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 309,
                'brand_id' => '1',
                'name' => 'Jet Peeling Anti Aging Neck Paket8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            309 =>
            array(
                'code' => 'JPBRIGHTNECK',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 310,
                'brand_id' => '1',
                'name' => 'JET PEELING BRIGHTENING NECK',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            310 =>
            array(
                'code' => 'JPBRIGHTNECKP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 311,
                'brand_id' => '1',
                'name' => 'Jet Peeling Brightening Neck paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            311 =>
            array(
                'code' => 'JPBRIGHTNECKP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 312,
                'brand_id' => '1',
                'name' => 'Jet Peeling Brightening Neck Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            312 =>
            array(
                'code' => 'JPBRIGHTNECKP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 313,
                'brand_id' => '1',
                'name' => 'Jet Peeling Brightening Neck Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            313 =>
            array(
                'code' => 'MESOAANECK',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 314,
                'brand_id' => '1',
                'name' => 'MESOLIFT ANTI AGING NECK',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            314 =>
            array(
                'code' => 'MESOAANECKP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 315,
                'brand_id' => '1',
                'name' => 'Mesolift Anti Aging Neck Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            315 =>
            array(
                'code' => 'MESOAANECKP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 316,
                'brand_id' => '1',
                'name' => 'Mesolift Anti Aging Neck Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            316 =>
            array(
                'code' => 'MESOAANECKP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 317,
                'brand_id' => '1',
                'name' => 'Mesolift Anti Aging Neck Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            317 =>
            array(
                'code' => 'OXYACNEN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 318,
                'brand_id' => '1',
                'name' => 'Oxygen Botanical Acne Leher',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            318 =>
            array(
                'code' => 'OXYBRIGHTN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 319,
                'brand_id' => '1',
                'name' => 'Oxygen Botanical Brightening Leher',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            319 =>
            array(
                'code' => 'OXYREJUVN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 320,
                'brand_id' => '1',
                'name' => 'Oxygen Botanical Rejuvenation Leher',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            320 =>
            array(
                'code' => 'WDPBRTNECK',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 321,
                'brand_id' => '1',
                'name' => 'WET DIAMOND PEEL FOR BRIGHTENING NECK',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            321 =>
            array(
                'code' => 'WDPBRTNECKP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 322,
                'brand_id' => '1',
                'name' => 'Wet Diamond Peel For Brightening Neck paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            322 =>
            array(
                'code' => 'WDPBRTNECKP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 323,
                'brand_id' => '1',
                'name' => 'Wet Diamond Peel For Brightening Neck Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            323 =>
            array(
                'code' => 'WDPBRTNECKP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 324,
                'brand_id' => '1',
                'name' => 'Wet Diamond Peel For Brightening Neck Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            324 =>
            array(
                'code' => 'WDPREJUNECK',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 325,
                'brand_id' => '1',
                'name' => 'WET DIAMOND PEEL FOR REJUVENATION NECK',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            325 =>
            array(
                'code' => 'WDPREJUNECKP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 326,
                'brand_id' => '1',
                'name' => 'Wet Diamond Peel for Rejuvenation Neck paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            326 =>
            array(
                'code' => 'WDPREJUNECKP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 327,
                'brand_id' => '1',
                'name' => 'Wet Diamond Peel for Rejuvenation Neck Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            327 =>
            array(
                'code' => 'WDPREJUNECKP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 328,
                'brand_id' => '1',
                'name' => 'Wet Diamond Peel for Rejuvenation Neck Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            328 =>
            array(
                'code' => 'MICROOXYBRIGHTN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 329,
                'brand_id' => '1',
                'name' => 'Micro Oxygen Brightening Leher',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            329 =>
            array(
                'code' => 'MICROOXYBRIGHTWN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 330,
                'brand_id' => '2',
                'name' => 'Micro Oxygen Brightening Wajah Leher',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            330 =>
            array(
                'code' => 'MICROOXYREJUVN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 331,
                'brand_id' => '1',
                'name' => 'Micro Oxygen Rejuvenation Leher',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            331 =>
            array(
                'code' => 'MICROOXYREJUVWN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 332,
                'brand_id' => '1',
                'name' => 'Micro Oxygen Rejuvenation Wajah Leher',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            332 =>
            array(
                'code' => 'HIFUFULLNECK',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 333,
                'brand_id' => '1',
                'name' => 'HIFU FULL NECK',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            333 =>
            array(
                'code' => 'HIFUFULLNECKP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 334,
                'brand_id' => '1',
                'name' => 'HIFU FULL NECK Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            334 =>
            array(
                'code' => 'HIFUFULLNECKP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 335,
                'brand_id' => '1',
                'name' => 'HIFU FULL NECK paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            335 =>
            array(
                'code' => 'HIFUFULLNECKP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 336,
                'brand_id' => '1',
                'name' => 'HIFU FULL NECK Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            336 =>
            array(
                'code' => 'HIFULOWNECK',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 337,
                'brand_id' => '1',
                'name' => 'HIFU LOWER NECK',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            337 =>
            array(
                'code' => 'HIFULOWNECKP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 338,
                'brand_id' => '1',
                'name' => 'HIFU LOWER NECK Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            338 =>
            array(
                'code' => 'HIFULOWNECKP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 339,
                'brand_id' => '1',
                'name' => 'HIFU LOWER NECK paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            339 =>
            array(
                'code' => 'HIFULOWNECKP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 340,
                'brand_id' => '1',
                'name' => 'HIFU LOWER NECK Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            340 =>
            array(
                'code' => 'HIFUUPNECK',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 341,
                'brand_id' => '1',
                'name' => 'HIFU UP NECK',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            341 =>
            array(
                'code' => 'HIFUUPNECKP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 342,
                'brand_id' => '1',
                'name' => 'HIFU UP NECK Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            342 =>
            array(
                'code' => 'HIFUUPNECKP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 343,
                'brand_id' => '1',
                'name' => 'HIFU UP NECK paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            343 =>
            array(
                'code' => 'HIFUUPNECKP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 344,
                'brand_id' => '1',
                'name' => 'HIFU UP NECK Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            344 =>
            array(
                'code' => 'ULTHERALOWNECK',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 345,
                'brand_id' => '1',
                'name' => 'Ulthera Lower Neck',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            345 =>
            array(
                'code' => 'MICROOXYBRIGHTN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 346,
                'brand_id' => '2',
                'name' => 'Micro Oxygen Brightening Leher',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            346 =>
            array(
                'code' => 'MICROOXYBRIGHTWN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 347,
                'brand_id' => '1',
                'name' => 'Micro Oxygen Brightening Wajah Leher',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            347 =>
            array(
                'code' => 'MICROOXYREJUVN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 348,
                'brand_id' => '2',
                'name' => 'Micro Oxygen Rejuvenation Leher',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            348 =>
            array(
                'code' => 'MICROOXYREJUVWN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 349,
                'brand_id' => '2',
                'name' => 'Micro Oxygen Rejuvenation Wajah Leher',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            349 =>
            array(
                'code' => 'ULTHERANECK',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 350,
                'brand_id' => '1',
                'name' => 'Ulthera Full Neck',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            350 =>
            array(
                'code' => 'AQUAMESOHAIR',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 351,
                'brand_id' => '1',
                'name' => 'AQUAMESOHAIR',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            351 =>
            array(
                'code' => 'AQUAMESOHAIRDANDP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 352,
                'brand_id' => '1',
                'name' => 'AQUAMESOHAIRDANDRUFF PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            352 =>
            array(
                'code' => 'AQUAMESOHAIRDANDP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 353,
                'brand_id' => '1',
                'name' => 'AQUAMESOHAIRDANDRUFF PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            353 =>
            array(
                'code' => 'AQUAMESOHAIRDANDP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 354,
                'brand_id' => '1',
                'name' => 'AQUAMESOHAIRDANDRUFF PAKET 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            354 =>
            array(
                'code' => 'AQUAMESOHAIRDANDRUFF',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 355,
                'brand_id' => '1',
                'name' => 'AQUAMESOHAIRDANDRUFF',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            355 =>
            array(
                'code' => 'AQUAMESOHAIRDANDRUFFP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 356,
                'brand_id' => '1',
                'name' => 'AQUAMESOHAIRDANDRUFF Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            356 =>
            array(
                'code' => 'AQUAMESOHAIRGREY',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 357,
                'brand_id' => '1',
                'name' => 'AQUAMESOHAIRGREY',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            357 =>
            array(
                'code' => 'AQUAMESOHAIRGREYP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 358,
                'brand_id' => '1',
                'name' => 'AQUAMESOHAIRGREY Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            358 =>
            array(
                'code' => 'AQUAMESOHAIRGREYP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 359,
                'brand_id' => '1',
                'name' => 'AQUAMESOHAIRGREY PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            359 =>
            array(
                'code' => 'AQUAMESOHAIRGREYP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 360,
                'brand_id' => '1',
                'name' => 'AQUAMESOHAIRGREY PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            360 =>
            array(
                'code' => 'AQUAMESOHAIRGREYP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 361,
                'brand_id' => '1',
                'name' => 'AQUAMESOHAIRGREY PAKET 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            361 =>
            array(
                'code' => 'AQUAMESOHAIRP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 362,
                'brand_id' => '1',
                'name' => 'AQUAMESOHAIR Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            362 =>
            array(
                'code' => 'AQUAMESOHAIRP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 363,
                'brand_id' => '1',
                'name' => 'AQUAMESOHAIR PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            363 =>
            array(
                'code' => 'AQUAMESOHAIRP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 364,
                'brand_id' => '1',
                'name' => 'AQUAMESOHAIR PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            364 =>
            array(
                'code' => 'AQUAMESOHAIRP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 365,
                'brand_id' => '1',
                'name' => 'AQUAMESOHAIR PAKET 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            365 =>
            array(
                'code' => 'AQUAMESOPRPHAIR',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 366,
                'brand_id' => '1',
                'name' => 'AQUAMESOPRPHAIR',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            366 =>
            array(
                'code' => 'AQUAMESOPRPHAIRP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 367,
                'brand_id' => '1',
                'name' => 'AQUAMESOPRPHAIR Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            367 =>
            array(
                'code' => 'AQUAMESOPRPHAIRP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 368,
                'brand_id' => '1',
                'name' => 'AQUAMESOPRPHAIR PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            368 =>
            array(
                'code' => 'AQUAMESOPRPHAIRP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 369,
                'brand_id' => '1',
                'name' => 'AQUAMESOPRPHAIR PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            369 =>
            array(
                'code' => 'DERMAHAIR',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 370,
                'brand_id' => '1',
                'name' => 'DERMA HAIR',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            370 =>
            array(
                'code' => 'DERMAHAIRP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 371,
                'brand_id' => '1',
                'name' => 'DERMAHAIR PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            371 =>
            array(
                'code' => 'DERMAHAIRP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 372,
                'brand_id' => '1',
                'name' => 'DERMAHAIR PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            372 =>
            array(
                'code' => 'DERMAHAIRP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 373,
                'brand_id' => '1',
                'name' => 'DERMAHAIR PAKET 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            373 =>
            array(
                'code' => 'JPHAIR',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 374,
                'brand_id' => '1',
                'name' => 'Natasha Hair Jetpeel',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            374 =>
            array(
                'code' => 'JPHAIRDANDRUFF',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 375,
                'brand_id' => '1',
                'name' => 'Natasha Hair Jetpeel for Dandruff',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            375 =>
            array(
                'code' => 'JPHAIRDANDRUFFP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 376,
                'brand_id' => '1',
                'name' => 'Natasha Hair Jetpeel for Dandruff Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            376 =>
            array(
                'code' => 'JPHAIRDANDRUFFP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 377,
                'brand_id' => '1',
                'name' => 'Natasha Hair Jetpeel for Dandruff paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            377 =>
            array(
                'code' => 'JPHAIRDANDRUFFP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 378,
                'brand_id' => '1',
                'name' => 'Natasha Hair Jetpeel for Dandruff Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            378 =>
            array(
                'code' => 'JPHAIRDANDRUFFP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 379,
                'brand_id' => '1',
                'name' => 'Natasha Hair Jetpeel for Dandruff Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            379 =>
            array(
                'code' => 'JPHAIRGREY',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 380,
                'brand_id' => '1',
                'name' => 'Natasha Hair Jetpeel for Grey Hair',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            380 =>
            array(
                'code' => 'JPHAIRGREYP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 381,
                'brand_id' => '1',
                'name' => 'Natasha Hair Jetpeel for Grey Hair Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            381 =>
            array(
                'code' => 'JPHAIRGREYP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 382,
                'brand_id' => '1',
                'name' => 'Natasha Hair Jetpeel for Grey Hair paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            382 =>
            array(
                'code' => 'JPHAIRGREYP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 383,
                'brand_id' => '1',
                'name' => 'Natasha Hair Jetpeel for Grey Hair Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            383 =>
            array(
                'code' => 'JPHAIRGREYP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 384,
                'brand_id' => '1',
                'name' => 'Natasha Hair Jetpeel for Grey Hair Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            384 =>
            array(
                'code' => 'JPHAIRP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 385,
                'brand_id' => '1',
                'name' => 'Natasha Hair Jetpeel Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            385 =>
            array(
                'code' => 'JPHAIRP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 386,
                'brand_id' => '1',
                'name' => 'Natasha Hair Jetpeel paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            386 =>
            array(
                'code' => 'JPHAIRP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 387,
                'brand_id' => '1',
                'name' => 'Natasha Hair Jetpeel Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            387 =>
            array(
                'code' => 'JPHAIRP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 388,
                'brand_id' => '1',
                'name' => 'Natasha Hair Jetpeel Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            388 =>
            array(
                'code' => 'MESOHAIR',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 389,
                'brand_id' => '1',
                'name' => 'Natasha Hair Mesotherapy',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            389 =>
            array(
                'code' => 'MESOHAIRDANDRUFF',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 390,
                'brand_id' => '1',
                'name' => 'Natasha Hair Mesotherapy for Dandruff',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            390 =>
            array(
                'code' => 'MESOHAIRDANDRUFFP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 391,
                'brand_id' => '1',
                'name' => 'Natasha Hair Mesotherapy for Dandruff Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            391 =>
            array(
                'code' => 'MESOHAIRDANDRUFFP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 392,
                'brand_id' => '1',
                'name' => 'Natasha Hair Mesotherapy for Dandruff Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            392 =>
            array(
                'code' => 'MESOHAIRDANDRUFFP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 393,
                'brand_id' => '1',
                'name' => 'Natasha Hair Mesotherapy for Dandruff Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            393 =>
            array(
                'code' => 'MESOHAIRDANDRUFFP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 394,
                'brand_id' => '1',
                'name' => 'Natasha Hair Mesotherapy for Dandruff Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            394 =>
            array(
                'code' => 'MESOHAIRGREY',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 395,
                'brand_id' => '1',
                'name' => 'Natasha Hair Mesotherapy for Grey Hair',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            395 =>
            array(
                'code' => 'MESOHAIRGREYP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 396,
                'brand_id' => '1',
                'name' => 'Natasha Hair Mesotherapy for Grey Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            396 =>
            array(
                'code' => 'MESOHAIRGREYP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 397,
                'brand_id' => '1',
                'name' => 'Natasha Hair Mesotherapy for Grey Hair Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            397 =>
            array(
                'code' => 'MESOHAIRGREYP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 398,
                'brand_id' => '1',
                'name' => 'Natasha Hair Mesotherapy for Grey Hair Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            398 =>
            array(
                'code' => 'MESOHAIRGREYP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 399,
                'brand_id' => '1',
                'name' => 'Natasha Hair Mesotherapy for Grey Hair Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            399 =>
            array(
                'code' => 'MESOHAIRP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 400,
                'brand_id' => '1',
                'name' => 'Natasha Hair Mesotherapy Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            400 =>
            array(
                'code' => 'MESOHAIRP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 401,
                'brand_id' => '1',
                'name' => 'Natasha Hair Mesotherapy Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            401 =>
            array(
                'code' => 'MESOHAIRP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 402,
                'brand_id' => '1',
                'name' => 'Natasha Hair Mesotherapy Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            402 =>
            array(
                'code' => 'MESOHAIRP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 403,
                'brand_id' => '1',
                'name' => 'Natasha Hair Mesotherapy Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            403 =>
            array(
                'code' => 'MESOPRPHAIR',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 404,
                'brand_id' => '1',
                'name' => 'MESOPRPHAIR',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            404 =>
            array(
                'code' => 'MESOPRPHAIRP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 405,
                'brand_id' => '1',
                'name' => 'MESOPRPHAIR paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            405 =>
            array(
                'code' => 'MESOPRPHAIRP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 406,
                'brand_id' => '1',
                'name' => 'MESOPRPHAIR PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            406 =>
            array(
                'code' => 'MESOPRPHAIRP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 407,
                'brand_id' => '1',
                'name' => 'MESOPRPHAIR PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            407 =>
            array(
                'code' => 'LATRHAIR',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 408,
                'brand_id' => '2',
                'name' => 'Hair Light Activated Therapy Red',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            408 =>
            array(
                'code' => 'LATRHAIRP',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 409,
                'brand_id' => '1',
                'name' => 'Hair Light Activated Therapy Red Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            409 =>
            array(
                'code' => 'LATRHAIRP8X',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 410,
                'brand_id' => '2',
                'name' => 'Hair Light Activated Therapy Red Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            410 =>
            array(
                'code' => 'IPLREJUV',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 411,
                'brand_id' => '1',
                'name' => 'IPL for Rejuvenation Face',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            411 =>
            array(
                'code' => 'IPLREJUVP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 412,
                'brand_id' => '1',
                'name' => 'IPL for Rejuvenation Face Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            412 =>
            array(
                'code' => 'IPLREJUVP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 413,
                'brand_id' => '1',
                'name' => 'IPL for Rejuvenation Face paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            413 =>
            array(
                'code' => 'IPLREJUVP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 414,
                'brand_id' => '1',
                'name' => 'IPL for Rejuvenation Face Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            414 =>
            array(
                'code' => 'IPLREJUVP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 415,
                'brand_id' => '1',
                'name' => 'IPL for Rejuvenation Face Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            415 =>
            array(
                'code' => 'IPLVASCULAR',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 416,
                'brand_id' => '1',
                'name' => 'IPL FOR VASCULAR',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            416 =>
            array(
                'code' => 'IPLVASCULARP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 417,
                'brand_id' => '1',
                'name' => 'IPL For Vascular Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            417 =>
            array(
                'code' => 'IPLVASCULARP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 418,
                'brand_id' => '1',
                'name' => 'IPL For Vascular Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            418 =>
            array(
                'code' => 'IPLVASCULARP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 419,
                'brand_id' => '1',
                'name' => 'IPL For Vascular Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            419 =>
            array(
                'code' => 'JPAA',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 420,
                'brand_id' => '1',
                'name' => 'Jet Peeling Anti Aging',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            420 =>
            array(
                'code' => 'JPAAP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 421,
                'brand_id' => '1',
                'name' => 'Jet Peeling Anti Aging Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            421 =>
            array(
                'code' => 'JPAAP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 422,
                'brand_id' => '1',
                'name' => 'Jet Peeling Anti Aging paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            422 =>
            array(
                'code' => 'JPAAP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 423,
                'brand_id' => '1',
                'name' => 'Jet Peeling Anti Aging Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            423 =>
            array(
                'code' => 'JPAAP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 424,
                'brand_id' => '1',
                'name' => 'Jet Peeling Anti Aging Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            424 =>
            array(
                'code' => 'JPBRIGHT',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 425,
                'brand_id' => '1',
                'name' => 'Jet Peeling Brightening',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            425 =>
            array(
                'code' => 'JPBRIGHTP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 426,
                'brand_id' => '1',
                'name' => 'Jet Peeling Brightening Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            426 =>
            array(
                'code' => 'JPBRIGHTP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 427,
                'brand_id' => '1',
                'name' => 'Jet Peeling Brightening paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            427 =>
            array(
                'code' => 'JPBRIGHTP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 428,
                'brand_id' => '1',
                'name' => 'Jet Peeling Brightening Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            428 =>
            array(
                'code' => 'JPBRIGHTP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 429,
                'brand_id' => '1',
                'name' => 'Jet Peeling Brightening Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            429 =>
            array(
                'code' => 'JPEEL',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 430,
                'brand_id' => '1',
                'name' => 'Jet Peel',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            430 =>
            array(
                'code' => 'JPEELP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 431,
                'brand_id' => '1',
                'name' => 'Jet Peel Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            431 =>
            array(
                'code' => 'JPEELP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 432,
                'brand_id' => '1',
                'name' => 'Jet Peel paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            432 =>
            array(
                'code' => 'JPEELP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 433,
                'brand_id' => '1',
                'name' => 'Jet Peel Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            433 =>
            array(
                'code' => 'JPEELP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 434,
                'brand_id' => '1',
                'name' => 'Jet Peel Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            434 =>
            array(
                'code' => 'JPEX',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 435,
                'brand_id' => '1',
                'name' => 'JPEX',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            435 =>
            array(
                'code' => 'LDYAC',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 436,
                'brand_id' => '1',
                'name' => 'Laser Dual Yellow Acne',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            436 =>
            array(
                'code' => 'LDYACP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 437,
                'brand_id' => '1',
                'name' => 'Laser Dual Yellow Acne Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            437 =>
            array(
                'code' => 'LDYACP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 438,
                'brand_id' => '1',
                'name' => 'Laser Dual Yellow Acne PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            438 =>
            array(
                'code' => 'LDYACP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 439,
                'brand_id' => '1',
                'name' => 'Laser Dual Yellow Acne Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            439 =>
            array(
                'code' => 'LDYACP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 440,
                'brand_id' => '1',
                'name' => 'Laser Dual Yellow Acne Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            440 =>
            array(
                'code' => 'LSRBV',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 441,
                'brand_id' => '1',
                'name' => 'Laser Blue Vein',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            441 =>
            array(
                'code' => 'LSRCO2',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 442,
                'brand_id' => '1',
                'name' => 'Laser Resurfacing',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            442 =>
            array(
                'code' => 'LSRFRACDAGU',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 443,
                'brand_id' => '1',
                'name' => 'Laser Fractional Dagu',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            443 =>
            array(
                'code' => 'LSRFRACDAGUP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 444,
                'brand_id' => '1',
                'name' => 'Laser Fractional Dagu Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            444 =>
            array(
                'code' => 'LSRFRACDAGUP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 445,
                'brand_id' => '1',
                'name' => 'Laser Fractional Dagu paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            445 =>
            array(
                'code' => 'LSRFRACDAGUP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 446,
                'brand_id' => '1',
                'name' => 'Laser Fractional Dagu Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            446 =>
            array(
                'code' => 'LSRFRACDAGUP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 447,
                'brand_id' => '1',
                'name' => 'Laser Fractional Dagu Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            447 =>
            array(
                'code' => 'LSRFRACDAHI',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 448,
                'brand_id' => '1',
                'name' => 'Laser Fractional Dahi',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            448 =>
            array(
                'code' => 'LSRFRACDAHIP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 449,
                'brand_id' => '1',
                'name' => 'Laser Fractional Dahi Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            449 =>
            array(
                'code' => 'LSRFRACDAHIP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 450,
                'brand_id' => '1',
                'name' => 'Laser Fractional Dahi paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            450 =>
            array(
                'code' => 'LSRFRACDAHIP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 451,
                'brand_id' => '1',
                'name' => 'Laser Fractional Dahi Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            451 =>
            array(
                'code' => 'LSRFRACDAHIP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 452,
                'brand_id' => '1',
                'name' => 'Laser Fractional Dahi Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            452 =>
            array(
                'code' => 'LSRFRACNOSE',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 453,
                'brand_id' => '1',
                'name' => 'Laser Fractional Hidung',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            453 =>
            array(
                'code' => 'LSRFRACNOSEP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 454,
                'brand_id' => '1',
                'name' => 'Laser Fractional Hidung Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            454 =>
            array(
                'code' => 'LSRFRACNOSEP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 455,
                'brand_id' => '1',
                'name' => 'Laser Fractional Hidung paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            455 =>
            array(
                'code' => 'LSRFRACNOSEP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 456,
                'brand_id' => '1',
                'name' => 'Laser Fractional Hidung Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            456 =>
            array(
                'code' => 'LSRFRACNOSEP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 457,
                'brand_id' => '1',
                'name' => 'Laser Fractional Hidung Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            457 =>
            array(
                'code' => 'LSRFRACPIPI',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 458,
                'brand_id' => '1',
                'name' => 'LSRFRACPIPI',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            458 =>
            array(
                'code' => 'LSRFRACPIPIP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 459,
                'brand_id' => '1',
                'name' => 'LSRFRACPIPIP3',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            459 =>
            array(
                'code' => 'LSRFRACPIPIP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 460,
                'brand_id' => '1',
                'name' => 'LSRFRACPIPIP4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            460 =>
            array(
                'code' => 'LSRFRACPIPIP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 461,
                'brand_id' => '1',
                'name' => 'LSRFRACPIPIP6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            461 =>
            array(
                'code' => 'LSRFRACPIPIP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 462,
                'brand_id' => '1',
                'name' => 'LSRFRACPIPIP8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            462 =>
            array(
                'code' => 'LSRFRACWAJAH',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 463,
                'brand_id' => '1',
                'name' => 'Laser Fractional Wajah',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            463 =>
            array(
                'code' => 'LSRFRACWAJAHP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 464,
                'brand_id' => '1',
                'name' => 'Laser Fractional Wajah paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            464 =>
            array(
                'code' => 'LSRFRACWAJAHP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 465,
                'brand_id' => '1',
                'name' => 'Laser Fractional Wajah paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            465 =>
            array(
                'code' => 'LSRFRACWAJAHP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 466,
                'brand_id' => '1',
                'name' => 'Laser Fractional Wajah Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            466 =>
            array(
                'code' => 'LSRFRACWAJAHP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 467,
                'brand_id' => '1',
                'name' => 'Laser Fractional Wajah Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            467 =>
            array(
                'code' => 'LSRGLOWLIPS',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 468,
                'brand_id' => '1',
                'name' => 'LASER GLOWING BIBIR',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            468 =>
            array(
                'code' => 'LSRHRDAGU',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 469,
                'brand_id' => '1',
                'name' => 'Laser Gentle Yag Hair Removal Dagu',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            469 =>
            array(
                'code' => 'LSRHRDAGUP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 470,
                'brand_id' => '1',
                'name' => 'Laser Gentle Yag Hair Removal Dagu Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            470 =>
            array(
                'code' => 'LSRHRDAGUP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 471,
                'brand_id' => '1',
                'name' => 'Laser Gentle Yag Hair Removal Dagu paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            471 =>
            array(
                'code' => 'LSRHRDAGUP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 472,
                'brand_id' => '1',
                'name' => 'Laser Gentle Yag Hair Removal Dagu Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            472 =>
            array(
                'code' => 'LSRPEEL',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 473,
                'brand_id' => '1',
                'name' => 'Laser Peel',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            473 =>
            array(
                'code' => 'LSRPEELP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 474,
                'brand_id' => '1',
                'name' => 'Laser Peel Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            474 =>
            array(
                'code' => 'LSRPEELP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 475,
                'brand_id' => '1',
                'name' => 'Laser Peel paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            475 =>
            array(
                'code' => 'LSRPEELP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 476,
                'brand_id' => '1',
                'name' => 'Laser Peel Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            476 =>
            array(
                'code' => 'LSRPEELP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 477,
                'brand_id' => '1',
                'name' => 'Laser Peel Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            477 =>
            array(
                'code' => 'LSRSPECTRA',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 478,
                'brand_id' => '1',
                'name' => 'Laser Pigmentasi',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            478 =>
            array(
                'code' => 'LSRTIGHT',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 479,
                'brand_id' => '1',
                'name' => 'Laser Pigmentasi',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            479 =>
            array(
                'code' => 'LSRTONINGACNE',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 480,
                'brand_id' => '1',
                'name' => 'Laser Gentle Yag Tightening',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            480 =>
            array(
                'code' => 'LSRGLOWLIPS',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 481,
                'brand_id' => '2',
                'name' => 'LASER GLOWING BIBIR',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            481 =>
            array(
                'code' => 'LSRGLOWLIPSP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 482,
                'brand_id' => '1',
                'name' => 'LASER GLOWING BIBIR PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            482 =>
            array(
                'code' => 'LSRGLOWLIPSP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 483,
                'brand_id' => '1',
                'name' => 'LASER GLOWING BIBIR PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            483 =>
            array(
                'code' => 'LSRGLOWLIPSP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 484,
                'brand_id' => '1',
                'name' => 'LASER GLOWING BIBIR PAKET 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            484 =>
            array(
                'code' => 'LSRTONINGACNE',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 485,
                'brand_id' => '1',
                'name' => 'LASER TONING ACNE ',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            485 =>
            array(
                'code' => 'LSRTONINGACNEP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 486,
                'brand_id' => '1',
                'name' => 'LASER TONING ACNE PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            486 =>
            array(
                'code' => 'LSRTONINGACNEP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 487,
                'brand_id' => '1',
                'name' => 'LASER TONING ACNE PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            487 =>
            array(
                'code' => 'LSRTONINGACNEP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 488,
                'brand_id' => '1',
                'name' => 'LASER TONING ACNE PAKET 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            488 =>
            array(
                'code' => 'LSRTONINGMELASMA',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 489,
                'brand_id' => '1',
                'name' => 'LASER TONING MELASMA',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            489 =>
            array(
                'code' => 'LSRTONINGMELASMAP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 490,
                'brand_id' => '1',
                'name' => 'LASER TONING MELASMA PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            490 =>
            array(
                'code' => 'LSRTONINGMELASMAP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 491,
                'brand_id' => '1',
                'name' => 'LASER TONING MELASMA PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            491 =>
            array(
                'code' => 'LSRTONINGMELASMAP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 492,
                'brand_id' => '1',
                'name' => 'LASER TONING MELASMA PAKET 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            492 =>
            array(
                'code' => 'LSRTONINGREJUVE',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 493,
                'brand_id' => '1',
                'name' => 'LASER TONING REJUVE',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            493 =>
            array(
                'code' => 'LSRTONINGREJUVEP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 494,
                'brand_id' => '1',
                'name' => 'LASER TONING REJUVE PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            494 =>
            array(
                'code' => 'LSRTONINGREJUVEP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 495,
                'brand_id' => '1',
                'name' => 'LASER TONING REJUVE PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            495 =>
            array(
                'code' => 'LSRTONINGREJUVEP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 496,
                'brand_id' => '1',
                'name' => 'LASER TONING REJUVE',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            496 =>
            array(
                'code' => 'LSRTONINGMELASMA',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 497,
                'brand_id' => '2',
                'name' => 'LASER TONING MELASMA',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            497 =>
            array(
                'code' => 'LSRTONINGREJUVE',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 498,
                'brand_id' => '2',
                'name' => 'LASER TONING REJUVE',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            498 =>
            array(
                'code' => 'LSRVASCULAR',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 499,
                'brand_id' => '1',
                'name' => 'LASER GENTLE YAG VASCULAR',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            499 =>
            array(
                'code' => 'LSRVBEAM',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 500,
                'brand_id' => '1',
                'name' => 'Laser VBeam',
                'updated_at' => '2023-03-23 21:19:50',
            ),
        ));
        \DB::table('treatments')->insert(array(
            0 =>
            array(
                'code' => 'MESOAA',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 501,
                'brand_id' => '1',
                'name' => 'Mesolift Anti Aging',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            1 =>
            array(
                'code' => 'MESOAAP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 502,
                'brand_id' => '1',
                'name' => 'Mesolift Anti Aging Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            2 =>
            array(
                'code' => 'MESOAAP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 503,
                'brand_id' => '1',
                'name' => 'Mesolift Anti Aging paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            3 =>
            array(
                'code' => 'MESOAAP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 504,
                'brand_id' => '1',
                'name' => 'Mesolift Anti Aging Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            4 =>
            array(
                'code' => 'MESOAAP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 505,
                'brand_id' => '1',
                'name' => 'Mesolift Anti Aging Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            5 =>
            array(
                'code' => 'MESOBTXBRIGHT',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 506,
                'brand_id' => '1',
                'name' => 'MESOTHERAPY BOTOX BRIGHTENING',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            6 =>
            array(
                'code' => 'MESOBTXBRIGHTP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 507,
                'brand_id' => '1',
                'name' => 'MESOTHERAPY BOTOX BRIGHTENING PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            7 =>
            array(
                'code' => 'MESOBTXBRIGHTP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 508,
                'brand_id' => '1',
                'name' => 'MESOTHERAPY BOTOX BRIGHTENING PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            8 =>
            array(
                'code' => 'MESOBTXBRIGHTP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 509,
                'brand_id' => '1',
                'name' => 'MESOTHERAPY BOTOX BRIGHTENING PAKET 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            9 =>
            array(
                'code' => 'MESOBTXLIFT',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 510,
                'brand_id' => '1',
                'name' => 'MESOTHERAPY BOTOX LIFTING',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            10 =>
            array(
                'code' => 'MESOBTXLIFTP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 511,
                'brand_id' => '1',
                'name' => 'MESOTHERAPY BOTOX LIFTING PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            11 =>
            array(
                'code' => 'MESOBTXLIFTP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 512,
                'brand_id' => '1',
                'name' => 'MESOTHERAPY BOTOX LIFTING PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            12 =>
            array(
                'code' => 'MESOBTXLIFTP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 513,
                'brand_id' => '1',
                'name' => 'MESOTHERAPY BOTOX LIFTING PAKET 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            13 =>
            array(
                'code' => 'MESOBTXP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 514,
                'brand_id' => '1',
                'name' => 'Mesotherapy Botox Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            14 =>
            array(
                'code' => 'MESOBTXP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 515,
                'brand_id' => '1',
                'name' => 'Mesotherapy Botox paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            15 =>
            array(
                'code' => 'MESOBTXP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 516,
                'brand_id' => '1',
                'name' => 'Mesotherapy Botox Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            16 =>
            array(
                'code' => 'MESODOUBLECHIN2',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 517,
                'brand_id' => '1',
                'name' => '5',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            17 =>
            array(
                'code' => 'MESODOUBLECHIN2',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 518,
                'brand_id' => '2',
                'name' => '5P4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            18 =>
            array(
                'code' => 'MESODOUBLECHIN2',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 519,
                'brand_id' => '3',
                'name' => '5P6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            19 =>
            array(
                'code' => 'MESODOUBLECHIN2',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 520,
                'brand_id' => '4',
                'name' => '5P8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            20 =>
            array(
                'code' => 'MESODOUBLECHIN5',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 521,
                'brand_id' => '1',
                'name' => 'MESODOUBLECHIN6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            21 =>
            array(
                'code' => 'MESODOUBLECHIN5P4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 522,
                'brand_id' => '1',
                'name' => 'MESODOUBLECHIN5P4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            22 =>
            array(
                'code' => 'MESODOUBLECHIN5P6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 523,
                'brand_id' => '1',
                'name' => 'MESODOUBLECHIN5P6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            23 =>
            array(
                'code' => 'MESODOUBLECHIN5P8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 524,
                'brand_id' => '1',
                'name' => 'MESODOUBLECHIN5P8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            24 =>
            array(
                'code' => 'MESODOUBLECHIP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 525,
                'brand_id' => '1',
                'name' => 'MESODOUBLECHIP4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            25 =>
            array(
                'code' => 'MESODOUBLECHIP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 526,
                'brand_id' => '1',
                'name' => 'MESODOUBLECHIP6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            26 =>
            array(
                'code' => 'MESODOUBLECHIP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 527,
                'brand_id' => '1',
                'name' => 'MESODOUBLECHIP8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            27 =>
            array(
                'code' => 'MESOMELASMA',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 528,
                'brand_id' => '1',
                'name' => 'Mesolift Melasma',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            28 =>
            array(
                'code' => 'MESOMELASMAP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 529,
                'brand_id' => '1',
                'name' => 'Mesolift Melasma Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            29 =>
            array(
                'code' => 'MESOMELASMAP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 530,
                'brand_id' => '1',
                'name' => 'Mesolift Melasma Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            30 =>
            array(
                'code' => 'MESOMELASMAP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 531,
                'brand_id' => '1',
                'name' => 'Mesolift Melasma Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            31 =>
            array(
                'code' => 'MESOMELASMAP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 532,
                'brand_id' => '1',
                'name' => 'Mesolift Melasma Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            32 =>
            array(
                'code' => 'MESOPRP',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 533,
                'brand_id' => '1',
                'name' => 'MESOPRP',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            33 =>
            array(
                'code' => 'MICROOXYBRIGHT',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 534,
                'brand_id' => '1',
                'name' => 'Micro Oxygen Brightening',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            34 =>
            array(
                'code' => 'MICROOXYREJUV',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 535,
                'brand_id' => '1',
                'name' => 'Micro Oxygen Rejuvenation',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            35 =>
            array(
                'code' => 'NOVAHRWAJ',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 536,
                'brand_id' => '1',
                'name' => 'Nova Hair Removal Wajah',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            36 =>
            array(
                'code' => 'NOVAPHO',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 537,
                'brand_id' => '1',
                'name' => 'Nova Photorejuvenation',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            37 =>
            array(
                'code' => 'NOVAVASHE',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 538,
                'brand_id' => '1',
                'name' => 'Nova Vascular Hemangioma',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            38 =>
            array(
                'code' => 'PICOGLOWLIPS',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 539,
                'brand_id' => '1',
                'name' => 'PICO GLOW LIPS',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            39 =>
            array(
                'code' => 'PICOGLOWLIPSP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 540,
                'brand_id' => '1',
                'name' => 'PICOGLOWLIPSP4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            40 =>
            array(
                'code' => 'PICOGLOWLIPSP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 541,
                'brand_id' => '1',
                'name' => 'PICOGLOWLIPSP6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            41 =>
            array(
                'code' => 'PICOGLOWLIPSP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 542,
                'brand_id' => '1',
                'name' => 'PICOGLOWLIPSP8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            42 =>
            array(
                'code' => 'PICOTATTOONONBLACK',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 543,
                'brand_id' => '1',
                'name' => 'PICO TATTOO REMOVAL NONBLACK',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            43 =>
            array(
                'code' => 'SUB',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 544,
                'brand_id' => '1',
                'name' => 'SUBCISSION',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            44 =>
            array(
                'code' => 'ULTHERABROW',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 545,
                'brand_id' => '1',
                'name' => 'Ulthera Brow Lift',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            45 =>
            array(
                'code' => 'ULTHERALOWSUB',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 546,
                'brand_id' => '1',
                'name' => 'Ulthera Lower Face dan Sub Mental',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            46 =>
            array(
                'code' => 'WDPAC',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 547,
                'brand_id' => '1',
                'name' => 'Wet Diamond Peel For Acne',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            47 =>
            array(
                'code' => 'WDPACP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 548,
                'brand_id' => '1',
                'name' => 'Wet Diamond Peel For Acne Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            48 =>
            array(
                'code' => 'WDPACP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 549,
                'brand_id' => '1',
                'name' => 'Wet Diamond Peel For Acne paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            49 =>
            array(
                'code' => 'WDPACP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 550,
                'brand_id' => '1',
                'name' => 'Wet Diamond Peel For Acne Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            50 =>
            array(
                'code' => 'WDPACP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 551,
                'brand_id' => '1',
                'name' => 'Wet Diamond Peel For Acne Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            51 =>
            array(
                'code' => 'WDPBRT',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 552,
                'brand_id' => '1',
                'name' => 'Wet Diamond Peel For Brightening',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            52 =>
            array(
                'code' => 'WDPBRTP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 553,
                'brand_id' => '1',
                'name' => 'Wet Diamond Peel For Brightening Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            53 =>
            array(
                'code' => 'WDPBRTP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 554,
                'brand_id' => '1',
                'name' => 'Wet Diamond Peel For Brightening paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            54 =>
            array(
                'code' => 'WDPBRTP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 555,
                'brand_id' => '1',
                'name' => 'Wet Diamond Peel For Brightening Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            55 =>
            array(
                'code' => 'WDPBRTP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 556,
                'brand_id' => '1',
                'name' => 'Wet Diamond Peel For Brightening Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            56 =>
            array(
                'code' => 'WDPREJU',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 557,
                'brand_id' => '1',
                'name' => 'Wet Diamond Peel for Rejuvination',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            57 =>
            array(
                'code' => 'WDPREJUP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 558,
                'brand_id' => '1',
                'name' => 'Wet Diamond Peel for Rejuvination Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            58 =>
            array(
                'code' => 'WDPREJUP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 559,
                'brand_id' => '1',
                'name' => 'Wet Diamond Peel for Rejuvination paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            59 =>
            array(
                'code' => 'WDPREJUP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 560,
                'brand_id' => '1',
                'name' => 'Wet Diamond Peel for Rejuvination Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            60 =>
            array(
                'code' => 'WDPREJUP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 561,
                'brand_id' => '1',
                'name' => 'Wet Diamond Peel for Rejuvination Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            61 =>
            array(
                'code' => 'WOPAC',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 562,
                'brand_id' => '1',
                'name' => 'Wet Omni Peel Acne',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            62 =>
            array(
                'code' => 'WOPBRT',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 563,
                'brand_id' => '1',
                'name' => 'Wet Omni Peel Brightening',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            63 =>
            array(
                'code' => 'WOPREJ',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 564,
                'brand_id' => '1',
                'name' => 'Wet Omni Peel Rejuvenation',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            64 =>
            array(
                'code' => 'DERMABOOSTOX',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 565,
                'brand_id' => '1',
                'name' => 'DERMA BOOSTOX',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            65 =>
            array(
                'code' => 'DERMABOOSTOXP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 566,
                'brand_id' => '1',
                'name' => 'DERMABOOSTOX PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            66 =>
            array(
                'code' => 'DERMABOOSTOXP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 567,
                'brand_id' => '1',
                'name' => 'DERMABOOSTOX PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            67 =>
            array(
                'code' => 'DERMABOOSTOXP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 568,
                'brand_id' => '1',
                'name' => 'DERMABOOSTOX PAKET 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            68 =>
            array(
                'code' => 'DERMABRIGHT',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 569,
                'brand_id' => '1',
                'name' => 'DERMA BRIGHT',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            69 =>
            array(
                'code' => 'DERMABRIGHTP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 570,
                'brand_id' => '1',
                'name' => 'DERMABRIGHT PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            70 =>
            array(
                'code' => 'DERMABRIGHTP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 571,
                'brand_id' => '1',
                'name' => 'DERMABRIGHT PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            71 =>
            array(
                'code' => 'DERMABRIGHTP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 572,
                'brand_id' => '1',
                'name' => 'DERMABRIGHT PAKET 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            72 =>
            array(
                'code' => 'DERMADNA',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 573,
                'brand_id' => '1',
                'name' => 'DERMA DNA',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            73 =>
            array(
                'code' => 'DERMADNAP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 574,
                'brand_id' => '1',
                'name' => 'DERMADNA PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            74 =>
            array(
                'code' => 'DERMADNAP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 575,
                'brand_id' => '1',
                'name' => 'DERMADNA PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            75 =>
            array(
                'code' => 'DERMADNAP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 576,
                'brand_id' => '1',
                'name' => 'DERMADNA PAKET 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            76 =>
            array(
                'code' => 'FLRDEEP',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 577,
                'brand_id' => '1',
                'name' => 'Filler Deep Wrinkle',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            77 =>
            array(
                'code' => 'FLRDEEP1ML',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 578,
                'brand_id' => '1',
                'name' => 'Filler Depp 1 ML',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            78 =>
            array(
                'code' => 'FLRMED',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 579,
                'brand_id' => '1',
                'name' => 'Filler Medium Wrinkle',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            79 =>
            array(
                'code' => 'FLRREJUV',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 580,
                'brand_id' => '1',
                'name' => 'FILLER REJUVENATION',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            80 =>
            array(
                'code' => 'FLRSOFT',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 581,
                'brand_id' => '1',
                'name' => 'Filler Soft',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            81 =>
            array(
                'code' => 'FLRSUP',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 582,
                'brand_id' => '1',
                'name' => 'Filler Superficial Wrinkle',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            82 =>
            array(
                'code' => 'HIFUBROW',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 583,
                'brand_id' => '1',
                'name' => 'HIFU BROW',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            83 =>
            array(
                'code' => 'HIFUBROWP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 584,
                'brand_id' => '1',
                'name' => 'HIFU BROW Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            84 =>
            array(
                'code' => 'HIFUBROWP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 585,
                'brand_id' => '1',
                'name' => 'HIFU BROW paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            85 =>
            array(
                'code' => 'HIFUBROWP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 586,
                'brand_id' => '1',
                'name' => 'HIFU BROW Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            86 =>
            array(
                'code' => 'HIFUFULLFACE',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 587,
                'brand_id' => '1',
                'name' => 'HIFU FULL FACE',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            87 =>
            array(
                'code' => 'HIFUFULLFACEP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 588,
                'brand_id' => '1',
                'name' => 'HIFU FULL FACE Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            88 =>
            array(
                'code' => 'HIFUFULLFACEP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 589,
                'brand_id' => '1',
                'name' => 'HIFU FULL FACE paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            89 =>
            array(
                'code' => 'HIFUFULLFACEP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 590,
                'brand_id' => '1',
                'name' => 'HIFU FULL FACE Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            90 =>
            array(
                'code' => 'HIFUBACKTHIGH',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 591,
                'brand_id' => '1',
                'name' => 'HIFU BACK THIGH',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            91 =>
            array(
                'code' => 'HIFUBACKTHIGHP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 592,
                'brand_id' => '1',
                'name' => 'HIFU BACK THIGH Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            92 =>
            array(
                'code' => 'HIFUBACKTHIGHP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 593,
                'brand_id' => '1',
                'name' => 'HIFU BACK THIGH paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            93 =>
            array(
                'code' => 'HIFUBACKTHIGHP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 594,
                'brand_id' => '1',
                'name' => 'HIFU BACK THIGH Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            94 =>
            array(
                'code' => 'HIFUBELLY',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 595,
                'brand_id' => '1',
                'name' => 'HIFU BELLY',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            95 =>
            array(
                'code' => 'HIFUBELLYP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 596,
                'brand_id' => '1',
                'name' => 'HIFU BELLY Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            96 =>
            array(
                'code' => 'HIFUBELLYP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 597,
                'brand_id' => '1',
                'name' => 'HIFU BELLY paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            97 =>
            array(
                'code' => 'HIFUBELLYP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 598,
                'brand_id' => '1',
                'name' => 'HIFU BELLY Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            98 =>
            array(
                'code' => 'HIFUCALF',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 599,
                'brand_id' => '1',
                'name' => 'HIFU CALF',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            99 =>
            array(
                'code' => 'HIFUCALFP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 600,
                'brand_id' => '1',
                'name' => 'HIFU CALF Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            100 =>
            array(
                'code' => 'HIFUCALFP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 601,
                'brand_id' => '1',
                'name' => 'HIFU CALF paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            101 =>
            array(
                'code' => 'HIFUCALFP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 602,
                'brand_id' => '1',
                'name' => 'HIFU CALF Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            102 =>
            array(
                'code' => 'HIFUFRONTTHIGH',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 603,
                'brand_id' => '1',
                'name' => 'HIFU FRONT THIGH',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            103 =>
            array(
                'code' => 'HIFUFRONTTHIGHP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 604,
                'brand_id' => '1',
                'name' => 'HIFU FRONT THIGH Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            104 =>
            array(
                'code' => 'HIFUFRONTTHIGHP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 605,
                'brand_id' => '1',
                'name' => 'HIFU FRONT THIGH paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            105 =>
            array(
                'code' => 'HIFUFRONTTHIGHP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 606,
                'brand_id' => '1',
                'name' => 'HIFU FRONT THIGH Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            106 =>
            array(
                'code' => 'HIFUFULLTHIGH',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 607,
                'brand_id' => '1',
                'name' => 'HIFU FULL THIGH',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            107 =>
            array(
                'code' => 'HIFUFULLTHIGHP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 608,
                'brand_id' => '1',
                'name' => 'HIFU FULL THIGH Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            108 =>
            array(
                'code' => 'HIFUFULLTHIGHP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 609,
                'brand_id' => '1',
                'name' => 'HIFU FULL THIGH paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            109 =>
            array(
                'code' => 'HIFUFULLTHIGHP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 610,
                'brand_id' => '1',
                'name' => 'HIFU FULL THIGH Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            110 =>
            array(
                'code' => 'LDYVAS',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 611,
                'brand_id' => '1',
                'name' => 'Laser Dual Yellow Vascular',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            111 =>
            array(
                'code' => 'LDYVASP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 612,
                'brand_id' => '1',
                'name' => 'Laser Dual Yellow Vascular Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            112 =>
            array(
                'code' => 'LDYVASP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 613,
                'brand_id' => '1',
                'name' => 'Laser Dual Yellow Vascular PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            113 =>
            array(
                'code' => 'LDYVASP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 614,
                'brand_id' => '1',
                'name' => 'Laser Dual Yellow Vascular Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            114 =>
            array(
                'code' => 'LDYVASP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 615,
                'brand_id' => '1',
                'name' => 'Laser Dual Yellow Vascular Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            115 =>
            array(
                'code' => 'LDYMLM',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 616,
                'brand_id' => '1',
                'name' => 'Laser Dual Yellow Melasma',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            116 =>
            array(
                'code' => 'LDYMLMP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 617,
                'brand_id' => '1',
                'name' => 'Laser Dual Yellow Melasma Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            117 =>
            array(
                'code' => 'LDYMLMP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 618,
                'brand_id' => '1',
                'name' => 'Laser Dual Yellow Melasma PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            118 =>
            array(
                'code' => 'LDYMLMP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 619,
                'brand_id' => '1',
                'name' => 'Laser Dual Yellow Melasma Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            119 =>
            array(
                'code' => 'LDYMLMP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 620,
                'brand_id' => '1',
                'name' => 'Laser Dual Yellow Melasma Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            120 =>
            array(
                'code' => 'LDYAC',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 621,
                'brand_id' => '2',
                'name' => 'Laser Dual Yellow Acne',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            121 =>
            array(
                'code' => 'LDYACP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 622,
                'brand_id' => '2',
                'name' => 'Laser Dual Yellow Acne Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            122 =>
            array(
                'code' => 'LDYACP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 623,
                'brand_id' => '2',
                'name' => 'Laser Dual Yellow Acne PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            123 =>
            array(
                'code' => 'LDYACP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 624,
                'brand_id' => '2',
                'name' => 'Laser Dual Yellow Acne Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            124 =>
            array(
                'code' => 'LDYACP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 625,
                'brand_id' => '2',
                'name' => 'Laser Dual Yellow Acne Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            125 =>
            array(
                'code' => 'NOVA3R',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 626,
                'brand_id' => '1',
                'name' => 'Nova Plus 3R',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            126 =>
            array(
                'code' => 'NOVAPIG',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 627,
                'brand_id' => '1',
                'name' => 'Nova Pigmentasi',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            127 =>
            array(
                'code' => 'NOVAVASTE',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 628,
                'brand_id' => '1',
                'name' => 'Nova Vascular Teleangiektasi',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            128 =>
            array(
                'code' => 'PICOMELASMA',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 629,
                'brand_id' => '1',
                'name' => 'PICO MELASMA',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            129 =>
            array(
                'code' => 'PICOPIGMENT',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 630,
                'brand_id' => '1',
                'name' => 'PICO HYPERPIGMENTATION',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            130 =>
            array(
                'code' => 'PICOREJUV',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 631,
                'brand_id' => '1',
                'name' => 'PICO REJUVENATION',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            131 =>
            array(
                'code' => 'PICOSCAR',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 632,
                'brand_id' => '1',
                'name' => 'PICO SCAR REDUCTION',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            132 =>
            array(
                'code' => 'PICOTATTOOBLACK',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 633,
                'brand_id' => '1',
                'name' => 'PICO TATTOO REMOVAL BLACK',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            133 =>
            array(
                'code' => 'PICOGLOWLIPSP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 634,
                'brand_id' => '2',
                'name' => 'PICOGLOWLIPSP4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            134 =>
            array(
                'code' => 'PICOGLOWLIPSP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 635,
                'brand_id' => '2',
                'name' => 'PICOGLOWLIPSP6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            135 =>
            array(
                'code' => 'PICOGLOWLIPSP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 636,
                'brand_id' => '2',
                'name' => 'PICOGLOWLIPSP8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            136 =>
            array(
                'code' => 'PICOMELASMAP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 637,
                'brand_id' => '1',
                'name' => 'PICOMELASMAP4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            137 =>
            array(
                'code' => 'PICOMELASMAP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 638,
                'brand_id' => '1',
                'name' => 'PICOMELASMAP6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            138 =>
            array(
                'code' => 'PICOMELASMAP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 639,
                'brand_id' => '1',
                'name' => 'PICOMELASMAP8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            139 =>
            array(
                'code' => 'PICOPIGMENTP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 640,
                'brand_id' => '1',
                'name' => 'PICOPIGMENTP4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            140 =>
            array(
                'code' => 'PICOPIGMENTP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 641,
                'brand_id' => '1',
                'name' => 'PICOPIGMENTP6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            141 =>
            array(
                'code' => 'PICOPIGMENTP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 642,
                'brand_id' => '1',
                'name' => 'PICOPIGMENTP8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            142 =>
            array(
                'code' => 'PICOREJUVP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 643,
                'brand_id' => '1',
                'name' => 'PICOREJUVP4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            143 =>
            array(
                'code' => 'PICOREJUVP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 644,
                'brand_id' => '1',
                'name' => 'PICOREJUVP6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            144 =>
            array(
                'code' => 'PICOREJUVP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 645,
                'brand_id' => '1',
                'name' => 'PICOREJUVP8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            145 =>
            array(
                'code' => 'PICOSCARP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 646,
                'brand_id' => '1',
                'name' => 'PICOSCARP4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            146 =>
            array(
                'code' => 'PICOSCARP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 647,
                'brand_id' => '1',
                'name' => 'PICOSCARP6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            147 =>
            array(
                'code' => 'PICOSCARP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 648,
                'brand_id' => '1',
                'name' => 'PICOSCARP8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            148 =>
            array(
                'code' => 'PRP',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 649,
                'brand_id' => '1',
                'name' => 'Platelet Rich Plasma',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            149 =>
            array(
                'code' => 'PRPHA',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 650,
                'brand_id' => '1',
                'name' => 'PRP WITH HYALURONIC ACID',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            150 =>
            array(
                'code' => 'PRPHAP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 651,
                'brand_id' => '1',
                'name' => 'PRP WITH HYALURONIC ACID PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            151 =>
            array(
                'code' => 'PRPP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 652,
                'brand_id' => '1',
                'name' => 'Platelet Rich Plasma Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            152 =>
            array(
                'code' => 'PRPP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 653,
                'brand_id' => '1',
                'name' => 'Platelet Rich Plasma paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            153 =>
            array(
                'code' => 'PRPP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 654,
                'brand_id' => '1',
                'name' => 'Platelet Rich Plasma Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            154 =>
            array(
                'code' => 'TRLIFT',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 655,
                'brand_id' => '1',
                'name' => 'Thread Lift',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            155 =>
            array(
                'code' => 'ULTHERAFACE',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 656,
                'brand_id' => '1',
                'name' => 'Ulthera Full Face',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            156 =>
            array(
                'code' => 'ULTHERABROW',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 657,
                'brand_id' => '2',
                'name' => 'Ulthera Brow Lift',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            157 =>
            array(
                'code' => 'ULTHERALOWFACE',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 658,
                'brand_id' => '1',
                'name' => 'Ulthera Lower Face',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            158 =>
            array(
                'code' => 'ULTHERALOWSUB',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 659,
                'brand_id' => '2',
                'name' => 'Ulthera Lower Face dan Sub Mental',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            159 =>
            array(
                'code' => 'ULTHERASUBMT',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 660,
                'brand_id' => '1',
                'name' => 'Ulthera Sub Mental',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            160 =>
            array(
                'code' => 'ULTHERABROWP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 661,
                'brand_id' => '1',
                'name' => 'Ulthera Brow Lift Paket 3',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            161 =>
            array(
                'code' => 'ULTHERAFACEP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 662,
                'brand_id' => '1',
                'name' => 'Ulthera Full Face Paket 3',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            162 =>
            array(
                'code' => 'ULTHERALOWFACEP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 663,
                'brand_id' => '1',
                'name' => 'Ulthera Lower Face Paket 3',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            163 =>
            array(
                'code' => 'ULTHERALOWSUBP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 664,
                'brand_id' => '1',
                'name' => 'Ulthera Lower Face dan Sub Mental Paket 3',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            164 =>
            array(
                'code' => 'ULTHERASUBMTP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 665,
                'brand_id' => '1',
                'name' => 'Ulthera Sub Mental Paket 3',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            165 =>
            array(
                'code' => 'FLRNOSE',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 666,
                'brand_id' => '1',
                'name' => 'FLRNOSE',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            166 =>
            array(
                'code' => 'TRLIFTNOSE',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 667,
                'brand_id' => '1',
                'name' => 'TRLIFTNOSE',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            167 =>
            array(
                'code' => 'AQUAMESOBTX',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 668,
                'brand_id' => '1',
                'name' => 'AQUAMESOBTX',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            168 =>
            array(
                'code' => 'NPACNEL',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 669,
                'brand_id' => '2',
                'name' => 'NPACNEL',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            169 =>
            array(
                'code' => 'NPGL1K',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 670,
                'brand_id' => '1',
                'name' => 'Botanical Peeling Lightening 1 Kaki',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            170 =>
            array(
                'code' => 'NPGL1L',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 671,
                'brand_id' => '1',
                'name' => 'Botanical Peeling Lightening 1 Lengan',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            171 =>
            array(
                'code' => 'NPGL2K',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 672,
                'brand_id' => '1',
                'name' => 'Botanical Peeling Lightening 2 Kaki',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            172 =>
            array(
                'code' => 'NPGL2L',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 673,
                'brand_id' => '1',
                'name' => 'Botanical Peeling Lightening 2 Lengan',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            173 =>
            array(
                'code' => 'NPGLPK',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 674,
                'brand_id' => '1',
                'name' => 'BOTANICAL PEELING GLP LENGAN',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            174 =>
            array(
                'code' => 'NPGLPL',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 675,
                'brand_id' => '1',
                'name' => 'BOTANICAL PEELING GLP LENGAN',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            175 =>
            array(
                'code' => 'NPMLBK',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 676,
                'brand_id' => '1',
                'name' => 'Botanical Peeling Brightening Kaki',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            176 =>
            array(
                'code' => 'NPMLBL',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 677,
                'brand_id' => '1',
                'name' => 'Botanical Peeling Brightening Lengan',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            177 =>
            array(
                'code' => 'NPMLWK',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 678,
                'brand_id' => '1',
                'name' => 'BOTANICAL PEELING MLW KAKI',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            178 =>
            array(
                'code' => 'NPMLWL',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 679,
                'brand_id' => '1',
                'name' => 'BOTANICAL PEELING MLW LENGAN',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            179 =>
            array(
                'code' => 'AQUAMESOARM',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 680,
                'brand_id' => '1',
                'name' => 'AQUAMESOARM',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            180 =>
            array(
                'code' => 'AQUAMESOARMP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 681,
                'brand_id' => '1',
                'name' => 'AQUAMESOARM PAKET',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            181 =>
            array(
                'code' => 'AQUAMESOARMP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 682,
                'brand_id' => '1',
                'name' => 'AQUAMESOARM PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            182 =>
            array(
                'code' => 'AQUAMESOARMP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 683,
                'brand_id' => '1',
                'name' => 'AQUAMESOARM PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            183 =>
            array(
                'code' => 'AQUAMESOARMP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 684,
                'brand_id' => '1',
                'name' => 'AQUAMESOARM PAKET 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            184 =>
            array(
                'code' => 'AQUAMESOLEG',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 685,
                'brand_id' => '1',
                'name' => 'AQUAMESOLEG',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            185 =>
            array(
                'code' => 'AQUAMESOLEGP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 686,
                'brand_id' => '1',
                'name' => 'AQUAMESOLEG PAKET',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            186 =>
            array(
                'code' => 'AQUAMESOLEGP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 687,
                'brand_id' => '1',
                'name' => 'AQUAMESOLEG PAKET PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            187 =>
            array(
                'code' => 'AQUAMESOLEGP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 688,
                'brand_id' => '1',
                'name' => 'AQUAMESOLEG PAKET PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            188 =>
            array(
                'code' => 'AQUAMESOLEGP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 689,
                'brand_id' => '1',
                'name' => 'AQUAMESOLEG PAKET 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            189 =>
            array(
                'code' => 'DIMPEELK',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 690,
                'brand_id' => '1',
                'name' => 'Diamond Peel Kaki',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            190 =>
            array(
                'code' => 'DIMPEELKP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 691,
                'brand_id' => '1',
                'name' => 'Diamond Peel Kaki Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            191 =>
            array(
                'code' => 'DIMPEELKP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 692,
                'brand_id' => '1',
                'name' => 'Diamond Peel Kaki paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            192 =>
            array(
                'code' => 'DIMPEELKP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 693,
                'brand_id' => '1',
                'name' => 'Diamond Peel Kaki Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            193 =>
            array(
                'code' => 'DIMPEELKP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 694,
                'brand_id' => '1',
                'name' => 'Diamond Peel Kaki Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            194 =>
            array(
                'code' => 'DIMPEELL',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 695,
                'brand_id' => '1',
                'name' => 'Diamond Peel Lengan',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            195 =>
            array(
                'code' => 'DIMPEELLP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 696,
                'brand_id' => '1',
                'name' => 'Diamond Peel Lengan Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            196 =>
            array(
                'code' => 'DIMPEELLP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 697,
                'brand_id' => '1',
                'name' => 'Diamond Peel Lengan paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            197 =>
            array(
                'code' => 'DIMPEELLP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 698,
                'brand_id' => '1',
                'name' => 'Diamond Peel Lengan Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            198 =>
            array(
                'code' => 'DIMPEELLP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 699,
                'brand_id' => '1',
                'name' => 'Diamond Peel Lengan Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            199 =>
            array(
                'code' => 'DIMPELKH',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 700,
                'brand_id' => '1',
                'name' => 'Diamond Peel Kaki Kanan/Kiri',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            200 =>
            array(
                'code' => 'DIMPELKHP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 701,
                'brand_id' => '1',
                'name' => 'Diamond Peel Kaki Kanan/Kiri Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            201 =>
            array(
                'code' => 'DIMPELKHP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 702,
                'brand_id' => '1',
                'name' => 'Diamond Peel Kaki Kanan/Kiri paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            202 =>
            array(
                'code' => 'DIMPELKHP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 703,
                'brand_id' => '1',
                'name' => 'Diamond Peel Kaki Kanan/Kiri Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            203 =>
            array(
                'code' => 'DIMPELKHP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 704,
                'brand_id' => '1',
                'name' => 'Diamond Peel Kaki Kanan/Kiri Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            204 =>
            array(
                'code' => 'EPHRLENGAN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 705,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Lengan Kanan Kiri',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            205 =>
            array(
                'code' => 'EPHRLENGANP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 706,
                'brand_id' => '1',
                'name' => 'E-PULSE FOR HAIR REMOVAL LENGAN KANANKIRI',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            206 =>
            array(
                'code' => 'EPHRLENGANP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 707,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Lengan Kanan Kiri Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            207 =>
            array(
                'code' => 'EPHRLENGANP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 708,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Lengan Kanan Kiri Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            208 =>
            array(
                'code' => 'EPHRLENGANP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 709,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Lengan Kanan Kiri Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            209 =>
            array(
                'code' => 'EPHRKAKI',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 710,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Kaki Kanan Kiri',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            210 =>
            array(
                'code' => 'EPHRKAKIP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 711,
                'brand_id' => '1',
                'name' => 'E-PULSE FOR HAIR REMOVAL KAKI KANANKIRI',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            211 =>
            array(
                'code' => 'EPHRKAKIP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 712,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Kaki Kanan Kiri Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            212 =>
            array(
                'code' => 'EPHRKAKIP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 713,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Kaki Kanan Kiri Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            213 =>
            array(
                'code' => 'EPHRKAKIP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 714,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Kaki Kanan Kiri Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            214 =>
            array(
                'code' => 'HIFUARM',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 715,
                'brand_id' => '1',
                'name' => 'HIFU ARM',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            215 =>
            array(
                'code' => 'HIFUARMP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 716,
                'brand_id' => '1',
                'name' => 'HIFU ARM Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            216 =>
            array(
                'code' => 'HIFUARMP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 717,
                'brand_id' => '1',
                'name' => 'HIFU ARM paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            217 =>
            array(
                'code' => 'HIFUARMP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 718,
                'brand_id' => '1',
                'name' => 'HIFU ARM Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            218 =>
            array(
                'code' => 'IPLHRLENGAN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 719,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Lengan Kanan-Kiri',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            219 =>
            array(
                'code' => 'IPLHRLENGANP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 720,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Lengan Kanan-Kiri Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            220 =>
            array(
                'code' => 'IPLHRLENGANP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 721,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Lengan Kanan-Kiri paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            221 =>
            array(
                'code' => 'IPLHRLENGANP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 722,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Lengan Kanan-Kiri Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            222 =>
            array(
                'code' => 'IPLHRLENGANP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 723,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Lengan Kanan-Kiri Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            223 =>
            array(
                'code' => 'JPEELK',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 724,
                'brand_id' => '1',
                'name' => 'Jetpeel Kaki',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            224 =>
            array(
                'code' => 'JPEELKP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 725,
                'brand_id' => '1',
                'name' => 'Jetpeel Kaki Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            225 =>
            array(
                'code' => 'JPEELKP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 726,
                'brand_id' => '1',
                'name' => 'Jetpeel Kaki paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            226 =>
            array(
                'code' => 'JPEELKP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 727,
                'brand_id' => '1',
                'name' => 'Jetpeel Kaki Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            227 =>
            array(
                'code' => 'JPEELKP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 728,
                'brand_id' => '1',
                'name' => 'Jetpeel Kaki Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            228 =>
            array(
                'code' => 'JPEELL',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 729,
                'brand_id' => '1',
                'name' => 'Jetpeel Lengan',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            229 =>
            array(
                'code' => 'JPEELLP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 730,
                'brand_id' => '1',
                'name' => 'Jetpeel Lengan Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            230 =>
            array(
                'code' => 'JPEELLP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 731,
                'brand_id' => '1',
                'name' => 'Jetpeel Lengan paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            231 =>
            array(
                'code' => 'JPEELLP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 732,
                'brand_id' => '1',
                'name' => 'Jetpeel Lengan Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            232 =>
            array(
                'code' => 'JPEELLP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 733,
                'brand_id' => '1',
                'name' => 'Jetpeel Lengan Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            233 =>
            array(
                'code' => 'LSRHRKAKI',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 734,
                'brand_id' => '1',
                'name' => 'Laser Gentle Yag Hair Removal Kaki',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            234 =>
            array(
                'code' => 'LSRHRKAKIP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 735,
                'brand_id' => '1',
                'name' => 'Laser Gentle Yag Hair Removal Kaki Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            235 =>
            array(
                'code' => 'LSRHRKAKIP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 736,
                'brand_id' => '1',
                'name' => 'Laser Gentle Yag Hair Removal Kaki paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            236 =>
            array(
                'code' => 'LSRHRKAKIP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 737,
                'brand_id' => '1',
                'name' => 'Laser Gentle Yag Hair Removal Kaki Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            237 =>
            array(
                'code' => 'LSRHRLENGAN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 738,
                'brand_id' => '1',
                'name' => 'Laser Gentle Yag Hair Removal Lengan',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            238 =>
            array(
                'code' => 'LSRHRLENGANP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 739,
                'brand_id' => '1',
                'name' => 'Laser Gentle Yag Hair Removal Lengan Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            239 =>
            array(
                'code' => 'LSRHRLENGANP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 740,
                'brand_id' => '1',
                'name' => 'Laser Gentle Yag Hair Removal Lengan paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            240 =>
            array(
                'code' => 'LSRHRLENGANP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 741,
                'brand_id' => '1',
                'name' => 'Laser Gentle Yag Hair Removal Lengan Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            241 =>
            array(
                'code' => 'MESOARM',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 742,
                'brand_id' => '2',
                'name' => 'Meso Body Lengan',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            242 =>
            array(
                'code' => 'MESOARMP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 743,
                'brand_id' => '2',
                'name' => 'MESO BODY LENGAN PAKET',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            243 =>
            array(
                'code' => 'MESOARMP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 744,
                'brand_id' => '1',
                'name' => 'Meso Body Lengan Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            244 =>
            array(
                'code' => 'MESOARMP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 745,
                'brand_id' => '2',
                'name' => 'Meso Body Lengan Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            245 =>
            array(
                'code' => 'MESOARMP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 746,
                'brand_id' => '2',
                'name' => 'Meso Body Lengan Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            246 =>
            array(
                'code' => 'MESOLEG',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 747,
                'brand_id' => '1',
                'name' => 'Meso Body Paha',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            247 =>
            array(
                'code' => 'MESOLEGP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 748,
                'brand_id' => '1',
                'name' => 'MESO BODY PAHA PAKET',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            248 =>
            array(
                'code' => 'MESOLEGP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 749,
                'brand_id' => '1',
                'name' => 'Meso Body Paha Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            249 =>
            array(
                'code' => 'MESOLEGP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 750,
                'brand_id' => '1',
                'name' => 'Meso Body Paha Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            250 =>
            array(
                'code' => 'MESOLEGP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 751,
                'brand_id' => '1',
                'name' => 'Meso Body Paha Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            251 =>
            array(
                'code' => 'NOVAHRLEN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 752,
                'brand_id' => '1',
                'name' => 'Nova Hair Removal Lengan',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            252 =>
            array(
                'code' => 'IRFLENGAN',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 753,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Lengan',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            253 =>
            array(
                'code' => 'IRFLENGANP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 754,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Lengan Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            254 =>
            array(
                'code' => 'IRFLENGANP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 755,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Lengan paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            255 =>
            array(
                'code' => 'IRFLENGANP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 756,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Lengan Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            256 =>
            array(
                'code' => 'IRFLENGANP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 757,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Lengan Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            257 =>
            array(
                'code' => 'IRFPAHA',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 758,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Paha',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            258 =>
            array(
                'code' => 'IRFPAHAP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 759,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Paha Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            259 =>
            array(
                'code' => 'IRFPAHAP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 760,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Paha paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            260 =>
            array(
                'code' => 'IRFPAHAP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 761,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Paha Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            261 =>
            array(
                'code' => 'IRFPAHAP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 762,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Paha Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            262 =>
            array(
                'code' => 'RADIODLENGANATAS',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 763,
                'brand_id' => '1',
                'name' => 'RADIODLENGANATAS',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            263 =>
            array(
                'code' => 'RADIODLENGANATASP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 764,
                'brand_id' => '1',
                'name' => 'Radioderm Lengan Atas Paket4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            264 =>
            array(
                'code' => 'RADIODLENGANATASP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 765,
                'brand_id' => '1',
                'name' => 'Radioderm Lengan Atas Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            265 =>
            array(
                'code' => 'RADIODLENGANATASP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 766,
                'brand_id' => '1',
                'name' => 'Radioderm Lengan Atas Paket8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            266 =>
            array(
                'code' => 'RADIODPAHA',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 767,
                'brand_id' => '1',
                'name' => 'RADIODPAHA',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            267 =>
            array(
                'code' => 'RADIODPAHAP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 768,
                'brand_id' => '1',
                'name' => 'Radioderm Paha Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            268 =>
            array(
                'code' => 'RADIODPAHAP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 769,
                'brand_id' => '1',
                'name' => 'Radioderm Paha Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            269 =>
            array(
                'code' => 'RADIODPAHAP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 770,
                'brand_id' => '1',
                'name' => 'Radioderm Paha Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            270 =>
            array(
                'code' => 'TRIPRFLENGANATAS',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 771,
                'brand_id' => '1',
                'name' => 'TRIPOLLAR RF LENGAN ATAS',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            271 =>
            array(
                'code' => 'TRIPRFLENGANATASP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 772,
                'brand_id' => '1',
                'name' => 'TRIPOLLAR RF LENGAN ATAS PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            272 =>
            array(
                'code' => 'TRIPRFLENGANATASP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 773,
                'brand_id' => '1',
                'name' => 'TRIPOLLAR RF LENGAN ATAS PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            273 =>
            array(
                'code' => 'TRIPRFLENGANATASP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 774,
                'brand_id' => '1',
                'name' => 'TRIPOLLAR RF LENGAN ATAS PAKET 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            274 =>
            array(
                'code' => 'TRIPRFPAHA',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 775,
                'brand_id' => '1',
                'name' => 'TRIPOLLAR RF PAHA',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            275 =>
            array(
                'code' => 'TRIPRFPAHAP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 776,
                'brand_id' => '1',
                'name' => 'TRIPOLLAR RF PAHA PAKET 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            276 =>
            array(
                'code' => 'TRIPRFPAHAP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 777,
                'brand_id' => '1',
                'name' => 'TRIPOLLAR RF PAHA PAKET 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            277 =>
            array(
                'code' => 'TRIPRFPAHAP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 778,
                'brand_id' => '1',
                'name' => 'TRIPOLLAR RF PAHA PAKET 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            278 =>
            array(
                'code' => 'EPHRKAKI',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 779,
                'brand_id' => '2',
                'name' => 'E-Pulse for Hair Removal Kaki Kanan Kiri',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            279 =>
            array(
                'code' => 'EPHRKAKIP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 780,
                'brand_id' => '2',
                'name' => 'E-PULSE FOR HAIR REMOVAL KAKI KANANKIRI',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            280 =>
            array(
                'code' => 'EPHRKAKIP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 781,
                'brand_id' => '2',
                'name' => 'E-Pulse for Hair Removal Kaki Kanan Kiri Paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            281 =>
            array(
                'code' => 'EPHRKAKIP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 782,
                'brand_id' => '2',
                'name' => 'E-Pulse for Hair Removal Kaki Kanan Kiri Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            282 =>
            array(
                'code' => 'EPHRKAKIP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 783,
                'brand_id' => '2',
                'name' => 'E-Pulse for Hair Removal Kaki Kanan Kiri Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            283 =>
            array(
                'code' => 'IPLHRKAKI',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 784,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Kaki Kanan-Kiri',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            284 =>
            array(
                'code' => 'IPLHRKAKIP3',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 785,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Kaki Kanan-Kiri Paket',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            285 =>
            array(
                'code' => 'IPLHRKAKIP4',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 786,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Kaki Kanan-Kiri paket 4',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            286 =>
            array(
                'code' => 'IPLHRKAKIP6',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 787,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Kaki Kanan-Kiri Paket 6',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            287 =>
            array(
                'code' => 'IPLHRKAKIP8',
                'created_at' => '2023-03-23 21:19:50',
                'id' => 788,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Kaki Kanan-Kiri Paket 8',
                'updated_at' => '2023-03-23 21:19:50',
            ),
            288 =>
            array(
                'code' => 'AQUAMESOMELASMA',
                'created_at' => '2023-03-24 12:50:38',
                'id' => 789,
                'brand_id' => '1',
                'name' => 'AQUAMESOMELASMA',
                'updated_at' => '2023-03-24 12:50:38',
            ),
            289 =>
            array(
                'code' => 'AQUAMESOMELASMAP3',
                'created_at' => '2023-03-24 12:51:20',
                'id' => 790,
                'brand_id' => '1',
                'name' => 'AQUAMESOMELASMA Paket 3',
                'updated_at' => '2023-03-24 12:51:20',
            ),
            290 =>
            array(
                'code' => 'AQUAMESOMELASMAP4',
                'created_at' => '2023-03-24 12:51:51',
                'id' => 791,
                'brand_id' => '1',
                'name' => 'AQUAMESOMELASMA Paket 4',
                'updated_at' => '2023-03-24 12:51:51',
            ),
            291 =>
            array(
                'code' => 'AQUAMESOMELASMAP6',
                'created_at' => '2023-03-24 12:52:13',
                'id' => 792,
                'brand_id' => '1',
                'name' => 'AQUAMESOMELASMA Paket 6',
                'updated_at' => '2023-03-24 12:52:13',
            ),
            292 =>
            array(
                'code' => 'AQUAMESOMELASMAP8',
                'created_at' => '2023-03-24 12:52:36',
                'id' => 793,
                'brand_id' => '1',
                'name' => 'AQUAMESOMELASMA Paket 8',
                'updated_at' => '2023-03-24 12:52:36',
            ),
            293 =>
            array(
                'code' => 'IRFNECK',
                'created_at' => '2021-01-25 06:50:08',
                'id' => 794,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Neck',
                'updated_at' => '2021-01-25 06:50:08',
            ),
            294 =>
            array(
                'code' => 'IRFNECKP3',
                'created_at' => '2021-01-25 06:50:08',
                'id' => 795,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Neck Paket',
                'updated_at' => '2021-01-25 06:50:08',
            ),
            295 =>
            array(
                'code' => 'IRFNECKP4',
                'created_at' => '2021-01-25 06:50:08',
                'id' => 796,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Neck paket 4',
                'updated_at' => '2021-01-25 06:50:08',
            ),
            296 =>
            array(
                'code' => 'IRFNECKP6',
                'created_at' => '2021-01-25 06:50:08',
                'id' => 797,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Neck Paket 6',
                'updated_at' => '2021-01-25 06:50:08',
            ),
            297 =>
            array(
                'code' => 'IRFNECKP8',
                'created_at' => '2021-01-25 06:50:08',
                'id' => 798,
                'brand_id' => '1',
                'name' => 'Ionic Radio Frequency Neck Paket 8',
                'updated_at' => '2021-01-25 06:50:08',
            ),
            298 =>
            array(
                'code' => 'AQUAMESOSM',
                'created_at' => '2021-01-25 06:50:08',
                'id' => 799,
                'brand_id' => '1',
                'name' => 'AQUAMESOSM',
                'updated_at' => '2021-01-25 06:50:08',
            ),
            299 =>
            array(
                'code' => 'AQUAMESOSMP3',
                'created_at' => '2021-01-25 06:50:08',
                'id' => 800,
                'brand_id' => '1',
                'name' => 'AQUAMESOSM PAKET',
                'updated_at' => '2021-01-25 06:50:08',
            ),
            300 =>
            array(
                'code' => 'AQUAMESOSMP4',
                'created_at' => '2021-01-25 06:50:08',
                'id' => 801,
                'brand_id' => '1',
                'name' => 'AQUAMESOSM PAKET 4',
                'updated_at' => '2021-01-25 06:50:08',
            ),
            301 =>
            array(
                'code' => 'AQUAMESOSMP6',
                'created_at' => '2021-01-25 06:50:08',
                'id' => 802,
                'brand_id' => '1',
                'name' => 'AQUAMESOSM PAKET 6',
                'updated_at' => '2021-01-25 06:50:08',
            ),
            302 =>
            array(
                'code' => 'DIMPEELP',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 803,
                'brand_id' => '1',
                'name' => 'Diamond Peel Punggung',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            303 =>
            array(
                'code' => 'DIMPEELPP3',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 804,
                'brand_id' => '1',
                'name' => 'Diamond Peel Punggung Paket ',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            304 =>
            array(
                'code' => 'DIMPEELPP4',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 805,
                'brand_id' => '1',
                'name' => 'Diamond Peel Punggung paket 4',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            305 =>
            array(
                'code' => 'DIMPEELPP6',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 806,
                'brand_id' => '1',
                'name' => 'Diamond Peel Punggung Paket 6',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            306 =>
            array(
                'code' => 'DIMPEELPP8',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 807,
                'brand_id' => '1',
                'name' => 'Diamond Peel Punggung Paket 8',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            307 =>
            array(
                'code' => 'MESOSM',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 808,
                'brand_id' => '1',
                'name' => 'Mesotherapy Stretch Mark',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            308 =>
            array(
                'code' => 'NOVAHRKA',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 809,
                'brand_id' => '1',
                'name' => 'Nova Hair Removal Kaki',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            309 =>
            array(
                'code' => 'NOVAHRKUM',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 810,
                'brand_id' => '1',
                'name' => 'Nova Hair Removal Kumis',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            310 =>
            array(
                'code' => 'BTXPAXCF',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 811,
                'brand_id' => '1',
                'name' => 'BTXPAXCF',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            311 =>
            array(
                'code' => 'BTXPBLCF',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 812,
                'brand_id' => '1',
                'name' => 'BTXPBLCF',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            312 =>
            array(
                'code' => 'AQUAMESOAA',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 813,
                'brand_id' => '1',
                'name' => 'AQUAMESOAA',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            313 =>
            array(
                'code' => 'AQUAMESOAANECK',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 814,
                'brand_id' => '1',
                'name' => 'AQUA MESO ANTI AGING NECK',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            314 =>
            array(
                'code' => 'AQUAMESOAANECKP4',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 815,
                'brand_id' => '1',
                'name' => 'AQUA MESO ANTI AGING NECK Paket 4',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            315 =>
            array(
                'code' => 'AQUAMESOAANECKP6',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 816,
                'brand_id' => '1',
                'name' => 'AQUA MESO ANTI AGING NECK Paket 6',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            316 =>
            array(
                'code' => 'AQUAMESOAANECKP8',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 817,
                'brand_id' => '1',
                'name' => 'AQUA MESO ANTI AGING NECK Paket 8',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            317 =>
            array(
                'code' => 'AQUAMESOAAP3',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 818,
                'brand_id' => '1',
                'name' => 'AQUAMESOAAP3',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            318 =>
            array(
                'code' => 'AQUAMESOAAP4',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 819,
                'brand_id' => '1',
                'name' => 'AQUAMESOAA paket 4',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            319 =>
            array(
                'code' => 'AQUAMESOAAP6',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 820,
                'brand_id' => '1',
                'name' => 'AQUAMESOAA Paket 6',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            320 =>
            array(
                'code' => 'AQUAMESOAAP8',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 821,
                'brand_id' => '1',
                'name' => 'AQUAMESOAA Paket 8',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            321 =>
            array(
                'code' => 'AQUAMESOBTXBRIGHT',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 822,
                'brand_id' => '1',
                'name' => 'AQUAMESOTHERAPY BOTOX BRIGHTENING',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            322 =>
            array(
                'code' => 'AQUAMESOBTXBRIGHTP4',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 823,
                'brand_id' => '1',
                'name' => 'AQUAMESOTHERAPY BOTOX BRIGHTENING PAKET 4',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            323 =>
            array(
                'code' => 'AQUAMESOBTXBRIGHTP6',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 824,
                'brand_id' => '1',
                'name' => 'AQUAMESOTHERAPY BOTOX BRIGHTENING PAKET 6',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            324 =>
            array(
                'code' => 'AQUAMESOBTXBRIGHTP8',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 825,
                'brand_id' => '1',
                'name' => 'AQUAMESOTHERAPY BOTOX BRIGHTENING PAKET 8',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            325 =>
            array(
                'code' => 'AQUAMESOBTXLIFT',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 826,
                'brand_id' => '1',
                'name' => 'AQUAMESOTHERAPY BOTOX LIFTING',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            326 =>
            array(
                'code' => 'AQUAMESOBTXLIFTP4',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 827,
                'brand_id' => '1',
                'name' => 'AQUAMESOTHERAPY BOTOX LIFTING PAKET 4',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            327 =>
            array(
                'code' => 'AQUAMESOBTXLIFTP6',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 828,
                'brand_id' => '1',
                'name' => 'AQUAMESOTHERAPY BOTOX LIFTING PAKET 6',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            328 =>
            array(
                'code' => 'AQUAMESOBTXLIFTP8',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 829,
                'brand_id' => '1',
                'name' => 'AQUAMESOTHERAPY BOTOX LIFTING PAKET 8',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            329 =>
            array(
                'code' => 'AQUAMESOBTXP4',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 830,
                'brand_id' => '1',
                'name' => 'AQUAMESOBTX PAKET 4',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            330 =>
            array(
                'code' => 'AQUAMESOBTXP6',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 831,
                'brand_id' => '1',
                'name' => 'AQUAMESOBTX PAKET 6',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            331 =>
            array(
                'code' => 'AQUAMESOBTXP8',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 832,
                'brand_id' => '1',
                'name' => 'AQUAMESOBTX PAKET 8',
                'updated_at' => '2021-01-25 06:50:09',
            ),
            332 =>
            array(
                'code' => 'AQUAMESOPRP',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 833,
                'brand_id' => '1',
                'name' => 'AQUAMESOPRP',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            333 =>
            array(
                'code' => 'AQUAMESOPRPP4',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 834,
                'brand_id' => '1',
                'name' => 'AQUAMESOPRP PAKET 4',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            334 =>
            array(
                'code' => 'AQUAMESOPRPP6',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 835,
                'brand_id' => '1',
                'name' => 'AQUAMESOPRP PAKET 6',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            335 =>
            array(
                'code' => 'BTXMICRO1CC',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 836,
                'brand_id' => '1',
                'name' => 'MICRO BOTOX 1 CC',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            336 =>
            array(
                'code' => 'BTXMICRO2CC',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 837,
                'brand_id' => '1',
                'name' => 'MICRO BOTOX 2 CC',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            337 =>
            array(
                'code' => 'DERMABOOSTER',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 838,
                'brand_id' => '1',
                'name' => 'DERMA BOOSTER',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            338 =>
            array(
                'code' => 'DERMABOOSTERP4',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 839,
                'brand_id' => '1',
                'name' => 'DERMABOOSTER PAKET 4',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            339 =>
            array(
                'code' => 'DERMABOOSTERP6',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 840,
                'brand_id' => '1',
                'name' => 'DERMABOOSTER PAKET 6',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            340 =>
            array(
                'code' => 'DERMABOOSTERP8',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 841,
                'brand_id' => '1',
                'name' => 'DERMABOOSTER PAKET 8',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            341 =>
            array(
                'code' => 'DERMALIFT',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 842,
                'brand_id' => '1',
                'name' => 'DERMA LIFT',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            342 =>
            array(
                'code' => 'DERMALIFTP4',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 843,
                'brand_id' => '1',
                'name' => 'DERMALIFT PAKET 4',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            343 =>
            array(
                'code' => 'DERMALIFTP6',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 844,
                'brand_id' => '1',
                'name' => 'DERMALIFT PAKET 6',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            344 =>
            array(
                'code' => 'DERMALIFTP8',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 845,
                'brand_id' => '1',
                'name' => 'DERMALIFT PAKET 8',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            345 =>
            array(
                'code' => 'DERMASCAR',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 846,
                'brand_id' => '1',
                'name' => 'DERMA SCAR',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            346 =>
            array(
                'code' => 'DERMASCARP4',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 847,
                'brand_id' => '1',
                'name' => 'DERMASCAR PAKET 4',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            347 =>
            array(
                'code' => 'DERMASCARP6',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 848,
                'brand_id' => '1',
                'name' => 'DERMASCAR PAKET 6',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            348 =>
            array(
                'code' => 'DERMASCARP8',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 849,
                'brand_id' => '1',
                'name' => 'DERMASCAR PAKET 8',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            349 =>
            array(
                'code' => 'DIMPEEL',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 850,
                'brand_id' => '1',
                'name' => 'Diamond Peel',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            350 =>
            array(
                'code' => 'DIMPEELP3',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 851,
                'brand_id' => '1',
                'name' => 'Diamond Peel Paket',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            351 =>
            array(
                'code' => 'DIMPEELP4',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 852,
                'brand_id' => '1',
                'name' => 'Diamond Peel paket 4',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            352 =>
            array(
                'code' => 'DIMPEELP6',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 853,
                'brand_id' => '1',
                'name' => 'Diamond Peel Paket 6',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            353 =>
            array(
                'code' => 'DIMPEELP8',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 854,
                'brand_id' => '1',
                'name' => 'Diamond Peel Paket 8',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            354 =>
            array(
                'code' => 'DIMPEELNECK',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 855,
                'brand_id' => '1',
                'name' => 'DIAMOND PEEL NECK',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            355 =>
            array(
                'code' => 'DIMPEELNECKP4',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 856,
                'brand_id' => '1',
                'name' => 'Diamond Peel Neck Paket 4',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            356 =>
            array(
                'code' => 'DIMPEELNECKP6',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 857,
                'brand_id' => '1',
                'name' => 'Diamond Peel Neck Paket 6',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            357 =>
            array(
                'code' => 'DIMPEELNECKP8',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 858,
                'brand_id' => '1',
                'name' => 'Diamond Peel Neck Paket 8',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            358 =>
            array(
                'code' => 'DRYDIMPEL',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 859,
                'brand_id' => '1',
                'name' => 'DRY DIAMOND PEEL',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            359 =>
            array(
                'code' => 'EPACNE',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 860,
                'brand_id' => '1',
                'name' => 'E-Pulse for Acne',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            360 =>
            array(
                'code' => 'EPACNEP3',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 861,
                'brand_id' => '1',
                'name' => 'E-PULSE FOR ACNE',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            361 =>
            array(
                'code' => 'EPACNEP4',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 862,
                'brand_id' => '1',
                'name' => 'E-Pulse for Acne Paket 4',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            362 =>
            array(
                'code' => 'EPACNEP6',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 863,
                'brand_id' => '1',
                'name' => 'E-Pulse for Acne Paket 6',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            363 =>
            array(
                'code' => 'EPACNEP8',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 864,
                'brand_id' => '1',
                'name' => 'E-Pulse for Acne Paket 8',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            364 =>
            array(
                'code' => 'EPBRIGHT',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 865,
                'brand_id' => '1',
                'name' => 'E-Pulse for Brightening',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            365 =>
            array(
                'code' => 'EPBRIGHTP3',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 866,
                'brand_id' => '1',
                'name' => 'E-PULSE FOR BRIGHTENING',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            366 =>
            array(
                'code' => 'EPBRIGHTP4',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 867,
                'brand_id' => '1',
                'name' => 'E-Pulse for Brightening Paket 4',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            367 =>
            array(
                'code' => 'EPBRIGHTP6',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 868,
                'brand_id' => '1',
                'name' => 'E-Pulse for Brightening Paket 6',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            368 =>
            array(
                'code' => 'EPBRIGHTP8',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 869,
                'brand_id' => '1',
                'name' => 'E-Pulse for Brightening Paket 8',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            369 =>
            array(
                'code' => 'EPHRWAJAH',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 870,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Wajah',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            370 =>
            array(
                'code' => 'EPHRWAJAHP3',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 871,
                'brand_id' => '1',
                'name' => 'E-PULSE HAIR REMOVAL WAJAH',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            371 =>
            array(
                'code' => 'EPHRWAJAHP4',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 872,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Wajah',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            372 =>
            array(
                'code' => 'EPHRWAJAHP6',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 873,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Wajah paket 6',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            373 =>
            array(
                'code' => 'EPHRWAJAHP8',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 874,
                'brand_id' => '1',
                'name' => 'E-Pulse for Hair Removal Wajah Paket 8',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            374 =>
            array(
                'code' => 'EPREJUV',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 875,
                'brand_id' => '1',
                'name' => 'E-Pulse for Rejuvenation Face',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            375 =>
            array(
                'code' => 'EPREJUVP4',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 876,
                'brand_id' => '1',
                'name' => 'E-Pulse for Rejuvenation Face Paket 4',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            376 =>
            array(
                'code' => 'EPREJUVP6',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 877,
                'brand_id' => '1',
                'name' => 'E-Pulse for Rejuvenation Face Paket 6',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            377 =>
            array(
                'code' => 'EPREJUVP8',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 878,
                'brand_id' => '1',
                'name' => 'E-Pulse for Rejuvenation Face Paket 8',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            378 =>
            array(
                'code' => 'EPVASCULAR',
                'created_at' => '2021-01-25 06:50:10',
                'id' => 879,
                'brand_id' => '1',
                'name' => 'E Pulse Vaskuler',
                'updated_at' => '2021-01-25 06:50:10',
            ),
            379 =>
            array(
                'code' => 'HIFULOWFACE',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 880,
                'brand_id' => '1',
                'name' => 'HIFU LOWER FACE',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            380 =>
            array(
                'code' => 'HIFULOWFACEP3',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 881,
                'brand_id' => '1',
                'name' => 'HIFU LOWER FACE Paket',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            381 =>
            array(
                'code' => 'HIFULOWFACEP4',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 882,
                'brand_id' => '1',
                'name' => 'HIFU LOWER FACE paket 4',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            382 =>
            array(
                'code' => 'HIFULOWFACEP6',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 883,
                'brand_id' => '1',
                'name' => 'HIFU LOWER FACE Paket 6',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            383 =>
            array(
                'code' => 'HIFUUPFACE',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 884,
                'brand_id' => '1',
                'name' => 'HIFU UP FACE',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            384 =>
            array(
                'code' => 'HIFUUPFACEP3',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 885,
                'brand_id' => '1',
                'name' => 'HIFU UP FACE Paket',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            385 =>
            array(
                'code' => 'HIFUUPFACEP4',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 886,
                'brand_id' => '1',
                'name' => 'HIFU UP FACE paket 4 ',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            386 =>
            array(
                'code' => 'HIFUUPFACEP6',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 887,
                'brand_id' => '1',
                'name' => 'HIFU UP FACE Paket 6',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            387 =>
            array(
                'code' => 'IPLACNE',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 888,
                'brand_id' => '1',
                'name' => 'IPL Acne',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            388 =>
            array(
                'code' => 'IPLACNEP3',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 889,
                'brand_id' => '1',
                'name' => 'IPL Acne',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            389 =>
            array(
                'code' => 'IPLACNEP4',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 890,
                'brand_id' => '1',
                'name' => 'IPL For Acne Paket 4',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            390 =>
            array(
                'code' => 'IPLACNEP6',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 891,
                'brand_id' => '1',
                'name' => 'IPL For Acne Paket 6',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            391 =>
            array(
                'code' => 'IPLACNEP8',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 892,
                'brand_id' => '1',
                'name' => 'IPL For Acne Paket 8',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            392 =>
            array(
                'code' => 'IPLBRIGHT',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 893,
                'brand_id' => '1',
                'name' => 'IPL for Birghtening',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            393 =>
            array(
                'code' => 'IPLBRIGHTP3',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 894,
                'brand_id' => '1',
                'name' => 'IPL for Birghtening Paket',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            394 =>
            array(
                'code' => 'IPLBRIGHTP4',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 895,
                'brand_id' => '1',
                'name' => 'IPL for Birghtening paket 4',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            395 =>
            array(
                'code' => 'IPLBRIGHTP6',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 896,
                'brand_id' => '1',
                'name' => 'IPL for Birghtening Paket 6',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            396 =>
            array(
                'code' => 'IPLBRIGHTP8',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 897,
                'brand_id' => '1',
                'name' => 'IPL for Birghtening Paket 8',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            397 =>
            array(
                'code' => 'IPLHRWAJAH',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 898,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Wajah',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            398 =>
            array(
                'code' => 'IPLHRWAJAHP3',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 899,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Wajah Paket',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            399 =>
            array(
                'code' => 'IPLHRWAJAHP4',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 900,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Wajah paket 4',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            400 =>
            array(
                'code' => 'IPLHRWAJAHP6',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 901,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Wajah Paket 6',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            401 =>
            array(
                'code' => 'IPLHRWAJAHP8',
                'created_at' => '2021-01-25 06:50:11',
                'id' => 902,
                'brand_id' => '1',
                'name' => 'IPL for Hair Removal Wajah Paket 8',
                'updated_at' => '2021-01-25 06:50:11',
            ),
            402 =>
            array(
                'code' => 'MESOPIPI2,5',
                'created_at' => '2021-01-25 06:50:12',
                'id' => 903,
                'brand_id' => '1',
                'name' => 'MESO PIPI 2,5 ML',
                'updated_at' => '2021-01-25 06:50:12',
            ),
            403 =>
            array(
                'code' => 'MESOPIPI2,5P4',
                'created_at' => '2021-01-25 06:50:12',
                'id' => 904,
                'brand_id' => '1',
                'name' => 'MESO PIPI 2,5 PAKET 4',
                'updated_at' => '2021-01-25 06:50:12',
            ),
            404 =>
            array(
                'code' => 'MESOPIPI2,5P6',
                'created_at' => '2021-01-25 06:50:12',
                'id' => 905,
                'brand_id' => '1',
                'name' => 'MESO PIPI 2,5 PAKET 6',
                'updated_at' => '2021-01-25 06:50:12',
            ),
            405 =>
            array(
                'code' => 'MESOPIPI2,5P8',
                'created_at' => '2021-01-25 06:50:12',
                'id' => 906,
                'brand_id' => '1',
                'name' => 'MESO PIPI 2,5 PAKET 8',
                'updated_at' => '2021-01-25 06:50:12',
            ),
            406 =>
            array(
                'code' => 'MESOPIPI5',
                'created_at' => '2021-01-25 06:50:12',
                'id' => 907,
                'brand_id' => '1',
                'name' => 'MESO PIPI 5 ML',
                'updated_at' => '2021-01-25 06:50:12',
            ),
            407 =>
            array(
                'code' => 'MESOPIPI5P4',
                'created_at' => '2021-01-25 06:50:12',
                'id' => 908,
                'brand_id' => '1',
                'name' => 'MESO PIPI 5 PAKET 4',
                'updated_at' => '2021-01-25 06:50:12',
            ),
            408 =>
            array(
                'code' => 'MESOPIPI5P6',
                'created_at' => '2021-01-25 06:50:12',
                'id' => 909,
                'brand_id' => '1',
                'name' => 'MESO PIPI 5 PAKET 6',
                'updated_at' => '2021-01-25 06:50:12',
            ),
            409 =>
            array(
                'code' => 'MESOPIPI5P8',
                'created_at' => '2021-01-25 06:50:12',
                'id' => 910,
                'brand_id' => '1',
                'name' => 'MESO PIPI 5 PAKET 8',
                'updated_at' => '2021-01-25 06:50:12',
            ),
            410 =>
            array(
                'code' => 'MESOPRPP4',
                'created_at' => '2021-01-25 06:50:12',
                'id' => 911,
                'brand_id' => '1',
                'name' => 'MESOPRP PAKET 4',
                'updated_at' => '2021-01-25 06:50:12',
            ),
            411 =>
            array(
                'code' => 'MESOPRPP6',
                'created_at' => '2021-01-25 06:50:12',
                'id' => 912,
                'brand_id' => '1',
                'name' => 'MESOPRP PAKET 6',
                'updated_at' => '2021-01-25 06:50:12',
            ),
            412 =>
            array(
                'code' => 'MESOPRPP8',
                'created_at' => '2021-01-25 06:50:12',
                'id' => 913,
                'brand_id' => '1',
                'name' => 'MESOPRP PAKET 8',
                'updated_at' => '2021-01-25 06:50:12',
            ),
            413 =>
            array(
                'code' => 'MTSAAPEP',
                'created_at' => '2021-01-25 06:50:12',
                'id' => 914,
                'brand_id' => '1',
                'name' => 'MTSAAPEP',
                'updated_at' => '2021-01-25 06:50:12',
            ),
            414 =>
            array(
                'code' => 'MTSBRIGHTP',
                'created_at' => '2021-01-25 06:50:12',
                'id' => 915,
                'brand_id' => '1',
                'name' => 'MTS BRIGHTENING',
                'updated_at' => '2021-01-25 06:50:12',
            ),
            415 =>
            array(
                'code' => 'MTSBRIGHTP3',
                'created_at' => '2021-01-25 06:50:12',
                'id' => 916,
                'brand_id' => '1',
                'name' => 'MTS BRIGHT PAKET',
                'updated_at' => '2021-01-25 06:50:12',
            ),
            416 =>
            array(
                'code' => 'MTSHAIRP',
                'created_at' => '2021-01-25 06:50:12',
                'id' => 917,
                'brand_id' => '1',
                'name' => 'Natasha Hair MTS',
                'updated_at' => '2021-01-25 06:50:12',
            ),
            417 =>
            array(
                'code' => 'MTSHAIRP3',
                'created_at' => '2021-01-25 06:50:12',
                'id' => 918,
                'brand_id' => '1',
                'name' => 'MTS HAIR PAKET',
                'updated_at' => '2021-01-25 06:50:12',
            ),
            418 =>
            array(
                'code' => 'MTSLIFTP',
                'created_at' => '2021-01-25 06:50:12',
                'id' => 919,
                'brand_id' => '1',
                'name' => 'MTSLIFTP',
                'updated_at' => '2021-01-25 06:50:12',
            ),
            419 =>
            array(
                'code' => 'MTSLIFTP3',
                'created_at' => '2021-01-25 06:50:12',
                'id' => 920,
                'brand_id' => '1',
                'name' => 'MTS LIFT PAKET',
                'updated_at' => '2021-01-25 06:50:12',
            ),
            420 =>
            array(
                'code' => 'MTSMADEP',
                'created_at' => '2021-01-25 06:50:12',
                'id' => 921,
                'brand_id' => '1',
                'name' => 'MTSMADEP',
                'updated_at' => '2021-01-25 06:50:12',
            ),
            421 =>
            array(
                'code' => 'MTSP',
                'created_at' => '2021-01-25 06:50:12',
                'id' => 922,
                'brand_id' => '1',
                'name' => 'MTSP',
                'updated_at' => '2021-01-25 06:50:12',
            ),
            422 =>
            array(
                'code' => 'MTSP3',
                'created_at' => '2021-01-25 06:50:12',
                'id' => 923,
                'brand_id' => '1',
                'name' => 'MTS PAKET',
                'updated_at' => '2021-01-25 06:50:12',
            ),
            423 =>
            array(
                'code' => 'PRPHAIR',
                'created_at' => '2021-01-25 06:50:13',
                'id' => 924,
                'brand_id' => '1',
                'name' => 'PRPHAIR',
                'updated_at' => '2021-01-25 06:50:13',
            ),
            424 =>
            array(
                'code' => 'PRPHAIRP3',
                'created_at' => '2021-01-25 06:50:13',
                'id' => 925,
                'brand_id' => '1',
                'name' => 'PRPHAIR Paket',
                'updated_at' => '2021-01-25 06:50:13',
            ),
            425 =>
            array(
                'code' => 'PRPHAIRP4',
                'created_at' => '2021-01-25 06:50:13',
                'id' => 926,
                'brand_id' => '1',
                'name' => 'PRPHAIR paket 4',
                'updated_at' => '2021-01-25 06:50:13',
            ),
            426 =>
            array(
                'code' => 'PRPHAIRP6',
                'created_at' => '2021-01-25 06:50:13',
                'id' => 927,
                'brand_id' => '1',
                'name' => 'PRPHAIR Paket 6',
                'updated_at' => '2021-01-25 06:50:13',
            ),
            427 =>
            array(
                'code' => 'ULTHERAADD',
                'created_at' => '2021-01-25 06:50:13',
                'id' => 928,
                'brand_id' => '1',
                'name' => 'Ulthera Additional (tambahan)',
                'updated_at' => '2021-01-25 06:50:13',
            ),
            428 =>
            array(
                'code' => 'DIMPEELLH',
                'created_at' => '2021-01-25 06:50:13',
                'id' => 929,
                'brand_id' => '1',
                'name' => 'Diamond Peel Lengan Kanan/Kiri',
                'updated_at' => '2021-01-25 06:50:13',
            ),
            429 =>
            array(
                'code' => 'DIMPEELLHP3',
                'created_at' => '2021-01-25 06:50:13',
                'id' => 930,
                'brand_id' => '1',
                'name' => 'Diamond Peel Lengan Kanan/Kiri Paket',
                'updated_at' => '2021-01-25 06:50:13',
            ),
            430 =>
            array(
                'code' => 'DIMPEELLHP4',
                'created_at' => '2021-01-25 06:50:13',
                'id' => 931,
                'brand_id' => '1',
                'name' => 'Diamond Peel Lengan Kanan/Kiri paket 4',
                'updated_at' => '2021-01-25 06:50:13',
            ),
            431 =>
            array(
                'code' => 'DIMPEELLHP6',
                'created_at' => '2021-01-25 06:50:13',
                'id' => 932,
                'brand_id' => '1',
                'name' => 'Diamond Peel Lengan Kanan/Kiri Paket 6',
                'updated_at' => '2021-01-25 06:50:13',
            ),
            432 =>
            array(
                'code' => 'DIMPEELLHP8',
                'created_at' => '2021-01-25 06:50:13',
                'id' => 933,
                'brand_id' => '1',
                'name' => 'Diamond Peel Lengan Kanan/Kiri Paket 8',
                'updated_at' => '2021-01-25 06:50:13',
            ),
            433 =>
            array(
                'code' => 'BTXCF',
                'created_at' => '2021-01-25 06:50:09',
                'id' => 934,
                'brand_id' => '1',
                'name' => 'Botox Crow\'s Feet',
                'updated_at' => '2023-04-04 13:15:30',
            ),
            434 =>
            array(
                'code' => 'LSRPEELAXILLA',
                'created_at' => '2023-04-12 15:22:23',
                'id' => 935,
                'brand_id' => '1',
                'name' => 'LSRPEELAXILLA',
                'updated_at' => '2023-04-12 15:22:23',
            ),
        ));
    }
}
