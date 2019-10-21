<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<div class="container-fluid">
    <br>
    <h6>Auto-layout columns with col-sm</h6>
    <div class="row">
        <div class="col-sm">
            <div class="bg-light text-center">
                One of three columns
            </div>
        </div>
        <div class="col-sm">
            <div class="bg-light text-center">
                One of three columns
            </div>
        </div>
        <div class="col-sm">
            <div class="bg-light text-center">
                One of three columns
            </div>
        </div>
    </div>

    <br>
    <h6>Auto-layout columns with col</h6>
    <div class="row">
        <div class="col">
            <div class="bg-secondary text-white text-center">
                1 of 2
            </div>
        </div>
        <div class="col">
            <div class="bg-secondary text-white text-center">
                2 of 2
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="bg-secondary text-white text-center">
                1 of 3
            </div>
        </div>
        <div class="col">
            <div class="bg-secondary text-white text-center">
                2 of 3
            </div>
        </div>
        <div class="col">
            <div class="bg-secondary text-white text-center">
                3 of 3
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="bg-secondary text-white text-center">
                1 of 4
            </div>
        </div>
        <div class="col">
            <div class="bg-secondary text-white text-center">
                2 of 4
            </div>
        </div>
        <div class="col">
            <div class="bg-secondary text-white text-center">
                3 of 4
            </div>
        </div>
        <div class="col">
            <div class="bg-secondary text-white text-center">
                4 of 4
            </div>
        </div>
    </div>

    <br>
    <h6>Equal-width columns can be broken into multiple lines with w-100</h6>
    <div class="row">
        <div class="col"><div class="bg-success text-white text-center">Column</div></div>
        <div class="col"><div class="bg-success text-white text-center">Column</div></div>
        <div class="w-100"></div>
        <div class="col"><div class="bg-success text-white text-center">Column</div></div>
        <div class="col"><div class="bg-success text-white text-center">Column</div></div>
    </div>

    <br>
    <h6>Setting one column width</h6>
    <div class="row">
        <div class="col">
            <div class="bg-danger text-white text-center">
                1 of 3
            </div>
        </div>
        <div class="col-6">
            <div class="bg-danger text-white text-center">
                2 of 3 (wider)
            </div>
        </div>
        <div class="col">
            <div class="bg-danger text-white text-center">
                3 of 3
            </div>
        </div>
    </div>

    <br>
    <h6>Variable width content with justify-content-md-center</h6>
    <div class="row justify-content-md-center">
        <div class="col col-lg-2">
            <div class="bg-primary text-center text-white">
                1 of 3
            </div>
        </div>
        <div class="col-md-auto">
            <div class="bg-primary text-center text-white">
                col-md-auto
            </div>
        </div>
        <div class="col col-lg-2">
            <div class="bg-primary text-center text-white">
                3 of 3
            </div>
        </div>
    </div>

    <br>
    <h6>Variable width content without justify-content-md-center</h6>
    <div class="row">
        <div class="col">
            <div class="bg-primary text-center text-white">
                1 of 3
            </div>
        </div>
        <div class="col-md-auto">
            <div class="bg-primary text-center text-white">
                col-md-auto
            </div>
        </div>
        <div class="col col-lg-2">
            <div class="bg-primary text-center text-white">
                3 of 3
            </div>
        </div>
    </div>

    <br>
    <h6>All breakpoints</h6>
    <div class="row">
        <div class="col-12">
            <div class="bg-warning text-center text-white">
                col-12
            </div>
        </div>
    </div>

    <h6>col-6</h6>
    <div class="row">
        <div class="col-6">
            <div class="bg-warning text-center text-white">
                col-6
            </div>
        </div>
        <div class="col-6">
            <div class="bg-warning text-center text-white">
                col-6
            </div>
        </div>
    </div>

    <h6>col-4</h6>
    <div class="row">
        <div class="col-4">
            <div class="bg-warning text-center text-white">
                col-4
            </div>
        </div>
        <div class="col-4">
            <div class="bg-warning text-center text-white">
                col-4
            </div>
        </div>
        <div class="col-4">
            <div class="bg-warning text-center text-white">
                col-4
            </div>
        </div>
    </div>

    <h6>col-3</h6>
    <div class="row">
        <div class="col-3">
            <div class="bg-warning text-center text-white">
                col-3
            </div>
        </div>
        <div class="col-3">
            <div class="bg-warning text-center text-white">
                col-3
            </div>
        </div>
        <div class="col-3">
            <div class="bg-warning text-center text-white">
                col-3
            </div>
        </div>
        <div class="col-3">
            <div class="bg-warning text-center text-white">
                col-3
            </div>
        </div>
    </div>

    <br>
    <h6>Stacked to horizontal</h6>
    <div class="row">
        <div class="col-sm-4">
            <div class="bg-info text-center text-white">
                col-sm-4
            </div>
        </div>
        <div class="col-sm-8">
            <div class="bg-info text-center text-white">
                col-sm-8
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            <div class="bg-info text-center text-white">
                col-sm
            </div>
        </div>
        <div class="col-sm">
            <div class="bg-info text-center text-white">
                col-sm
            </div>
        </div>
        <div class="col-sm">
            <div class="bg-info text-center text-white">
                col-sm
            </div>
        </div>
    </div>

    <br>
    <h6>Mix and match</h6>
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="bg-danger text-center text-white">
                .col-12 .col-md-8
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="bg-danger text-center text-white">
                 .col-6 .col-md-4
            </div>
        </div>
    </div>

    <h6>Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop</h6>
    <div class="row">
        <div class="col-6 col-md-4">
            <div class="bg-danger text-white text-center">
                .col-6 .col-md-4
            </div>
        </div>
        <div class="col-6 col-md-4">
              <div class="bg-danger text-white text-center">
                .col-6 .col-md-4
            </div>
        </div>
        <div class="col-6 col-md-4">
              <div class="bg-danger text-white text-center">
                .col-6 .col-md-4
            </div>
        </div>
    </div>
    <h6>Columns are always 50% wide, on mobile and desktop</h6>
    <div class="row">
        <div class="col-6">
            <div class="bg-danger text-white text-center">
                .col-6
            </div>
        </div>
        <div class="col-6">
            <div class="bg-danger text-white text-center">
                .col-6
            </div>
        </div>
    </div>

    <h6>Gutters</h6>
    <p>Here’s an example of customizing the Bootstrap grid at the large (lg) breakpoint and above. We’ve increased the .col
        padding with .px-lg-5, counteracted that with .mx-lg-n5 on the parent .row and then adjusted the .container wrapper with .px-lg-5.</p>
    <div class="container px-lg-5">
        <div class="row mx-lg-n5">
            <div class="col py-3 px-lg-5 border bg-light">
                <div class="bg-danger text-center text-white">
                    Custom column padding
                </div>
            </div>
            <div class="col py-3 px-lg-5 border bg-light">
                <div class="bg-danger text-center text-white">
                    Custom column padding
                </div>
            </div>
        </div>
    </div>

    <h6>Alignment</h6>
    <h6>Vertical alignment</h6>
    <p>align-items-start</p>
    <div class="row align-items-start" style="min-height: 5rem">
        <div class="col">
            <div class="bg-success text-center text-white">
                One of three columns
            </div>
        </div>
        <div class="col">
             <div class="bg-success text-center text-white">
                One of three columns
            </div>
        </div>
        <div class="col">
             <div class="bg-success text-center text-white">
                One of three columns
            </div>
        </div>
    </div>
    <p>align-items-center</p>
    <div class="row align-items-center" style="min-height: 5rem">
        <div class="col">
              <div class="bg-success text-center text-white">
                One of three columns
            </div>
        </div>
        <div class="col">
              <div class="bg-success text-center text-white">
                One of three columns
            </div>
        </div>
        <div class="col">
              <div class="bg-success text-center text-white">
                One of three columns
            </div>
        </div>
    </div>
    <p>align-items-end</p>
    <div class="row align-items-end" style="min-height: 5rem">
        <div class="col">
              <div class="bg-success text-center text-white">
                One of three columns
            </div>
        </div>
        <div class="col">
              <div class="bg-success text-center text-white">
                One of three columns
            </div>
        </div>
        <div class="col">
              <div class="bg-success text-center text-white">
                One of three columns
            </div>
        </div>
    </div>

    <div class="row" style="min-height: 5rem">
        <div class="col-md-6 align-self-start">
            <div class="bg-success text-center text-white">
                align-self-start
            </div>
        </div>
        <div class="col align-self-center">
             <div class="bg-success text-center text-white">
                align-self-center
             </div>
        </div>
        <div class="col align-self-end">
             <div class="bg-success text-center text-white">
                align-self-end
             </div>
        </div>
    </div>

    <br>
    <h6>Horizontal alignment</h6>
    <div class="row justify-content-start">
        <div class="col-5">
           <div class="bg-info text-center text-white">
               One of two columns: justify-content-start
           </div>
        </div>
        <div class="col-5">
             <div class="bg-info text-center text-white">
               One of two columns: justify-content-start
           </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-5">
             <div class="bg-info text-center text-white">
               One of two columns: justify-content-center
           </div>
        </div>
        <div class="col-5">
             <div class="bg-info text-center text-white">
               One of two columns: justify-content-center
           </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col-5">
             <div class="bg-info text-center text-white">
               One of two columns: justify-content-end
           </div>
        </div>
        <div class="col-5">
             <div class="bg-info text-center text-white">
               One of two columns: justify-content-end
           </div>
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-5">
             <div class="bg-info text-center text-white">
               One of two columns: justify-content-around
           </div>
        </div>
        <div class="col-5">
             <div class="bg-info text-center text-white">
               One of two columns: justify-content-around
           </div>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-5">
             <div class="bg-info text-center text-white">
               One of two columns: justify-content-between
           </div>
        </div>
        <div class="col-5">
             <div class="bg-info text-center text-white">
               One of two columns: justify-content-between
           </div>
        </div>
    </div>

    <br>
    <h6>Column wrapping</h6>
    <div class="row">
        <div class="col-9">
            <div class="bg-warning text-center text-white">
                .col-9
            </div>
        </div>
        <div class="col-4">
            <div class="bg-warning text-center text-white">
                .col-4<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.
            </div>
        </div>
        <div class="col-6">
            <div class="bg-warning text-center text-white">
                .col-6<br>Subsequent columns continue along the new line.
            </div>
        </div>
    </div>

    <br>
    <h6>Column breaks with w-100</h6>
    <div class="row">
        <div class="col-6 col-sm-3">
            <div class="bg-dark text-white text-center">
                .col-6 .col-sm-3
            </div>
        </div>
        <div class="col-6 col-sm-3">
            <div class="bg-dark text-white text-center">
                .col-6 .col-sm-3
            </div>
        </div>

        <!-- Force next columns to break to new line -->
        <div class="w-100"></div>

        <div class="col-6 col-sm-3">
            <div class="bg-dark text-white text-center">
                .col-6 .col-sm-3
            </div>
        </div>
        <div class="col-6 col-sm-3">
            <div class="bg-dark text-white text-center">
                .col-6 .col-sm-3
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6 col-sm-4">
              <div class="bg-dark text-white text-center">
                  .col-6 .col-sm-4
              </div>
        </div>
        <div class="col-6 col-sm-4">
              <div class="bg-dark text-white text-center">
                  .col-6 .col-sm-4
              </div>
        </div>

        <!-- Force next columns to break to new line at md breakpoint and up -->
        <div class="w-100 d-none d-md-block"></div>

        <div class="col-6 col-sm-4">
              <div class="bg-dark text-white text-center">
                  .col-6 .col-sm-4
              </div>
        </div>
        <div class="col-6 col-sm-4">
              <div class="bg-dark text-white text-center">
                  .col-6 .col-sm-4
              </div>
        </div>
    </div>

    <br>
    <h6>Reordering</h6>
    <h6>Order classes</h6>
    <div class="row">
        <div class="col">
            <div class="bg-secondary text-white text-center">
                First, but unordered without order-
            </div>
        </div>
        <div class="col order-12">
            <div class="bg-secondary text-white text-center">
                Second, but last with order-12/order-last
            </div>
        </div>
        <div class="col order-1">
            <div class="bg-secondary text-white text-center">
                Third, but first with order-1/order-first
            </div>
        </div>
    </div>

    <br>
    <h6>Offsetting columns</h6>
    <h6>Offset classes</h6>
    <div class="row">
        <div class="col-md-4">
            <div class="bg-light text-center">
                .col-md-4
            </div>
        </div>
        <div class="col-md-4 offset-md-4">
            <div class="bg-light text-center">
                .col-md-4 .offset-md-4
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 offset-md-3">
            <div class="bg-light text-center">
                .col-md-3 .offset-md-3
            </div>
        </div>
        <div class="col-md-3 offset-md-3">
            <div class="bg-light text-center">
                .col-md-3 .offset-md-3
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="bg-light text-center">
                .col-md-6 .offset-md-3
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-5 col-md-6">
            <div class="bg-light text-center">
                .col-sm-5 .col-md-6
            </div>
        </div>
        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
            <div class="bg-light text-center">
                .col-sm-5 .offset-sm-2 .col-md-6 .offset-md-0
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-5 col-lg-6">
            <div class="bg-light text-center">
                .col-sm-6 .col-md-5 .col-lg-6
            </div>
        </div>
        <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
            <div class="bg-light text-center">
                .col-sm-6 .col-md-5 .offset-md-2 .col-lg-6 .offset-lg-0
            </div>
        </div>
    </div>

    <br>
    <h6>Margin utilities</h6>
    <div class="row">
        <div class="col-md-4">
            <div class="bg-primary text-white text-center">
                .col-md-4
            </div>
        </div>
        <div class="col-md-4 ml-auto">
            <div class="bg-primary text-white text-center">
                .col-md-4 .ml-auto
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 ml-md-auto">
            <div class="bg-primary text-center text-white">
                .col-md-3 .ml-md-auto
            </div>
        </div>
        <div class="col-md-3 ml-md-auto">
            <div class="bg-primary text-center text-white">
                .col-md-3 .ml-md-auto
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-auto mr-auto">
            <div class="bg-primary text-center text-white">
                .col-auto .mr-auto
            </div>
        </div>
        <div class="col-auto">
            <div class="bg-primary text-center text-white">
                .col-auto
            </div>
        </div>
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
