document.addEventListener('DOMContentLoaded', function () {

    // Announcement bar close
    const bar = document.getElementById('announcementBar');
    const closeBtn = document.getElementById('closeAnnouncement');
    if (closeBtn && bar) {
        closeBtn.addEventListener('click', () => {
            bar.style.display = 'none';
            sessionStorage.setItem('announcementClosed', 'true');
        });
        if (sessionStorage.getItem('announcementClosed')) bar.style.display = 'none';
    }

    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 50);
    });

    // Hamburger menu
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('navMenu');
    if (hamburger && navMenu) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('open');
            navMenu.classList.toggle('open');
        });
    }

});

// Office tabs filter
function filterOffices(type, btn) {
    document.querySelectorAll('.offices-tab').forEach(t => t.classList.remove('active'));
    btn.classList.add('active');
    document.querySelectorAll('.office-card').forEach(card => {
        if (type === 'all' || card.dataset.type === type || card.dataset.type === 'all') {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}