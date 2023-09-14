import 'leaflet/dist/leaflet.css';
import L from 'leaflet';

export class MapClass {
    constructor(mapID, latitude, longitude, zoom, markerData) {
      this.mapID = mapID;
      this.latitude = latitude; // Fix the parameter name here
      this.longitude = longitude;
      this.zoom = zoom;
      this.markerData = markerData;

      this.launcherMap();
    }

    launcherMap() {
      this.map = L.map(this.mapID).setView(
        [this.latitude, this.longitude],
        this.zoom
      );
      const popupContent = `
        <div>
          <img src="${this.markerData.imageUrl}" alt="Cover Image" style="width: 100px; height: auto;">
          <p>Phone Number: ${this.markerData.phoneNumber}</p>
          <p>Address: ${this.markerData.address}</p>
        </div>
      `;

      this.marker = L.marker([this.latitude, this.longitude])
        .addTo(this.map)
        .bindPopup(popupContent);

      L.tileLayer(
        "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}",
        {
          attribution:
            'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
          maxZoom: 18,
          id: "mapbox/streets-v11",
          tileSize: 512,
          zoomOffset: -1,
          accessToken:
            "pk.eyJ1IjoiYXBvaWxsb3QiLCJhIjoiY2wxMWQyN2FkMDRzYTNkcnNiN2FoY3Y3ayJ9.fxyMi9iHMikOsclv9-x_vw",
        }
      ).addTo(this.map);
    }
}
