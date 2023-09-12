

const nome = document.querySelector("#inp_nome")
const id = document.querySelector("#inp_id")
const senha = document.querySelector("#inp_senha")

const botao = document.querySelector("#botaoCad")


const formularioPronto = {
    nome: false,
    senha: false,
    id: false
}

nome.addEventListener('input', event => {
    const input = event.target.value
    console.log(input)
    if (input.length > 100 || input.length < 1) {
        formularioPronto.nome = false
    } else {
        formularioPronto.nome = true
    }
})

id.addEventListener('input', event => {
    const input = event.target.value
    console.log(input)
    if (input.length > 10 || input.length < 1) {
        formularioPronto.id = false
    } else {
        formularioPronto.id = true
    }
})

senha.addEventListener('input', event => {
    const input = event.target.value
    if (input.length < 5 || input.length > 10) {
        formularioPronto.senha = false
    } else {
        formularioPronto.senha = true
    }
})

botao.addEventListener('click', event => {
    if (formularioPronto.id == false || formularioPronto.nome == false ||  formularioPronto.senha == false) {
        alert("Cadastro invalido")
        console.error("NAO FOI")
    }
})
