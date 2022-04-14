
<script src="{{asset('Frontend/resources/js/jquery-3.6.0.js')}}"></script>
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
    
    $("#upazila-area").change(function(){
        var upazila = $("#upazila-area").val();
        $("#institution-area").html("");
        var option = "";
        // send an ajax request to server with this division
        $.get( "http://localhost/School_Management/School_Management/public/get-institution/"+upazila, 
        function( data ) {
            data1 = JSON.parse(data);
            option2 = "<option>-- Select Your Institution--</option>"
            data1.forEach(function(element){
               option += "<option value='"+ element.name +"'>"+ element.name +"</option>";
            })
            institution = option2+option
            $("#institution-area").html(institution);
            });
    })

  //doughnut
  if ($("#doughnutChart")[0]){
      var ctxD = document.getElementById("doughnutChart").getContext('2d');
      var myLineChart = new Chart(ctxD, {
          type: 'doughnut',
          data: {
          labels: ["Class One", "Class Two", "Class Three", "Class Four", "Class Five"],
          datasets: [{
              data: [200, 150, 100, 80, 120],
              backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
              hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
          }]
          },
          options: {
          responsive: true
          }
      });
}


if ($("#lineChart")[0]){
    //line
      var ctxL = document.getElementById("lineChart").getContext('2d');
      var myLineChart = new Chart(ctxL, {
      type: 'line',
      data: {
          labels: ["January", "February", "March", "April", "May", "June", "July", "August", "Septembar", "Octobar", "November", "December"],
          datasets: [{
          label: "Total Student Add Per Month",
          data: [0, 30, 50, 46, 60, 75, 90, 100, 85, 70, 77, 84],
          backgroundColor: [
              '#FFC107',
          ],
          borderColor: [
              'rgba(200, 99, 132, .7)',
          ],
          borderWidth: 2
          },
          ]
      },
      options: {
          responsive: true
      }
      });
}



</script>

