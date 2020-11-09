const FILE_PREVIEW_CLASSNAME = 'file-preview';
const FILE_SELECTOR_CLASSNAME = 'file-selector';
const fileSelectors = document.querySelectorAll(`.${FILE_SELECTOR_CLASSNAME}`);

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
  const selectedFile = fileInput.files[0];

  fileSelector.classList.remove(FILE_PREVIEW_CLASSNAME);
  URL.revokeObjectURL(fileSelector.dataset.cachedFile);

  if(selectedFile) {
    createPreview(selectedFile, fileSelector);
  }
  else {
    destroyPreview(fileSelector);
  }

}

function createPreview(selectedFile, previewElement) {
  cachedFileUrl = URL.createObjectURL(selectedFile);
  previewElement.classList.add(FILE_PREVIEW_CLASSNAME);
  previewElement.dataset.cachedFile = cachedFileUrl;
  previewElement.style.backgroundImage = `url('${cachedFileUrl}')`;
}

function destroyPreview(previewElement) {
  previewElement.style.backgroundImage = 'none';
  previewElement.classList.remove(FILE_PREVIEW_CLASSNAME);
}

fileSelectors.forEach(fileSelector => {
  const fileInput = getFileInput(fileSelector);

  fileSelector.addEventListener('click', fileSelectorOnClickHandler);
  fileInput.addEventListener('change', fileInputOnChangeHandler);
});
