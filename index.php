<?php

  $arr = [
    [
      'domanda' => 'Come state implementando la recente decisione della Corte di giustizia dellUnione europea (CGUE) relativa al diritto alloblio?',
      'risposta' => 'La recente decisione della Corte di giustizia dell Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. '
    ],
    [
      'domanda' => 'Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?',
      'risposta' => 'Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.'
    ],
    [
      'domanda' => 'Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?',
      'risposta' => 'I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica.'
    ],
    [
      'domanda' => 'Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?',
      'risposta' => 'In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer.'
    ],
  ];

  $domanda = $arr['domanda'];
  $risposta = $arr['risposta'];

 ?>

 <div class="">

   <?php
    foreach ($arr as $single_qa) {
      echo $single_qa['domanda'] . "<br>" . $single_qa['risposta'] . "<hr>";
    }

    ?>

 </div>
