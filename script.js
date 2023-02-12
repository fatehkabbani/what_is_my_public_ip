let span = document.getElementsByClassName('input-span')[0];
let ip = document.getElementById('ip');

// copy to clipboard onclick
span.addEventListener('click', () => {
    ip.select();
    navigator.clipboard.writeText(ip.value);
});