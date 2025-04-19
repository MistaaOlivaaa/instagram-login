document.addEventListener('DOMContentLoaded', () => {
    const themeToggleButton = document.getElementById('theme-toggle');
    const body = document.body;
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');
    const loginButton = document.getElementById('loginButton');
    const togglePasswordButton = document.getElementById('togglePassword');

    
    const currentTheme = localStorage.getItem('theme');

    
    if (currentTheme === 'dark') 
    {
        body.classList.add('dark-mode');
    }

    themeToggleButton.addEventListener('click', () => 
    {
        body.classList.toggle('dark-mode');

        
        if (body.classList.contains('dark-mode')) 

            localStorage.setItem('theme', 'dark');
        else 
            localStorage.setItem('theme', 'light');
            
        
    });

    
    function validateForm() {
        const usernameValue = usernameInput.value.trim();
        const passwordValue = passwordInput.value.trim();

        if (usernameValue && passwordValue.length >= 6) 
        { 
            loginButton.disabled = false;
        } 
        else 
            loginButton.disabled = true;
        
    }

    usernameInput.addEventListener('input', validateForm);
    passwordInput.addEventListener('input', validateForm);

    
    if (togglePasswordButton && passwordInput) {
        togglePasswordButton.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            
            togglePasswordButton.textContent = type === 'password' ? 'Show' : 'Hide';
            togglePasswordButton.setAttribute('aria-label', type === 'password' ? 'Show password' : 'Hide password');
        });
    }

    
    validateForm();
});