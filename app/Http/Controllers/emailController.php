<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class emailController extends Controller
{
    public function contatoForm(Request $req){

        $nome = $req->input('nome');
        $email = $req->input('email');
        $assunto = $req->input('assunto');
        $mensagem = $req->input('mensagem');
        
        try {

            Mail::send('layouts/mail' , [
                'nome' => $nome,
                'mensagem' => $mensagem,
                'email' => $email,
                'assunto' => $assunto
            ], function ($message) {
                $message->from('dcti@dcti.com','SITE DCTI');
                $message->to('david.lima.cd@gmail.com');
            });
            
            //RETORNA MENSAGEM DE SUCESSO (MODAL)
            return redirect('contato')->with('message', 
            '<div id="modalSuccess" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <h4 class="modal-title text-white text-center">
                    <i class="fas fa-check text-success mr-2"></i>Mensagem enviada com sucesso!</h4>
              </div>
          </div>
          <script>
          $(document).ready(function(){
            $("#modalSuccess").modal("show");
            setTimeout(function() {
                $("#modalSuccess").modal("hide");
              }, 3000);
        });
          </script>
          '
        );
          
          } catch (\Exception $e) {
            
            //RETORNAR MENSAGEM DE ERRO
            $e->getMessage();
            return redirect('contato')->with('error', 
            '<div id="modalError" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <h4 class="modal-title text-white text-center">
                <i class="fas fa-exclamation-circle text-warning mr-2"></i></i>Falha ao enviar mensagem!</h4>
              </div>
          </div>
          <script>
          $(document).ready(function(){
            $("#modalError").modal("show");
            setTimeout(function() {
                $("#modalError").modal("hide");
              }, 3000);
        });
          </script>
          ');
          }
       
    }
}
