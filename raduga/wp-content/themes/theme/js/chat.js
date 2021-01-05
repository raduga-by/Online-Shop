const chat =  document.querySelector('.Bot');
const pb =  document.querySelector('.polosa__bota');


var visiable = true;

chat.onmouseover = function(){
 	pb.style.display = 'block';
	visiable = true;
};


chat.onmouseout = function(){
 	pb.style.display = 'none';
 	visiable = false;
};

pb.onmouseover = function(){	
 	pb.style.display = 'block';
};


pb.onmouseout = function(){
 	pb.style.display = 'none';
};


