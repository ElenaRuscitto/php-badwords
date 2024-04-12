PHP Badwords
===
nome repo: php-badwords

Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.

Gestire il tutto con due file diversi:

1. Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.. 

2. Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
  - stampare a schermo il paragrafo e la sua lunghezza
  - stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare

## Svolgimento
1. creo la cartella con il nome della repo
2. creo/apro 2 fogli come da richiesta
3. nel primo foglio ("form_POST.html") predispongo un form con 2 input
4. nel secondo foglio ("pagina_atterraggio_form_POST.php") stampo un paragrafo (echo) e la sua lunghezza (strlen()) e stampo nuovamente il paragrafo e la sua lunghezza con la sostituzione di 3 *** della parola che voglio censurare (str_replace).