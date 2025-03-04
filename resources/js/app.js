import './bootstrap';

document.querySelector('input[name="search"]').addEventListener('input', function (e) {
    var val = e.target.value.toLowerCase();
    document.querySelectorAll('table tbody tr').forEach(function (el) {
        if (el.textContent.toLowerCase().indexOf(val) === -1) {
            el.style.display = 'none';
        } else {
            el.style.display = 'table-row';
        }
    });
});
