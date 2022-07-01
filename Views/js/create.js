const formData = document.getElementById("create_form");
const alert1 = document.getElementById("alert1");
const alert2 = document.getElementById("alert2");
const alert3 = document.getElementById("alert3");

function create_action(){
    // alert("worked!!")
    
    if(!(formData.children.username.value== "" || formData.children.password.value== "" || 
        formData.children.confirmPass.value== "")){
        showAlert();
        if(formData.children.password.value == formData.children.confirmPass.value){
            not_match();
            // if(formData.children.email.value == ""){
            //     alert("email null");
            // }
            const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            // document.getElementById("demo").innerHTML =
            var data = JSON.parse(this.responseText);
            alert(data.description);
            // alert(this.getResponseHeader("status"));

        }
        xhttp.open("POST", "/Tourism/user/createUserApi" , true);
        xhttp.setRequestHeader("Accept", "application/json");
        xhttp.setRequestHeader("Content-Type", "application/json");

        
        xhttp.send(JSON.stringify({
            "username":formData.children.username.value,
            "password":formData.children.password.value,
            "email":formData.children.email.value,
            "firstname":formData.children.name.value,
            // "lastname":,
            "age":formData.children.age.value,
            "city":formData.children.city.value,
            "country":formData.children.country.value,
        }));
        }else{
            // alert("didnt match !!")
            not_match();

        }
    }else{
        // alert("please inser user & pass & conf");
        showAlert();
    }
    
    // console.log(formData.children.username.value);
    // console.log(formData.children.password.value);
    // console.log(formData.children.confirmPass.value);
    // console.log(formData.children.email.value);
    // console.log(formData.children.name.value);
    // console.log(formData.children.age.value);
    // console.log(formData.children.city.value);
    // console.log(formData.children.country.value);


}
function not_match(){
    if(!(formData.children.password.value == formData.children.confirmPass.value)){
    alert3.innerHTML = `
            <p class="req" style="margin-bottom:5px ; ">
                password & confirm password did not match
            </p>`;
    }else{
        alert3.innerHTML = ``; 
    }
}
function showAlert(){
    // alert("im here !!");
    if(formData.children.username.value== ""){
        alert1.innerHTML = `
            <p class="req" style="margin-bottom:5px ; ">
                username is require
            </p>`;
    }else{
        alert1.innerHTML = ``;
    }
    if(formData.children.password.value== ""){
        alert2.innerHTML = `
            <p class="req" style="margin-bottom:5px ; ">
            password is require
            </p>`;
    }else{
        alert2.innerHTML = ``;
    }
    if(formData.children.confirmPass.value== ""){
        alert3.innerHTML = `
            <p class="req" style="margin-bottom:5px ; ">
            confirm password is require
            </p>`;
    }else{
        alert3.innerHTML = ``;
    }

}