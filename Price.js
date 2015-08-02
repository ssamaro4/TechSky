var reportc = function (Centimeter) {
	if (isNaN(Centimeter))
	{
  	document.getElementById("resultC").innerHTML =
      "Invalid inputs, please read carefully";
	}else
	{
		  document.getElementById("resultC").innerHTML =
        "Estimated Price =$" + Centimeter;
	
	}
	   
};//This i basically the outline for all other formulas, i just test to see if the values are illegal then print the values from the formulas.

document.getElementById("P").onclick = function () {
    var p=0;
    var C = document.getElementById("package").value;
    if (C=='Diamond')
    {
     p=3000;   
    }else if(C=='Bronze')
    {
     p=1000;  
        
    }else if(C=='Gold')
    {
     p=2500;  
        
    }else if(C=='Silver')
    {
     p=1500;  
        
    }
    var T =document.getElementById("travel").value;
    var F=T;
    if(T>0){
	T=T*15;
    p=p+T;
    }else
    {
       T='land';
        p=p+T;
    }
    
    var R=document.getElementById("room").value;
      if(R>0){
	R=R*100;
    p=p+R;
    }else
    {
       R='land';
        p=p+R;
    }
   if (document.getElementById('class1').checked) {
  p=p+(25*F);
}
  
    
    
	{reportc(p);}
    
};

