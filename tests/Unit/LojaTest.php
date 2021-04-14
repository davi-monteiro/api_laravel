<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Loja;

class LojaTest extends TestCase
{
    /** @test */
    public function test_instancia_correto()
    {
        $loja = new Loja;

        $campos = [
            'nome_fantasia',
            'cnpj',
            'email',
            'telefone',
            'endereco',
            'bairro',
            'estado'
        ];

        $comparacao = array_diff($campos, $loja->getFillable());

        $this->assertEquals(0, count($comparacao));

    }
}
