function addHeight(feed) {
    var divCounter = 0;
    var divRow = 0;
    var posts = feed.querySelectorAll('.post');
    for (var i = 0; i < posts.length; i++) {
        divCounter++;
        if (divCounter % 3 === 0) {
            divRow++;
        }
    }
    feed.style.height = (250 * divRow) + 'px';
    console.log(divCounter);
    console.log(divRow);
}
window.onload = function() {
    var feed = document.querySelector('.feed');
    addHeight(feed);
}