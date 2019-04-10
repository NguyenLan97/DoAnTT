/// Upload file

function readURL(input, placeToInsertImagePreview) { // Hien thi anh khi upload

    if (input.files) {
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function (event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }
                reader.readAsDataURL(input.files[i]);
            }
       
    }
}

function remoteImage(placeRemove) { // Remove ?nh khi hi?n th? r?i

    $(placeRemove).remove();
}

$("#imgInp").change(function () {
    remoteImage("div.show-image.file img");
    readURL(this, "div.show-image.file");
});

$("#image-files").change(function () {
    remoteImage("div.show-image.files img");
    readURL(this, "div.show-image.files");
});