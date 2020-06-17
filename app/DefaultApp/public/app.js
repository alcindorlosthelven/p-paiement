$("document").ready(function () {
    $('#ajax-loading').hide();
    $(".form-inscription").on("submit", function (e) {
        e.preventDefault();
        $('#ajax-loading').show();
        $.ajax({
            type: 'POST',
            url: "app/DefaultApp/traitements/client.php",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (reponse) {
                if(reponse.trim()=="ok"){
                    $(".message").html("<div class='alert alert-success'>Fait avec success</div>");
                    alert("fait avec success");
                    document.location.href="se-connecter";
                }else{
                    $(".message").html("<div class='alert alert-warning'>"+reponse+"</div>");
                }
                $('#ajax-loading').hide();
            }
        });

    });

    $(".form-sidentifier").on("submit", function (e) {
        e.preventDefault();
        $('#ajax-loading').show();
        $.ajax({
            type: 'POST',
            url: "app/DefaultApp/traitements/client.php",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (reponse) {
                if(reponse.trim()=="ok"){
                    document.location.reload(true);
                }else{
                    $(".message").html("<div class='alert alert-warning'>"+reponse+"</div>");
                }
                $('#ajax-loading').hide();
            }
        });

    });

})