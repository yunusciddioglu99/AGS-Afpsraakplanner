
// JavaScript to handle the toggle
const studentButton = document.getElementById('studentButton');
const teacherButton = document.getElementById('teacherButton');
const studentForm = document.getElementById('studentForm');
const teacherForm = document.getElementById('teacherForm');

studentButton.addEventListener('click', () => {
    studentButton.classList.add('active');
    teacherButton.classList.remove('active');
    studentForm.classList.add('active');
    teacherForm.classList.remove('active');
});

teacherButton.addEventListener('click', () => {
    teacherButton.classList.add('active');
    studentButton.classList.remove('active');
    teacherForm.classList.add('active');
    studentForm.classList.remove('active');
});
