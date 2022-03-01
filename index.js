pseudo="technet";


function profil(){
    $.get("./getProfil.php?name="+pseudo).done( function(data){
        profil = jQuery.parseJSON(data);
        $( "#pseudo" ).text(profil.name);
        console.log(profil);
        $("#icon").attr("src","http://ddragon.leagueoflegends.com/cdn/12.4.1/img/profileicon/"+profil.profileIconId+".png")
    
    });
};

$("#enter").click(function(){
    pseudo=$("#joueur").val();
    console.log("pseudo : "+pseudo);
    profil();
});