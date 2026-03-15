// config.js
// This file centralizes the API URL so you only have to change it in one place!

// Since 'frontend' and 'backend' folders are hosted together 
// on the SAME server, we can simply use relative paths!
// This works perfectly when you clone the whole project into htdocs.
const API_BASE_URL = '../backend';

// If you ever separate the frontend and backend onto different servers,
// you can update this to the absolute URL instead:
// const API_BASE_URL = 'http://localhost/inventory_system';
