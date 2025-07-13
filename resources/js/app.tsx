import React from 'react';
import { createRoot } from 'react-dom/client';
import Hello from './components/Hello';

const container = document.getElementById('app');
if (container) {
  const root = createRoot(container);
  root.render(<Hello />);
}
