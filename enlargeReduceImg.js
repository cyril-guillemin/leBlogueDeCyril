function enlargeReduceImg() {
    let img1 = document.getElementById("img");
    let imgClass1 = img1.className;
    if(imgClass1 == "div-section-div-article-figure-img") {
        img1.className = "div-section-div-article-figure-noDisplay_img";
    }
    else {
        img1.className = "div-section-div-article-figure-img";
    }
    let img2 = document.getElementById("enlargeImg");
    let imgClass2 = img2.className;
    if(imgClass2 == "div-section-div-article-figure-noDisplay_img") {
        img2.className = "div-section-div-article-figure-enlarge_img";
        img2.width = "1024";
        img2.height = "768"; 
    }
    else {
        img2.className = "div-section-div-article-figure-noDisplay_img";
    }

}