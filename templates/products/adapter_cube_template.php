<form name="" action="" method="post">
    <div style="width: 20%">
        <table class="table-secondary">
            <tr>
                <td>
                    <img src="../../images/adaptcube.gif">
                </td>
                <td>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" for="inputGroup-sizing-sm">A,мм</span>
                        <input name="A" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">B,мм</span>
                        <input name="B" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">C,мм</span>
                        <input name="C" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">D,мм</span>
                        <input name="D" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">L,мм</span>
                        <input name="L" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </td>
                <td>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Кол-во</span>
                        <input name="count_order" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <button name="end" formaction="/users/document_page.php?id=<?=get_max_id_document()[0]['id_waybill']?>" type="submit" class="btn btn-secondary mb-auto" style="margin-top: 10px" value="end">Оформить</button>
                </td>
            </tr>
<!--            <tr>-->
<!--                <td>-->
<!--                    <button name="add" type="submit" class="btn btn-secondary mb-auto" style="margin-top: 10px" value="Add">Добавить товар</button>-->
<!--                </td>-->
<!--            </tr>-->
        </table>
    </div>
</form>