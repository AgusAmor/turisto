<?php
    if(isset($_GET['id_package'])){
        echo "<div id=modalPackageContainer class=open >";

        $id_package = $_GET['id_package'];

        if(isset($_GET['country'])){
            $country = $_GET['country'];
        }
        if(isset($_GET['city'])){
            $city = $_GET['city'];
        }
        if(isset($_GET['passengers'])){
            $passengers = $_GET['passengers'];
        }
        if(isset($_GET['description'])){
            $description = $_GET['description'];
        }
        if(isset($_GET['image'])){
            $image = $_GET['image'];
        }
        if(isset($_GET['transfer'])){
            $transfer = $_GET['transfer'];
        }
        if(isset($_GET['luggage'])){
            $luggage = $_GET['luggage'];
        }
        if(isset($_GET['lodging'])){
            $lodging = $_GET['lodging'];
        }

        $destination = (!empty($city)) ? $city . ", " . $country : $country;

    }else{
        echo "<div id=modalPackageContainer >";
    }
    echo "
    <button id=btn_cerrarModalPackage ><i class='bi bi-x' ></i></button>
    <div id=modalPackage >
        <img src=$image alt=$country />
        <div>
            <h2>Viaja a $destination</h2>
            <ul>";
            if(!empty($transfer)){
                echo "<li>Tanslado</li>";
            }
            if(!empty($luggage)){
                echo "<li>Equipaje $luggage</li>";
            }
            if(!empty($lodging)){
                echo "<li>Hospedaje</li>";
            }
        echo"</ul>
            <div>
                <p>$description</p>
            </div>
        </div>
    </div>
    </div>
    ";
    ?>