// Pour le changement de theme 
function toggleTheme() {
    document.body.classList.toggle('dark');
}
document.querySelector('.themeButton').addEventListener('click', toggleTheme);



// Pour le contact
function slideFromLeft() {
    var elementArray = document.querySelectorAll('.fromLeft');
    for (var i = 0; i < elementArray.length; i++) {
        elementArray[i].classList.toggle('visible');
    }
}
document.querySelector('.slideButton').addEventListener('click', slideFromLeft);

// Pour plus d'interet 

function slideFromLeftt() {
    var elementArray = document.querySelectorAll('.fromLeftt');
    for (var i = 0; i < elementArray.length; i++) {
        elementArray[i].classList.toggle('visible');
    }
}
document.querySelector('.slideButtonn').addEventListener('click', slideFromLeftt);





//Pour le diapo representant la pâtisserie 

var image = document.getElementById("goo");
var imageArray = ["img/gateau.JPG","img/IMG_6115.JPG","img/IMG_6136.JPG","img/82.jpg","img/7.jpg","img/Mounira.JPG","img/mousse.JPG","img/89.JPG","img/12.JPG","img/90.JPG","img/95.JPG"];
var imageIndex = 0;

function changeImage() {
	image.setAttribute("src",imageArray[imageIndex]);
	imageIndex++;
	if(imageIndex >= imageArray.length){
		imageIndex = 0;
	}
}

var imageInterval = setInterval(changeImage,2000);
image.onmouseover = function(){
	clearInterval(imageInterval);
};

image.onmouseout = function(){
	imageInterval = setInterval(changeImage,2000);
};


// Le diapo representant mes voyages 

var voyages = document.getElementById("voy");
var voyagesArray = ["img/2.JPG","img/3.JPG","img/4.JPG","img/5.JPG"];
var voyagesIndex = 0;

function change() {
	voyages.setAttribute("src",voyagesArray[voyagesIndex]);
	voyagesIndex++;
	if(voyagesIndex >= voyagesArray.length){
		voyagesIndex = 0;
	}
}

var voyagesInterval = setInterval(change,2000);
voyages.onmouseover = function(){
	clearInterval(voyagesInterval);
};

voyages.onmouseout = function(){
	voyagesInterval = setInterval(change,2000);
};

function slideFromLeft() {
    var elementArray = document.querySelectorAll('.fromLeft');
    for (var i = 0; i < elementArray.length; i++) {
        elementArray[i].classList.toggle('visible');
    }
}
document.querySelector('.slideButton').addEventListener('click', slideFromLeft);