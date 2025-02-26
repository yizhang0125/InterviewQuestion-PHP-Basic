/**
 * Verifies the username using AJAX
 * Sends the username to info.php for validation
 */
function verifyUsername() {
    // Get elements
    const usernameInput = document.getElementById('username');
    const messageDiv = document.getElementById('message');
    const instructionDiv = document.getElementById('instruction');
    const submitBtn = document.querySelector('.submit-btn');
    
    // Get username and trim whitespace
    const username = usernameInput.value.trim();
    
    // Disable button during submission
    submitBtn.disabled = true;
    
    // Check if input is empty
    if (!username) {
        messageDiv.innerHTML = '';
        messageDiv.className = '';
        instructionDiv.style.display = 'block';
        submitBtn.disabled = false;
        usernameInput.focus();
        return;
    }
    
    // Hide instruction when submitting
    instructionDiv.style.display = 'none';
    
    // Create AJAX request
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'info.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            submitBtn.disabled = false;
            
            if (xhr.status === 200) {
                const response = xhr.responseText;
                messageDiv.innerHTML = response;
                messageDiv.className = response === 'Verified' ? 'success' : 'error';
            } else {
                messageDiv.innerHTML = 'Error';
                messageDiv.className = 'error';
            }
        }
    };
    
    // Send the request
    xhr.send('username=' + encodeURIComponent(username));
}

// Add event listener to hide instruction when typing
document.getElementById('username').addEventListener('input', function(e) {
    const instructionDiv = document.getElementById('instruction');
    const messageDiv = document.getElementById('message');
    
    instructionDiv.style.display = 'none';
    messageDiv.innerHTML = '';
    messageDiv.className = '';
});

// Add event listener for Enter key
document.getElementById('username').addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        event.preventDefault();
        verifyUsername();
    }
});

// Add shake animation
const style = document.createElement('style');
style.textContent = `
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
    }
    @keyframes success {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }
`;
document.head.appendChild(style);


