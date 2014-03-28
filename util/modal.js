function modal() {
	//Lorsque vous cliquez sur un lien de la classe poplight
	$('a.poplight').on('click', function() {
		var popID = $(this).data('rel'); //Trouver la pop-up correspondante
		var popWidth = $(this).data('width'); //Trouver la largeur
		var idbug = $(this).data('id'); //Trouver l'id du bug

		var str = "<h2>Clore le bug n"+idbug+"</h2><form name='clos_bug' method='POST' action='index.php?uc=dash&action=list'><p><label for='note'>Note : </label></p><p><textarea name='note' rows='8' cols='50'>Ecrivez ici...</textarea></p><input type='hidden' name='bug' value='"+idbug+"'><center><p><input type='submit' class='button' value='Valider' name='valider'></p></center></form>";
		$("#popup1").html(str);

		//Faire apparaitre la pop-up et ajouter le bouton de fermeture
		$('#' + popID).fadeIn().css({ 'width': popWidth}).prepend('<a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Récupération du margin, qui permettra de centrer la fenêtre - on ajuste de 80px en conformité avec le CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Apply Margin to Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Apparition du fond - .css({'filter' : 'alpha(opacity=80)'}) pour corriger les bogues d'anciennes versions de IE
		$('body').append('<div id="fade"></div>');
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();
		
		return false;
	});
	
	//Close Popups and Fade Layer
	$('body').on('click', 'a.close, #fade', function() { //Au clic sur le body...
		$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //...ils disparaissent ensemble
		
		return false;
	});
}