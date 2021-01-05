const header = document.querySelector('.menu__list');
const social = document.querySelector('.menu__social');
const sbutton = document.querySelector('.but');


sbutton.style.display = 'none';
header.style.marginTop = '15px';
social.style.marginTop = '10px';


jQuery(window).scroll(function() {

    if (jQuery(this).scrollTop()>535)
     {
      jQuery('.but').fadeIn(); 
      header.style.marginTop = '0px';  
	  social.style.marginTop = '0px';
     }
    else
     {
      jQuery('.but').fadeOut();
      header.style.marginTop = '15px';
	  social.style.marginTop = '10px'; 
     }
 });