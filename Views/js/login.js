const formData = document.getElementById("login_form");
const alert1 = document.getElementById("alert1");
const alert2 = document.getElementById("alert2");
const alert3 = document.getElementById("alert3");

function goToCreate(){

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        var data = JSON.parse(this.responseText);
        // alert(data.description);
        if(formData.children.username.value == "" || formData.children.password.value == ""){
            if(formData.children.username.value == ""){
                alert2.innerHTML = `
            <p class="req" style="margin-top: 7px;">
            username is require
            </p>`;
            }
            if(formData.children.password.value == ""){
                alert3.innerHTML = `
                <p class="req" style="margin-top: 7px;">
                password is require
                </p>`;
            }

            
        }else if (data.status == true){
            // go to login page
            var a = document.createElement("a");
            a.href = "/Tourism/user/panel";
            a.click();
            document.removeChild(a);
        }else{
            alert2.innerHTML = ``;
            alert3.innerHTML = ``;
            alert1.innerHTML = `
            <p class="req" style="margin-top: 7px;">
            ${data.description}
            </p>`;
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

