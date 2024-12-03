<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Umkm>
 */
class UmkmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['Makanan', 'Minuman', 'Fashion', 'Elektronik', 'Kesehatan', 'Perdagangan'];

        $addresses = [
            'Jl. Merdeka No. 1, Jakarta',
            'Jl. Raya No. 5, Bandung',
            'Jl. Sudirman No. 10, Surabaya',
            'Jl. Taman No. 7, Medan',
            'Jl. Pahlawan No. 3, Bali'
        ];

        $descriptions = [
            'UMKM yang bergerak di bidang makanan ringan dengan bahan alami.',
            'Kami menyediakan berbagai produk fashion dengan desain kekinian.',
            'Kedai kopi dengan berbagai pilihan rasa dan kualitas terbaik.',
            'Penjual gadget dan aksesoris elektronik dengan harga terjangkau.',
            'Menjual berbagai produk kesehatan dan kecantikan secara online.',
            'Toko retail yang menyediakan produk berkualitas dengan harga murah.'
        ];

        return [
            'uuid' => $this->faker->uuid(),
            'name' => $this->faker->company(),
            'owner_name' => $this->faker->name(),
            'category' => $this->faker->randomElement($categories), // Menentukan kategori secara acak
            'address' => $this->faker->randomElement($addresses), // Menentukan alamat secara acak
            'description' => $this->faker->optional()->randomElement($descriptions), // Menentukan deskripsi secara acak atau kosong
            'contact' => $this->faker->phoneNumber(),
        ];
    }
}
