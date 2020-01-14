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
        <script src="{{asset('js/jquery.validate.min.js')}}"></script>
        <!--RECAPTCHA-->
        <script src='https://www.google.com/recaptcha/api.js'></script>
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

    

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="display-4">Contato</div>
                <form id="contactForm" class="card needs-validation" action="indisponivel">
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
                      {{-- <div class="col-12 mb-3">
                          <div class="g-recaptcha" data-sitekey="6LdgE88UAAAAAKABRewlHF9DSHHSUYnoSa-5cWhU"></div>
                      </div> --}}
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
                                <a class="social_link" href="https://www.linkedin.com/in/davidlimacardoso/"><img class="img-fluid w-50" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAyNCAyNCIgaGVpZ2h0PSI1MTJweCIgdmlld0JveD0iMCAwIDI0IDI0IiB3aWR0aD0iNTEycHgiPjxnIGZpbGw9IiMwMDc3YjUiPjxwYXRoIGQ9Im0yMy45OTQgMjR2LS4wMDFoLjAwNnYtOC44MDJjMC00LjMwNi0uOTI3LTcuNjIzLTUuOTYxLTcuNjIzLTIuNDIgMC00LjA0NCAxLjMyOC00LjcwNyAyLjU4N2gtLjA3di0yLjE4NWgtNC43NzN2MTYuMDIzaDQuOTd2LTcuOTM0YzAtMi4wODkuMzk2LTQuMTA5IDIuOTgzLTQuMTA5IDIuNTQ5IDAgMi41ODcgMi4zODQgMi41ODcgNC4yNDN2Ny44MDF6Ii8+PHBhdGggZD0ibS4zOTYgNy45NzdoNC45NzZ2MTYuMDIzaC00Ljk3NnoiLz48cGF0aCBkPSJtMi44ODIgMGMtMS41OTEgMC0yLjg4MiAxLjI5MS0yLjg4MiAyLjg4MnMxLjI5MSAyLjkwOSAyLjg4MiAyLjkwOSAyLjg4Mi0xLjMxOCAyLjg4Mi0yLjkwOWMtLjAwMS0xLjU5MS0xLjI5Mi0yLjg4Mi0yLjg4Mi0yLjg4MnoiLz48L2c+PC9zdmc+Cg==" /></a>
                            </div>
                            <div class="col-3">
                                <a class="social_link" href="https://www.linkedin.com/in/davidlimacardoso/"><img class="img-fluid w-50" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAyNCAyNCIgaGVpZ2h0PSI1MTJweCIgdmlld0JveD0iMCAwIDI0IDI0IiB3aWR0aD0iNTEycHgiPjxnIGZpbGw9IiMwMDc3YjUiPjxwYXRoIGQ9Im0yMy45OTQgMjR2LS4wMDFoLjAwNnYtOC44MDJjMC00LjMwNi0uOTI3LTcuNjIzLTUuOTYxLTcuNjIzLTIuNDIgMC00LjA0NCAxLjMyOC00LjcwNyAyLjU4N2gtLjA3di0yLjE4NWgtNC43NzN2MTYuMDIzaDQuOTd2LTcuOTM0YzAtMi4wODkuMzk2LTQuMTA5IDIuOTgzLTQuMTA5IDIuNTQ5IDAgMi41ODcgMi4zODQgMi41ODcgNC4yNDN2Ny44MDF6Ii8+PHBhdGggZD0ibS4zOTYgNy45NzdoNC45NzZ2MTYuMDIzaC00Ljk3NnoiLz48cGF0aCBkPSJtMi44ODIgMGMtMS41OTEgMC0yLjg4MiAxLjI5MS0yLjg4MiAyLjg4MnMxLjI5MSAyLjkwOSAyLjg4MiAyLjkwOSAyLjg4Mi0xLjMxOCAyLjg4Mi0yLjkwOWMtLjAwMS0xLjU5MS0xLjI5Mi0yLjg4Mi0yLjg4Mi0yLjg4MnoiLz48L2c+PC9zdmc+Cg==" /></a>
                            </div>
                            <div class="col-3">
                                <a  class="social_link" href="https://www.messenger.com/t/david.cardoso.lm"><img class="img-fluid w-50" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8cGF0aCBzdHlsZT0iZmlsbDojMjE5NkYzOyIgZD0iTTMyMCw4NS4zMzNoNjRjNS44OTEsMCwxMC42NjctNC43NzYsMTAuNjY3LTEwLjY2N3YtNjRDMzk0LjY2Nyw0Ljc3NiwzODkuODkxLDAsMzg0LDBoLTY0ICBjLTY0Ljc3MiwwLjA3MS0xMTcuMjYzLDUyLjU2MS0xMTcuMzMzLDExNy4zMzNWMTkySDEyOGMtNS44OTEsMC0xMC42NjcsNC43NzYtMTAuNjY3LDEwLjY2N3Y2NGMwLDUuODkxLDQuNzc2LDEwLjY2NywxMC42NjcsMTAuNjY3ICBoNzQuNjY3djIyNGMwLDUuODkxLDQuNzc2LDEwLjY2NywxMC42NjcsMTAuNjY3aDY0YzUuODkxLDAsMTAuNjY3LTQuNzc2LDEwLjY2Ny0xMC42Njd2LTIyNGg3NC42NjcgIGM0LjU4OS0wLjAwMyw4LjY2Mi0yLjk0MiwxMC4xMTItNy4yOTZsMjEuMzMzLTY0YzEuODYyLTUuNTg5LTEuMTYtMTEuNjI5LTYuNzQ5LTEzLjQ5MWMtMS4wODQtMC4zNjEtMi4yMi0wLjU0Ni0zLjM2My0wLjU0N2gtOTYgIHYtNzQuNjY3QzI4OCw5OS42NiwzMDIuMzI3LDg1LjMzMywzMjAsODUuMzMzeiIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" /></a>
                            </div>
                            <div class="col-3">
                                <a class="social_link" href="mailto:david.lima.cd@gmail.com?subject=" title="david.lima.cd@gmail.com"><img class="img-fluid w-50" src="data:image/svg+xml;base64,
                                    PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDkwLjIgNDkwLjIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ5MC4yIDQ5MC4yOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMiIgaGVpZ2h0PSI1MTIiIGNsYXNzPSIiPjxnPjxnPgoJPHBhdGggZD0iTTQyMC45NSw2MS44QzM3Ni4yNSwyMC42LDMyMC42NSwwLDI1NC4yNSwwYy02OS44LDAtMTI5LjMsMjMuNC0xNzguNCw3MC4zcy03My43LDEwNS4yLTczLjcsMTc1ICAgYzAsNjYuOSwyMy40LDEyNC40LDcwLjEsMTcyLjZjNDYuOSw0OC4yLDEwOS45LDcyLjMsMTg5LjIsNzIuM2M0Ny44LDAsOTQuNy05LjgsMTQwLjctMjkuNWMxNS02LjQsMjIuMy0yMy42LDE2LjItMzguN2wwLDAgICBjLTYuMy0xNS42LTI0LjEtMjIuOC0zOS42LTE2LjJjLTQwLDE3LjItNzkuMiwyNS44LTExNy40LDI1LjhjLTYwLjgsMC0xMDcuOS0xOC41LTE0MS4zLTU1LjZjLTMzLjMtMzctNTAtODAuNS01MC0xMzAuNCAgIGMwLTU0LjIsMTcuOS05OS40LDUzLjYtMTM1LjdjMzUuNi0zNi4yLDc5LjUtNTQuNCwxMzEuNS01NC40YzQ3LjksMCw4OC40LDE0LjksMTIxLjQsNDQuN3M0OS41LDY3LjMsNDkuNSwxMTIuNSAgIGMwLDMwLjktNy42LDU2LjctMjIuNyw3Ny4yYy0xNS4xLDIwLjYtMzAuOCwzMC44LTQ3LjEsMzAuOGMtOC44LDAtMTMuMi00LjctMTMuMi0xNC4yYzAtNy43LDAuNi0xNi43LDEuNy0yNy4xbDE4LjYtMTUyLjFoLTY0ICAgbC00LjEsMTQuOWMtMTYuMy0xMy4zLTM0LjItMjAtNTMuNi0yMGMtMzAuOCwwLTU3LjIsMTIuMy03OS4xLDM2LjhjLTIyLDI0LjUtMzIuOSw1Ni4xLTMyLjksOTQuN2MwLDM3LjcsOS43LDY4LjIsMjkuMiw5MS4zICAgYzE5LjUsMjMuMiw0Mi45LDM0LjcsNzAuMywzNC43YzI0LjUsMCw0NS40LTEwLjMsNjIuOC0zMC44YzEzLjEsMTkuNywzMi40LDI5LjUsNTcuOSwyOS41YzM3LjUsMCw2OS45LTE2LjMsOTcuMi00OSAgIGMyNy4zLTMyLjYsNDEtNzIsNDEtMTE4LjFDNDg4LjA1LDE1Mi45LDQ2NS43NSwxMDMsNDIwLjk1LDYxLjh6IE0yNzMuNTUsMjkxLjljLTExLjMsMTUuMi0yNC44LDIyLjktNDAuNSwyMi45ICAgYy0xMC43LDAtMTkuMy01LjYtMjUuOC0xNi44Yy02LjYtMTEuMi05LjktMjUuMS05LjktNDEuOGMwLTIwLjYsNC42LTM3LjIsMTMuOC00OS44czIwLjYtMTksMzQuMi0xOWMxMS44LDAsMjIuMyw0LjcsMzEuNSwxNC4yICAgczEzLjgsMjIuMSwxMy44LDM3LjlDMjkwLjU1LDI1OS4yLDI4NC44NSwyNzYuNiwyNzMuNTUsMjkxLjl6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiMzOTdBREQiIGRhdGEtb2xkX2NvbG9yPSIjMDAwMDAwIj48L3BhdGg+CjwvZz48L2c+IDwvc3ZnPg==" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    
      <script>
      $("#contactForm").validate({
        errorClass: 'error',
        validClass: 'valid',
   rules: {
            nome : {
                required : true,
                minlength : 3
            },
            email : {
                required : true,
            },
            assunto : {
                required : true,
                minlength : 5,
                maxlength : 30
            },
            mensagem : {
                required : true,
                maxlength : 1000
            },
    },
    messages : {
        nome : {
            required : '<span class="text-danger">Por favor escreva seu nome!</span>'
      },
      email : {
            required : '<span class="text-danger">Por favor escreva seu email!</span>'
      },
      assunto : {
            required : '<span class="text-danger">Por favor escreva o assunto!</span>'
      },
       mensagem : {
            required : '<span class="text-danger">Por favor deixe a sua mensagem!</span>'
      },
    }
        
   
   
  
 });
      </script>
 <!--DYSPLAY FOOTER-->
 @section('footer')
            
 @include('components/footer')

@show

<script src="{{asset('js/navbar.js')}}"></script>
<!--IDIOMA RECAPTCHA-->
<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>

</body>
@show


</html>