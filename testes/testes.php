<script>
    // alert('fazendo uma calculadora bizarra sem lembrar como se programa, so bora')
    let primeiroNumero = prompt('fala o primeiro numero ai')
    let segundoNumero = prompt('fala o segundo numero ai')
    let operador = prompt('fala o operador ai')
    let resultado
    if (operador === '+') {
        resultado = Number(primeiroNumero) + Number(segundoNumero)
    } else if (operador === '-') {
        resultado = Number(primeiroNumero) - Number(segundoNumero)
    } else if (operador === '*') {
        resultado = Number(primeiroNumero) * Number(segundoNumero)
    } else if (operador === '/') {
        resultado = Number(primeiroNumero) / Number(segundoNumero)
    } else {
        alert(operador)
    }
    alert('o resultado é: ' + resultado)
</script>