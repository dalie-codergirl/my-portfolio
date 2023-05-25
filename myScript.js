const links = document.querySelectorAll(".nav-ul a")
for(const link of links){
    link.addEventListener("click", smoothScroll);
}
function smoothScroll(e){
    e.preventDefault();
    const href = this.getAttribute("href");

    document.querySelector(href).scrollIntroView({
        behaviour : "smooth"
    });
}// this code creates a smooth scroller in our page.


var i = 0;
var images = [];
var time = 2000;
images[0]="images/oven.png";
images[1]="images/cooker.png";
images[2]="images/SS.png";
images[3]="images/GUI.png";
images[4]="images/P.png";//variable initialisation.

function changeImg(){
    document.slide.src = images[i];
    if(i<images.length -1){
        i++;
    }else{
        i=0;
    }
    setTimeout("changeImg()",time);
}
window.onload= changeImg;// this code is for inserting a slideshow in our web page.

//getting elements throught their Id's.
const name= document.getElementById('name')
const password= document.getElementById('password')
const form= document.getElementById('form')
const errorElement= document.getElementById('error')
form.addEventListener ;'submit',(e)=>{
    e.preventDefault()
    let messages=[]
    if(name.value ==='' || name.value == null){
        messages.push('name is required')
    }
    if(password.value.length <=6){
        messages.push('password must be longer than 6 characters')
    }
    if(messages.length>0){
        e.preventDefault()
        errorElement.innerText= Messages.join(',')
    }
}//this code creates a validation form.

