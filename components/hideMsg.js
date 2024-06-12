const msgError = document.querySelector(".error");
const msgOk = document.querySelector(".ok");

function hideMsg(){
    if (msgError != null) {
        msgError.classList.add("hide");
    }
    if (msgOk != null) {
        msgOk.classList.add("hide");
    }
}

setTimeout(hideMsg, 3500);