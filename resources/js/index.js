$(document).ready(function(){
    $('#form').on("submit", function(event){
        event.preventDefault();
        console.log(event);
        alert("Cadastrado");
    })
});