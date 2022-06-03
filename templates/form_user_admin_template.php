<form name="change" action="users_admin_page.php" method="post">
    <div class="formData">
        <table class="table">
            <tbody>
            <th>
                <tr><td><span class="lead">Фамилия </span>
                        <font size="4" color="#808080"></font></td>
                    <td><input name="surname" class="form-check-input"  style="width:90%;"></td>
                </tr>

                <tr><td><span class="lead">Имя </span>
                        <font size="4" color="#808080"></font></td>
                    <td><input name="firstname" class="form-check-input"  style="width:90%;"></td>
                </tr>

                <tr><td><span class="lead">Дата рождения </span>
                        <font size="4" color="#808080"></font></td>
                    <td><input name="date_birth" class="form-check-input" type="date"  style="width:90%;"></td>
                </tr>

                <tr><td><span class="lead">Роль</span>
                        <font size="4" color="#808080"></font></td>
                    <td>
                       <select type="text" name="role[]" class="form-check-input" style="width:90%;">
                            <option selected value="user">User</option>
                            <option value="admin">Admin</option>
                    </td>
                </tr>
                <tr>

                    <td>
                        <span class="lead">Пароль</span>
                        <font size="4" color="#808080"></font>
                    </td>
                    <td>
                        <input type="text" name="pass" class="form-check-input" " style="width:90%;">
                    </td>
                </tr>
            </th>
            </tbody>
        </table>
        <div class="dropdown">
            <button class="btn btn-secondary" name="add_user" style="">Добавить</button>
            <input type="hidden" name="id" value="">
        </div>
    </div>
</form>