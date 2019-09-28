document.getElementById("iconeBurger").addEventListener("click",toggleMenu);
function toggleMenu(e) {
	document.getElementById("menuBurger").classList.toggle("change");
	document.getElementById("logo").classList.toggle("change");
	document.getElementById("Menu").classList.toggle("change");
	document.getElementById("bouton").classList.toggle("change");
	document.getElementById("bod").classList.toggle("change");
}





if (document.getElementById("containercontactpage")){
   document.getElementById("closeContact").addEventListener("click",closeContact); 
}
if (document.getElementById("containercontactpage")){
    document.getElementById("containercontactpage").addEventListener("click",closeContact);
}


function closeContact(e){
	if (e.target.id != "containercontactpage"){
		document.getElementById("containercontactpage").style.display='none';
        document.getElementById("bod").classList.remove("show");
	}else{
        document.getElementById("containercontactpage").style.display='none';   
    }
}






var tabSousMenu = document.getElementsByClassName("toggleSousMenu");
for(var i=0; i<tabSousMenu.length;i++){
	tabSousMenu[i].addEventListener("click",toggleSousMenu);
}
function toggleSousMenu(e){
	e.target.nextElementSibling.classList.toggle("hide");
}

if (document.getElementById("closeLightbox")){
   document.getElementById("closeLightbox").addEventListener("click",closeLightbox); 
}
if (document.getElementById("lightbox")){
    document.getElementById("lightbox").addEventListener("click",closeLightbox);
}

var tabLightbox = document.getElementsByClassName("myLightbox");

for(var i = 0; i < tabLightbox.length; i++){
	tabLightbox[i].addEventListener("click",showImg);
}

function closeLightbox(e){
	if (e.target.id != "imgLightbox"){
		document.getElementById("lightbox").classList.remove("show");
	}else{
        document.getElementById("lightbox").classList.remove("show");
        document.getElementById("bod").classList.remove("show");
    }
}

function showImg(e){
    if (e.target.getAttribute("imghd")){
        var imgURL = e.target.getAttribute("imghd");
    }else{
        var imgURL = e.target.parentNode.getAttribute("imghd");
    }
	if (e.target.getAttribute("lighttxt")){
        var txtURL = e.target.getAttribute("lighttxt");
    }else{
        var txtURL = e.target.parentNode.getAttribute("lighttxt");
    }
	document.getElementById("imgLightbox").style.backgroundImage = 'url("' + imgURL + '")';
	document.getElementById("txtlightbox").innerHTML = txtURL;
	document.getElementById("lightbox").classList.add("show");
    document.getElementById("bod").classList.toggle("show");
	
}

window.addEventListener("scroll",scrollFunction);

function scrollFunction() {
  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
    document.getElementById("topbutton").style.display = "block";
  } else {
    document.getElementById("topbutton").style.display = "none";
  }
}

window.addEventListener("scroll",stickyfonction);
var el_body = document.getElementsByTagName('body')[0];
var lastScroll = window.pageYOffset || el_body.scrollTop;

function stickyfonction() {
    var wScrollTop = window.pageYOffset || el_body.scrollTop;
    console.log(document.body.scrollTop);
    console.log(document.documentElement.scrollTop);
    var scrollPage = document.body.scrollTop || document.documentElement.scrollTop;
  if ((scrollPage == 0) && (lastScroll > wScrollTop)) {
    
    document.getElementById("Menu").style.position = "absolute";
    document.getElementById("Menu").classList.remove("sticky");  
      
  } else if ((document.body.scrollTop > 600) || (document.documentElement.scrollTop > 600)) {
    document.getElementById("Menu").style.position = "fixed";
    document.getElementById("Menu").classList.add("sticky");
  }
    lastScroll = window.pageYOffset || el_body.scrollTop;
}