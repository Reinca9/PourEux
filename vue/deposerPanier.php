<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
require('header2.php');
?>

<body>
    <div>empty content</div>
    <div id="deposerPanierDiv">
        <h1 id="deposerPanierTitle">
            Déposer un panier
        </h1>
        <div>
            <div id=" myDatepicker" class="datepicker">
                <div class="date">
                    <div class="group">
                        <form id="envoyerPanierForm" action=" submit">
                            <div id="datePickerForm">
                                <button id="iconDate" type=" button" class="icon" aria-label="Choose Date">
                                    <span class="fa fa-calendar-alt fa-2x"></span>
                                </button>
                                <input type="text" placeholder="mm/jj/aaaa" id="id-textbox-1"
                                    aria-describedby="id-description-1">
                                <span class="desc" id="id-description-1"> <span class="sr-only">date format:
                                    </span></span>
                            </div>
                            <div id="heurePickerForm">
                                <label class="labelHourPicker" for="appt">Heure début disponiblité</label>
                                <input type="time" id="appt" name="appt" min="11:00" max="21:00" required>
                            </div>
                            <div id="heurePickerForm2">
                                <label class="labelHourPicker" for=" appt">Heure fin disponiblité</label>
                                <input type="time" id="appt" name="appt" min="11:00" max="21:00" required>
                            </div>
                            <textarea name="messageDeclarerPanier" form="envoyerPanierForm" id="messageDeclarerPanier"
                                cols="30" rows="10"
                                placeholder="Avez vous des informations à communiquer au livreur..."></textarea>
                            <button id="buttonDeclarerPanier" type=" submit">C'est parti!</button>
                        </form>



                    </div>

                    <div id=" id-datepicker-1" class="datepicker-dialog" role="dialog" aria-modal="true"
                        aria-label="Choose Date">

                        <div class="header">

                            <button type="button" class="prev-year" aria-label="previous year">
                                <span class="fas fa-angle-double-left fa-lg"></span>
                            </button>

                            <button type="button" class="prev-month" aria-label="previous month">
                                <span class="fas fa-angle-left fa-lg"></span>
                            </button>

                            <h2 id="id-grid-label" class="month-year" aria-live="polite">
                                February 2020
                            </h2>

                            <button type="button" class="next-month" aria-label="next month">
                                <span class="fas fa-angle-right fa-lg"></span>
                            </button>

                            <button type="button" class="next-year" aria-label="next year">
                                <span class="fas fa-angle-double-right fa-lg"></span>
                            </button>
                        </div>

                        <div class="table-wrap">
                            <table class="dates" role="grid" aria-labelledby="id-grid-label">
                                <thead>
                                    <tr>
                                        <th scope="col" abbr="Sunday">Dim</th>
                                        <th scope="col" abbr="Monday">Lun</th>
                                        <th scope="col" abbr="Tuesday">Mar</th>
                                        <th scope="col" abbr="Wednesday">Mer</th>
                                        <th scope="col" abbr="Thursday">Jeu</th>
                                        <th scope="col" abbr="Friday">Ven</th>
                                        <th scope="col" abbr="Saturday">Sam</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="disabled" tabindex="-1"></td>
                                        <td class="disabled" tabindex="-1"></td>
                                        <td class="disabled" tabindex="-1"></td>
                                        <td class="disabled" tabindex="-1"></td>
                                        <td class="disabled" tabindex="-1"></td>
                                        <td class="disabled" tabindex="-1"></td>
                                        <td tabindex="-1" data-date="2020-02-01">1</td>
                                    </tr>
                                    <tr>
                                        <td tabindex="-1" data-date="2020-02-02">2</td>
                                        <td tabindex="-1" data-date="2020-02-03">3</td>
                                        <td tabindex="-1" data-date="2020-02-04">4</td>
                                        <td tabindex="-1" data-date="2020-02-05">5</td>
                                        <td tabindex="-1" data-date="2020-02-06">6</td>
                                        <td tabindex="-1" data-date="2020-02-07">7</td>
                                        <td tabindex="-1" data-date="2020-02-08">8</td>
                                    </tr>
                                    <tr>
                                        <td tabindex="-1" data-date="2020-02-09">9</td>
                                        <td tabindex="-1" data-date="2020-02-10">10</td>
                                        <td tabindex="-1" data-date="2020-02-11">11</td>
                                        <td tabindex="-1" data-date="2020-02-12">12</td>
                                        <td tabindex="-1" data-date="2020-02-13">13</td>
                                        <td tabindex="0" data-date="2020-02-14" role="gridcell" aria-selected="true">14
                                        </td>
                                        <td tabindex="-1" data-date="2020-02-15">15</td>
                                    </tr>
                                    <tr>
                                        <td tabindex="-1" data-date="2020-02-16">16</td>
                                        <td tabindex="-1" data-date="2020-02-17">17</td>
                                        <td tabindex="-1" data-date="2020-02-18">18</td>
                                        <td tabindex="-1" data-date="2020-02-19">19</td>
                                        <td tabindex="-1" data-date="2020-02-20">20</td>
                                        <td tabindex="-1" data-date="2020-02-21">21</td>
                                        <td tabindex="-1" data-date="2020-02-22">22</td>
                                    </tr>
                                    <tr>
                                        <td tabindex="-1" data-date="2020-02-23">23</td>
                                        <td tabindex="-1" data-date="2020-02-24">24</td>
                                        <td tabindex="-1" data-date="2020-02-25">25</td>
                                        <td tabindex="-1" data-date="2020-02-26">26</td>
                                        <td tabindex="-1" data-date="2020-02-27">27</td>
                                        <td tabindex="-1" data-date="2020-02-28">28</td>
                                        <td tabindex="-1" data-date="2020-02-29">29</td>
                                    </tr>
                                    <tr>
                                        <td tabindex="-1" data-date="2020-02-30">30</td>
                                        <td tabindex="-1" data-date="2020-02-31">31</td>
                                        <td class="disabled" tabindex="-1"></td>
                                        <td class="disabled" tabindex="-1"></td>
                                        <td class="disabled" tabindex="-1"></td>
                                        <td class="disabled" tabindex="-1"></td>
                                        <td class="disabled" tabindex="-1"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="dialog-ok-cancel-group">
                            <button class="dialog-button" value="cancel">
                                Annuler
                            </button>
                            <button class="dialog-button" value="ok">
                                Confirmer
                            </button>
                        </div>
                        <div class="dialog-message" aria-live="polite"></div>

                    </div>
                </div>


            </div>
        </div>
    </div>
    <div>
        <h2>Vos panier repas</h2>
    </div>
    <script type="text/javascript" src="../public/assets/js/datePicker.js"></script>
</body>

</html>