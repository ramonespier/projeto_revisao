const observerConf = {
    root: null,
    threshold: 0.3,

}

const callback = (entries, observer) => {

    entries.forEach(entry => {

        if (entry.isIntersecting) {
            entry.target.classList.add('is-visible')
        } else {
            entry.target.classlist.remove('is-visible');
        }

    });


}

const observer = new IntersectionObserver(callback, observerConf)

const elementos = document.querySelectorAll(".animar")

elementos.forEach(elemento => observer.observe(elemento))


