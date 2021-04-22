$(document).ready(function(){
	
	// Mettre le h1 en rouge
	$('h1').css('color', 'red');

	// Remplacer le contenu de l'élément dont la class est "paragraphe_cool"
	$('.paragraphe_cool').text("Je remplace le texte actuel");

	// Sélectionner la bonne <ul> grâce à son parent
	$('.container').find('ul').find('li').css('color', 'blue');

	// Faire disparaître un élément lorsqu'on clique dessus
	$("ul").first().click(function(){
		$(this).fadeOut("slow");
	});

	// Copier un élément lorsqu'on clique dessus et le coller à la suite
	$("p").first().click(function(){
		$(this).clone().insertAfter(this);
	});

	// Faire afficher/cacher un élément au survol de la souris
	$('img').hide();
	$(".survol").hover(function(){
		$('img').toggle();
	});

	// Animer un paragraphe lors d'un clique
	$(".animation_paragraphe").click(function(){
		$(this).animate({
			width: '150px',
			fontSize: '3em'
		});
	});

	// Utiliser des données d'un fichier JSON
	$.getJSON("meteo.json", function(data){
		console.log(data.coord.lon);
		console.log(data.coord.lat);
	});
	
});