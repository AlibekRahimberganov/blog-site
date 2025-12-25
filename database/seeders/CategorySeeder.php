<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Electronics', 'description' => 'Devices and gadgets'],
            ['name' => 'Books', 'description' => 'Printed and digital books'],
            ['name' => 'Clothing', 'description' => 'Apparel and accessories'],
            ['name' => 'Home & Kitchen', 'description' => 'Household items and kitchenware'],
            ['name' => 'Sports', 'description' => 'Sporting goods and outdoor equipment'],
            ['name' => 'Toys', 'description' => 'Toys and games for children'],
            ['name' => 'Beauty', 'description' => 'Cosmetics and personal care products'],
            ['name' => 'Automotive', 'description' => 'Car parts and accessories'],
            ['name' => 'Health', 'description' => 'Health and wellness products'],
            ['name' => 'Garden', 'description' => 'Gardening tools and supplies'],
            ['name' => 'Music', 'description' => 'Musical instruments and accessories'],
            ['name' => 'Office Supplies', 'description' => 'Stationery and office equipment'],
            ['name' => 'Pet Supplies', 'description' => 'Products for pets'],
            ['name' => 'Baby Products', 'description' => 'Items for infants and toddlers'],
            ['name' => 'Grocery', 'description' => 'Food and beverages'],
            ['name' => 'Furniture', 'description' => 'Home and office furniture'],
            ['name' => 'Jewelry', 'description' => 'Accessories and fine jewelry'],
            ['name' => 'Footwear', 'description' => 'Shoes and sandals'],
            ['name' => 'Travel', 'description' => 'Travel accessories and luggage'],
            ['name' => 'Art Supplies', 'description' => 'Materials for artists and crafters'],
            ['name' => 'Video Games', 'description' => 'Gaming consoles and accessories'],
            ['name' => 'Collectibles', 'description' => 'Collectible items and memorabilia'],
            ['name' => 'Musical Instruments', 'description' => 'Instruments for music enthusiasts'],
            ['name' => 'Outdoor Gear', 'description' => 'Equipment for outdoor activities'],
            ['name' => 'Craft Supplies', 'description' => 'Materials for DIY projects'],
            ['name' => 'Watches', 'description' => 'Timepieces and accessories'],
            ['name' => 'Smart Home', 'description' => 'Home automation devices'],
            ['name' => 'Fitness', 'description' => 'Exercise equipment and accessories'],
            ['name' => 'Photography', 'description' => 'Cameras and photography gear'],
            ['name' => 'Stationery', 'description' => 'Writing materials and office supplies'],
            ['name' => 'Hobbies', 'description' => 'Items for various hobbies and interests'],
            ['name' => 'Sustainable Products', 'description' => 'Eco-friendly and sustainable items'],
            ['name' => 'Luxury Goods', 'description' => 'High-end and luxury products'],
            ['name' => 'Vintage Items', 'description' => 'Retro and vintage products'],
            ['name' => 'Seasonal Products', 'description' => 'Items for specific seasons and holidays'],
            ['name' => 'Educational Products', 'description' => 'Learning materials and resources'],
            ['name' => 'Event Supplies', 'description' => 'Supplies for parties and events'],
            ['name' => 'Tech Accessories', 'description' => 'Accessories for electronic devices'],
            ['name' => 'Health & Wellness', 'description' => 'Products for health and well-being'],
            ['name' => 'Food & Beverages', 'description' => 'Gourmet food and drink items'],
            ['name' => 'Home Improvement', 'description' => 'Tools and materials for home improvement projects'],
            ['name' => 'Baby & Kids', 'description' => 'Products for babies and children'],
            ['name' => 'Gaming', 'description' => 'Video games and gaming accessories'],
            ['name' => 'Collectibles & Memorabilia', 'description' => 'Collectible items and memorabilia'],
            ['name' => 'Outdoor & Adventure', 'description' => 'Gear for outdoor activities and adventures']
        ];
        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }

    }
}
