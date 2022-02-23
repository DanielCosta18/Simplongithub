$.get("./getProfil.php?name=technet")
.done( function(data){
	profil = jQuery.parseJSON(data);
	$( "#result" ).text(profil.name );
	console.log(profil);
	console.log(profil.name);
});