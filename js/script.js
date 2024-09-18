document.addEventListener('DOMContentLoaded', function () {
    const elemento = document.getElementById('origen');
    const choices = new Choices(elemento, {
      placeholderValue: 'Indique el origen de su viaje',
      searchEnabled: true 
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    const elemento = document.getElementById('destino');
    const choices = new Choices(elemento, {
      placeholderValue: 'Indique el destino de su viaje',
      searchEnabled: true 
    });
  });