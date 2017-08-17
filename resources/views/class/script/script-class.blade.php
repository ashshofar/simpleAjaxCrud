<script>

	//Generate dataTable
 	var classTable = $('#class-Table').DataTable({
	    "order": [[ 0, "asc" ]],
	    "columns": [
	    {
	    	"title"	: "No",
	    	"width": "5%",
	    	render	: function (data, type, row, meta) {
		        return meta.row + meta.settings._iDisplayStart + 1;
		    }
	    },{
	        "title"	: "Name",
	        "data"	: "name"
	    },{
	    	"title"	: "Action",
	    	"data"	: null,
	    	"width": "20%",
	        defaultContent: "</button><button class='btn btn-danger' id='deleteButton' ><i class='fa fa-trash'></i></button>"	    	
	    }]
	});

	function getDataTableClass(){
	    $.ajax({
	            url: '{{ route('api.class.get') }}',
	            type: "GET",
	            timeout: 30000,
	            dataType: "json",
	            success: function(logs) {
	                classTable.clear();
	                $.each(logs, function(index, value) {
	                    classTable.row.add(value);
	                });
	                classTable.draw();
	            },
	            error: function(jqXHR, textStatus, ex) {
	                console.log('Get Data Gagal');
	            }
	    }); 
	}

	//Delete Button dataTables
    $( "#class-table tbody" ).on('click','#deleteButton', function() {
        var tr 		= $(this).closest('tr');
        var data 	= classTable.row(tr).data();

        var id_row 	 = data.id;
        
        console.log(id_row);

        $.ajax({
            url: '{{ route('api.class.delete') }}', // Url to which the request is send
            type: "POST",             // Type of request to be send, called as method
            data: {
            	'id' : data.id
            }, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            cache: false,             // To unable request pages to be cached
            success: function(data)   // A function to be called if request succeeds
            {
            	showSwal('Success', 'Class has been deleted', 1);
            	clearForm();
				getDataTableClass();
            }
        });
    });

	function clearForm(){
		$( '#frmClass' ).each(function(){
		    this.reset();
		});
	}

	$('#refreshButton').click(function(){
		getDataTableClass();
	});

	$("#btnSubmit").click(function(event) {
        event.preventDefault();

        var data = new FormData($('#frmClass')[0]);

        var id = $('#id').val();

        var sendURL;
        if(id == ''){
            sendURL = '{{ route('api.class.save') }}'; 
        }else if(id != ''){
            sendURL = '{{ route('api.class.save') }}'; 
        }
        
        $.ajax({
            url: sendURL, // Url to which the request is send
            type: "POST",             // Type of request to be send, called as method
            data: data, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,        // To send DOMDocument or non processed data file it is set to false
            success: function(data)   // A function to be called if request succeeds
            {
            	showSwal('Success', 'Class has been saved', 1);
            	clearForm();
				getDataTableClass();
            }
        });
         
    });
	

	$(function(){
		getDataTableClass();
	});
</script>