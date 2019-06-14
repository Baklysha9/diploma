export function slider() {
    class SliderItem {
        constructor(src, text) {
            this.src = src;
            this.text = text;
        }
    }
    let images = [new SliderItem("img/kommunikationsfotografie-05.jpg", "Bester Service in Basel"),new SliderItem("img/kommunikationsfotografie-10.jpg", "Schönes und bequemes Kabinett"),new SliderItem("img/kommunikationsfotografie-13.jpg", "Freundliches und höfliches Personal")];
    let currentIndex = 0;
    setImage(images[0]);

    setInterval(function() {
        scrolRight();
      }, 4000);

    function scrolRight() {
        currentIndex ++;
        if(currentIndex >= images.length) {
            currentIndex = 0;
        }
        setImage(images[currentIndex]);
    }
    
    function setImage(galleryItem) {
        $('#image').fadeOut('slow', function() {
            $("#image").prop('src', galleryItem.src);
            $("#title").text(galleryItem.text);
            $("#image").fadeIn('slow');
            $("#title").fadeIn('slow');
          });
    }
}
