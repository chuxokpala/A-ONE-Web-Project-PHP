<?php
    // Sample products array (replace with DB query later)
    $products = [
      [
        'id' => 1,
        'name' => 'JinKO 625W Solar Panel',
        'price' => 2000,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Jinko 625W solar panel is a high-efficiency monocrystalline module using N-type TOPCon technology, delivering up to 22.4% efficiency and ideal for large-scale and commercial solar installations.',
        'weight' => 3.5, // Weight in kilograms
        'rating' => ['stars' => 47, 'count' => 18],
        'brandID' => 'JKM625',
        'keywords' => ['JinKO', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/JinKo Solar Panels Range Datasheet.pdf',
      ],
      [
        'id' => 2,
        'name' => 'JinKO 615W Solar Panel',
        'price' => 20000,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Jinko 615W solar panel is a high-efficiency monocrystalline module using N-type TOPCon technology, delivering up to 22.4% efficiency and ideal for large-scale and commercial solar installations.',
        'weight' => 3.5, // Weight in kilograms
        'rating' => ['stars' => 45, 'count' => 14],
        'brandID' => 'JKM615',
        'keywords' => ['JinKO', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/JinKo Solar Panels Range Datasheet.pdf',
      ],
      [
        'id' => 3,
        'name' => 'JinKO 580W Solar Panel',
        'price' => 234.56,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Jinko 580W solar panel is a high-efficiency monocrystalline module using N-type TOPCon technology, delivering up to 22.4% efficiency and ideal for large-scale and commercial solar installations.',
        'weight' => 3.5, // Weight in kilograms
        'rating' => ['stars' => 49, 'count' => 11],
        'brandID' => 'JKM580',
        'keywords' => ['JinKO', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/JinKo Solar Panels Range Datasheet.pdf',
      ],
      [
        'id' => 4,
        'name' => 'JinKO 555W Solar Panel',
        'price' => 0,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Jinko 555W solar panel is a high-efficiency monocrystalline module using N-type TOPCon technology, delivering up to 22.4% efficiency and ideal for large-scale and commercial solar installations.',
        'weight' => 3.5, // Weight in kilograms
        'rating' => ['stars' => 46, 'count' => 20],
        'brandID' => 'JKM555',
        'keywords' => ['JinKO', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/JinKo Solar Panels Range Datasheet.pdf',
      ],
      [
        'id' => 5,
        'name' => 'JinKO 550W Solar Panel',
        'price' => 0,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Jinko 550W solar panel is a high-efficiency monocrystalline module using N-type TOPCon technology, delivering up to 22.4% efficiency and ideal for large-scale and commercial solar installations.',
        'weight' => 3.5, // Weight in kilograms
        'rating' => ['stars' => 48, 'count' => 17],
        'brandID' => 'JKM550',
        'keywords' => ['JinKO', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/JinKo Solar Panels Range Datasheet.pdf',
      ],
      [
        'id' => 6,
        'name' => 'JinKO 545W Solar Panel',
        'price' => 0,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Jinko 545W solar panel is a high-efficiency monocrystalline module using N-type TOPCon technology, delivering up to 22.4% efficiency and ideal for large-scale and commercial solar installations.',
        'weight' => 3.5, // Weight in kilograms
        'rating' => ['stars' => 44, 'count' => 15],
        'brandID' => 'JKM545',
        'keywords' => ['JinKO', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/JinKo Solar Panels Range Datasheet.pdf',
      ],
      [
        'id' => 7,
        'name' => 'JinKO 480W Solar Panel',
        'price' => 0,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Jinko 480W solar panel is a high-efficiency monocrystalline module using N-type TOPCon technology, delivering up to 22.4% efficiency and ideal for large-scale and commercial solar installations.',
        'weight' => 3.5, // Weight in kilograms
        'rating' => ['stars' => 42, 'count' => 19],
        'brandID' => 'JKM480',
        'keywords' => ['JinKO', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/JinKo Solar Panels Range Datasheet.pdf',
      ],
      [
        'id' => 8,
        'name' => 'JinKO 475W Solar Panel',
        'price' => 0,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Jinko 475W solar panel is a high-efficiency monocrystalline module using N-type TOPCon technology, delivering up to 22.4% efficiency and ideal for large-scale and commercial solar installations.',
        'weight' => 3.5, // Weight in kilograms
        'rating' => ['stars' => 47, 'count' => 10],
        'brandID' => 'JKM475',
        'keywords' => ['JinKO', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/JinKo Solar Panels Range Datasheet.pdf',
      ],
      [
        'id' => 9,
        'name' => 'JinKO 465W Solar Panel',
        'price' => 0,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Jinko 465W solar panel is a high-efficiency monocrystalline module using N-type TOPCon technology, delivering up to 22.4% efficiency and ideal for large-scale and commercial solar installations.',
        'weight' => 3.5, // Weight in kilograms
        'rating' => ['stars' => 45, 'count' => 13],
        'brandID' => 'JKM465',
        'keywords' => ['JinKO', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/JinKo Solar Panels Range Datasheet.pdf',
      ],
      [
        'id' => 10,
        'name' => 'JinKO 440W Solar Panel',
        'price' => 0,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Jinko 440W solar panel is a high-efficiency monocrystalline module using N-type TOPCon technology, delivering up to 22.4% efficiency and ideal for large-scale and commercial solar installations.',
        'weight' => 3.5, // Weight in kilograms
        'rating' => ['stars' => 43, 'count' => 16],
        'brandID' => 'JKM440',
        'keywords' => ['JinKO', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/JinKo Solar Panels Range Datasheet.pdf',
      ],
      [
        'id' => 11,
        'name' => 'Felicity 540W Solar Panel',
        'price' => 0,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'The Felicity 540W solar panel is a high-efficiency monocrystalline module with half-cut cell and PERC technology, suitable for residential and commercial use.',
        'weight' => 3.5, // Weight in kilograms
        'rating' => ['stars' => 46, 'count' => 14],
        'brandID' => 'FEL540',
        'keywords' => ['Felicity', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/Felicity Solar Panel 540W.pdf',
      ],
      [
        'id' => 12,
        'name' => 'Felicity 450W Solar Panel',
        'price' => 0,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'The Felicity 450W solar panel is a high-efficiency monocrystalline module with half-cut cell and PERC technology, suitable for residential and commercial use.',
        'weight' => 3.5, // Weight in kilograms
        'rating' => ['stars' => 44, 'count' => 13],
        'brandID' => 'FEL450',
        'keywords' => ['Felicity', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/Felicity Solar Panel 450W.pdf',
      ],
  [
    'id' => 13,
    'name' => 'felicity 400W Solar Panel',
    'price' => 0,
    'image' => 'assets\shop assets\product images\Products - HalfCut PV Panelx1.png',
    'category' => 'Solar Panels',
    'description' => 'The Felicity 400W solar panel is a high-efficiency monocrystalline module with half-cut cell and PERC technology, suitable for residential and commercial use.',
    'weight' => 3.5, // Weight in kilograms
    'rating' => ['stars' => 43, 'count' => 12],
    'brandID' => 'FEL400',
    'keywords' => ['felicity', 'Solar PV', 'A-ONE', 'Products'],
    'pdf' => 'assets\shop assets\datasheets\Felicity Solar Panel 450W.pdf',
  ],
  [
    'id' => 14,
    'name' => 'Luminous 1500VA Offgrid Inverter',
    'price' => 0,
    'image' => './assets/shop assets/product images/1100-1500VA Hybrid Inverter.png',
    'category' => 'Inverters',
    'description' => 'The Luminous 1500VA Off-Grid Inverter is a 24V system inverter providing pure sine wave output, ideal for powering essential appliances during outages with advanced safety features.',
    'weight' => 3.5, // Weight in kilograms
    'rating' => [
        'stars' => 49,
        'count' => 55
    ],
    'brandID' => 'LUM1500',
    'keywords' => ['inverter', 'luminous', 'aone', 'products'],
    'pdf' => 'assets\shop assets\datasheets\Luminous solar panel, inverter,battery datasheet.pdf',
  ],
  [
    'id' => 15,
    'name' => 'Luminous 850VA Offgrid Inverter',
    'price' => 0,
    'image' => './assets/shop assets/product images/1100-1500VA Hybrid Inverter.png',
    'category' => 'Inverters',
    'weight' => 3.5, // Weight in kilograms
    'description' => 'The Luminous 850VA Hybrid Inverter is a table-top, pure sine wave inverter with built-in solar charge controller, ideal for small homes using a 12V battery and up to 600W solar input.',
    'rating' => [
        'stars' => 48,
        'count' => 12
    ],
    'brandID' => 'LUM850',
    'keywords' => ['Inverter', 'Luminous', 'Products', 'A-ONE'],
    'pdf' => 'assets\shop assets\datasheets\Luminous solar panel, inverter,battery datasheet.pdf',
  ],
  [
    'id' => 16,
    'name' => '5KVA Offgrid Inverter',
    'price' => 0,
    'image' => 'assets\shop assets\product images\Hybrid 5KVA & 3KVA Wallmounted Inverter.jpg',
    'category' => 'Inverters',
    'description' => 'A 5KVA wall-mounted off-grid inverter converts solar or battery power to AC, ideal for homes or small businesses without grid access.',
    'weight' => 3.5, // Weight in kilograms
    'rating' => [
        'stars' => 43,
        'count' => 56
    ],
    'brandID' => 'HINV5KVA',
    'keywords' => ['Inverter', 'A-ONE', 'Products'],
    'pdf' => 'assets\shop assets\datasheets\General Wall Mounted Hybrid Inverter - 3KVA & 5KVA.pdf',
  ],
  [
    'id' => 17,
    'name' => '3KVA Offgrid Inverter',
    'price' => 0,
    'image' => 'assets\shop assets\product images\Hybrid 5KVA & 3KVA Wallmounted Inverter.jpg',
    'category' => 'Inverters',
    'description' => 'A 3KVA wall-mounted off-grid inverter converts solar or battery power to AC, ideal for homes or small businesses without grid access.',
    'weight' => 3.5, // Weight in kilograms
    'rating' => [
        'stars' => 46,
        'count' => 32
    ],
    'brandID' => 'HINV3KVA',
    'keywords' => ['Inverter', 'A-ONE', 'Products'],
    'pdf' => 'assets\shop assets\datasheets\General Wall Mounted Hybrid Inverter - 3KVA & 5KVA.pdf',
  ], 
[
  'id' => 18,
  'name' => 'felicity IVPM 10KVA 48V Inverter',
  'price' => 0,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPM 10KVA 48V Inverter is a high-capacity hybrid inverter with a 120A MPPT charge controller, ideal for large residential or commercial systems, offering efficient solar energy conversion and battery management.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 50
  ],
  'brandID' => 'FELIVPM10KVA48V',
  'keywords' => ['Inverter', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\Felicity IVPS-IVPMSeriesManual2024-11-14.pdf',
],
[
  'id' => 19,
  'name' => 'felicity IVPS 10KVA 48V Inverter',
  'price' => 0,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPS 10KVA 48V Inverter is a high-efficiency pure sine wave inverter with a 120A MPPT charge controller, ideal for large off-grid solar systems, offering reliable power for commercial and industrial use.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 18
  ],
  'brandID' => 'FELIVPS10KVA48V',
  'keywords' => ['Inverter', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\Felicity IVPS-IVPMSeriesManual2024-11-14.pdf',
],
[
  'id' => 20,
  'name' => 'felicity IVPM 7.5KVA 48V Inverter',
  'price' => 0,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPM 7.5KVA 48V Inverter is a high-capacity hybrid inverter with a 120A MPPT charge controller, ideal for large residential or commercial systems, offering efficient solar energy conversion and battery management.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 36
  ],
  'brandID' => 'FELIVPM7.5KVA48V',
  'keywords' => ['Inverter', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\Felicity IVPS-IVPMSeriesManual2024-11-14.pdf',
],
[
  'id' => 21,
  'name' => 'felicity IVPS 7.5KVA 48V Inverter',
  'price' => 0,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPS 7.5KVA 48V Inverter is a high-efficiency pure sine wave inverter with a 120A MPPT charge controller, ideal for large off-grid solar systems, offering reliable power for commercial and industrial use.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 55
  ],
  'brandID' => 'FELIVPS7.5KVA48V',
  'keywords' => ['Inverter', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\Felicity IVPS-IVPMSeriesManual2024-11-14.pdf',
],
[
  'id' => 22,
  'name' => 'felicity IVPM 5KVA 48V Inverter',
  'price' => 0,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPM 5KVA 48V Inverter is a high-capacity hybrid inverter with a 120A MPPT charge controller, ideal for large residential or commercial systems, offering efficient solar energy conversion and battery management.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 45,
      'count' => 13
  ],
  'brandID' => 'FELIVPM5KVA48V',
  'keywords' => ['Inverter', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\Felicity IVPS-IVPMSeriesManual2024-11-14.pdf',
],
[
  'id' => 23,
  'name' => 'felicity IVPS 5KVA 48V Inverter',
  'price' => 0,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPS 5KVA 48V Inverter is a high-efficiency pure sine wave inverter with a 120A MPPT charge controller, ideal for large off-grid solar systems, offering reliable power for commercial and industrial use.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 43,
      'count' => 70
  ],
  'brandID' => 'FELIVPS5KVA48V',
  'keywords' => ['Inverter', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\Felicity IVPS-IVPMSeriesManual2024-11-14.pdf',
],
[
  'id' => 24,
  'name' => 'felicity IVPM 5KVA 24V Inverter',
  'price' => 0,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPM 5KVA 24V Inverter is a high-capacity hybrid inverter with a 120A MPPT charge controller, ideal for large residential or commercial systems, offering efficient solar energy conversion and battery management.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 49,
      'count' => 19
  ],
  'brandID' => 'FELIVPM5KVA24V',
  'keywords' => ['Inverter', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\Felicity IVPS-IVPMSeriesManual2024-11-14.pdf',
],
[
  'id' => 25,
  'name' => 'felicity IVPM 3.5KVA 48V Inverter',
  'price' => 0,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPM 3.5KVA 48V Inverter is a high-capacity hybrid inverter with a 120A MPPT charge controller, ideal for large residential or commercial systems, offering efficient solar energy conversion and battery management.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 40
  ],
  'brandID' => 'FELIVPM3.5KVA48V',
  'keywords' => ['Inverter', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\Felicity IVPS-IVPMSeriesManual2024-11-14.pdf',
],
[
  'id' => 26,
  'name' => 'felicity IVPM 3.5KVA 24V Inverter',
  'price' => 0,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPM 3.5KVA 24V Inverter is a high-capacity hybrid inverter with a 120A MPPT charge controller, ideal for large residential or commercial systems, offering efficient solar energy conversion and battery management.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 60
  ],
  'brandID' => 'FELIVPM3.5KVA24V',
  'keywords' => ['Inverter', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\Felicity IVPS-IVPMSeriesManual2024-11-14.pdf',
],
[
  'id' => 27,
  'name' => 'felicity IVPS 3.5KVA 48V Inverter',
  'price' => 0,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPS 3.5KVA 48V Inverter is a high-efficiency pure sine wave inverter with a 120A MPPT charge controller, ideal for large off-grid solar systems, offering reliable power for commercial and industrial use.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 40
  ],
  'brandID' => 'FELIVPS3.5KVA48V',
  'keywords' => ['Inverter', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\Felicity IVPS-IVPMSeriesManual2024-11-14.pdf',
],
[
  'id' => 28,
  'name' => 'felicity IVPS 3.5KVA 24V Inverter',
  'price' => 0,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPS 3.5KVA 24V Inverter is a high-efficiency pure sine wave inverter with a 120A MPPT charge controller, ideal for large off-grid solar systems, offering reliable power for commercial and industrial use.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 20
  ],
  'brandID' => 'FELIVPS3.5KVA24V',
  'keywords' => ['Inverter', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\Felicity IVPS-IVPMSeriesManual2024-11-14.pdf',
],
[
  'id' => 29,
  'name' => 'felicity IVPM 2.5KVA 24V Inverter',
  'price' => 0,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPM 2.5KVA 24V Inverter is a high-capacity hybrid inverter with a 120A MPPT charge controller, ideal for large residential or commercial systems, offering efficient solar energy conversion and battery management.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 19
  ],
  'brandID' => 'FELIVPM2.5KVA24V',
  'keywords' => ['Inverter', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\Felicity IVPS-IVPMSeriesManual2024-11-14.pdf',
],
[
  'id' => 30,
  'name' => 'felicity IVPM 2.5KVA 12V Inverter',
  'price' => 0,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPM 2.5KVA 12V Inverter is a high-capacity hybrid inverter with a 120A MPPT charge controller, ideal for large residential or commercial systems, offering efficient solar energy conversion and battery management.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 13
  ],
  'brandID' => 'FELIVPM2.5KVA12V',
  'keywords' => ['Inverter', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\Felicity IVPS-IVPMSeriesManual2024-11-14.pdf',
],
[
  'id' => 31,
  'name' => 'Inverlast 220Ah Tubular Battery',
  'price' => 0,
  'image' => 'assets\shop assets\product images\Lumonous 220Ah Wet Cell Battery Inverlast.png',
  'category' => 'Batteries',
  'description' => 'The Inverlast 220Ah Tubular Battery is a high-performance, deep-cycle battery with a tall tubular design, offering long-lasting power and durability for inverter and solar applications.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 50
  ],
  'brandID' => 'LUMI220AHBAT',
  'keywords' => ['Inverter', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets/shop assets/datasheets/Luminous solar panel, inverter,battery datasheet.pdf',
],
[
  'id' => 32,
  'name' => 'NRGT 220Ah Tubular Battery',
  'price' => 0,
  'image' => 'assets\shop assets\product images\Lumonous 220Ah Tubular Battery NRGT.png',
  'category' => 'Batteries',
  'description' => 'The NRGT 220Ah Tubular Battery is a durable, deep-cycle battery with tall tubular plates, offering reliable power for inverter and solar systems with low maintenance and long cycle life.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 40
  ],
  'brandID' => 'LUMN220AHBAT',
  'keywords' => ['Inverter', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets/shop assets/datasheets/Luminous solar panel, inverter,battery datasheet.pdf',
],
[
  'id' => 33,
  'name' => 'felicity 48V 200Ah 10kWh LiFePO₄ Battery',
  'price' => 0,
  'image' => 'assets\shop assets\product images\LPBA 48V 200Ah 10kWh Grade A Lithium Phosphate Solar Battery Pack with BMS by Felicity Solar.jpeg',
  'category' => 'Batteries',
  'description' => 'The Felicity 48V 200Ah 10kWh LiFePO₄ Battery is a high-capacity, long-life lithium battery ideal for solar energy storage in residential and commercial systems.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 20
  ],
  'brandID' => 'FEL48V200AH10KWHBATT',
  'keywords' => ['Battery', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\LPBA48200-IIManual2025-1-17.pdf',
],
[
  'id' => 34,
  'name' => 'felicity 24V 100Ah 10kWh LiFePO₄ Battery',
  'price' => 0,
  'image' => 'assets\shop assets\product images\LPBF 24V 100ah M 2.5KWH Home Use Energy Storage Lithium Battery.jpeg',
  'category' => 'Batteries',
  'description' => 'The Felicity 24V 100Ah 10kWh LiFePO₄ Battery is a high-capacity, long-life lithium battery ideal for solar energy storage in residential and commercial systems.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 50
  ],
  'brandID' => 'FEL24V100AH10KWHBATT',
  'keywords' => ['Battery', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\LPBF24100-MManual2024-9-24.pdf',
],
[
  'id' => 35,
  'name' => 'felicity 48V 100Ah 10kWh LiFePO₄ Battery',
  'price' => 0,
  'image' => 'assets\shop assets\product images\LPBF 100Ah 48V 5KWH LiFePO4 Power Wall Mounted Lithium Battery For Solar System.jpeg',
  'category' => 'Batteries',
  'description' => 'The Felicity 48V 100Ah 10kWh LiFePO₄ Battery is a high-capacity, long-life lithium battery ideal for solar energy storage in residential and commercial systems.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 15
  ],
  'brandID' => 'FEL48V100AH10KWHBATT',
  'keywords' => ['Battery', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\LPBF48100-H-LPBF48200-HManual2024-12-27.pdf',
],
[
  'id' => 36,
  'name' => 'felicity 48V 350Ah 17.5kWh LiFePO₄ Battery',
  'price' => 0,
  'image' => 'assets\shop assets\product images\LPBF 17.5kWh 48V 350Ah Rechargeable LiFePO4 Battery Solar Pack with BMS by Felicity Solar.jpeg',
  'category' => 'Batteries',
  'description' => 'The Felicity 48V 350Ah 17.5kWh LiFePO₄ Battery is a long-life, high-capacity lithium battery with BMS, ideal for scalable solar energy storage.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 60
  ],
  'brandID' => 'FEL48V350AH17.5KWHBATT',
  'keywords' => ['Battery', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\LPBF48350Manual2024-9-13.pdf',
],
[
  'id' => 37,
  'name' => 'felicity 48V 150Ah 7.5kWh LiFePO₄ Battery',
  'price' => 0,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Batteries',
  'description' => 'The Felicity 48V 150Ah 7.5kWh LiFePO₄ Battery is a long-life, high-capacity lithium battery with BMS, ideal for scalable solar energy storage.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 70
  ],
  'brandID' => 'FEL48V150AH17.5KWHBATT',
  'keywords' => ['Battery', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\LPBF48150-P.pdf',
],
[
  'id' => 38,
  'name' => 'felicity 24V 200Ah 4.8kWh LiFePO₄ Battery',
  'price' => 0,
  'image' => 'assets\shop assets\product images\LPBF24200-M.jpeg',
  'category' => 'Batteries',
  'description' => 'The Felicity 24V 200Ah 4.8kWh LiFePO₄ Battery is a long-life, high-capacity lithium battery with BMS, ideal for scalable solar energy storage.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 40
  ],
  'brandID' => 'FEL24V200AH4.8KWHBATT',
  'keywords' => ['Battery', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\LPBF24200-M.pdf',
],
[
  'id' => 39,
  'name' => 'felicity 48V 300Ah 15kWh LiFePO₄ Battery',
  'price' => 0,
  'image' => 'assets\shop assets\product images\FLA48300.jpeg',
  'category' => 'Batteries',
  'description' => 'The Felicity 48V 300Ah 15kWh LiFePO₄ Battery is a long-life, high-capacity lithium battery with BMS, ideal for scalable solar energy storage.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 30
  ],
  'brandID' => 'FEL48V300AH15KWHBATT',
  'keywords' => ['Battery', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\FLA48300.pdf',
],
[
  'id' => 40,
  'name' => 'felicity 48V 500Ah 25kWh LiFePO₄ Battery',
  'price' => 0,
  'image' => 'assets\shop assets\product images\FLA48500.jpeg',
  'category' => 'Batteries',
  'description' => 'The Felicity 48V 500Ah 25kWh LiFePO₄ Battery is a long-life, high-capacity lithium battery with BMS, ideal for scalable solar energy storage.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 60
  ],
  'brandID' => 'FEL48V500AH25KWHBATT',
  'keywords' => ['Battery', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\FLA48500.pdf',
],
[
  'id' => 41,
  'name' => 'felicity A3 30W All-In-One Lamp',
  'price' => 0,
  'image' => 'assets\shop assets\product images\A3-60W-P.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity A3 30W All-In-One Lamp is a solar-powered LED street light with an integrated panel, battery, and sensor, ideal for outdoor lighting.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 80
  ],
  'brandID' => 'FELA3-30W',
  'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\D2-30W-P.pdf',
],
[
  'id' => 42,
  'name' => 'felicity A3 40W All-In-One Lamp',
  'price' => 0,
  'image' => 'assets\shop assets\product images\A3-60W-P.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity A3 40W All-In-One Lamp is a solar-powered LED street light with an integrated panel, battery, and sensor, ideal for outdoor lighting.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 14
  ],
  'brandID' => 'FELA3-40W',
  'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\D2-30W-P.pdf',
],
[
  'id' => 43,
  'name' => 'felicity A3 60W All-In-One Lamp',
  'price' => 0,
  'image' => 'assets\shop assets\product images\A3-60W-P.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity A3 60W All-In-One Lamp is a solar-powered LED street light with an integrated panel, battery, and sensor, ideal for outdoor lighting.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 30
  ],
  'brandID' => 'FELA3-60W',
  'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
  // 'pdf' => 'assets\shop assets\datasheets\D2-30W-P.pdf',
],
[
  'id' => 44,
  'name' => 'felicity A3 100W All-In-One Lamp',
  'price' => 0,
  'image' => 'assets\shop assets\product images\A3-100W-S.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity A3 100W All-In-One Lamp is a solar-powered LED street light with an integrated panel, battery, and sensor, ideal for outdoor lighting.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 70
  ],
  'brandID' => 'FELA3-100W',
  'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
  // 'pdf' => 'assets\shop assets\datasheets\D2-30W-P.pdf',
],
[
  'id' => 45,
  'name' => 'felicity A3 150W All-In-One Lamp',
  'price' => 0,
  'image' => 'assets\shop assets\product images\A3-150W.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity A3 150W All-In-One Lamp is a solar-powered LED street light with an integrated panel, battery, and sensor, ideal for outdoor lighting.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 30
  ],
  'brandID' => 'FELA3-150W',
  'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
  // 'pdf' => 'assets\shop assets\datasheets\D2-30W-P.pdf',
],
[
  'id' => 46,
  'name' => 'felicity D2 30W-P All-In-One Lamp',
  'price' => 0,
  'image' => 'assets\shop assets\product images\D2-30W-P.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity D2 30W-P All-In-One Lamp is a compact solar-powered LED street light that integrates a 55W monocrystalline panel, 260Wh LiFePO₄ battery, and microwave sensor. It delivers 4,800 lumens and operates for over 12 hours daily, making it ideal for outdoor areas like parks and rural roads. Its IP65-rated design ensures durability in various weather conditions.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 30
  ],
  'brandID' => 'FELD2-30W-P',
  'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\D2-30W-P.pdf',
],
[
  'id' => 47,
  'name' => 'felicity D2 40W-P All-In-One Lamp',
  'price' => 0,
  'image' => 'assets\shop assets\product images\D2-40W-P.jpeg',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity D2 40W-P All-In-One Lamp is a compact solar-powered LED street light that integrates a 55W monocrystalline panel, 260Wh LiFePO₄ battery, and microwave sensor. It delivers 4,800 lumens and operates for over 12 hours daily, making it ideal for outdoor areas like parks and rural roads. Its IP65-rated design ensures durability in various weather conditions.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 20
  ],
  'brandID' => 'FELD2-40W-P',
  'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
  // 'pdf' => 'assets\shop assets\datasheets\D2-30W-P.pdf',
],
[
  'id' => 48,
  'name' => 'felicity D2 60W-P All-In-One Lamp',
  'price' => 0,
  'image' => 'assets\shop assets\product images\D2-60W-P.jpeg',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity D2 60W-P All-In-One Lamp is a compact solar-powered LED street light that integrates a 55W monocrystalline panel, 260Wh LiFePO₄ battery, and microwave sensor. It delivers 4,800 lumens and operates for over 12 hours daily, making it ideal for outdoor areas like parks and rural roads. Its IP65-rated design ensures durability in various weather conditions.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 17
  ],
  'brandID' => 'FELD3-60W-P',
  'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
  // 'pdf' => 'assets\shop assets\datasheets\D2-30W-P.pdf',
],
[
  'id' => 49,
  'name' => 'felicity D2 80W-P All-In-One Lamp',
  'price' => 0,
  'image' => 'assets\shop assets\product images\D2-30W-P.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity D2 80W-P All-In-One Lamp is a compact solar-powered LED street light that integrates a 55W monocrystalline panel, 260Wh LiFePO₄ battery, and microwave sensor. It delivers 4,800 lumens and operates for over 12 hours daily, making it ideal for outdoor areas like parks and rural roads. Its IP65-rated design ensures durability in various weather conditions.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 60
  ],
  'brandID' => 'FELD2-80W-P',
  'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
  // 'pdf' => 'assets\shop assets\datasheets\D2-30W-P.pdf',
],
[
  'id' => 50,
  'name' => 'felicity D2 100W-S All-In-One Lamp',
  'price' => 0,
  'image' => 'assets\shop assets\product images\D2-30W-P.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity D2 100W-S All-In-One Lamp is a powerful solar street light delivering 16,000 lumens, integrating a 100W monocrystalline panel, 888Wh LiFePO₄ battery, and motion sensor for efficient outdoor illumination. ',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 60
  ],
  'brandID' => 'FELD2-100W-S',
  'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
  // 'pdf' => 'assets\shop assets\datasheets\D2-30W-P.pdf',
],
[
  'id' => 51,
  'name' => 'felicity D2 120W-S All-In-One Lamp',
  'price' => 0,
  'image' => 'assets\shop assets\product images\D2-30W-P.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity D2 120W-S All-In-One Lamp is a powerful solar street light delivering 16,000 lumens, integrating a 100W monocrystalline panel, 888Wh LiFePO₄ battery, and motion sensor for efficient outdoor illumination. ',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 30
  ],
  'brandID' => 'FELD2-120W-S',
  'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
  // 'pdf' => 'assets\shop assets\datasheets\D2-30W-P.pdf',
],
[
  'id' => 52,
  'name' => 'felicity D2 150W-S All-In-One Lamp',
  'price' => 0,
  'image' => 'assets\shop assets\product images\D2-30W-P.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity D2 150W-S All-In-One Lamp is a powerful solar street light delivering 16,000 lumens, integrating a 100W monocrystalline panel, 888Wh LiFePO₄ battery, and motion sensor for efficient outdoor illumination. ',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 15
  ],
  'brandID' => 'FELD2-150W-S',
  'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
  // 'pdf' => 'assets\shop assets\datasheets\D2-30W-P.pdf',
],
[
  'id' => 53,
  'name' => 'felicity F1 60W All-In-One Lamp',
  'price' => 0,
  'image' => 'assets\shop assets\product images\F1-60W.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity F1 60W All-In-One Lamp is a solar-powered LED street light featuring an 85W monocrystalline panel, 532Wh LiFePO₄ battery, and motion sensor, delivering 9,600 lumens for over 12 hours of illumination daily. Its IP65-rated design ensures durability in various weather conditions. ',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 50
  ],
  'brandID' => 'FELF1-60W',
  'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\F1-60W-120W.pdf',
],
[
  'id' => 54,
  'name' => 'felicity F1 80W All-In-One Lamp',
  'price' => 0,
  'image' => 'assets\shop assets\product images\F1-60W.png',
  'category' => 'Solar Lamps',
  'description' => '​The Felicity F1 80W All-In-One Lamp is a solar-powered LED street light delivering 12,800 lumens, featuring a 95W monocrystalline panel, 650Wh LiFePO₄ battery, and motion sensor, suitable for outdoor lighting.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 40
  ],
  'brandID' => 'FELF1-80W',
  'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\F1-60W-120W.pdf',
],
[
  'id' => 55,
  'name' => 'felicity F1 100W All-In-One Lamp',
  'price' => 0,
  'image' => 'assets\shop assets\product images\F1-100W.jpeg',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity F1 100W All-In-One Lamp is a solar LED street light with a 105W panel, 888Wh LiFePO₄ battery, and motion sensor, delivering 16,000 lumens with 3–5 days backup and IP65-rated weather protection.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 60
  ],
  'brandID' => 'FELF1-100W',
  'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\F1-60W-120W.pdf',
],
[
  'id' => 56,
  'name' => 'felicity F1 120W All-In-One Lamp',
  'price' => 0,
  'image' => 'assets\shop assets\product images\F1-120W.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity F1 120W All-In-One Lamp is a solar-powered street light with a 110W panel, 999Wh LiFePO₄ battery, and 19,200 lumens output, providing reliable outdoor illumination with up to 3 days backup.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 12
  ],
  'brandID' => 'FELF1-120W',
  'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\F1-60W-120W.pdf',
],
[
  'id' => 57,
  'name' => 'felicity P2 40W All-In-One Lamp',
  'price' => 0,
  'image' => 'assets\shop assets\product images\P2-40W.jpeg',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity P2 40W All-In-One Lamp is a solar-powered street light with a 55W panel, 260Wh LiFePO₄ battery, and 4,800 lumens output, designed for efficient outdoor illumination with up to 3 days backup.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 16
  ],
  'brandID' => 'FELP2-40W',
  'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\P2-40W-80W.pdf',
],
[
  'id' => 58,
  'name' => 'felicity P2 60W All-In-One Lamp',
  'price' => 0,
  'image' => 'assets\shop assets\product images\P2-60W.jpg',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity P2 60W All-In-One Lamp is a solar-powered street light with a 60W panel, LiFePO₄ battery, and 7,200 lumens output, designed for outdoor illumination with up to 5 days backup.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 14
  ],
  'brandID' => 'FELP2-60W',
  'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\P2-40W-80W.pdf',
],
[
  'id' => 59,
  'name' => 'felicity P2 80W All-In-One Lamp',
  'price' => 0,
  'image' => 'assets\shop assets\product images\P2-80W.jpg',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity P2 80W All-In-One Lamp is a solar-powered street light with an 80W panel, 400Wh LiFePO₄ battery, and 9,600 lumens output, designed for efficient outdoor lighting with up to 3 days backup.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 40
  ],
  'brandID' => 'FELP2-80W',
  'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\P2-40W-80W.pdf',
],
[
  'id' => 60,
  'name' => 'felicity P3 60W All-In-One Lamp',
  'price' => 0,
  'image' => 'assets\shop assets\product images\P3-60W.jpg',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity P3 60W All-In-One Lamp is a solar-powered street light with a 60W panel, 260Wh LiFePO₄ battery, and 7,200 lumens output, offering efficient outdoor lighting with up to 5 days backup.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 11
  ],
  'brandID' => 'FELP3-60W',
  'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\P3-60W&80W.pdf',
],
[
  'id' => 61,
  'name' => 'felicity P3 80W All-In-One Lamp',
  'price' => 0,
  'image' => 'assets\shop assets\product images\P3-60W.jpg',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity P3 80W All-In-One Lamp is a solar-powered street light with an 80W panel, 320Wh LiFePO₄ battery, and 9,600 lumens output, offering efficient lighting with up to 5 days backup.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 15
  ],
  'brandID' => 'FELP3-80W',
  'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\P3-60W&80W.pdf',
],
[
  'id' => 62,
  'name' => 'felicity WiFi Module',
  'price' => 0,
  'image' => 'assets\shop assets\product images\Smart WiFi-S.jpeg',
  'category' => 'Accessories',
  'description' => 'Felicity WiFi Module enables remote monitoring of solar inverters via mobile app with easy plug-and-play setup.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 14
  ],
  'brandID' => 'FEL-WiFi',
  'keywords' => ['WiFi Module', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\Smart WiFi-S.pdf',
],
[
  'id' => 63,
  'name' => 'felicity 11kW AC Car Charger',
  'price' => 0,
  'image' => 'assets\shop assets\product images\EV Car Charger.jpeg',
  'category' => 'Accessories',
  'description' => 'Felicity 11kW AC Car Charger (A11-ST) is a wall-mounted, three-phase EV charger with IP65 protection, 16A output, and 3.5m cable. Ideal for home or commercial use, it includes eight safety features for reliable operation.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 15
  ],
  'brandID' => 'A11-ST',
  'keywords' => ['EV Charger', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\AtlasAVHomeChargerQuickstartGuide.pdf',
],
[
  'id' => 64,
  'name' => 'felicity 7kW AC Car Charger',
  'price' => 0,
  'image' => 'assets\shop assets\product images\EV Car Charger.jpeg',
  'category' => 'Accessories',
  'description' => 'The Felicity 7kW AC Car Charger (Model: A7-ST) is a wall-mounted EV charger delivering 7kW at 32A, designed for residential use. It features IP65 waterproof protection, eight safety functions, and a 3.5m charging cable, ensuring efficient and safe charging for electric vehicles. ',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 15
  ],
  'brandID' => 'A7-ST',
  'keywords' => ['EV Charger', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\AtlasAVHomeChargerQuickstartGuide.pdf',
],
[
  'id' => 65,
  'name' => 'Lorentz PS2-1800-HR-07 Helical Rotor Solar Submersible Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-1800-HR-04H-600x600-1.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-1800-HR-07 is a solar-powered helical rotor submersible pump delivering up to 1.3 m³/h at 120m head, ideal for deep wells, livestock watering, and remote water supply.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 13
  ],
  'brandID' => 'PS2-1800-HR-07',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 66,
  'name' => 'Lorentz PS2-1800-HR-05HL Helical Rotor Solar Submersible Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-1800-HR-04H-600x600-1.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-1800-HR-05HL is a solar-powered helical rotor submersible pump with up to 0.97 m³/h flow and 250m head, ideal for deep wells and remote water supply.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 60
  ],
  'brandID' => 'PS2-1800-HR-05HL',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 67,
  'name' => 'Lorentz PS2-1800-HR-04H Helical Rotor Solar Submersible Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-1800-HR-04H-600x600-1.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-1800-HR-04H is a solar submersible helical rotor pump delivering up to 0.72 m³/h at 140 m head, ideal for deep wells and remote water supply.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 30
  ],
  'brandID' => 'PS2-1800-HR-04H',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 68,
  'name' => 'Lorentz PS2-1800-HR-04 Helical Rotor Solar Submersible Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-1800-HR-04H-600x600-1.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-1800-HR-04 is a solar submersible pump delivering up to 0.71 m³/h at 70 m head, ideal for deep wells and remote use.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 15
  ],
  'brandID' => 'PS2-1800-HR-04',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 69,
  'name' => 'Lorentz PS2-1800-HR-03H Helical Rotor Solar Submersible Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-1800-HR-04H-600x600-1.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-1800-HR-03H is a solar submersible pump delivering up to 0.43 m³/h at 240 m head, ideal for deep wells and remote supply.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 17
  ],
  'brandID' => 'PS2-1800-HR-03H',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 70,
  'name' => 'Lorentz PS2-1800-HR-03 Helical Rotor Solar Submersible Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-1800-HR-04H-600x600-1.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-1800-HR-03 is a solar submersible pump delivering up to 0.43 m³/h at 120 m head, ideal for deep wells and remote use.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 13
  ],
  'brandID' => 'PS2-1800-HR-03',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 71,
  'name' => 'Lorentz PS2-1800-CS-F12-2 Solar Submersible Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-1800-CS-F12-2.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-1800-CS-F12-2 is a solar-powered centrifugal pump delivering up to 19 m³/h at 22 meters head, ideal for irrigation and remote water supply.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 15
  ],
  'brandID' => 'PS2-1800-CS-F12-2',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 72,
  'name' => 'Lorentz PS2-1800-CS-F4-6 Solar Submersible Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-1800-CS-F12-2.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-1800-CS-F4-6 is a solar-powered centrifugal pump delivering up to 8.5 m³/h at 50 meters head, ideal for irrigation and remote water supply.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 40
  ],
  'brandID' => 'PS2-1800-CS-F4-6',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 73,
  'name' => 'Lorentz PS2-1800-C-SJ1-25 Solar Submersible Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-1800-C-SJ1-25.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-1800-C-SJ1-25 is a solar-powered centrifugal submersible pump delivering up to 3.0 m³/h at 140 meters head, ideal for irrigation and remote water supply.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 60
  ],
  'brandID' => 'PS2-1800-C-SJ1-25',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 74,
  'name' => 'Lorentz PS2-600-SJ8-5 Solar Submersible Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-1800-C-SJ1-25.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-600-SJ8-5 is a solar-powered centrifugal submersible pump delivering up to 12 m³/h at 15 meters head, ideal for irrigation and water supply in remote locations.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 18
  ],
  'brandID' => 'PS2-600-SJ8-5',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 75,
  'name' => 'Lorentz PS2-600 HR-14 Solar Submersible Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-600.png',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-600 HR-14 is a solar-powered submersible pump delivering up to 2.6 m³/h at 50 meters head, ideal for irrigation and remote water supply. It features a brushless motor, MPPT controller, and stainless-steel components for durability.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 10
  ],
  'brandID' => 'PS2-600 HR-14',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 76,
  'name' => 'Lorentz PS2-600 HR-10 Solar Submersible Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-600.png',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-600 HR-10 is a solar-powered submersible pump delivering up to 2.0 m³/h at 80 meters head. It features a brushless DC motor, MPPT controller, and stainless-steel components, ideal for irrigation and remote water supply.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 13
  ],
  'brandID' => 'PS2-600 HR-10',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 77,
  'name' => 'Lorentz PS2-600 HR-4H Solar Submersible Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-1800-HR-04H-600x600-1.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-600 HR-4H is a solar-powered submersible pump delivering up to 0.8 m³/h at 80–140 meters head. It features a brushless DC motor, MPPT controller, and stainless-steel components, designed for medium-depth applications.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 10
  ],
  'brandID' => 'PS2-600 HR-04H',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 78,
  'name' => 'Lorentz PS2-600 HR-4 Solar Submersible Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-1800-HR-04H-600x600-1.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-600 HR-4 is a solar-powered submersible pump delivering up to 1.3 m³/h at 40 meters head. It features a brushless DC motor, MPPT controller, and stainless-steel components, ideal for moderate depth pumping needs.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 19
  ],
  'brandID' => 'PS2-600 HR-04',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 79,
  'name' => 'Lorentz PS2-600 HR-3H Solar Submersible Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-1800-HR-04H-600x600-1.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-600 HR-3H is a solar-powered submersible pump delivering up to 0.45 m³/h at 180 meters head. It features a brushless DC motor, MPPT controller, and stainless-steel components, perfect for deep well applications.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 17
  ],
  'brandID' => 'PS2-600 HR-03H',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 80,
  'name' => 'Lorentz PS2-600 HR-3 Solar Submersible Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-1800-HR-04H-600x600-1.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-600 HR-3 is a solar-powered submersible pump delivering up to 1.3 m³/h at 40 meters head. It features a brushless DC motor, MPPT controller, and stainless-steel components, ideal for irrigation and remote water supply.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 17
  ],
  'brandID' => 'PS2-600 HR-03',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 81,
  'name' => 'Lorentz PS2-600-C-SJ5-8 Solar Submersible Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-600-C-SJ5-8.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-600-C-SJ5-8 is a solar-powered submersible pump delivering up to 6.5 m³/h at 30 meters head. It features a 0.70 kW brushless DC motor, MPPT controller, and is ideal for irrigation and remote water supply.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 14
  ],
  'brandID' => 'PS2-600-C-SJ5-8',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 82,
  'name' => 'Lorentz PS2-200 HR-14 Solar Submersible Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-600.png',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-200 HR-14 is a solar-powered submersible pump delivering up to 2.6 m³/h at 20m head. It features a brushless DC motor, MPPT controller, and stainless-steel parts—ideal for irrigation, livestock watering, and off-grid water supply.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 13
  ],
  'brandID' => 'PS2-200 HR-14',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 83,
  'name' => 'Lorentz PS2-200 HR-7 Solar Submersible Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-600.png',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-200 HR-07 is a solar-powered submersible pump delivering up to 1.3 m³/h at 40 meters head. It features a 0.3 kW brushless DC motor, integrated MPPT controller, and stainless-steel components, ideal for irrigation, livestock watering, and remote water supply. ',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 80
  ],
  'brandID' => 'PS2-200 HR-7',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 84,
  'name' => 'Lorentz PS2-150-C-SJ5-08 Solar Submersible Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-150-C-SJ5-8.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-150 C-SJ5-8 is a solar-powered submersible pump delivering up to 4.6 m³/h at 20 meters head. It features a 0.30 kW brushless DC motor, MPPT controller, and stainless-steel components—ideal for irrigation, livestock watering, and remote water supply.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 14
  ],
  'brandID' => 'PS2-150-C-SJ5-08',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 85,
  'name' => 'Lorentz PS2-150-BOOST-240 Surface Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-150-BOOST-240.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-150 BOOST-240 is a solar-powered surface pump delivering up to 0.98 m³/h at 50m head. It features a 300W brushless DC motor and MPPT controller, ideal for off-grid water supply and irrigation.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 18
  ],
  'brandID' => 'PS2-150-BOOST-240',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 86,
  'name' => 'Lorentz PS2-150-BOOST-125 Surface Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-150-BOOST-240.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-150 BOOST-125 is a solar-powered surface pump delivering up to 0.5 m³/h at 110 meters head. It uses a 0.3 kW brushless DC motor, MPPT controller, and is ideal for off-grid applications like irrigation, household use, and livestock watering.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 20
  ],
  'brandID' => 'PS2-150-BOOST-125',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 87,
  'name' => 'Lorentz PS2-150-BOOST-60 Surface Pump',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2-150-BOOST-240.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-150 BOOST-60 is a solar-powered surface pump delivering up to 0.26 m³/h at 150 meters head. It features a 0.3 kW brushless DC motor, MPPT controller, and is ideal for off-grid water supply, irrigation, and livestock watering.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 13
  ],
  'brandID' => 'PS2-150-BOOST-60',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 88,
  'name' => 'Lorentz PS2-150 Controller',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS2150.png',
  'category' => 'Accessories',
  'description' => 'The Lorentz PS2-150 Controller is a solar-powered pump controller designed for small to medium-sized water pumping applications. It efficiently manages brushless DC motors up to 0.3 kW, making it ideal for off-grid water supply, irrigation, and livestock watering.',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 44,
      'count' => 12
  ],
  'brandID' => 'PS2-150 Controller',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 89,
  'name' => 'Lorentz PS1800-Pool-CS-37-1 Controller',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS1800-Pool-CS-37-1.png',
  'category' => 'Accessories',
  'description' => 'The Lorentz PS-1800 Pool CS-37-1 is a solar-powered surface pump system designed for high-volume water circulation in swimming pools and similar applications. It delivers up to 36 m³/h at a maximum head of 14 meters, making it ideal for large-scale water movement needs.​',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 42,
      'count' => 13
  ],
  'brandID' => 'PS1800-Pool-CS-37-1',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 89,
  'name' => 'Lorentz PS1800-Pool-CS-37-1 Controller',
  'price' => 0,
  'image' => 'assets\shop assets\product images\PS1800-Pool-CS-37-1.png',
  'category' => 'Accessories',
  'description' => 'The Lorentz PS-1800 Pool CS-37-1 is a solar-powered surface pump system designed for high-volume water circulation in swimming pools and similar applications. It delivers up to 36 m³/h at a maximum head of 14 meters, making it ideal for large-scale water movement needs.​',
  'weight' => 3.5, // Weight in kilograms
  'rating' => [
      'stars' => 42,
      'count' => 13
  ],
  'brandID' => 'PS1800-Pool-CS-37-1',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],



];

// Extract unique categories for filtering
$categories = array_unique(array_map(function($product) {
    return $product['category'];
}, $products));

sort($categories); // Optional: sort alphabetically

?>

