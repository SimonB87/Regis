<div id="table-event-revenue" class="col-12 hidden"> 
  <h3>Event revenue estimates</h3>
  <div class="padding-small"> <button id="recount-revenue-data" type="button" class="btn btn-primary" onclick="recountRevenueData();"> Recount </button> </div>
  <table class="table-event-data">
    <thead class="bg-success text-white">
      <tr>
        <th>Ticket type kind</th>
        <th>Number of attendees</th>
        <th>Total ticket type revenue</th>
      </tr>
    </thead>

    <tbody id="table-event-data-body" >
      <tr id="earlybirds-info">
        <td>Early Birds Registration</td>
        <td> <span id="earlybirds-people"> </span> </td>
        <td> <span id="earlybirds-money"> </span> ,- CZK </td>
      </tr>
      <tr id="regular-info">
        <td>Regular Registration</td>
        <td> <span id="regular-people"> </span> </td>
        <td> <span id="regular-money"> </span> ,- CZK </td>
      </tr>
      <tr id="party-info">
        <td>Party Pass</td>
        <td> <span id="party-people"> </span> </td>
        <td> <span id="party-money"> </span> ,- CZK </td>
      </tr>
      <tr id="special1-info">
        <td>Special type 1 </td>
        <td> <span id="special1-people"> </span> </td>
        <td> <span id="special1-money"> </span> ,- CZK </td>
      </tr>
      <tr id="special2-info">
        <td>Special type 2</td>
        <td> <span id="special2-people"> </span> </td>
        <td> <span id="special2-money"> </span> ,- CZK </td>
      </tr>
    </tbody>
    <tfoot class="bg-success text-white">
      <tr>
        <td>Summary</td>
        <td> <span id="summary-people"> </span> of people </td>
        <td> <span id="summary-money"> </span> ,- CZK </td>
      </tr>
  </tfoot>

  </table>

</div>