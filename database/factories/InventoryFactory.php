<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = [
            'Alat Pertanian',
            'Bahan Bangunan',
            'Produk Kerajinan',
            'Hasil Bumi',
            'Kebutuhan Pokok'
        ];

        $itemsByCategory = [
            'Alat Pertanian' => ['Cangkul', 'Traktor', 'Sabit', 'Sprayer', 'Pompa Air'],
            'Bahan Bangunan' => ['Batu Bata', 'Semen', 'Kayu', 'Pasir', 'Paku'],
            'Produk Kerajinan' => ['Anyaman Bambu', 'Tembikar', 'Ukiran Kayu', 'Kain Tenun', 'Keranjang Rotan'],
            'Hasil Bumi' => ['Padi', 'Jagung', 'Sayuran', 'Buah-buahan', 'Rempah-rempah'],
            'Kebutuhan Pokok' => ['Beras', 'Gula', 'Minyak Goreng', 'Garam', 'Tepung']
        ];

        $category = $this->faker->randomElement($categories);
        $name = $this->faker->randomElement($itemsByCategory[$category]);

        return [
            'uuid' => $this->faker->uuid(),
            'name' => $name,
            'description' => "Stok $name untuk kebutuhan desa. Kategori: $category.",
            'category' => $category,
            'stock' => $this->faker->numberBetween(10, 500), // Adjusted for realistic village quantities
        ];
    }
}
