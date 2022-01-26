let showHideButton = document.querySelector('#showHideButton');
let showform = document.querySelector('showform');

//inserzione funzionalità mostra/nasconde pulsante:
showHideButton.addEventListener('click', () => {
    showform.classList.toggle('d-none')
})
