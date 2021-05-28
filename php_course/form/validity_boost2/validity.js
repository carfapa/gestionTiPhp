

$(function (){

    let form = document.getElementById('contacto');
    let names = document.getElementById('names'),
        lastnames = document.getElementById('lastnames'),
        email = document.getElementById('email'),
        phone = document.getElementById('phone');

    form.addEventListener('submit', function (e){
        e.preventDefault();

        if (!names.checkValidity())
        {
            console.log('Hola names');
        }

        if (!lastnames.checkValidity())
        {
            console.log('Hola lastnames');
        }

        if (!email.checkValidity())
        {
            console.log('Hola email');
        }

        if (!phone.checkValidity())
        {
            console.log('Hola phone');
        }


        if (form.checkValidity() === true) {
            alert("Hola");
            e.stopPropagation();
        }

        /*let names = document.getElementById('names');
        if (names.value != ""){
            console.log('hola, error');
        }
        else {
            names.setCustomValidity("Error");
        }
        if (names.checkValidity()){
            alert('Hol');
        }h7yc
        else {
            names.setCustomValidity("Error");
        }

        if (form.checkValidity()){
            alert("Hola");
        }*/
    }, false);

});
