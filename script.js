const form = document.querySelector('form');
const cpfLogin = document.getElementById('cpfLogin');
const senhaLogin = document.getElementById('senhaLogin');
const erroCpf = document.getElementById('mensagemErroLogin');
const erroSenha = document.getElementById('mensagemErroPassword');

form.addEventListener('submit', function(event) {
    let temErro = false;

    if (cpfLogin.value.trim() === '') {
        erroCpf.style.display = 'block';
        temErro = true;
    }

    if (senhaLogin.value.trim() === '') {
        erroSenha.style.display = 'block';
        temErro = true;
    }

    if (temErro) {
        event.preventDefault();
    }
});
