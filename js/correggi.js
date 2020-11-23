function creaFrasi(frasi) {
    console.log(frasi);
    var z = /\[.+\]/;
    var zz = /\[(.+)\]/;
    // prende il numero tra le parentesi graffe
    //   var y=/\{\d+\}/;
    //  var yy=/\{(\d+)\}/;
    for (x = 0; x < frasi.length; x++) {
        var soluz = zz.exec(frasi[x]);
        var soluzione = soluz[1];
        console.log(parole);
        // alert(soluz);
        //   var regola=yy.exec(frasi[x]);
        var frase = frasi[x].replace(z, "");
        var parole = frase.split(" ");
        var parole_s = soluzione.split(" ");
        var parola = '';
        for (y = 0; y < parole.length; y++) {
            //   var frase = frase_vuota.replace(z, "<input class='ifrase' id='fra"+x+"' type='text' soluz='"+soluz[1]+"'></input>");
            var parola = parola + "<span class='parola' id='parola" + y + "' sol='" + parole_s[y] + "'>" + parole[y] + "</span>&nbsp;"
        }
        $("#frasi").append('<div class="frase" id="frase' + x + '" soluz="' + soluzione + '" >' + parola + '</div>');
    }
}

function cambiaParola(v) {
    txt = ($(v).text());
    // alert(txt);
    var $input = $('<input />').val(txt);
    $(v).replaceWith($input);
    var save = function() {
        var $span = $('<span class="parola" onclick="cambiaParola(this)" />').text($input.val());
        $input.replaceWith($span);
    };
    $input.one('blur', save).focus();
}
var regole;
var fra;
var reg;
var soluzione;

$(document).ready(function() {
    creaFrasi(fra);
    $(".parola").click(function() {
        txt = ($(this).text());
        var $input = $('<input id="' + this.id + '" />').val(txt);
        $(this).replaceWith($input);
        var save = function() {
            var $span = $('<span class="parola" onclick="cambiaParola(this)" />').text($input.val());
            $input.replaceWith($span);
        };
        $input.one('blur', save).focus();
    })
    $("#check").click(function() {
        // var regole="esserestare.json"
        $(".frase").removeClass("sbagliato");
        $(".frase").removeClass("giusto");
        $("i" ).remove();
        console.log(regole);
        $(".frase").each(function(i, val) {
            console.log(i);
            console.log(val);
            var testo = '';
            var soluz = $("#" + this.id).attr("soluz");
           
            // compone la frase da tutte le parole
            $("#" + this.id).children().each(function(i, val) {
                testo = testo + $(this).text() + " ";
                // toglie l'ultimo spazio dal testo
                // testo=testo.trim();
                console.log(val);
                console.log(i);
            });
            testo = testo.trim();
       
            if (testo == soluz) {
                $("#" + this.id).append('<i class="material-icons">thumb_up</i>');
                $("#" + this.id).addClass('giusto');
            } else {
                $("#" + this.id).append('<i class="material-icons">thumb_down</i>');
                $("#" + this.id).addClass('sbagliato');
                //$("#"+this.id).val(soluz);
                // $("#"+this.id+).append('<div>'+soluz+'</div>');
                // $( ".frase" ).replaceWith(risp);
            }
        });
        $.getJSON(regole, {
            format: "json"
        }).done(function(data) {
            listone = data;
            //  alert("ue");
            $.each(data, function(i, item) {
                // per ogni regola
                //   console.log(item.esempio);
                // guarda tutte le risposte con quella regola
                $(".regola" + item.id).each(function(i, val) {
                    //alert(this.id);
                    // se ha sbagliato aggiunge le informazioni
                    var sbagliato = $(this).hasClass("sbagliato");
                    if (sbagliato) {
                        // alert(item.regola);
                        // alert(i);
                        $(this).append(" <b>Regola:</b> " + item.regola + "<br/><i> Esempio " + item.esempio + "</i>");
                    }
                });
            });
        });
    });
});