const btnSignIn = document.getElementById("sign_in"),
    btnSignUp = document.getElementById("sign_up"),
    formRegister = document.querySelector(".register"),
    formLogin = document.querySelector(".login");

btnSignIn.addEventListener("click", e =>{
    formRegister.classList.add("hide");
    formLogin.classList.remove("hide");
})
btnSignUp.addEventListener("click", e =>{
    formRegister.classList.remove("hide");
    formLogin.classList.add("hide");
})