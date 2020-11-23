var fra;

function shuffle(a) {
    var j, x, i;
    for (i = a.length; i; i--) {
        j = Math.floor(Math.random() * i);
        x = a[i - 1];
        a[i - 1] = a[j];
        a[j] = x;
    }
}

function confronta(array1, array2) {
    a = array1.toString();
    b = array2.toString();
    console.log(a);
    console.log(b);
    if (a == b) {
        // indovinato la frase, inizia una nuova partita

        $(".giusto").css('display', 'block');
        //       var itm = "<div id='autore'>"+cit[1]+"</div>"

    } else {

        $("#risultato").append('');
        // $("#risultato").append('');
        $(".sbagliato").css('display', 'block');
    }
}

function inizia(fra) {
    $("#autore").remove();
    n_frasi = fra.length;
    //   alert(n_frasi);
    var numero = Math.floor(Math.random() * (n_frasi));

    console.log(fra);
    // alert(randomNumber);
    console.log(fra);
    esatta = fra[numero].split(" ");

    // seleziono gli elementi dell'array per una copia, copiare un array mantiene il riferimento con la vecchia e se la ordino ordina la vecchia
    var frase1 = esatta.slice(0);
    fra.splice(numero, 1);
    shuffle(frase1);
    // for (var k in frase1){
    //     alert("Key is " + k + ", value is" + frase1[k]);
    //   }
    for (x = 0; x < frase1.length; x++) {
        var itm = '<li class="ui-state-default" id="' + frase1[x] + '">' + frase1[x] + '</li>'
        $("#sortable").append(itm);
    }
}
$(document).ready(function() {
    $("#sortable").sortable({
        change: function(event, ui) {
            //  $( "#sortable" ).sortable( "refresh" );
            var sortedIDs = $("#sortable").sortable("toArray");
            $(".sbagliato").css('display', 'none');
            $(".giusto").css('display', 'none');
          //  console.log(sortedIDs);
        }
    });
    $("#sortable").disableSelection();
    $("#check").click(function() {
        var sortedIDs = $("#sortable").sortable("toArray");
        confronta(sortedIDs, esatta);
      //  console.log(sortedIDs);
    })
})
