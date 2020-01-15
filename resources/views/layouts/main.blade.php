<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@section('head')
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    
    <meta name="description" content="Veja sobre meu perfil, serviços e informações de contato."/>
    <meta name="keywords" content="DCTI, David de Lima Cardoso, David Cardoso, Portfolio, Sobre David Cardoso"/>
    <meta name="robots" content="index, follow">

    <title>DC TI Solutions - @yield('title')</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/spinner-dcti.css')}}">

    <script src="{{asset('js/app.js')}}"></script>
    <!--JS DA PÁGINA MAIN-->
    <script src="{{asset('js/main.js')}}"></script>
    
</head>

@show

@section('body')
<body>

    <!--LOADING-->
    @section('spinner')
        
        <div id="loading">
            <img class="logo-spinner" width="50" src="{{asset('storage/components/cloud-dcti.svg')}}"><div class="spinner"></div>
        </div>
        <div id="conteudo" style="display: none">
    @show
    <!--DYSPLAY NAVBAR-->
    @section('navbar')
        
        @include('components/navbar')

    @show
    
    <!--BANNER-->
    <section class="home">

        
        
    </section>

    <!--TEXTO BANNER-->
    <div class="home_text">
        <div class="container col-12 fade">
          <h1 class="display-4">Soluções em TI</h1>
          <p class="lead">Tecnologia é conhecimento e soluções ágeis para o seu negócio.</p>
        </div>
    </div>
        <div class="container col-12 titles">
        <div class="row">
            <h1 class="d-none d-lg-inline d-md-inline d-xl-inline list-inline m-auto">TI SOLUTIONS <span>●</span> NETWORK COMPUTING <span>●</span> DEVELOPMENT</h1>
            <h1 class="d-lg-none d-md-none d-sm-inline container text-center mt-5"><div class="mb-3">TI SOLUTIONS</div><div class="mb-3">NETWORK COMPUTING</div><div class="mb-5">DEVELOPMENT</div></h1>
        </div>
        </div>
            
        @section('article')
        
            <!--DYSPLAY ARTICLES GRID SM 1 MD/LG 2-->
            <article>
                <div class="container-fluid">
                    <div class="row">

                        <!--ARTICLE 1-->
                        <div class="card bg-transparent border-0 border-0 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 hideme">
                            <div class="card-body">
                                <div class="row">
                                    <picture class="col-sm-3 d-flex justify-content-center justify-content-md-start">
                                        <img width="100" src="{{asset('storage/components/main/web_development.svg')}}" />
                                    </picture>
                                        <div class="col-sm-9">
                                            <h5 class="card-title d-flex justify-content-center justify-content-md-start">@yield('article-1-title')</h5>
                                            <p class="card-text text-justify">@yield('article-1-content')</p>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <!--ARTICLE 2-->
                        <div class="card bg-transparent border-0 border-0 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 hideme">
                            <div class="card-body">
                                <div class="row">
                                    <picture class="mb-3 col-sm-3 d-flex justify-content-center justify-content-md-start">
                                        <img width="100" src="{{asset('storage/components/main/net_computer.svg')}}" />
                                    </picture>
                                    
                                        <div class="col-sm-9">
                                            <h5 class="card-title d-flex justify-content-center justify-content-md-start">@yield('article-2-title')</h5>
                                            <p class="card-text text-justify">@yield('article-2-content')</p>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <!--ARTICLE 3-->
                        <div class="card bg-transparent border-0 border-0 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 hideme">
                            <div class="card-body">
                                <div class="row">
                                    <picture class="mb-3 col-sm-3 d-flex justify-content-center justify-content-md-start">
                                        <img width="100" src="{{asset('storage/components/main/open_source.svg')}}" />
                                    </picture>
                                    
                                    <div class="col-sm-9">
                                        <h5 class="card-title d-flex justify-content-center justify-content-md-start">@yield('article-3-title')</h5>
                                        <p class="card-text text-justify">@yield('article-3-content')</p>
                                       </div>
                                </div>
                            </div>
                        </div>

                        <!--ARTICLE 4-->
                        <div class="card bg-transparent border-0 border-0 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 hideme">
                            <div class="card-body">
                                <div class="row">
                                    <picture class="mb-3 col-sm-3 d-flex justify-content-center justify-content-md-start">
                                        <img width="100" src="{{asset('storage/components/main/solution.svg')}}" />
                                    </picture>
                                    
                                        <div class="col-sm-9">
                                            <h5 class="card-title d-flex justify-content-center justify-content-md-start">@yield('article-4-title')</h5>
                                            <p class="card-text text-justify">@yield('article-4-content')</p>
                                        </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </article>
        @show    

    <!--DYSPLAY FOOTER-->
        @section('footer')
            
            @include('components/footer')

        @show
    </div>
    <script src="{{asset('js/navbar.js')}}"></script>
   
</div>

</body>
@show


</html>