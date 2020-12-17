$("#signinhide").click(function(){
    $("#signin").hide(500);
    $("#signup").show(500);
});

$("#signuphide").click(function(){
    $("#signup").hide(500);
    $("#signin").show(500);
});
function validatesigninform(){  
    var email=document.signinform.exampleInputEmail1.value;  
    var password=document.signinform.exampleInputPassword1.value;  

    if (email==null || email==""){  
    alert("Email can't be blank");  
    return false;  
    }else if(password.length<6){  
    alert("Password must be at least 6 characters long.");  
    return false;  
    }  
    }  

function validatesignupform(){  
    var email=document.signupform.exampleInputEmail2.value;  
    var password=document.signupform.exampleInputPassword2.value;  
    var firstpassword=document.signupform.exampleInputPassword2.value;  
    var secondpassword=document.signupform.exampleInputPassword3.value;  
    
    if (email==null || email==""){  
        alert("Email can't be blank");  
    return false;  
    }if(password.length<6){  
        alert("Password must be atleast 6 characters long.");  
    return false;  
    }
    if(firstpassword==secondpassword){  
    return true;  
    }  
    else {  
        alert("password must be same!");  
    return false;  
    }  
    }

function loginfail(){
    alert("please enter valid email-id or password")
    } 