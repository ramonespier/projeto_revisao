const splash = document.getElementById('splash')
const hiddenScroll = document.getElementById('hidden-scroll')

setTimeout(() => {
    splash.style.animation = 'transicao 1.2s forwards'
    hiddenScroll.style.overflow = 'visible'
}, 1200);