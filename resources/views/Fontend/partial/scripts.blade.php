
<script src="{{asset('assets/js/jquery-3.6.0.js')}}"></script>
    <script>
        $("#division_id").change(function(){
            var division = $("#division_id").val();
            $("#district-area").html("");
            var option = "";
        // send an ajax request to server with this division
            $.get( "http://localhost/School_Management/School_Management/public/get-districts/"+division, 
            
            function( data ) {
                data = JSON.parse(data);
                option2 = "<option>-- Select Your District--</option>"
                data.forEach(function(element){
                    
                    option += "<option value='"+ element.id +"'>"+ element.name +"</option>";
                })
                all =  option2+option
                $("#district-area").html(all);
                
                });
        })

      
   
          $("#district-area").change(function(){
            var district = $("#district-area").val();
            $("#upazila-area").html("");
            var option = "";
            // send an ajax request to server with this division
            $.get( "http://localhost/School_Management/School_Management/public/get-upazilas/"+district, 
            function( data ) {
                data1 = JSON.parse(data);
                option2 = "<option>-- Select Your Upazila--</option>"
                data1.forEach(function(element){
                   option += "<option value='"+ element.id +"'>"+ element.name +"</option>";
                })
                upazila = option2+option
                $("#upazila-area").html(upazila);
                });
        })
    </script>
