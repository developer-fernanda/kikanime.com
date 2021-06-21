function enviarEmail() {

    var quebraDeLinha = '%0D%0A';

    var body = 'Nome: ' + escape(document.getElementById('id_nome').value) + quebraDeLinha +
        'Telefone: ' + escape(document.getElementById('id_telefone').value) + quebraDeLinha +
        'E-mail: ' + escape(document.getElementById('id_email').value) + quebraDeLinha +
        'Mensagem: ' + escape(document.getElementById('id_mensagem').value);


    var link = "mailto:henriquemvd03@gmail.com" +
        "?cc=lhmvtomaz@gmail.com" + // Nessa linha pode ser adicionado um BCC OU CC que é (um ou mais email para serem enviados a mensagem, aqui pode ser adicionado diversos emails exemplo ->  "?cc=wesley@gmail.com , wesley55@gmail.com" +    ... Mantive sem email para que me mandesse apenas para um email que é o mailton)
        "&subject=" + escape("Kikanime") + // Aqui é meu assunto do email, posso definilo ou deixa-lo em branco, tanto faz
        "&body=" + body; // Aqui defino o comentário/texto do meu email

    window.location.href = link; //isso aqui é como fosse um return, ele retorna a variavel que está recebendo as caracteristicas do email
}