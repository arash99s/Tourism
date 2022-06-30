const formData = document.getElementById("login_form");

function goToCreate(){

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        // document.getElementById("demo").innerHTML =
        var data = JSON.parse(this.responseText);
        alert(data.description);
        // alert(this.getResponseHeader("status"));

    }
    xhttp.open("POST", "/Tourism/user/login");
    xhttp.send({"value": "123"});

}

