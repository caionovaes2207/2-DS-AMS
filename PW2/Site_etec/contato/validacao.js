document.getElementById("formContato").addEventListener("submit", function(event){

    let nome = document.querySelector('input[name="nome"]').value.trim();
    let endereco = document.querySelector('input[name="endereco"]').value.trim();
    let telefone = document.querySelector('input[name="telefone"]').value.trim();
    let email = document.querySelector('input[name="email"]').value.trim();

    if(nome.length < 3){
        alert("O nome deve ter pelo menos 3 caracteres.");
        event.preventDefault();
        return;
    }

    if(endereco.length < 5){
        alert("Digite um endereço válido.");
        event.preventDefault();
        return;
    }

    if(telefone.length < 10){
        alert("Digite um telefone válido.");
        event.preventDefault();
        return;
    }

    let regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if(!regexEmail.test(email)){
        alert("Digite um e-mail válido.");
        event.preventDefault();
        return;
    }

    alert("Formulário validado com sucesso!");
});
