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
        <div class="row justify-content-center">
            <div class="col-6 text-center ">
                <div>
                    <h2 class="text-dark">Projects</h2>
                </div>
                <div class="border border-primary p-2" id="project-items">
                    {{-- <tr>
                        <td>coba</td>
                        <td>coba</td>
                        <td>coba</td>
                        <td>
                            <form action="/" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('yakin???')"><span
                                        data-feather="x-circle">Delete</span></button>
                            </form>
                        </td>
                    </tr> --}}
                </div>
            </div>
            <div class="col-6 text-center">
                <div>
                    <h2 class="text-dark">Skills</h2>
                </div>
                <div class="border border-primary p-2" id="skill-items">
                    {{-- <tr>
                        <td>coba</td>
                        <td>coba</td>
                        <td>coba</td>
                        <td>
                            <form action="/" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('yakin???')"><span
                                        data-feather="x-circle">Delete</span></button>
                            </form>
                        </td>
                    </tr> --}}
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 text-center ">
                <div>
                    <h2 class="text-dark">Education</h2>
                </div>
                <div class="border border-primary p-2" id="education-items">
                    {{-- <tr>
                        <td>coba</td>
                        <td>coba</td>
                        <td>coba</td>
                        <td>
                            <form action="/" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('yakin???')"><span
                                        data-feather="x-circle">Delete</span></button>
                            </form>
                        </td>
                    </tr> --}}
                </div>
            </div>
            <div class="col-6 text-center">
                <div>
                    <h2 class="text-dark">Experience</h2>
                </div>
                <div class="border border-primary p-2" id="experience-items">
                    {{-- <tr>
                        <td>coba</td>
                        <td>coba</td>
                        <td>coba</td>
                        <td>
                            <form action="/" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('yakin???')"><span
                                        data-feather="x-circle">Delete</span></button>
                            </form>
                        </td>
                    </tr> --}}
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="backend/admin-home.js"></script>
</body>

</html>
