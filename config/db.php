<?php

$restaurants = [
    'restaurants' => [
        [
            "id" => 1,

            //USER
            "name" => "Gino",
            "lastname" => "Debellis",
            "email" => "GinoDebellis@gmail.com", 
            "password" => "XXXXXX",

            //RESTAURANT
            "name_restaurant"  => "Ristorante Italiano", 
            "email_restaurant" => "ristoranteitaliano@gmail.com",
            "address_restaurant" => "Corso Buenos Aires 3 - Milano (MI), 20123 Italia",
            "vat_restaurant" => "IT12345678901",
            "image_restaurant" => "uploads/restaurants/Ristorante-Italiano/id-1/ristorante-italiano.png",
            "type" => "Italiano" , 

            //MENU
            "dishes" => [
                ["name" => "Pasta alla carbonara", "price" => 12.99, "ingredients" => "pasta, uova, guanciale, pecorino","available" => true, "img_dish" => "uploads/dishes/Ristorante-Italiano/id-1/carbonara.jpg",],
                ["name" => "Pizza Margherita", "price" => 9.99, "ingredients" => "farina, pomodoro, mozzarella, basilico","available" => true,"img_dish" => "uploads/dishes/Ristorante-Italiano/id-1/margherita.jpg",],
                ["name" => "Filetto di manzo", "price" => 18.99, "ingredients" => "filetto di manzo, rosmarino, sale, pepe","available" => true,"img_dish" => "uploads/dishes/Ristorante-Italiano/id-1/filetto.jpg",],
                ["name" => "Insalata di stagione", "price" => 7.99, "ingredients" => "insalata mista, pomodoro, olive, olio d'oliva","available" => true,"img_dish" => "uploads/dishes/Ristorante-Italiano/id-1/insalatamista.jpg",],
                ["name" => "Tiramisù", "price" => 6.99, "ingredients" => "savoiardi, mascarpone, uova, caffè","available" => true, "img_dish" => "uploads/dishes/Ristorante-Italiano/id-1/tiramisù.jpg"],
                ["name" => "Acqua minerale", "price" => 1.99, "ingredients" => "acqua, minerali","available" => true, "img_dish" => "uploads/dishes/Ristorante-Italiano/id-1/acqua.jpg",],
            ],
            "orders" => [
                ["total_price"=>"", "customer_address" => "Via volta 12", "customer_name" => "Gino", "customer_surname" => "Ginetti", "date_and_time" => "2023-05-22 19:00:25", "customer_phone" => "1112223344", "customer_email" => "gino@gmail.com",],
            ]
        ],
        [
            "id" => 2,

            //USER
            "name" => "David",
            "lastname" => "Chang",
            "email" => "DavidChang@gmail.com",
            "password" => "XXXXXX",

            //RESTAURANT
            "name_restaurant"  => "Ristorante Cinese Wan Yuan", 
            "email_restaurant" => "RistoranteWanYuan@gmail.com",
            "address_restaurant" => "Via Paolo Sarpi, 123 - Milano (MI), 20123 Italia",
            "vat_restaurant" => "IT1234567890",
            "image_restaurant" => "uploads/restaurants/Ristorante-Cinese-Wan-Yuan/id-2/wanyuan.jpg",
            "type" => "Cinese" , 
            "dishes" => [
                ["name" => "Anatra all'arancia", "price" => 14.99, "ingredients" => "anatra, arancia, soia, zenzero","available" => true,"img_dish" => "uploads/dishes/Ristorante-Cinese-Wan-Yuan/id-2/anatra.jpg",],
                ["name" => "Ravioli al vapore", "price" => 10.99, "ingredients" => "maiale, acciughe, zenzero, aglio","available" => true, "img_dish" => "uploads/dishes/Ristorante-Cinese-Wan-Yuan/id-2/ravioli.jpg",],
                ["name" => "Manzo con broccoli", "price" => 16.99, "ingredients" => "manzo, broccoli, soia, aglio","available" => true,"img_dish" => "uploads/dishes/Ristorante-Cinese-Wan-Yuan/id-2/manzoconbroccoli.jpg",],
                ["name" => "Riso fritto", "price" => 8.99, "ingredients" => "riso, uova, piselli, cipolla","available" => true,"img_dish" => "uploads/dishes/Ristorante-Cinese-Wan-Yuan/id-2/riso.jpg",],
                ["name" => "Gelato al sesamo", "price" => 5.99, "ingredients" => "latte, sesamo, zucchero","available" => true,"img_dish" => "uploads/dishes/Ristorante-Cinese-Wan-Yuan/id-2/gelato.jpg",],
                ["name" => "Birra Tsingtao", "price" => 3.99, "ingredients" => "acqua, malto d'orzo, luppolo","available" => true,"img_dish" => "uploads/dishes/Ristorante-Cinese-Wan-Yuan/id-2/birra.jpg",],
            ],
            "orders" => [
                ["total_price"=>"", "customer_address" => "Via milano 2", "customer_name" => "Mario", "customer_surname" => "Rossi", "date_and_time" => "2023-07-2 19:00:25", "customer_phone" => "1122223347", "customer_email" => "mario@gmail.com",],
            ]
        ],
        [
            "id" => 3,

            //USER
            "name" => "Pasquale",
            "lastname" => "Ghirardi",
            "email" => "Pasqualeghirardi74@gmail.com",
            "password" => "XXXXXX",

            //RESTAURANT
            "name_restaurant"  => "Pizzeria Napoli", 
            "email_restaurant" => "info@pizzerianapoli.it",
            "address_restaurant" => "Via Roberto Sarfatti - Milano (MI), 20123 Italia",
            "vat_restaurant" => "IT98765432109",
            "image_restaurant" => "uploads/restaurants/Pizzeria-Napoli/id-3/logo_pizzeria-napoli.png",
            "type" => "Pizzeria" , 
            "dishes" => [
                ["name" => "Margherita", "price" => 10.99, "ingredients" => "pomodoro, mozzarella, basilico","available" => true,"img_dish" => "uploads/dishes/Pizzeria-Napoli/id-3/napoli-margherita.png",],
                ["name" => "Quattro Formaggi", "price" => 12.99, "ingredients" => "mozzarella, gorgonzola, parmigiano, ricotta","available" => true,"img_dish" => "uploads/dishes/Pizzeria-Napoli/id-3/napoli-4formaggi.png",],
                ["name" => "Prosciutto e Funghi", "price" => 11.99, "ingredients" => "pomodoro, mozzarella, prosciutto, funghi","available" => true,"img_dish" => "uploads/dishes/Pizzeria-Napoli/id-3/napoli-pros-funghi.png",],
                ["name" => "Calzone", "price" => 13.99, "ingredients" => "mozzarella, ricotta, prosciutto, funghi, pomodoro","available" => true,"img_dish" => "uploads/dishes/Pizzeria-Napoli/id-3/napoli-calzone.png",],
                ["name" => "Tiramisù", "price" => 6.99, "ingredients" => "savoiardi, mascarpone, cacao, caffè","available" => true,"img_dish" => "uploads/dishes/Pizzeria-Napoli/id-3/napoli-tiramisu.png",],
                ["name" => "Coca-Cola", "price" => 1.99, "ingredients" => "acqua, zucchero, anidride carbonica, coloranti","available" => true,"img_dish" => "uploads/dishes/Pizzeria-Napoli/id-3/napoli-coca_cola.png",],
            ],
            "orders" => [
                ["total_price"=>"", "customer_address" => "Via roma 12", "customer_name" => "Giuditta", "customer_surname" => "Verdi", "date_and_time" => "2023-05-22 19:00:25", "customer_phone" => "9876543211", "customer_email" => "giuditta@gmail.com",],
            ]
        ],
        [
            "id" => 4,

            //USER
            "name" => "Morimoto",
            "lastname" => "Masaharu",
            "email" => "Morimotomasaharu@hotmail.com",
            "password" => "XXXXXX",

            //RESTAURANT 
            "name_restaurant"  => "Sushi Fusion", 
            "email_restaurant" => "sushifusion@gmail.com",
            "address_restaurant" => "Via Bligny 1 - Milano (MI), 20123 Italia",
            "vat_restaurant" => "IT71955306825",
            "image_restaurant" => "uploads/restaurants/Sushi-Fusion/id-4/sushifusion.jpg",
            "type" => "Giapponese" , 
            "dishes" => [
                ["name" => "Sushi assortito", "price" => 19.99, "ingredients" => "riso, pesce crudo, alga nori, wasabi","available" => true,"img_dish" => "uploads/dishes/Sushi-Fusion/id-4/sushi.jpg",],
                ["name" => "Tempura mista", "price" => 14.99, "ingredients" => "verdure, gamberi, tempura batter, salsa teriyaki","available" => true,"img_dish" => "uploads/dishes/Sushi-Fusion/id-4/tempura.jpg",],
                ["name" => "Ramen al miso", "price" => 12.99, "ingredients" => "noodles, brodo di miso, carne di maiale, cipolla","available" => true,"img_dish" => "uploads/dishes/Sushi-Fusion/id-4/ramen.jpg",],
                ["name" => "Edamame", "price" => 6.99, "ingredients" => "fagioli di soia, sale", "category" => "Antipasto","available" => true ,"img_dish" => "uploads/dishes/Sushi-Fusion/id-4/edamame.jpg",],
                ["name" => "Matcha affogato", "price" => 8.99, "ingredients" => "gelato al matcha, tè verde matcha","available" => true,"img_dish" => "uploads/dishes/Sushi-Fusion/id-4/matcha.jpg",],
                ["name" => "Saké giapponese", "price" => 9.99, "ingredients" => "riso, acqua, fermentazione","available" => true,"img_dish" => "uploads/dishes/Sushi-Fusion/id-4/saké.jpg",]
            ],
            "orders" => [
                [ "total_price"=>"", "customer_address" => "Via aldo moro 7", "customer_name" => "Giacomo", "customer_surname" => "Bianchi", "date_and_time" => "2023-05-22 19:00:25", "customer_phone" => "1587965874", "customer_email" => "giacomo@gmail.com",],
            ]
        ],
        [
            "id" => 5,

            //USER
            "name" => "Luciana",
            "lastname" => "Rossi",
            "email" => "LucinaRossi@gmail.com",
            "password" => "XXXXXX",

            //RESTAURANT
            "name_restaurant"  => "Frutti di Mare", 
            "email_restaurant" => "frutti.di.mare@gmail.com",
            "address_restaurant" => "Via Paolo Sarpi, 12 - Milano (MI), 20123 Italia",
            "vat_restaurant" => "IT13345678901",
            "image_restaurant" => "uploads/restaurants/Frutti-di-Mare/id-5/FruttiDiMare.jpg",
            "type" => "Pesce" , 
            "dishes" => [
                ["name" => "Antipasto di mare", "price" => 16.99, "ingredients" => "gamberi, calamari, mussels, limone","available" => true,"img_dish" => "uploads/dishes/Frutti-di-Mare/id-5/antipasto.jpg",],
                ["name" => "Spaghetti alle vongole", "price" => 18.99, "ingredients" => "spaghetti, vongole, aglio, prezzemolo","available" => true,"img_dish" => "uploads/dishes/Frutti-di-Mare/id-5/vongole.jpg",],
                ["name" => "Grigliata mista di pesce", "price" => 24.99, "ingredients" => "orata, salmone, gamberi, limone","available" => true,"img_dish" => "uploads/dishes/Frutti-di-Mare/id-5/grigiliatapesce.jpg",],
                ["name" => "Insalata di mare", "price" => 14.99, "ingredients" => "polpo, calamari, pomodorini, olive", "available" => true,"img_dish" => "uploads/dishes/Frutti-di-Mare/id-5/insalatadimare.jpg",],
                ["name" => "Panna cotta al limone", "price" => 7.99, "ingredients" => "panna, limone, zucchero","available" => true,"img_dish" => "uploads/dishes/Frutti-di-Mare/id-5/pannacotta.jpg",],
                ["name" => "Rosso di casa mia", "price" => 15.99, "ingredients" => "uva, fermentazione, amore" ,"available" => true,"img_dish" => "uploads/dishes/Frutti-di-Mare/id-5/vinorosso.jpg",]
            ],
            "orders" => [
                [ "total_price"=>"", "customer_address" => "Via giudy 4", "customer_name" => "Luigi", "customer_surname" => "Luigino", "date_and_time" => "2023-05-22 19:00:25", "customer_phone" => "4893215687", "customer_email" => "luigi@gmail.com",],
            ]
        ],
        [
            "id" => 6,

            //USER
            "name" => "Javier",
            "lastname" => "Plascencia",
            "email" => "JavierPlascencia@gmail.com",
            "password" => "XXXXXX",

            //RESTAURANT 
            "name_restaurant"  => "Taqueria del Sol", 
            "email_restaurant" => "taqueriadelsol@gmail.com",
            "address_restaurant" => "Via Lambertenghi 30 - Milano (MI), 20123 Italia",
            "vat_restaurant" => "IT98765432179",
            "image_restaurant" => "uploads/restaurants/Taqueria-del-Sol/id-6/TaqueriaDelSol.png",
            "type" => "Messicano" , 
            "dishes" => [
                ["name" => "Taco al pastor", "price" => 3.99, "ingredients" => "maiale marinato, cipolla, coriandolo", "available" => true,"img_dish" => "uploads/dishes/Taqueria-del-Sol/id-6/taco.jpg",],
                ["name" => "Quesadilla con guacamole", "price" => 5.99, "ingredients" => "tortilla di mais, pollo, formaggio, guacamole","available" => true,"img_dish" => "uploads/dishes/Taqueria-del-Sol/id-6/quesadilla.jpg",],
                ["name" => "Burrito con carne asada", "price" => 7.99, "ingredients" => "tortilla di farina, carne asada, fagioli, riso","available" => true,"img_dish" => "uploads/dishes/Taqueria-del-Sol/id-6/burrito.jpg",],
                ["name" => "Salsa di mango", "price" => 2.99, "ingredients" => "mango, peperoncino, cipolla, coriandolo", "available" => true,"img_dish" => "uploads/dishes/Taqueria-del-Sol/id-6/salsamango.jpg",],
                ["name" => "Churros con cioccolato", "price" => 4.99, "ingredients" => "churros, cioccolato fuso","available" => true,"img_dish" => "uploads/dishes/Taqueria-del-Sol/id-6/churros.jpg",],
                ["name" => "Corona Extra", "price" => 3.49, "ingredients" => "acqua, malto d'orzo, luppolo","available" => true,"img_dish" => "uploads/dishes/Taqueria-del-Sol/id-6/corona.jpg",],
            ],
            "orders" => [
                ["total_price"=>"", "customer_address" => "Via franchino 12", "customer_name" => "Franco", "customer_surname" => "Franchetti", "date_and_time" => "2023-05-22 19:00:25", "customer_phone" => "0025896325", "customer_email" => "franco@gmail.com",],
            ]
        ],
        [
            "id" => 7,

            //USER
            "name" => "Francesco",
            "lastname" => "Laturro",
            "email" => "info@chefsdelightristorante.it",
            "password" => "XXXXXX",

            //RESTAURANT 
            "name_restaurant"  => "Chef's Delight", 
            "address_restaurant" => "Via Carlo Porta, 456 - Milano (MI), 20123 Italia",
            "vat_restaurant" =>"IT9876543510",
            "image_restaurant" => "uploads/restaurants/Chefs-Delight/id-7/chef.jpg",
            "type" => "Italiano" , 
            "dishes" => [
                ["name" => "Antipasto dello chef", "price" => 20.99, "ingredients" => "selezione dello chef di formaggi e affettati","available" => true,"img_dish" => "uploads/dishes/Chefs-Delight/id-7/chefantipasto.jpg",],
                ["name" => "Risotto ai frutti di mare", "price" => 22.99, "ingredients" => "riso, gamberi, cozze, pomodoro","available" => true,"img_dish" => "uploads/dishes/Chefs-Delight/id-7/chefrisotto.jpg",],
                ["name" => "Filetto alla griglia con salsa al vino rosso", "price" => 28.99, "ingredients" => "filetto di manzo, vino rosso, rosmarino","available" => true,"img_dish" => "uploads/dishes/Chefs-Delight/id-7/cheffiletto.jpg",],
                ["name" => "Insalata gourmet", "price" => 15.99, "ingredients" => "insalata mista, noci, formaggio di capra, miele","available" => true,"img_dish" => "uploads/dishes/Chefs-Delight/id-7/chef.jpg",],
                ["name" => "Panna cotta al cioccolato bianco", "price" => 8.99, "ingredients" => "panna, cioccolato bianco, frutti di bosco", "available" => true,"img_dish" => "uploads/dishes/Chefs-Delight/id-7/chefpannacotta.jpg",],
                ["name" => "DonnaFugata", "price" => 17.99, "ingredients" => "uva, fermentazione, gioia","available" => true,"img_dish" => "uploads/dishes/Chefs-Delight/id-7/chefdonnafugata.jpg",],
            ],
            "orders" => [
                [ "total_price"=>"", "customer_address" => "Via dante 12", "customer_name" => "Amedeo", "customer_surname" => "Laurenti", "date_and_time" => "2023-05-22 19:00:25", "customer_phone" => "8470125444", "customer_email" => "amedeo@gmail.com",],
            ]
        ],
        [
            "id" => 8,

            //USER
            "name" => "Rick",
            "lastname" => "Bayless",
            "email" => "info@elrinconmexicano.it",
            "password" => "XXXXXX",

            //RESTAURANT 
            "name_restaurant"  => "El Rincon Mexicano", 
            "address_restaurant" => "Piazzale Cadorna - Milano (MI), 20123 Italia",
            "vat_restaurant" => "IT98763432108",
            "image_restaurant" => "uploads/restaurants/El-Rincon-Mexicano/id-8/logo_elrincon-mexicano.png",
            "type" => "Messicano",
            "dishes" => [
                ["name" => "Enchiladas al pollo", "price" => 8.99, "ingredients" => "pollo, tortillas, salsa di pomodoro, formaggio", "available" => true,"img_dish" => "uploads/dishes/El-Rincon-Mexicano/id-8/enchiladas.png",],
                ["name" => "Guacamole fresco", "price" => 4.99, "ingredients" => "avocado, pomodoro, cipolla, coriandolo","available" => true,"img_dish" => "uploads/dishes/El-Rincon-Mexicano/id-8/guacamole.png",],
                ["name" => "Tostadas con carne", "price" => 6.99, "ingredients" => "carne macinata, fagioli neri, lattuga, formaggio","available" => true,"img_dish" => "uploads/dishes/El-Rincon-Mexicano/id-8/tostadas.png",],
                ["name" => "Flan al caramello", "price" => 5.99, "ingredients" => "latte condensato, uova, zucchero","available" => true,"img_dish" => "uploads/dishes/El-Rincon-Mexicano/id-8/flan-caramello.png",],
                ["name" => "Corona Extra", "price" => 3.49, "ingredients" => "acqua, malto d'orzo, luppolo","available" => true,"img_dish" => "uploads/dishes/El-Rincon-Mexicano/id-8/corona-extra.png",],
            ],
            "orders" => [
                [ "total_price"=>"", "customer_address" => "Via massoni 12", "customer_name" => "Giorgio", "customer_surname" => "Bonolis", "date_and_time" => "2023-05-22 19:00:25", "customer_phone" => "2558874102", "customer_email" => "giorgio@gmail.com",],
            ]
        ],
        [
            "id" => 9,

            //USER
            "name" => "Gabriela",
            "lastname" => "Cámara",
            "email" => "lafiestagrill@gmail.com",
            "password" => "XXXXXX",

            //RESTAURANT 
            "name_restaurant"  => "La Fiesta Grill", 
            "address_restaurant" => "Corso Como 32 - Milano (MI), 20123 Italia",
            "vat_restaurant" => "IT02822916519",
            "image_restaurant" => "uploads/restaurants/La-Fiesta-Grill/id-9/fiestagrill.jpg",
            "type" => "Messicano",
            "dishes" => [
                ["name" => "Tacos al pastor", "price" => 4.99, "ingredients" => "maiale marinato, cipolla, coriandolo","available" => true,"img_dish" => "uploads/dishes/La-Fiesta-Grill/id-9/tacos.jpg",],
                ["name" => "Nachos con formaggio", "price" => 6.99, "ingredients" => "nachos, formaggio fuso, pico de gallo","available" => true,"img_dish" => "uploads/dishes/La-Fiesta-Grill/id-9/nachos.jpg",],
                ["name" => "Burrito vegetariano", "price" => 7.99, "ingredients" => "tortilla di farina, fagioli neri, riso, avocado","available" => true,"img_dish" => "uploads/dishes/La-Fiesta-Grill/id-9/burrito.jpg",],
                ["name" => "Tres Leches", "price" => 5.99, "ingredients" => "torta, latte condensato, panna montata","available" => true,"img_dish" => "uploads/dishes/La-Fiesta-Grill/id-9/tresleches.jpg",],
                ["name" => "Pacifico Clara", "price" => 3.79, "ingredients" => "acqua, malto d'orzo, luppolo","available" => true,"img_dish" => "uploads/dishes/La-Fiesta-Grill/id-9/pcifico.jpg",],
            ],
            "orders" => [
                [ "total_price"=>"", "customer_address" => "Via zanzia 12", "customer_name" => "Vanessa", "customer_surname" => "Rodriguez", "date_and_time" => "2023-05-22 19:00:25", "customer_phone" => "4488552233", "customer_email" => "vanessa@gmail.com",],
            ]
        ],
    ]
];

return $restaurants;

?>
