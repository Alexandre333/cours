$(document).ready(function(){

	// On assigne à des variables les propriétés du CSS qu'on utilisera souvent
	var error = {"borderColor" : "red", "border-width" : "3px"};
	var validate = {"borderColor" : "green", "border-width" : "3px"};

	// On traite le pseudo (2 caractères minimum et 15 au maximum)
	$("#id_pseudo").focusout(function(){
		var pseudo = $(this).val().length;

		if((pseudo > 1) && (pseudo < 16)){
			$(this).css(validate);
		}else{
			$(this).css(error);
		}
	});

	// On vérifie la présence d'un @ dans l'email
	$("#id_email").focusout(function(){
		var email = $(this).val();

		if(email.includes("@")){
			$(this).css(validate);
		}else{
			$(this).css(error);
		}
	});

	// On vérifie le mot de passe (5 caractères minimum et au moins un chiffre)
	$("#id_mdp").focusout(function(){
		var mdp_value = $(this).val();
		var mdp_length = $(this).val().length;

		if((mdp_length > 4) && (/\d/.test(mdp_value))){
			$(this).css(validate);
		}else{
			$(this).css(error);
		}
	});

});