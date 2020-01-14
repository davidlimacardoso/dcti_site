@extends('layouts/main')

{{-- HEAD --}}
@section('head')
    @parent
@endsection

{{-- TITULO DA PÁGINA --}}
@section('title','Home')

{{-- BODY --}}
@section('body')
    @parent

    {{-- SPINNER LOADING --}}
    @section('spinner')
        @parent        
    @endsection

    {{-- NAVBAR --}}
    @section('navbar')
        @parent
    @endsection

    {{-- ARTICLES --}}
    @section('article')
        @parent

        {{-- ARTICLE 1--}}
        @section('article-1-title','Web Development')
        @section('article-1-content',"Desenvolvimento web dinânimico e fluído provendo performace e seguraça com frameworks e API's atualizados.")
                        
        {{-- ARTICLE 2--}}
        @section('article-2-title','Network Computer')
        @section('article-2-content',"Implementação de infraestrutura física e lógica para redes de computadores, implementar serviços que atende seus requisitos.")
    
        {{-- ARTICLE 3--}}
        @section('article-3-title','Open Source Services')
        @section('article-3-content',"Dispor de serviços de código livre minimizando custos e agregando a praticidade e o gerenciamento unificado.")    

        {{-- ARTICLE 4--}}
        @section('article-4-title','TI Solutions')
        @section('article-4-content',"Criar e implementar soluções de TI para fortaceler o processamento, gerencimanto e a segurança dos dados.")

    @endsection

    {{-- FOOTER --}}
    @section('footer')
        @parent
    @endsection
    
@endsection






