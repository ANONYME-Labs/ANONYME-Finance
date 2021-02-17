var oTable="";
$(document).ready(function () {

    window.web3 = new Web3(ethereum);
    web3.eth.getAccounts(async function (error, result) {

        if(result.length > 0){
            
            myAccountAddress = result[0];

            var user_wallet = $("#login_user_wallet").val();
            if(user_wallet == ""){
                user_wallet = myAccountAddress;
            }
            console.log("user_wallet " + user_wallet);

            oTable = $('#tbl_pool_events').DataTable({
                //"dom": '<"top">rt<"bottom"flpi><"clear">', // Place pagination and Record filter to bottom
                "bStateSave": true, //
                "processing": true,
                "bPaginate": true,
                "serverSide": true,
                "bProcessing": true,
                "iDisplayLength": 10,
                "bServerSide": true,
                "sAjaxSource": "ajax/getAjaxPoolEvents.php",
                'bPaginate': true,
                "fnServerParams": function (aoData) {

                    var acolumns = this.fnSettings().aoColumns,
                        columns = [];

                    $.each(acolumns, function (i, item) {
                        columns.push(item.data);
                    });
                    aoData.push({name: 'columns', value: columns});
                    aoData.push( { "name": "user_wallet", "value": user_wallet } );
                },

                "columns": [
                    {"data": "gasPrice"},
                    {"data": "gasUsed"},
                    {"data": "transactionHash"},
                    {"data": "timeStamp"},
                ],

                "order": [[3, "desc"]],
                "lengthpool_events": [
                    [5,10, 25, 50, 100],
                    [5,10, 25, 50, 100]
                ],
            

                'fnServerData': function (sSource, aoData, fnCallback) {
                    $.ajax
                    ({
                        'dataType': 'json',
                        'type': 'POST',
                        'url': sSource,
                        'data': aoData,
                        'success': fnCallback
                    });
                },

                "fnDrawCallback": function () {
                    $(window).trigger('resize');
                },

                "columnDefs": [
                    {
                       "render": function (data, type, row) {
                            var st='<button onClick="removeLiquidity('+row.id+')"  type="button" class=" btn btn-xs btn-danger">Remove Liquidity</button>';
                            
                            return [st].join('');
                        },
                        "targets": $('#tbl_pool_events th#action').index(),
                        /*"orderable": false,
                        "searchable": false */                 
                    }
                ]
            });
            
            // ON CHANGE SEARCH FIELD REBUIT DATATABLE
            $('#search').on('click',function(evt){
                evt.preventDefault();
                oTable.fnDraw();
               
            });

            /*// ADDING CSS TO WIDGET DIV
            $('select[name=tbl_pool_events_length]').addClass('form-control');
            $('.dataTables_paginate').addClass('pagination pagination-md justify-content-center');
            $('.dataTables_paginate a').addClass('page-link');
            $('.paginate_button a').addClass('page-link');
            $('#widgent_content_teacher').css('padding-bottom','30px');
            $('#widgent_content_teacher').css('padding-top','none');
            //$('#tbl_pool_events_filter').css('display','none');
            $('#tbl_pool_events_filter input').addClass("form-control");*/

        }

    });
});

    

//filter option hide and show
$('#close_filter').click(function(){ 
   
    $('#frm_search_teacher').hide('slow');
    $('#close_filter').hide('slow');
    $('#open_filter').show('slow');
    oTable.fnDraw();        
});

$('#open_filter').click(function(){
    $('#frm_search_teacher').show('slow');
    $('#close_filter').show('slow');
    $('#open_filter').hide('slow'); 
    oTable.fnDraw();               
}); 
//clean filter
$('#clearFilter').click(function(){
    $('input[type=text]').val('');
    $(".hr_gender").val('');
    $(".status").val('');
    
}); 

    




