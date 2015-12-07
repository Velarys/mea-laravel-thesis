@extends('layouts/admin')



@section('content')

    <table id="patients" class="display" cellspacing="0" width="100%">
    </table>


@stop

@section('scripts')

    <script type="text/javascript">

        $(document).ready(function() {
            var table = $('#patients').DataTable( {
                "processing": true,
                "iDisplayLength" : 10,
                "ajax": {"url": '{{Request::url()}}/patientDatatable',
                          "beforeSend": function (xhr) {
                            var token = $('meta[name="csrf_token"]').attr('content');
                              
                            if (token) {
                                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                            }
                        },
                        "type": "POST"},
                
                "aoColumns": [{
				    "mData": "lastname",
				    "sTitle": "Last Name",
				    "sWidth": "20%"
				  },{
				    "mData": "firstname",
				    "sTitle": "First Name",
				    "sWidth": "20%"
				  },{
				    "mData": "updated_at",
				    "sTitle": "Latest Submitted Data",
				    "sWidth": "25%"
				  },{
					  "mData": "status",
				      "sTitle": "Patient Status",
				      "sWidth": "20%"
				  }],
                "aoColumnDefs" : [
                    { "aTargets": [ '_all' ], "bSortable": true },
                    {
                        "targets": 0,
                        fnCreatedCell: function(nTd, sData, oData, iRow, iCol) {
                            
                            
                        }
                    }]
            } );
            
            $('#patients tbody').on('click', 'tr', function(){
                
                var rowData = table.row(this).data();
            
                //console.log(rowData.firstname + ' ' + rowData.lastname);
                
                window.location.href = "{{Request::url()}}/patient/" + rowData.firstname + '_' + rowData.lastname;

            });

        } ); // end ready
        
        
    </script>

@stop