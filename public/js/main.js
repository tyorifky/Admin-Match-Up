function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
}

function mapsview() {
    const input = document.getElementById("embedinput");
    let inputsort = document.getElementById("embed-sort")
    let originalString = input.value;
    let wordsToRemove = [
      '<iframe src="',
      '" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
    ];
  
    for (let word of wordsToRemove) {
      originalString = originalString.replace(new RegExp(word.replace(/[.*+\-?^${}()|[\]\\]/g, '\\$&'), "gi"), "");
    }

    inputsort.value = originalString
    document.getElementById("mapsdisplay").src = originalString;
    console.log(originalString);
  }
  

