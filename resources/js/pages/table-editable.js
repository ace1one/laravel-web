(function ($) {
    'use strict';
    $(document).ready(function () {
        function restoreRow(oTable, nRow) {
            var aData = oTable.fnGetData(nRow);
            var jqTds = $('>td', nRow);

            for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
                oTable.fnUpdate(aData[i], nRow, i, false);
            }

            $.ajax({
                type: 'POST',
                url: 'editable_datatables/{{' / nRow / '}}/update',
                data: aData,
                success: function (result) {
                    console.log('result is' + aData[0].value);
                },
                error: function (result) {
                    console.log('error2');
                },
            });

            oTable.fnDraw();
        }

        function editRow(oTable, nRow) {
            var aData = oTable.fnGetData(nRow);
            var jqTds = $('>td', nRow);
            jqTds[0].innerHTML =
                '<input type="text" name="username" class="form-control input-small" value="' +
                aData[0] +
                '">';
            jqTds[1].innerHTML =
                '<input type="text" name="fullname" class="form-control input-small" value="' +
                aData[1] +
                '">';
            jqTds[2].innerHTML =
                '<input type="text" name="points" class="form-control input-small" value="' +
                aData[2] +
                '">';
            jqTds[3].innerHTML =
                '<input type="text" name="notes" class="form-control input-small" value="' +
                aData[3] +
                '">';
            jqTds[4].innerHTML = '<a class="edit" href="">Save</a>';
            jqTds[5].innerHTML = '<a class="cancel" href="">Cancel</a>';
        }

        function saveRow(oTable, nRow) {
            var jqInputs = $('input', nRow);
            oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
            oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
            oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
            oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
            oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 4, false);
            oTable.fnUpdate('<a class="delete" href="">Delete</a>', nRow, 5, false);
            oTable.fnDraw();
            $.ajax({
                type: 'POST',
                url: 'editable_datatables/create',
                data: {
                    username: jqInputs[0].value,
                    fullname: jqInputs[1].value,
                    points: jqInputs[2].value,
                    notes: jqInputs[3].value,
                    _token: $('input[name=_token]').val(),
                },
                success: function (result) {
                    console.log('result is' + jqInputs[0].value);
                },
                error: function (result) {
                    console.log('error2');
                },
            });
        }

        function cancelEditRow(oTable, nRow) {
            var jqInputs = $('input', nRow);
            oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
            oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
            oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
            oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
            oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 4, false);
            oTable.fnDraw();
        }

        var table = $('#sample_editable_1');

        var oTable = table.dataTable({
            lengthMenu: [
                [5, 15, 20, -1],
                [5, 15, 20, 'All'], // change per page values here
            ],
            // set the initial value
            pageLength: 10,
            select: true,
            responsive: true,
            language: {
                lengthMenu: ' _MENU_ records',
            },
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
            columnDefs: [
                {
                    // set default column settings
                    orderable: true,
                    targets: [0],
                },
                {
                    searchable: true,
                    targets: [0],
                },
            ],
            order: [[0, 'asc']], // set first column as a default sort by asc
        });

        var tableWrapper = $('#sample_editable_1_wrapper');

        tableWrapper.find('.dataTables_length select').select2({
            showSearchInput: false, //hide search box with special css class
        }); // initialize select2 dropdown

        var nEditing = null;
        var nNew = false;

        $('#sample_editable_1_new').on('click', function (e) {
            e.preventDefault();

            if (nNew && nEditing) {
                if (confirm('Previose row not saved. Do you want to save it ?')) {
                    saveRow(oTable, nEditing); // save
                    $(nEditing).find('td:first').html('Untitled');
                    nEditing = null;
                    nNew = false;
                } else {
                    oTable.fnDeleteRow(nEditing); // cancel
                    nEditing = null;
                    nNew = false;

                    return;
                }
            }

            var aiNew = oTable.fnAddData(['', '', '', '', '', '']);
            var nRow = oTable.fnGetNodes(aiNew[0]);
            editRow(oTable, nRow);
            nEditing = nRow;
            nNew = true;
        });

        table.on('click', '.delete', function (e) {
            e.preventDefault();

            if (confirm('Are you sure to delete this row ?') == false) {
                return;
            }

            var nRow = $(this).parents('tr')[0];
            oTable.fnDeleteRow(nRow);
            alert('Deleted! Do not forget to do some ajax to sync with backend :)');
        });

        table.on('click', '.cancel', function (e) {
            e.preventDefault();

            if (nNew) {
                oTable.fnDeleteRow(nEditing);
                nNew = false;
            } else {
                restoreRow(oTable, nEditing);
                nEditing = null;
            }
        });

        table.on('click', '.edit', function (e) {
            e.preventDefault();

            /* Get the row as a parent of the link that was clicked on */
            var nRow = $(this).parents('tr')[0];

            if (nEditing !== null && nEditing != nRow) {
                /* Currently editing - but not this row - restore the old before continuing to edit mode */
                restoreRow(oTable, nEditing);
                editRow(oTable, nRow);
                nEditing = nRow;
            } else if (nEditing == nRow && this.innerHTML == 'Save') {
                /* Editing this row and want to save it */
                saveRow(oTable, nEditing);
                nEditing = null;
                alert('Updated! Do not forget to do some ajax to sync with backend :)');
            } else {
                /* No edit in progress - let's start one */
                editRow(oTable, nRow);
                nEditing = nRow;
            }
        });
    });
})(jQuery);
