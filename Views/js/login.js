const formData = document.getElementById("login_form");

function goToCreate(){

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        // document.getElementById("demo").innerHTML =
        var data = JSON.parse(this.responseText);
        alert(data.description);
        // alert(this.getResponseHeader("status"));

    }
    xhttp.open("POST", "/Tourism/user/loginApi" , true);
    xhttp.setRequestHeader("Accept", "application/json");
    xhttp.setRequestHeader("Content-Type", "application/json");

      
      xhttp.send(JSON.stringify({
        "username": formData.children.username.value,
        "password": formData.children.password.value
    }));


}

