<?php
use Illuminate\Database\Seeder;
use App\Models\Utilizator;
use App\Models\Shipment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Cream 3 utilizatori
        $utilizator1 = Utilizator::create([
            'email' => 'john@example.com',
            'fullname' => 'John Doe',
            'password' => bcrypt('password'),
            'phonenumber' => '555-1234',
            'address' => '123 Main St, Anytown, USA',
            'type' => 'client',
        ]);
        $utilizator2 = Utilizator::create([
            'email' => 'jane@example.com',
            'fullname' => 'Jane Smith',
            'password' => bcrypt('password'),
            'phonenumber' => '555-5678',
            'address' => '456 Elm St, Anytown, USA',
            'type' => 'client',
        ]);
        $utilizator3 = Utilizator::create([
            'email' => 'admin@example.com',
            'fullname' => 'Admin User',
            'password' => bcrypt('password'),
            'phonenumber' => '555-9012',
            'address' => '789 Oak St, Anytown, USA',
            'type' => 'admin',
        ]);

        // Cream 3 shipments
        $shipment1 = Shipment::create([
            'from_client' => $utilizator1->id,
            'to_client' => $utilizator2->id,
            'size' => 1,
            'weight' => 5,
            'category' => 'documents',
            'urgency' => 'sameDay',
            'price' => 10.00,
            'status' => 'waitingPickup',
        ]);
        $shipment2 = Shipment::create([
            'from_client' => $utilizator2->id,
            'to_client' => $utilizator3->id,
            'size' => 2,
            'weight' => 10,
            'category' => 'food',
            'urgency' => 'extraUrgent',
            'price' => 25.00,
            'status' => 'waitingDelivery',
        ]);
        $shipment3 = Shipment::create([
            'from_client' => $utilizator1->id,
            'to_client' => $utilizator3->id,
            'size' => 3,
            'weight' => 15,
            'category' => 'electronics',
            'urgency' => 'notUrgent',
            'price' => 30.00,
            'status' => 'delivered',
        ]);
    }
}
