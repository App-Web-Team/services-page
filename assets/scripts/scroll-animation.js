const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));

const leftobserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('mfl');
        } else {
            entry.target.classList.remove('mfl');
        }
    });
});

const leftElements = document.querySelectorAll('.fl');
leftElements.forEach((el) => leftobserver.observe(el));

const rightobserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('mfr');
        } else {
            entry.target.classList.remove('mfr');
        }
    });
});

const rightElements = document.querySelectorAll('.fr');
rightElements.forEach((el) => rightobserver.observe(el));

const bottomobserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('mfb');
        } else {
            entry.target.classList.remove('mfb');
        }
    });
});

const bottomElements = document.querySelectorAll('.fb');
bottomElements.forEach((el) => bottomobserver.observe(el));

const torightobserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('mtr');
        } else {
            entry.target.classList.remove('mtr');
        }
    });
});

const torightElements = document.querySelectorAll('.person-center'); torightElements.forEach((el) => torightobserver.observe(el));