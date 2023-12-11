function starter(){

    //add functionality go add user button
    let addBtn = document.getElementById('addUser');
    addBtn.addEventListener("click", function(e){
        e.preventDefault();
        window.location.href = "newUser.php";
    })
    
    //display list of users for an admin
    let url = 'userList.php'

    var request = new XMLHttpRequest();

    request.onreadystatechange =function(){
        if (request.readyState == XMLHttpRequest.DONE){
            if(request.status == 200){
                var resultdiv = document.getElementsByClassName("userTable");
                resultdiv.innerHTML = request.responseText;
            }
            else {
                alert("An Error Has Occurred.")
            }
        }
    };
    
    request.open("GET",url,true);
    request.send();
}

window.onload = starter;

