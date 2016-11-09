<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>What is my ip</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #212A3B;
                color: #86D6D9;
                font-family: apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                line-height: 1;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }


            .ip-address {
                font-size: 12vw;
                position: relative;
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
            }

            .ip-address::before {
                content: 'your ip address';
                font-size: 6vw;
                position: absolute;
                bottom: 12.5vw;
            }

            @media (min-width: 900px) {
                .ip-address {
                    font-size: 8vw;
                }

                .ip-address::before {
                    font-size: 3vw;
                    bottom: 8.5vw;
                }
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .m-b-sm {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="ip-address m-b-md">
                    {{ $ip }}
                </div>
            </div>
        </div>
    </body>
</html>
