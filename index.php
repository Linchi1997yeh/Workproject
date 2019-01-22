<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>interface</title>
    <link rel="stylesheet" href="script/ui.css">
  </head>
  <body>
    <!-- <form class="" action="form.php" method="post">
      car ID: <input type="text" name="carId">
      <input type="submit" value="submit">
    </form> -->
    <!-- <form class="" action="includes/signupForm.php" method="post">
      <button  type="submit" name="submit">Sign up</button>
    </form> -->
<!-- <form action="includes/vehicletrace.php" method="post"> -->
    vehicle licence: <input id="licence" type="text" name="licence" >
    <button  id="search" type="submit" name="submit">Search</button>
<!-- </form> -->

    <h3>Location</h3>
    <!--The div element for the map -->
    <div id="map"></div>



    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSdCghB-MbUisZRPdiHPmHMF2qat_TB04&callback=initMap">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="script/map.js"></script>

  </body>
</html>
