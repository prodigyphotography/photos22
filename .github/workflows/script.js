document.addEventListener("DOMContentLoaded", function () {
  document.addEventListener("contextmenu", function (event) {
    event.preventDefault();
  });

  document.addEventListener("keydown", function (event) {
    if (event.key === "F12") {
      event.preventDefault();
    }
  });

  const sizeSelects = document.querySelectorAll('select[id^="size"]');
  const quantityInputs = document.querySelectorAll('input[id^="quantity"]');

  sizeSelects.forEach((select, index) => {
    select.addEventListener('change', () => {
      if (select.value === 'digital') {
        quantityInputs[index].disabled = true;
        quantityInputs[index].value = 1;
      } else {
        quantityInputs[index].disabled = false;
      }
    });
  });
});
