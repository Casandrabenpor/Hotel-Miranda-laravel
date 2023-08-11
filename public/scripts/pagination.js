let images = document.getElementsByClassName("section__gallery");
let numberOfPages = Math.ceil(images.length/6);

let paginationDiv = document.getElementById("paginationSection");

paginationDiv.innerHTML = getPagesElement();


function getPagesElement(){
    let element = "";
    for(let i = 1; i <= numberOfPages; i++)
    {
        element += `<span onclick="PageOnClickHandler(${i})" class=\"pageNumber\">${i}   </span>`;
    }

    return element;
}

function PageOnClickHandler(pageNumber){
    let firstIndex = (pageNumber -1) * 6;
    let lastIndex = firstIndex + 5;

    for (let i = 0; i < images.length; i++) {
        if (i >= firstIndex && i <= lastIndex) {
            images[i].classList.add("active-img");
        } else {
            images[i].classList.remove("active-img");
        }
    }
    
}