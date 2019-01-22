$(document).ready(function() {

  $("#search").click(function() {
    event.preventDefault();
    console.log("click search");
    var licence = $('#licence').val();

    $.post("../files/includes/vehicletrace.php", {
        postlicence: licence
      },
      function(data) {
        console.log(data);
        // var lat = data.slice(0, 9);
        // var lng = data.slice(10, 19);
        var datarray = data.split("x");
        // The location tracing
        var tracepoint = {
          lat: parseFloat(datarray[0]),
          lng: parseFloat(datarray[1])
        };
        // The map, centered at Uluru
        var map = new google.maps.Map(
          document.getElementById('map'), {
            zoom: 14,
            center: tracepoint
          });
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({
          position: tracepoint,
          map: map
        });

      });




  })

});


//
// document.getElementById("search").addEventListener("click", function initMap() {
//   // The location of Uluru
//   var uluru = {
//     lat: -25.344,
//     lng: 131.036
//   };
//   // The map, centered at Uluru
//   var map = new google.maps.Map(
//     document.getElementById('map'), {
//       zoom: 4,
//       center: uluru
//     });
//   // The marker, positioned at Uluru
//   var marker = new google.maps.Marker({
//     position: uluru,
//     map: map
//   });
// });