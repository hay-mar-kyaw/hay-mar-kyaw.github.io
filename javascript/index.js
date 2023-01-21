//document.getElementById("count-el").innerText=5;
let saveEl = document.getElementById("previousText");
console.log(saveEl);

let countEL = document.getElementById("count-el");
let count = 0;
function increment(){
    count = count + 1;
    countEL.innerText=count;
}

function save(){
    let countStr=count+" - ";
    saveEl.innerText += countStr;
}