function starter(){
    let allBtn = document.getElementById('all');
    let salesBtn = document.getElementById('sales');
    let supportBtn = document.getElementById('support');
    let assignBtn = document.getElementById('assign');

    allBtn.addEventListener("click", function(e){
        e.preventDefault();

        displayInfo('all');

    })

    
//function to filter the database by button value.
function displayInfo(filter){
    
}
}





window.onload = starter;