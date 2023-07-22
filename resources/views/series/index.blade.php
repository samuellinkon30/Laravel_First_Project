<x-layout title="Séries">
    <p> <a href="/series/criar">Adicionar série</a></p>
   
    <ul>   
    @foreach ($series as $seire)
       <li>{{$seire}}</li>
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