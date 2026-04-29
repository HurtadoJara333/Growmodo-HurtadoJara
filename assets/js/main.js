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

// FAQ Toggle
function toggleFaq(index) {
    const items = document.querySelectorAll('.faq-item');
    items.forEach((item, i) => {
        if (i === index) {
            item.classList.toggle('open');
        } else {
            item.classList.remove('open');
        }
    });
}

// Init FAQ — add click listeners
document.querySelectorAll('.faq-item').forEach((item, i) => {
    const question = item.querySelector('.faq-item__question');
    if (question) {
        question.style.cursor = 'pointer';
        question.addEventListener('click', () => toggleFaq(i));
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