
function showWarning() {
    let user_name =document.getElementById("user-name").value;
    let user_mail =document.getElementById("user-mail").value;
    let password =document.getElementById("user-pass").value;
    let confirm_password =document.getElementById("confirm-pass").value;
    let error= "";
    if(!user_name){
        error+="User name is empty";
    }
    if(!user_mail){
        error+="Email is empty";
    }
    if(!confirm_password){
        error+="Password is empty";
    }
    if(!password){
        error+="Confirm Password empty";
    }
    if(password!==confirm_password){
        error+="Password and confirm passwor d is not matching";
    }

    if(!error){
        console.log("success");
        checkuser();
        
    }
    else{
        console.log(error);
        let errorelement= document.getElementById("error")
        errorelement.innerHTML=error;
        setTimeout(() => {
            errorelement.innerHTML="";
        }, 3000);
    }

}

function checkuser() {
    let user_name =document.getElementById("user-name").value;
    let user_mail =document.getElementById("user-mail").value;
    let password =document.getElementById("user-pass").value;
    let confirm_password =document.getElementById("confirm-pass").value;
 
    let xhttp = new XMLHttpRequest();
    xhttp.open(
        "POST",
        "../controllers/registration-ctrl.php",
        true
    );
    
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
 
   
    xhttp.send("user-name=" + user_name + "&user-mail=" + user_mail + "&user-pass=" + password + "&user-con-pass=" + confirm_password + "&confirm-acc=cbf");

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let responseText = this.responseText;
            console.log( responseText);
            let errorelement= document.getElementById("error")
            if(responseText==="Registration successful"){
                window.location.replace("../Views/login.php")
            }
            else{
                
                errorelement.innerHTML=responseText;
                setTimeout(() => {
                    errorelement.innerHTML="";
                }, 3000);
            }
        }
    };
}


