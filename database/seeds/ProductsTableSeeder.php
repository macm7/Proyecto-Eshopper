<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 4,
                'name' => 'Chaqueta Deportiva Camping',
                'slug' => 'chaqueta-deportiva-camping',
                'ref_code' => 654332,
                'price' => 59.990000000000002,
                'quantity' => 23,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'chaqueta-deportiva-camping.jpg',
                'description' => 'Americana entallada en tejido de sintetico con solapas, doble botonadura y bolsillos delanteros con solapa. Forrada.',
                'category_id' => 1,
                'created_at' => '2018-01-29 18:58:48',
                'updated_at' => '2018-01-29 18:58:48',
            ),
            1 => 
            array (
                'id' => 5,
                'name' => 'Chaqueta Militar',
                'slug' => 'chaqueta-militar',
                'ref_code' => 563489,
                'price' => 74.989999999999995,
                'quantity' => 98,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'chaqueta-militar.jpg',
                'description' => 'Americana entallada de tela con cuello, solapa, cierre oculto con dos botones y bolsillos delanteros ribeteados. Bajo con vuelo. Forrada.',
                'category_id' => 1,
                'created_at' => '2018-01-29 19:00:06',
                'updated_at' => '2018-01-29 19:00:06',
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'Chaqueta de cuero motor',
                'slug' => 'chaqueta-de-cuero-motor',
                'ref_code' => 985412,
                'price' => 125.25,
                'quantity' => 48,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'chaqueta-de-cuero-motor.jpg',
                'description' => 'Americana de cuero con solapas y aberturas laterales. Cinturón suave extraíble con elástico detrás y cierre mediante botones de presión. Sin cierre. Forrada.',
                'category_id' => 1,
                'created_at' => '2018-01-29 19:02:25',
                'updated_at' => '2018-01-29 19:02:25',
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'Chaqueta de Cuero Invierno',
                'slug' => 'chaqueta-de-cuero-invierno',
                'ref_code' => 402974,
                'price' => 139.99000000000001,
                'quantity' => 38,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'chaqueta-de-cuero-invierno.jpg',
                'description' => 'Abrigo de doble botonadura en mezcla de lana. Modelo con cuello grande y solapas, bolsillos al bies y abertura detrás. Forrado.',
                'category_id' => 1,
                'created_at' => '2018-01-29 19:03:30',
                'updated_at' => '2018-01-29 19:03:30',
            ),
            4 => 
            array (
                'id' => 8,
                'name' => 'Blua sin mangas',
                'slug' => 'blua-sin-mangas',
                'ref_code' => 345876,
                'price' => 24.989999999999998,
                'quantity' => 123,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'blua-sin-mangas.jpg',
                'description' => 'CONSCIOUS. Blusa de lyocell Tencel®. Modelo sin mangas.',
                'category_id' => 2,
                'created_at' => '2018-01-29 19:17:27',
                'updated_at' => '2018-01-29 19:17:27',
            ),
            5 => 
            array (
                'id' => 9,
                'name' => 'Camisa de viscosa',
                'slug' => 'camisa-de-viscosa',
                'ref_code' => 234786,
                'price' => 14.99,
                'quantity' => 4,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'camisa-de-viscosa.jpg',
                'description' => 'Camisa de viscosa suave con cuello y botones delante. Modelo de corte recto con mangas largas con puños estrechos con botón y bajo redondeado.',
                'category_id' => 2,
                'created_at' => '2018-01-29 19:20:32',
                'updated_at' => '2018-01-29 19:20:32',
            ),
            6 => 
            array (
                'id' => 10,
                'name' => 'Franela Basica',
                'slug' => 'franela-basica',
                'ref_code' => 653211,
                'price' => 12.99,
                'quantity' => 89,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'franela-basica.jpg',
                'description' => 'Franela de manga larga. Parte inferior y puños elásticos.',
                'category_id' => 3,
                'created_at' => '2018-01-29 19:22:50',
                'updated_at' => '2018-01-29 19:22:50',
            ),
            7 => 
            array (
                'id' => 11,
                'name' => 'Camiseta Basica',
                'slug' => 'camiseta-basica',
                'ref_code' => 678905,
                'price' => 9.9900000000000002,
                'quantity' => 452,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'camiseta-basica.jpg',
                'description' => 'Camiseta en punto suave de mezcla de viscosa. Modelo de manga corta con escote barco, hombros caídos y pequeñas aberturas laterales.',
                'category_id' => 3,
                'created_at' => '2018-01-29 19:23:56',
                'updated_at' => '2018-01-29 19:23:56',
            ),
            8 => 
            array (
                'id' => 12,
                'name' => 'Vestido cruzado',
                'slug' => 'vestido-cruzado',
                'ref_code' => 490812,
                'price' => 34.990000000000002,
                'quantity' => 23,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'vestido-cruzado.jpg',
                'description' => 'Vestido corto en gasa vaporosa con escote de pico cruzado delante. Modelo con volante en escote y bajo, costura elástica en la cintura y elástico con volante en los puños. Forrado.',
                'category_id' => 5,
                'created_at' => '2018-01-29 19:25:17',
                'updated_at' => '2018-01-29 19:25:17',
            ),
            9 => 
            array (
                'id' => 13,
                'name' => 'PLEIN ÉCRAN Vestido camisero',
                'slug' => 'plein-cran-vestido-camisero',
                'ref_code' => 5689,
                'price' => 39.990000000000002,
                'quantity' => 24,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'plein-cran-vestido-camisero.jpg',
                'description' => 'Vestido de tela con cuello y botones ocultos delante, cinturón extraíble con anillas en forma de D, hombros marcadamente caídos y mangas largas con puños anchos con botón. Sin forrar. Largo hasta las pantorrillas.',
                'category_id' => 5,
                'created_at' => '2018-01-29 19:27:04',
                'updated_at' => '2018-01-29 19:27:04',
            ),
            10 => 
            array (
                'id' => 14,
                'name' => 'Vestido corto de gasa',
                'slug' => 'vestido-corto-de-gasa',
                'ref_code' => 32987,
                'price' => 39.990000000000002,
                'quantity' => 76,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'vestido-corto-de-gasa.jpg',
                'description' => 'Vestido corto en gasa plumeti con cuello de pico fruncido y ribete corto de volantes en los hombros, hombros caídos y mangas largas amplias con botones en los puños. Costura elástica fina y falda acampanada con varias capas de volantes. Forrado.',
                'category_id' => 5,
                'created_at' => '2018-01-29 19:29:41',
                'updated_at' => '2018-01-29 19:29:41',
            ),
            11 => 
            array (
                'id' => 15,
                'name' => 'Vestido de punto',
                'slug' => 'vestido-de-punto',
                'ref_code' => 56890,
                'price' => 59.990000000000002,
                'quantity' => 65,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'vestido-de-punto.jpg',
                'description' => 'Vestido entallado en punto con mangas largas y rectas. Sin forrar.',
                'category_id' => 5,
                'created_at' => '2018-01-29 19:32:00',
                'updated_at' => '2018-01-29 19:32:00',
            ),
            12 => 
            array (
                'id' => 16,
                'name' => 'Camisa Simple',
                'slug' => 'camisa-simple',
                'ref_code' => 6754,
                'price' => 45.990000000000002,
                'quantity' => 62,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'camisa-simple.jpg',
                'description' => 'Camisa de satén con cuello y botones delante, bolsillos superiores con solapa y mangas largas con botón en los puños. Bajo redondeado y espalda algo más larga.',
                'category_id' => 2,
                'created_at' => '2018-01-29 19:40:33',
                'updated_at' => '2018-01-29 19:40:33',
            ),
            13 => 
            array (
                'id' => 17,
                'name' => 'Blusa de algodón con volantes',
                'slug' => 'blusa-de-algodn-con-volantes',
                'ref_code' => 28975,
                'price' => 19.989999999999998,
                'quantity' => 12,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'blusa-de-algodn-con-volantes.jpg',
                'description' => 'Blusa amplia de corte recto en tejido de algodón con cierre de lágrima con botón en la nuca, hombros caídos y mangas trompeta largas. Tiras de anudar en los laterales y costura en el bajo con volantes delante.',
                'category_id' => 2,
                'created_at' => '2018-01-29 19:41:55',
                'updated_at' => '2018-01-29 19:41:55',
            ),
            14 => 
            array (
                'id' => 18,
                'name' => 'Camisa',
                'slug' => 'camisa',
                'ref_code' => 6789,
                'price' => 30.0,
                'quantity' => 24,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'camisa.jpg',
                'description' => 'Camisa de satén con cuello y botones delante, bolsillos superiores con solapa y mangas largas con botón en los puños. Bajo redondeado y espalda algo más larga.',
                'category_id' => 2,
                'created_at' => '2018-01-29 19:45:05',
                'updated_at' => '2018-01-29 19:45:05',
            ),
            15 => 
            array (
                'id' => 19,
                'name' => 'Blusa con escote de pico',
                'slug' => 'blusa-con-escote-de-pico',
                'ref_code' => 7890,
                'price' => 24.989999999999998,
                'quantity' => 33,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'blusa-con-escote-de-pico.jpg',
                'description' => 'Blusa en tejido vaporoso con escote de pico, tapeta, bolsillos superiores, mangas largas con trabilla y botón y bajo redondeado. Espalda ligeramente más larga.',
                'category_id' => 2,
                'created_at' => '2018-01-29 19:46:08',
                'updated_at' => '2018-01-29 19:46:08',
            ),
            16 => 
            array (
                'id' => 20,
                'name' => 'Pantalón amplio de satén',
                'slug' => 'pantaln-amplio-de-satn',
                'ref_code' => 567890,
                'price' => 34.990000000000002,
                'quantity' => 33,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'pantaln-amplio-de-satn.jpg',
                'description' => 'Pantalón de talle alto en satén con estampado. Modelo con pretina prolongada, cierre de corchete oculto y cremallera, bolsillos al bies y perneras rectas y amplias.',
                'category_id' => 4,
                'created_at' => '2018-01-29 19:49:32',
                'updated_at' => '2018-01-29 19:49:32',
            ),
            17 => 
            array (
                'id' => 21,
                'name' => 'Leggings en punto jaspeado',
                'slug' => 'leggings-en-punto-jaspeado',
                'ref_code' => 37997,
                'price' => 9.9900000000000002,
                'quantity' => 12,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'leggings-en-punto-jaspeado.jpg',
                'description' => 'Leggings en punto jaspeado con cintura elástica.',
                'category_id' => 4,
                'created_at' => '2018-01-29 19:51:02',
                'updated_at' => '2018-01-29 19:51:02',
            ),
            18 => 
            array (
                'id' => 22,
                'name' => 'Pantalón pitillo',
                'slug' => 'pantaln-pitillo',
                'ref_code' => 34536,
                'price' => 25.989999999999998,
                'quantity' => 21,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'pantaln-pitillo.jpg',
                'description' => 'Pantalón en tejido elástico con cintura estándar, cierre de corchete oculto, bolsillos al bies y perneras pitillo.',
                'category_id' => 4,
                'created_at' => '2018-01-29 19:54:55',
                'updated_at' => '2018-01-29 19:54:55',
            ),
            19 => 
            array (
                'id' => 23,
                'name' => 'Pantalón abullonado',
                'slug' => 'pantaln-abullonado',
                'ref_code' => 86317,
                'price' => 29.989999999999998,
                'quantity' => 71,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'pantaln-abullonado.jpg',
                'description' => 'Pantalón de talle alto en tejido elástico con cintura paper bag y cinturón de anudar extraíble, bolsillos al bies, perneras rectas más ajustadas en los bajos y cierre de cremallera con corchete oculto.',
                'category_id' => 4,
                'created_at' => '2018-01-29 19:55:56',
                'updated_at' => '2018-01-29 19:55:56',
            ),
            20 => 
            array (
                'id' => 24,
                'name' => 'Pantalón corto de terciopelo',
                'slug' => 'pantaln-corto-de-terciopelo',
                'ref_code' => 56789,
                'price' => 12.99,
                'quantity' => 43,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'pantaln-corto-de-terciopelo.jpg',
                'description' => 'Pantalón corto en terciopelo arrugado con cintura elástica, bolsillos al bies y perneras cortas con aberturas laterales.',
                'category_id' => 7,
                'created_at' => '2018-01-29 19:57:47',
                'updated_at' => '2018-01-29 19:57:47',
            ),
            21 => 
            array (
                'id' => 25,
                'name' => 'Pantalón corto de sarga',
                'slug' => 'pantaln-corto-de-sarga',
                'ref_code' => 98746,
                'price' => 12.99,
                'quantity' => 56,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'pantaln-corto-de-sarga.jpg',
                'description' => 'Pantalón corto de cinco bolsillos en sarga elástica y revestida. Modelo con cintura estándar y bajos vueltos cosidos.',
                'category_id' => 7,
                'created_at' => '2018-01-29 19:58:41',
                'updated_at' => '2018-01-29 19:58:41',
            ),
            22 => 
            array (
                'id' => 26,
                'name' => 'Vaquero corto',
                'slug' => 'vaquero-corto',
                'ref_code' => 23456,
                'price' => 9.9900000000000002,
                'quantity' => 92,
                'availability' => 'En Stock',
                'condition' => 'Usado',
                'cover_img' => 'vaquero-corto.jpg',
                'description' => 'Pantalón corto en denim lavado con cintura estándar, bolsillos al bies, bolsillos traseros y bajos vueltos cosidos.',
                'category_id' => 7,
                'created_at' => '2018-01-29 19:59:25',
                'updated_at' => '2018-01-29 19:59:25',
            ),
            23 => 
            array (
                'id' => 27,
                'name' => 'Vaqueros cortos Skinny Regular',
                'slug' => 'vaqueros-cortos-skinny-regular',
                'ref_code' => 36354,
                'price' => 12.99,
                'quantity' => 38,
                'availability' => 'En Stock',
                'condition' => 'Nuevo',
                'cover_img' => 'vaqueros-cortos-skinny-regular.jpg',
                'description' => 'Vaqueros cortos de cinco bolsillos en denim lavado con detalles maxidesgastados, cintura estándar, cierre con cremallera y botón, y bajos sin rematar.',
                'category_id' => 7,
                'created_at' => '2018-01-29 20:00:35',
                'updated_at' => '2018-01-29 20:00:35',
            ),
        ));
        
        
    }
}