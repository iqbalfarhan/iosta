import './bootstrap';

window.livewire.on('themeChanged', function (theme) {
  localStorage.setItem('theme', theme);
  document.documentElement.setAttribute('data-theme', theme);
});

document.addEventListener('DOMContentLoaded', (event) => {
  const theme = localStorage.getItem('theme');
  
  if (theme) {
      document.documentElement.setAttribute('data-theme', theme);
      window.livewire.emit('setTheme', theme);
  }
});