<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Ao usar extender Controller esta aplicando os constrllers do laravael
class SeriesController extends Controller
{
    public function index(Request $request)
    {   
        //Dependno do retonro o Laravel se adapta para tipo simples e complexos
       
        // return $series = [
        //     'Serie 1',
        //     'Serie 2',
        //     'Serie 3',
        //     'Serie 4'
        // ];


        // É possivel utilizar a request para devolver N tipos de respostas

        // return $request->get('id');
        // return $request->url();
        // return $request->method();
        // return $request->input();
        // return redirect('https://google.com.br');

        $series = [
            'Serie 1',
            'Serie 2',
            'Serie 3',
            'Serie 4'
        ];

        // Compact - executa a mesma função do retrun view e chamando o nome da vatiavel
        // compact('series');

        // Busca na view o conteudo da resposta
        // É possivel chamar as variavel que serao criadas e chamadas nas views
        
        // return view('ListarSeries',
        //     compact('series')
        // );

        //Possivel usar with para trazer as variaveis
        return view('series.index')->with('series',$series);
    }

    public function create() {
        return view('series.create');
    }
}
