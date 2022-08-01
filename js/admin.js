const data = location.hash.substring(1)
console.log(data)
const hide_Modal = document.querySelector('.modal-dialog')
const show_hello = document.querySelector('.hilo')
if(data==='admin'){
    hide_Modal.classList.add('hide-display')
    show_hello.classList.remove('hide-display')
}