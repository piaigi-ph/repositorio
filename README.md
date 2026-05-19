<div align="center">

```
██████╗  ██████╗███╗   ███╗    ██╗      █████╗ ██████╗
██╔══██╗██╔═══██╗████╗ ████║    ██║     ██╔══██╗██╔══██╗
██║  ██║██║   ██║██╔████╔██║    ██║     ███████║██████╔╝
██║  ██║██║   ██║██║╚██╔╝██║    ██║     ██╔══██║██╔══██╗
██████╔╝╚██████╔╝██║ ╚═╝ ██║    ███████╗██║  ██║██████╔╝
╚═════╝  ╚═════╝ ╚═╝     ╚═╝    ╚══════╝╚═╝  ╚═╝╚═════╝
```

### laboratório interativo de manipulação de DOM

![HTML](https://img.shields.io/badge/HTML5-E34F26?style=flat-square&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS3-1572B6?style=flat-square&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat-square&logo=javascript&logoColor=black)
![Status](https://img.shields.io/badge/status-ativo-brightgreen?style=flat-square)

</div>

---

## ✦ sobre o projeto

Um laboratório prático para aprender e experimentar manipulação de DOM diretamente no navegador. Selecione elementos, altere estilos, crie e remova nós — tudo em tempo real, sem frameworks, sem dependências.

> _"O melhor jeito de aprender DOM é sujar as mãos no console."_

---

## ⚡ funcionalidades

- `getElementById` · `querySelector` · `querySelectorAll`
- Alterar **texto**, **estilos** e **atributos** dinamicamente
- Criar, inserir e remover elementos da árvore DOM
- Adicionar **event listeners** interativos
- Exemplos prontos para colar direto no console do navegador

---

## 🚀 como usar

**1. clone o repositório**
```bash
git clone https://github.com/seu-usuario/dom-lab.git
cd dom-lab
```

**2. abra no navegador**
```bash
# sem servidor necessário — abra direto
open laboratorio-dom.html
```

**3. abra o console**
```
F12 → aba Console
```

**4. cole qualquer exemplo e experimente**
```js
document.getElementById('titulo-aula').style.color = '#e74c3c';
```

---

## 🧪 exemplos rápidos

```js
// mudar o título
document.getElementById('titulo-aula').textContent = 'DOM na prática!';

// adicionar item na lista
const li = document.createElement('li');
li.textContent = 'Item novo';
document.getElementById('minhaLista').appendChild(li);

// remover último item
document.getElementById('minhaLista').lastElementChild.remove();
```

---

## 📁 estrutura

```
dom-lab/
├── laboratorio-dom.html   # página principal
├── dom-exemplos.js        # exemplos para o console
└── README.md
```

---

## 📄 licença

Distribuído sob a licença MIT. Veja `LICENSE` para mais informações.

---

<div align="center">

feito com 🖤 para quem está aprendendo JavaScript

</div>
