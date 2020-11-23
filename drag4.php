<?php
/**
 * Template Name: Page Frasi
 *  * 
 * @package Stivale 
 */

get_header(); ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Sortable - Display as grid</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0;  }
  #sortable li { margin: 3px 3px 3px 0; padding: 30px 0px; float: left; width: 100px; height: 30px; font-size: 1em; text-align: center; }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/frasi.js"></script>
  <script>
    

    
   
    
  $( function() {
    
 

 
 
 
 
    
    // partita è il numero di frase che viene scelta
    
    
    var partita=0;
      
      var array_fatte=[];
    
       var fra=[];
       fra[0]="La Bibbia insegna ad amare i nemici come gli amici, probabilmente perché sono gli stessi";
       fra[1]="Il prossimo è troppo occupato coi propri delitti per accorgersi dei nostri";
     fra[2]="Non mi sposo perché non mi piace avere della gente estranea in casa"
     fra[3]="Dove meno si sa, più si sospetta."
     fra[4]="Chi ha il coraggio di ridere è padrone del mondo."
     fra[5]="L'abuso e la disubbidienza alla legge non può essere impedita da nessuna legge.";
     fra[6]="La conoscenza degli effetti e l'ignoranza delle cause produsse l'astrologia.";
     fra[7]="Era un uomo così antipatico che dopo la sua morte i parenti chiesero il bis";
     fra[8]="Coraggio ce l'ho. È la paura che mi frega.";
     fra[9]="È sempre meglio un vigliacco vivo che un eroe morto, soprattutto se il vigliacco sono io";
     fra[10]="Quando un uomo con la pistola incontra un uomo col fucile, quello con la pistola è un uomo morto";
     fra[11]="Il mentitore dovrebbe tener presente che per essere creduto non bisogna dire che le menzogne necessarie.";
     fra[12]="A differenza delle altre malattie la vita è sempre mortale."
     fra[13]="Uno dei primi effetti della bellezza femminile su di un uomo è quello di levargli l'avarizia.";
      fra[14]="Qui si fa l'italia o si muore";
fra[15]="A parlare male degli altri si fa peccato, ma spesso si indovina.";
fra[16]="Non basta avere ragione: bisogna avere anche qualcuno che te la dia.";
fra[17]="Amo talmente tanto la Germania che ne preferivo due.";
fra[18]="Essere superstiziosi è da ignoranti, ma non esserlo porta male";
fra[19]="Ogni minuto muore un imbecille e ne nascono due";
fra[20]="La mia famiglia viveva in una tale miseria che quando finalmente siamo diventati poveri abbiamo fatto una festa";
fra[21]="La torre di Pisa... E se avesse ragione lei?";
fra[22]="Il mio ultimo spettacolo ha avuto talmente tanto successo che la gente faceva a pugni per uscire"
fra[23]="È un cretino illuminato da lampi di imbecillità";
fra[24]=" Quella ragazza mi ha detto: Vieni a casa mia, non c’è nessuno. Sono andato a casa sua e non c’era nessuno. ";
fra[25]="L’uomo è nato per soffrire, e ci riesce benissimo. ";
 fra[26]="Il professore di lingue morte si suicidò per parlare le lingue che sapeva";
 fra[27]="Quando ero piccolo mia nonna mi portò a mangiare in una trattoria all’aperto.Cominciò a piovere. Ci misi tre ore a finire il brodo. ";
 fra[28]="L’uomo è per natura un animale politico... tanto è vero che spesso l’uomo politico è una bestia.";
 fra[29]="Non sono misogino. La fidanzata, avessi il giardino, la terrei. ";
 fra[30]="Non faccio per vantarmi ma oggi è una bellissima giornata. ";
 fra[31]="La miglior vendetta è vendicarsi";
 fra[32]="Era uno che per sembrare un genio avrebbe dovuto essere completamente diverso";
 fra[34]="Per essere considerato un classico un film deve riuscire a far sbadigliare almeno tre generazioni di spettatori.";
fra[35]="Quando le candele sono spente, tutte le donne sono belle";
fra[36]="I cigni mettono continuamente la testa sott’acqua per l’ossessione di avere le scarpe slacciate";
fra[37]="È pericoloso fare il bagno prima che siano trascorse tre ore dall’aver mangiato dei funghi velenosi";
fra[38]="Fare l’amore con dieci donne è fantastico, soprattutto perché ti presentano un sacco di amiche. ";
fra[39]=" I vicini di casa sono le uniche spie disposte a prestarvi mezzo chilo di zucchero";
  fra[40]="Mia madre cucinava così male che la nostra pattumiera aveva l’ulcera";
  fra[41]="Vissero infelici perché costava meno";
  fra[42]="La virtù affascina, ma c'è sempre in noi la speranza di corromperla";
  fra[43]="Amo l'italia in tutte le sue orrendezze";
  fra[44]="E' Un toscanaccio...Per toscanaccio intendo colui il quale pur di non perdere (l'efficacia di) una battuta, perde un amico"
   //  "de Sica, flaiano, sordi, macchiavelli, leopardi, leopardi, toto, toto, toto, volonte', svevo, svevo, svevo, garibaldi, andreotti, andreotti, andreotti, de filippo, greggio (le formiche), walter valdi (le formiche), walter fontana, flaiano,  mario zucca, gervaso, longanesi, zucca,  alfredo chiappoli, walter fontana, giuseppe gioacchino belli, alberto Molinari,  beppe viola, marco ferreri, plutarco,  romano bertola, capanna, enzo costa, zucca, longanesi, longanesi"
     
    cit=[];
    cit[1]="Vittorio De Sica";
     
     
  
    inizia(fra);
    
    
  
    
  } );
  </script>
</head>
<body>
 <div id="stage" style="overflow:auto">
<ul id="sortable">

</ul>
</div>
<div id="check"> Check </div>
 
 <?php get_footer(); ?>
