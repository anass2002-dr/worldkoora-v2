<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table teams</title>
    <?php
    include './style.php'
    ?>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>

<body>
    <?php
    include './header.php'
    ?>

    <div class="table_ranked">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>


    </div>
    <!-- <div class="m-5">

        <div class="ranking-title-table">
            <ul class="ranking-title-row">
                <li>تصنيفات الفرق</li>
                <li>played</li>
                <li>won</li>
                <li>drawn</li>
                <li>lost</li>
                <li>goals</li>
                <li>against</li>
                <li>goal differences</li>
                <li>points</li>
            </ul>
        </div>
        <div class="ranking-content-table">
            <ul class="ranking-content-row">
                <li>1</li>
                <li>
                    <div class="ranking-logo"><span>L.A Pirates</span> <small>Bebop Institute</small> </div>
                </li>
                <li>08</li>
                <li>08</li>
                <li>16</li>
                <li>16</li>
                <li>16</li>
                <li>16</li>
                <li>16</li>
            </ul>
        </div>
        <div class="ranking-content-table">
            <ul class="ranking-content-row">
                <li>2</li>
                <li> <img src="extra-images/ranking-widget-flag-2.png" alt="">
                    <div class="ranking-logo"><span>Ocean Kings</span> <small>Icarus College</small> </div>
                </li>
                <li>08</li>
                <li>07</li>
                <li>14</li>
                <li>14</li>
                <li>14</li>
                <li>14</li>
                <li>14</li>
            </ul>
        </div>
        <div class="ranking-content-table">
            <ul class="ranking-content-row">
                <li>3</li>
                <li> <img src="extra-images/ranking-widget-flag-3.png" alt="">
                    <div class="ranking-logo"><span>Red Wings</span> <small>Marine College</small> </div>
                </li>
                <li>07</li>
                <li>07</li>
                <li>14</li>
                <li>14</li>
                <li>14</li>
                <li>14</li>
                <li>14</li>
            </ul>
        </div>
        <div class="ranking-content-table">
            <ul class="ranking-content-row">
                <li>3</li>
                <li> <img src="extra-images/ranking-widget-flag-3.png" alt="">
                    <div class="ranking-logo"><span>Red Wings</span> <small>Marine College</small> </div>
                </li>
                <li>07</li>
                <li>07</li>
                <li>14</li>
                <li>14</li>
                <li>14</li>
                <li>14</li>
                <li>14</li>
            </ul>
        </div>
        <div class="ranking-content-table">
            <ul class="ranking-content-row">
                <li>3</li>
                <li> <img src="extra-images/ranking-widget-flag-3.png" alt="">
                    <div class="ranking-logo"><span>Red Wings</span> <small>Marine College</small> </div>
                </li>
                <li>07</li>
                <li>07</li>
                <li>14</li>
                <li>14</li>
                <li>14</li>
                <li>14</li>
                <li>14</li>
            </ul>
        </div>

    </div> -->

    <?php
    include './footer.php'
    ?>
    <script src="node_modules/@popperjs/core/dist/cjs/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>