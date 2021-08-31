function verifierNom (){
	const ver=document.getElementById("nom").value;
	var letters = /^[A-Za-z- -]+$/;
	const erreur=document.getElementById("erreurnom");
	if(ver!==""){
		ver.replace(' ','');
		ver.trim();
		if(ver!==""){
			
					if(!ver.match(letters)){
				erreur.innerHTML="id n'est pas un numero";
			return false;
		}
			else{
			erreur.innerHTML="";
			return true;
		}}
		else{
			erreur.innerHTML="verifier votre nom";
			return false;
		}
	}
	else{
		erreur.innerHTML="verifier votre nom";
			return false;
	}
	   }
	   function verifierPrenom (){
	var letters = /^[A-Za-z- -]+$/;

	const ver=document.getElementById("prenom").value;
	const erreur=document.getElementById("erreurprenom");
	if(ver!==""){
		ver.replace(' ','');
		ver.trim();
		if(ver!==""){
					if(!ver.match(letters)){
				erreur.innerHTML="prenom n'est pas un numero";
			return false;
		}
			else{
			erreur.innerHTML="";
			return true;
		}}
		else{
			erreur.innerHTML="verifier votre prenom";
			return false;
		}
	}
	else{
		erreur.innerHTML="verifier votre prenom";
			return false;
	}
	
}
function verifierCodepostal (){
	const ver=document.getElementById("codepostal").value;
	const erreur=document.getElementById("erreurcodepostal");
	if(ver!==""){
		ver.replace(' ','');
		ver.trim();
		if(ver!==""){
					if(isNaN(ver)){
				erreur.innerHTML="codepostal est un numero";
			return false;
		}
			else{
			erreur.innerHTML="";
			return true;
		}}
		else{
			erreur.innerHTML="verifier votre telephone";
			return false;
		}
	}
	else{

		erreur.innerHTML="verifier votre telephone";
			return false;
	}
	
}
function verifiercase (){
	const ver=document.getElementById("case").value;
	const erreur=document.getElementById("erreurcase");
	if(ver!==""){
		ver.replace(' ','');
		ver.trim();
		if(ver!==""){
					
			
			erreur.innerHTML="";
			return true;
		}
		else{
			erreur.innerHTML="verifier votre case";
			return false;
		}
	}
	else{

		erreur.innerHTML="verifier votre case";
			return false;
	}
	
}
function verifierNumerofacture (){
	const ver=document.getElementById("numerofacture").value;
	const erreur=document.getElementById("erreurnumerofacture");
	if(ver!==""){
		ver.replace(' ','');
		ver.trim();
		if(ver!==""){
					if(isNaN(ver)){
				erreur.innerHTML="numerofacture est un numero";
			return false;
		}
			else{
			erreur.innerHTML="";
			return true;
		}}
		else{
			erreur.innerHTML="verifier votre numerofacture ";
			return false;
		}
	}
	else{

		erreur.innerHTML="verifier votre numerofacture";
			return false;
	}
	
}
function verifierNumero(){
	const ver=document.getElementById("numero").value;
	const erreur=document.getElementById("erreurnumero");
	if(ver!==""){
		ver.replace(' ','');
		ver.trim();
		if(ver!==""){
					if(isNaN(ver)){
				erreur.innerHTML="codepostal est un numero";
			return false;
		}
			else{
			erreur.innerHTML="";
			return true;
		}}
		else{
			erreur.innerHTML="verifier votre numero";
			return false;
		}
	}
	else{

		erreur.innerHTML="verifier votre numero";
			return false;
	}
	
}
function verifierCategorie (){
	const ver=document.getElementById("categorie").value;
	const erreur=document.getElementById("erreurcategorie");
	if(ver!==""){
		ver.replace(' ','');
		ver.trim();
		if(ver!==""){
					if(isNaN(ver)){
				erreur.innerHTML="codepostal est une chaine de caractére";
			return false;
		}
			else{
			erreur.innerHTML="";
			return true;
		}}
		else{
			erreur.innerHTML="verifier la categorie entrée";
			return false;
		}
	}
	else{

		erreur.innerHTML="verifier la categorie entrée";
			return false;
	}
	
}

	function executerverif(){
	verifierNom();
	verifierPrenom ();
/*verifierAdresse ();
verifierVille ();*/
verifierCategorie ();
verifierNumero();
verifierNumerofacture ();
verifierCodepostal ();
verifierNumero();
verifiercase ();
if(verifierNom ()){
return true;
}
else return false;

}
