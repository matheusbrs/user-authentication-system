document.addEventListener('DOMContentLoaded', () => {
    erroMessagemLogin();
    erroMensagemCadastro();
    
})

function erroMessagemLogin() {
    const form = document.querySelector('form');
    const msgLogin = document.querySelectorAll('.mensagemErroLogin');
    const inputLogin = form.querySelectorAll('input');

    form.addEventListener('submit', (event) => {
        let temErro = false;
        inputLogin.forEach((input, index) => {
            if (input.value.trim() === '') {
                msgLogin[index].style.display = 'block';
                temErro = true;
            } else {
                msgLogin[index].style.display = 'none';
            }
        });
        if (temErro) {
            event.preventDefault();
        }
    })
}
function erroMensagemCadastro() {

    const formCadastro = document.getElementById('formCadastro');
    const inputs = formCadastro.querySelectorAll('input');
    const erroMsg = document.querySelectorAll('.mensagemErroCadastro');

    formCadastro.addEventListener('submit', (event) => {
        let temErro = false;
        inputs.forEach((input, index) => {
            if (input.value.trim() === '') {
                erroMsg[index].style.display = 'block'
                temErro = true;
            } else {
                erroMsg[index].style.display = 'none'
            }
        })
        if (temErro) {
            event.preventDefault();
        }
    })

};

