/*
 * Make clicking an element trigger a click on the link inside of it (e.g. cards)
 */

document.body.addEventListener('click', function(e) {
    const nestedLinkParentElement = e.target.closest('.js-nested-link');

    if (nestedLinkParentElement && e.target.tagName !== 'A') {
        const nestedLinkElement = nestedLinkParentElement.querySelector('a');
        const selection = window.getSelection().toString(); // Contains content when user is selecting/highlighting text

        if (!nestedLinkElement || selection) {
            return;
        }

        e.preventDefault();
        nestedLinkElement.click();
    }
});