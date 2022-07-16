const myForm = document.querySelector("#myform");
const email = document.querySelector("#email");
const password = document.querySelector("#password");
const nameInput = document.querySelector("#name");
const phoneNumber = document.querySelector("#phonenumber");
const myTable = document.querySelector("#mytable");



myForm.addEventListener("submit", onsubmit);
function onsubmit(e){
    e.preventDefault();

   window.location.href="index.html";
}

/*document.getElementById("success").addEventListener("click", function(e){
             
    Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'BOOKING SUCCESSFUL',
            showConfirmButton: false,
            timer: 1500
            })
})*/