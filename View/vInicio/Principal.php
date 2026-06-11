<?php
    include_once "../LayoutInterno.php";
?>

<!doctype html>
<html lang="en">

<?php
    ImportCSS();
?>

<body>
    <?
        Navbar();
        Sidebar();
     ?>
    <main id="content" class="content py-10">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="">
                            <h1 class="fs-3 mb-1">Inventory</h1>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                Footer();
             ?>

        </div>
        </div>
    </main>

    <?php
        ImportJS();
     ?>

</body>

</html>