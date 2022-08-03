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
| Admin can log in and see admin section, others can not                                                                                       |    P:two:     |                      :o: |
| There are 2 accounts for admin and 2 accounts for readers                                                                                    |    P:two:     |                      :o: |
| There is restoration of forgotten password by using admin email                                                                              |    P:two:     |                      :o: |
| Admin can edit details of a registration                                                                                                     |    P:two:     |                      :o: |
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
| Case - registration transfer : Description 1 ...                                                                                             |   P:three:    |                      :o: |
| Admin can get list of email adresses by type (current event registration - all/paid/waiting for payment/delayed)                             |   P:three:    |                      :o: |
| Admin can put a admin-note to a registration - like transfered registration from last cancelled original event                               |   P:three:    |                      :o: |
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
| Side Bar Fce - ukázat sekci s info textem o akci s očekávanými tržbami celkem a v jednotlivých kategoriích                                   |   P:muscle:   |                      :o: |
| Side Bar Fce - ukázat sekci nápovědy pro usera                                                                                               |   P:muscle:   |                      :o: |
| Side Bar Fce - ukázat link na user manuál                                                                                                    |   P:muscle:   |                      :o: |

## Moje poznámky

- vymyslet název :-) : www.registo.cz , www.regis.events ,
- ! při každém pokusu při uložené do DB poslat vývojáří email o chybě
- databázové sloupečky pro "Agreements options" sekci
- scripty pro ukládání a aktualizaci pro "Agreements options"

- ukládání emoticonů do dtabáze v části : Event Description

- user sekce po přihlášení - možnost změnit heslo
- na login formu zprovoznit notifikace na špatný login - login handler nadále musí být na vrchu aplikace
- Ukládát plně české znaky pro jména
- Register user formulář podle Bootstrapu

## Descriptions

- Description 1 : děla uživatel sám z emailu do 48hodin před začátkem akce pře email, kde má potvrzení o platbě. Klient dostane potvrzení mailem admin. K registraci se přidá system-note o transferu

## Form validation
- form validation video : https://www.youtube.com/watch?v=rsd4FNGTRBw

## hlavní funkcionalita - dodělávky

- BUGFIX - v úpravě description použít dynamické odkazy na obrázky emotikonů
- !!! BUGFIX - ! opravit enabled sections - když je tam sekce 2 disabled a obsahuje uvnitř texty (situace rozpor create a edit ! )
- !!! Kontrolovat - FEATURE - počítat zvlášť leader / follower lístky v jednotlivých kategoriích - což znamená i zamezit tomu, aby na akci bylo víc chlapů/ženských
- !!! FEATURE - když user objednává lístek tak se dynamicky dotázat do databíze zda je tento lístek k dispozici - potíže při prodeje posledního lístku ; pokud jsou lístky již vyprodané, tak si uživatel dostane na waiting list 
- ! Feature - při úpravě řádku registrace poslat dotaz na řádek a rehreshnout data řádku v tabulce
- Zakázkový bod - 10. - Pokud dojde ke změně uložené registrace , uloží se změna do databáze a odešle se notifikace pořadateli a notifikace účastníkovi.
- Zakázkový bod - 11. - Pořadatel může zaslat automaticky upomínku pro zaplacení tím, že stiskne tlačítko „urgovat platbu“ v tabulce s registracemi. Následně se otevře nové okno, kde může upravit text odpovědi.

### Nice to have

- FEATURE - když jsou lístky, které chci pryč, tak zákazník může vyplnit krátký formulář, kde bude emailem notifikován, pokud se objevily nové lístky pro danou jednu událost ( zákazník zde vyplní své údaje, kontakt a o jaký typ lístku má zájem ) ; Admin pak bude mít k události ještě plnící se waiting list
- REFACTOR - vyřadit couple tiskets enabled - místo toho dát do kategorie - počet 0
