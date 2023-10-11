<?php

    include 'logic.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">


   <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

   <title>Covid-19 Tracker</title>
</head>
<body>
<header>

    <a href="#" class="logo">c<span class="fas fa-virus"></span>VID-19</a>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a href="https://rohitpatilpr.github.io/covidweb.github.io/">home</a></li>
            <li><a href="https://rohitpatilpr.github.io/covidweb.github.io/protect.html">protect</a></li>
            <li><a href="https://rohitpatilpr.github.io/covidweb.github.io/symptoms.html">symptoms</a></li>
            <li><a href="https://rohitpatilpr.github.io/covidweb.github.io/prevent.html">prevent</a></li>
            <li><a href="https://rohitpatilpr.github.io/covidweb.github.io/handwash.html">handwash</a></li>
            <li><a class="https://rohitpatilpr.github.io/covidweb.github.io/">Statistics</a></li>
            <li><a href="https://rohitpatilpr.github.io/covidweb.github.io/about.html">About Team</a></li>
     
        </ul>
    </nav>

</header>

<!-- header section ends -->
<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">

       
    <div class="container-fluid bg-light p-5 text-center my-3">
        <h1 class="">Covid-19 Stats</h1>
        <h5 class="text-muted">Track of all the COVID-19 cases around the world.</h5>
    </div>
        </div>
      <div class="container my-5">
        <div class="row text-center">
            <div class="col-4 text-warning">
                <h5>Confirmed</h5>
                <?php echo $total_confirmed;?>
            </div>
            <div class="col-4 text-success">
                <h5>Recovered</h5>
                <?php echo $total_recovered;?>
            </div>
            <div class="col-4 text-danger">
                <h5>Deceased</h5>
                <?php echo $total_deaths;?>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Countries</th>
                        <th scope="col">Confirmed</th>
                        <th scope="col">Recovered</th>
                        <th scope="col">Deceased</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($data as $key => $value){
                            $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];
                    ?>
                        <tr>
                            <th scope="row"><?php echo $key?></th>
                            <td>
                                <?php echo $value[$days_count]['confirmed'];?>
                                <?php if($increase != 0){ ?>
                                    <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>  
                                <?php } ?>    
                            </td>
                            <td><?php echo $value[$days_count]['recovered'];?></td>
                            <td><?php echo $value[$days_count]['deaths'];?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>

    </div>

   

</section>
<!-- home section ends -->


</body>
</html>
