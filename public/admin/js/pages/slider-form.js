const itemTemplate = `<div class="item">
<span class="remove"></span>
<img src="__url__" alt="">
</div>`;
document.querySelector('#choose-file').addEventListener('click', function () {
    CKFinder.modal({
        chooseFiles: true,
        width: 800,
        height: 600,
        onInit: function (finder) {
            finder.on('files:choose', function (evt) {
                let file = evt.data.files.first();
                const newItemString = itemTemplate.replace('__url__', `${file.getUrl()}`);
                const newItem = createElementFromHTML(newItemString);
                document.querySelector('#list-image').appendChild(newItem);
                setImageUrl();
            });
            finder.on('file:choose:resizedImage', function (evt) {
                console.log(evt.data.resizedUrl);
            });
        }
    });
})
document.querySelector('#list-image').addEventListener('click', function (e) {
    if (e.target.classList.contains('remove')) {
        if(!confirm('Are you sure?')) return;
        e.target.parentNode.remove();
        setImageUrl();
    }
})
window.addEventListener('load', function () {
    const listImage = document.getElementById('list-image');
    new Sortable(listImage, {
        animation: 150,
        ghostClass: 'blue-background-class',
        onChange: function() {
            setImageUrl();
        },
    });
});

function createElementFromHTML(htmlString) {
    var div = document.createElement('div');
    div.innerHTML = htmlString.trim();
    return div.firstChild;
}
function setImageUrl() {
    const input = document.querySelector('#imageInput');
    const images = document.querySelectorAll('#list-image img');
    let imageUrl = [];
    images.forEach(image => {
        const url = image.getAttribute('src');
        imageUrl.push(url);
    });
    input.value = imageUrl.join(';');
}