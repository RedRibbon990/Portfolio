console.log('hi');

document.addEventListener('DOMContentLoaded', function () {
    const delayedDiv = document.getElementById('delayedDiv');

    if (delayedDiv) {
        delayedDiv.style.display = 'none';
        showDelayedDiv();
    }

    const btnSwitch = document.getElementById('btnSwitch');
    if (btnSwitch) {
        btnSwitch.addEventListener('click', function () {
            toggleTheme();
        });
    }

    const modeElement = document.getElementById('mode');
    if (modeElement) {
        modeElement.addEventListener('click', function () {
            toggleCardMode();
        });
    }
});

function showDelayedDiv() {
    const delayedDiv = document.getElementById('delayedDiv');
    if (delayedDiv) {
        setTimeout(function () {
            delayedDiv.style.display = 'block';
        }, 4000);
    }
}

function toggleCardMode() {
    const li = document.getElementById('card-mode');
    const bgdark = document.getElementById('dark-background');

    if (li && bgdark) {
        li.classList.toggle('card-dark');
        bgdark.classList.toggle('bg-dark');
    }
}
