<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@section('head')
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="csrf-token" content="{{csrf_token()}}">
        
        <title>DC TI Solutions - Sobre</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/footer.css')}}">
        <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
        <link rel="stylesheet" href="{{asset('css/about.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/all.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('css/pace-themes/pace.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('css/spinner-dcti.css')}}">

        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/about.js')}}"></script>

    </head>

@show

@section('body')
<body>

    @show
    <!--DYSPLAY NAVBAR-->
    @section('navbar')
        
        @include('components/navbar')

    @show
    
    <!--BANNER-->
    <section class="home">
        
    </section>

    <!--TEXTO BANNER-->
    <div class="home_img">
        <img width="200" src="{{asset('storage/david-cardoso-picture.jpg')}}" alt="Foto de David Cardoso">
    </div>
            
        @section('article')
        
        <div class="container col-12 title display-4">
            <div class="row">
                <title class=" d-flex m-auto">Sobre</title>
            </div>
        </div>
        
        <!--ARTICLE ABOUT ME-->
        <div class="container m-md-auto">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 m-sm-auto pt-5">
                    <p class="text-justify">Sou David de Lima Cardoso tenho <!--FUNÇÃO CALCULAR ANIVERSARIO PELO NASCIMENTO-->
                        @php
                            $dataNasc = '14/05/1993';
                            list($dia, $mes, $ano) = explode('/', $dataNasc);
                            $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                            $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
                            $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
                            print $idade;
                        @endphp anos, desempenho a função de TI há sete anos. Formado em Tecnologia em Redes de Computadores e Pós-Graduado em Engenharia de Softaware, venho me capacitando cada vez mais no campo acadêmico e profissional. Obtive bastante experiência em suporte e redes de computadores, tive a oportunidade de atuar em projetos de grande escala, desenvolver métodos e implementar serviços informatizados. Atualmente venho me expandindo na área principalmente na área de programação, a qual estou me dedicando mais e buscando uma oportunidade de me qualificar em uma vaga de desenvolvedor ou atuar na área de suporte de TI e Redes.</a>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-sm-center">

                    <img class=" img-fluid" width="400px" src="{{asset('storage/components/about/ti-solutions.png')}}" alt="My technologies than I work.">

                </div>
            </div>
        </div>

        <!--ARTICLE GRADUATE-->
        <div class="container m-md-auto pt-4">
            <div class="title display-4 text-center">Educação</div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center">

                    <img class="mt-5 img-fluid" width="200px" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTggNTgiIHdpZHRoPSI1MTJweCI+PGcgaWQ9IlBhZ2UtMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyBpZD0iMDAxLS0tRGVncmVlIiBmaWxsLXJ1bGU9Im5vbnplcm8iPjxwYXRoIGlkPSJTaGFwZSIgZD0ibTU4IDQxYzAgNS41Mi0uOSAxMC0yIDEwLTYuNzExMjI4NC0xLjA3MjU0MDMtMTMuNDg1OTc3OS0xLjcwMDU3NDMtMjAuMjgtMS44OGwtMi40OC0xLjE4YzEuMzgxOTQwOS0yLjQ1NDAzOC44NjU2MDMyLTUuNTM5NTcyNi0xLjI0LTcuNDEtLjAzLTMuMzIgMS41Mi02LjE2Ljg5LTcuNTcgNy43NDA0NzM1LS4wOTYxMjU4IDE1LjQ2Mzg5NzUtLjc1MTE2MzEgMjMuMTEtMS45NiAxLjEgMCAyIDQuNDggMiAxMHoiIGZpbGw9IiNmOGU4YWIiLz48cGF0aCBpZD0iU2hhcGUiIGQ9Im0xNSAxNy4wNi0xNC4zMy01LjEyYy0uMzk1NDg0NDgtLjE0MzU0MTctLjY1ODgyNTU2LS41MTkyNzE4LS42NTg4MjU1Ni0uOTRzLjI2MzM0MTA4LS43OTY0NTgzLjY1ODgyNTU2LS45NGwyNy45OC0xMGMuMjI2NDc4NS0uMDc5OTg2NTUuNDczNTIxNS0uMDc5OTg2NTUuNyAwbDI3Ljk4IDEwYy4zOTU0ODQ1LjE0MzU0MTcuNjU4ODI1Ni41MTkyNzE4LjY1ODgyNTYuOTRzLS4yNjMzNDExLjc5NjQ1ODMtLjY1ODgyNTYuOTRsLTYuNCAyLjI5LTIuNzcuOTktNS4xNiAxLjg0eiIgZmlsbD0iIzM5M2Y0YiIvPjxnIGZpbGw9IiNmOGU4YWIiPjxwYXRoIGlkPSJTaGFwZSIgZD0ibTIuMTQgNTAuOTctLjE0LjAzYy4wNDgzMzY5OC4wMDA3MzczLjA5NjIwOTM0LS4wMDk1MjExLjE0LS4wM3oiLz48cGF0aCBpZD0iU2hhcGUiIGQ9Im0yLjEyIDMxLjAyYy0uMDQwMzI5ODQtLjAwNDUwOS0uMDgwMzg3NzctLjAxMTE4NTMtLjEyLS4wMi4wNDA2NjQ5NS4wMDE3NTc1LjA4MDk2MzE2LjAwODQ3MzguMTIuMDJ6Ii8+PHBhdGggaWQ9IlNoYXBlIiBkPSJtMi4xMyAzMS4wMmM3LjE5NzY3NTYzIDEuMTM0MjQyOSAxNC40NjQ4MDE5IDEuNzcyNDEzNSAyMS43NSAxLjkxLjY2IDEuNDYgMy4xMiA0LjUzIDMuMTIgOC4wNyAwIC4yNCAwIC40Ny0uMDEuNy0xLjIzNTA3NTggMS44NzUwMDM0LTEuMzE5OTYxNiA0LjI4MjY3MTYtLjIyIDYuMjRsLTIuNDcgMS4xMmMtNy40MjE2MjM4LjEyOTcyOTctMTQuODI1NjM0NDUuNzY3ODkxMy0yMi4xNiAxLjkxeiIvPjwvZz48cGF0aCBpZD0iU2hhcGUiIGQ9Im0yNC45OSA0MS43Yy4wMS0uMjMuMDEtLjQ2LjAxLS43LjExMDcxOTYtMi43MzUyNTczLS4yNjg1ODM3LTUuNDY4MjczMy0xLjEyLTguMDcgMS42NC4wNSAzLjM1LjA3IDUuMTIuMDcgMS4zMyAwIDIuNjMtLjAxIDMuODktLjA0LjgwNzMwMTEgMi40Mzk0MDg4IDEuMTc5NjMwMyA1LjAwMTcxMDggMS4xIDcuNTd6IiBmaWxsPSIjYmEzYTIzIi8+PHBhdGggaWQ9IlNoYXBlIiBkPSJtMzAgNTEtMi42NiA2LjM3Yy0uMTQ3OTA4LjM3NzcyMjItLjUwOTM0NjYuNjI4NjcwMy0uOTE0OTQxOS42MzUyNDc1LS40MDU1OTU0LjAwNjU3NzMtLjc3NDk4MDYtLjIzMjUxOTctLjkzNTA1ODEtLjYwNTI0NzVsLS43My0xLjY4LTEuNjguNzJjLS4zNjk1MjU5LjE2MjAxODMtLjgwMDM0OS4wODQzMzE4LTEuMDkwMDEwMy0uMTk2NTUxOXMtLjM4MDU2NC0uNzA5MTEzMS0uMjI5OTg5Ny0xLjA4MzQ0ODFsMi41NC02LjEuNDctMS4xMnoiIGZpbGw9IiNiYTNhMjMiLz48cGF0aCBpZD0iU2hhcGUiIGQ9Im0zNS4yMyA0Ny45NC40OSAxLjE4IDIuNTIgNi4wNGMuMTUwNTc0My4zNzQzMzUuMDU5NjcxNi44MDI1NjQ0LS4yMjk5ODk3IDEuMDgzNDQ4MXMtLjcyMDQ4NDQuMzU4NTcwMi0xLjA5MDAxMDMuMTk2NTUxOWwtMS42OC0uNzItLjczIDEuNjhjLS4xNjAwNzc1LjM3MjcyNzgtLjUyOTQ2MjcuNjExODI0OC0uOTM1MDU4MS42MDUyNDc1LS40MDU1OTUzLS4wMDY1NzcyLS43NjcwMzM5LS4yNTc1MjUzLS45MTQ5NDE5LS42MzUyNDc1bC0yLjY2LTYuMzd6IiBmaWxsPSIjYmEzYTIzIi8+PHBhdGggaWQ9IlNoYXBlIiBkPSJtMTUgMjR2LTExYzAtMS42NiA2LjI3LTMgMTQtM3MxNCAxLjM0IDE0IDN2MTF6IiBmaWxsPSIjNDY0ZjVlIi8+PHBhdGggaWQ9IlNoYXBlIiBkPSJtNTAgMTVjLS41NTIyODQ3IDAtMS0uNDQ3NzE1My0xLTF2LTYuNTZjMC0uNTUyMjg0NzUuNDQ3NzE1My0xIDEtMXMxIC40NDc3MTUyNSAxIDF2Ni41NmMwIC41NTIyODQ3LS40NDc3MTUzIDEtMSAxeiIgZmlsbD0iI2VkYzEwMCIvPjxwYXRoIGlkPSJTaGFwZSIgZD0ibTQ4IDE2djNjMCAuNTUyMjg0Ny40NDc3MTUzIDEgMSAxaDJjLjU1MjI4NDcgMCAxLS40NDc3MTUzIDEtMXYtM2MwLTEuMTA0NTY5NS0uODk1NDMwNS0yLTItMnMtMiAuODk1NDMwNS0yIDJ6IiBmaWxsPSIjZjFkMjRiIi8+PGVsbGlwc2UgaWQ9Ik92YWwiIGN4PSIyOSIgY3k9IjI0IiBmaWxsPSIjMzkzZjRiIiByeD0iMTQiIHJ5PSIzIi8+PHBhdGggaWQ9IlNoYXBlIiBkPSJtNCA0MWMwIDUuMjgtLjgyIDkuNjEtMS44NiA5Ljk3LS4wNDM3OTA2Ni4wMjA0Nzg5LS4wOTE2NjMwMi4wMzA3MzczLS4xNC4wMy0xLjEgMC0yLTQuNDgtMi0xMHMuOS0xMCAyLTEwYy4wMTA5OTI1MS0uMDAxMzIzMi4wMjE5OTk4OC4wMDIzNDYuMDMuMDEuMDIgMCAuMDUuMDEuMDkuMDFoLjAxYzEuMDQuMzUgMS44NyA0LjY4IDEuODcgOS45OHoiIGZpbGw9IiNlMmJlNTAiLz48cGF0aCBpZD0iU2hhcGUiIGQ9Im0zNiA0NWMwIDMuMzEzNzA4NS0yLjY4NjI5MTUgNi02IDZzLTYtMi42ODYyOTE1LTYtNiAyLjY4NjI5MTUtNiA2LTZjMS40NzQ4NDktLjAwODYzNTEgMi44OTkwNDk5LjUzNzQ4NyAzLjk5IDEuNTMgMS4yNzk4Nzk5IDEuMTMyOTEzOSAyLjAxMTg1MzcgMi43NjA3MzYxIDIuMDEgNC40N3oiIGZpbGw9IiNlMDRjMzQiLz48L2c+PC9nPjwvc3ZnPgo=" alt="My graduate.">

                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 m-sm-auto pt-5">
                    <ul class="list-style">
                        <li class="mr-5"><strong>Anhanguera Osasco</strong><blockquote>Graduação em: <cite>Tecnologia em Redes de Computadores</cite> &mdash; 2016.<div class="comment more text-justify">
                            Controle dos níveis de acesso aos serviços dos sistemas operacionais; em análises de riscos; na administração de sistemas de informações; em auditorias; em planos de contingência e recuperação; entre outros.
                            Levantamento das necessidades, dimensionamento, especificação técnica e avaliação de equipamentos de informática. Também verifica a viabilidade técnico-econômica e orçamentos de ações pertinentes às redes de computadores.
                            Administração e manutenção de infraestrutura lógica e física de redes de computadores.
                            Prospectar soluções para melhoria e integração dos ambientes de redes de computadores, assim como nas áreas de segurança e serviços de redes.
                            Implanta a infraestrutura da rede e de seus componentes lógicos, analisando e criando procedimentos que otimizem o desempenho e o tráfego de uma rede.
                            Atua no processo de desenvolvimento do projeto lógico e físico da rede.
                        </div></blockquote>
                            
                        </li>
                        <li class=""><strong>Estácio Ribeirão Preto</strong><blockquote>Pós-Graduação: <cite>Engenharia de Software</cite> &mdash; 2019;<div class="comment more text-justify"> 
                            Gerenciamento de projetos de software, qualidade de software, linguagem de modelagem unificada - UML, análise orientada a objetos e projeto arquitetural, modelo de maturidade de software, métricas de software, arquitetura orientada a serviços SOA e web services, Arquitetura da Informação e user experience. </div></blockquote></li>
                        <li class=""><strong>Etec Barueri</strong><blockquote>Técnico em: <cite>Desenvolvimento de Sistemas</cite> &mdash; 2019.<div class="comment more text-justify">
                            Analisar e projetar sistemas. Construir, documentar, realizar testes e manter sistemas de informação. Utilizar ambientes de desenvolvimento e linguagens de programação específica. Modelar, implementar e mantém bancos de dados. Documentar e criar projetos e relatórios de sistemas.    
                        </div></blockquote></li>
                    </ul>
                        
                </div>
            </div>
        </div>

        <!--ARTICLE COURSES-->
        <div class="container m-md-auto pt-4">
            <div class="title display-4 text-center">Cursos</div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center">

                    <img class="mt-5 img-fluid" width="200px" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMSIgd2lkdGg9IjUxMnB4Ij48cGF0aCBkPSJtNTEyIDg4Ljc3NzM0NHYyNjQuODI0MjE4YzAgMTkuNTAzOTA3LTE1LjgwODU5NCAzNS4zMTI1LTM1LjMwODU5NCAzNS4zMTI1aC00NDEuMzgyODEyYy0xOS41IDAtMzUuMzA4NTk0LTE1LjgwODU5My0zNS4zMDg1OTQtMzUuMzEyNXYtMjY0LjgyNDIxOHptMCAwIiBmaWxsPSIjYjBkM2YwIi8+PHBhdGggZD0ibTUxMiAzNS44MDg1OTR2NzAuNjIxMDk0aC01MTJ2LTcwLjYyMTA5NGMwLTE5LjUgMTUuODA4NTk0LTM1LjMwODU5NCAzNS4zMDg1OTQtMzUuMzA4NTk0aDQ0MS4zODI4MTJjMTkuNSAwIDM1LjMwODU5NCAxNS44MDg1OTQgMzUuMzA4NTk0IDM1LjMwODU5NHptMCAwIiBmaWxsPSIjODk0YjlkIi8+PHBhdGggZD0ibTcwLjYyMTA5NCA1My40NjQ4NDRjMCA5Ljc1LTcuOTA2MjUgMTcuNjU2MjUtMTcuNjU2MjUgMTcuNjU2MjVzLTE3LjY1NjI1LTcuOTA2MjUtMTcuNjU2MjUtMTcuNjU2MjUgNy45MDYyNS0xNy42NTYyNSAxNy42NTYyNS0xNy42NTYyNSAxNy42NTYyNSA3LjkwNjI1IDE3LjY1NjI1IDE3LjY1NjI1em0wIDAiIGZpbGw9IiNlNjRjM2MiLz48cGF0aCBkPSJtMTQxLjI0MjE4OCA1My40NjQ4NDRjMCA5Ljc1LTcuOTA2MjUgMTcuNjU2MjUtMTcuNjU2MjUgMTcuNjU2MjVzLTE3LjY1NjI1LTcuOTA2MjUtMTcuNjU2MjUtMTcuNjU2MjUgNy45MDYyNS0xNy42NTYyNSAxNy42NTYyNS0xNy42NTYyNSAxNy42NTYyNSA3LjkwNjI1IDE3LjY1NjI1IDE3LjY1NjI1em0wIDAiIGZpbGw9IiNmMGM0MTkiLz48cGF0aCBkPSJtMjExLjg2MzI4MSA1My40NjQ4NDRjMCA5Ljc1LTcuOTA2MjUgMTcuNjU2MjUtMTcuNjU2MjUgMTcuNjU2MjVzLTE3LjY1NjI1LTcuOTA2MjUtMTcuNjU2MjUtMTcuNjU2MjUgNy45MDYyNS0xNy42NTYyNSAxNy42NTYyNS0xNy42NTYyNSAxNy42NTYyNSA3LjkwNjI1IDE3LjY1NjI1IDE3LjY1NjI1em0wIDAiIGZpbGw9IiMxNGEwODUiLz48cGF0aCBkPSJtMzcwLjc1NzgxMiA2Mi4yOTI5NjloLTg4LjI3MzQzN2MtNC44Nzg5MDYgMC04LjgyODEyNS0zLjk1MzEyNS04LjgyODEyNS04LjgyODEyNXMzLjk0OTIxOS04LjgyODEyNSA4LjgyODEyNS04LjgyODEyNWg4OC4yNzM0MzdjNC44NzUgMCA4LjgyODEyNiAzLjk1MzEyNSA4LjgyODEyNiA4LjgyODEyNXMtMy45NTMxMjYgOC44MjgxMjUtOC44MjgxMjYgOC44MjgxMjV6bTAgMCIgZmlsbD0iIzk1NWJhNSIvPjxwYXRoIGQ9Im00NjcuODYzMjgxIDYyLjI5Mjk2OWgtNjEuNzkyOTY5Yy00Ljg3NSAwLTguODI4MTI0LTMuOTUzMTI1LTguODI4MTI0LTguODI4MTI1czMuOTUzMTI0LTguODI4MTI1IDguODI4MTI0LTguODI4MTI1aDYxLjc5Mjk2OWM0Ljg3NSAwIDguODI4MTI1IDMuOTUzMTI1IDguODI4MTI1IDguODI4MTI1cy0zLjk1MzEyNSA4LjgyODEyNS04LjgyODEyNSA4LjgyODEyNXptMCAwIiBmaWxsPSIjOTU1YmE1Ii8+PHBhdGggZD0ibTQzMi41NTA3ODEgMjEyLjM2MzI4MWgzNS4zMTI1YzQuODc1IDAgOC44MjgxMjUtMy45NTMxMjUgOC44MjgxMjUtOC44MjgxMjV2LTQ0LjEzNjcxOGMwLTQuODc4OTA3LTMuOTUzMTI1LTguODI4MTI2LTguODI4MTI1LTguODI4MTI2aC00MjMuNzI2NTYyYy00Ljg3NSAwLTguODI4MTI1IDMuOTQ5MjE5LTguODI4MTI1IDguODI4MTI2djQ0LjEzNjcxOGMwIDQuODc1IDMuOTUzMTI1IDguODI4MTI1IDguODI4MTI1IDguODI4MTI1em0wIDAiIGZpbGw9IiMzYjk3ZDMiLz48ZyBmaWxsPSIjZTZlN2U4Ij48cGF0aCBkPSJtMzUuMzA4NTk0IDMwOS40NjQ4NDRoMjYuNDg0Mzc1YzQuODc1IDAgOC44MjgxMjUtMy45NTMxMjUgOC44MjgxMjUtOC44MjgxMjVzLTMuOTUzMTI1LTguODI4MTI1LTguODI4MTI1LTguODI4MTI1aC0yNi40ODQzNzVjLTQuODc1IDAtOC44MjQyMTkgMy45NTMxMjUtOC44MjQyMTkgOC44MjgxMjVzMy45NDkyMTkgOC44MjgxMjUgOC44MjQyMTkgOC44MjgxMjV6bTAgMCIvPjxwYXRoIGQ9Im03OS40NDkyMTkgMjU2LjVoLTQ0LjE0MDYyNWMtNC44NzUgMC04LjgyNDIxOSAzLjk1MzEyNS04LjgyNDIxOSA4LjgyODEyNXMzLjk0OTIxOSA4LjgyODEyNSA4LjgyNDIxOSA4LjgyODEyNWg0NC4xNDA2MjVjNC44NzUgMCA4LjgyODEyNS0zLjk1MzEyNSA4LjgyODEyNS04LjgyODEyNXMtMy45NTMxMjUtOC44MjgxMjUtOC44MjgxMjUtOC44MjgxMjV6bTAgMCIvPjxwYXRoIGQ9Im03MC42MjEwOTQgMzI3LjEyMTA5NGgtMzUuMzEyNWMtNC44NzUgMC04LjgyNDIxOSAzLjk1MzEyNS04LjgyNDIxOSA4LjgyODEyNXMzLjk0OTIxOSA4LjgyODEyNSA4LjgyNDIxOSA4LjgyODEyNWgzNS4zMTI1YzQuODc1IDAgOC44MjgxMjUtMy45NTMxMjUgOC44MjgxMjUtOC44MjgxMjVzLTMuOTUzMTI1LTguODI4MTI1LTguODI4MTI1LTguODI4MTI1em0wIDAiLz48cGF0aCBkPSJtNDc2LjY5MTQwNiAyOTEuODA4NTk0aC0yNi40ODQzNzVjLTQuODc1IDAtOC44MjgxMjUgMy45NTMxMjUtOC44MjgxMjUgOC44MjgxMjVzMy45NTMxMjUgOC44MjgxMjUgOC44MjgxMjUgOC44MjgxMjVoMjYuNDg0Mzc1YzQuODc1IDAgOC44MjQyMTktMy45NTMxMjUgOC44MjQyMTktOC44MjgxMjVzLTMuOTQ5MjE5LTguODI4MTI1LTguODI0MjE5LTguODI4MTI1em0wIDAiLz48cGF0aCBkPSJtNDc2LjY5MTQwNiAyNzQuMTU2MjVjNC44NzUgMCA4LjgyNDIxOS0zLjk1MzEyNSA4LjgyNDIxOS04LjgyODEyNXMtMy45NDkyMTktOC44MjgxMjUtOC44MjQyMTktOC44MjgxMjVoLTQ0LjE0MDYyNWMtNC44NzUgMC04LjgyODEyNSAzLjk1MzEyNS04LjgyODEyNSA4LjgyODEyNXMzLjk1MzEyNSA4LjgyODEyNSA4LjgyODEyNSA4LjgyODEyNXptMCAwIi8+PHBhdGggZD0ibTQ3Ni42OTE0MDYgMzI3LjEyMTA5NGgtMzUuMzEyNWMtNC44NzUgMC04LjgyODEyNSAzLjk1MzEyNS04LjgyODEyNSA4LjgyODEyNXMzLjk1MzEyNSA4LjgyODEyNSA4LjgyODEyNSA4LjgyODEyNWgzNS4zMTI1YzQuODc1IDAgOC44MjQyMTktMy45NTMxMjUgOC44MjQyMTktOC44MjgxMjVzLTMuOTQ5MjE5LTguODI4MTI1LTguODI0MjE5LTguODI4MTI1em0wIDAiLz48L2c+PHBhdGggZD0ibTM3NS4wODU5MzggMzg0Ljg1MTU2MmMyMC44OTA2MjQgMjcuNjk1MzEzIDM3LjMwMDc4MSA1OC40OTYwOTQgNDguNjM2NzE4IDkxLjI3NzM0NC42MjEwOTQgMS42MTMyODIuMzI4MTI1IDMuNDMzNTk0LS43Njk1MzEgNC43NjU2MjUtMS4wOTM3NSAxLjMzNTkzOC0yLjgyNDIxOSAxLjk3NjU2My00LjUyNzM0NCAxLjY3OTY4OGwtMzMuODA4NTkzLTguNTYyNWMtMS44NjMyODItLjQ4MDQ2OS0zLjgyMDMxMy4zNTE1NjItNC43NjU2MjYgMi4wMzEyNWwtMjAuOTIxODc0IDM0LjI1Yy0uODcxMDk0IDEuNTI3MzQzLTIuNTg1OTM4IDIuMzc4OTA2LTQuMzI4MTI2IDIuMTQ0NTMxLTEuNzQ2MDkzLS4yMzQzNzUtMy4xNzU3ODEtMS41LTMuNjE3MTg3LTMuMjAzMTI1LTkuMjc3MzQ0LTI2LjYyODkwNi0yMS45MTQwNjMtNTEuOTYwOTM3LTM3LjYwNTQ2OS03NS4zODY3MTloLTExNC43NTc4MTJjLTE1LjYxNzE4OCAyMy4yODUxNTYtMjguMTk1MzEzIDQ4LjQ3MjY1Ni0zNy40Mjk2ODggNzQuOTQ1MzEzLS40Mjk2ODcgMS43NDYwOTMtMS44OTQ1MzEgMy4wNDI5NjktMy42Nzk2ODcgMy4yNjE3MTktMS43ODUxNTcuMjE0ODQzLTMuNTE5NTMxLS42OTkyMTktNC4zNTE1NjMtMi4yOTI5NjlsLTIwLjkyMTg3NS0zNy4wNzQyMTljLS45NzY1NjItMS44NDM3NS0zLjE0ODQzNy0yLjcwMzEyNS01LjEyMTA5My0yLjAzMTI1bC0zMy4wMTU2MjYgMTEuMDM1MTU2Yy0xLjcyNjU2Mi40NDE0MDYtMy41NTg1OTMtLjEyNS00LjczNDM3NC0xLjQ2ODc1LTEuMTc1NzgyLTEuMzQzNzUtMS40OTYwOTQtMy4yMzA0NjgtLjgyODEyNi00Ljg4NjcxOCAxMS4zMzIwMzItMzIuNDg4MjgyIDI3LjY1MjM0NC02My4wMTU2MjYgNDguMzc1LTkwLjQ4NDM3NnptMCAwIiBmaWxsPSIjYzAzYTJiIi8+PHBhdGggZD0ibTQxNC44OTg0MzggMzAwLjYzNjcxOWMwIDExLjc1NzgxMi0xOC43MjY1NjMgMjEuMTg3NS0yMS4xODc1IDMyLjIwMzEyNS0yLjUyMzQzOCAxMS4zNTE1NjIgMTAuMjg1MTU2IDI4LjE2MDE1NiA1LjQ1MzEyNCAzOC40MTAxNTYtNC45MDYyNSAxMC40MTc5NjktMjUuNzczNDM3IDEwLjU5Mzc1LTMyLjc1IDE5LjU1NDY4OC02Ljk3MjY1NiA4Ljk1NzAzMS0yLjU3ODEyNCAyOS44NTE1NjItMTEuMzU5Mzc0IDM3LjA3NDIxOC04Ljc4NTE1NyA3LjIyMjY1Ni0yNy42MTMyODItMS44OTg0MzctMzcuNzgxMjUgMy4xMjUtMTAuMDExNzE5IDQuOTQxNDA2LTE0LjgzOTg0NCAyNS43MzA0NjktMjUuOTI5Njg4IDI4LjMyMDMxMy0xMC43NDIxODggMi40OTYwOTMtMjMuODc1LTE0LjAzOTA2My0zNS4zNjMyODEtMTQuMDM5MDYzLTExLjQ4NDM3NSAwLTI0LjYxNzE4OCAxNi41MzUxNTYtMzUuMzYzMjgxIDE0LjAzOTA2My0xMS4wOTM3NS0yLjU4OTg0NC0xNS44ODY3MTktMjMuMzc4OTA3LTI1LjkzMzU5NC0yOC4zMjAzMTMtMTAuMTY3OTY5LTUuMDIzNDM3LTI5LjA0Mjk2OSA0LjAwNzgxMy0zNy43ODEyNS0zLjEzMjgxMi04LjczODI4Mi03LjE0NDUzMi00LjM1MTU2My0yOC4wNDY4NzUtMTEuMzYzMjgyLTM3LjAzMTI1LTcuMDA3ODEyLTguOTg4MjgyLTI3LjgyNDIxOC05LjE4MzU5NC0zMi43MzA0NjgtMTkuNTgyMDMyLTQuODI4MTI1LTEwLjIzODI4MSA3Ljk0NTMxMi0yNy4wNDY4NzQgNS40NjQ4NDQtMzguNDA2MjUtMi40NDUzMTMtMTEuMDI3MzQzLTIxLjE3MTg3Ni0yMC40NTcwMzEtMjEuMTcxODc2LTMyLjIxNDg0MyAwLTExLjc1NzgxMyAxOC43MjY1NjMtMjEuMTgzNTk0IDIxLjE4NzUtMzIuMjAzMTI1IDIuNTIzNDM4LTExLjM1MTU2My0xMC4yODUxNTYtMjguMTYwMTU2LTUuNDUzMTI0LTM4LjQwNjI1IDQuOTA2MjUtMTAuNDE3OTY5IDI1Ljc3MzQzNy0xMC41OTM3NSAzMi43NS0xOS41NTQ2ODggNi45NzI2NTYtOC45NjA5MzcgMi41NzgxMjQtMjkuODU1NDY4IDExLjM1OTM3NC0zNy4wMzEyNSA4Ljc4NTE1Ny03LjE3NTc4MSAyNy42MTMyODIgMS44OTg0MzggMzcuNzgxMjUtMy4xMjUgMTAuMDExNzE5LTQuOTQ1MzEyIDE0LjgzOTg0NC0yNS43MzQzNzUgMjUuOTI5Njg4LTI4LjMyMDMxMiAxMC43NDIxODgtMi40OTYwOTQgMjMuODc1IDE0LjAzOTA2MiAzNS4zNjMyODEgMTQuMDM5MDYyIDExLjQ4NDM3NSAwIDI0LjYxNzE4OC0xNi41MzUxNTYgMzUuMzYzMjgxLTE0LjAzOTA2MiAxMS4wOTM3NSAyLjU4NTkzNyAxNS44ODY3MTkgMjMuMzc1IDI1LjkzMzU5NCAyOC4zMjAzMTIgMTAuMTY3OTY5IDUuMDIzNDM4IDI5LjA0Mjk2OS00LjAwNzgxMiAzNy43ODEyNSAzLjEzMjgxMyA4LjczODI4MiA3LjE0MDYyNSA0LjM1MTU2MyAyOC4wNDY4NzUgMTEuMzYzMjgyIDM3LjA3ODEyNSA3LjAwNzgxMiA5LjAyNzM0NCAyNy44Mzk4NDMgOS4xMzY3MTggMzIuNzUgMTkuNTUwNzgxIDQuODI4MTI0IDEwLjI0MjE4Ny03Ljk0NTMxMyAyNy4wNDY4NzUtNS40NjQ4NDQgMzguNDEwMTU2IDIuNDI1NzgxIDEwLjk2NDg0NCAyMS4xNTIzNDQgMjAuMzkwNjI1IDIxLjE1MjM0NCAzMi4xNDg0Mzh6bTAgMCIgZmlsbD0iI2U2NGMzYyIvPjxwYXRoIGQ9Im0zNTMuMTAxNTYyIDMwMC42MzY3MTljMCA1My42Mjg5MDYtNDMuNDcyNjU2IDk3LjEwNTQ2OS05Ny4xMDE1NjIgOTcuMTA1NDY5cy05Ny4xMDE1NjItNDMuNDc2NTYzLTk3LjEwMTU2Mi05Ny4xMDU0NjljMC01My42Mjg5MDcgNDMuNDcyNjU2LTk3LjEwMTU2MyA5Ny4xMDE1NjItOTcuMTAxNTYzczk3LjEwMTU2MiA0My40NzI2NTYgOTcuMTAxNTYyIDk3LjEwMTU2M3ptMCAwIiBmaWxsPSIjYzAzYTJiIi8+PHBhdGggZD0ibTI2NC44MjgxMjUgMjM4Ljg0Mzc1YzAtNC44NzUtMy45NTMxMjUtOC44MjgxMjUtOC44MjgxMjUtOC44MjgxMjUtMzguOTg0Mzc1LjA0Njg3NS03MC41NzgxMjUgMzEuNjM2NzE5LTcwLjYyMTA5NCA3MC42MjEwOTQgMCA0Ljg3NSAzLjk1MzEyNSA4LjgyODEyNSA4LjgyODEyNSA4LjgyODEyNXM4LjgyODEyNS0zLjk1MzEyNSA4LjgyODEyNS04LjgyODEyNWMuMDI3MzQ0LTI5LjIzODI4MSAyMy43MjY1NjMtNTIuOTMzNTk0IDUyLjk2NDg0NC01Mi45NjQ4NDQgNC44NzUgMCA4LjgyODEyNS0zLjk1MzEyNSA4LjgyODEyNS04LjgyODEyNXptMCAwIiBmaWxsPSIjZmI3Yjc2Ii8+PHBhdGggZD0ibTMxNy43OTI5NjkgMjkxLjgwODU5NGMtNC44NzUgMC04LjgyODEyNSAzLjk1MzEyNS04LjgyODEyNSA4LjgyODEyNS0uMDI3MzQ0IDI5LjI0MjE4Ny0yMy43MjY1NjMgNTIuOTM3NS01Mi45NjQ4NDQgNTIuOTY0ODQzLTQuODc1IDAtOC44MjgxMjUgMy45NTMxMjYtOC44MjgxMjUgOC44MjgxMjZzMy45NTMxMjUgOC44MjgxMjQgOC44MjgxMjUgOC44MjgxMjRjMzguOTg0Mzc1LS4wNDI5NjggNzAuNTc4MTI1LTMxLjYzNjcxOCA3MC42MjEwOTQtNzAuNjIxMDkzIDAtNC44NzUtMy45NTMxMjUtOC44MjgxMjUtOC44MjgxMjUtOC44MjgxMjV6bTAgMCIgZmlsbD0iI2ZiN2I3NiIvPjwvc3ZnPgo=" alt="My certificate.">

                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 pt-5 text-justify">
                    <ul>
                        <li class="mr-5">NDG Linux Essentials &mdash; <cite>Linux Professional Institute</cite> &mdash; 2016;</cite></li>
                        <li class="mr-5">Linux Unhatched &mdash; <cite>NDG  Developing IT Professionals &mdash;</cite> 2017;</li>
                        <li class="mr-5">CCNA 1 &mdash; <cite>Cisco Networking Academy &mdash;</cite>2016;</li>
                        <li class="mr-5">CCNA 2 &mdash; <cite>Cisco Networking Academy &mdash;</cite> 2016;</li>
                        <li class="mr-5">CCNA 3 &mdash; <cite>Cisco Networking Academy &mdash;</cite> 2017;</li>
                            <div class="comment_course more_course"> 
                        <li class="mr-5">ITE &mdash; <cite>Cisco Networking Academy &mdash;</cite> 2018;</li>
                        <li class="mr-5">CCNA 4 &mdash; <cite>Cisco Network Academi &mdash;</cite> 2018;</li>
                        <li class="mr-5">ITIL e ISO 20.000 &mdash; <cite>1º Centro de Telematica de Área &mdash;</cite> 2018;</li>
                        <li class="mr-5">CCNS &mdash; <cite>Cisco Network Academy &mdash;</cite> 2019.</li>
                        </div>
                    </ul>
                        
                </div>
            </div>
        </div>

        <!--ARTICLE SKILLS-->
        <div class="container m-md-auto pt-4">
            <div class="title display-4 text-center">Habilidades</div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center">

                    <img class="mt-5 img-fluid" width="200px" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8Zz4KCTxwYXRoIHN0eWxlPSJmaWxsOiNGM0Q1NUI7IiBkPSJNMzc5LjU0MiwzNzAuNzU5aDg2Ljg0NGMzLjEwMi0wLjA4NCw2LjAyMSwxLjQ2NSw3LjY5Miw0LjA4MXMxLjg0Nyw1LjkxNSwwLjQ2Niw4LjY5NWwtOS4xMiwxNy42NTUgICBjLTEuNTk2LDMuMDIxLTQuNzQxLDQuOTAzLTguMTU4LDQuODhINTQuNzM0Yy0zLjQxNywwLjAyMy02LjU2Mi0xLjg1OS04LjE1Ny00Ljg4bC05LjEyLTE3LjY1NSAgIGMtMS4zODEtMi43NzktMS4yMDQtNi4wNzksMC40NjYtOC42OTVzNC41ODktNC4xNjQsNy42OTItNC4wODFIMzc5LjU0MnoiLz4KCTxnPgoJCTxwYXRoIHN0eWxlPSJmaWxsOiNFNEMwNUM7IiBkPSJNMzc5LjU0MiwzNzAuNzU5aDExNC4yMDVjMy40MTcsMC4wMjMsNi41NjItMS44NTksOC4xNTctNC44OGw5LjEyLTE3LjY1NSAgICBjMS4zODEtMi43NzksMS4yMDQtNi4wNzktMC40NjYtOC42OTVjLTEuNjctMi42MTYtNC41ODktNC4xNjQtNy42OTItNC4wODFIOS4xMzJjLTMuMTAyLTAuMDg0LTYuMDIxLDEuNDY1LTcuNjkyLDQuMDgxICAgIGMtMS42NywyLjYxNi0xLjg0Nyw1LjkxNS0wLjQ2Niw4LjY5NWw5LjEyLDE3LjY1NWMxLjU5NiwzLjAyMSw0Ljc0MSw0LjkwMyw4LjE1Nyw0Ljg4SDM3OS41NDJ6Ii8+CgkJPHBhdGggc3R5bGU9ImZpbGw6I0U0QzA1QzsiIGQ9Ik0zNzkuNTQyLDQwNi4wNjloNTAuMzYzYzMuMTAyLTAuMDg0LDYuMDIxLDEuNDY1LDcuNjkyLDQuMDgxYzEuNjcsMi42MTYsMS44NDcsNS45MTUsMC40NjYsOC42OTUgICAgbC05LjEyLDE3LjY1NWMtMS41OTYsMy4wMjEtNC43NDEsNC45MDMtOC4xNTcsNC44OEg5MS4yMTVjLTMuNDE3LDAuMDIzLTYuNTYyLTEuODU5LTguMTU4LTQuODhsLTkuMTItMTcuNjU1ICAgIGMtMS4zODEtMi43NzktMS4yMDQtNi4wNzksMC40NjYtOC42OTVjMS42Ny0yLjYxNiw0LjU5LTQuMTY0LDcuNjkyLTQuMDgxSDM3OS41NDJ6Ii8+Cgk8L2c+Cgk8cGF0aCBzdHlsZT0iZmlsbDojRjNENTVCOyIgZD0iTTM2OC41MDYsNDQxLjM3OWgyNC45MTdjMy4xMDItMC4wODQsNi4wMjEsMS40NjUsNy42OTIsNC4wODFjMS42NywyLjYxNiwxLjg0Nyw1LjkxNSwwLjQ2Niw4LjY5NSAgIGwtOS4xMiwxNy42NTVjLTEuNTk2LDMuMDIxLTQuNzQxLDQuOTAzLTguMTU4LDQuODhIMTI3LjY5N2MtMy40MTcsMC4wMjMtNi41NjItMS44NTktOC4xNTgtNC44OGwtOS4xMi0xNy42NTUgICBjLTEuMzgxLTIuNzc5LTEuMjA0LTYuMDc5LDAuNDY2LTguNjk1czQuNTg5LTQuMTY0LDcuNjkyLTQuMDgxSDM2OC41MDZ6Ii8+Cgk8cmVjdCB4PSIyMzguMzQ1IiB5PSIxOTQuMjA3IiBzdHlsZT0iZmlsbDojRTRDMDVDOyIgd2lkdGg9IjM1LjMxIiBoZWlnaHQ9Ijk4LjMzOSIvPgoJPGNpcmNsZSBzdHlsZT0iZmlsbDojQjE5MDQ2OyIgY3g9IjI1NiIgY3k9IjM4OC40MTQiIHI9IjEyMy41ODYiLz4KCTxwb2x5Z29uIHN0eWxlPSJmaWxsOiNGM0Q1NUI7IiBwb2ludHM9IjI1NiwzMTcuNzkzIDI3Ny44MjIsMzY0LjI4OCAzMjYuNjIxLDM3MS43MzggMjkxLjMxLDQwNy45MzIgMjk5LjY0NCw0NTkuMDM0IDI1Niw0MzQuOTA5ICAgIDIxMi4zNTYsNDU5LjAzNCAyMjAuNjksNDA3LjkzMiAxODUuMzc5LDM3MS43MzggMjM0LjE3OCwzNjQuMjg4ICAiLz4KCTxwb2x5Z29uIHN0eWxlPSJmaWxsOiNDQzRCNEM7IiBwb2ludHM9IjM2MS45MzEsMCAzNjEuOTMxLDE1OC44OTcgMzEzLjM3OSwyMjAuNjkgMTk4LjYyMSwyMjAuNjkgMTUwLjA2OSwxNTguODk3IDE1MC4wNjksMCAgIi8+Cgk8cmVjdCB4PSIyMjAuNjkiIHN0eWxlPSJmaWxsOiM5RkM5RDM7IiB3aWR0aD0iNzAuNjIxIiBoZWlnaHQ9IjIyMC42OSIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" alt="My Skills.">

                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 pt-5 text-justify">
                    <ul>
                        <li class="mr-5">Microsoft Office (Word, Excel, Power Point e Outlook);</li>
                        <li class="mr-5">Desenvolvimento Web (PHP, JS, JQuery, CSS, HTML5 e Node.JS);</li>
                        <li class="mr-5">Framework (Laravel 6 e Bootstrap);</li>
                        <li class="mr-5">Redes (Servidor Windows e Linux, Switch, Routers Mikrotik,DHCP, Hotspot, Proxy, ACL, Firewall, VPN, Monitoramento, Infraestrutura Física e Lógica);</li>
                        <li class="mr-5">Virtualização (Proxmox e VMware);</li>
                        <li class="mr-5">Suporte (N1, N2 e N3);</li>
                        <li class="mr-5">Sistemas (Windows e Linux).</li>
                    </ul>
                </div>
            </div>
        </div>
        
        @show    

    <!--DYSPLAY FOOTER-->
        @section('footer')
            
            @include('components/footer')

        @show

    <script src="{{asset('js/navbar.js')}}"></script>
    
   
</div>

</body>
@show


</html>