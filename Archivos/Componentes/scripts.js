//Create function to select elements
const selectElement = (element) => document.querySelector(element);
//Open and close nav on click

selectElement('.icons').addEventListener('click', () => {
        selectElement('nav').classList.toggle('active');
});