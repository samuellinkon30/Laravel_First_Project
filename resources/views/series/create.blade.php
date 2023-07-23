<x-layout title="Criação">
    <form action="/series/salvar" method="post">
        @csrf
        <h3>Digite o Nome da Série</h3>
        <input type="text" name='nome_serie' id="nome_serie">
        <br>
        <input type="text" name='descricao_serie' id="descricao_serie">
        <input class="btn" type="submit" value="Salvar">
    </form>
</x-layout>