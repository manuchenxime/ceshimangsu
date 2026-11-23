<?php


use Elo\Coluna;
use Elo\Migracao;
use Elo\Tabela;

return new class extends Migracao {
    public function subir(): void
    {
        Tabela::criar('categorias', [
            'id'=>Coluna::inteiro()->unico(),
            'nome' => Coluna::texto(150),
            'descricao' => Coluna::texto(255),
            'status' => Coluna::opcoes(['ATIVO', 'INATIVO'])->padrao('ATIVO'),
            'criado_em' => Coluna::dataHora(),
        ], ['exclusao_logica' => true]);
    }

    public function descer(): void
    {
        Tabela::apagar('categorias');
    }


};