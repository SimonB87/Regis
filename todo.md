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
| Side Bar Fce - uk??zat sekci s info textem o akci s o??ek??van??mi tr??bami celkem a v jednotliv??ch kategori??ch                                   |   P:muscle:   |                      :o: |
| Side Bar Fce - uk??zat sekci n??pov??dy pro usera                                                                                               |   P:muscle:   |                      :o: |
| Side Bar Fce - uk??zat link na user manu??l                                                                                                    |   P:muscle:   |                      :o: |

## Moje pozn??mky

- vymyslet n??zev :-) : www.registo.cz , www.regis.events ,
- ! p??i ka??d??m pokusu p??i ulo??en?? do DB poslat v??voj?????? email o chyb??
- datab??zov?? sloupe??ky pro "Agreements options" sekci
- scripty pro ukl??d??n?? a aktualizaci pro "Agreements options"

- ukl??d??n?? emoticon?? do dtab??ze v ????sti : Event Description

- user sekce po p??ihl????en?? - mo??nost zm??nit heslo
- na login formu zprovoznit notifikace na ??patn?? login - login handler nad??le mus?? b??t na vrchu aplikace
- Ukl??d??t pln?? ??esk?? znaky pro jm??na
- Register user formul???? podle Bootstrapu

## Descriptions

- Description 1 : d??la u??ivatel s??m z emailu do 48hodin p??ed za????tkem akce p??e email, kde m?? potvrzen?? o platb??. Klient dostane potvrzen?? mailem admin. K registraci se p??id?? system-note o transferu

## Form validation
- form validation video : https://www.youtube.com/watch?v=rsd4FNGTRBw

## hlavn?? funkcionalita - dod??l??vky

- ! FEATURE - v registrac??ch d??t mo??nost aby se zobrazovaly v??echny - jenom vybran?? akce (pro to pou????t url parameter ?eventId=01 )
- BUGFIX - v ??prav?? description pou????t dynamick?? odkazy na obr??zky emotikon??
- !!! BUGFIX - ! opravit enabled sections - kdy?? je tam sekce 2 disabled a obsahuje uvnit?? texty (situace rozpor create a edit ! )

- !!! upravit FEATURE - po????tat zvl?????? leader / follower l??stky v jednotliv??ch kategori??ch - co?? znamen?? i zamezit tomu, aby na akci bylo v??c chlap??/??ensk??ch
- !!! FEATURE - kdy?? user objedn??v?? l??stek tak se dynamicky dot??zat do datab??ze zda je tento l??stek k dispozici - pot????e p??i prodeje posledn??ho l??stku ; pokud jsou l??stky ji?? vyprodan??, tak si u??ivatel dostane na waiting list 
- ! FEATURE - Administrace registrac?? - Upravit registraci, aby admin mohl zm??nit ??daje o registraci - hlavn?? tedy info o tom, ??e platba byla realizov??na
- FEATURE - Administrace registrac?? - umo??nit automaticky p??ipom??nat, aby si u??ivatel?? koupili l??stek

### Nice to have

- FEATURE - kdy?? jsou l??stky, kter?? chci pry??, tak z??kazn??k m????e vyplnit kr??tk?? formul????, kde bude emailem notifikov??n, pokud se objevily nov?? l??stky pro danou jednu ud??lost ( z??kazn??k zde vypln?? sv?? ??daje, kontakt a o jak?? typ l??stku m?? z??jem ) ; Admin pak bude m??t k ud??losti je??t?? pln??c?? se waiting list
- REFACTOR - vy??adit couple tiskets enabled - m??sto toho d??t do kategorie - po??et 0
