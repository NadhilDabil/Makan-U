document.addEventListener('DOMContentLoaded', function () {
    const accountToggle = document.getElementById('accountToggle');
    const accountDropdown = document.querySelector('.account-dropdown');

    accountToggle.addEventListener('click', function (e) {
        e.preventDefault();
        accountDropdown.classList.toggle('open');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function (e) {
        if (!accountDropdown.contains(e.target) && accountDropdown.classList.contains('open')) {
            accountDropdown.classList.remove('open');
        }
    });
});
