<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
    <div class="container mx-auto">
        <div class="flex justify-end mb-4">
            <a href="<?= url('backend/slider-manager/create') ?>" class="btn btn-sm bg-emerald-500 hover:bg-emerald-400 active:bg-emerald-600 text-white">
                <span class="flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                    </svg>
                    <span>Create</span>
                </span>
            </a>
        </div>
        <h3 class="text-lg font-semibold mb-4 lg:mb-0">Slider List</h3>
        <div class="mt-6 h-full flex flex-col">
            <span class="text-lg font-bold"><?= count($sliders) ? '' : 'No data' ?></span>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                <?php foreach ($sliders as $key => $slider) { ?>
                    <div class="card card card-layout-frame">
                        <div class="card-body h-full">
                            <div class="flex flex-col justify-between h-full">
                                <div class="flex justify-between">
                                    <a href="#">
                                        <h6 class="text-md font-bold"><?= $slider['title'] ?> (<?= $slider['slider_key'] ?>)</h6>
                                    </a>
                                    <div class="flex gap-2">
                                        <a href="<?= url('backend/slider-manager/edit/' . $slider['id']) ?>" class="btn btn-icon btn-xs rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"></path>
                                            </svg>
                                        </a>
                                        <a href="<?= url('backend/slider-manager/destroy/' . $slider['id']) ?>" class="btn btn-icon btn-xs btn-plain rounded-full" onclick="return confirm('Are you sure?')">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <p class="mt-4">
                                    <?= $slider['description'] ?>
                                </p>
                                <div class="mt-3">
                                    <div class="flex items-center justify-between mt-2">
                                        <div class="avatar-group avatar-group-chained">
                                            <?php foreach (explode(';', $slider['images']) as $key => $image) { ?>
                                                <span class="avatar avatar-circle cursor-pointer avatar-sm">
                                                    <img class="avatar-img avatar-circle" src="<?= $image ?>">
                                                </span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>