function verif()
{

var id,id_client,solde;


id=document.f.id.value;
id_client=document.f.id_client.value;
solde=document.f.solde.value;


var test=true;
var test1=true;
var test2=true;


if(id.length==0 || isNaN(id))
{

alert("verifier l identifiant de la fidelite");
test=false;

}



if(test==true)
{

if(id_client.length==0 || isNaN(id_client))
{
	alert("verifier l identifiant de client");
	test1=false;
}


}

if(test==true || test1==true)
{

if(solde.length==0 || isNaN(solde))
{
	alert("verifier le solde ");
}

}







}