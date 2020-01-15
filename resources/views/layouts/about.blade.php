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

                    <img class="mt-5 img-fluid" width="200px" src="{{asset('storage/components/about/graduate.svg')}}" alt="My graduate.">

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

                    <img class="mt-5 img-fluid" width="200px" src="{{asset('storage/components/about/course.svg')}}" alt="My certificate.">

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

                    <img class="mt-5 img-fluid" width="200px" src="{{asset('storage/components/about/skills.svg')}}" alt="My Skills.">

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