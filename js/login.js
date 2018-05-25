function login(){
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../app/login.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    var username = document.getElementById("username");
    username = username.value;
    var password = document.getElementById("password");
    password = password.value;
    var data = JSON.stringify({"username":username,"password":password});
    xhr.onreadystatechange = function (){
        if(xhr.readyState === 4 && xhr.status === 200){
            var json = JSON.parse(xhr.responseText);
            // User typed wrong username or doesn't have account
            if(json.response == "wrong username"){
                alert("You typed wrong username or doesn't have account");
            }
            // User typed correct username but wrong password
            else if(json.response == "wrong password"){
                alert("You typed correct username but wrong password");
            }
            // User needs to sign up first
            else if(json.response == "account exists"){
                
                if(json.member_type == "B"){
                    var newWindow = window.open("../view/buyerMain.php?username=" + username,"_self");
                }
                else{
                    var newWindow = window.open("../view/farmerMain.php?username=" + username,"_self");
                }
            }
        }
    }
    xhr.send("data="+data);
}