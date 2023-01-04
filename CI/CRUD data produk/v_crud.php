<div class="lg:p-7 md:bg-base-100 md:rounded-more md:shadow-md">
    <h1 class="py-2 text-3xl font-bold md:text-4xl"><?= $page_title ?></h1>

    <form action="<?= current_url() ?>" enctype="multipart/form-data" method="POST" class="">
        <?= generate_csrf(); ?>

        <div class="flex flex-col gap-2 pt-3 pb-4">

            <div class="form-control">
                <div class="w-full space-y-1 lg:inline-flex lg:items-center">
                    <label for="product_title" class="inline-flex gap-2 font-semibold lg:text-lg lg:w-72">
                        <span>Nama Produk</span>
                        <a title="bantuan" class="w-6 rounded-full btn btn-xs btn-outline btn-square" data-bs-toggle="collapse" href="#helper_product_title" role="button" aria-expanded="false" aria-controls="helper_product_title">
                            <i class="bi-question-lg"></i>
                        </a>
                    </label>

                    <input type="text" name="product_title" value="<?= set_value('product_title', $products->product_title ?? '') ?>" id="product_title" placeholder="Nama Produk" class="<?= set_invalid('product_title') ?> input input-bordered w-full placeholder:text-gray-400" required>
                    <?= form_error('product_title'); ?>
                </div>
                <div class="mt-2 collapse" id="helper_product_title">
                    <div class="card p-3 bg-base-100 border text-xs !rounded-more-sm w-full">
                        tambahkan penjelasan disini
                    </div>
                </div>
            </div>

            <div class="form-control">
                <div class="w-full space-y-1 lg:inline-flex lg:items-center">
                    <label for="product_title" class="inline-flex gap-2 font-semibold lg:text-lg lg:w-72">
                        <span>Ikon</span>
                        <a title="bantuan" class="w-6 rounded-full btn btn-xs btn-outline btn-square" data-bs-toggle="collapse" href="#helper_product_title" role="button" aria-expanded="false" aria-controls="helper_product_title">
                            <i class="bi-question-lg"></i>
                        </a>
                    </label>

                    <div class="relative flex flex-wrap items-stretch w-full">
                        <input required type="text" autocomplete="off" name="product_icon" value="<?= set_value('product_icon', $products->product_icon ?? 'bi-link-45deg') ?>" id="product_icon" placeholder="Cari ikon" class="<?= set_invalid('product_icon') ?> iconpicker input input-bordered w-full">
                        <span class="absolute z-10 items-center -translate-y-1/2 selected-icon right-4 top-1/2">
                        </span>
                    </div>
                    <?= form_error('product_icon'); ?>
                </div>
                <div class="mt-2 collapse" id="helper_product_title">
                    <div class="card p-3 bg-base-100 border text-xs !rounded-more-sm w-full">
                        tambahkan penjelasan disini
                    </div>
                </div>
            </div>

            <div class="form-control">
                <div class="w-full space-y-1 lg:inline-flex lg:items-center">
                    <label for="product_desc" class="inline-flex gap-2 font-semibold lg:text-lg lg:w-72">
                        <span>Deskripsi Produk</span>
                        <a title="bantuan" class="w-6 rounded-full btn btn-xs btn-outline btn-square" data-bs-toggle="collapse" href="#helper_product_desc" role="button" aria-expanded="false" aria-controls="helper_product_desc">
                            <i class="bi-question-lg"></i>
                        </a>
                    </label>

                    <textarea type="text" name="product_desc" id="product_desc" placeholder="Deskripsi Produk" class="<?= set_invalid('product_desc') ?> input input-bordered w-full placeholder:text-gray-400" required><?= set_value('product_desc', $products->product_desc ?? '') ?></textarea>
                    <?= form_error('product_id'); ?>
                    <?= form_error('product_desc'); ?>
                </div>
                <div class="mt-2 collapse" id="helper_product_desc">
                    <div class="card p-3 bg-base-100 border text-xs !rounded-more-sm w-full">
                        tambahkan penjelasan disini
                    </div>
                </div>
            </div>

        </div>

        <div class="flex flex-row justify-end pt-3 mt-2 space-x-3">
            <a href="<?= base_url('produk') ?>" class="font-bold btn btn-transparent hover:btn-primary">Kembali</a>
            <button type="submit" name="form-<?= get_method(); ?>" value="1" class="font-bold btn btn-primary"><?= $page_title; ?></button>
        </div>
    </form>
</div>
</div>
<script src="<?php echo base_url('iconpicker/dist/iconpicker.js'); ?>"></script>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        get_iconpicker("<?= set_value('product_icon', $products->product_icon ?? ''); ?>")
    });
</script>