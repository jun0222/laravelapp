import React from 'react';
import { createRoot } from 'react-dom/client';
import Hello from './components/Hello';

let container = document.getElementById('app');

if (!container) {
  console.error("Error: The container element with ID 'app' was not found in the DOM.");
  container = document.createElement('div');
  container.id = 'app';
  document.body.appendChild(container);
}
const root = createRoot(container);
root.render(<Hello />);
