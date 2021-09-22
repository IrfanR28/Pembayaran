<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('temp/src/assets/images/favicon.png') }}">
    <title>E-PIS | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <section style="height: 100%; width: 100%; box-sizing: border-box; background-color: #F5F5F5">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

            .btn:focus,
            .btn:active {
                outline: none !important;
            }

            .width-left-content-3-5 {
                width: 0%;
            }

            .width-right-content-3-5 {
                width: 100%;
                height: 100%;
                padding: 8rem 2rem 8rem 2rem;
                margin-left: auto;
                margin-right: auto;
                background-color: #FCFDFF;
            }

            .centered-content-3-5 {
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
            }

            .right-content-3-5 {
                width: 100%;
                margin-left: auto;
                margin-right: auto;
            }

            .title-text-content-3-5 {
                font-size: 1.875rem;
                line-height: 2.25rem;
                font-weight: 600;
                margin-bottom: 0.75rem;
            }

            .caption-text-content-3-5 {
                font-size: 0.875rem;
                line-height: 1.75rem;
                color: #A8ADB7;
            }

            .input-label-content-3-5 {
                color: #39465B;
                font-size: 1.125rem;
                line-height: 1.75rem;
                font-weight: 500;
            }

            .div-input-content-3-5 {
                padding: 1rem 1.25rem 1rem 1.25rem;
                margin-top: 0.75rem;
                font-size: 1rem;
                line-height: 1.5rem;
                font-weight: 300;
                border-radius: 0.75rem;
                border: 1px solid #CACBCE;
                color: #2A3240;
            }

            .div-input-content-3-5:focus-within {
                border: 1px solid #2EC49C;
                color: #2A3240;
            }

            .div-input-content-3-5 input::placeholder {
                color: #CACBCE;
            }

            .div-input-content-3-5:focus-within input::placeholder {
                color: #2A3240;
                outline: none;
            }

            .div-input-content-3-5:focus-within .icon-content-3-5 path {
                transition: 0.3;
                fill: #2EC49C;
            }

            .div-input-content-3-5 .icon-toggle-empty-3-5 path {
                transition: 0.3;
                fill: #2EC49C;
            }

            .input-field-content-3-5 {
                width: 100%;
                font-size: 1rem;
                line-height: 1.5rem;
                font-weight: 300;
                background-color: #FCFDFF;
                border: none;
            }

            .input-field-content-3-5:focus {
                outline: none;
            }

            .forgot-password-content-3-5 {
                font-size: 0.875rem;
                line-height: 1.25rem;
                color: #CACBCE;
                transition: 0.3s;
            }

            .forgot-password-content-3-5:hover {
                color: #2A3240;
                text-decoration: none;
            }

            .btn-fill-content-3-5 {
                background-image: linear-gradient(rgba(91, 203, 173, 1), rgba(39, 194, 153, 1));
                padding: 0.75rem 1rem 0.75rem 1rem;
                margin-top: 2.25rem;
                color: #FFFFFF;
                font-size: 1.25rem;
                line-height: 1.75rem;
                font-weight: 500;
                border-radius: 0.75rem;
                transition: 0.5s;
            }

            .btn-fill-content-3-5:hover {
                color: #FFFFFF;
                background-image: linear-gradient(#2EC49C, #2EC49C);
                ;
                transition: 0.5s;
            }

            .bottom-caption-content-3-5 {
                margin-top: 2rem;
                font-size: 0.875rem;
                line-height: 1.25rem;
                color: #2A3240;
            }

            .green-bottom-caption-content-3-5 {
                color: #2EC49C;
                font-weight: 500;
            }

            .green-bottom-caption-content-3-5:hover {
                color: #2EC49C;
                cursor: pointer;
                text-decoration: underline;
            }

            @media (min-width: 576px) {
                .width-right-content-3-5 {
                    padding: 8rem 4rem 8rem 4rem;
                }

                .right-content-3-5 {
                    width: 58.333333%;
                }
            }

            @media (min-width: 768px) {
                .right-content-3-5 {
                    width: 66.666667%;
                }
            }

            @media (min-width: 992px) {
                .width-left-content-3-5 {
                    width: 48%;
                }

                .width-right-content-3-5 {
                    width: 52%;
                    margin-left: 0;
                    margin-right: 0;
                }

                .right-content-3-5 {
                    width: 75%;
                    margin-right: 0;
                    margin-left: 0;
                }
            }

            @media (min-width: 1200px) {
                .right-content-3-5 {
                    width: 58.333333%;
                    ;
                }
            }
        </style>

        <div class="d-flex flex-column align-items-center h-100 flex-lg-row" style="font-family: 'Poppins', sans-serif;">
            <div class="position-relative d-none d-lg-block h-100 width-left-content-3-5">
                <img class="position-absolute img-fluid centered-content-3-5" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Empty%20State/EmptyState3/Empty-3-5.png" alt="">
            </div>
            <div class="d-flex mx-auto align-items-left justify-content-left width-right-content-3-5">
                <!-- content -->
                @yield('content')
            </div>


        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>

<!-- html -->