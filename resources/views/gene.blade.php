
                   <table id="table" class="striped highlight centered">
                    <thead style="background-color: #0aa6b6;">
                      <tr>
                        <th>Line</th>
                        <th>Level</th>
                        <th>associate</th>
                        <th>distributor</th>
                        <th>email</th>
                        <th>mobil_number</th>
                        <th>alternative</th>
                        <th>country</th>
                        <th></th>

                        <th></th>

                        <th></th>
                        
                        <th></th>
                      </tr>
                    </thead>

                    <tbody>
                       
                    </tbody>
                  </table>

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>       
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

       
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>




<script type="text/javascript">
      /*   $('#upline').DataTable({
            "searching": false,
            "ordering": false,
            "processing": true,
            "serverSide": true,
            
            "ajax": "genea",
            columns:[
              {data: 'Line'},
              {data: 'Level'},
              {data: 'associateid'},
              {data: 'associatename'},
              {data: 'Distributor_status'},
              {data: 'email'},
              {data: 'mobile_number'},
              {data: 'country'},
              {data: 'PinRank'},
              {data: 'PayRank'},
              {data: 'InactiveMonths'},
              {data: 'RenewalDate'},
            ],

            "language": {
                          "sProcessing":     "Processing...",
                          "sLengthMenu":     " _MENU_ ",
                          "sZeroRecords":    "No results found",
                          "sEmptyTable":     "Ningún dato disponible en esta tabla",
                          "sInfo":           "Showing records  _START_ of _END_ from a total of _TOTAL_ records",
                          "sInfoEmpty":      "Showing records 0 of 0 from a total of 0 records",
                          "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                          "sInfoPostFix":    "",
                          "sSearch":         "Search:",
                          "sUrl":            "",
                          "sInfoThousands":  ",",
                          "sLoadingRecords": "Loading Records...",
                          "oPaginate": {
                              "sFirst":    "First",
                              "sLast":     "Last",
                              "sNext":     "Next",
                              "sPrevious": "Previous"
                          },
                          "oAria": {
                              "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                              "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                          }
                      },
                        dom: 'Bfrtip',
                        buttons: [
                          {
                              extend:    'excelHtml5',
                              text:      'Excel',
                              titleAttr: 'Excel',
                              className: 'btn '
                          },
                          {
                              extend:    'csvHtml5',
                              text:      'CSV',
                              titleAttr: 'CSV',
                              className: 'btn '
                          },
                          {
                              extend:    'pdfHtml5',
                              text:      'PDF',
                              titleAttr: 'PDF',
                              className: 'btn '
                          },
                          {
                              extend:    'print',
                              text:      'Print',
                              titleAttr: 'Print',
                              className: 'btn '
                          }
                        ]
          });*/
    $(document).ready(function(){ 
      reloadReport();
    }); 
  function reloadReport(){

    // Clear and reload Table of report
    var idsponsor = 14960100;
    var period = 201909;

    var table = $('#table').DataTable({
        destroy: true,
        ajax: "reloadTab/?idsponsor=" + idsponsor + "&&period=" + period,
        deferRender: true,
        columns: [
            {
                data: null,
                className: "center",
                defaultContent: '<a href="javascript:void(0)" onclick="deleteRow(this.parentNode.parentNode.id)">' + 
                    '<img src="https://cdn0.iconfinder.com/data/icons/shift-symbol/32/Incorrect_Symbol-512.png" width="100%"/>' + 
                '</a>'
            },
            {data: 'Line'},
            {data: 'Level'},
            {data: 'associateid'},
            {data: 'associatename'},
            {data: 'Distributor_status'},
            {data: 'email'},
            {data: 'mobile_number'},
            {data: 'country'},
            {data: 'PinRank'},
            {data: 'PayRank'},
            {data: 'InactiveMonths'},
            {data: 'RenewalDate'},
        ],
        rowId: function(a) {
            return a.associateid;
        },
        select: true,
        dom: 'Bfrtip',
        lengthMenu: [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
        ],
        buttons: [
            'pageLength',
            {
                extend: 'print',
                text: 'Print Report',
                autoPrint: false,
                exportOptions: {
                    columns: ':visible',
                },
                customize: function (win) {
                    $(win.document.body).find('table').addClass('display').css('font-size', '9px');
                    $(win.document.body).find('tr:nth-child(odd) td').each(function(index){
                        $(this).css('background-color','#D0D0D0');
                    });
                    $(win.document.body).find('h1').css('text-align','center');
                }
            },
        ]
    });
}



</script>