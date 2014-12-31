/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
var app = {
    // Application Constructor
    initialize: function() {
        this.bindEvents();
    },
    // Bind Event Listeners
    //
    // Bind any events that are required on startup. Common events are:
    // 'load', 'deviceready', 'offline', and 'online'.
    bindEvents: function() {
        document.addEventListener('deviceready', this.onDeviceReady, false);
    },
    // deviceready Event Handler
    //
    // The scope of 'this' is the event. In order to call the 'receivedEvent'
    // function, we must explicitly call 'app.receivedEvent(...);'
    onDeviceReady: function() {
        app.receivedEvent('deviceready');
    },
    // Update DOM on a Received Event
    receivedEvent: function(id) {
        var parentElement = document.getElementById(id);
        var listeningElement = parentElement.querySelector('.listening');
        var receivedElement = parentElement.querySelector('.received');

        listeningElement.setAttribute('style', 'display:none;');
        receivedElement.setAttribute('style', 'display:block;');

        console.log('Received Event: ' + id);
    }
};

/// Get location ///

var lat = 0;
var lng = 0;
//A button click will call this function
function getLocation() {
    navigator.geolocation.getCurrentPosition(onSuccess, onError, { enableHighAccuracy: true });
}

// onSuccess Geolocation
//
function onSuccess(position) {
    //Lat long will be fetched and stored in session variables
    //These variables will be used while storing data in local database 
    lat = position.coords.latitude;
    lng = position.coords.longitude;
    alert('Lattitude: ' + lat + ' Longitude: ' + lng);
    sessionStorage.setItem('Latitude', lat);
    sessionStorage.setItem('Longitude', lng);
}
// onError Callback receives a PositionError object
//
function onError(error) {
    alert('code: ' + error.code + '\n' +
          'message: ' + error.message + '\n');
}

/// Parte sensor Compass ///

document.addEventListener("deviceready", onDeviceReady, false);

var watchId = null;

function onDeviceReady() {
    startWatch();
}

// start watching
function startWatch() {
	var options = null;
		options = {
			frequency : 100
		};

		watchId = navigator.compass.watchHeading(function(heading) {
			var rotation = (360 - Math.round(heading.magneticHeading)) + "deg";

			$("#txtHeading").attr("value", heading.magneticHeading);
			$("#imgCompass").css("-webkit-transform",
					"rotate(" + rotation + ")");
		}, function(error) {
			console.log("Error");
		}, options);
}

//Stop watching the compass
function stopWatch() {
    if (watchId) {
        navigator.compass.clearWatch(watchId);
        watchId = null;
    }
}

// / Parte Captura de fotos ///

var pictureSource;
// picture source
var destinationType;
// sets the format of returned value
// Wait for PhoneGap to connect with the device
//
document.addEventListener("deviceready", onDeviceReady, false);
// PhoneGap is ready to be used!
//
function onDeviceReady() {
	pictureSource = navigator.camera.PictureSourceType;
	destinationType = navigator.camera.DestinationType;
}

function capturarFoto() {
	navigator.camera.getPicture(onPhotoSuccess, onPhotoFail, {
		quality : 100,
		destinationType : Camera.DestinationType.FILE_URI,
		targetWidth : 338,
		targetHeight : 450,
		saveToPhotoAlbum : false
	});
}

function onPhotoSuccess(imageData) {
	// Get image handle
	console.log(JSON.stringify(imageData));
	// Get image handle
	//
	var smallImage = document.getElementById('imageCamara');
	// Unhide image elements
	//
	smallImage.style.display = 'block';
	// Show the captured photo
	// The inline CSS rules are used to resize the image
	//
	smallImage.src = imageData;
}
// Called if something bad happens.
//
function onPhotoFail(message) {
	alert('No ha sacado ninguna foto.');
}

// / Parte Vibración ///

function vibrarMovil() {
	navigator.vibrate([ 100000 ]);
	var parentElem = document.getElementById('imgVibrar');
	imgVibrar.src = "images/asustado.jpg";
}

function pararVibracion() {
	navigator.vibrate([ 0 ]);
	var parentElem = document.getElementById('imgVibrar');
	imgVibrar.src = "images/normal.jpg";
}

// / Parte Geolocalización ///

var onGeoSuccess = function(position) {
	var Elem = document.getElementById('geoPos');
	Elem.innerHTML = 'Latitud: ' + position.coords.latitude + '\n'
			+ 'Longitud: ' + position.coords.longitude + '\n';
};

// onError Callback receives a PositionError object
//
function onGeoError(error) {
	alert('codigo: ' + error.code + '\n' + 'mensage: ' + error.message + '\n');
}

function obtenerPosicion() {
	navigator.geolocation.getCurrentPosition(onGeoSuccess, onGeoError);

	var defaultLatLng = new google.maps.LatLng(28.291564, -16.62913);
	if (navigator.geolocation) {
		function success(pos) {
			// Location found, show map with these coordinates
			drawMap(new google.maps.LatLng(pos.coords.latitude,
					pos.coords.longitude));
		}

		function fail(error) {
			drawMap(defaultLatLng);
			// Failed to find location, show default map
		}

		// Find the users current position. Cache the location for 5 minutes,
		// timeout after 6 seconds
		navigator.geolocation.getCurrentPosition(success, fail, {
			maximumAge : 500000,
			enableHighAccuracy : true,
			timeout : 6000
		});
	} else {
		drawMap(defaultLatLng);
		// No geolocation support, show default map
	}
	function drawMap(latlng) {
		var myOptions = {
			zoom : 10,
			center : latlng,
			mapTypeId : google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById("map-canvas"),
				myOptions);
		// Add an overlay to the map of current lat/lng
		var marker = new google.maps.Marker({
			position : latlng,
			map : map,
			title : "Greetings!"
		});
	}
}

// /


