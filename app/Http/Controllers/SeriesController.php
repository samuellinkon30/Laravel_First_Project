<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


//Ao usar extender Controller esta aplicando os constrllers do laravael
class SeriesController extends Controller
{
    public function index(Request $request)
    {   
        // Podemos usar o model pra trabalhar com os dados do banco
        $series = Series::all();
        // dd($series);

        //Dependendo do retonro o Laravel se adapta para tipo simples e complexos
       
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

        // $series = DB::select('SELECT id, nome, descricao FROM series');
       

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

    public function store(Request $request) {
        $nome = $request->input('nome_serie');
        $descricao = $request->input('descricao_serie');

        $serie = new Series();

        $serie->Nome = $nome;
        $serie->Descricao = $descricao;

        $serie->save();

        return redirect('/series');


        // if(DB::insert('INSERT INTO series (Nome,Descricao) VALUES (?,?)',[$nome, $descricao])){
            
        //     return redirect('/series');
        // }       
    }

    public function destroy(Request $request){
       
        $id =  $request->input('id_serie');

        $serie = Series::find($id);

        
        $serie->delete();

        return redirect('/series');

        // if(DB::delete('DELETE FROM series where id = ?', [$id])){
            
        //     return redirect('/series');
        // } else {
        //     return "Erro Ao deletar"; 
        // }
    }
}
