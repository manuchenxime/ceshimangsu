<?php


use Elo\Coluna;
use Elo\Migracao;
use Elo\Tabela;

return new class extends Migracao {
    public function subir(): void
    {
        Tabela::criar('Curso', [
            'id' => Coluna::inteiro()->unico(),
            'titulo' => Coluna::texto(150),
            'descricao' => Coluna::texto(255),
            'carga_horaria' => Coluna::dataHora(),
            'nivel' => Coluna::texto(50),
            'categoria' => Coluna::texto(50),
            'criadoEm' => Coluna::dataHora(50),
            'setor_id' => Coluna::pertenceA('setores')->aoExcluir('SET NULL')->nulo(),
        ], ['exclusao_logica' => true]);
    }

    public function descer(): void
    {
        Tabela::apagar('Curso');
    }


};