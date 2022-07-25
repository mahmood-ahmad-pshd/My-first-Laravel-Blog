<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
    .footer {
        /* position: absolute; */
        bottom: 0;
        width: 100%;
        height: 60px;
        /* Set the fixed height of the footer here */
        line-height: 60px;
        /* Vertically center the text there */
        background-color: #f5f5f5;
    }

    </style>

    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>
    <!-- Navigation bar -->
    <div>
        <div class="text-center w-50 m-auto">
            <img src="<?php echo e(asset('assets/images/logo.png')); ?>" class="w-25" alt="">
        </div>
        <div class="">
            <nav class="navbar navbar-expand-lg navbar-light text-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse border-top" id="navbarNav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">View Blogs</a>
                        </li>
                        <li class="nav-item">
                            <!-- Button trigger modal -->
                            <a type="button" class="btn" data-toggle="modal" data-target="#addNewBlogButton">
                                Add new
                            </a>
    
                            <!-- Modal -->
                            <div class="modal fade" id="addNewBlogButton" tabindex="-1" role="dialog"
                                aria-labelledby="addNewBlogButtonLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addNewBlogButtonLabel">Add New Blog</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" class="text-left" action="<?php echo e(route('addblog')); ?>">
                                                <?php echo csrf_field(); ?>
                                                <div class="form-group">
                                                    <div class="form-group col-md-12">
                                                        <label for="blogTitle">Add Title</label>
                                                        <input type="text" class="form-control" id="blogTitle"
                                                            name="title">
                                                    </div>
                                                </div>
    
                                                <div class="form-group">
                                                    <label for="blogCaption">Add Caption</label>
                                                    <textarea class="form-control" id="blogCaption" rows="2"
                                                        name="caption"></textarea>
                                                </div>
    
                                                <div class="form-group">
                                                    <label for="blogDescription">Add Description</label>
                                                    <textarea class="form-control" id="blogDescription" rows="3"
                                                        name="description"></textarea>
                                                </div>
    
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="Upload image"
                                                        name="image">
                                                    <label class="custom-file-label" for="Upload image">Choose
                                                        image...</label>
                                                    <div class="invalid-feedback">Example invalid custom file feedback
                                                    </div>
                                                </div>
                                                <div class="py-3">
                                                    <button type="submit" class="btn btn-primary">Add Blog</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Edit Blog</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    
    <?php echo $__env->yieldContent('mainBody'); ?>

    <?php echo $__env->yieldContent('footer'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Ahmad-Blog\resources\views/layout.blade.php ENDPATH**/ ?>