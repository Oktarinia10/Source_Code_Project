<div class="md:bg-base-200 md:rounded-more md:shadow-md p-4">
    <h1 class="text-3xl font-bold py-4 border-b-2 border-dashed border-base-content mb-5">Tabel <?= $page_title ?></h1>
    <div class="w-full bg-base-3 relative">
        <table id="datatables" class="!w-full">
        </table>
    </div>
    <?= generate_csrf(); ?>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        // Create configuration
        config = {
            table_id: 'datatables',
            // Ajax server side config 
            ajax: {
                url: baseUrl("produk"),
                type: "GET",
                data: {
                    request_type: 'request-table',
                    orderable: ['product_slug', 'product_title'],
                    searchable: ['product_slug', 'product_title'],
                }
            },
            // Configure buttons
            buttons: {
                add: {
                    url: baseUrl('produk/tambah')
                },
                delete: {
                    url: baseUrl('produk'),
                    postData: postData()
                }
            },
            columns: [{
                    title: "Produk Slug",
                    name: "product_slug",
                    data: "product_slug",
                    render: function(data) {
                        return `<div class="flex items-center ml-5 py-1 flex-shrink-0">
                                    ${data}
                                </div>`;

                    }

                },
                {
                    title: "Nama Produk",
                    name: "product_title",
                    data: "product_title",
                    render: function(data) {
                        return `<div class="flex items-center ml-5 py-1 flex-shrink-0">
                                    ${data}
                                </div>`;

                    }
                },
                {
                    title: "Ikon",
                    name: "product_icon",
                    data: "product_icon",
                    className: 'text-center',
                    render: function(data) {
                        return `<i class="${data}"> ${data}</i>`;
                    },
                },

                {
                    title: "Aksi",
                    name: "unique_id",
                    data: "unique_id",
                    className: "text-center",
                    render: function(data) {
                        return (
                            `<div class="inline-flex text-xs mx-1">
                                <a href="${baseUrl(`produk/edit/${data}`)}" class="btn btn-sm btn-primary mx-1"> Ubah</a>
                            </div>`
                        );
                    },
                },
            ],

        }
        createDatatable(config)
    });
</script>
<script type="text/javascript" defer="true" charset="utf8" src="<?= base_url('datatables/datatables.min.js'); ?>"></script>
<script type="text/javascript" defer="true" charset="utf8" src="<?= base_url('datatables/config.min.js'); ?>"></script>