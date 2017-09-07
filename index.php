<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Review HTML</title>
        <link rel="stylesheet" type="text/css" href="css/datatables.css">
        <link rel="stylesheet" type="text/css" href="css/web_style.css">
        <script type="text/javascript" src="js/functional_js.js"></script>
        <script type="text/javascript" src="js/datatables.js"></script>
    </head>
    <body>
        <!--Tag for header-->
        <header>
            <h1>Pemrograman Web 2</h1>
        </header>
        <!--Tag for navigation-->
        <nav>
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
            </ul>
        </nav>
        <!--Tag for content-->
        <main>
            <img src="" >
            <form action="">
                <label for="input1">Label Text</label>
                <input id="input1" type="text" placeholder="Placeholder">
                <br>
                <label for="input2">Number 1</label>
                <input id="input2" type="number" placeholder="Number 1">
                <br>
                <label for="input3">Number 2</label>
                <input id="input3" type="number" placeholder="Number 2">
                <br>
                <label for="input4">Label Date</label>
                <input id="input4" type="date">
                <br>
                <button value="Sum" onclick="sumTwoNumber();">Sum Number</button>
                <input type="reset" value="Reset Form">
                <input type="submit" value="Submit Form">
            </form>
            <table id="tableId" class="display">
                <thead>
                    <tr>
                        <th>Header Column 1</th>
                        <th>Header Column 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Content 1-1</td>
                        <td>Content 1-2</td>
                    </tr>
                    <tr>
                        <td>Content 2-1</td>
                        <td>Content 2-2</td>
                    </tr>
                </tbody>
            </table>
        </main>
        <!--Tag for footer-->
        <footer>
            Created by Robby Tan
        </footer>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#tableId').DataTable();
            });
        </script>
    </body>
</html>
