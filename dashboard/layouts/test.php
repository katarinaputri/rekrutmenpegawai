<div class="form-group mt-2">
    <label for="address" class="form-label">Image</label>
    <img class="img-preview img-fluid mb-3 col-sm-6" alt="">
    <input class="form-control" id="image" name="image" type="file" onchange="previewImage()" value="{{ old('image') }}">
</div>

<div class="form-group mt-2">
    <label for="address">Address</label>
    <input class="form-control" id="address" name="address" type="text" value="{{ old('address') }}">
</div>

<script>
    function previewImage() {
        const image = document.querySelector('#image')
        const imagePreview = document.querySelector('.img-preview')

        imagePreview.style.display = 'block'

        const oFReader = new FileReader()
        oFReader.readAsDataURL(image.files[0])

        oFReader.onload = function(oREvent) {
            imagePreview.src = oREvent.target.result
        }
    }
</script>