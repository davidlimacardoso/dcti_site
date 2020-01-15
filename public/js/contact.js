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