function verifier()
{
    var id= window.document.form.idbest.value;
    var idclien= window.document.form.idclients.value;
    var nm= window.document.form.nom.value;
    var prn= window.document.form.prenom.value;
    var nbr= window.document.form.nbrvisites.value;
    /**************** */

    if((id=="")||(idclien=="")||(nm=="")||(prn=="")||(nbr==""))
    {
        alert("Il manque un champ");
        //window.document.form.id.style.border="1px solid red";
        document.form.idbest.style.border = "1px solid red";
        document.form.idclients.style.border = "1px solid red";
        document.form.nom.style.border = "1px solid red";
        document.form.prenom.style.border = "1px solid red";
        document.form.prenom.style.border = "1px solid red";
        return false;
    }
}