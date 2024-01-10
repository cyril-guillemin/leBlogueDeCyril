function enlargeImg() {
    let img = document.getElementById("img");
    let imgClass = img.className;
    if(imgClass == "div-section-div-article-figure-img") {
        img.className = "div-section-div-article-figure-enlarge_img";
    }

    let div = document.getElementById("div");
    let divClass = div.className;
    if(divClass == "div-section-div-article-figure-no_div") {
        div.className = "div-section-div-article-figure-div";
    }
}