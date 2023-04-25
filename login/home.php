<!-- main page -->

<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

    require 'dbcon.php';

    ?>




    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>JavaScript example</title>
        <meta charSet="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style media="only screen">
            html,
            body {
                height: 100%;
                width: 100%;
                margin: 0;
                box-sizing: border-box;
                -webkit-overflow-scrolling: touch;
            }

            html {
                position: absolute;
                top: 0;
                left: 0;
                padding: 0;
                overflow: auto;
            }

            body {
                padding: 1rem;
                overflow: auto;
            }

            .logout {
                float: right;
                background: #555;
                padding: 10px 15px;
                color: #fff;
                border-radius: 5px;
                margin-right: 10px;
                border: none;
                text-decoration: none;
                font-family: sans-serif;
            }

            .headDiv {
                display: flex;
                justify-content: center;
                align-items: center;
                background: #0785f9;
                /* margin: 13px 1px; */
                margin-bottom: 25px;
                padding: 0;
                border-radius: 6px;
            }

            .headHead {
                margin: 0;
                padding: 9px 5px;
                font-family: sans-serif;
                color: white;
            }

            .example-wrapper {
                display: flex;
                flex-direction: column;
                height: 100%;
            }

            #myGrid {
                flex: 1 1 0px;
                width: 100%;
            }

            .example-header {
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                font-size: 13px;
                margin-bottom: 5px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .ag-header {
                background: rgb(184 212 255) !important;
            }

            /* button class */
            .addData {
                width: 130px;
                height: 40px;
                color: #fff;
                border-radius: 5px;
                padding: 10px 25px;
                font-family: 'Lato', sans-serif;
                font-weight: 500;
                background: transparent;
                cursor: pointer;
                transition: all 0.3s ease;
                position: relative;
                display: inline-block;
                box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
                    7px 7px 20px 0px rgba(0, 0, 0, .1),
                    4px 4px 5px 0px rgba(0, 0, 0, .1);
                outline: none;
            }

            .btn-3 {
                background: rgb(0, 172, 238);
                background: linear-gradient(0deg, rgba(0, 172, 238, 1) 0%, rgba(2, 126, 251, 1) 100%);
                width: 100px;
                height: 36px;
                line-height: 37px;
                padding: 0;
                border: none;
                text-decoration: none;

            }

            .btn-3 span {
                position: relative;
                display: block;
                width: 100%;
                height: 100%;
            }

            .btn-3:before,
            .btn-3:after {
                position: absolute;
                content: "";
                right: 0;
                top: 0;
                background: rgba(2, 126, 251, 1);
                transition: all 0.3s ease;
            }

            .btn-3:before {
                height: 0%;
                width: 2px;
            }

            .btn-3:after {
                width: 0%;
                height: 2px;
            }

            .btn-3:hover {
                background: transparent;
                box-shadow: none;
            }

            .btn-3:hover:before {
                height: 100%;
            }

            .btn-3:hover:after {
                width: 100%;
            }

            .btn-3 span:hover {
                color: rgba(2, 126, 251, 1);
            }

            .btn-3 span:before,
            .btn-3 span:after {
                position: absolute;
                content: "";
                left: 0;
                bottom: 0;
                background: rgba(2, 126, 251, 1);
                transition: all 0.3s ease;
            }

            .btn-3 span:before {
                width: 2px;
                height: 0%;
            }

            .btn-3 span:after {
                width: 0%;
                height: 2px;
            }

            .btn-3 span:hover:before {
                height: 100%;
            }

            .btn-3 span:hover:after {
                width: 100%;
            }

            .btn-2 {
                background: rgb(96, 9, 240);
                background: linear-gradient(0deg, rgb(108 169 255) 0%, rgb(176 113 241) 100%);
                border: none;
                width: 60px;
                height: 33px;
                color: #fff;
                border-radius: 5px;
                padding: 10px 25px;
                font-family: 'Lato', sans-serif;
                font-weight: 500;
                cursor: pointer;
                transition: all 0.3s ease;
                position: relative;
                display: inline-block;
                box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5), 7px 7px 20px 0px rgba(0, 0, 0, .1), 4px 4px 5px 0px rgba(0, 0, 0, .1);
                outline: none;
            }

            .btn-2:before {
                height: 0%;
                width: 2px;
            }

            .btn-2:hover {
                box-shadow: 4px 4px 6px 0 rgba(255, 255, 255, .5),
                    -4px -4px 6px 0 rgba(116, 125, 136, .5),
                    inset -4px -4px 6px 0 rgba(255, 255, 255, .2),
                    inset 4px 4px 6px 0 rgba(0, 0, 0, .4);
            }
        </style>
        <link rel="stylesheet" href="styles.css" />
    </head>

    <body>
        <h1>Hello,
            <?php echo $_SESSION['name']; ?>
        </h1>
        <a class="logout" href="logout.php">Logout</a>
        <div class="headDiv">
            <h2 class="headHead">WEB-PRESENTATION CONSOLE</h2>
        </div>
        <div class="example-wrapper">
            <div class="example-header">
                <div>
                    Page Size:
                    <select onchange="onPageSizeChanged()" id="page-size">
                        <option value="10" selected>10</option>
                        <option value="25">25</option>
                        <option value="100">100</option>
                        <option value="500">1000</option>
                    </select>
                </div>
                <div>
                    <a href="./presentation_create.php"><button class="addData btn-3"><span>Add
                                Data</span></button></a>
                </div>
            </div>
            <div id="myGrid" class="ag-theme-alpine">
            </div>
        </div>
        <script>var __basePath = './';</script>
        <script src="https://cdn.jsdelivr.net/npm/ag-grid-enterprise@29.3.2/dist/ag-grid-enterprise.min.js">
        </script>
        <script>
            // adding button 




            class ActionValueRender {
                // gets called once before the renderer is used
                init(params) {
                    // create the cell
                    this.eGui = document.createElement('div');
                    this.eGui.innerHTML = `
                        
                                                  <span>
                                                      <a href="./data_edit.php?id=${params.data.id}"><button class="edit btn-2"><i class="fa-solid fa-pen-to-square"></i></button></a>
                                                      <a href="./data_view.php?id=${params.data.id}"><button class="view btn-2"><i class="fa-solid fa-eye"></i></button></a>
                                                  </span>
                                               `;

                    // get references to the elements we want
                    // this.eButton = this.eGui.querySelector('.btn-simple');
                    // this.eValue = this.eGui.querySelector('.my-value');

                    // set value into cell
                    this.cellValue = this.getValueToDisplay(params);
                    // this.eValue.innerHTML = this.cellValue;


                    // add event listener to button
                    this.eventListener = () => alert(`${this.cellValue}`);

                }

                getGui() {
                    return this.eGui;
                }

                // gets called whenever the cell refreshes
                refresh(params) {
                    // set value into cell again
                    this.cellValue = this.getValueToDisplay(params);
                    this.eValue.innerHTML = this.cellValue;

                    // return true to tell the grid we refreshed successfully
                    return true;
                }

                // gets called when the cell is removed from the grid
                destroy() {
                    // do cleanup, remove event listener from button
                    if (this.eButton) {
                        // check that the button element exists as destroy() can be called before getGui()
                        this.eButton.removeEventListener('click', this.eventListener);
                    }
                }

                getValueToDisplay(params) {
                    return params.valueFormatted ? params.valueFormatted : params.value;
                }
            }








            var checkboxSelection = function (params) {
                // we put checkbox on the name if we are not doing grouping
                return params.columnApi.getRowGroupColumns().length === 0;
            };
            var headerCheckboxSelection = function (params) {
                // we put checkbox on the name if we are not doing grouping
                return params.columnApi.getRowGroupColumns().length === 0;
            };
            /** @type {(import('ag-grid-community').ColDef | import('ag-grid-community').ColGroupDef )[]} */
            const columnDefs = [
                {
                    headerName: 'id',
                    field: 'id',
                    minWidth: 100,
                    checkboxSelection: checkboxSelection,
                    headerCheckboxSelection: headerCheckboxSelection,

                },
                { field: 'ad_format' },
                { field: 'template' },
                { field: 'average_ctr' },
                { field: 'dimensions' },
                { field: 'duration' },
                { field: 'functionality' },
                { field: 'reviews' },
                { field: 'description' },
                { field: 'demo_link' },
                { field: 'meta_keywords' },
                { field: 'action', minWidth: 175, cellRenderer: ActionValueRender }
            ];

            var autoGroupColumnDef = {
                headerName: 'Group',
                minWidth: 170,
                field: 'id',
                valueGetter: (params) => {
                    if (params.node.group) {
                        return params.node.key;
                    } else {
                        return params.data[params.colDef.field];
                    }
                },
                headerCheckboxSelection: false,
                cellRenderer: 'ActionValueRender',
                cellRendererParams: {
                    checkbox: false,
                },
            };

            /** @type {import('ag-grid-community').GridOptions} */
            const gridOptions = {
                defaultColDef: {
                    editable: true,
                    enableRowGroup: true,
                    enablePivot: true,
                    enableValue: true,
                    sortable: true,
                    resizable: true,
                    filter: true,
                    flex: 1,
                    minWidth: 100,
                },
                suppressRowClickSelection: true,
                groupSelectsChildren: true,
                // debug: true,
                rowSelection: 'multiple',
                rowGroupPanelShow: 'always',
                pivotPanelShow: 'always',
                columnDefs: columnDefs,
                pagination: true,
                paginationPageSize: 10,
                autoGroupColumnDef: autoGroupColumnDef,
                onFirstDataRendered: onFirstDataRendered,
                paginationNumberFormatter: (params) => {
                    return '[' + params.value.toLocaleString() + ']';
                },
            };

            function onFirstDataRendered(params) {
                params.api.paginationGoToPage(0);
            }

            function onPageSizeChanged() {
                var value = document.getElementById('page-size').value;
                gridOptions.api.paginationSetPageSize(Number(value));
            }

            // setup the grid after the page has finished loading
            document.addEventListener('DOMContentLoaded', function () {
                var gridDiv = document.querySelector('#myGrid');
                new agGrid.Grid(gridDiv, gridOptions);

                fetch('https://publisherplex.io/webpresentation/console/api.php')
                    .then((response) => response.json())
                    .then(function (data) {
                        gridOptions.api.setRowData(data);
                    });
            });



        </script>


    </body>

    </html>
    <?php
} else {
    header("Location:index.php");
    exit();
}
?>