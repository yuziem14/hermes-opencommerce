const tagSelector = document.querySelector('select#tags');
const tagsContainer = document.querySelector('.selected-tags');
const selectedTags = document.querySelectorAll('.selected-tags .tag');

function getTagMarkup(text, value) {
  return `
    <input type="hidden" name="tags[]" value="${value}">
    <p>${text}</p>
    <img src="/images/close.svg" alt="Unselect"/>
  `.trim();
}

function isTagSelected(value) {
  tagInputs = document.querySelectorAll(`input[name="tags[]"][value="${value}"]`);
  return tagInputs.length !== 0;
}

function handleTagSelectorChange(event) {
  const { value, options } = event.target;
  const text = options[options.selectedIndex].text;

  if(!isTagSelected(value)) {
    const newTag = document.createElement('div');
    newTag.classList.add('tag');
    newTag.innerHTML = getTagMarkup(text, value);
    newTag.addEventListener('click', handleOnTagClick);
    tagsContainer.append(newTag);
  }
}

function handleOnTagClick(event) {
  const { target } = event;
  tagsContainer.removeChild(target);
}

tagSelector.addEventListener('change', handleTagSelectorChange);

selectedTags.forEach(tagElement => {
  tagElement.addEventListener('click', handleOnTagClick);
});
