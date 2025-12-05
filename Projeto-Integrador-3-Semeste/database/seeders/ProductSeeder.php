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
            // ===== FEMININO - ANÉIS =====
            [
                'name' => 'Anel Ouro 18K com Diamante',
                'description' => 'Anel elegante em ouro amarelo 18 quilates com diamante natural certificado. Acabamento polido, tamanho ajustável.',
                'price' => 2500.00,
                'category' => 'feminino',
                'brand' => 'VERSACE',
                'image' => 'anel1.png',
                'stock' => 5,
            ],
            [
                'name' => 'Anel Ouro Rose Delicado',
                'description' => 'Anel delicado em ouro rose 18 quilates com design sofisticado. Perfeito para uso diário ou ocasiões especiais.',
                'price' => 1800.00,
                'category' => 'feminino',
                'brand' => 'GUCCI',
                'image' => 'anel2.png',
                'stock' => 8,
            ],
            [
                'name' => 'Anel Verde Esmeralda com Halo',
                'description' => 'Anel sofisticado com esmeralda natural e diamantes em halo. Ouro branco 18K, fechamento seguro tipo mola.',
                'price' => 3200.00,
                'category' => 'feminino',
                'brand' => 'PRADA',
                'image' => 'anelverde.webp',
                'stock' => 4,
            ],
            [
                'name' => 'Anel Ouro com Safira Azul',
                'description' => 'Anel refinado em ouro amarelo 18 quilates com safira azul natural. Design elegante com diamantes laterais.',
                'price' => 2100.00,
                'category' => 'feminino',
                'brand' => 'CALVIN KLEIN',
                'image' => 'anel1.png',
                'stock' => 6,
            ],
            [
                'name' => 'Anel Solitário de Noivado',
                'description' => 'Clássico anel de noivado em ouro branco 18K com diamante solitário certificado de 1.5 quilates.',
                'price' => 5000.00,
                'category' => 'feminino',
                'brand' => 'ZARA',
                'image' => 'anel2.png',
                'stock' => 3,
            ],
            // ===== FEMININO - COLARES =====
            [
                'name' => 'Colar Pantera em Ouro 18K',
                'description' => 'Colar refinado com pingente em formato de pantera com olhos em diamante. Ouro amarelo 18K, comprimento: 45cm.',
                'price' => 2200.00,
                'category' => 'feminino',
                'brand' => 'VERSACE',
                'image' => 'colar1.png',
                'stock' => 6,
            ],
            [
                'name' => 'Colar Espiral Dourado',
                'description' => 'Colar clássico com pingente espiral em ouro 18 quilates. Design moderno e atemporal, comprimento: 50cm.',
                'price' => 1600.00,
                'category' => 'feminino',
                'brand' => 'GUCCI',
                'image' => 'colar2.png',
                'stock' => 7,
            ],
            [
                'name' => 'Colar Ouro com Safira',
                'description' => 'Colar elegante em ouro branco 18K com pingente de safira azul. Comprimento ajustável, ideal para ocasiões especiais.',
                'price' => 2200.00,
                'category' => 'feminino',
                'brand' => 'PRADA',
                'image' => 'colar1.png',
                'stock' => 5,
            ],
            [
                'name' => 'Colar Minimalista em Ouro Rose',
                'description' => 'Colar simples e sofisticado em ouro rose 18 quilates. Design moderno para complementar qualquer look.',
                'price' => 1400.00,
                'category' => 'feminino',
                'brand' => 'CALVIN KLEIN',
                'image' => 'colar2.png',
                'stock' => 6,
            ],
            [
                'name' => 'Colar Corrente Forte Ouro',
                'description' => 'Colar em ouro amarelo 18 quilates com corrente forte e durável. Comprimento: 55cm, peso: 8g.',
                'price' => 1700.00,
                'category' => 'feminino',
                'brand' => 'ZARA',
                'image' => 'colar2.png',
                'stock' => 4,
            ],
            // ===== MASCULINO - ANÉIS =====
            [
                'name' => 'Anel Masculino em Ouro Amarelo',
                'description' => 'Anel clássico e simples em ouro amarelo 18 quilates. Design moderno e atemporal, largura de 5mm.',
                'price' => 1200.00,
                'category' => 'masculino',
                'brand' => 'VERSACE',
                'image' => 'anel1.png',
                'stock' => 7,
            ],
            [
                'name' => 'Anel Ouro Branco para Homem',
                'description' => 'Anel masculino em ouro branco 18K com design robusto. Perfeito para o dia a dia, alta durabilidade.',
                'price' => 1350.00,
                'category' => 'masculino',
                'brand' => 'GUCCI',
                'image' => 'anel2.png',
                'stock' => 6,
            ],
            [
                'name' => 'Anel Ouro Rose Masculino',
                'description' => 'Anel elegante em ouro rose 18 quilates para homem. Design sofisticado, tamanho ajustável.',
                'price' => 1400.00,
                'category' => 'masculino',
                'brand' => 'PRADA',
                'image' => 'anelverde.webp',
                'stock' => 5,
            ],
            [
                'name' => 'Anel Ouro 18K Espesso',
                'description' => 'Anel robusto em ouro amarelo 18 quilates para homem. Design masculino, largura: 8mm.',
                'price' => 1600.00,
                'category' => 'masculino',
                'brand' => 'CALVIN KLEIN',
                'image' => 'anel1.png',
                'stock' => 5,
            ],
            [
                'name' => 'Anel Ouro Branco Minimalista',
                'description' => 'Anel simples em ouro branco 18K com design minimalista. Perfeito para look masculino sofisticado.',
                'price' => 1250.00,
                'category' => 'masculino',
                'brand' => 'ZARA',
                'image' => 'anel2.png',
                'stock' => 8,
            ],
            // ===== MASCULINO - COLARES E CORRENTES =====
            [
                'name' => 'Corrente Pantera em Ouro 18K',
                'description' => 'Corrente masculina com pingente pantera em ouro 18 quilates. Comprimento: 50cm, design elegante.',
                'price' => 2000.00,
                'category' => 'masculino',
                'brand' => 'VERSACE',
                'image' => 'colar1.png',
                'stock' => 5,
            ],
            [
                'name' => 'Corrente Espiral Grumet Ouro',
                'description' => 'Corrente forte e durável em ouro amarelo 18 quilates com elo grumet. Comprimento: 50cm, peso: 12g.',
                'price' => 1900.00,
                'category' => 'masculino',
                'brand' => 'GUCCI',
                'image' => 'colar2.png',
                'stock' => 6,
            ],
            [
                'name' => 'Corrente Ouro Branco Elo Português',
                'description' => 'Corrente elegante em ouro branco 18K com elo português tradicional. Comprimento: 55cm.',
                'price' => 2400.00,
                'category' => 'masculino',
                'brand' => 'PRADA',
                'image' => 'colar1.png',
                'stock' => 4,
            ],
            [
                'name' => 'Pulseira Ouro Rose para Homem',
                'description' => 'Pulseira masculina em ouro rose 18 quilates com design sofisticado. Comprimento: 21cm.',
                'price' => 1800.00,
                'category' => 'masculino',
                'brand' => 'CALVIN KLEIN',
                'image' => 'colar2.png',
                'stock' => 5,
            ],
            [
                'name' => 'Corrente Ouro 18K Elo Duplo',
                'description' => 'Corrente forte em ouro amarelo 18 quilates com elo duplo resistente. Comprimento: 60cm, peso: 15g.',
                'price' => 2600.00,
                'category' => 'masculino',
                'brand' => 'ZARA',
                'image' => 'colar2.png',
                'stock' => 3,
            ],
            // ===== MASCULINO - RELÓGIOS =====
            [
                'name' => 'Relógio Pulso em Ouro 18K',
                'description' => 'Relógio de pulso elegante em ouro 18 quilates com movimento automático. Caixa: 42mm, impermeável.',
                'price' => 4500.00,
                'category' => 'masculino',
                'brand' => 'VERSACE',
                'image' => 'relogio1.png',
                'stock' => 2,
            ],
            [
                'name' => 'Relógio Ouro Branco Premium',
                'description' => 'Relógio de luxo em ouro branco 18K com movimento suíço. Caixa: 40mm, cronógrafo.',
                'price' => 5200.00,
                'category' => 'masculino',
                'brand' => 'GUCCI',
                'image' => 'relogio1.png',
                'stock' => 1,
            ],
            [
                'name' => 'Relógio Ouro Rose Clássico',
                'description' => 'Relógio clássico em ouro rose 18 quilates com design timeless. Caixa: 38mm, movimento automático suíço.',
                'price' => 4800.00,
                'category' => 'masculino',
                'brand' => 'PRADA',
                'image' => 'relogio1.png',
                'stock' => 2,
            ],
            [
                'name' => 'Relógio Ouro Amarelo Esportivo',
                'description' => 'Relógio esportivo em ouro amarelo 18K com movimento resistente. Caixa: 44mm, à prova d\'água até 100m.',
                'price' => 4200.00,
                'category' => 'masculino',
                'brand' => 'CALVIN KLEIN',
                'image' => 'relogio1.png',
                'stock' => 3,
            ],
            [
                'name' => 'Relógio Ouro 18K com Diamante',
                'description' => 'Relógio luxuoso em ouro 18 quilates com incrustações de diamantes. Caixa: 36mm, movimento automático.',
                'price' => 5800.00,
                'category' => 'masculino',
                'brand' => 'ZARA',
                'image' => 'relogio1.png',
                'stock' => 1,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
