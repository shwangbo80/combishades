<?php
session_start();
ini_set('display_errors', 1);
if (!isset($_SESSION['id'])) {
    header('location:dealer-login');
}
?>
<?php
include ("./components/head.php");
?>

<body>
    <?php
    require './queries/fetch_dealer_info.php';
    ?>
    <div class="container-fluid print-container">
        <div class="container my-5">
            <div class="text-center">
                <h4 class="pb-3">Combi Shades Order Form</h4>
                <p>20805 Currier Rd., Walnut, CA 91789
                    <br>Tel: 626.965.7773 Fax: 888.788.5827 www.OnyxShutters.com
                </p>
            </div>
            <div class="row">
                <div class="col-4 small text-start">
                    Side Mark: ABB02-nana<br>
                    Material: Shutters<br>
                    Order Date: 3/21/2024<br>
                    Ship Via: Will Call<br>
                    PO NO.: 4545<br>
                    Order Note:
                </div>
                <div class="col-4 small">
                    Customer ID: ABB02 / ABBA ENTERPRISES INC.<br>
                    Name: PHIL/Kevin<br>
                    Ship To: 9450 7th St. Unit #A,<br>
                    Rancho Cucamonga, CA 91730<br>
                    Tel: 909-484-6000 Fax: 909-484-5222<br>
                    Email: abbawf@gmail.com
                </div>
                <div class="col-4 text-end small">
                    TotalArea: 1.668<br>
                    Sub Total: $19.93<br>
                    Grand Total: $19.93<br>
                    Proposed Deposit: $9.97
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid my-5 px-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="small">Ln</th>
                    <th scope="col" class="small">Qty</th>
                    <th scope="col" class="small">Room</th>
                    <th scope="col" class="small">Mtrl</th>
                    <th scope="col" class="small">Type</th>
                    <th scope="col" class="small"></th>
                    <th scope="col" class="small">Width</th>
                    <th scope="col" class="small">Height</th>
                    <th scope="col" class="small">Frame Height</th>
                    <th scope="col" class="small">Frame NO</th>
                    <th scope="col" class="small">Louver</th>
                    <th scope="col" class="small">Color</th>
                    <th scope="col" class="small">HG</th>
                    <th scope="col" class="small">Hng Color</th>
                    <th scope="col" class="small">Config</th>
                    <th scope="col" class="small">Tlt</th>
                    <th scope="col" class="small">Lbty</th>
                    <th scope="col" class="small">Stl</th>
                    <th scope="col" class="small">Dvder</th>
                    <th scope="col" class="small">Splt Rod</th>
                    <th scope="col" class="small">Extn sion</th>
                    <th scope="col" class="small">Area</th>
                    <th scope="col" class="small">Sr chrge</th>
                    <th scope="col" class="small">Line Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="small" rowspan="2">1</td>
                    <td class="small">1</td>
                    <td class="small"></td>
                    <td class="small">Bassia</td>
                    <td class="small">Regular</td>
                    <td class="small">w</td>
                    <td class="small">10</td>
                    <td class="small">10</td>
                    <td class="small">Decor 2</td>
                    <td class="small">4</td>
                    <td class="small">3 1/2</td>
                    <td class="small">101_White</td>
                    <td class="small"></td>
                    <td class="small">White</td>
                    <td class="small">LR</td>
                    <td class="small">C</td>
                    <td class="small"></td>
                    <td class="small">A</td>
                    <td class="small"></td>
                    <td class="small"></td>
                    <td class="small"></td>
                    <td class="small">1.668</td>
                    <td class="small">0.000</td>
                    <td class="small">19.933</td>

                </tr>
                <tr>
                    <td colspan="24" class="small text-start">Etc</td>
                </tr>
            </tbody>
        </table>
        <div class="container">
            <p class="small">*** Tlt: C =Front Center Tiltrod; H1 =Hidden Tiltrod Notch On Stile; H2 =Hidden
                Tiltrod Notch On Louver; H3 =Hidden Tiltrod In Stile. Motor: 2 1/2 in stile on panel.
                <br>
                Please Confirm This Order: ____________________________ (Initial)
                Date:_________________________________
                <br>
                Please remit your proposed Check to ONYX Shutters, or use our CHECK BY FAX service in order to
                proceed your order.
            </p>
        </div>
    </div>
    </div>
</body>
<?php
include ("./components/script.php");
?>

</html>