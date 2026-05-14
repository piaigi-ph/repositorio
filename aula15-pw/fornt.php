<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>perfil de desenvolvedor</title>
    <style>
        body {font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color:#f4f4f9;color: #333; padding: 20px;}
        .painel {background: #fff; padding: 20px; border-radius: 8px; width: 300px; margin-bottom: 20px; box-shadow: 0 4px 8px rgba (0,0,0,0.1);}
        input {padding: 8px; width: 90%; margin-bottom: 10px;border-radius: 4px;border: 1px solid #ccc;}
        button {padding: 10px; background: #0056b3;color: white;border: none;border-radius: 4px;cursor: pointer; width: 100%;font-weight: bold;}
        button:hover {background: #004494;}
        .cartao {background: #fff;color: #333;padding: 15px;border-radius: 8px;width: 300px;border-left: 10px solid #0056b3;box-shadow: 0 4px 8px rgba(0,0,0,0.1);}
        .cartao h3 {margin:  0 0 10px 0; color: #0056b3;}
        .cartao p {margin: 5px 0; }
        .destaque {font-weight: bold; color: #0056b3;}
    </style>
</head>
<body>
    <div class="painel">
        <h2>CADASTRO DE PERFIL</h2>
        <label>pedro henrique da silva bernardo/dev:</label>
        <input type="text" id="input-name" placeholder="ex: octavios...">

        <label> linguagem favorita = css</label>
        <input type="text" id="linguagem" placeholder="ex:php,javascript,c#...">

        <button id="btn-registrar">criar perfil</button>
    </div>

    <div class="cartao">
        <h3>PERFIL DO DEV</h3>
        <p>nome: <span id="cartao-nome" class="destaque">????</span></p>
        <p>linguagem: <span id="cartao-linguagem" class="destaque">????</span></p>
    </div>
    <script>
        let botao = document.getElementByld("btn-registrar") ;
        let campoNome = document.getElementByld("input-nome") ;
        let campolinguagem = document.getElementByld("input-linguagem") ;
        let spanNome = document.getElementByld("cartao-nome") ;
        let spanLinguagem = document.getElementByld("cartao-linguagem") ;
        botao.addEventilistener("click",function() {
            let nomeDigitado = campoNome.value;
            let linguagemDigitada = campoLinguagem.value;

            spanNome.inerText = nomeDigitado;
            spanLinguagem.inerText = inerText = linguagemDigitada;

            campoNome.value = "";
            campolinguagem.value = "";
        });
    </script>
</body>
</html>