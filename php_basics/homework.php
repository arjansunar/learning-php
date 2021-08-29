<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sky High University</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: rgb(255, 122, 122);
            color: white;
        }

        td {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Whatever University</h1>
    <h3>Student Registration Form</h3>
    <form action="#">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="Name" /></td>
            </tr>
            <tr>
                <td>DOB:</td>
                <td><input type="date" name="Date" /></td>
            </tr>
            <tr>
                <td>Sex:</td>
                <td>
                    <input type="radio" id="male" name="select" value="Male" /><label for="male">Male</label>
                    <input type="radio" id="female" name="select" value="Female" /><label for="female">Female</label>
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="Email" /></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="Address" /></td>
            </tr>
            <tr>
                <td>School</td>
                <td>
                    <select name="school" id="school">
                        <option value="">Select</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Department</td>
                <td><select name="school" id="school"></select></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><select name="school" id="school"></select></td>
            </tr>
            <tr>
                <td>Mobile Number:</td>
                <td><input type="text" name="No." /></td>
            </tr>
            <tr>
                <td><input type="reset" value="Reset" /></td>
                <td><input type="submit" value="Submit" /></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <p style="font-style: italic">Knowledge for the better.</p>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>