jQuery(document).ready(function($) {
    $('#menu').slicknav();
}); 

// Swap Slides on Services Slider for Homepage
function changeTextAllServices(){
	document.getElementById('services').innerHTML = '<h2 class="services-title m-0">Services</h2><p class="p-vert-5">I provide a combination of top-notch web development services and cost effective prices that allow businesses both large and small to gain the competitive advantage necessary to succeed.</p><p><i>Click the icon below to learn more about my services</i></p>';}

function changeSlide(service, description, color, icon, id, cta){
	document.getElementById('services').innerHTML = '<h2 class="services-title m-0">' + service + '</h2><p class="p-vert-5">' + description + '</p><p><i>' + cta + '</i></p>';
	document.getElementById(id).src=icon;
	document.getElementById("all-services").src=my_data.template_directory_uri+"/img/all-services-trans.png";
	document.getElementById("services-container").style.background = color;

}

// Change Services Slider Icons Transparency
function changeIconTrans(id, icon){
	document.getElementById(id).src=icon;
	document.getElementById("all-services").src=my_data.template_directory_uri+"/img/all-services.png";
	document.getElementById("services-container").style.background = "orange";
}

// Hide/Show Work Experience
function showWorkExperience(){
	document.getElementById("work-experience").style.display = "block";
	document.getElementById("work-experience-btn").style.display = "none";
}

// Services Hover Feature
function bgChange(id){
	document.getElementById(id).style.background = "tan";
	document.getElementById(id).style.color = "white";
}

function bgChangeBack(id){
	document.getElementById(id).style.background = "none";
	document.getElementById(id).style.color = "black";
}