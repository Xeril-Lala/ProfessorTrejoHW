      let maps;

      function initMap() {
		  
		//var place = { lat: 48.85900536217635, lng: 2.2926144809384033 }
		//Torre Eifel
		//43.72309929783309, 10.396543354033707
		//Torre de pisa
		
		var place = { lat: 43.72309929783309, lng: 10.396543354033707 }
        maps = new google.maps.Map(document.getElementById("map"), {
          center: place,
          zoom: 10,
        });
		var punto = new google.maps.Marker({
			
			position: place,
			map: maps
			
		}
		);
      }
