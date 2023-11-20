
let currentImageIndex;
let images = [
    "../media/images/quotes/1.png", "../media/images/quotes/2.png", "../media/images/quotes/3.png" ,
    "../media/images/quotes/4.png", "../media/images/quotes/5.png", "../media/images/quotes/6.png" ,
    "../media/images/quotes/7.png", "../media/images/quotes/8.png", "../media/images/quotes/9.png", 
    "../media/images/quotes/10.png", "../media/images/quotes/11.png", "../media/images/quotes/12.png"];

let isMainImageVisible = false;

function showImage(thumbnail) {
    
  currentImageIndex = (parseInt(thumbnail.id)-1);
    console.log(currentImageIndex)
    let mainImage = document.querySelector(".main-image");
    let Theimage = document.querySelector(".main-image img");

    Theimage.src = thumbnail.src;
    mainImage.style.display = "block";
    let controls = document.querySelector(".controls")
    controls.style.display = "block";

    const thumbnails = document.querySelector(".thumbnails");
    thumbnails.style.width = "72vw";

    const rows = document.querySelectorAll(".row");

    for (const row of rows) {
      row.style.width = "33.3%";
      row.style.height = "5vw";

    }

    const allImages = document.querySelectorAll("img");
    const otherImages = Array.from(allImages).filter(image => image !== Theimage);
    for (const image of otherImages) {
        image.style.width = "24%";
        image.style.height = "96%";

      }

      let backbutton = document.querySelector(".back-button");
      backbutton.style.display = "block";

}

function showPreviousImage() {
    if (currentImageIndex > 0) {
        currentImageIndex--;
        let mainImage = document.querySelector(".main-image img");
        mainImage.src = images[currentImageIndex];
    }
}

function showNextImage() {
    if (currentImageIndex < images.length - 1) {
        currentImageIndex++;
        let mainImage = document.querySelector(".main-image img");
        mainImage.src = images[currentImageIndex];
    }
}

function showThumbnails() {
    // Hide the main image
    let mainImage = document.querySelector(".main-image");
    mainImage.style.display = "none";
    let controls = document.querySelector(".controls")

    controls.style.display = "none";

    // Show the thumbnails
    let thumbnails = document.querySelector(".thumbnails");
    thumbnails.style.display = "flex";

    // Hide the back button
    let backButton = document.querySelector(".back-button");
    backButton.style.display = "none";

    // Reset the main image visibility flag
    isMainImageVisible = false;


    thumbnails.style.width = "50vw";


    const rows = document.querySelectorAll(".row");

    for (const row of rows) {
      row.style.width = "100%";
      row.style.height = "10vw";
    }

    const allImages = document.querySelectorAll("img");
    const otherImages = Array.from(allImages).filter(image => image !== Theimage);
    for (const image of otherImages) {
        image.style.width = "24%";
        image.style.height = "10vw";

      }


}