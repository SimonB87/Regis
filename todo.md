# Seznam funkcionalit

| Project item                                                                                                                                 | Project phase |                   Status |
| -------------------------------------------------------------------------------------------------------------------------------------------- | :-----------: | -----------------------: |
| Web app is fully responsive                                                                                                                  |    P:one:     |       :heavy_check_mark: |
| Form can be filled and send                                                                                                                  |    P:one:     |       :heavy_check_mark: |
| Form is fully validated on the client side                                                                                                   |    P:one:     |       :heavy_check_mark: |
| Admin and customer gets notifying email with payment request                                                                                 |    P:one:     |       :heavy_check_mark: |
| Form data are stored into database                                                                                                           |    P:one:     |       :heavy_check_mark: |
| Event organizer can run registration for one event at a time                                                                                 |    P:one:     |       :heavy_check_mark: |
| Place interim app on event organizer test environment                                                                                        |    P:one:     | :hourglass_flowing_sand: |
|                                                                                                                                              |               |                          |
| X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X                                                  | X xxx X xxx X |                  X xxx X |
|                                                                                                                                              |               |                          |
| Admin sees all registration in a table                                                                                                       |    P:two:     |       :heavy_check_mark: |
| Only logged in users see all registration in a table                                                                                         |    P:two:     |       :heavy_check_mark: |
| There is a employee log in of users functionality                                                                                            |    P:two:     |                      :o: |
| Admin gets after registration a confirmation email                                                                                           |    P:two:     |                      :o: |
| Forgotten password renewal by email                                                                                                          |    P:two:     |                      :o: |
| Admin can log in and see admin section, others can not                                                                                       |    P:two:     |                      :o: |
| There are 2 accounts for admin and 2 accounts for readers                                                                                    |    P:two:     |                      :o: |
| There is restoration of forgotten password                                                                                                   |    P:two:     |                      :o: |
| Admin can edit details of a registration                                                                                                     |    P:two:     |                      :o: |
| Create/Edit event form has JS dynamic info section before submit, what is the total amount of people there are tickets and the Total revenue |    P:two:     |                      :o: |
| Create/Edit event form has in each JS dynamic info section, for how many people there are tickets and what is the Total revenue              |    P:two:     |                      :o: |
|                                                                                                                                              |               |                          |
| X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X xxx X                                                  | X xxx X xxx X |                  X xxx X |
|                                                                                                                                              |               |                          |
| Admin can send an automatic reminder to send the money by selection an option inside the table of orders                                     |   P:three:    |                      :o: |
| Developer - zaslání dotazu na moji domácí doménu s dotazem, jestli je licence dané instance validní a zaplacená                              |   P:three:    |                      :o: |
| Admin can send edit the event description, event name and event poster                                                                       |   P:three:    |             :point_left: |
| Admin can edit event pass prices                                                                                                             |   P:three:    |             :point_left: |
| Admin can set, which inputs are visible and which are not                                                                                    |   P:three:    |             :point_left: |
| Admin can set, possible pass options and their prices                                                                                        |   P:three:    |             :point_left: |
| Server fully validates price according to the stored options in database                                                                     |   P:three:    |                      :o: |
| Registration auto close : If event end passed by (triggered by only user visit); If all tickets are sold (triggered by last registration)    |   P:three:    |                      :o: |
| Admin can choose from events table, which event is the current one. In this way all other events will become closed                          |   P:three:    |                      :o: |
| Only allowed form elements appear in browser                                                                                                 |   P:three:    |                      :o: |
| Google analytics                                                                                                                             |   P:three:    |                      :o: |
| Payment confirmation - by status switch on every reservation - ? user receives just email? jpeg tickets? pdf ticket?                         |   P:three:    |                      :o: |
| Admin can edit in setiings the contact email, link to main website, contact phone number                                                     |   P:three:    |                      :o: |
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
