let tabPanes = document.getElementsByClassName("tab-header")[0].getElementsByTagName("div");

for(let i = 0; i < tabPanes.length; i++){
    tabPanes[i].addEventListener("click", function(){
        document.getElementsByClassName("tab-header")[0].getElementsByClassName("active")[0].classList.remove("active");
        tabPanes[i].classList.add("active");

        document.getElementsByClassName("tab-content")[0].getElementsByClassName("active")[0].classList.remove("active");

        document.getElementsByClassName("tab-content")[0].getElementsByClassName("tab-body")[i].classList.add("active");

    });
}

// validate password and terms
let pass = document.getElementById("password");
let confirm_pass = document.getElementById("confirm_password");
let policy = document.getElementById("policy");
document.getElementById("submit").disabled = false;

function validatePass(){
    if(pass.value != confirm_pass.value)
        alert("Passwords don't match");

    else if(policy.checked == false)
        alert("You must accept the terms and conditions");
}