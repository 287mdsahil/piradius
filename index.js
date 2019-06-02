function getPage(contenturl) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', contenturl, true);
    xhr.onload = function () {
        if (this.status == 200) {
            document.getElementById('content').innerHTML = this.responseText;
        }
        else {
            document.getElementById('content').innerHTML = '<p>' + this.status + ' Error' + '<p>';
        }
    }

    xhr.send();
}

function getHomePage() {
    getPage('./home-partial.html')
}

function getAboutUsPage() {
    getPage('./about_us-partial.html')
}

function getFacultyPage() {
    getPage('./faculty-partial.html')
}

function getCoursePage() {
    getPage('./course-partial.html');
}