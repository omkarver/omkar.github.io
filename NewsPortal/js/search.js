console.log("Welcome to the Search Page");

let search = document.getElementById('searchTxt');

search.addEventListener("input",function(){

    let inputVal = search.value;
    console.log('Input Event Fired', inputVal);

    let myarticle = document.getElementById('home-article');
    Array.from(myarticle).forEach(function(element){
        let articleTxt = element.getElementsByTagName("p")[0].innerText;
        if(articleTxt.includes(inputVal)){
            element.style.display = "block";
        }

        else{
            element.style.display = "none";
        }
    })
})