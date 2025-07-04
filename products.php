<?php
    // Sample products array (replace with DB query later)
    $products = [
      // [
      //   'id' => 1.1,
      //   'name' => 'Foresolar 200W Solar Panel',
      //   'price' => 85000,
      //   'image' => 'assets/shop assets/product images/MonoSolarPanel.jpg',
      //   'category' => 'Solar Panels',
      //   'description' => 'Foresolar 200W Monocrystalline Solar Panel delivers reliable performance for off-grid and small-scale energy systems.',
      //   'weight' => 11.0,
      //   'rating' => [
      //     'stars' => 4.3,
      //     'count' => 9
      //   ],
      //   'brandID' => 'FORESOLAR-200W',
      //   'keywords' => ['Foresolar', '200W Panel', 'Monocrystalline', 'Solar'],
      //   'pdf' => 'assets/shop assets/datasheets/foresolarMonoSolarPanel200-450W.pdf',
      // ],

      [
        'id' => 1.2,
        'name' => 'Foresolar 250W Solar Panel',
        'price' => 86000,
        'image' => 'assets/shop assets/product images/MonoSolarPanel.jpg',
        'category' => 'Solar Panels',
        'description' => 'Foresolar 250W Monocrystalline Solar Panel offers enhanced efficiency for residential and commercial installations.',
        'weight' => 13.5,
        'rating' => [
          'stars' => 4.5,
          'count' => 11
        ],
        'brandID' => 'FORESOLAR-250W',
        'keywords' => ['Foresolar', '250W Panel', 'Solar Energy', 'PV Module'],
        'pdf' => 'assets/shop assets/datasheets/foresolarMonoSolarPanel200-450W.pdf',
      ],

      [
        'id' => 1.3,
        'name' => 'Foresolar 350W Solar Panel',
        'price' => 105500,
        'image' => 'assets/shop assets/product images/MonoSolarPanel.jpg',
        'category' => 'Solar Panels',
        'description' => 'Foresolar 350W Monocrystalline Panel is ideal for medium- to large-scale solar installations with high yield output.',
        'weight' => 19.2,
        'rating' => [
          'stars' => 4.6,
          'count' => 15
        ],
        'brandID' => 'FORESOLAR-350W',
        'keywords' => ['Foresolar', '350W Panel', 'Solar Power', 'Monocrystalline'],
        'pdf' => 'assets/shop assets/datasheets/foresolarMonoSolarPanel200-450W.pdf',
      ],

      [
        'id' => 1.4,
        'name' => 'Foresolar 450W Solar Panel',
        'price' => 135000,
        'image' => 'assets/shop assets/product images/MonoSolarPanel.jpg',
        'category' => 'Solar Panels',
        'description' => 'Foresolar 450W Monocrystalline Solar Panel is designed for high-capacity installations and delivers excellent energy conversion efficiency.',
        'weight' => 23.0,
        'rating' => [
          'stars' => 4.8,
          'count' => 19
        ],
        'brandID' => 'FORESOLAR-450W',
        'keywords' => ['Foresolar', '450W Panel', 'High Wattage Solar', 'Energy Solutions'],
        'pdf' => 'assets/shop assets/datasheets/foresolarMonoSolarPanel200-450W.pdf',
      ],
      [
        'id' => 2.1,
        'name' => 'Foresolar 450W Half-Cut Solar Panel',
        'price' => 142000,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Foresolar 450W Half-Cut Monocrystalline Solar Panel offers improved performance and durability with reduced cell shading and higher energy yields.',
        'weight' => 22.5,
        'rating' => [
          'stars' => 4.7,
          'count' => 14
        ],
        'brandID' => 'FORESOLAR-HC-450W',
        'keywords' => ['Foresolar', '450W Half-Cut', 'High Efficiency', 'Solar Technology'],
        'pdf' => 'assets/shop assets/datasheets/foresolarHalfCutPanels450-600W.pdf',
      ],

      [
        'id' => 2.2,
        'name' => 'Foresolar 500W Half-Cut Solar Panel',
        'price' => 165000,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Foresolar 500W Half-Cut Monocrystalline Solar Panel provides optimal performance for commercial-scale and grid-tied installations.',
        'weight' => 24.0,
        'rating' => [
          'stars' => 4.8,
          'count' => 18
        ],
        'brandID' => 'FORESOLAR-HC-500W',
        'keywords' => ['Foresolar', '500W Panel', 'Half-Cut Module', 'Clean Energy'],
        'pdf' => 'assets/shop assets/datasheets/foresolarHalfCutPanels450-600W.pdf',
      ],

      [
        'id' => 2.3,
        'name' => 'Foresolar 600W Half-Cut Solar Panel',
        'price' => 185000,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Foresolar 600W Half-Cut Solar Panel is engineered for utility-scale projects, offering maximum output with minimal losses.',
        'weight' => 26.5,
        'rating' => [
          'stars' => 4.9,
          'count' => 21
        ],
        'brandID' => 'FORESOLAR-HC-600W',
        'keywords' => ['Foresolar', '600W Panel', 'High Output', 'Half-Cell Technology'],
        'pdf' => 'assets/shop assets/datasheets/foresolarHalfCutPanels450-600W.pdf',
      ],
      [
        'id' => 1,
        'name' => 'JinKO 625W Solar Panel',
        'price' => 293000.00,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Jinko 625W solar panel is a high-efficiency monocrystalline module using N-type TOPCon technology, delivering up to 22.4% efficiency and ideal for large-scale and commercial solar installations.',
        'weight' => 29, // Weight in kilograms
        'rating' => ['stars' => 47, 'count' => 18],
        'brandID' => 'JKM625',
        'keywords' => ['JinKO', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/JinKo Solar Panels Range Datasheet.pdf',
      ],
      [
        'id' => 1,
        'name' => 'JinKO 625W Solar Panel',
        'price' => 293000.00,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Jinko 625W solar panel is a high-efficiency monocrystalline module using N-type TOPCon technology, delivering up to 22.4% efficiency and ideal for large-scale and commercial solar installations.',
        'weight' => 29, // Weight in kilograms
        'rating' => ['stars' => 47, 'count' => 18],
        'brandID' => 'JKM625',
        'keywords' => ['JinKO', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/JinKo Solar Panels Range Datasheet.pdf',
      ],
      [
        'id' => 2,
        'name' => 'JinKO 615W Solar Panel',
        'price' => 285000.00,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Jinko 615W solar panel is a high-efficiency monocrystalline module using N-type TOPCon technology, delivering up to 22.4% efficiency and ideal for large-scale and commercial solar installations.',
        'weight' => 29, // Weight in kilograms
        'rating' => ['stars' => 45, 'count' => 14],
        'brandID' => 'JKM615',
        'keywords' => ['JinKO', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/JinKo Solar Panels Range Datasheet.pdf',
      ],
      [
        'id' => 3,
        'name' => 'JinKO 580W Solar Panel',
        'price' => 263000.00,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Jinko 580W solar panel is a high-efficiency monocrystalline module using N-type TOPCon technology, delivering up to 22.4% efficiency and ideal for large-scale and commercial solar installations.',
        'weight' => 27, // Weight in kilograms
        'rating' => ['stars' => 49, 'count' => 11],
        'brandID' => 'JKM580',
        'keywords' => ['JinKO', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/JinKo Solar Panels Range Datasheet.pdf',
      ],
      [
        'id' => 4,
        'name' => 'JinKO 555W Solar Panel',
        'price' => 255000.00,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Jinko 555W solar panel is a high-efficiency monocrystalline module using N-type TOPCon technology, delivering up to 22.4% efficiency and ideal for large-scale and commercial solar installations.',
        'weight' => 26, // Weight in kilograms
        'rating' => ['stars' => 46, 'count' => 20],
        'brandID' => 'JKM555',
        'keywords' => ['JinKO', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/JinKo Solar Panels Range Datasheet.pdf',
      ],
      [
        'id' => 5,
        'name' => 'JinKO 550W Solar Panel',
        'price' => 248000.00,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Jinko 550W solar panel is a high-efficiency monocrystalline module using N-type TOPCon technology, delivering up to 22.4% efficiency and ideal for large-scale and commercial solar installations.',
        'weight' => 26, // Weight in kilograms
        'rating' => ['stars' => 48, 'count' => 17],
        'brandID' => 'JKM550',
        'keywords' => ['JinKO', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/JinKo Solar Panels Range Datasheet.pdf',
      ],
      [
        'id' => 6,
        'name' => 'JinKO 545W Solar Panel',
        'price' => 225000.00,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Jinko 545W solar panel is a high-efficiency monocrystalline module using N-type TOPCon technology, delivering up to 22.4% efficiency and ideal for large-scale and commercial solar installations.',
        'weight' => 26, // Weight in kilograms
        'rating' => ['stars' => 44, 'count' => 15],
        'brandID' => 'JKM545',
        'keywords' => ['JinKO', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/JinKo Solar Panels Range Datasheet.pdf',
      ],
      [
        'id' => 7,
        'name' => 'JinKO 485W Solar Panel',
        'price' => 188000.00,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Jinko 485W solar panel is a high-efficiency monocrystalline module using N-type TOPCon technology, delivering up to 22.4% efficiency and ideal for large-scale and commercial solar installations.',
        'weight' => 23, // Weight in kilograms
        'rating' => ['stars' => 42, 'count' => 19],
        'brandID' => 'JKM480',
        'keywords' => ['JinKO', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/JinKo Solar Panels Range Datasheet.pdf',
      ],
      [
        'id' => 8,
        'name' => 'JinKO 475W Solar Panel',
        'price' => 180000.00,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Jinko 475W solar panel is a high-efficiency monocrystalline module using N-type TOPCon technology, delivering up to 22.4% efficiency and ideal for large-scale and commercial solar installations.',
        'weight' => 23, // Weight in kilograms
        'rating' => ['stars' => 47, 'count' => 10],
        'brandID' => 'JKM475',
        'keywords' => ['JinKO', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/JinKo Solar Panels Range Datasheet.pdf',
      ],
      [
        'id' => 9,
        'name' => 'JinKO 450W Solar Panel',
        'price' => 150000.00,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Jinko 450W solar panel is a high-efficiency monocrystalline module using N-type TOPCon technology, delivering up to 22.4% efficiency and ideal for large-scale and commercial solar installations.',
        'weight' => 22, // Weight in kilograms
        'rating' => ['stars' => 45, 'count' => 13],
        'brandID' => 'JKM465',
        'keywords' => ['JinKO', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/JinKo Solar Panels Range Datasheet.pdf',
      ],
      [
        'id' => 10,
        'name' => 'JinKO 440W Solar Panel',
        'price' => 143000.00,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'Jinko 440W solar panel is a high-efficiency monocrystalline module using N-type TOPCon technology, delivering up to 22.4% efficiency and ideal for large-scale and commercial solar installations.',
        'weight' => 22, // Weight in kilograms
        'rating' => ['stars' => 43, 'count' => 16],
        'brandID' => 'JKM440',
        'keywords' => ['JinKO', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/JinKo Solar Panels Range Datasheet.pdf',
      ],
      [
        'id' => 11,
        'name' => 'Felicity 550W Solar Panel',
        'price' => 243000.00,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'The Felicity 540W solar panel is a high-efficiency monocrystalline module with half-cut cell and PERC technology, suitable for residential and commercial use.',
        'weight' => 23, // Weight in kilograms
        'rating' => ['stars' => 46, 'count' => 14],
        'brandID' => 'FEL540',
        'keywords' => ['Felicity', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/Felicity Solar Panel 540W.pdf',
      ],
      [
        'id' => 12,
        'name' => 'Felicity 450W Solar Panel',
        'price' => 212000.00,
        'image' => 'assets/shop assets/product images/Products - HalfCut PV Panelx1.png',
        'category' => 'Solar Panels',
        'description' => 'The Felicity 450W solar panel is a high-efficiency monocrystalline module with half-cut cell and PERC technology, suitable for residential and commercial use.',
        'weight' => 22, // Weight in kilograms
        'rating' => ['stars' => 44, 'count' => 13],
        'brandID' => 'FEL450',
        'keywords' => ['Felicity', 'Solar PV', 'A-ONE', 'Products'],
        'pdf' => 'assets/shop assets/datasheets/Felicity Solar Panel 450W.pdf',
      ],
  [
    'id' => 13,
    'name' => 'felicity 350W Solar Panel',
    'price' => 194000.00,
    'image' => 'assets\shop assets\product images\Products - HalfCut PV Panelx1.png',
    'category' => 'Solar Panels',
    'description' => 'The Felicity 400W solar panel is a high-efficiency monocrystalline module with half-cut cell and PERC technology, suitable for residential and commercial use.',
    'weight' => 22, // Weight in kilograms
    'rating' => ['stars' => 43, 'count' => 12],
    'brandID' => 'FEL400',
    'keywords' => ['felicity', 'Solar PV', 'A-ONE', 'Products'],
    'pdf' => 'assets\shop assets\datasheets\Felicity Solar Panel 450W.pdf',
  ],
  [
    'id' => 14,
    'name' => 'Luminous 1500VA Offgrid Inverter',
    'price' => 367500.00,
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
    'price' => 292000.00,
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
    'price' => 1200000,
    'image' => 'assets\shop assets\product images\Hybrid 5KVA & 3KVA Wallmounted Inverter.jpg',
    'category' => 'Inverters',
    'description' => 'A 5KVA wall-mounted off-grid inverter converts solar or battery power to AC, ideal for homes or small businesses without grid access.',
    'weight' => 12.5, // Weight in kilograms
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
    'price' => 825000,
    'image' => 'assets\shop assets\product images\Hybrid 5KVA & 3KVA Wallmounted Inverter.jpg',
    'category' => 'Inverters',
    'description' => 'A 3KVA wall-mounted off-grid inverter converts solar or battery power to AC, ideal for homes or small businesses without grid access.',
    'weight' => 10.5, // Weight in kilograms
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
  'price' => 2136000,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPM 10KVA 48V Inverter is a high-capacity hybrid inverter with a 120A MPPT charge controller, ideal for large residential or commercial systems, offering efficient solar energy conversion and battery management.',
  'weight' => 28.5, // Weight in kilograms
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
  'price' => 1785000,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPS 10KVA 48V Inverter is a high-efficiency pure sine wave inverter with a 120A MPPT charge controller, ideal for large off-grid solar systems, offering reliable power for commercial and industrial use.',
  'weight' => 28.5, // Weight in kilograms
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
  'price' => 1585000,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPM 7.5KVA 48V Inverter is a high-capacity hybrid inverter with a 120A MPPT charge controller, ideal for large residential or commercial systems, offering efficient solar energy conversion and battery management.',
  'weight' => 24, // Weight in kilograms
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
  'price' => 1228500,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPS 7.5KVA 48V Inverter is a high-efficiency pure sine wave inverter with a 120A MPPT charge controller, ideal for large off-grid solar systems, offering reliable power for commercial and industrial use.',
  'weight' => 24, // Weight in kilograms
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
  'price' => 1470000,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPM 5KVA 48V Inverter is a high-capacity hybrid inverter with a 120A MPPT charge controller, ideal for large residential or commercial systems, offering efficient solar energy conversion and battery management.',
  'weight' => 19.5, // Weight in kilograms
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
  'price' => 1069000,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPS 5KVA 48V Inverter is a high-efficiency pure sine wave inverter with a 120A MPPT charge controller, ideal for large off-grid solar systems, offering reliable power for commercial and industrial use.',
  'weight' => 19.5, // Weight in kilograms
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
  'name' => 'felicity IVPS 5KVA 24V Inverter',
  'price' => 1069000,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPS 5KVA 24V Inverter is a high-capacity hybrid inverter with a 120A MPPT charge controller, ideal for large residential or commercial systems, offering efficient solar energy conversion and battery management.',
  'weight' => 19.5, // Weight in kilograms
  'rating' => [
      'stars' => 49,
      'count' => 19
  ],
  'brandID' => 'FELIVPS5KVA24V',
  'keywords' => ['Inverter', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\Felicity IVPS-IVPMSeriesManual2024-11-14.pdf',
],
// [
//   'id' => 25,
//   'name' => 'felicity IVPS 3.5KVA 24V Inverter',
//   'price' => 841000,
//   'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
//   'category' => 'Inverters',
//   'description' => 'The Felicity IVPS 3.5KVA 24V Inverter is a high-capacity hybrid inverter with a 120A MPPT charge controller, ideal for large residential or commercial systems, offering efficient solar energy conversion and battery management.',
//   'weight' => 16, // Weight in kilograms
//   'rating' => [
//       'stars' => 48,
//       'count' => 40
//   ],
//   'brandID' => 'FELIVPM3.5KVA48V',
//   'keywords' => ['Inverter', 'felicity', 'Products', 'A-ONE'],
//   'pdf' => 'assets\shop assets\datasheets\Felicity IVPS-IVPMSeriesManual2024-11-14.pdf',
// ],
[
  'id' => 26,
  'name' => 'felicity IVOM 3.5KVA 24V Inverter',
  'price' => 1395000,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPM 3.5KVA 24V Inverter is a high-capacity hybrid inverter with a 120A MPPT charge controller, ideal for large residential or commercial systems, offering efficient solar energy conversion and battery management.',
  'weight' => 15.5, // Weight in kilograms
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
  'name' => 'felicity IVPS 3.5KVA 24V Inverter',
  'price' => 841000,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPS 3.5KVA 48V Inverter is a high-efficiency pure sine wave inverter with a 120A MPPT charge controller, ideal for large off-grid solar systems, offering reliable power for commercial and industrial use.',
  'weight' => 15.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 40
  ],
  'brandID' => 'FELIVPS3.5KVA48V',
  'keywords' => ['Inverter', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\Felicity IVPS-IVPMSeriesManual2024-11-14.pdf',
],
// [
//   'id' => 28,
//   'name' => 'felicity IVPS 3.5KVA 24V Inverter',
//   'price' => 0,
//   'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
//   'category' => 'Inverters',
//   'description' => 'The Felicity IVPS 3.5KVA 24V Inverter is a high-efficiency pure sine wave inverter with a 120A MPPT charge controller, ideal for large off-grid solar systems, offering reliable power for commercial and industrial use.',
//   'weight' => 3.5, // Weight in kilograms
//   'rating' => [
//       'stars' => 48,
//       'count' => 20
//   ],
//   'brandID' => 'FELIVPS3.5KVA24V',
//   'keywords' => ['Inverter', 'felicity', 'Products', 'A-ONE'],
//   'pdf' => 'assets\shop assets\datasheets\Felicity IVPS-IVPMSeriesManual2024-11-14.pdf',
// ],
[
  'id' => 29,
  'name' => 'felicity IVPS 2.5KVA 24V Inverter',
  'price' => 597000,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPM 2.5KVA 24V Inverter is a high-capacity hybrid inverter with a 120A MPPT charge controller, ideal for large residential or commercial systems, offering efficient solar energy conversion and battery management.',
  'weight' => 13, // Weight in kilograms
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
  'price' => 597000,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Inverters',
  'description' => 'The Felicity IVPM 2.5KVA 12V Inverter is a high-capacity hybrid inverter with a 120A MPPT charge controller, ideal for large residential or commercial systems, offering efficient solar energy conversion and battery management.',
  'weight' => 12, // Weight in kilograms
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
  'name' => 'Inverlast 230Ah Tubular Battery',
  'price' => 507000,
  'image' => 'assets\shop assets\product images\Lumonous 220Ah Wet Cell Battery Inverlast.png',
  'category' => 'Batteries',
  'description' => 'The Inverlast 230Ah Tubular Battery is a high-performance, deep-cycle battery with a tall tubular design, offering long-lasting power and durability for inverter and solar applications.',
  'weight' => 68, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 50
  ],
  'brandID' => 'LUMI230AHBAT',
  'keywords' => ['Inverter', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets/shop assets/datasheets/Luminous solar panel, inverter,battery datasheet.pdf',
],
[
  'id' => 32,
  'name' => 'NRGT 250Ah Tubular Battery',
  'price' => 682000,
  'image' => 'assets\shop assets\product images\Lumonous 220Ah Tubular Battery NRGT.png',
  'category' => 'Batteries',
  'description' => 'The NRGT 250Ah Tubular Battery is a durable, deep-cycle battery with tall tubular plates, offering reliable power for inverter and solar systems with low maintenance and long cycle life.',
  'weight' => 75, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 40
  ],
  'brandID' => 'LUMN250AHBAT',
  'keywords' => ['Inverter', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets/shop assets/datasheets/Luminous solar panel, inverter,battery datasheet.pdf',
],
[
  'id' => 33,
  'name' => 'felicity 48V 200Ah 10kWh LiFePO₄ Battery',
  'price' => 3492000,
  'image' => 'assets\shop assets\product images\LPBA 48V 200Ah 10kWh Grade A Lithium Phosphate Solar Battery Pack with BMS by Felicity Solar.jpeg',
  'category' => 'Batteries',
  'description' => 'The Felicity 48V 200Ah 10kWh LiFePO₄ Battery is a high-capacity, long-life lithium battery ideal for solar energy storage in residential and commercial systems.',
  'weight' => 92.5, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 20
  ],
  'brandID' => 'FEL48V200AH10KWHBATT',
  'keywords' => ['Battery', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\LPBA48200-IIManual2025-1-17.pdf',
],
// [
//   'id' => 34,
//   'name' => 'felicity 24V 100Ah 10kWh LiFePO₄ Battery',
//   'price' => 0,
//   'image' => 'assets\shop assets\product images\LPBF 24V 100ah M 2.5KWH Home Use Energy Storage Lithium Battery.jpeg',
//   'category' => 'Batteries',
//   'description' => 'The Felicity 24V 100Ah 10kWh LiFePO₄ Battery is a high-capacity, long-life lithium battery ideal for solar energy storage in residential and commercial systems.',
//   'weight' => 3.5, // Weight in kilograms
//   'rating' => [
//       'stars' => 48,
//       'count' => 50
//   ],
//   'brandID' => 'FEL24V100AH10KWHBATT',
//   'keywords' => ['Battery', 'felicity', 'Products', 'A-ONE'],
//   'pdf' => 'assets\shop assets\datasheets\LPBF24100-MManual2024-9-24.pdf',
// ],
// [
//   'id' => 35,
//   'name' => 'felicity 48V 100Ah 10kWh LiFePO₄ Battery',
//   'price' => 0,
//   'image' => 'assets\shop assets\product images\LPBF 100Ah 48V 5KWH LiFePO4 Power Wall Mounted Lithium Battery For Solar System.jpeg',
//   'category' => 'Batteries',
//   'description' => 'The Felicity 48V 100Ah 10kWh LiFePO₄ Battery is a high-capacity, long-life lithium battery ideal for solar energy storage in residential and commercial systems.',
//   'weight' => 3.5, // Weight in kilograms
//   'rating' => [
//       'stars' => 48,
//       'count' => 15
//   ],
//   'brandID' => 'FEL48V100AH10KWHBATT',
//   'keywords' => ['Battery', 'felicity', 'Products', 'A-ONE'],
//   'pdf' => 'assets\shop assets\datasheets\LPBF48100-H-LPBF48200-HManual2024-12-27.pdf',
// ],
[
  'id' => 36,
  'name' => 'felicity 48V 350Ah 17.5kWh LiFePO₄ Battery',
  'price' => 5376000,
  'image' => 'assets\shop assets\product images\LPBF 17.5kWh 48V 350Ah Rechargeable LiFePO4 Battery Solar Pack with BMS by Felicity Solar.jpeg',
  'category' => 'Batteries',
  'description' => 'The Felicity 48V 350Ah 17.5kWh LiFePO₄ Battery is a long-life, high-capacity lithium battery with BMS, ideal for scalable solar energy storage.',
  'weight' => 230, // Weight in kilograms
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
  'name' => 'felicity 48V 150Ah 7.2kWh LiFePO₄ Battery',
  'price' => 2760000,
  'image' => 'assets\shop assets\product images\LPBF48150-P.jpeg',
  'category' => 'Batteries',
  'description' => 'The Felicity 48V 150Ah 7.5kWh LiFePO₄ Battery is a long-life, high-capacity lithium battery with BMS, ideal for scalable solar energy storage.',
  'weight' => 56, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 70
  ],
  'brandID' => 'FEL48V150AH17.5KWHBATT',
  'keywords' => ['Battery', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\LPBF48150-P.pdf',
],
// [
//   'id' => 38,
//   'name' => 'felicity 24V 200Ah 4.8kWh LiFePO₄ Battery',
//   'price' => 0,
//   'image' => 'assets\shop assets\product images\LPBF24200-M.jpeg',
//   'category' => 'Batteries',
//   'description' => 'The Felicity 24V 200Ah 4.8kWh LiFePO₄ Battery is a long-life, high-capacity lithium battery with BMS, ideal for scalable solar energy storage.',
//   'weight' => 3.5, // Weight in kilograms
//   'rating' => [
//       'stars' => 48,
//       'count' => 40
//   ],
//   'brandID' => 'FEL24V200AH4.8KWHBATT',
//   'keywords' => ['Battery', 'felicity', 'Products', 'A-ONE'],
//   'pdf' => 'assets\shop assets\datasheets\LPBF24200-M.pdf',
// ],
[
  'id' => 39,
  'name' => 'felicity 48V 300Ah 15kWh LiFePO₄ Battery',
  'price' => 5472000,
  'image' => 'assets\shop assets\product images\FLA48300.jpeg',
  'category' => 'Batteries',
  'description' => 'The Felicity 48V 300Ah 15kWh LiFePO₄ Battery is a long-life, high-capacity lithium battery with BMS, ideal for scalable solar energy storage.',
  'weight' => 135, // Weight in kilograms
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
  'price' => 8959500,
  'image' => 'assets\shop assets\product images\FLA48500.jpeg',
  'category' => 'Batteries',
  'description' => 'The Felicity 48V 500Ah 25kWh LiFePO₄ Battery is a long-life, high-capacity lithium battery with BMS, ideal for scalable solar energy storage.',
  'weight' => 240, // Weight in kilograms
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
  'price' => 258000,
  'image' => 'assets\shop assets\product images\A3-60W-P.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity A3 30W All-In-One Lamp is a solar-powered LED street light with an integrated panel, battery, and sensor, ideal for outdoor lighting.',
  'weight' => 12, // Weight in kilograms
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
  'price' => 273000,
  'image' => 'assets\shop assets\product images\A3-60W-P.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity A3 40W All-In-One Lamp is a solar-powered LED street light with an integrated panel, battery, and sensor, ideal for outdoor lighting.',
  'weight' => 14, // Weight in kilograms
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
  'price' => 405000,
  'image' => 'assets\shop assets\product images\A3-60W-P.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity A3 60W All-In-One Lamp is a solar-powered LED street light with an integrated panel, battery, and sensor, ideal for outdoor lighting.',
  'weight' => 18, // Weight in kilograms
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
  'price' => 565000,
  'image' => 'assets\shop assets\product images\A3-100W-S.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity A3 100W All-In-One Lamp is a solar-powered LED street light with an integrated panel, battery, and sensor, ideal for outdoor lighting.',
  'weight' => 23, // Weight in kilograms
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
  'price' => 865000,
  'image' => 'assets\shop assets\product images\A3-150W.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity A3 150W All-In-One Lamp is a solar-powered LED street light with an integrated panel, battery, and sensor, ideal for outdoor lighting.',
  'weight' => 28, // Weight in kilograms
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
  'price' => 300000,
  'image' => 'assets\shop assets\product images\D2-30W-P.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity D2 30W-P All-In-One Lamp is a compact solar-powered LED street light that integrates a 55W monocrystalline panel, 260Wh LiFePO₄ battery, and microwave sensor. It delivers 4,800 lumens and operates for over 12 hours daily, making it ideal for outdoor areas like parks and rural roads. Its IP65-rated design ensures durability in various weather conditions.',
  'weight' => 7.5, // Weight in kilograms
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
  'price' => 345000,
  'image' => 'assets\shop assets\product images\D2-40W-P.jpeg',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity D2 40W-P All-In-One Lamp is a compact solar-powered LED street light that integrates a 55W monocrystalline panel, 260Wh LiFePO₄ battery, and microwave sensor. It delivers 4,800 lumens and operates for over 12 hours daily, making it ideal for outdoor areas like parks and rural roads. Its IP65-rated design ensures durability in various weather conditions.',
  'weight' => 9.5, // Weight in kilograms
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
  'price' => 409500,
  'image' => 'assets\shop assets\product images\D2-60W-P.jpeg',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity D2 60W-P All-In-One Lamp is a compact solar-powered LED street light that integrates a 55W monocrystalline panel, 260Wh LiFePO₄ battery, and microwave sensor. It delivers 4,800 lumens and operates for over 12 hours daily, making it ideal for outdoor areas like parks and rural roads. Its IP65-rated design ensures durability in various weather conditions.',
  'weight' => 11.5, // Weight in kilograms
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
  'price' => 453000,
  'image' => 'assets\shop assets\product images\D2-30W-P.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity D2 80W-P All-In-One Lamp is a compact solar-powered LED street light that integrates a 55W monocrystalline panel, 260Wh LiFePO₄ battery, and microwave sensor. It delivers 4,800 lumens and operates for over 12 hours daily, making it ideal for outdoor areas like parks and rural roads. Its IP65-rated design ensures durability in various weather conditions.',
  'weight' => 14.5, // Weight in kilograms
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
  'price' => 609000,
  'image' => 'assets\shop assets\product images\D2-30W-P.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity D2 100W-S All-In-One Lamp is a powerful solar street light delivering 16,000 lumens, integrating a 100W monocrystalline panel, 888Wh LiFePO₄ battery, and motion sensor for efficient outdoor illumination. ',
  'weight' => 17.5, // Weight in kilograms
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
  'price' => 670000,
  'image' => 'assets\shop assets\product images\D2-30W-P.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity D2 120W-S All-In-One Lamp is a powerful solar street light delivering 16,000 lumens, integrating a 100W monocrystalline panel, 888Wh LiFePO₄ battery, and motion sensor for efficient outdoor illumination. ',
  'weight' => 21, // Weight in kilograms
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
  'price' => 783000,
  'image' => 'assets\shop assets\product images\D2-30W-P.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity D2 150W-S All-In-One Lamp is a powerful solar street light delivering 16,000 lumens, integrating a 100W monocrystalline panel, 888Wh LiFePO₄ battery, and motion sensor for efficient outdoor illumination. ',
  'weight' => 27, // Weight in kilograms
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
  'price' => 589500,
  'image' => 'assets\shop assets\product images\F1-60W.png',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity F1 60W All-In-One Lamp is a solar-powered LED street light featuring an 85W monocrystalline panel, 532Wh LiFePO₄ battery, and motion sensor, delivering 9,600 lumens for over 12 hours of illumination daily. Its IP65-rated design ensures durability in various weather conditions. ',
  'weight' => 11, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 50
  ],
  'brandID' => 'FELF1-60W',
  'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\F1-60W-120W.pdf',
],
// [
//   'id' => 54,
//   'name' => 'felicity F1 80W All-In-One Lamp',
//   'price' => 0,
//   'image' => 'assets\shop assets\product images\F1-60W.png',
//   'category' => 'Solar Lamps',
//   'description' => '​The Felicity F1 80W All-In-One Lamp is a solar-powered LED street light delivering 12,800 lumens, featuring a 95W monocrystalline panel, 650Wh LiFePO₄ battery, and motion sensor, suitable for outdoor lighting.',
//   'weight' => 3.5, // Weight in kilograms
//   'rating' => [
//       'stars' => 48,
//       'count' => 40
//   ],
//   'brandID' => 'FELF1-80W',
//   'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
//   'pdf' => 'assets\shop assets\datasheets\F1-60W-120W.pdf',
// ],
// [
//   'id' => 55,
//   'name' => 'felicity F1 100W All-In-One Lamp',
//   'price' => 0,
//   'image' => 'assets\shop assets\product images\F1-100W.jpeg',
//   'category' => 'Solar Lamps',
//   'description' => 'The Felicity F1 100W All-In-One Lamp is a solar LED street light with a 105W panel, 888Wh LiFePO₄ battery, and motion sensor, delivering 16,000 lumens with 3–5 days backup and IP65-rated weather protection.',
//   'weight' => 3.5, // Weight in kilograms
//   'rating' => [
//       'stars' => 48,
//       'count' => 60
//   ],
//   'brandID' => 'FELF1-100W',
//   'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
//   'pdf' => 'assets\shop assets\datasheets\F1-60W-120W.pdf',
// ],
// [
//   'id' => 56,
//   'name' => 'felicity F1 120W All-In-One Lamp',
//   'price' => 0,
//   'image' => 'assets\shop assets\product images\F1-120W.png',
//   'category' => 'Solar Lamps',
//   'description' => 'The Felicity F1 120W All-In-One Lamp is a solar-powered street light with a 110W panel, 999Wh LiFePO₄ battery, and 19,200 lumens output, providing reliable outdoor illumination with up to 3 days backup.',
//   'weight' => 3.5, // Weight in kilograms
//   'rating' => [
//       'stars' => 48,
//       'count' => 12
//   ],
//   'brandID' => 'FELF1-120W',
//   'keywords' => ['Lamp', 'felicity', 'Products', 'A-ONE'],
//   'pdf' => 'assets\shop assets\datasheets\F1-60W-120W.pdf',
// ],
[
  'id' => 57,
  'name' => 'felicity P2 40W All-In-One Lamp',
  'price' => 253500,
  'image' => 'assets\shop assets\product images\P2-40W.jpeg',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity P2 40W All-In-One Lamp is a solar-powered street light with a 55W panel, 260Wh LiFePO₄ battery, and 4,800 lumens output, designed for efficient outdoor illumination with up to 3 days backup.',
  'weight' => 7.5, // Weight in kilograms
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
  'price' => 274500,
  'image' => 'assets\shop assets\product images\P2-60W.jpg',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity P2 60W All-In-One Lamp is a solar-powered street light with a 60W panel, LiFePO₄ battery, and 7,200 lumens output, designed for outdoor illumination with up to 5 days backup.',
  'weight' => 9.5, // Weight in kilograms
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
  'price' => 355500,
  'image' => 'assets\shop assets\product images\P2-80W.jpg',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity P2 80W All-In-One Lamp is a solar-powered street light with an 80W panel, 400Wh LiFePO₄ battery, and 9,600 lumens output, designed for efficient outdoor lighting with up to 3 days backup.',
  'weight' => 12.5, // Weight in kilograms
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
  'price' => 243000,
  'image' => 'assets\shop assets\product images\P3-60W.jpg',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity P3 60W All-In-One Lamp is a solar-powered street light with a 60W panel, 260Wh LiFePO₄ battery, and 7,200 lumens output, offering efficient outdoor lighting with up to 5 days backup.',
  'weight' => 9.5, // Weight in kilograms
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
  'price' => 289500,
  'image' => 'assets\shop assets\product images\P3-60W.jpg',
  'category' => 'Solar Lamps',
  'description' => 'The Felicity P3 80W All-In-One Lamp is a solar-powered street light with an 80W panel, 320Wh LiFePO₄ battery, and 9,600 lumens output, offering efficient lighting with up to 5 days backup.',
  'weight' => 12.5, // Weight in kilograms
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
  'price' => 104000,
  'image' => 'assets\shop assets\product images\Smart WiFi-S.jpeg',
  'category' => 'Accessories',
  'description' => 'Felicity WiFi Module enables remote monitoring of solar inverters via mobile app with easy plug-and-play setup.',
  'weight' => 0.3, // Weight in kilograms
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
  'price' => 11000000,
  'image' => 'assets\shop assets\product images\EV Car Charger.jpeg',
  'category' => 'E-Mobility',
  'description' => 'Felicity 11kW AC Car Charger (A11-ST) is a wall-mounted, three-phase EV charger with IP65 protection, 16A output, and 3.5m cable. Ideal for home or commercial use, it includes eight safety features for reliable operation.',
  'weight' => 9.5, // Weight in kilograms
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
  'price' => 9500000,
  'image' => 'assets\shop assets\product images\EV Car Charger.jpeg',
  'category' => 'E-Mobility',
  'description' => 'The Felicity 7kW AC Car Charger (Model: A7-ST) is a wall-mounted EV charger delivering 7kW at 32A, designed for residential use. It features IP65 waterproof protection, eight safety functions, and a 3.5m charging cable, ensuring efficient and safe charging for electric vehicles. ',
  'weight' => 6, // Weight in kilograms
  'rating' => [
      'stars' => 48,
      'count' => 15
  ],
  'brandID' => 'A7-ST',
  'keywords' => ['EV Charger', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\AtlasAVHomeChargerQuickstartGuide.pdf',
],
[
    'id' => 64,
    'name' => 'felicity 30A MPPT Charge Controller',
    'price' => 124000,
    'image' => 'assets\shop assets\product images\felicityMPPTCController.jpg',
    'category' => 'Solar Charge Controllers',
    'description' => '30A MPPT solar charge controller with 12V/24V auto recognition and lithium battery wake-up function. High tracking efficiency and multi-protection features.',
    'weight' => 2.5,
    'rating' => [
        'stars' => 46,
        'count' => 23
    ],
    'brandID' => 'FL-MPPT30A',
    'keywords' => ['MPPT', 'Felicity', 'Lithium Battery', 'Solar'],
    'pdf' => 'assets\shop assets\datasheets\felicityMPPTCController20-80A.pdf',
  ],
  [
    'id' => 65,
    'name' => 'felicity 45A MPPT Charge Controller',
    'price' => 153000,
    'image' => 'assets\shop assets\product images\felicityMPPTCController.jpg',
    'category' => 'Solar Charge Controllers',
    'description' => '45A MPPT 12V/24V charge controller with lithium battery wake-up function and high conversion efficiency. Ideal for residential or mobile systems.',
    'weight' => 3.0,
    'rating' => [
        'stars' => 47,
        'count' => 19
    ],
    'brandID' => 'FL-MPPT45A24V',
    'keywords' => ['MPPT', 'Felicity', '45A', '12V', '24V', 'Lithium'],
    'pdf' => 'assets\shop assets\datasheets\felicityMPPTCController20-80A.pdf',
  ],
  [
    'id' => 66,
    'name' => 'felicity 45A MPPT Charge Controller',
    'price' => 229000,
    'image' => 'assets\shop assets\product images\felicityMPPTCController.jpg',
    'category' => 'Solar Charge Controllers',
    'description' => 'Advanced 45A MPPT charge controller for 12V, 24V, or 48V systems with lithium battery activation feature and enhanced tracking algorithm.',
    'weight' => 3.2,
    'rating' => [
        'stars' => 47,
        'count' => 17
    ],
    'brandID' => 'FL-MPPT45A48V',
    'keywords' => ['MPPT', '48V', 'Felicity', 'Lithium Battery'],
    'pdf' => 'assets\shop assets\datasheets\felicityMPPTCController20-80A.pdf',
  ],
  [
    'id' => 67,
    'name' => 'felicity 60A MPPT Charge Controller',
    'price' => 268000,
    'image' => 'assets\shop assets\product images\felicityMPPTCController.jpg',
    'category' => 'Solar Charge Controllers',
    'description' => 'FL-SCCM6048 60A MPPT charge controller supports 12V/24V/48V systems. Includes lithium battery wake-up function, LCD display, and smart protections.',
    'weight' => 4.0,
    'rating' => [
        'stars' => 48,
        'count' => 25
    ],
    'brandID' => 'FL-SCCM6048',
    'keywords' => ['60A', 'MPPT', 'Felicity', 'SCCM', 'Solar', 'Lithium'],
    'pdf' => 'assets\shop assets\datasheets\felicityMPPTCController20-80A.pdf',
  ],
  [
    'id' => 68,
    'name' => 'felicity 80A MPPT Charge Controller',
    'price' => 406000,
    'image' => 'assets\shop assets\product images\felicityMPPTCController.jpg',
    'category' => 'Solar Charge Controllers',
    'description' => '80A MPPT charge controller (FL-SCCM8048) with multi-voltage support (12V/24V/48V) and lithium battery wake-up function. Rugged, efficient, and reliable.',
    'weight' => 4.8,
    'rating' => [
        'stars' => 49,
        'count' => 21
    ],
    'brandID' => 'FL-SCCM8048',
    'keywords' => ['Felicity', 'MPPT', '80A', 'SCCM8048', 'Lithium'],
    'pdf' => 'assets\shop assets\datasheets\felicityMPPTCController20-80A.pdf',
  ],
  [
    'id' => 69,
    'name' => 'felicity 100A MPPT Charge Controller',
    'price' => 406000,
    'image' => 'assets\shop assets\product images\felicityMPPTCController.jpg',
    'category' => 'Solar Charge Controllers',
    'description' => '100A MPPT solar charge controller supporting multiple battery voltages and lithium battery wake-up function. Built for large solar installations.',
    'weight' => 5.5,
    'rating' => [
        'stars' => 47,
        'count' => 18
    ],
    'brandID' => 'FL-MPPT100A',
    'keywords' => ['MPPT', '100A', 'Felicity', 'Solar', 'Lithium Battery'],
    'pdf' => 'assets\shop assets\datasheets\felicityMPPTCController20-80A.pdf',
  ],
  [
    'id' => 70,
    'name' => 'felicity 120A MPPT Charge Controller',
    'price' => 454000,
    'image' => 'assets\shop assets\product images\felicityMPPTCController.jpg',
    'category' => 'Solar Charge Controllers',
    'description' => '120A MPPT charge controller with 12V/24V/48V support, LCD display, smart protections, and lithium battery wake-up function for large off-grid systems.',
    'weight' => 6.2,
    'rating' => [
        'stars' => 48,
        'count' => 16
    ],
    'brandID' => 'FL-MPPT120A',
    'keywords' => ['MPPT', '120A', 'Felicity', 'Charge Controller', 'Lithium'],
    'pdf' => 'assets\shop assets\datasheets\felicityMPPTCController20-80A.pdf',
  ],

[
  'id' => 65,
  'name' => 'Lorentz PS2-1800-HR-07 Helical Rotor Solar Submersible Pump',
  'price' => 12800000,
  'image' => 'assets\shop assets\product images\PS2-1800-HR-04H-600x600-1.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-1800-HR-07 is a solar-powered helical rotor submersible pump delivering up to 1.3 m³/h at 120m head, ideal for deep wells, livestock watering, and remote water supply.',
  'weight' => 32, // Weight in kilograms
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
  'price' => 12400000,
  'image' => 'assets\shop assets\product images\PS2-1800-HR-04H-600x600-1.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-1800-HR-05HL is a solar-powered helical rotor submersible pump with up to 0.97 m³/h flow and 250m head, ideal for deep wells and remote water supply.',
  'weight' => 30, // Weight in kilograms
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
  'price' => 11700000,
  'image' => 'assets\shop assets\product images\PS2-1800-HR-04H-600x600-1.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-1800-HR-04H is a solar submersible helical rotor pump delivering up to 0.72 m³/h at 140 m head, ideal for deep wells and remote water supply.',
  'weight' => 28, // Weight in kilograms
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
  'price' => 11600000,
  'image' => 'assets\shop assets\product images\PS2-1800-HR-04H-600x600-1.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-1800-HR-04 is a solar submersible pump delivering up to 0.71 m³/h at 70 m head, ideal for deep wells and remote use.',
  'weight' => 26, // Weight in kilograms
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
  'price' => 11300000,
  'image' => 'assets\shop assets\product images\PS2-1800-HR-04H-600x600-1.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-1800-HR-03H is a solar submersible pump delivering up to 0.43 m³/h at 240 m head, ideal for deep wells and remote supply.',
  'weight' => 26, // Weight in kilograms
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
  'price' => 11200000,
  'image' => 'assets\shop assets\product images\PS2-1800-HR-04H-600x600-1.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-1800-HR-03 is a solar submersible pump delivering up to 0.43 m³/h at 120 m head, ideal for deep wells and remote use.',
  'weight' => 24, // Weight in kilograms
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
  'price' => 11200000,
  'image' => 'assets\shop assets\product images\PS2-1800-CS-F12-2.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-1800-CS-F12-2 is a solar-powered centrifugal pump delivering up to 19 m³/h at 22 meters head, ideal for irrigation and remote water supply.',
  'weight' => 26, // Weight in kilograms
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
  'price' => 10700000,
  'image' => 'assets\shop assets\product images\PS2-1800-CS-F12-2.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-1800-CS-F4-6 is a solar-powered centrifugal pump delivering up to 8.5 m³/h at 50 meters head, ideal for irrigation and remote water supply.',
  'weight' => 24, // Weight in kilograms
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
  'price' => 11600000,
  'image' => 'assets\shop assets\product images\PS2-1800-C-SJ1-25.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-1800-C-SJ1-25 is a solar-powered centrifugal submersible pump delivering up to 3.0 m³/h at 140 meters head, ideal for irrigation and remote water supply.',
  'weight' => 30, // Weight in kilograms
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
  'price' => 6600000,
  'image' => 'assets\shop assets\product images\PS2-1800-C-SJ1-25.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-600-SJ8-5 is a solar-powered centrifugal submersible pump delivering up to 12 m³/h at 15 meters head, ideal for irrigation and water supply in remote locations.',
  'weight' => 20, // Weight in kilograms
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
  'price' => 7700000,
  'image' => 'assets\shop assets\product images\PS2-600.png',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-600 HR-14 is a solar-powered submersible pump delivering up to 2.6 m³/h at 50 meters head, ideal for irrigation and remote water supply. It features a brushless motor, MPPT controller, and stainless-steel components for durability.',
  'weight' => 24, // Weight in kilograms
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
  'price' => 7400000,
  'image' => 'assets\shop assets\product images\PS2-600.png',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-600 HR-10 is a solar-powered submersible pump delivering up to 2.0 m³/h at 80 meters head. It features a brushless DC motor, MPPT controller, and stainless-steel components, ideal for irrigation and remote water supply.',
  'weight' => 22, // Weight in kilograms
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
  'price' => 6900000,
  'image' => 'assets\shop assets\product images\PS2-1800-HR-04H-600x600-1.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-600 HR-4H is a solar-powered submersible pump delivering up to 0.8 m³/h at 80–140 meters head. It features a brushless DC motor, MPPT controller, and stainless-steel components, designed for medium-depth applications.',
  'weight' => 20, // Weight in kilograms
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
  'price' => 6800000,
  'image' => 'assets\shop assets\product images\PS2-1800-HR-04H-600x600-1.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-600 HR-4 is a solar-powered submersible pump delivering up to 1.3 m³/h at 40 meters head. It features a brushless DC motor, MPPT controller, and stainless-steel components, ideal for moderate depth pumping needs.',
  'weight' => 19, // Weight in kilograms
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
  'price' => 6600000,
  'image' => 'assets\shop assets\product images\PS2-1800-HR-04H-600x600-1.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-600 HR-3H is a solar-powered submersible pump delivering up to 0.45 m³/h at 180 meters head. It features a brushless DC motor, MPPT controller, and stainless-steel components, perfect for deep well applications.',
  'weight' => 18, // Weight in kilograms
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
  'price' => 6500000,
  'image' => 'assets\shop assets\product images\PS2-1800-HR-04H-600x600-1.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-600 HR-3 is a solar-powered submersible pump delivering up to 1.3 m³/h at 40 meters head. It features a brushless DC motor, MPPT controller, and stainless-steel components, ideal for irrigation and remote water supply.',
  'weight' => 17, // Weight in kilograms
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
  'price' => 7200000,
  'image' => 'assets\shop assets\product images\PS2-600-C-SJ5-8.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-600-C-SJ5-8 is a solar-powered submersible pump delivering up to 6.5 m³/h at 30 meters head. It features a 0.70 kW brushless DC motor, MPPT controller, and is ideal for irrigation and remote water supply.',
  'weight' => 22, // Weight in kilograms
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
  'price' => 7700000,
  'image' => 'assets\shop assets\product images\PS2-600.png',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-200 HR-14 is a solar-powered submersible pump delivering up to 2.6 m³/h at 20m head. It features a brushless DC motor, MPPT controller, and stainless-steel parts—ideal for irrigation, livestock watering, and off-grid water supply.',
  'weight' => 24, // Weight in kilograms
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
  'price' => 5400000,
  'image' => 'assets\shop assets\product images\PS2-600.png',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-200 HR-07 is a solar-powered submersible pump delivering up to 1.3 m³/h at 40 meters head. It features a 0.3 kW brushless DC motor, integrated MPPT controller, and stainless-steel components, ideal for irrigation, livestock watering, and remote water supply. ',
  'weight' => 14, // Weight in kilograms
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
  'price' => 5120000,
  'image' => 'assets\shop assets\product images\PS2-150-C-SJ5-8.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-150 C-SJ5-8 is a solar-powered submersible pump delivering up to 4.6 m³/h at 20 meters head. It features a 0.30 kW brushless DC motor, MPPT controller, and stainless-steel components—ideal for irrigation, livestock watering, and remote water supply.',
  'weight' => 16, // Weight in kilograms
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
  'price' => 4600000,
  'image' => 'assets\shop assets\product images\PS2-150-BOOST-240.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-150 BOOST-240 is a solar-powered surface pump delivering up to 0.98 m³/h at 50m head. It features a 300W brushless DC motor and MPPT controller, ideal for off-grid water supply and irrigation.',
  'weight' => 17, // Weight in kilograms
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
  'price' => 4320000,
  'image' => 'assets\shop assets\product images\PS2-150-BOOST-240.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-150 BOOST-125 is a solar-powered surface pump delivering up to 0.5 m³/h at 110 meters head. It uses a 0.3 kW brushless DC motor, MPPT controller, and is ideal for off-grid applications like irrigation, household use, and livestock watering.',
  'weight' => 16, // Weight in kilograms
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
  'price' => 4160000,
  'image' => 'assets\shop assets\product images\PS2-150-BOOST-240.jpg',
  'category' => 'Solar Pumps',
  'description' => 'The Lorentz PS2-150 BOOST-60 is a solar-powered surface pump delivering up to 0.26 m³/h at 150 meters head. It features a 0.3 kW brushless DC motor, MPPT controller, and is ideal for off-grid water supply, irrigation, and livestock watering.',
  'weight' => 15, // Weight in kilograms
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
  'price' => 1600000,
  'image' => 'assets\shop assets\product images\PS2150.png',
  'category' => 'Accessories',
  'description' => 'The Lorentz PS2-150 Controller is a solar-powered pump controller designed for small to medium-sized water pumping applications. It efficiently manages brushless DC motors up to 0.3 kW, making it ideal for off-grid water supply, irrigation, and livestock watering.',
  'weight' => 6, // Weight in kilograms
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
  'price' => 6000000,
  'image' => 'assets\shop assets\product images\PS1800-Pool-CS-37-1.png',
  'category' => 'Accessories',
  'description' => 'The Lorentz PS-1800 Pool CS-37-1 is a solar-powered surface pump system designed for high-volume water circulation in swimming pools and similar applications. It delivers up to 36 m³/h at a maximum head of 14 meters, making it ideal for large-scale water movement needs.​',
  'weight' => 25, // Weight in kilograms
  'rating' => [
      'stars' => 42,
      'count' => 13
  ],
  'brandID' => 'PS1800-Pool-CS-37-1',
  'keywords' => ['Pumps', 'felicity', 'Products', 'A-ONE'],
  'pdf' => 'assets\shop assets\datasheets\PS2-150 to PS2-4000.pdf',
],
[
  'id' => 90,
  'name' => 'Qoray Electric 4-Wheeler – Sill',
  'price' => 85094000.00,
  'image' => 'assets\shop assets\product images\Qoray Electric 4-wheeler – Sill.jpg',
  'category' => 'E-Mobility',
  'description' => 'The Qoray Electric 4-wheeler – Sill offers a maximum range of 520km per full charge and can complete up to 26 trips daily. Designed for urban mobility, it accommodates 4 passengers plus a driver and reaches a top speed of 185 km/h. Comes with a 36-month warranty.',
  'weight' => 1300, // Weight in kilograms
  'rating' => [
      'stars' => 42,
      'count' => 13
  ],
  'brandID' => 'Qoray-Sill',
  'keywords' => ['Qoray', 'EV', 'Sill', 'Electric Car', 'Mobility'],
  'pdf' => 'assets\shop assets\datasheets\EV_Brochure.pdf',
],
[
  'id' => 91,
  'name' => 'Qoray Electric 4-wheeler – Savannah',
  'price' => 102244000.00, // ₦78,649,013.58
  'image' => 'assets/shop assets/product images/Qoray Electric 4-wheeler – Savannah.jpg',
  'category' => 'E-Mobility',
  'description' => 'The Qoray Savannah is a high-performance 4-wheel electric vehicle designed for daily commercial and utility use. With a top speed of 180 km/h and range of up to 460 km per charge, it ensures efficient and eco-friendly mobility. Includes a 36-month warranty.',
  'weight' => 1400, // Estimated weight in kilograms
  'rating' => [
      'stars' => 4.8,
      'count' => 22
  ],
  'brandID' => 'Qoray-Savannah',
  'keywords' => ['Electric Vehicle', 'EV', 'Qoray', 'Savannah', 'Utility Van'],
  'pdf' => 'assets/shop assets/datasheets/EV_Brochure.pdf',
],
[
  'id' => 92,
  'name' => 'Qoray Electric 4-wheeler – Sable',
  'price' => 88952000.00, // ₦68,424,026.84
  'image' => 'assets/shop assets/product images/Qoray Electric 4-wheeler – Sable.jpg',
  'category' => 'E-Mobility',
  'description' => 'The Qoray Sable is a rugged 4-wheeler EV built for performance and endurance, offering a top speed of 150 km/h and a range of up to 480 km on a single charge. Ideal for long-distance transport with a 36-month warranty included.',
  'weight' => 1350, // Estimated weight in kilograms
  'rating' => [
      'stars' => 4.6,
      'count' => 18
  ],
  'brandID' => 'Qoray-Sable',
  'keywords' => ['Electric Vehicle', 'Qoray', 'Sable', '4-Wheeler', 'E-Mobility'],
  'pdf' => 'assets/shop assets/datasheets/EV_Brochure.pdf',
],
[
  'id' => 93,
  'name' => 'Qoray Electric 4-wheeler – Panther',
  'price' => 58243000.00, // ₦44,802,242.82
  'image' => 'assets/shop assets/product images/Qoray Electric 4-wheeler – Panther.jpg',
  'category' => 'E-Mobility',
  'description' => 'The Qoray Panther is a high-performance electric 4-wheeler engineered for power and range. It offers a maximum speed of 190 km/h and up to 580 km range on a full charge. Comes with a 36-month warranty.',
  'weight' => 1400, // Estimated weight in kilograms
  'rating' => [
      'stars' => 4.7,
      'count' => 21
  ],
  'brandID' => 'Qoray-Panther',
  'keywords' => ['Electric Vehicle', 'Panther', 'Qoray EV', '4-Wheeler', 'E-Mobility'],
  'pdf' => 'assets/shop assets/datasheets/EV_Brochure.pdf',
],
[
  'id' => 94,
  'name' => 'Qoray Electric 4-wheeler – Oak',
  'price' => 246890000.00, // ₦189,914,686.20
  'image' => 'assets/shop assets/product images/Qoray Electric 4-wheeler – Oak.jpg',
  'category' => 'E-Mobility',
  'description' => 'The Qoray Oak is a large-capacity 4-wheeler EV designed to carry 28 passengers plus 1 driver. It has a maximum speed of 100 km/h and a range of up to 160 km on a single full charge. Comes with a 36-month warranty.',
  'weight' => 3500, // Estimated weight in kilograms (heavy-duty vehicle)
  'rating' => [
      'stars' => 4.4,
      'count' => 12
  ],
  'brandID' => 'Qoray-Oak',
  'keywords' => ['Electric Vehicle', 'Qoray', 'Oak', '4-Wheeler', 'E-Mobility', 'Bus'],
  'pdf' => 'assets/shop assets/datasheets/EV_Brochure.pdf',
],
[
  'id' => 95,
  'name' => 'Qoray Electric 4-wheeler – Javan',
  'price' => 40533000.00, // ₦31,178,941.37
  'image' => 'assets/shop assets/product images/Qoray Electric 4-wheeler – Javan.jpg',
  'category' => 'E-Mobility',
  'description' => 'The Qoray Javan is a sleek 4-wheeler electric vehicle with seating for 4 passengers plus 1 driver. It offers a maximum speed of 101 km/h and a range of up to 220 km on a single charge. Includes a 36-month warranty.',
  'weight' => 1200, // Estimated weight in kilograms
  'rating' => [
      'stars' => 4.6,
      'count' => 17
  ],
  'brandID' => 'Qoray-Javan',
  'keywords' => ['Electric Vehicle', 'Qoray', 'Javan', '4-Wheeler', 'E-Mobility'],
  'pdf' => 'assets/shop assets/datasheets/EV_Brochure.pdf',
],
[
  'id' => 96,
  'name' => 'Qoray Electric 4-wheeler – Caspian',
  'price' => 75333000.00, // ₦57,948,371.93
  'image' => 'assets/shop assets/product images/Qoray Electric 4-wheeler – Caspian.jpg',
  'category' => 'E-Mobility',
  'description' => 'The Qoray Caspian is a robust 4-wheeler electric vehicle with seating for 4 passengers plus 1 driver. It delivers a top speed of 101 km/h and a range of up to 401 km on a single full battery charge. Includes a 36-month warranty.',
  'weight' => 1400, // Estimated weight in kilograms
  'rating' => [
      'stars' => 4.7,
      'count' => 19
  ],
  'brandID' => 'Qoray-Caspian',
  'keywords' => ['Electric Vehicle', 'Qoray', 'Caspian', '4-Wheeler', 'E-Mobility'],
  'pdf' => 'assets/shop assets/datasheets/EV_Brochure.pdf',
],
[
  'id' => 97,
  'name' => 'Qoray Electric 4-wheeler – Bear',
  'price' => 102244000.00, // ₦78,649,013.58
  'image' => 'assets/shop assets/product images/Qoray Electric 4-wheeler – Bear.jpg',
  'category' => 'E-Mobility',
  'description' => 'The Qoray Bear is a large electric 4-wheeler designed to carry 14 passengers plus 1 driver. It has a max speed of 100 km/h and offers a range of up to 320 km on a full battery charge. Includes a 36-month warranty.',
  'weight' => 2200, // Estimated weight in kilograms
  'rating' => [
      'stars' => 4.5,
      'count' => 16
  ],
  'brandID' => 'Qoray-Bear',
  'keywords' => ['Electric Vehicle', 'Qoray', 'Bear', '4-Wheeler', 'E-Mobility', 'Bus'],
  'pdf' => 'assets/shop assets/datasheets/EV_Brochure.pdf',
],
  [
    'id' => 98,
    'name' => 'Qoray Electric 3-wheeler – Teak',
    'price' => 4677000.00, // ₦3,597,146.29
    'image' => 'assets/shop assets/product images/Qoray Electric 3-wheeler.jpg',
    'category' => 'E-Mobility',
    'description' => 'The Qoray Teak is a versatile 3-wheeler electric vehicle, seating 6 passengers plus 1 driver, with a max speed of 40 km/h and up to 120 km range. Includes a 36-month warranty.',
    'weight' => 650, // Estimated weight in kilograms
    'rating' => [
        'stars' => 4.5,
        'count' => 15
    ],
    'brandID' => 'Qoray-Teak',
    'keywords' => ['Electric Vehicle', 'Qoray', 'Teak', '3-Wheeler', 'E-Mobility'],
    'pdf' => 'assets/shop assets/datasheets/EV_Brochure.pdf',
  ],
  [
    'id' => 99,
    'name' => 'Qoray Electric 3-wheeler – Beluga',
    'price' => 4624000.00, // ₦3,556,811.68
    'image' => 'assets/shop assets/product images/Qoray Electric 3-wheeler – Beluga.jpg',
    'category' => 'E-Mobility',
    'description' => 'The Qoray Beluga is a compact 3-wheeler EV with seating for 3 passengers plus 1 driver, max speed 30 km/h, and a range up to 60 km per charge. Includes a 36-month warranty.',
    'weight' => 600, // Estimated weight in kilograms
    'rating' => [
        'stars' => 4.3,
        'count' => 13
    ],
    'brandID' => 'Qoray-Beluga',
    'keywords' => ['Electric Vehicle', 'Qoray', 'Beluga', '3-Wheeler', 'E-Mobility'],
    'pdf' => 'assets/shop assets/datasheets/EV_Brochure.pdf',
  ],
[
  'id' => 100,
  'name' => 'Qoray Electric 2-wheeler – Falcon',
  'price' => 2470000.00, // ₦1,900,000.00
  'image' => 'assets/shop assets/product images/Qoray Electric 2-wheeler.jpg',
  'category' => 'E-Mobility',
  'description' => 'The Qoray Falcon is a nimble 2-wheeler electric vehicle designed for a single rider, offering a maximum speed of 85 km/h and a range of up to 100 km on a single battery charge. Includes a 36-month warranty.',
  'weight' => 120, // Estimated weight in kilograms
  'rating' => [
      'stars' => 4.4,
      'count' => 20
  ],
  'brandID' => 'Qoray-Falcon',
  'keywords' => ['Electric Vehicle', 'Qoray', 'Falcon', '2-Wheeler', 'E-Mobility'],
  'pdf' => 'assets/shop assets/datasheets/EV_Brochure.pdf',
],

];

// Extract unique categories for filtering
$categories = array_unique(array_map(function($product) {
    return $product['category'];
}, $products));

sort($categories); // Optional: sort alphabetically

?>

