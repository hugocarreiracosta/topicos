@extends('app')

    @section('menu')
        @parent 
        <h1>Bem vindo a página Inicial </h1>
        
    @stop

    @section('conteudo')
        <div class="content">
            <div class="title m-b-md">
                HUGO CARREIRA COSTA
            </div>

            <div class="links">
                Desenvolvido em 16/10/2017
            </div>
        </div>
    @stop

@section('footer')
<footer>
    @component('mensagem')
        @slot('titulo')
            Slots & components
        @endslot

        @slot('msg')
             Esse é um exemplo de slot e components
        @endslot

    @endcomponent

</footer>
@stop