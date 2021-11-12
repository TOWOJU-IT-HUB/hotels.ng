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
                                <?php $attributes = ['id' => 'regForm']; ?>
                                <?= form_open_multipart('/', $attributes) ?>
                                <div style="min-height: 350px">
                                    <div class="tabby">
                                        <div class="gmz-field form-group col-12 gmz-field-text  gmz-field-has-translation " id="gmz-field-post_title-wrapper">
                                            <label for="gmz-field-post_title">Title</label>
                                            <input type="hidden" name="hotel_id" value="<?= uniqid() ?>">
                                            <input type="text" name="hotel_name" class="form-control  gmz-validation  " id="gmz-field-post_title" value="New hotel <?= uniqid() ?>">
                                        </div>
                                        <div class="w-100"></div>
                                        <div class="gmz-field form-group col-12 gmz-field-editor  gmz-field-has-translation " id="gmz-field-post_content-wrapper">
                                            <label for="gmz-field-post_content">Content</label>
                                            <textarea class="summernote" name="description" required id="summernote"></textarea>
                                        </div>
                                        <div class="row p-3">
                                            <div class="gmz-field form-group  col-12 col-md-4 gmz-field-select" id="gmz-field-status-wrapper">
                                                <label for="gmz-field-status">Status</label>
                                                <select name="status" class="form-control" id="gmz-field-status">
                                                    <option value="publish">Publish</option>
                                                    <option value="draft">Draft</option>
                                                    <option value="pending">Pending</option>
                                                </select>
                                            </div>
                                            <div class="gmz-field form-group  col-sm-4 col-12 gmz-field-select" id="gmz-field-hotel_star-wrapper">
                                                <label for="gmz-field-hotel_star">Hotel Star</label>
                                                <select name="hotel_star" class="form-control" id="gmz-field-hotel_star">
                                                    <option value="10">5 Star</option>
                                                    <option value="8">4 Star</option>
                                                    <option value="6">3 Star</option>
                                                    <option value="4">2 Star</option>
                                                    <option value="2">1 Star</option>
                                                </select>
                                            </div>
                                            <div class="gmz-field form-group  col-sm-4 col-12 gmz-field-select" id="gmz-field-property_type-wrapper">
                                                <label for="gmz-field-property_type">Property Type</label>
                                                <select name="property_type" class="form-control" id="gmz-field-property_type">
                                                    <option value="Lodges">Lodges</option>
                                                    <option value="Resorts">Resorts</option>
                                                    <option value="Motels">Motels</option>
                                                    <option value="Villas">Villas</option>
                                                    <option value="Homestays">Homestays</option>
                                                    <option value="Hotels">Hotels</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- // tab for Location -->
                                    <div class="tabby">
                                        <h5 class="mb-3">Add Map Location</h5>
                                        <div class="form-group">
                                            <label for="images">Longitude</label>
                                            <input type="text" name="longitude" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="images">Latitude</label>
                                            <input type="text" name="latitude" class="form-control">
                                        </div>
                                    </div>
                                    <!-- // tab for Facilities -->
                                    <div class="tabby">
                                        <h5 class="mb-3">Add Facilities</h5>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group" id="TextBoxesGroup">
                                                    <label for="images">Facility #1</label>
                                                    <input type="text" name="facilities[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-4">
                                                <a href="#!" id='addButton'>
                                                    <i class="fas fa-plus-circle fa-2x m-2"></i>
                                                </a>
                                                <a href="#!" id='removeButton'>
                                                    <i class="fas fa-minus-circle fa-2x m-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- // tab for Images Upload -->
                                    <div class="tabby">
                                        <div class="form-group">
                                            <label for="images">Image Upload</label>
                                            <input type="file" name="hotel_images[]" class="form-control" id="hotel_images " multiple />
                                        </div>
                                        <div class="imgGallery">
                                            <!-- image preview -->
                                        </div>
                                    </div>
                                </div>
                                <div style="overflow:auto;">
                                    <div style="float:right;">
                                        <button type="button" id="prevBtn" class="btn btn-info btn-md" onclick="nextPrev(-1)">Previous</button>
                                        <button type="button" id="nextBtn" class="btn btn-info btn-md" onclick="nextPrev(1)">Next</button>
                                        <button type="submit" id="submitBtn" class="btn btn-info btn-md"><?= lang('text.save') ?></button>
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