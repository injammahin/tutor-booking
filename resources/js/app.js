import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    initHeader();
    initFaq();
    initBookingCalendar();
    initPaypalCheckout();
    initTestimonialSlider();
});

function initHeader() {
    const header = document.getElementById('siteHeader');
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');

    if (!header) {
        return;
    }

    let lastScrollY = window.scrollY;

    window.addEventListener('scroll', () => {
        const currentScrollY = window.scrollY;

        if (currentScrollY > lastScrollY && currentScrollY > 120) {
            header.classList.add('-translate-y-full');
        } else {
            header.classList.remove('-translate-y-full');
        }

        if (currentScrollY > 20) {
            header.classList.add('shadow-lg', 'shadow-slate-900/5');
        } else {
            header.classList.remove('shadow-lg', 'shadow-slate-900/5');
        }

        lastScrollY = currentScrollY;
    });

    mobileMenuBtn?.addEventListener('click', () => {
        mobileMenu?.classList.toggle('hidden');

        if (menuIcon) {
            menuIcon.textContent = mobileMenu?.classList.contains('hidden') ? '☰' : '×';
        }
    });

    mobileMenu?.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');

            if (menuIcon) {
                menuIcon.textContent = '☰';
            }
        });
    });
}

function initFaq() {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach((item) => {
        const question = item.querySelector('.faq-question');
        const icon = question?.querySelector('strong');

        question?.addEventListener('click', () => {
            const isOpen = item.classList.contains('open');

            faqItems.forEach((otherItem) => {
                otherItem.classList.remove('open');

                const otherIcon = otherItem.querySelector('.faq-question strong');
                if (otherIcon) {
                    otherIcon.textContent = '+';
                }
            });

            if (!isOpen) {
                item.classList.add('open');

                if (icon) {
                    icon.textContent = '−';
                }
            }
        });
    });
}

function initBookingCalendar() {
    const calendarGrid = document.getElementById('calendarGrid');
    const mobileSlotList = document.getElementById('mobileSlotList');
    const rangeEl = document.getElementById('calendarRange');
    const prevBtn = document.getElementById('prevWeekBtn');
    const nextBtn = document.getElementById('nextWeekBtn');
    const filterButtons = document.querySelectorAll('.filter-chip');

    if (!calendarGrid || !mobileSlotList || !rangeEl) {
        return;
    }

    let selectedFilter = 'all';
    let weekStart = getStartOfWeek(new Date());

    const slots = [
        {
            day: 1,
            time: '9:30 AM',
            title: 'Entering 4th Grade Summer Skills',
            subject: 'Math',
            duration: '1 hr',
            price: '$50',
            amount: '50.00',
            spots: '5 spots left',
            mode: 'Small Group',
        },
        {
            day: 1,
            time: '11:00 AM',
            title: 'Reading Confidence Builder',
            subject: 'Reading',
            duration: '1 hr',
            price: '$50',
            amount: '50.00',
            spots: '4 spots left',
            mode: 'Small Group',
        },
        {
            day: 1,
            time: '12:15 PM',
            title: 'Private Tutoring Monday',
            subject: 'Math',
            duration: '45 min',
            price: '$65',
            amount: '65.00',
            spots: '1 spot left',
            mode: 'Private',
        },
        {
            day: 2,
            time: '9:30 AM',
            title: 'Multiplication Mastery Camp',
            subject: 'Math',
            duration: '1 hr',
            price: '$50',
            amount: '50.00',
            spots: '5 spots left',
            mode: 'Camp',
        },
        {
            day: 2,
            time: '11:00 AM',
            title: 'Writing Skills Workshop',
            subject: 'Writing',
            duration: '1 hr',
            price: '$50',
            amount: '50.00',
            spots: '3 spots left',
            mode: 'Small Group',
        },
        {
            day: 2,
            time: '12:15 PM',
            title: 'Private Tutoring Tuesday',
            subject: 'Reading',
            duration: '45 min',
            price: '$65',
            amount: '65.00',
            spots: '1 spot left',
            mode: 'Private',
        },
        {
            day: 3,
            time: '9:30 AM',
            title: 'Entering 6th Grade Summer Skills',
            subject: 'Math',
            duration: '1 hr',
            price: '$50',
            amount: '50.00',
            spots: '5 spots left',
            mode: 'Small Group',
        },
        {
            day: 3,
            time: '11:00 AM',
            title: 'Multiplication Mastery Camp',
            subject: 'Math',
            duration: '1 hr',
            price: '$50',
            amount: '50.00',
            spots: '5 spots left',
            mode: 'Camp',
        },
        {
            day: 3,
            time: '12:15 PM',
            title: 'Private Tutoring Wednesday',
            subject: 'Writing',
            duration: '45 min',
            price: '$65',
            amount: '65.00',
            spots: '1 spot left',
            mode: 'Private',
        },
        {
            day: 4,
            time: '9:30 AM',
            title: 'Entering 5th Grade Summer Skills',
            subject: 'Math',
            duration: '1 hr',
            price: '$50',
            amount: '50.00',
            spots: '5 spots left',
            mode: 'Small Group',
        },
        {
            day: 4,
            time: '11:00 AM',
            title: 'Entering 6th Grade Reading',
            subject: 'Reading',
            duration: '1 hr',
            price: '$50',
            amount: '50.00',
            spots: '5 spots left',
            mode: 'Small Group',
        },
        {
            day: 4,
            time: '12:15 PM',
            title: 'Private Tutoring Thursday',
            subject: 'Test Prep',
            duration: '45 min',
            price: '$65',
            amount: '65.00',
            spots: '1 spot left',
            mode: 'Private',
        },
        {
            day: 6,
            time: '10:00 AM',
            title: 'Weekend Test Prep Review',
            subject: 'Test Prep',
            duration: '1 hr',
            price: '$75',
            amount: '75.00',
            spots: '2 spots left',
            mode: 'Premium',
        },
    ];

    function renderCalendar() {
        calendarGrid.innerHTML = '';
        mobileSlotList.innerHTML = '';

        const weekDates = [];

        for (let i = 0; i < 7; i++) {
            const date = new Date(weekStart);
            date.setDate(weekStart.getDate() + i);
            weekDates.push(date);
        }

        rangeEl.textContent = `${formatShortDate(weekDates[0])} - ${formatShortDate(weekDates[6])}`;

        weekDates.forEach((date, index) => {
            const daySlots = getFilteredSlots(index);

            const desktopDay = document.createElement('div');
            desktopDay.className = 'calendar-day';

            desktopDay.innerHTML = `
                <div class="calendar-day-date">
                    ${date.toLocaleDateString('en-US', { weekday: 'short' })}<br>
                    ${date.toLocaleDateString('en-US', { month: 'short', day: 'numeric' })}
                </div>
            `;

            if (daySlots.length === 0) {
                desktopDay.innerHTML += `<div class="calendar-empty">No classes<br>available</div>`;
            } else {
                daySlots.forEach((slot) => {
                    desktopDay.appendChild(createSlotCard(slot, date));
                });
            }

            calendarGrid.appendChild(desktopDay);

            const mobileDay = document.createElement('div');
            mobileDay.className = 'mobile-day-card';

            mobileDay.innerHTML = `
                <h3 class="mobile-day-title">
                    ${date.toLocaleDateString('en-US', { weekday: 'long', month: 'short', day: 'numeric' })}
                </h3>
            `;

            if (daySlots.length === 0) {
                mobileDay.innerHTML += `<div class="calendar-empty min-h-[120px]">No classes available</div>`;
            } else {
                daySlots.forEach((slot) => {
                    mobileDay.appendChild(createSlotCard(slot, date));
                });
            }

            mobileSlotList.appendChild(mobileDay);
        });
    }

    function getFilteredSlots(dayIndex) {
        return slots.filter((slot) => {
            const matchesDay = slot.day === dayIndex;
            const matchesFilter = selectedFilter === 'all' || slot.subject === selectedFilter;

            return matchesDay && matchesFilter;
        });
    }

    function createSlotCard(slot, date) {
        const card = document.createElement('div');
        card.className = 'slot-card';

        card.innerHTML = `
            <p class="slot-time">${slot.time}</p>
            <h4 class="slot-title">${slot.title}</h4>
            <p class="slot-meta">${slot.subject} · ${slot.mode} · ${slot.duration}</p>
            <p class="slot-price">${slot.price} · ${slot.spots}</p>
            <button type="button" class="slot-btn">Book Now</button>
        `;

        const button = card.querySelector('button');

        button.addEventListener('click', () => {
            const checkoutUrl = new URL(
                window.MontyBookingCheckoutUrl || '/booking-checkout',
                window.location.origin
            );

            checkoutUrl.searchParams.set('title', slot.title);
            checkoutUrl.searchParams.set('subject', slot.subject);
            checkoutUrl.searchParams.set('mode', slot.mode);
            checkoutUrl.searchParams.set('date', date.toLocaleDateString('en-US', {
                weekday: 'long',
                month: 'long',
                day: 'numeric',
                year: 'numeric',
            }));
            checkoutUrl.searchParams.set('time', slot.time);
            checkoutUrl.searchParams.set('duration', slot.duration);
            checkoutUrl.searchParams.set('spots', slot.spots);
            checkoutUrl.searchParams.set('amount', slot.amount);

            window.location.href = checkoutUrl.toString();
        });

        return card;
    }

    prevBtn?.addEventListener('click', () => {
        weekStart.setDate(weekStart.getDate() - 7);
        renderCalendar();
    });

    nextBtn?.addEventListener('click', () => {
        weekStart.setDate(weekStart.getDate() + 7);
        renderCalendar();
    });

    filterButtons.forEach((button) => {
        button.addEventListener('click', () => {
            filterButtons.forEach((btn) => btn.classList.remove('active'));
            button.classList.add('active');

            selectedFilter = button.dataset.filter || 'all';

            renderCalendar();
        });
    });

    renderCalendar();
}

function initPaypalCheckout() {
    const paypalContainer = document.getElementById('paypal-button-container');
    const form = document.getElementById('bookingDetailsForm');
    const formWarning = document.getElementById('formWarning');
    const successBox = document.getElementById('paymentSuccessBox');
    const errorBox = document.getElementById('paymentErrorBox');
    const paypalOrderId = document.getElementById('paypalOrderId');
    const paypalPayerName = document.getElementById('paypalPayerName');

    if (!paypalContainer || !window.MontyCheckout) {
        return;
    }

    if (!window.paypal) {
        showPaypalUnavailableMessage(paypalContainer);
        return;
    }

    window.paypal.Buttons({
        style: {
            layout: 'vertical',
            color: 'gold',
            shape: 'pill',
            label: 'paypal',
        },

        onClick: function () {
            if (!form) {
                return true;
            }

            if (!form.checkValidity()) {
                form.reportValidity();
                formWarning?.classList.remove('hidden');
                return false;
            }

            formWarning?.classList.add('hidden');
            return true;
        },

        createOrder: function (data, actions) {
            return actions.order.create({
                purchase_units: [
                    {
                        description: window.MontyCheckout.title,
                        amount: {
                            currency_code: 'USD',
                            value: window.MontyCheckout.amount,
                        },
                    },
                ],
            });
        },

        onApprove: function (data, actions) {
            return actions.order.capture().then(function (details) {
                if (paypalOrderId) {
                    paypalOrderId.value = data.orderID || '';
                }

                if (paypalPayerName) {
                    const firstName = details?.payer?.name?.given_name || '';
                    const lastName = details?.payer?.name?.surname || '';
                    paypalPayerName.value = `${firstName} ${lastName}`.trim();
                }

                errorBox?.classList.add('hidden');
                successBox?.classList.remove('hidden');

                successBox?.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center',
                });
            });
        },

        onError: function () {
            successBox?.classList.add('hidden');
            errorBox?.classList.remove('hidden');
        },
    }).render('#paypal-button-container');
}

function showPaypalUnavailableMessage(container) {
    container.innerHTML = `
        <div class="rounded-2xl border border-red-200 bg-red-50 p-5 text-sm font-bold leading-7 text-red-700">
            PayPal button could not load. Please check your PayPal Client ID and internet connection.
        </div>
    `;
}

function initTestimonialSlider() {
    const slider = document.getElementById('testimonialSlider');
    const prevBtn = document.getElementById('testimonialPrev');
    const nextBtn = document.getElementById('testimonialNext');

    const modal = document.getElementById('testimonialModal');
    const modalClose = document.getElementById('testimonialModalClose');
    const modalOverlay = modal?.querySelector('.testimonial-modal-overlay');

    const modalImage = document.getElementById('testimonialModalImage');
    const modalName = document.getElementById('testimonialModalName');
    const modalGrade = document.getElementById('testimonialModalGrade');
    const modalReview = document.getElementById('testimonialModalReview');

    if (!slider) {
        return;
    }

    const getSlideAmount = () => {
        const firstSlide = slider.querySelector('.testimonial-slide');

        if (!firstSlide) {
            return 360;
        }

        return firstSlide.offsetWidth + 24;
    };

    prevBtn?.addEventListener('click', () => {
        slider.scrollBy({
            left: -getSlideAmount(),
            behavior: 'smooth',
        });
    });

    nextBtn?.addEventListener('click', () => {
        slider.scrollBy({
            left: getSlideAmount(),
            behavior: 'smooth',
        });
    });

    let isDown = false;
    let startX = 0;
    let scrollLeft = 0;
    let isDragging = false;

    slider.addEventListener('mousedown', (event) => {
        isDown = true;
        isDragging = false;
        slider.classList.add('is-dragging');

        startX = event.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });

    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('is-dragging');
    });

    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('is-dragging');
    });

    slider.addEventListener('mousemove', (event) => {
        if (!isDown) {
            return;
        }

        event.preventDefault();

        const x = event.pageX - slider.offsetLeft;
        const walk = (x - startX) * 1.4;

        if (Math.abs(walk) > 8) {
            isDragging = true;
        }

        slider.scrollLeft = scrollLeft - walk;
    });

    slider.addEventListener(
        'touchstart',
        (event) => {
            startX = event.touches[0].pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        },
        { passive: true }
    );

    slider.addEventListener(
        'touchmove',
        (event) => {
            const x = event.touches[0].pageX - slider.offsetLeft;
            const walk = (x - startX) * 1.2;

            slider.scrollLeft = scrollLeft - walk;
        },
        { passive: true }
    );

    document.querySelectorAll('.testimonial-see-more').forEach((button) => {
        button.addEventListener('click', () => {
            if (isDragging) {
                return;
            }

            const name = button.dataset.name || '';
            const grade = button.dataset.grade || '';
            const image = button.dataset.image || '';
            const review = button.dataset.review || '';

            if (modalImage) {
                modalImage.src = image;
                modalImage.alt = name;
            }

            if (modalName) {
                modalName.textContent = name;
            }

            if (modalGrade) {
                modalGrade.textContent = grade;
            }

            if (modalReview) {
                modalReview.textContent = review;
            }

            modal?.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        });
    });

    const closeModal = () => {
        modal?.classList.add('hidden');
        document.body.style.overflow = '';
    };

    modalClose?.addEventListener('click', closeModal);
    modalOverlay?.addEventListener('click', closeModal);

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeModal();
        }
    });
}

function getStartOfWeek(date) {
    const newDate = new Date(date);
    const day = newDate.getDay();

    newDate.setHours(0, 0, 0, 0);
    newDate.setDate(newDate.getDate() - day);

    return newDate;
}

function formatShortDate(date) {
    return date.toLocaleDateString('en-US', {
        month: 'short',
        day: 'numeric',
    });
}