<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '01234567890',
                'address' => '123 Main St, City, Country',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'phone' => '019876543210',
                'address' => '456 Elm St, City, Country',
            ],
            [
                'name' => 'Adam Smith',
                'email' => 'adam@example.com',
                'phone' => '019876543211',
                'address' => '456 Elm St, City, Country',
            ],
            [
                'name' => 'Kaite',
                'email' => 'kaite@example.com',
                'phone' => '019876543111',
                'address' => '456 Elm St, City, Country',
            ],
            [
                'name' => 'Dean',
                'email' => 'dean@example.com',
                'phone' => '019876843111',
                'address' => '456 Elm St, City, Country',
            ],
            // Add more clients as needed
        ];

        foreach ($clients as $clientData) {
            Client::create($clientData);
        }
    }
}
