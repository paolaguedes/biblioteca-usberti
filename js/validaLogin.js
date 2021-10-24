const btn = document.getElementById("btn")
let p = document.getElementById("erro")

function validaDados(e) {
    const nome = document.getElementById("txtname").value 

    const senha = document.getElementById("txtpass").value

    const nome_certo = "Admin"
    const senha_certa = "1234"

    if(nome == nome_certo && senha == senha_certa ) {
        document.location.href = "./pages/inicial.php"
    } else {
        let erroLogin = document.createElement("p")
        erroLogin.style.color = "red"
        erroLogin.innerHTML = "Login e senha incorretos."
        p.appendChild(erroLogin)
    }

    e.preventDefault()
}

btn.addEventListener('click', validaDados)