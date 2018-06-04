---
Title: Contact Us
Author: Primoris Admin
Date: 30 December 2017
nav_name: contact
head: CONTACT
---

<div class="row">
  <div class="column medium-6">
    <h1>Contact Us</h1>
    Phone: (201) 722-1000<br>
    Fax: (201) 722-1001

(% contact:
    ethan@primorisacademy.org,
    name! "Full name",
    email! "Email address",
    tel "Phone",
    subject,
    message!
%)

  </div>
  <div class="column medium-6">
    <h1>Visit Us</h1>
    120 Washington Ave<br>
    Westwood, NJ 07675<br><br><br>
    <div id="map" style="width:100%;height:350px;"></div>
  </div>
</div>

<script>
  var drawMap = function(){
    var latlng = {lat: 40.9926178, lng: -74.0365862};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 13,
      center: latlng,
      streetViewControl: false,
      mapTypeControl: false,
      styles: [{
        "featureType": "landscape.natural.terrain",
        "stylers": [{ "visibility": "on" }]
      }]
    });
    var marker = new google.maps.Marker({
      position: latlng,
      map: map
    });
  }
</script>

<script async defer src="//maps.googleapis.com/maps/api/js?v=3&libraries=places&callback=drawMap&key=AIzaSyBQdch5IcgcQaKNG76sbMQv1MEBEKLeQ-8"></script>