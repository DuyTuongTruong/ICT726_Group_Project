<?php
$title = "Recipes";
$subtitle = "Add Recive";
require_once APPROOT . '/src/views/admin/include/header.php';
?>
<?php require_once APPROOT . '/src/views/admin/include/sidebar.php'; ?>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<main>
    <div class="head-title">
        <div class="left">
            <h1><?= $title ?></h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#"><?= $title ?></a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#"><?= $subtitle ?></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="table-data">
        <div class="formRecipe-main-wrapper">
            <div class="formRecipe-form-wrapper">
                <form action="#" method="POST">
                    <div class="formRecipe-steps">
                        <ul>
                            <li class="formRecipe-step-menu1 active">
                                <span>1</span>
                                Add Recipe
                            </li>
                            <li class="formRecipe-step-menu2">
                                <span>2</span>
                                Add Tnstructions
                            </li>
                            <li class="formRecipe-step-menu3">
                                <span>3</span>
                                Confirm
                            </li>
                        </ul>
                    </div>

                    <div class="formRecipe-form-step-1 active">
                        <div class="formRecipe-input-flex">
                            <div>
                                <label for="title-recipe" class="formRecipe-form-label"> Title </label>
                                <input
                                    type="text"
                                    name="title"
                                    placeholder="Enter title recipe"
                                    id="title-recipe"
                                    class="formRecipe-form-input" />
                            </div>
                            <div>
                                <label for="image" class="formRecipe-form-label"> Image </label>
                                <input
                                    type="file"
                                    name="image"
                                    placeholder="Choose Image"
                                    id="image"
                                    class="formRecipe-form-input" />
                            </div>
                        </div>

                        <div>
                            <label for="description" class="formRecipe-form-label"> Description </label>
                            <textarea
                                rows="6"
                                name="Description"
                                id="description"
                                placeholder="Type your Description"
                                class="formRecipe-form-input"></textarea>
                        </div>
                    </div>

                    <div class="formRecipe-form-step-2">
                        <div>
                            <label for="editor" class="formRecipe-form-label"> Instructions </label>
                            <textarea name="editor" id="editor"></textarea>
                        </div>
                    </div>

                    <div class="formRecipe-form-step-3">
                        <div class="formRecipe-form-confirm">
                            <p>
                                Are you sure you want to add this recipe?
                            </p>

                            <div>
                                <button class="formRecipe-confirm-btn active">
                                    <i class='bx bxs-check-circle'></i>
                                    Yes! I want it.
                                </button>

                                <button class="formRecipe-confirm-btn">
                                    <i class='bx bxs-check-circle'></i>
                                    No! I don’t want it.
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="formRecipe-form-btn-wrapper">
                        <button class="formRecipe-back-btn">
                            Back
                        </button>

                        <button class="formRecipe-btn">
                            Next Step
                            <i class='bx bx-right-arrow-alt'></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>

<script>
    CKEDITOR.replace('editor', {
        filebrowserUploadUrl: '/uploader/upload.php', // Change to your upload URL
        filebrowserUploadMethod: 'form'
    });
</script>


<?php require_once APPROOT . '/src/views/admin/include/footer.php'; ?>