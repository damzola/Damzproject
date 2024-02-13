
const inputbox = document.getElementById('input-box');
const listcon = document.getElementById('list-con');

function addTask(){
    if(inputbox.value === ""){
        alert("Input Field can't be empty!");
    }else{

        //FIELD THAT ADD A NEW TASK TONYOUR TODO LIST
        let li = document.createElement("li");
        li.innerHTML = inputbox.value;
        listcon.appendChild(li);

        //FIELD THAT ADDED A DELETE BUTTON TO THE CREATED TODO LIST
        let span = document.createElement("span");
        span.innerHTML = "&#10294;";
        li.appendChild(span);
    }
    //TAG THAT CLEAR THE ADDED TASK FROM THE INPUT FORM
    inputbox.value = " ";

    //THIS SAVE THE TODO LIST INTO THE LOCALSTORAGE
    saveData();
}

// SCRIPT FOR THE CLICK FUNCTION OF THE SPAN AND LI ABOVE TO CHECKED AND DELETE

listcon.addEventListener("click", function(a){
    if (a.target.tagName === 'LI'){
        a.target.classList.toggle("checked");

        saveData();

    }else if(a.target.tagName === "SPAN"){
        a.target.parentElement.remove();
        saveData();
    }
}, false);

    //THIS FUNCTION ALLOW YOU TO SAVE YOUR DATA AGAINST BROWSER REFRESH OR CLOSURE
function saveData(){
    localStorage.setItem("data", listcon.innerHTML);
}

    //THIS FUNCTION RETURN THE SAVE DATA FROM THE LOCALSTORAGE

function showTask(){
    listcon.innerHTML= localStorage.getItem('data');
}
showTask();






