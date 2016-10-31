<script>
	$(document).ready(function() {
		$(".open-popup").click(function() {
			var nom_batiment = $(this).attr("nom_batiment");
			var emplacement = $(this).attr("emplacement");

			if (nom_batiment == "A construire") {
				$.ajax({
					type:"POST",
					data: "emplacement="+emplacement,
					url:"{{WEBROOT}}bataille/popup_listebatiments",
					success: function(data){
						$("#popup-base #ajax").append(data);
					}, error: function(){

					}
				});
			}
			else {
				$.ajax({
					type:"POST",
					data: "nom_batiment="+nom_batiment+"&emplacement="+emplacement,
					url:"{{WEBROOT}}bataille/popup_unbatiment",
					success: function(data){
						$("#popup-base #ajax").append(data);
					}, error: function(){

					}
				});
			}
		});

		$(".popup .annuler").click(function() {
			$("#popup-base #ajax").empty();
		});
	});
</script>