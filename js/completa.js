// Esercizi //

function creaFrasi(frasi) {
   //  console.log(frasi);
    var z = /\[.+\]/;
    var zz = /\[(.+)\]/;
    // prende il numero tra le parentesi graffe
    var y = /\{\d+\}/;
    var yy = /\{(\d+)\}/;
    for (x = 0; x < frasi.length; x++) {
        var soluz = zz.exec(frasi[x]);
        // alert(soluz);
        var regola = yy.exec(frasi[x]);
        var frase_vuota = frasi[x].replace(y, "");
        var inputto = z.exec(frase_vuota);
        //  alert(inputto);
        // alert(frase);
        // alert(x);
        // se non esiste una regola mette 0
        if (!regola) {
            var reg = 0;
        } else {
            var reg = regola[1];
        }
        var frase = frase_vuota.replace(z, '<input class="ifrase" id="fra' + x + '" type="text" soluz="' + soluz[1] + '"></input>');
        $("#frasi").append("<div class='frase'>" + frase + "<div class='regole regola" + reg + "' id='fra" + x + "sol'></div></div>");
    }
}
var regole;
var fra;
var reg;
$(document).ready(function() {
    creaFrasi(fra);
    $("#check").click(function() {
        // var regole="esserestare.json"
        $(".regole").empty();
        $(".regole").removeClass("sbagliato");
        console.log(regole);
        $(".ifrase").each(function(i, val) {
            console.log(i);
            console.log(val);
            var soluz = $("#" + this.id).attr("soluz");
            var risp = $("#" + this.id).val().toLowerCase();

            if (risp == "") {
                risp = " ";
            } else {}
            if (soluz.toLowerCase() == risp) {
                $("#" + this.id + "sol").append('<i class="material-icons">thumb_up</i>');
                $("#" + this.id + "sol").addClass('giusto');
            } else {
                $("#" + this.id + "sol").append('<i class="material-icons">thumb_down</i>');
                $("#" + this.id + "sol").addClass('sbagliato');
                //$("#"+this.id).val(soluz);
                // $("#"+this.id+).append('<div>'+soluz+'</div>');
                // $( ".frase" ).replaceWith(risp);
            }
        });
        $.getJSON(regole, {
            format: "json"
        }).done(function(data) {
            listone = data;

            $.each(data, function(i, item) {
                // per ogni regola
                console.log(item.esempio);

                // guarda tutte le risposte con quella regola
                $(".regola" + item.id).each(function(i, val) {

                    // se ha sbagliato aggiunge le informazioni
                    var sbagliato = $(this).hasClass("sbagliato");
                    if (sbagliato) {
                        $(this).append(" <b>Regola:</b> " + item.regola + "<br/><i> Esempio " + item.esempio + "</i>");
                    }
                });
            });
        });
    });
});
