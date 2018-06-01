<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h3>Fill your details</h3>
                <div class="title">
                    <form name="details" action="{{'/save_details'}}" method="post">
                        <input name="_token" type="text" value="{{ csrf_token() }}"/>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email_id" placeholder="email_id">
                        </div>
                        <div class="form-group">
                            <input type="text" name="mobile" placeholder="mobile">
                        </div>
                        <div class="form-group">
                            <input type="text" name="dob" placeholder="dob" id='datepicker1'>
                        </div>
                        <div class="form-group">
                            <input type="text" name="city" placeholder="city">
                        </div>
                        <div class="form-group">
                            <input type="text" name="loan_amount" placeholder="loan_amount">
                        </div>
                        <div class="form-group">
                            <input type="text" name="occupation" placeholder="occupation">
                        </div>
                        <div class="form-group">
                            <input type="text" name="mon_income" placeholder="mon_income">
                        </div>
                        <div class="form-group">
                            <input type="text" name="sal_rec" placeholder="sal_rec">
                        </div>
                        <div class="form-group">
                            <input type="text" name="sal_dep" placeholder="sal_dep">
                        </div>
                        <div class="form-group">
                            <input type="text" name="dt_trans" placeholder="dt_trans" id="datepicker2">
                        </div>
                    <button type="submit" class="btn">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker1,#datepicker2" ).datepicker();
  });
  </script>