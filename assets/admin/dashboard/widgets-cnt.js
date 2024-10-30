// Cat counting
document.addEventListener('DOMContentLoaded', function () {
    var widgetWrappers = document.querySelectorAll('.bwd-sk-wrapper');
    widgetWrappers.forEach(function(wrapper, index) {
        var widgetCount = wrapper.querySelectorAll('.bwd-sk-cmn').length;
        wrapper.querySelector('.widgetCount').textContent = widgetCount;
    });
});

// Visible cat
const btn = document.querySelector('.bwd-right-btn');
const widgetCats = document.querySelector('.bwd-widget-cats');
btn.addEventListener('click', () => {
    widgetCats.classList.toggle('visible');
});

// Cat click scroll
document.querySelectorAll('.scroll-link').forEach(link => {
    link.addEventListener('click', function (event) {
        event.preventDefault(); 
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);
        const yOffset = -200; 
        const yPosition = targetElement.getBoundingClientRect().top + window.pageYOffset + yOffset;
        window.scrollTo({
            top: yPosition,
            behavior: 'smooth'
        });
    });
});