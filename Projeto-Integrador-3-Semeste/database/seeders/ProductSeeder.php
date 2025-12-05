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
                'name' => 'Anel Ouro 18K com Diamante',
                'description' => 'Anel elegante em ouro amarelo 18 quilates com diamante natural certificado de 1 quilate. Acabamento polido, tamanho ajustável.',
                'price' => 2500.00,
                'category' => 'feminino',
                'brand' => 'VERSACE',
                'image' => 'https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?w=500&h=500&fit=crop',
                'stock' => 5,
            ],
            [
                'name' => 'Colar Ouro Rose com Pérola',
                'description' => 'Colar delicado em ouro rose 18 quilates com pingente em pérola cultivada. Comprimento: 45cm, corrente em elo português.',
                'price' => 1800.00,
                'category' => 'feminino',
                'brand' => 'GUCCI',
                'image' => 'https://images.unsplash.com/photo-1535632066927-ab7c9ab60908?w=500&h=500&fit=crop',
                'stock' => 8,
            ],
            [
                'name' => 'Brinco Esmeralda e Ouro Branco',
                'description' => 'Brincos sofisticados com esmeralda natural colombiana e ouro branco 18K. Sistema de fechamento seguro tipo mola.',
                'price' => 3200.00,
                'category' => 'feminino',
                'brand' => 'PRADA',
                'image' => 'https://images.unsplash.com/photo-1535410206821-dca89b953f23?w=500&h=500&fit=crop',
                'stock' => 4,
            ],
            [
                'name' => 'Pulseira Ouro 18K com Safira Azul',
                'description' => 'Pulseira refinada em ouro amarelo 18 quilates com safira azul natural de 5 quilates. Comprimento ajustável de 17 a 19cm.',
                'price' => 2100.00,
                'category' => 'feminino',
                'brand' => 'CALVIN KLEIN',
                'image' => 'https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?w=500&h=500&fit=crop',
                'stock' => 6,
            ],
            [
                'name' => 'Anel Solitário de Noivado',
                'description' => 'Clássico anel de noivado em ouro branco 18K com diamante solitário certificado de 1.5 quilates. Aro simples e elegante.',
                'price' => 5000.00,
                'category' => 'feminino',
                'brand' => 'ZARA',
                'image' => 'https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?w=500&h=500&fit=crop',
                'stock' => 3,
            ],
            // Masculino
            [
                'name' => 'Anel Masculino em Ouro Amarelo',
                'description' => 'Anel clássico e simples em ouro amarelo 18 quilates. Design moderno e atemporal, largura de 5mm, tamanho ajustável.',
                'price' => 1200.00,
                'category' => 'masculino',
                'brand' => 'VERSACE',
                'image' => 'https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?w=500&h=500&fit=crop',
                'stock' => 7,
            ],
            [
                'name' => 'Pulseira Corrente Milanesa Ouro',
                'description' => 'Pulseira masculina em ouro 18 quilates com corrente milanesa. Comprimento: 20cm, fechamento de segurança tipo caixa.',
                'price' => 1600.00,
                'category' => 'masculino',
                'brand' => 'GUCCI',
                'image' => 'https://images.unsplash.com/photo-1535632066927-ab7c9ab60908?w=500&h=500&fit=crop',
                'stock' => 5,
            ],
            [
                'name' => 'Corrente Grumet em Ouro 18K',
                'description' => 'Corrente forte e durável em ouro amarelo 18 quilates com elo grumet. Comprimento: 50cm, peso aproximado: 12g.',
                'price' => 2200.00,
                'category' => 'masculino',
                'brand' => 'PRADA',
                'image' => 'https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?w=500&h=500&fit=crop',
                'stock' => 6,
            ],
            [
                'name' => 'Relógio Pulso em Ouro 18K',
                'description' => 'Relógio de pulso elegante em ouro 18 quilates com movimento automático suíço. Caixa: 42mm, pulseira integrada.',
                'price' => 4500.00,
                'category' => 'masculino',
                'brand' => 'CALVIN KLEIN',
                'image' => 'https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?w=500&h=500&fit=crop',
                'stock' => 2,
            ],
            [
                'name' => 'Brinco Ouro 18K para Homem',
                'description' => 'Brinco simples e discreto em ouro amarelo 18 quilates. Design minimalista, diâmetro: 5mm, fechamento de segurança.',
                'price' => 800.00,
                'category' => 'masculino',
                'brand' => 'ZARA',
                'image' => 'https://images.unsplash.com/photo-1535632066927-ab7c9ab60908?w=500&h=500&fit=crop',
                'stock' => 10,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
