// Get the body element
const body = document.body;

// Create a new post element
const post = document.createElement("div");
post.classList.add("post");

// Create a new button element inside the post element
const button = document.createElement("button");
button.classList.add("postbtn");
button.innerHTML = "<a style='text-decoration: none' href='choose.html'>+</a>";
post.appendChild(button);

// Append the post element to the body
body.appendChild(post);

function addHeight(){
    var divCounter = 0;
    var divRow = 0;
    var posts = feed.querySelectorAll('.post');
    for (var i = 0; i < posts.length; i++) {
        divCounter++;
        if (divCounter % 3 === 0) {
            divRow++;
        }
    }feed.style.height = (200 * divRow) + 'px';
    }