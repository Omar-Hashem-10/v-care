<?php

namespace App\Faker;

use App\Models\City;
use Faker\Provider\Base;

class ZoneProvider extends Base {
    protected static $usedZones = [];

    protected static $zones = [
        'Cairo' => [
            ['zone' => 'Nasr City', 'lat' => 30.0561, 'long' => 31.3304],
            ['zone' => 'Maadi', 'lat' => 29.9604, 'long' => 31.2550],
            ['zone' => 'Heliopolis', 'lat' => 30.0895, 'long' => 31.3213],
            ['zone' => 'Zamalek', 'lat' => 30.0626, 'long' => 31.2234],
            ['zone' => 'Shubra', 'lat' => 30.0852, 'long' => 31.2451]
        ],
        'Alexandria' => [
            ['zone' => 'Miami', 'lat' => 31.2454, 'long' => 29.9631],
            ['zone' => 'Stanley', 'lat' => 31.2315, 'long' => 29.9443],
            ['zone' => 'Smouha', 'lat' => 31.2096, 'long' => 29.9487],
            ['zone' => 'Sidi Gaber', 'lat' => 31.2162, 'long' => 29.9489],
            ['zone' => 'Bolkly', 'lat' => 31.2176, 'long' => 29.9548]
        ],
        'Giza' => [
            ['zone' => 'Dokki', 'lat' => 30.0377, 'long' => 31.2116],
            ['zone' => 'Mohandessin', 'lat' => 30.0472, 'long' => 31.2028],
            ['zone' => '6th of October', 'lat' => 29.9760, 'long' => 30.9493],
            ['zone' => 'Sheikh Zayed', 'lat' => 30.0444, 'long' => 30.9784],
            ['zone' => 'Haram', 'lat' => 29.9916, 'long' => 31.1286]
        ],
        'Sharm El-Sheikh' => [
            ['zone' => 'Naama Bay', 'lat' => 27.9138, 'long' => 34.3299],
            ['zone' => 'Shark’s Bay', 'lat' => 27.9647, 'long' => 34.3951],
            ['zone' => 'Old Market', 'lat' => 27.8629, 'long' => 34.2986]
        ],
        'Luxor' => [
            ['zone' => 'Karnak', 'lat' => 25.7188, 'long' => 32.6573],
            ['zone' => 'West Bank', 'lat' => 25.7336, 'long' => 32.6014],
            ['zone' => 'Luxor Temple', 'lat' => 25.6994, 'long' => 32.6394]
        ],
        'New York' => [
            ['zone' => 'Manhattan', 'lat' => 40.7831, 'long' => -73.9712],
            ['zone' => 'Brooklyn', 'lat' => 40.6782, 'long' => -73.9442],
            ['zone' => 'Queens', 'lat' => 40.7282, 'long' => -73.7949],
            ['zone' => 'Bronx', 'lat' => 40.8448, 'long' => -73.8648],
            ['zone' => 'Staten Island', 'lat' => 40.5795, 'long' => -74.1502]
        ],
        'Los Angeles' => [
            ['zone' => 'Downtown', 'lat' => 34.0407, 'long' => -118.2468],
            ['zone' => 'Hollywood', 'lat' => 34.0928, 'long' => -118.3287],
            ['zone' => 'Beverly Hills', 'lat' => 34.0736, 'long' => -118.4004],
            ['zone' => 'Santa Monica', 'lat' => 34.0195, 'long' => -118.4912],
            ['zone' => 'Venice Beach', 'lat' => 33.9850, 'long' => -118.4695]
        ],
        'Chicago' => [
            ['zone' => 'The Loop', 'lat' => 41.8837, 'long' => -87.6289],
            ['zone' => 'River North', 'lat' => 41.8924, 'long' => -87.6341],
            ['zone' => 'Lincoln Park', 'lat' => 41.9214, 'long' => -87.6513],
            ['zone' => 'Hyde Park', 'lat' => 41.7943, 'long' => -87.5907],
            ['zone' => 'Wicker Park', 'lat' => 41.9088, 'long' => -87.6778]
        ],
        'Houston' => [
            ['zone' => 'Downtown', 'lat' => 29.7604, 'long' => -95.3698],
            ['zone' => 'Midtown', 'lat' => 29.7380, 'long' => -95.3730],
            ['zone' => 'The Heights', 'lat' => 29.7972, 'long' => -95.3970],
            ['zone' => 'Montrose', 'lat' => 29.7440, 'long' => -95.3904],
            ['zone' => 'Galleria', 'lat' => 29.7405, 'long' => -95.4617]
        ],
        'Miami' => [
            ['zone' => 'Downtown', 'lat' => 25.7743, 'long' => -80.1937],
            ['zone' => 'Brickell', 'lat' => 25.7617, 'long' => -80.1918],
            ['zone' => 'Little Havana', 'lat' => 25.7651, 'long' => -80.2198],
            ['zone' => 'South Beach', 'lat' => 25.7826, 'long' => -80.1341],
            ['zone' => 'Coral Gables', 'lat' => 25.7215, 'long' => -80.2684]
        ],
        'Toronto' => [
            ['zone' => 'Downtown', 'lat' => 43.6532, 'long' => -79.3832],
            ['zone' => 'North York', 'lat' => 43.7545, 'long' => -79.4067],
            ['zone' => 'Scarborough', 'lat' => 43.7764, 'long' => -79.2318],
            ['zone' => 'Etobicoke', 'lat' => 43.6205, 'long' => -79.5132],
            ['zone' => 'York', 'lat' => 43.6897, 'long' => -79.4503]
        ],
        'Vancouver' => [
            ['zone' => 'Downtown', 'lat' => 49.2827, 'long' => -123.1207],
            ['zone' => 'West End', 'lat' => 49.2865, 'long' => -123.1300],
            ['zone' => 'Kitsilano', 'lat' => 49.2698, 'long' => -123.1554],
            ['zone' => 'Richmond', 'lat' => 49.1666, 'long' => -123.1336],
            ['zone' => 'Burnaby', 'lat' => 49.2488, 'long' => -122.9805]
        ],
        'Montreal' => [
            ['zone' => 'Downtown', 'lat' => 45.5017, 'long' => -73.5673],
            ['zone' => 'Old Montreal', 'lat' => 45.5075, 'long' => -73.5544],
            ['zone' => 'Plateau Mont-Royal', 'lat' => 45.5270, 'long' => -73.5804],
            ['zone' => 'Rosemont', 'lat' => 45.5592, 'long' => -73.6002],
            ['zone' => 'Laval', 'lat' => 45.6066, 'long' => -73.7124]
        ],
        'Calgary' => [
            ['zone' => 'Downtown', 'lat' => 51.0450, 'long' => -114.0571],
            ['zone' => 'Beltline', 'lat' => 51.0427, 'long' => -114.0831],
            ['zone' => 'Kensington', 'lat' => 51.0523, 'long' => -114.0880],
            ['zone' => 'Bridgeland', 'lat' => 51.0491, 'long' => -114.0350],
            ['zone' => 'Evergreen', 'lat' => 50.9066, 'long' => -114.1275]
        ],
        'Ottawa' => [
            ['zone' => 'Downtown', 'lat' => 45.4215, 'long' => -75.6972],
            ['zone' => 'Kanata', 'lat' => 45.3088, 'long' => -75.8985],
            ['zone' => 'Orleans', 'lat' => 45.4556, 'long' => -75.5060],
            ['zone' => 'Nepean', 'lat' => 45.3517, 'long' => -75.7560],
            ['zone' => 'Gatineau', 'lat' => 45.4765, 'long' => -75.7013]
        ],
        'Berlin' => [
            ['zone' => 'Mitte', 'lat' => 52.5200, 'long' => 13.4050],
            ['zone' => 'Charlottenburg', 'lat' => 52.5166, 'long' => 13.3041],
            ['zone' => 'Kreuzberg', 'lat' => 52.4986, 'long' => 13.4032],
            ['zone' => 'Prenzlauer Berg', 'lat' => 52.5381, 'long' => 13.4246],
            ['zone' => 'Friedrichshain', 'lat' => 52.5159, 'long' => 13.4544]
        ],
        'Munich' => [
            ['zone' => 'Altstadt-Lehel', 'lat' => 48.1371, 'long' => 11.5754],
            ['zone' => 'Schwabing', 'lat' => 48.1596, 'long' => 11.5866],
            ['zone' => 'Maxvorstadt', 'lat' => 48.1501, 'long' => 11.5676],
            ['zone' => 'Sendling', 'lat' => 48.1229, 'long' => 11.5455],
            ['zone' => 'Giesing', 'lat' => 48.1137, 'long' => 11.5942]
        ],
        'Hamburg' => [
            ['zone' => 'Altona', 'lat' => 53.5500, 'long' => 9.9333],
            ['zone' => 'Eimsbüttel', 'lat' => 53.5745, 'long' => 9.9561],
            ['zone' => 'St. Pauli', 'lat' => 53.5504, 'long' => 9.9634],
            ['zone' => 'Harburg', 'lat' => 53.4608, 'long' => 9.9833],
            ['zone' => 'Barmbek', 'lat' => 53.5900, 'long' => 10.0400]
        ],
        'Frankfurt' => [
            ['zone' => 'Innenstadt', 'lat' => 50.1109, 'long' => 8.6821],
            ['zone' => 'Sachsenhausen', 'lat' => 50.0965, 'long' => 8.6819],
            ['zone' => 'Bockenheim', 'lat' => 50.1247, 'long' => 8.6389],
            ['zone' => 'Bornheim', 'lat' => 50.1231, 'long' => 8.7130],
            ['zone' => 'Gallus', 'lat' => 50.1069, 'long' => 8.6364]
        ],
        'Cologne' => [
            ['zone' => 'Altstadt-Nord', 'lat' => 50.9384, 'long' => 6.9576],
            ['zone' => 'Ehrenfeld', 'lat' => 50.9472, 'long' => 6.9116],
            ['zone' => 'Deutz', 'lat' => 50.9409, 'long' => 6.9738],
            ['zone' => 'Lindenthal', 'lat' => 50.9333, 'long' => 6.9250],
            ['zone' => 'Nippes', 'lat' => 50.9761, 'long' => 6.9456]
        ],

        'London' => [
            ['zone' => 'Westminster', 'lat' => 51.4975, 'long' => -0.1357],
            ['zone' => 'Camden', 'lat' => 51.5406, 'long' => -0.1433],
            ['zone' => 'Kensington', 'lat' => 51.5010, 'long' => -0.1932],
            ['zone' => 'Greenwich', 'lat' => 51.4826, 'long' => -0.0077],
            ['zone' => 'Hackney', 'lat' => 51.5450, 'long' => -0.0553]
        ],
        'Manchester' => [
            ['zone' => 'City Centre', 'lat' => 53.4808, 'long' => -2.2426],
            ['zone' => 'Didsbury', 'lat' => 53.4178, 'long' => -2.2315],
            ['zone' => 'Salford', 'lat' => 53.4875, 'long' => -2.2901],
            ['zone' => 'Chorlton', 'lat' => 53.4429, 'long' => -2.2766],
            ['zone' => 'Rusholme', 'lat' => 53.4531, 'long' => -2.2273]
        ],
        'Birmingham' => [
            ['zone' => 'City Centre', 'lat' => 52.4862, 'long' => -1.8904],
            ['zone' => 'Edgbaston', 'lat' => 52.4586, 'long' => -1.9047],
            ['zone' => 'Selly Oak', 'lat' => 52.4405, 'long' => -1.9352],
            ['zone' => 'Erdington', 'lat' => 52.5232, 'long' => -1.8398],
            ['zone' => 'Jewellery Quarter', 'lat' => 52.4874, 'long' => -1.9132]
        ],
        'Liverpool' => [
            ['zone' => 'City Centre', 'lat' => 53.4084, 'long' => -2.9916],
            ['zone' => 'Everton', 'lat' => 53.4296, 'long' => -2.9678],
            ['zone' => 'Anfield', 'lat' => 53.4308, 'long' => -2.9608],
            ['zone' => 'Kirkdale', 'lat' => 53.4291, 'long' => -2.9860],
            ['zone' => 'Toxteth', 'lat' => 53.3891, 'long' => -2.9674]
        ],
        'Glasgow' => [
            ['zone' => 'City Centre', 'lat' => 55.8642, 'long' => -4.2518],
            ['zone' => 'West End', 'lat' => 55.8777, 'long' => -4.2926],
            ['zone' => 'Southside', 'lat' => 55.8238, 'long' => -4.2693],
            ['zone' => 'East End', 'lat' => 55.8609, 'long' => -4.1871],
            ['zone' => 'Govan', 'lat' => 55.8623, 'long' => -4.3097]
        ]
        ];

    public function uniqueZone()
    {
        $availableZones = [];

        foreach (static::$zones as $city => $zones) {
            foreach ($zones as $zoneData) {
                if (!in_array($zoneData['zone'], static::$usedZones)) {
                    $availableZones[] = [
                        'zone' => $zoneData['zone'],
                        'city' => $city,
                        'lat' => $zoneData['lat'],
                        'long' => $zoneData['long']
                    ];
                }
            }
        }

        if (empty($availableZones)) {
            throw new \Exception("No unique zones left.");
        }

        $selected = static::randomElement($availableZones);
        static::$usedZones[] = $selected['zone'];

        $city_id = City::where('name', $selected['city'])->value('id');

        return [
            'name' => $selected['zone'],
            'city_id' => $city_id,
            'lat' => $selected['lat'],
            'long' => $selected['long']
        ];
    }
}
