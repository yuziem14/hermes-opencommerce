const FILE_SELECTOR_CLASSNAME = 'multiple-file-selector';
const FILE_CONTAINER_CLASSNAME = 'multiple-file-container';
const multipleFileSelectors = document.querySelectorAll(`.${FILE_SELECTOR_CLASSNAME}`);

function getFileInput(fileSelector) {
  return fileSelector.querySelector('input[type=file]');
}

function fileSelectorOnClickHandler(event) {
  const fileSelector = event.target;
  const fileInput = getFileInput(fileSelector);
  if(fileInput) fileInput.click();
}

function fileInputOnChangeHandler(event) {
  const fileInput = event.target;
  const fileSelector = fileInput.closest(`.${FILE_SELECTOR_CLASSNAME}`);
  const selectedFiles = fileInput.files;

  console.log(selectedFiles);

  const imagesPreviews = document.querySelectorAll(`.${FILE_CONTAINER_CLASSNAME} > img`);
  Array.from(imagesPreviews).forEach(imagePreview => {
    destroyImagePreview(imagePreview);
  });

  if(selectedFiles.length > 0) {
    Array.from(selectedFiles).forEach(imageFile => {
      createImagePreview(imageFile, fileSelector.closest(`.${FILE_CONTAINER_CLASSNAME}`));
    });
  }
}

function createImagePreview(selectedFile, element) {
  const cachedFileUrl = URL.createObjectURL(selectedFile);
  const imageElement = document.createElement('img');
  imageElement.src = cachedFileUrl;
  imageElement.dataset.cachedFile = cachedFileUrl;
  element.appendChild(imageElement);
}

function destroyImagePreview(imagePreview) {
  URL.revokeObjectURL(imagePreview.dataset.cachedFile);
  imagePreview.remove();
}

multipleFileSelectors.forEach(fileSelector => {
  const fileInput = getFileInput(fileSelector);

  fileSelector.addEventListener('click', fileSelectorOnClickHandler);
  fileInput.addEventListener('change', fileInputOnChangeHandler);
});
