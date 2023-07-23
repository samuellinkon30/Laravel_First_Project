<x-layout title="Séries">
    <p> <a href="/series/criar">Adicionar série</a></p>
   
    <ul>   
    @foreach ($series as $serie)
       
        <form action="/series/deletar" method="post" id={{$serie->id}}>
        @csrf
        <li>{{$serie->id}} : {{$serie->Nome}} - {{$serie->Descricao}}
        <input type='hidden'  name="id_serie" value={{$serie->id}}>
        </li>
        <button>Deletar</button>
        </form>
        @endforeach    
    
    </ul>   

    {{-- Utilizase o @ para que seja ignorado a pesquisa da variavel --}}
    {{-- @{{nome}} --}}


    {{-- Possivel passar informações de PHP -> Js --}}
    <script>
        const series = {{Js::from($series)}}
        console.log(series);
    </script>
    
</x-layout>

