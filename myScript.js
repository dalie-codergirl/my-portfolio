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
}


// this code creates a smooth scroller in our page.

var i = 0;
var images = [];
var time = 3000;
images[0]="images/oven.png";
images[1]="images/cooker.png";
images[2]="images/SS.png";
images[3]="images/GUI.png";
images[4]="images/P.png";

function changeImg(){
    document.slide.src = images[i];
    if(i<images.length -1){
        i++;
    }else{
        i=0;
    }
    setTimeout("changeImg()",time);
}
window.onload= changeImg;



window.addEventListener('DOMContentLoaded', function()
{
    var greetingElement = this.document.getElementById('greeting');
    var today = new Date();
    var hour = today.getHours();
     var greeting;
     if(hour<12){
        greeting= 'GOOD MORNING!! AND WELCOME TO MY PORTFOLIO';
     }else if(hour< 18){
        greeting=' GOOD AFTERNOON!!  AND WELCOME TO MY PORTFOLIO';
     }else{
        greeting='GOOD EVENING!!  AND WELCOME TO MY PORTFOLIO';
     }
     greetingElement.textContent = greeting;
});



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
}

//Design for my projects page
//Filtering mechanism for projects
function filterProjects(){
  var itemList = document.getElementById("itemList");
  var checkboxes = document.querySelectorAll("input[type = 'checkbox']");
  var selectedFilters = [];
   checkboxes.forEach(function(checkbox){
       if(checkbox.checked){
           selectedFilters.push(checkbox.id);
       }
   });
   var items = itemList.getElementsByTagName("dt");
   for(var i = 0; i< items.length; i++){
      var item =items[i];
      var filter = item.getAttribute("data-filter");
      if(selectedFilters.length == 0 || selectedFilters.includes(filter)){
          item.style.display = "block";
      }else{
          item.style.display ="none";
      }
   }
} 
//Search feature
const SearchInput =document.getElementById("SearchBar");
const SearchButton =document.getElementById("SearchButton");

SearchButton.addEventListener('click', doSearch);

function doSearch(){
  const query =SearchInput.toLowercase();
  const elements =document.querySelectorAll('p, dl, dt, h5');
  elements.forEach(Element => {
      const text = Element.innerText.toLowercase();
      if(text.includes(query)){
          const regex = new RegExp(query, 'gi');
          const highlitedText = text.replace(regex, match => `<span class ="highlight">${match}</span>`);
          Element.innerHTML = highlitedText;
      }
  })
}

const skills = document.querySelectorAll('.skill');

skills.forEach(skill => {

    const tooltipText = skill.dataset.tooltip;
    const tooltip = document.createElement('div');
    tooltip.classList.add('tooltip');
    tooltip.textContent = tooltipText;
    skill.addEventListener('mouseout', () =>{
        tooltip.style.visibility = 'visible';
    });
    skill.addEventListener('mouseout', () =>{
        tooltip.style.visibility = 'hidden';
    });
});
   //not working geolocation  
document.addEventListener('DOMContentLoaded', function(){
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showPosition);
    }else{
        showError("Geolocation is not supported by this browser.");
    }
});
function showPosition(position){
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;

    var locationElement = document.getElementById("location");
    locationElement.innerHTML = "Latitude:" + latitude + "<br>Longitude:" + longitude;
}
function showError(error){
    var locationElement = document.getElementById("location");
    locationElement.innerHTML = "Error:" + error;
}
 
//animation
document.addEventListener('DOMContentLoaded', function(){
    var element = document.querySelector('.my-element');
    element.classList.add('animated');
});

document.querySelector("form").addEventListener("submit", function(event) {
    var inputs = this.querySelectorAll("input[type='text']");
    var isValid = true;

    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].value.trim() === "") {
            isValid = false;
            break;
        }
    }

    if (!isValid) {
        event.preventDefault();
        alert("Please fill in all fields.");
    }
});