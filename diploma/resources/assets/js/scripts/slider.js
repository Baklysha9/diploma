export function slider() {
    class SliderItem {
        constructor(src, text) {
            this.src = src;
            this.text = text;
        }
    }
    let images = [new SliderItem("img/kommunikationsfotografie-05.jpg", "Lorem ipsum dolor sit amet consectetur adipisicing elit."),new SliderItem("img/kommunikationsfotografie-10.jpg", "Placeat, delectus, quidem rerum repellat ex fugit et modi laboriosam cum"),new SliderItem("img/kommunikationsfotografie-13.jpg", "Autem doloribus sed quod omnis eius quaerat culpa dolores cumque assumenda")];
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
