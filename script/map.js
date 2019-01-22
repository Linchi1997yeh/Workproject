$(document).ready(function() {

  $("#search").click(function() {
    event.preventDefault();
    console.log("click search");
    var licence = $('#licence').val();

    $.post("../Workproject/includes/vehicletrace.php", {
        postlicence: licence
      },
      function(data) {
        //parsing data into array of strings
        var datarray = data.split("x");
        // The map, centered at
        var tracepoint = {
          lat: parseFloat(datarray[1]),
          lng: parseFloat(datarray[2])
        };

        var map = new google.maps.Map(
          document.getElementById('map'), {
            zoom: 12,
            center: tracepoint
          });

        // Setting markers
        let numOfMarkers = parseInt(datarray[0]);
        for (var i = 1; i <= numOfMarkers; i++) {
          var myLatlng = new google.maps.LatLng(parseFloat(datarray[i * 2 - 1]), parseFloat(datarray[i * 2]));
          // let latpos = parseFloat(datarray[i * 2 - 1]);
          // let lgnpos = parseFloat(datarray[i * 2]);
          let mark = new google.maps.Marker({
            position: myLatlng,
            map: map,
            label: i.toString()
          });
        }
      });
  })
});