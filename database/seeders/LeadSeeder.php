<?php

namespace Database\Seeders;

use App\Models\Lead;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        self::seedDemoLeads();
    }

    /**
     * Seed initial demo inquiries if no leads exist.
     */
    public static function seedDemoLeads(): void
    {
        if (Lead::count() > 0) {
            return;
        }

        Lead::insert([
            [
                'name'             => 'Rajesh Patel',
                'phone'            => '+91 98251 44520',
                'email'            => 'rajesh.patel@gmail.com',
                'product_interest' => 'Whole Wheat Chakki Atta',
                'quantity'         => '500 Bags (10kg)',
                'message'          => 'Interested in dealership for Ahmedabad retail distribution.',
                'source'           => 'contact_page',
                'status'           => 'new',
                'notes'            => 'High-priority prospective dealer. Follow up requested today.',
                'ip_address'       => '127.0.0.1',
                'user_agent'       => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)',
                'created_at'       => Carbon::now()->subHours(4),
                'updated_at'       => Carbon::now()->subHours(4),
            ],
            [
                'name'             => 'Amit Sharma',
                'phone'            => '+91 94280 11982',
                'email'            => 'amit.sharma@sharmaflour.com',
                'product_interest' => 'Special Bati Atta',
                'quantity'         => '2 Tons',
                'message'          => 'Need pricing quotation for 2 tons sample order.',
                'source'           => 'product_inquiry_popup',
                'status'           => 'contacted',
                'notes'            => 'Sent wholesale price catalogue via WhatsApp. Awaiting reply.',
                'ip_address'       => '127.0.0.1',
                'user_agent'       => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)',
                'created_at'       => Carbon::now()->subDay(),
                'updated_at'       => Carbon::now()->subHours(18),
            ],
            [
                'name'             => 'Bhavin Shah',
                'phone'            => '+91 99099 23411',
                'email'            => 'bhavin@shahgrocers.in',
                'product_interest' => 'Pure Wheat Bran',
                'quantity'         => '100 Bags',
                'message'          => 'Inquiry for monthly regular supply of Wheat Bran.',
                'source'           => 'website',
                'status'           => 'closed',
                'notes'            => 'First sample batch confirmed and order dispatched.',
                'ip_address'       => '127.0.0.1',
                'user_agent'       => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)',
                'created_at'       => Carbon::now()->subDays(2),
                'updated_at'       => Carbon::now()->subDay(),
            ],
        ]);
    }
}
