window['markdown'].ready.then(markdown => {
    const elms = document.getElementsByClassName('markdown');

    for (let i = 0; i < elms.length; i++) {
        const elm = elms[i];
        const text = elm.innerHTML.replace(/&gt;/g, '>');
        elm.innerHTML = markdown.parse(text);
    }
});
