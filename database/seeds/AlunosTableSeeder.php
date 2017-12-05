<?php

use Illuminate\Database\Seeder;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $nomes = [
            'Alexandre Benedeti Goncalves',
            'Alexandre William Miya', 
            'André Silva de Jesus',
            'Felipe Cavalcanti do Bonfim',
            'Gabriel Augusto Martins Marquesi de Souza',
            'Gabriel Ribeiro Paiva',
            'Gustavo Alves Miguel',
            'Hugo Carreira Costa',
            'Hugo Luiz Camargo Pinto',
            'Joao Pedro Molina Peinado',
            'Leonardo Aguiar Batista',
            'Marcelo Antônio Mendes Bastos',
            'Maria José Silva de Carvalho',
            'Matheus Costa da Silva',
            'Murilo Cesar Calado Junior',
            'Pedro Saad Galati',
            'Sylvester Henrique Alvarenga',
            'Thiago Henrique dos Reis'
        ];

        $matricula = [
            '2014.1.08.002',
            '2014.1.08.004',
            '2014.1.08.005',
            '2014.1.08.010',
            '2014.1.08.011',
            '2014.1.08.043',
            '2014.1.08.013',
            '2015.1.08.027',
            '2014.1.08.014',
            '2015.1.08.030',
            '2013.1.08.015',
            '2014.1.08.046',
            '2016.1.08.038',
            '2014.1.08.019',
            '2013.1.08.024',
            '2014.1.08.023',
            '2014.1.08.028',
            '2015.1.08.040'
        ];

        for($i = 0; $i < count($nomes); $i++){
            $dados = [
                'nome_aluno' => $nomes[$i],
                'matricula_aluno' => $matricula[$i]
            ];

            DB::table('alunos')->insert($dados);
        }

    }
}
