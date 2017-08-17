<script>

	//Generate dataTable
 	var classTable = $('#class-Table').DataTable({
	    "order": [[ 0, "asc" ]],
	    "columns": [
	    {
	        "title": "Name",
	        "data": "name"
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