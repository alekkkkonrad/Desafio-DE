/*var clientes = [
    {id: 1, nome: 'Luis Santos Oliveira', idade: 18},
    {id: 2, nome: 'Ricardo Lopes Alves', idade: 30},
    {id: 3, nome: 'Gustavo Silva Junior', idade: 26}
]

clientes.map((cliente) => {
    let arr_nomes = cliente.nome.split(' ')
    return console.log(`${arr_nomes[arr_nomes.length-1]}, ${arr_nomes[0]}`)
})

var numero = "5(1)9-876-543-21"

function formataNumero(numero) {

    let numeroFormatado = ['(']
    let contNumeros = 0
    numero.split("").map((num) => {
        if(!isNaN(parseFloat(num)) && isFinite(num)){
            if(contNumeros === 2){
                numeroFormatado.push(')')
                numeroFormatado.push('_')
            }
            if(contNumeros === 3){
                numeroFormatado.push('_')
            }
            if(contNumeros === 7){
                numeroFormatado.push('-')
            }
            numeroFormatado.push(num)
            contNumeros++
        }
    })
    return numeroFormatado.join('')
}
numero = formataNumero(numero)
console.log(numero)*/

async function a(){
    b()
    await c()
    await d()
    alertUser('a')
}
a()

function b(){
    return
    alertUser('b')
}

function c(){
    return new Promise((resolve) => {
        resolve()
        alertUser('c')
    })
}

function d(){
    return new Promise((resolve) => {
        alertUser('d')
    })
}

function alertUser(message){
    console.log('A função é: ' + message)
}

