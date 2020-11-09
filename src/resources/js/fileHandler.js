const fileSelectors = document.querySelectorAll('.file-selector');

fileSelectors.forEach(fileSelector => {
  const fileInput = fileSelector.querySelector('input[type=file]');
  fileSelector.addEventListener('click', () => {
    fileInput.click();
  })
});
