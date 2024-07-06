document.getElementById('signup').addEventListener('click', function() {
    document.getElementById('signupModal').style.display = 'flex';
});

document.querySelector('.close').addEventListener('click', function() {
    document.getElementById('signupModal').style.display = 'none';
});

window.addEventListener('click', function(event) {
    if (event.target == document.getElementById('signupModal')) {
        document.getElementById('signupModal').style.display = 'none';
    }
});
