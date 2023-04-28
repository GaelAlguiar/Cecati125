const selectElement = (element) => document.querySelector(element);

selectElement('.icons').addEventListener('click', () => {
        selectElement('nav').classList.toggle('active');
});


