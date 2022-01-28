function verif() {

	
var id,idprod,prix_nouveau,date_debut,date_fin,description;	
idprod=document.f.idprod.value;
id=document.f.id.value;
prix_nouveau=document.f.prix_nouveau.value;
date_debut=document.f.date_debut.value;
date_fin=document.f.date_fin.value;
description=document.f.description.value;

var test,test1,test2,test3,test4,test5,test6;

test=true;
test1=true;
test2=true;
test3=true;
test4=true;
test5=true;
test6=true;

var a,j,m,date1,date2,aa,jj,mm;





if(id.length==0 || isNaN(id))
{
	alert("Verifier l identifiant de la promotion");
	test=false;
}



if(test==true)
{

if(idprod.length==0 || isNaN(idprod))
{
	alert("Verifier l identifiant du produit");
	test1=false;
}

}

if(test==true && test1==true)
{

if(prix_nouveau.length==0)
{
	alert("Verifier le nouveau prix de la promotion");
	test2=false;
}

}

if(test==true && test1==true && test2==true)
{
	if(description.length==0 )
	{
		alert("la description est obligatoire");
		test3=false;
	}
}




if(test==true && test1==true && test2==true && test3==true)
{
	if(date_debut.length==0)
{
	alert('La date de debut est obligatoire');
	test4=false;
}

}





if(test==true && test1==true && test2==true && test3==true && test4==true)
{
if(date_fin.length==0)
{
	alert('La date de fin de promotion est obligatoire');
	test5=false;
}

}


a=date_debut.substring(0,date_debut.indexOf('/'));
j=date_debut.substring(5,7)
m=date_debut.substring(8,10);
date1=a*365+m*30+j;


aa=date_fin.substring(0,date_fin.indexOf('/'));
jj=date_fin.substring(5,7)
mm=date_fin.substring(8,10);
date2=aa*365+mm*30+jj;



if(  test==true && test1==true && test2==true && test3==true && test4==true && test5==true)
{

if(date1>date2)
{
	alert("Date de debut superieur de la Date de la fin de promotion");
	test6=false;

}


}


/*if( test6==false)
{

window.location="ajoutPromotion.html";
}

*/



}






