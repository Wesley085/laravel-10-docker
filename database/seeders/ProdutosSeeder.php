<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::create(
            [
                'nome' => 'Notebook',
                'valor' => '4599.99',
            ]
        );
        Produto::create([
            'nome' => 'Smartphone',
            'valor' => '2499.99',
        ]);

        Produto::create([
            'nome' => 'Monitor 27"',
            'valor' => '1399.99',
        ]);

        Produto::create([
            'nome' => 'Teclado Mecânico',
            'valor' => '399.99',
        ]);

        Produto::create([
            'nome' => 'Mouse Gamer',
            'valor' => '199.99',
        ]);
        Produto::create([
            'nome' => 'Cadeira Gamer',
            'valor' => '899.99',
        ]);

        Produto::create([
            'nome' => 'Headset Bluetooth',
            'valor' => '299.99',
        ]);

        Produto::create([
            'nome' => 'SSD 1TB',
            'valor' => '499.99',
        ]);

        Produto::create([
            'nome' => 'Placa de Vídeo RTX 4060',
            'valor' => '2499.99',
        ]);

        Produto::create([
            'nome' => 'Processador Intel i7 13ª Geração',
            'valor' => '1699.99',
        ]);

        Produto::create([
            'nome' => 'Fonte Modular 650W',
            'valor' => '449.99',
        ]);

        Produto::create([
            'nome' => 'Gabinete com RGB',
            'valor' => '329.99',
        ]);

        Produto::create([
            'nome' => 'Mesa para Computador',
            'valor' => '549.99',
        ]);

        Produto::create([
            'nome' => 'Cooler para CPU',
            'valor' => '149.99',
        ]);

        Produto::create([
            'nome' => 'Câmera Web Full HD',
            'valor' => '199.99',
        ]);
    }
}
