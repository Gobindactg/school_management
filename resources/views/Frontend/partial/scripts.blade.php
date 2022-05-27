<script src="{{ asset('Frontend/resources/js/jquery-3.6.0.js') }}"></script>
<script>
    $("#division_id").change(function() {
        var division = $("#division_id").val();
        $("#district-area").html("");
        $("#upazila-area").html("");
        var option = "";
        // send an ajax request to server with this division
        $.get(`{{ url('get-districts') }}/${division}`,

            function(data) {
                data = JSON.parse(data);
                option2 = "<option value='null'>-- Select Your District--</option>"
                data.forEach(function(element) {

                    option += "<option value='" + element.id + "'>" + element.name + "</option>";
                })
                all = option2 + option
                $("#district-area").html(all);

            });
    });

    $("#district-area").change(function() {
        var district = $("#district-area").val();
        $("#upazila-area").html("");
        var option = "";
        // send an ajax request to server with this division
        $.get(`{{ url('get-upazilas') }}/${district}`,
            function(data) {
                data1 = JSON.parse(data);
                option2 = "<option value='null'>-- Select Your Upazila--</option>"
                data1.forEach(function(element) {
                    option += "<option value='" + element.id + "'>" + element.name + "</option>";
                })
                upazila = option2 + option
                $("#upazila-area").html(upazila);
            });
    });

    $("#upazila-area").change(function() {
        var upazila = $("#upazila-area").val();
        $("#institution-area").html("");
        var option = "";
        // send an ajax request to server with this division
        $.get(`{{ url('get-institution') }}/${upazila}`,
            function(data) {
                data1 = JSON.parse(data);
                option2 = "<option>-- Select Your Institution--</option>"
                data1.forEach(function(element) {
                    option += "<option value='" + element.name + "'>" + element.name + "</option>";
                })
                institution = option2 + option
                $("#institution-area").html(institution);
            });
    });

    //doughnut



    if ($("#doughnutChart")[0]) {
        var five = Number(document.getElementById('classFive').innerHTML);
        var four = Number(document.getElementById('classFour').innerHTML);
        var three = Number(document.getElementById('classThree').innerHTML);
        var two = Number(document.getElementById('classTwo').innerHTML);
        var one = Number(document.getElementById('classOne').innerHTML);

        var ctxD = document.getElementById("doughnutChart").getContext('2d');
        var myLineChart = new Chart(ctxD, {
            type: 'doughnut',
            data: {
                labels: ["Class One", "Class Two", "Class Three", "Class Four", "Class Five"],
                datasets: [{
                    data: [one, two, three, four, five],
                    backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#2028A9", "#3FAE69"],
                    hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
                }]
            },
            options: {
                responsive: true
            }
        });
    }



    // use data table
</script>