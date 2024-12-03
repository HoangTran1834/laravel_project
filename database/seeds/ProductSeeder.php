<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        // Xóa dữ liệu cũ
        \DB::table('products')->delete();
        // DB::table('products')->truncate();

        // Thêm dữ liệu mới
        $products = [
            [
                'name' => 'Smartphone XYZ',
                'description' => 'Latest smartphone with high performance',
                'price' => 999.99,
                'cover_img' => 'smartphone_xyz.jpg',
                'shop_id' => 1,
                'product_attributes' => json_encode(['brand' => 'BrandX', 'color' => 'Black', 'warranty' => '1 year']),
            ],
            [
                'name' => 'Men Running Shoes',
                'description' => 'Comfortable running shoes for men',
                'price' => 79.99,
                'cover_img' => 'mens_running_shoes.jpg',
                'shop_id' => 1,
                'product_attributes' => json_encode(['size' => '10', 'material' => 'Mesh', 'color' => 'Blue']),
            ],
            [
                'name' => 'Women Handbag',
                'description' => 'Stylish handbag for women',
                'price' => 49.99,
                'cover_img' => 'womens_handbag.jpg',
                'shop_id' => 2,
                'product_attributes' => json_encode(['material' => 'Leather', 'color' => 'Red']),
            ],
            [
                'name' => 'Digital Watch',
                'description' => 'Modern digital watch with multiple features',
                'price' => 199.99,
                'cover_img' => 'digital_watch.jpg',
                'shop_id' => 2,
                'product_attributes' => json_encode(['brand' => 'BrandY', 'water_resistant' => 'Yes']),
            ],
            [
                'name' => 'Laptop Pro 15',
                'description' => 'High-performance laptop for professionals',
                'price' => 1299.99,
                'cover_img' => 'laptop_pro_15.jpg',
                'shop_id' => 1,
                'product_attributes' => json_encode(['brand' => 'BrandZ', 'ram' => '16GB', 'storage' => '512GB SSD']),
            ],
            [
                'name' => 'Men Casual T-Shirt',
                'description' => 'Soft and comfortable t-shirt',
                'price' => 19.99,
                'cover_img' => 'mens_tshirt.jpg',
                'shop_id' => 1,
                'product_attributes' => json_encode(['size' => 'M', 'material' => 'Cotton', 'color' => 'White']),
            ],
            [
                'name' => 'Women Sunglasses',
                'description' => 'Elegant sunglasses for women',
                'price' => 24.99,
                'cover_img' => 'womens_sunglasses.jpg',
                'shop_id' => 2,
                'product_attributes' => json_encode(['brand' => 'BrandA', 'color' => 'Black']),
            ],
            [
                'name' => 'Wireless Headphones',
                'description' => 'Noise-cancelling wireless headphones',
                'price' => 149.99,
                'cover_img' => 'wireless_headphones.jpg',
                'shop_id' => 1,
                'product_attributes' => json_encode(['brand' => 'BrandB', 'battery_life' => '30 hours']),
            ],
            [
                'name' => 'Smartwatch Alpha',
                'description' => 'Feature-packed smartwatch for fitness enthusiasts',
                'price' => 179.99,
                'cover_img' => 'smartwatch_alpha.jpg',
                'shop_id' => 2,
                'product_attributes' => json_encode(['brand' => 'BrandC', 'color' => 'Silver']),
            ],
            [
                'name' => '4K LED TV',
                'description' => 'Ultra HD LED TV with stunning visuals',
                'price' => 499.99,
                'cover_img' => '4k_led_tv.jpg',
                'shop_id' => 2,
                'product_attributes' => json_encode(['brand' => 'BrandD', 'screen_size' => '55 inches']),
            ],
        ];

        // Thêm dữ liệu vào bảng products
        DB::table('products')->insert($products);
    }
}

