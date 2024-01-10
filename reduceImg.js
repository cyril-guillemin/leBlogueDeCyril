function reduceImg() {
    let div = document.getElementById("div");
    let divClass = div.className;
    if(divClass == "div-section-div-article-figure-div") {
        div.className = "div-section-div-article-figure-no_div";
    }

    let img = document.getElementById("img");
    let imgClass = img.className;
    if(imgClass == "div-section-div-article-figure-enlarge_img") {
        img.className = "div-section-div-article-figure-img";
    }
}