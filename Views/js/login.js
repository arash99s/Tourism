const formData = document.getElementById("login_form");

function goToCreate(){

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        var data = JSON.parse(this.responseText);
        alert(data.description);
        if (data.status == true){
            // go to login page
            var a = document.createElement("a");
            a.href = "/Tourism/user/panel";
            a.click();
            document.removeChild(a);
        }
    }
    xhttp.open("POST", "/Tourism/user/loginApi" , true);
    xhttp.setRequestHeader("Accept", "application/json");
    xhttp.setRequestHeader("Content-Type", "application/json");

      
      xhttp.send(JSON.stringify({
        "username": formData.children.username.value,
        "password": formData.children.password.value
    }));


}

