import './bootstrap';
import { MapClass } from './map';

const markerData = {
    imageUrl: 'url.jpg',
    phoneNumber: '123-456-7890',
    address: '123 Main St, City',
  };

  const map = new MapClass("myMap",16.03303,-61.68925, 13,markerData);



