<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 offset-2">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="">Columns</label>
                                <input type="number" name="c" id="c" class="form-control" placeholder="Enter Column"
                                    required>
                            </div>
                            <p id='c_error'></p>
                            <div class="form-group">
                                <label for="">Rows</label>
                                <input type="number" id="r" name="r" class="form-control" placeholder="Enter Column"
                                    required>
                            </div>
                            <button type="button" id="submit" class="btn btn-primary">Create </button>
                        </form>


                    </div>
                </div>


            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="card">

            <div class="card-body bg-dark text-light">
                <div class="row">
                    <div class="col-lg-6">
                        Table:
                        <form action="{{ route('cal') }}" method="post">
                            @csrf
                            <div id="demo">

                            </div>
                        </form>
                    </div>

                    <div class="col-lg-6">
                       <div id="res"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function () {
            $('#res').hide();
            $('#submit').click(function () {

                var i;
                var j;

                var r = $('#r').val();
                var c = $('#c').val();

                var rid = 0;
                var cid = 0;
                var output = '';
                output += "<table>"
                for (i = 1; i <= r; i++) {
                    output += "<tr>";
                    for (j = 1; j <= c; j++) {
                        output += "<td><input name='r" + i + "c" + j + "' type'number' required></td>";
                    }


                    output += "</tr>"
                }
                output += "<input type='hidden' name='cid' value='" + c + "'>"

                output += "<input type='hidden' name='rid' value='" + r + "'>"
                output += "</table>"

                output += "<button type='submit' id='ress'  class='btn btn-success'>Result</button>"

                $('#demo').html(output)

               
                

            })

            
            
        })

        
    </script>
</body>

</html>