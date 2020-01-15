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
        <link rel="stylesheet" href="{{asset('css/contact.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/all.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('css/pace-themes/pace.css')}}"> --}}

        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/about.js')}}"></script>
        <!--JQUERY VALIDATE-->
        <script src="{{asset('js/jquery.validate.min.js')}}"></script>

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

    <!--RETORNA VALIDAÇÃO MENSAGEM ENVIO!-->
    @if (session('message'))
        {!! session('message')  !!}
    @endif

    @if (session('error'))
        {!! session('error')  !!}
    @endif


<!--FORMULARIO DE CONTATO-->
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="display-4">Contato</div>
                <form id="contactForm" class="card needs-validation" action="contactForm" method="POST">
                    @csrf
                    <div class="col-12 my-3">
                        <label>Seu nome:</label>
                        <input type="text" name="nome" class="form-control">
                      </div>
                      
                      <div class="col-12 mb-3">
                        <label>Seu e-mail::</label>
                        <input type="email" name="email" class="form-control">
                      </div>
                      <div class="col-12 mb-3">
                        <label>Assunto:</label>
                        <input type="text" name="assunto" class="form-control" id="validationDefault02">
                    </div>
                      <div class="col-12 mb-3">
                        <label>Escreva sua mensagem:</label>
                        <textarea class="form-control" name="mensagem" id="" cols="30" rows="5"></textarea>
                      </div>
                      <div class="col-12 mb-3 text-center">
                        <button class="btn btn-success bold" type="submit">ENVIAR</button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 pt-5 d-none d-lg-inline d-md-inline d-xl-inline list-inline img_cell">
                <img class="img-fluid" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSItMTEgMCA1MDcgNTA3LjY2MTAyIiB3aWR0aD0iNTEycHgiPjxwYXRoIGQ9Im0xMTMuNTExNzE5IDE4Ni41NzgxMjVjLTIzLjQ1NzAzMS0uMzEyNS00NS43OTI5NjkgMTAuMDE1NjI1LTYwLjc0NjA5NCAyOC4wODk4NDQtMzMuNSA0MC43ODUxNTYtMjYuMDM1MTU2IDc4LjEwMTU2Mi0yNi4wMzUxNTYgNzguMTAxNTYyLTQzLjM5MDYyNSA1MC43MzA0NjktMjguMTYwMTU3IDkzLjM5ODQzOCA4LjY3OTY4NyA5My4zOTg0MzggMzQuNzEwOTM4IDAgMzQuNzEwOTM4LTQzLjM4NjcxOSAzNC43MTA5MzgtNDMuMzg2NzE5IDI2LjAzMTI1LTguNjc5Njg4LTguNzY1NjI1LTQ3LjE0ODQzOC04Ljc2NTYyNS00Ny4xNDg0MzhzLTEuOTEwMTU3LTgxLjg5NDUzMSA1Mi4xNTYyNS03NC4zNDM3NSIgZmlsbD0iIzVlNWY2MiIvPjxwYXRoIGQ9Im0zNzMuODQ3NjU2IDIyMS4yODkwNjJjNTQuMDY2NDA2LTcuNTUwNzgxIDUxLjc5Mjk2OSA3NC4zNDM3NSA1MS43OTI5NjkgNzQuMzQzNzVzLTM0LjgwMDc4MSAzOC40Njg3NS04Ljc2NTYyNSA0Ny4xNDg0MzhjMCAwIDAgNDMuMzg2NzE5IDM0LjcxMDkzOCA0My4zODY3MTkgMzYuODM5ODQzIDAgNTIuMDY2NDA2LTQyLjY2Nzk2OSA4LjY3OTY4Ny05My4zOTg0MzggMCAwIDcuNDYwOTM3LTM3LjMxNjQwNi0yNi4wMzUxNTYtNzguMTAxNTYyLTE0LjgxMjUtMTguMDU0Njg4LTM3LjAzMTI1LTI4LjM5MDYyNS02MC4zODI4MTMtMjguMDg5ODQ0IiBmaWxsPSIjNWU1ZjYyIi8+PHBhdGggZD0ibTE0OC4yMjI2NTYgNC4zMzk4NDRoMTkwLjkxNDA2M2MxOS4xNzE4NzUgMCAzNC43MTA5MzcgMTUuNTM5MDYyIDM0LjcxMDkzNyAzNC43MTA5Mzd2MzQ3LjExNzE4OGMwIDE5LjE3MTg3NS0xNS41MzkwNjIgMzQuNzE0ODQzLTM0LjcxMDkzNyAzNC43MTQ4NDNoLTE5MC45MTQwNjNjLTE5LjE3MTg3NSAwLTM0LjcxMDkzNy0xNS41NDI5NjgtMzQuNzEwOTM3LTM0LjcxNDg0M3YtMzQ3LjExNzE4OGMwLTE5LjE3MTg3NSAxNS41MzkwNjItMzQuNzEwOTM3IDM0LjcxMDkzNy0zNC43MTA5Mzd6bTAgMCIgZmlsbD0iIzY3YjljYyIvPjxwYXRoIGQ9Im0zNzMuODQ3NjU2IDM5LjA1MDc4MXY0NS4xMjVjLTEwMi42MDE1NjIgNjEuMzc4OTA3LTE5MS4yNjk1MzEgMTQzLjQ4NDM3NS0yNjAuMzM1OTM3IDI0MS4wNzQyMTl2LTI4Ni4xOTkyMTljMC0xOS4xNzE4NzUgMTUuNTM5MDYyLTM0LjcxMDkzNyAzNC43MTA5MzctMzQuNzEwOTM3aDE5MC45MTQwNjNjMTkuMTcxODc1IDAgMzQuNzEwOTM3IDE1LjUzOTA2MiAzNC43MTA5MzcgMzQuNzEwOTM3em0wIDAiIGZpbGw9IiM5ZmM5ZDMiLz48ZyBmaWxsPSIjMmMyZjM4Ij48cGF0aCBkPSJtMTY1LjU3ODEyNSA0LjMzOTg0NCAxMy40ODQzNzUgMzQuNzEwOTM3YzMuMDc0MjE5IDUuNTQ2ODc1IDkuMDAzOTA2IDguOTAyMzQ0IDE1LjM0Mzc1IDguNjc5Njg4aDk4LjU0Njg3NWM2LjMzOTg0NC4yMjI2NTYgMTIuMjY5NTMxLTMuMTMyODEzIDE1LjM0Mzc1LTguNjc5Njg4bDEzLjQ4NDM3NS0zNC43MTA5MzciLz48cGF0aCBkPSJtMTU2Ljg5ODQzOCAzOS4wNTA3ODFjMCA0Ljc5Mjk2OS0zLjg4MjgxMyA4LjY3OTY4OC04LjY3NTc4MiA4LjY3OTY4OC00Ljc5Mjk2OCAwLTguNjc5Njg3LTMuODg2NzE5LTguNjc5Njg3LTguNjc5Njg4czMuODg2NzE5LTguNjc5Njg3IDguNjc5Njg3LTguNjc5Njg3YzQuNzkyOTY5IDAgOC42NzU3ODIgMy44ODY3MTggOC42NzU3ODIgOC42Nzk2ODd6bTAgMCIvPjxwYXRoIGQ9Im0zNDcuODE2NDA2IDM5LjA1MDc4MWMwIDQuNzkyOTY5LTMuODg2NzE4IDguNjc5Njg4LTguNjc5Njg3IDguNjc5Njg4cy04LjY3NTc4MS0zLjg4NjcxOS04LjY3NTc4MS04LjY3OTY4OCAzLjg4MjgxMi04LjY3OTY4NyA4LjY3NTc4MS04LjY3OTY4NyA4LjY3OTY4NyAzLjg4NjcxOCA4LjY3OTY4NyA4LjY3OTY4N3ptMCAwIi8+PHBhdGggZD0ibTMzOS4xMzY3MTkgNDI1LjIxODc1aC0xOTAuOTE0MDYzYy0yMS41NTg1OTQtLjAyMzQzOC0zOS4wMjczNDQtMTcuNDkyMTg4LTM5LjA1MDc4MS0zOS4wNTA3ODF2LTM0Ny4xMTcxODhjLjAyMzQzNy0yMS41NTg1OTMgMTcuNDkyMTg3LTM5LjAyNzM0MzUgMzkuMDUwNzgxLTM5LjA1MDc4MWgxOTAuOTE0MDYzYzIxLjU1ODU5My4wMjM0Mzc1IDM5LjAyNzM0MyAxNy40OTIxODggMzkuMDUwNzgxIDM5LjA1MDc4MXYzNDcuMTE3MTg4Yy0uMDIzNDM4IDIxLjU1ODU5My0xNy40OTIxODggMzkuMDI3MzQzLTM5LjA1MDc4MSAzOS4wNTA3ODF6bS0xOTAuOTE0MDYzLTQxNi41MzkwNjJjLTE2Ljc3MzQzNyAwLTMwLjM3NSAxMy41OTc2NTYtMzAuMzc1IDMwLjM3MTA5M3YzNDcuMTE3MTg4YzAgMTYuNzc3MzQzIDEzLjYwMTU2MyAzMC4zNzUgMzAuMzc1IDMwLjM3NWgxOTAuOTE0MDYzYzE2Ljc3MzQzNyAwIDMwLjM3NS0xMy41OTc2NTcgMzAuMzc1LTMwLjM3NXYtMzQ3LjExNzE4OGMwLTE2Ljc3MzQzNy0xMy42MDE1NjMtMzAuMzcxMDkzLTMwLjM3NS0zMC4zNzEwOTN6bTAgMCIvPjxwYXRoIGQ9Im0xODIuOTMzNTk0IDQyMC44ODI4MTJoMzQuNzEwOTM3djQ5Ljg5ODQzOGgtMzQuNzEwOTM3em0wIDAiLz48cGF0aCBkPSJtMjY5LjcxNDg0NCA0MjAuODgyODEyaDM0LjcxMDkzN3Y0OS44OTg0MzhoLTM0LjcxMDkzN3ptMCAwIi8+PC9nPjxwYXRoIGQ9Im0xOTEuNjEzMjgxIDIwMy45MzM1OTRjLTE0LjM3ODkwNiAwLTI2LjAzNTE1Ni0xMS42NTYyNS0yNi4wMzUxNTYtMjYuMDM1MTU2IDAtMTQuMzc4OTA3IDExLjY1NjI1LTI2LjAzNTE1NyAyNi4wMzUxNTYtMjYuMDM1MTU3IDE0LjM3NSAwIDI2LjAzMTI1IDExLjY1NjI1IDI2LjAzMTI1IDI2LjAzNTE1NyAwIDE0LjM3ODkwNi0xMS42NTYyNSAyNi4wMzUxNTYtMjYuMDMxMjUgMjYuMDM1MTU2em0wIDAiIGZpbGw9IiNmZmYiLz48cGF0aCBkPSJtMjk1Ljc0NjA5NCAyMDMuOTMzNTk0Yy0xNC4zNzg5MDYgMC0yNi4wMzEyNS0xMS42NTYyNS0yNi4wMzEyNS0yNi4wMzUxNTYgMC0xNC4zNzg5MDcgMTEuNjUyMzQ0LTI2LjAzNTE1NyAyNi4wMzEyNS0yNi4wMzUxNTdzMjYuMDM1MTU2IDExLjY1NjI1IDI2LjAzNTE1NiAyNi4wMzUxNTdjMCAxNC4zNzg5MDYtMTEuNjU2MjUgMjYuMDM1MTU2LTI2LjAzNTE1NiAyNi4wMzUxNTZ6bTAgMCIgZmlsbD0iI2ZmZiIvPjxwYXRoIGQ9Im0yMDAuMjg5MDYyIDE3Ny44OTg0MzhjMCA0Ljc5Mjk2OC0zLjg4MjgxMiA4LjY3OTY4Ny04LjY3NTc4MSA4LjY3OTY4N3MtOC42Nzk2ODctMy44ODY3MTktOC42Nzk2ODctOC42Nzk2ODdjMC00Ljc5Mjk2OSAzLjg4NjcxOC04LjY3OTY4OCA4LjY3OTY4Ny04LjY3OTY4OHM4LjY3NTc4MSAzLjg4NjcxOSA4LjY3NTc4MSA4LjY3OTY4OHptMCAwIiBmaWxsPSIjNWU1ZjYyIi8+PHBhdGggZD0ibTMwNC40MjU3ODEgMTc3Ljg5ODQzOGMwIDQuNzkyOTY4LTMuODg2NzE5IDguNjc5Njg3LTguNjc5Njg3IDguNjc5Njg3LTQuNzkyOTY5IDAtOC42NzU3ODItMy44ODY3MTktOC42NzU3ODItOC42Nzk2ODcgMC00Ljc5Mjk2OSAzLjg4MjgxMy04LjY3OTY4OCA4LjY3NTc4Mi04LjY3OTY4OCA0Ljc5Mjk2OCAwIDguNjc5Njg3IDMuODg2NzE5IDguNjc5Njg3IDguNjc5Njg4em0wIDAiIGZpbGw9IiM1ZTVmNjIiLz48cGF0aCBkPSJtMTU2Ljg5ODQzOCA1MDcuNjYwMTU2YzAtMjMuOTYwOTM3IDE5LjQyNTc4MS00My4zOTA2MjUgNDMuMzkwNjI0LTQzLjM5MDYyNSAyMy45NjQ4NDQgMCA0My4zOTA2MjYgMTkuNDI5Njg4IDQzLjM5MDYyNiA0My4zOTA2MjV6bTAgMCIgZmlsbD0iIzVlNWY2MiIvPjxwYXRoIGQ9Im0yNDMuNjc5Njg4IDUwNy42NjAxNTZjMC0yMy45NjA5MzcgMTkuNDI1NzgxLTQzLjM5MDYyNSA0My4zOTA2MjQtNDMuMzkwNjI1IDIzLjk2MDkzOCAwIDQzLjM5MDYyNiAxOS40Mjk2ODggNDMuMzkwNjI2IDQzLjM5MDYyNXptMCAwIiBmaWxsPSIjNWU1ZjYyIi8+PHBhdGggZD0ibTI0My42Nzk2ODggMjkwLjcxMDkzOGMtMTEuNjM2NzE5LjAwMzkwNi0yMi41LTUuODI4MTI2LTI4LjkzMzU5NC0xNS41MjczNDQtNi40Mjk2ODgtOS42OTkyMTktNy41NzQyMTktMjEuOTc2NTYzLTMuMDQ2ODc1LTMyLjY5NTMxMyAxLjE2NDA2Mi0yLjkyMTg3NSAzLjgxNjQwNi00Ljk4NDM3NSA2LjkzMzU5My01LjM5NDUzMSAzLjExMzI4Mi0uNDEwMTU2IDYuMjEwOTM4Ljg5NDUzMSA4LjA4OTg0NCAzLjQxNzk2OSAxLjg3ODkwNiAyLjUxOTUzMSAyLjI0NjA5NCA1Ljg1OTM3NS45NjQ4NDQgOC43MjY1NjItMy4wNjI1IDcuMjY1NjI1LS44NDM3NSAxNS42Nzk2ODggNS4zOTg0MzggMjAuNDg4MjgxIDYuMjQyMTg3IDQuODEyNSAxNC45NDUzMTIgNC44MTI1IDIxLjE4NzUgMCA2LjI0MjE4Ny00LjgwODU5MyA4LjQ2MDkzNy0xMy4yMjI2NTYgNS4zOTg0MzctMjAuNDg4MjgxLTEuMjgxMjUtMi44NjcxODctLjkxNDA2My02LjIwNzAzMS45NjQ4NDQtOC43MjY1NjIgMS44Nzg5MDYtMi41MjM0MzggNC45NzI2NTYtMy44MjgxMjUgOC4wODk4NDMtMy40MTc5NjkgMy4xMTcxODguNDEwMTU2IDUuNzY5NTMyIDIuNDcyNjU2IDYuOTI5Njg4IDUuMzk0NTMxIDQuNTMxMjUgMTAuNzE4NzUgMy4zODY3MTkgMjIuOTk2MDk0LTMuMDQyOTY5IDMyLjY5NTMxMy02LjQzMzU5MyA5LjY5OTIxOC0xNy4yOTY4NzUgMTUuNTMxMjUtMjguOTMzNTkzIDE1LjUyNzM0NHptMCAwIiBmaWxsPSIjMjg1NjgwIi8+PC9zdmc+Cg==" />
            </div>
        </div>
    </div>

    <div class="banner_social">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="title">ENTRE EM CONTATO PELAS REDES TAMBÉM!</div>
                    
                </div>

                <div class="col-12 m-auto">
                    <div class="container">
                        <div class="row ml-md-5 ml-sm-0 ml-lg-0">
                            <div class="col-3">
                                <a class="social_link" href="https://www.linkedin.com/in/davidlimacardoso/"><img class="img-fluid" src="{{asset('storage/components/icones/linkedin.png')}}" /></a>
                            </div>
                            <div class="col-3">
                            <a class="social_link" href="https://wa.me/5511975940756"><img class="img-fluid" src="{{asset('storage/components/icones/whatsapp.png')}}" /></a>
                            </div>
                            <div class="col-3">
                                <a  class="social_link" href="https://www.messenger.com/t/david.cardoso.lm"><img class="img-fluid" src="{{asset('storage/components/icones/facebook.png')}}" /></a>
                            </div>
                            <div class="col-3">
                                <a class="social_link" href="mailto:david.lima.cd@gmail.com?subject=" title="david.lima.cd@gmail.com"><img class="img-fluid" src="{{asset('storage/components/icones/email.png')}}" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
      <script>

     
      </script>
 <!--DYSPLAY FOOTER-->
 @section('footer')
            
 @include('components/footer')

@show

<script src="{{asset('js/navbar.js')}}"></script>
<script src="{{asset('js/contact.js')}}"></script>


</body>
@show


</html>