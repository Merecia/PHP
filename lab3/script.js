if (window.File && window.FileReader && window.FileList && window.Blob) {

    function showFile() {
        var demoImage = document.querySelector('img');
        var file = document.querySelector('input[type=file]').files[0];
        var reader = new FileReader();
        reader.onload = function (event) {
            demoImage.src = reader.result;
        }
        reader.readAsDataURL(file);
        console.log(file)
    }

} else {

    alert("Your browser is too old to support HTML5 File API");
}

function checkForm(form) {

    var phone = form.phone.value;
    var p = phone.match(/^((\+?3)?8)?0\d{9}$/);
    if (!p) {
        alert("Телефон введен неверно");
        return false;
    }

    var email = form.email.value;
    var m = email.match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
    if (!m) {
        alert("E-mail введен неверно, пожалуйста исправьте ошибку");
        return false;
    }
    return true;

}