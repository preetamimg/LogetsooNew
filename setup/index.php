<?php include '../layouts/header-link.php' ?>
<?php include '../layouts/header.php' ?>

<main class="main-scrollbar">

    <div class="container-fluid vh-100 bg-fluid" style="--bg: url(<?php echo iii ?>assets/img/default.jpg); --bgPosition: 100% 40%; --bgSize: 100%;">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-auto py-5 bg-fluid border-top border-end border-4" style="--bg: #ffffff2b; border-top-color: #ffffff24 !important; border-right-color: #00000024 !important;">
                    <div class="row">
                        <div class="col-12">
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-md-4">
                                    <label for="projectname" class="form-label">Project name</label>
                                    <input type="text" class="form-control" id="projectname" value="Mark" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="urlprojectname" class="form-label">urlprojectname</label>
                                    <input type="text" class="form-control" id="urlprojectname" value="Otto" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="title" class="form-label">title</label>
                                    <input type="text" class="form-control" id="title" value="Otto" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="description" class="form-label">description</label>
                                    <input type="text" class="form-control" id="description" value="Otto" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="metatags" class="form-label">metatags</label>
                                    <input type="text" class="form-control" id="metatags" value="Otto" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label" for="invalidCheck">
                                            Agree to terms and conditions
                                        </label>
                                        <div class="invalid-feedback">
                                            You must agree before submitting.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    var projectname,
                        urlprojectname,
                        title,
                        description,
                        metatags;

                    projectname = $('#projectname').val();
                    console.log(projectname);
                    urlprojectname = $('#urlprojectname').val();
                    console.log(urlprojectname);
                    title = $('#title').val();
                    console.log(title);
                    description = $('#description').val();
                    console.log(description);
                    metatags = $('#metatags').val();
                    console.log(metatags);
                    window.open('http://localhost/10Scoresssssssssss/', '_self')


                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })();
</script>
<?php include '../layouts/footer.php' ?>
<?php include '../layouts/footer-link.php' ?>