<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // Feminino
            [
                'name' => 'Anel de Ouro com Diamante',
                'description' => 'Anel elegante de ouro 18 quilates com diamante natural de 1 quilate',
                'price' => 2500.00,
                'category' => 'feminino',
                'image' => 'img/anel-ouro-diamante.jpg',
                'stock' => 5,
            ],
            [
                'name' => 'Colar de Ouro Rose',
                'description' => 'Colar delicado em ouro rose 18 quilates com pingente em pérola',
                'price' => 1800.00,
                'category' => 'feminino',
                'image' => 'img/colar-ouro-rose.jpg',
                'stock' => 8,
            ],
            [
                'name' => 'Brinco de Esmeralda',
                'description' => 'Brincos elegantes com esmeralda colombiana e ouro branco',
                'price' => 3200.00,
                'category' => 'feminino',
                'image' => 'img/brinco-esmeralda.jpg',
                'stock' => 4,
            ],
            [
                'name' => 'Pulseira de Ouro com Safira',
                'description' => 'Pulseira refinada em ouro 18 quilates com safira azul natural',
                'price' => 2100.00,
                'category' => 'feminino',
                'image' => 'img/pulseira-safira.jpg',
                'stock' => 6,
            ],
            [
                'name' => 'Anel de Noivado Solitário',
                'description' => 'Anel de noivado clássico com diamante solitário de 1.5 quilates',
                'price' => 5000.00,
                'category' => 'feminino',
                'image' => 'img/anel-noivado.jpg',
                'stock' => 3,
            ],
            // Masculino
            [
                'name' => 'Anel Masculino de Ouro',
                'description' => 'Anel simples e elegante em ouro 18 quilates para homem',
                'price' => 1200.00,
                'category' => 'masculino',
                'image' => 'img/anel-masculino.jpg',
                'stock' => 7,
            ],
            [
                'name' => 'Pulseira de Ouro Malha',
                'description' => 'Pulseira em ouro 18 quilates com malha milanesa',
                'price' => 1600.00,
                'category' => 'masculino',
                'image' => 'img/pulseira-ouro-malha.jpg',
                'stock' => 5,
            ],
            [
                'name' => 'Corrente de Ouro Grumet',
                'description' => 'Corrente em ouro 18 quilates com elo grumet forte',
                'price' => 2200.00,
                'category' => 'masculino',
                'image' => 'img/corrente-grumet.jpg',
                'stock' => 6,
            ],
            [
                'name' => 'Relógio de Ouro',
                'description' => 'Relógio de pulso em ouro 18 quilates com movimento automático',
                'price' => 4500.00,
                'category' => 'masculino',
                'image' => 'img/relogio-ouro.jpg',
                'stock' => 2,
            ],
            [
                'name' => 'Brinco de Ouro para Homem',
                'description' => 'Brinco simples e discreto em ouro 18 quilates',
                'price' => 800.00,
                'category' => 'masculino',
                'image' => 'img/brinco-homem.jpg',
                'stock' => 10,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
