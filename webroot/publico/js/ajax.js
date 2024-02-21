  //AJAX QUE PREENCHE A CIDADE DE ACORDO COM O ESTADO
  $(function(){
    $("#escolhaestado").on ("change", function(){
        //alert('oi');
        $("#escolhaestado").trigger("chosen:updated");

        var idEstado = $("#escolhaestado").val();
        $.ajax({
            containerCssClass: "customClass",
            
            url:'https://sitedc.clientetop.com.br/states/mostrarcidadesdoestado/'+idEstado,
            type:'get',
            beforeSend: function(){
                $("#progresspesquisa").fadeIn().css({'display':'block'});
            },
            success:function(data){
                $("#progresspesquisa").fadeOut().css({'display':'none'});
                $("#listacidades").html(data);
                $("#listacidades").trigger("chosen:updated");
            },
            error:function(data){
                $("#progresspesquisa").fadeOut().css({'display':'none'});
                $("#erroPesquisa").html('<div class="container alert alert-primary">Não consegui achar as cidades deste estado. Vamos tentar de novo? Escolha novamente seu estado. <i class="fa fa-smile"></i> <br> <span style="font-size:9px">Cód 0XX2</span></div>');
                $("#progresspesquisa").fadeOut().css({'display':'none'});

            }
        });
    });
});
  //FIM DO AJAX QUE PREENCHE A CIDADE DE ACORDO COM O ESTADO