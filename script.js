const SwitchBtn = document.querySelector("span")
const LogForm = document.querySelector(".login-form")
const RegForm = document.querySelector(".register-form")
const para = document.querySelector(".para")

SwitchBtn.addEventListener("click", () => {
    var isactive = LogForm.classList.toggle('inactive')
    RegForm.classList.toggle('inactive')
    if (isactive){
        SwitchBtn.innerText= "Login"
        para.innerText="Already Have an account ?"
    }else{
        SwitchBtn.innerText = "Register"
        para.innerText="Don't Have an account yet ?"

    }
})

const deleteBtn = document.querySelector('.delete-btn');
    deleteBtn.addEventListener('click', () => {
        if (confirm("Veux-tu vraiment supprimer ton compte ?")) {
            fetch('delete.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'delete=1'
            })
            .then(response => response.text())
            .then(data => {
                alert(data);
                window.location.href = "index.php";
            })
            .catch(err => {
                alert("Erreur : " + err);
            });
        }
    });
