// Google Tag Manager Tracking
(function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
    var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-N3L3TNZR');

// Facebook Pixel Code
!function(f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function() { n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments) };
    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s);
}(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1752796625556398');
fbq('track', 'PageView');

// Gymdesk Scheduling App
document.addEventListener('DOMContentLoaded', function () {
    document.body.addEventListener('click', function (event) {
        if (event.target && (event.target.tagName === 'BUTTON' || event.target.closest('button')) && event.target.textContent.trim() === 'Confirm Booking') {
            console.log('Confirm Booking button clicked!');
            captureFormData();
        }
    });

    const observer = new MutationObserver(() => {
        const buttons = document.querySelectorAll('.book button');
        buttons.forEach((button) => {
            if (button.textContent.trim() === 'Confirm Booking') {
                console.log('Confirm Booking button is now available!');
                observer.disconnect();
            }
        });
    });

    observer.observe(document.body, { childList: true, subtree: true });

    function captureFormData() {
        const form = document.querySelector('.book-form form.checkout');
        if (form) {
            const formData = {};
            const inputs = form.querySelectorAll('input, select, textarea');
            inputs.forEach(input => {
                formData[input.name] = input.value || '';
            });
            console.log('Captured Form Data:', formData);
        } else {
            console.warn('Form not found!');
        }
    }
});

// Referrer Capture
document.addEventListener("DOMContentLoaded", function () {
    const referrer = document.referrer;
    console.log("User came from:", referrer);

    if (referrer) {
        const referrerInput = document.createElement("input");
        referrerInput.type = "hidden";
        referrerInput.name = "referrer";
        referrerInput.value = referrer;

        const form = document.querySelector("form");
        if (form) {
            form.appendChild(referrerInput);
        }
    }
});

// Hamburger Menu Toggle
document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger');
    const menu = document.querySelector('.menu');
    hamburger.addEventListener('click', () => {
        menu.classList.toggle('mobile-hidden');
        menu.classList.toggle('mobile-visible');
    });
});

// Date of Birth and Age Logic
document.addEventListener('DOMContentLoaded', function () {
    const dobInput = document.getElementById('dob');
    const parentField = document.getElementById('parentField');
    const parentNameInput = document.getElementById('parentName');

    dobInput.addEventListener('change', function () {
        const dob = new Date(dobInput.value);
        const today = new Date();
        let age = today.getFullYear() - dob.getFullYear();
        const isBirthdayPast =
            today.getMonth() > dob.getMonth() ||
            (today.getMonth() === dob.getMonth() && today.getDate() >= dob.getDate());

        if (!isBirthdayPast) {
            age--;
        }

        if (age < 18) {
            parentField.style.display = 'block';
            parentNameInput.required = true;
        } else {
            parentField.style.display = 'none';
            parentNameInput.required = false;
        }
    });
});

// Flatpickr Initialization
document.addEventListener('DOMContentLoaded', function () {
    flatpickr("#dob", {
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        maxDate: "today",
        disableMobile: "true",
    });
});

// Welcome Back Cookie Message
document.addEventListener('DOMContentLoaded', function () {
    function getCookie(name) {
        const cookies = document.cookie.split('; ');
        for (let i = 0; i < cookies.length; i++) {
            const [key, value] = cookies[i].split('=');
            if (key === name) return decodeURIComponent(value);
        }
        return null;
    }

    const visitorName = getCookie('name');
    if (visitorName) {
        const welcomeMessage = document.createElement('div');
        welcomeMessage.id = 'welcome-back-message';
        welcomeMessage.style.margin = '20px';
        welcomeMessage.style.fontSize = '1.2em';
        welcomeMessage.style.color = '#2c3e50';
        welcomeMessage.textContent = `Welcome back, ${visitorName}!`;

        const aboutContainer = document.getElementById('about');
        if (aboutContainer) {
            aboutContainer.insertAdjacentElement('beforebegin', welcomeMessage);
        } else {
            document.body.insertAdjacentElement('afterbegin', welcomeMessage);
        }
    }
});