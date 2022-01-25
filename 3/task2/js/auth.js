"use strict";

let modal = document.getElementById('modal');
let openModal = document.getElementById('auth');
let closeModal = document.getElementsByClassName("close")[0];

openModal.onclick = function() {
    modal.style.display = "block";
}

closeModal.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
}

document.getElementsByTagName('form')[0]
    .addEventListener('submit', function (event){
        event.preventDefault();
        
        fetch('auto.php', {
            method: 'post',
            body: new FormData(this)
        })
            .then(response => response.text())
            .then(text => {
                if (text === 'Успешный вход') {
                    modal.style.display = "none";
                } else {
                   let messageError =  document.getElementById("message");
                    messageError.className = "visible";
                }
                console.log(text);
            });
});