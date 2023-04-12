<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    {{-- Jquery --}}
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    {{-- Axios --}}
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    {{-- middelware --}}
    <script src="backend/middleware-auth.js"></script>
</head>

<body>

    @include('partials.navbar')

    <section>
        <div class="projects border border-success text-center p-3">
            <h3 class="text-dark">Projects</h3>
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="mb-3">
                        <label for="formFile" class="form-label"></label>
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
                    <input class="form-control" type="text" placeholder="Name Project" name="name_project"
                        aria-label="default input example" id="name_project">
                    <input class="form-control" type="text" placeholder="Name Company" name="name_company"
                        aria-label="default input example" id="name_company">
                    <input class="form-control" type="text" placeholder="Description" name="description"
                        aria-label="default input example" id="description">
                    <input class="form-control" type="text" placeholder="Link" name="link"
                        aria-label="default input example" id="link">
                    <button type="button" class="btn btn-primary mt-3" onclick="submitProject()">Submit</button>
                </div>
            </div>
        </div>
        <div class="projects border border-success text-center p-3">
            <h3 class="text-dark">Skill</h3>
            <div class="row justify-content-center">
                <div class="col-8">
                    <input class="form-control" type="text" placeholder="Name" name="name_project"
                        aria-label="default input example" id="name">
                    <input class="form-control" type="text" placeholder="Persentase" name="name_company"
                        aria-label="default input example" id="persentase">
                    <button type="button" class="btn btn-primary mt-3" onclick="submitSkill()">Submit</button>
                </div>
            </div>
        </div>
        <div class="projects border border-success text-center p-3">
            <h3 class="text-dark">Education</h3>
            <div class="row justify-content-center">
                <div class="col-8">
                    <input class="form-control" type="text" placeholder="title" name="title"
                        aria-label="default input example" id="education-title">
                    <input class="form-control" type="text" placeholder="position" name="position"
                        aria-label="default input example" id="education-position">
                    <input class="form-control" type="text" placeholder="date" name="date"
                        aria-label="default input example" id="education-date">
                    <input class="form-control" type="text" placeholder="description" name="description"
                        aria-label="default input example" id="education-description">
                    <button type="button" class="btn btn-primary mt-3" onclick="submitEducation()">Submit</button>
                </div>
            </div>
        </div>
        <div class="projects border border-success text-center p-3">
            <h3 class="text-dark">Experience</h3>
            <div class="row justify-content-center">
                <div class="col-8">
                    <input class="form-control" type="text" placeholder="title" name="title"
                        aria-label="default input example" id="experience-title">
                    <input class="form-control" type="text" placeholder="position" name="position"
                        aria-label="default input example" id="experience-position">
                    <input class="form-control" type="text" placeholder="date" name="date"
                        aria-label="default input example" id="experience-date">
                    <input class="form-control" type="text" placeholder="description" name="description"
                        aria-label="default input example" id="experience-description">
                    <button type="button" class="btn btn-primary mt-3" onclick="submitExperience()">Submit</button>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="backend/admin-form.js"></script>
</body>

</html>
