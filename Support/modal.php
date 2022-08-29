<div class="modal fade" id="updateSavings" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Update Savings</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="updateSavingsForm" action="Support/trial.php">
                        <label for="Amount">Amount</label>
                        <input type="number" name="savedAmount" id="savedamount"><br>
                        <label for="Reason">Reason</label>
                        <input type="text" name="savedReason" id="savedreason">
                        <div class="modal-footer">
                            <input type="button" class="btn btn-btn-secondary" value="Close" data-dismiss="modal">
                            <!-- <button type="button" class="btn btn-primary" form="updateSavingsForm" name="updatesavingsbtn">Save changes</button> -->
                            <input type="button" value="Update Savings" name="updateexpensebtn" onclick="modalSubmitBtnClick(1)" data-dismiss="modal">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="updateExpenses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Update Expenses</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="updateExpensesForm" action="Support/trial.php">
                        <label for="Amount">Amount</label>
                        <input type="number" name="expensedAmount" id="expensedamount"><br>
                        <label for="Reason">Reason</label>
                        <input type="text" name="expensedReason" id="expensedreason">
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="updateExpensesForm">Save changes</button> -->
                            <input type="button" class="btn btn-btn-secondary" value="Close" data-dismiss="modal">
                            <input type="button" value="Update Expenses" name="updatesavingsbtn" onclick="modalSubmitBtnClick(2)" data-dismiss="modal">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>