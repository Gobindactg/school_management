<script>
    let divisionsData = [];
    $(document).ready(function() {
        let divisions = "";
        $.get("{{asset("api/division.json")}}",
            function(data) {
                divisionsData = data;
                for (let key in data) {
                    divisions += `<option value='${key}'>${data[key].en}</option>`;
                }
                $("#division_id").append(divisions);
            });
    });



    $("#division_id").change(function() {
        let division = $("#division_id").val();
        $("#district-area").html("<option>-- Select Your Division--</option>");
        var districts = "";
        // send an ajax request to server with this division
        for (let key in divisionsData[division].district) {
            districts += `<option value='${key}'>${divisionsData[division].district[key].en}</option>`;
        }
        $("#district-area").append(districts);
    })

    $("#district-area").change(function() {
        let division = $("#division_id").val();
        var district = $("#district-area").val();
        $("#upazila-area").html("<option>-- Select Your Upazila--</option>");
        var subdistricts = "";
        // send an ajax request to server with this division
        divisionsData[division].district[district].upazilla.forEach(element => {
            subdistricts += `<option value='${element.toLowerCase()}'>${element}</option>`;
        });
        $("#upazila-area").append(subdistricts);
    })



  //doughnut
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

  //line
    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
    type: 'line',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
        label: "Total Student Add Per Month",
        data: [0, 30, 50, 46, 60, 75, 90],
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


</script>

