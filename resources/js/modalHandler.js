document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('successModalOverlay');
    const closeBtn = document.getElementById('closeModalBtn');
    const closeFooterBtn = document.getElementById('closeModalFooterBtn');

    closeBtn.addEventListener('click', () => modal.remove());
    closeFooterBtn.addEventListener('click', () => modal.remove());

    setTimeout(() => {
        if (modal) modal.remove();
    }, 5000);
});