
document.addEventListener('DOMContentLoaded', () => {
    mensagemErroAdm();
    
})

function mensagemErroAdm() {
    const formularioAdm = document.getElementById('formAdm');
    const inputss = document.querySelectorAll('input');
    const mensagemErroAdm = document.querySelectorAll('.mensagemErroAdm');

    formularioAdm.addEventListener('submit', (event) => {
        let temErro = false;

        inputss.forEach((input, index) => {
            if (input.value.trim() === '') {
                mensagemErroAdm[index].style.display = 'block';
                temErro = true;
            } else {
                mensagemErroAdm[index].style.display = 'none';
            }
        })
        if (temErro) {
            event.preventDefault();
        }

    })
}



