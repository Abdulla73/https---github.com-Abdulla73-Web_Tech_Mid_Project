
function showWarning() {
    let mail =document.getElementById("mail").value;
    let password =document.getElementById("password").value;
    let error= "";
    if(!mail){
        error+="Email is empty";
    }
    if(!password){
        error+="Password empty";
    }

    if(!error){
        console.log("success");
        // login-ctrl.php?user-mail=uqe&password=123456789&sign-in
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
    let mail = document.getElementById("mail").value;
    let password = document.getElementById("password").value;
 
 
    let xhttp = new XMLHttpRequest();
    xhttp.open(
        "POST",
        "../controllers/login-ctrl.php",
        true
    );
    
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
 
 
    xhttp.send("user-mail="+mail+"&password="+password+"&sign-in=abcd");
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let responseText = this.responseText;
            console.log( responseText);
            let errorelement = document.getElementById("error");
            if(responseText==="login successful"){
                window.location.replace("../Views/dashboard.php")
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


