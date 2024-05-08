<form method="POST" id="form-value" action="<?= isset($dataView) ? url('backend/slider-manager/update/' . $dataView->id) : url('backend/slider-manager/store') ?>">
    <div class="card adaptable-card mb-4">
        <div class="card-body">
            <div class="flex justify-between items-center">
                <div>
                    <h5 class="text-lg font-semibold">Create Slider</h5>
                    <p class="mb-6">Add or change image for the slider</p>
                </div>
                <button class="btn btn-solid" type="submit" id="submitForm">
                    Save
                </button>
            </div>
            <div class="form-item vertical">
                <label class="form-label mb-2">Title</label>
                <div>
                    <input class="input" type="text" name="title" placeholder="Please enter title" value="<?= @$dataView->title ?>">
                </div>
            </div>
            <div class="form-item vertical">
                <label class="form-label mb-2">Key</label>
                <div>
                    <input class="input" type="text" name="slider_key" placeholder="Please enter key" value="<?= @$dataView->slider_key ?>">
                </div>
            </div>
            <div class="form-item vertical">
                <label class="form-label mb-2">Description</label>
                <div>
                    <textarea class="input input-textarea" name="description" placeholder="Please enter description"><?= @$dataView->description ?></textarea>
                </div>
            </div>
            <input type="text" name="images" id="imageInput" hidden value="<?= @$dataView->images ?>">
            <div class="form-item vertical">
                <label class="form-label"></label>
                <div>
                    <div class="upload upload-draggable hover:border-primary-600" id="choose-file">
                        <div class="my-16 text-center">
                            <img src="<?= asset('admin/img/others/upload.png') ?>" class="mx-auto">
                            <p class="font-semibold">
                                <span class="text-gray-800 dark:text-white">Choose your image here</span>
                            </p>
                            <p class="mt-1 opacity-60 dark:text-white">Support: jpeg, png</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="list-image">
        <?php
        $images = isset($dataView) ? explode(';', $dataView->images) : [];
        if (count($images)) {
            foreach ($images as $key => $image) { ?>
                <div class="item">
                    <span class="remove"></span>
                    <img src="<?= $image ?>" alt="">
                </div>
        <?php }
        } ?>
    </div>
</form>