<?php
$data         = get_fields();
$post         = get_post();
$stock_number = get_query_var('vehicle_id', 0);

include(get_template_part_acf('templates/partials/header'));

echo '<!-- template: template/template-inventory -->'; ?>

    <div class="wrapper">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <section id="post-404">
                        <article>
                            <h1>Works!</h1>
                            <p><?= 'This vehicle has the ID of ' . $stock_number; ?></p>
                            <?php
                            dd(Handle\Custom\Rewrites::test_variables())
                            ?>
                        </article>
                    </section>
                </div>
            </div>

        </div>
    </div>

<?php include(get_template_part_acf('templates/partials/footer'));