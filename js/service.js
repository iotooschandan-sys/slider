document.querySelectorAll('.iogoos-services__card-wrap').forEach(card => {

    const icon = card.querySelector('.platform-hover-icon');

    if (!icon) return;

    card.addEventListener('mousemove', function(e) {

        const rect = card.getBoundingClientRect();

        const x = e.clientX - rect.left - 80;
        const y = e.clientY - rect.top;

        icon.style.left = x + 'px';
        icon.style.top = y + 'px';

    });

});
