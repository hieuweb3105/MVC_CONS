const paragraph = document.getElementById('introduce-desc');
const text = paragraph.textContent;
paragraph.textContent = '';

let i = 0;
function typeWriter() {
    if (i < text.length) {
        paragraph.textContent += text.charAt(i);
        i++;
        setTimeout(typeWriter, 60);
    }
}

typeWriter();