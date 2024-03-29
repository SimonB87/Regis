# Seznam funkcionalit

| Project item                                                                                                                                 | Project phase |                   Status |
| -------------------------------------------------------------------------------------------------------------------------------------------- | :-----------: | -----------------------: |
| Web app is fully responsive                                                                                                                  |    P:one:     |       :heavy_check_mark: |
| Form can be filled and send                                                                                                                  |    P:one:     |       :heavy_check_mark: |
| Form is fully validated on the client side                                                                                                   |    P:one:     |       :heavy_check_mark: |
| Admin and customer gets notifying email with payment request                                                                                 |    P:one:     |       :heavy_check_mark: |
| Form data are stored into database                                                                                                           |    P:one:     |       :heavy_check_mark: |
| Event organizer can run registration for one event at a time                                                                                 |    P:one:     |       :heavy_check_mark: |
| Place the web app on client test environment                                                                                                 |    P:one:     | :hourglass_flowing_sand: |
|                                                                                                                                              |               |                          |
| X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X                                                  | X xxx X xxx X |                  X xxx X |
|                                                                                                                                              |               |                          |
| Admin sees all registration in a table                                                                                                       |    P:two:     |       :heavy_check_mark: |
| Only logged in users see all registration in a table                                                                                         |    P:two:     |       :heavy_check_mark: |
| There is a employee log in of users functionality                                                                                            |    P:two:     |                      :o: |
| Admin gets after registration a confirmation email                                                                                           |    P:two:     |       :heavy_check_mark: |
| Admin can log in and see admin section, others can not                                                                                       |    P:two:     |       :heavy_check_mark: |
| There are 2 accounts for admin and 2 accounts for readers                                                                                    |    P:two:     |                      :o: |
| There is restoration of forgotten password by using admin email                                                                              |    P:two:     |                      :o: |
| Admin can edit details of a registration                                                                                                     |    P:two:     |       :heavy_check_mark: |
| Create/Edit event form has JS dynamic info section before submit, what is the total amount of people there are tickets and the Total revenue |    P:two:     |       :heavy_check_mark: |
|                                                                                                                                              |               |                          |
| X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X                                                  | X xxx X xxx X |                  X xxx X |
|                                                                                                                                              |               |                          |
| Admin can send an automatic reminder to send the money by selection an option inside the table of orders                                     |   P:three:    |                      :o: |
| Developer - if client has only a year licence, then check, if the client paid for the licence                                                |   P:three:    |                      :o: |
| Admin can send edit the event description, event name and event poster                                                                       |   P:three:    |       :heavy_check_mark: |
| Admin can edit event pass prices                                                                                                             |   P:three:    |       :heavy_check_mark: |
| Admin can set, which inputs are visible and which are not                                                                                    |   P:three:    |       :heavy_check_mark: |
| Admin can set, possible pass options and their prices                                                                                        |   P:three:    |       :heavy_check_mark: |
| Server fully validates price according to the stored options in database                                                                     |   P:three:    | :hourglass_flowing_sand: |
| Registration auto close : If event end passed by (triggered by only user visit); If all tickets are sold (triggered by last registration)    |   P:three:    | :hourglass_flowing_sand: |
| Admin can choose from events table, which event is the current one. In this way all other events will become closed                          |   P:three:    |       :heavy_check_mark: |
| Only allowed form elements appear in browser                                                                                                 |   P:three:    |       :heavy_check_mark: |
| Google analytics                                                                                                                             |   P:three:    |                      :o: |
| Payment confirmation - by status switch on every reservation - ? user receives just email?                                                   |   P:three:    | :hourglass_flowing_sand: |
| Admin can edit in settings the contact email, link to main website, contact phone number                                                     |   P:three:    |                      :o: |
| Case - registration transfer of already paid ticket                                                                                          |   P:three:    |                      :o: |
| Admin can get list of data export of registrations by event ID in CSV file                                                                   |   P:three:    |       :heavy_check_mark: |
| Admin can put a admin-note to a registration - like transfered registration from last cancelled original event                               |   P:three:    |                      ??? |
|                                                                                                                                              |               |                          |
| X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X                                                  | X xxx X xxx X |                  X xxx X |
|                                                                                                                                              |               |                          |
| Promo-code option and evaluation                                                                                                             |   P:muscle:   |                      :o: |
| Statistics and evaluations of tickets sales                                                                                                  |   P:muscle:   |                      :o: |
| Payment system - payments with cards                                                                                                         |   P:muscle:   |                      :o: |
| Control of multiple log-in attempts - after 10 attempts user can not log in for 30 minutes                                                   |   P:muscle:   |                      :o: |
| Case - event cancellation : generate cancellation email                                                                                      |   P:muscle:   |                      :o: |
| Case - event cancellation : in cancelation email user options - button for refund option, button for reschedule option                       |   P:muscle:   |                      :o: |
| Case - copy a new event from old events table (condition - all events must be closed or passed)                                              |   P:muscle:   |                      :o: |
| Side Bar Fce - ukázat sekci s info textem o akci s očekávanými tržbami celkem a v jednotlivých kategoriích                                   |   P:muscle:   |       :heavy_check_mark: |
| Side Bar Fce - ukázat sekci nápovědy pro usera                                                                                               |   P:muscle:   |                      :o: |
| Side Bar Fce - ukázat link na user manuál                                                                                                    |   P:muscle:   |                      :o: |

## Moje poznámky

- vymyslet název :-) : www.registo.cz , www.regis.events ,
- ! při každém pokusu při uložené do DB poslat vývojáří email o chybě


## Požadavky od Mariana 1
 [ok] z registrace udalosti vyhodit pryž telefon a zemi původu zákazníka
 [ok] opravit tlačítka na "register now" na stránce registračního formulaře
 [ok] dodat do emailů text - zaplaťe do 7 dnů od Vaší registrace
 [ok] změnit nadpis "past event data" na "all events data"
 [ok] rozchodi aplikaci na serveru
 [ok] založit databaze provoz a test
 - administrace


### Administrace
 [ok] na veřejné části webu nastavit "maintenance mode"
 [ok] menit prava vsech registrovanych useru
 [ok] menit polozky menu hlavni stranky
 [__] menit platebni udaje - a ty zobrazovat v processform page a v mailech
 [__] menit texty v emailech - a ty zobrazovat v mailech
 [ok] menit odkazy v paticce vcetne social media, emailu a telenonu
 [ok] změnit email admina


## Hlavní funkcionalita - dodělávky

- 1) FEATURE - když user objednává lístek tak se dynamicky dotázat do databíze zda je tento lístek k dispozici - potíže při prodeje posledního lístku ; pokud jsou lístky již vyprodané, tak si uživatel dostane na waiting list 

      I) dostat z post requestu data

      II) kontrola jestli je pro vent registrace vůbec otevřena
      * ano : pokračovat na krkok 2
      * ne : obrazovka "Registrace není možná. Zkuste se registrovat znovu později"

      III) zkontrolovat jestli pro a) ticket-option a b) eventulně other-ticket-options
      - jsou lístky v prodeji s ohledme na datum
      - existují ještě neprosané lístky
      * ano : pokračovat na krkok 3
      * ne : obrazovka "Registrace není možná. Zkuste se registrovat znovu později"

      IV) úspěšná registrace
      - ukázat info o registraci 
      - zaslat zákazníkovi a adminovi emaily

- 2) Mit moznost promazat vybrane poster obrazky z nahranych

- 3) Dodat možnost vložit dokumenty/texty pro "Therms of service" a "GDPR"

- 4) send email on cancellation to customer

- 5) FEATURE - Zakázkový bod - 10. - Pokud dojde ke změně uložené registrace , uloží se změna do databáze a odešle se notifikace pořadateli a notifikace účastníkovi.

- 6) Google analytics


- Check - když není žádná akce, tak na obrazovce je info, že všechny akce již proběhly

- ! Pokud admin mění payment option, tak se ho dotázat v modálním okně, že souhlasí - to chce založit nové modální okno a pořešit dotaz.
- BUGFIX - v úpravě description použít dynamické odkazy na obrázky emotikonů
- !! BUGFIX - ! opravit enabled sections - eventuelně vyhodit pryč ten JS / když je tam sekce 2 disabled a obsahuje uvnitř texty (situace rozpor create a edit ! )
- ! Feature - při úpravě řádku registrace poslat dotaz na řádek a rehreshnout data řádku v tabulce
- !! BUGFIX - registration form - summarized price is not populalating in input in Mozilla Firefox
- !! V Modálním okně na úpravu registrace chybí jméno pro nevybraný druh "Other Ticket Option"

- remove functionality for showing copy icons, remove copy functionality
- user sekce po přihlášení - možnost změnit heslo
- k agreement options dodat možnost přidat 


### Nice to have

- FEATURE - how many tickets are left for sale in each ticket category
- FEATURE - když jsou lístky, které chci pryč, tak zákazník může vyplnit krátký formulář, kde bude emailem notifikován, pokud se objevily nové lístky pro danou jednu událost ( zákazník zde vyplní své údaje, kontakt a o jaký typ lístku má zájem ) ; Admin pak bude mít k události ještě plnící se waiting list
- REFACTOR - vyřadit couple tiskets enabled - místo toho dát do kategorie - počet 0
- process form data - disallow reposting registration form on refresh of the page : https://stackoverflow.com/questions/2666882/how-to-avoid-resending-data-on-refresh-in-php
- form validation video : https://www.youtube.com/watch?v=rsd4FNGTRBw
- přepsat všechny různé notifikace na bootstrap alerty - https://getbootstrap.com/docs/5.2/components/alerts/
- povolit odeslání registraci jen a pouze pokud uživatel odsouhlasí terms of service - jinak je tlačítko disabled - a na stránce je link na therms of service
