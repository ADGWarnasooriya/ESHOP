function changeView(){

    var signUpBox = document.getElementById("signUpBox");
    var signInBox = document.getElementById("signInBox");

    signUpBox.classList.toggle("d-none");
    signInBox.classList.toggle("d-none");
}

function signUp(){
    
    var f = document.getElementById("f");
    var l = document.getElementById("l");
    var e = document.getElementById("e");
    var p = document.getElementById("p");
    var m = document.getElementById("m");
    var g = document.getElementById("g");

    var form = new FormData;

    form.append("f",f.value);
    form.append("l",l.value);
    form.append("e",e.value);
    form.append("p",p.value);
    form.append("m",m.value);
    form.append("g",g.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function(){
        if(request.readyState == 4){
            var text = request.responseText;
            document.getElementById("msg").innerHTML = text;
            document.getElementById("msgdiv").innerHTML = "d-block";
        }
    }

    request.open("POST","signUpProcess.php",true);
    request.send(form);
    
}