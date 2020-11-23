var fra;

$.fn.randomize = function(selector){
    var $elems = selector ? $(this).find(selector) : $(this).children(),
        $parents = $elems.parent();

    $parents.each(function(){
        $(this).children(selector).sort(function(){
            return Math.round(Math.random()) - 0.5;
        // }). remove().appendTo(this); // 2014-05-24: Removed `random` but leaving for reference. See notes under 'ANOTHER EDIT'
        }).detach().appendTo(this);
    });

    return this;
};

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
        //  alert("ok");
        $(".giusto").css('display', 'block');
        //       var itm = "<div id='autore'>"+cit[1]+"</div>"
        //   $("#risultato").append(itm);
    } else {
        //  alert("errore");
        $("#risultato").append('');
        // $("#risultato").append('');
        $(".sbagliato").css('display', 'block');
    }
}

function inizia(fra) {
  for (x=0;x<draggable.length;x++) {
    var itm = '<div valore="'+x+'">'+draggable[x]+'</div>'
    $("#draggable").append(itm);
  }
  for (x=0;x<droppable.length;x++) {
    var itm = '<div valore="'+x+'">'+droppable[x]+'</div>'
    $("#droppable").append(itm);
  }
}
$(document).ready(function() {
  inizia();
  $('#draggable').randomize('div');
  $( "#draggable div" ).draggable({cancel: "a.ui-icon", // clicking an icon won't initiate dragging
      revert: "invalid", // when not dropped, the item will revert back to its initial position
      containment: "document",
      helper: "clone",
      cursor: "move"});
  $( "#draggable").droppable({drop: function(event, ui) {   $(this).append(ui.draggable);}});
  $( "#droppable div" ).droppable({accept: "#draggable > div", drop: function( event, ui ) {
        console.log(ui);
        console.log(this);
        $(this).append(ui.draggable);
      }});

    $("#sortable").sortable({
        change: function(event, ui) {
            //  $( "#sortable" ).sortable( "refresh" );
            var sortedIDs = $("#sortable").sortable("toArray");
            $(".sbagliato").css('display', 'none');
            $(".giusto").css('display', 'none');
            console.log(sortedIDs);
        }
    });
    $("#sortable").disableSelection();
    $("#check").click(function() {
     $( "i" ).remove();
      $("#droppable>div").each(function() {
        $(this).removeClass('giusto');
        $(this).removeClass('sbagliato');
          var mioval=$( this ).attr("valore");

          var sottofiglio=$(this).children("div").attr("valore");
          if(mioval==sottofiglio) {
            $(this).append('<i class="material-icons">thumb_up</i>');
            $(this).addClass('giusto');
        } else {
            $(this).append('<i class="material-icons">thumb_down</i>');
            $(this).addClass('sbagliato');
          }
      });

    })
})
