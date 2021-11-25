    <!-- Summernote css -->
    <link href="<?= base_url('dashboard/plugins/summernote/summernote-bs4.css') ?>" rel="stylesheet" />

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">
                <div class="page-title-box">
                </div>
                <!-- end page-title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <?= form_open() ?>
                                <div class="tabby">
                                    <div class="form-group">
                                        <label class="text-muted">Post Title</label>
                                        <input type="text" name="title" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted">Permalink</label>
                                        <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                            <span class="bootstrap-touchspin-prefix input-group-prepend">
                                                <?php $xq = uniqid() ?>
                                                <span class="input-group-text"><?= base_url() . '/post/' ?></span>
                                            </span><input type="text" name="slug" value="<?= "new-post-" . $xq ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted">Post Content</label>
                                        <textarea class="summernote" name="body" required id="summernote"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted">Short Description</label>
                                        <textarea class="form-control" rows="6" name="short_desc" required id="summernote"></textarea>
                                    </div>
                                    <div class="row col-12">
                                        <div class="gmz-field form-group  col-12 col-md-6 gmz-field-select" id="gmz-field-status-wrapper">
                                            <label for="gmz-field-status">Status</label>
                                            <select name="status" class="form-control" id="gmz-field-status">
                                                <option value="publish">Publish</option>
                                                <option value="draft">Draft</option>
                                                <option value="pending">Pending</option>
                                            </select>
                                        </div>
                                        <div class="gmz-field form-group  col-sm-6 col-12 gmz-field-select" id="gmz-field-property_type-wrapper">
                                            <label for="gmz-field-property_type">Post Category</label>
                                            <select name="categories" class="form-control" id="gmz-field-property_type">
                                                <option selected disabled>Select Post Category</option>
                                                <?php foreach ($categories as $cat) : ?>
                                                    <option value="<?= $cat['title'] ?>"><?= $cat['title'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="text-muted">Image</label>
                                        <div class="dropzone">
                                            <div class="fallback">
                                                <input name="file" class="" type="file" multiple="multiple">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- // tab for Images Upload -->
                                <div class="tabby">
                                    <div class="form-group">
                                        <label for="images">Image Upload</label>
                                        <input type="file" name="post_images[]" class="form-control" id="hotel_images" multiple />
                                    </div>
                                    <div class="imgGallery">
                                        <!-- image preview -->
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="text-center">
                                    <div style="overflow:auto;">
                                        <div style="float:right;">
                                            <button type="button" id="prevBtn" class="btn btn-info btn-md" onclick="nextPrev(-1)">Previous</button></button>btn btn-info btn-md" onclick="nextPrev(1)">Next</button>
                                            <button type="submit" id="submitBtn" class="btn btn-info btn-md"><?= lang('text.save') ?>
<span class="icon-spinner"><i class="fa fa-spinner load-animate"></i></span> </button>
                                        </div>
                                    </div>
                                </div>
                                <?= form_close() ?>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->

        </div>
        <!-- content -->
        <style>
            /* Hide all steps by default: */
            .tabby {
                display: none;
            }

            .imgGallery img {
                padding: 8px;
                max-width: 100px;
            }
        </style>
        <script>
            var currentTab = 0; // Current tab is set to be the first tab (0)
            showTab(currentTab); // Display the current tab

            function showTab(n) {
                var x = document.getElementsByClassName("tabby");
                x[n].style.display = "block";
                if (n == 0) {
                    document.getElementById("prevBtn").style.display = "none";
                } else {
                    document.getElementById("prevBtn").style.display = "inline";
                }
                if (n == (x.length - 1)) {
                    $('#nextBtn').hide();
                    $('#submitBtn').show();
                } else {
                    $('#nextBtn').show();
                    $('#submitBtn').hide();
                    document.getElementById("nextBtn").innerHTML = "<?= lang('text.next') ?>";
                }
            }

            function nextPrev(n) {
                var x = document.getElementsByClassName("tabby");
                x[currentTab].style.display = "none";
                // alert(x.length);
                currentTab = currentTab + n;
                if (currentTab >= x.length) {
                    document.getElementById("regForm").submit();
                    return false;
                }
                showTab(currentTab);
            }

            $(document).ready(function() {
                var counter = 2;
                $("#addButton").click(function() {
                    if (counter > 100) {
                        alert("Only 100 textboxes allow");
                        return false;
                    }
                    var newTextBoxDiv = $(document.createElement('div'))
                        .attr("id", 'TextBoxDiv' + counter);
                    newTextBoxDiv.after().html('<label class="mt-3">Facility #' + counter + ' : </label>' +
                        '<input type="text" name="facilities[]" class="form-control">');
                    newTextBoxDiv.appendTo("#TextBoxesGroup");
                    counter++;
                });
                $("#removeButton").click(function() {
                    if (counter == 1) {
                        alert("No more textbox to remove");
                        return false;
                    }
                    counter--;
                    $("#TextBoxDiv" + counter).remove();
                });
            });


            $(function() {
                // Multiple images preview with JavaScript
                var multiImgPreview = function(input, imgPreviewPlaceholder) {

                    if (input.files) {
                        var filesAmount = input.files.length;

                        for (i = 0; i < filesAmount; i++) {
                            var reader = new FileReader();

                            reader.onload = function(event) {
                                $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                            }

                            reader.readAsDataURL(input.files[i]);
                        }
                    }

                };

                $('#hotel_images').on('change', function() {
                    multiImgPreview(this, 'div.imgGallery');
                });
            });
        </script>