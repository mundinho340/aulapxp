var nome = document.getElementById('nome')
var n1 = document.getElementById('nota')
var b =document.getElementById('bairro')
function main(){
    let n =prompt('nome')
    let no=parseInt(prompt('nota'))
    let bairro= prompt('bairro')
    nome.innerHTML=n
    n1.innerHTML=no
    b.innerHTML=bairro
    document.write(`o nome é $n nota $no barirro é  ${{bairro`)
}