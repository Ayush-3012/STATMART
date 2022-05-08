<!DOCTYPE html>

<html>

    <head>
        <title>STATMART: CHECKOUT</title>
        <link rel='stylesheet' href='NAVBAR.css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
    .item-image{
        height:500px;
        width:500px;
    }
    .image-div{
        position:relative;
        top:80px;
        left:120px;
        width:505px;
        height:505px;
        border:3px solid black;
    }
    .item-image:hover{
        transform:scale(1.2);
        transition:ease-out 0.6s;
    }
    body{
        overflow-x:hidden;
        height:800px;
    }
    .item-name{
        position:relative;
        margin-left:50%;
        bottom:400px;
        font-size:40px;
        font-weight:900;
        border-bottom:1px solid rgb(17, 0, 255);
        color:rgb(12, 0, 184);
        width:650px;
    }
    .item-price{
        position:relative;
        margin-left:50%;
        bottom:370px;
        font-size:30px;
        color:rgb(128, 0, 167);
        border-bottom:3px dotted rgb(113, 0, 117);
    }
    .delivery-div{
        position:relative;
        margin-left:50%;
        bottom:330px;
        font-size:20px;
        color:rgb(148, 0, 0);
    }
    .quantity-div{
        position:relative;
        margin-left:50%;
        bottom:300px;
        color:rgb(85, 1, 67);
        font-size:20px;
    }
    input{
        width:100px;
        background-color:rgb(255, 196, 250);
        text-align:center;
    }
    .buy-button{
        position:relative;
        margin-left:50%;
        bottom:250px;
        height:45px;
        width:140px;
        background-color:rgb(0, 165, 96);
        border:0px;
        font-size:20px;
        color:black;
        border-radius:10px;
    }
    .buy-button:hover{
        border:2px solid black;
        color:white;
        transition:ease-out 1s;
        background-color:green;
        border-radius:20px;
    }
    #lower-div-id{
        position:relative;
        bottom:60px;
    }

</style>
</head>


<body id='body'>

<?php

        $BUTTON =  $_REQUEST['button'];

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ ARTS AND CRAFTS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    //DIV 1

        if($BUTTON=='AC_div1_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2021/06/Camlin-Artist-Acrylic-Colours-120Ml-Tu.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Camlin Artist Acrylic Colours 120Ml Tube';
            $PRICE = 220;
        }
        if($BUTTON=='AC_div1_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2020/12/Pidilite-Fevicryl-All-In-One-Canvas-Painting-Kit.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Pidilite Fevicryl All In One Canvas Painting Kit';
            $PRICE = 199;
        }
        if($BUTTON=='AC_div1_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2020/09/Pidilite-Fevicryl-Acrylic-Pouring-K.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Pidilite Fevicryl Acrylic Pouring Kit';
            $PRICE = 275;
        }


    //DIV 2

        if($BUTTON=='AC_div2_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/01/Faber-Castell-4-Tri-Grip-Brushes.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell 4 Tri Grip Brushes Flat Synthetic Hair';
            $PRICE = 80;
        }
        if($BUTTON=='AC_div2_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/01/Faber-Castell-7-Paint-Brushes-Pony-Hair.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell 13 Tri Grip Brushes Round';
            $PRICE = 270;
        }
        if($BUTTON=='AC_div2_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/01/Faber-Castell-7-Paint-Brushes-Synthetic-Hair-Round-Brush.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell 7 Paint Brushes Synthetic Hair Round Brush';
            $PRICE = 225;
        }


    //DIV 3

        if($BUTTON=='AC_div3_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2020/06/Faber-Castell-Colour-Pencils-48-Shades-by-StatM.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell Colour Pencils 48 Shades';
            $PRICE = 480;
        }
        if($BUTTON=='AC_div3_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/08/Doms-Supersoft-Colour-Pencil-24-Shades-Round-Tin-Pack-by-StatMo.in_.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Doms Supersoft Colour Pencil 24 Shades Round Tin Pack';
            $PRICE = 170;
        }
        if($BUTTON=='AC_div3_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/08/sd.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Doms Supersoft Colour Pencil 24 Shades Round Tin Pack';
            $PRICE = 135;
        }

    //DIV 4

        if($BUTTON=='AC_div4_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2021/07/Faber-Castell-Fabric-Paints-with-Mask-Painting-10-Shades.jpg?resize=510%2C516&ssl=1';
            $NAME = 'Faber Castell Fabric Paints with Mask Painting 10 Shades';
            $PRICE = 310;
        }
        if($BUTTON=='AC_div4_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/01/Faber-Castell-Fabric-Colours-12-Shades.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell Fabric Colours 12 Shades';
            $PRICE = 160;
        }
        if($BUTTON=='AC_div4_item3')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/01/Faber-Castell-Fabric-Colours-6-Shades.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell Fabric Colours 6 Shades';
            $PRICE = 100;
        }

    //DIV 5

        if($BUTTON=='AC_div5_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2021/07/Faber-Castell-Creative-Studio-Oil-Colour-12-Shades-9Ml-Tube-by-StatM.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell Creative Studio Oil Colour 12 Shades 9Ml Tube';
            $PRICE = 390;
        }
        if($BUTTON=='AC_div5_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2021/07/Faber-Castell-Creative-Studio-Oil-Colour-12-Shades-20Ml-Tube.jpg?resize=510%2C516&ssl=1';
            $NAME = 'Faber Castell Creative Studio Oil Colour 12 Shades 20Ml Tube';
            $PRICE = 560;
        }
        if($BUTTON=='AC_div5_item3')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2021/07/Faber-Castell-Creative-Studio-Oil-Colour-24-Shades-9Ml-.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell Creative Studio Oil Colour 24 Shades 9Ml Tube';
            $PRICE = 700;
        }

    //DIV 6

        if($BUTTON=='AC_div6_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2020/06/Cello-Colour-Up-Oil-Pastels-25-Shad.jpg?resize=247%2C296&ssl=1';
            $NAME = ' Cello Colour Up Oil Pastels 25 Shades';
            $PRICE = 90;
        }
        if($BUTTON=='AC_div6_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2018/03/Doms-Jumbo-Oil-Pastel-25-Shad.jpg?resize=247%2C296&ssl=1';
            $NAME = ' Doms Jumbo Oil Pastel 25 Shades';
            $PRICE = 160;
        }
        if($BUTTON=='AC_div6_item3')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/03/triangular1-510x510.jpg?resize=247%2C296&ssl=1';
            $NAME = ' Camlin Triangular Oil Pastel 30 Shades';
            $PRICE = 130;
        }

    //DIV 7

        if($BUTTON=='AC_div7_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/10/dfsdfds.jpg?resize=247%2C296&ssl=1';
            $NAME = ' Doms Plastic Crayons 24 Shades Tin Pack';
            $PRICE = 90;
        }
        if($BUTTON=='AC_div7_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/03/Artline-Gripper-Plastic-Crayons-12-Sha.jpg?resize=247%2C296&ssl=1';
            $NAME = '  Artline Gripper Plastic Crayons 12 Shades';
            $PRICE = 60;
        }
        if($BUTTON=='AC_div7_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/01/24.jpg?resize=247%2C296&ssl=1';
            $NAME = ' Faber Castell 24 Grip Erasable Crayons';
            $PRICE = 130;
        }

    //DIV 8

        if($BUTTON=='AC_div8_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/01/Faber-Castell-Connector-Pens-10-Shad.jpg?resize=247%2C296&ssl=1';
            $NAME = ' Faber Castell Connector Pens 10 Shades';
            $PRICE = 50;
        }
        if($BUTTON=='AC_div8_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/01/Faber-Castell-Connector-Pens-50-Sha.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell Connector Pens 50 Shades';
            $PRICE = 260;
        }
        if($BUTTON=='AC_div8_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/01/Camlin-Sketch-Pens-12-Shades.jpg?resize=247%2C296&ssl=1';
            $NAME = '  Camlin Sketch Pens 12 Shades';
            $PRICE = 30;
        }

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ COLOURS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    //DIV 1

        if($BUTTON=='COL_div1_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2021/02/wax1234.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Hauser Artz Wax Crayons 12+1 Shades';
            $PRICE = 25;
        }
        if($BUTTON=='COL_div1_item2')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2017/03/Classmate-Wax-Crayons-12-Shade.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Classmate Wax Crayons 12 Shades';
            $PRICE = 10;
        }
        if($BUTTON=='COL_div1_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/01/Faber-Castell-Wax-Crayon-Jumbo-24-Shades.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell Wax Crayons Jumbo 12 Shades';
            $PRICE = 275;
        }


    //DIV 2
        if($BUTTON=='COL_div2_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2020/06/Faber-Castell-Colour-Pencils-48-Shades-by-StatM.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell Colour Pencils 48 Shades';
            $PRICE = 432;
        }
        if($BUTTON=='COL_div2_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/08/Doms-Supersoft-Colour-Pencil-24-Shades-Round-Tin-Pack-by-StatMo.in_.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Doms Supersoft Colour Pencil 24 Shades Round Tin Pack';
            $PRICE = 135;
        }
        if($BUTTON=='COL_div2_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/08/sd.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Doms Supersoft Colour Pencil 24 Shades Round Tin Pack';
            $PRICE = 135;
        }


    //DIV 3
        if($BUTTON=='COL_div3_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2021/07/Faber-Castell-Fabric-Paints-with-Mask-Painting-10-Shades.jpg?resize=510%2C516&ssl=1';
            $NAME = 'Faber Castell Fabric Paints with Mask Painting 10 Shades';
            $PRICE = 310;
        }
        if($BUTTON=='COL_div3_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/01/Faber-Castell-Fabric-Colours-12-Shades.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell Fabric Colours 12 Shades';
            $PRICE = 160;
        }
        if($BUTTON=='COL_div3_item3')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/01/Faber-Castell-Fabric-Colours-6-Shades.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell Fabric Colours 6 Shades';
            $PRICE = 100;
        }

    //DIV 4
        if($BUTTON=='COL_div4_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2021/07/Faber-Castell-Creative-Studio-Oil-Colour-12-Shades-9Ml-Tube-by-StatM.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell Creative Studio Oil Colour 12 Shades 9Ml Tube';
            $PRICE = 390;
        }
        if($BUTTON=='COL_div4_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2021/07/Faber-Castell-Creative-Studio-Oil-Colour-12-Shades-20Ml-Tube.jpg?resize=510%2C516&ssl=1';
            $NAME = 'Faber Castell Creative Studio Oil Colour 12 Shades 20Ml Tube';
            $PRICE = 560;
        }
        if($BUTTON=='COL_div4_item3')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2021/07/Faber-Castell-Creative-Studio-Oil-Colour-24-Shades-9Ml-.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell Creative Studio Oil Colour 24 Shades 9Ml Tube';
            $PRICE = 700;
        }

    //DIV 5
        if($BUTTON=='COL_div5_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2020/06/Faber-Castell-Watercolours-6-Shades-5Ml-Tub.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Fabel Castell Faber Castell Water colours 6 Shades';
            $PRICE = 50;
        }
        if($BUTTON=='COL_div5_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2018/01/Doms-24-Water-Colour-Ca.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Doms 24 Water Colour Cakes.';
            $PRICE = 180;
        }
        if($BUTTON=='COL_div5_item3')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/01/Camlin-Students-Water-Colour-Cakes-24-Shades.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Camlin Students Water Colour Cakes 24 Shades';
            $PRICE = 130;
        }

    //DIV 6
        if($BUTTON=='COL_div6_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2020/06/Doms-Premium-Poster-Colours-6-Shades-by-StatM.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Doms Premium Poster Colours 6 Shades';
            $PRICE = 140;
        }
        if($BUTTON=='COL_div6_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/03/Artline-Poster-Colours-by-Stat.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Artline Poster Colours (Pack of 6)';
            $PRICE = 80;
        }
        if($BUTTON=='COL_div6_item3')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/01/New-statmo-logo.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Camlin Students Poster Colour Cakes 6 Shades';
            $PRICE = 75;
        }

    //DIV 7
        if($BUTTON=='COL_div7_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/01/Faber-Castell-Connector-Pens-10-Shad.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell Connector Pens 10 Shades';
            $PRICE = 50;
        }
        if($BUTTON=='COL_div7_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/01/Faber-Castell-Connector-Pens-50-Sha.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell Connector Pens 50 Shades';
            $PRICE = 260;
        }
        if($BUTTON=='COL_div7_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/01/Camlin-Sketch-Pens-12-Shades.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Camlin Sketch Pens 12 Shades';
            $PRICE = 30;
        }

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ DESK ESSENTIALS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    //DIV 1
        if($BUTTON=='DE_div1_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2021/03/Cello-Bic-Calculato.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Cello Bic Calculator.';
            $PRICE = 310;
        }
        if($BUTTON=='DE_div1_item2')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2019/01/Casio-MJ-12GST-Calculato.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Casio MJ 12GST Calculator.';
            $PRICE = 410;
        }
        if($BUTTON=='DE_div1_item3')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/01/quare-Root-Funct.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Citizen Calculator Check & Correct Series 10 Digits';
            $PRICE = 340;
        }


    //DIV 2
        if($BUTTON=='DE_div2_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2021/11/Omega-PenPencil-Holder-Executive.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Omega PenPencil Holder Executive';
            $PRICE = 115;
        }
        if($BUTTON=='DE_div2_item2')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2021/10/Omega-Cello-Tape-Dispen.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Omega Cello Tape Dispener';
            $PRICE = 150;
        }
        if($BUTTON=='DE_div2_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2021/09/Omega-Pin-o-Clip-Delux.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Omega Pin-o-Clip Deluxe';
            $PRICE = 45;
        }


    //DIV 3
        if($BUTTON=='DE_div3_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2017/04/Pradeep-Naik.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Neelgagan Rent Receipt Book (Pack of 5)';
            $PRICE = 260;
        }
        if($BUTTON=='DE_div3_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/04/001.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Neelgagan Cash Receipt Book (Pack of 5)';
            $PRICE = 225;
        }
        if($BUTTON=='DE_div3_item3')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2017/04/Neelgagan-Conference-Pads-Pack-of-5.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Neelgagan Conference Pads (Pack of 5)';
            $PRICE = 160;
        }

    //DIV 4
        if($BUTTON=='DE_div4_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2021/06/Premier-U-Clip-Multi-Color.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Premier U-Clip Multi Color';
            $PRICE = 40;
        }
        if($BUTTON=='DE_div4_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/10/Aerotix-Color-Paper-Clip.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Aerotix Color Paper Clips';
            $PRICE = 35;
        }

    //DIV 5
        if($BUTTON=='DE_div5_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/04/10.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Kangaro Stapler Mini-10';
            $PRICE = 55;
        }
        if($BUTTON=='DE_div5_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/04/Kangaro-Heavy-Duty-Stapler-HD-23S17.jpg?w=600&ssl=1';
            $NAME = 'Kangaro Heavy Duty Stapler HD 23S17';
            $PRICE = 1500;
        }
        if($BUTTON=='DE_div5_item3')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2017/04/Kangaro-Paper-Punch-DP-52.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Kangaro Paper Punch DP 52';
            $PRICE = 74;
        }

    //DIV 6
        if($BUTTON=='DE_div6_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2021/04/Kangaro-Munix-Scissors-GL-2185.jpg?resize=768%2C777&ssl=1';
            $NAME = 'Kangaro Munix Scissors GL-2185';
            $PRICE = 230;
        }
        if($BUTTON=='DE_div6_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2019/12/1158c1.jpg?resize=768%2C777&ssl=1';
            $NAME = 'Kangaro Munix Scissors SL-1158C1';
            $PRICE = 95;
        }
        if($BUTTON=='DE_div6_item3')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2019/12/1183.jpg?resize=768%2C777&ssl=1';
            $NAME = 'Kangaro Munix Scissors SL-1183';
            $PRICE = 130;
        }

    //DIV 7
        if($BUTTON=='DE_div7_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/01/GULE-STICK-15G.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell Glue stick';
            $PRICE = 28;
        }
        if($BUTTON=='DE_div7_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/03/GLUE.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Pidilite Glue Drops';
            $PRICE = 10;
        }
        if($BUTTON=='DE_div7_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/01/3M-Scotch-Permanet-Glue-S.jpg?resize=247%2C296&ssl=1';
            $NAME = '3M Scotch Magic Tape';
            $PRICE = 160;
        }

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ FOLDERS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    //DIV 1
        if($BUTTON=='FOL_div1_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2021/01/Securex-Executive-Jute-Ba.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Securex Executive Jute Bag.';
            $PRICE = 220;
        }
        if($BUTTON=='FOL_div1_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/11/Aerotix-My-Cear-Bag-Longlear-Design-F.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Aerotix My Cear Bag Longlear Design Fc.';
            $PRICE = 22;
        }
        if($BUTTON=='FOL_div1_item3')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/11/Aerotix-My-Clear-Bag-Printed-Fc-by-St.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Aerotix My Clear Bag Printed Fc (Pack of 5).';
            $PRICE = 65;
        }


    //DIV 2
        if($BUTTON=='FOL_div2_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/11/Aerotix-Punchless-Clip-Fils-Small-Clip-A4-by-StatMo.in_.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Aerotix Punchless Clip Fils Small Clip A4';
            $PRICE = 80;
        }
        if($BUTTON=='FOL_div2_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/11/Aerotix-Punchless-Long-Clip-File.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Aerotix Punchless Long Clip File A4';
            $PRICE = 80;
        }


    //DIV 3
        if($BUTTON=='FOL_div3_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/11/Aerotix-Report-File-With-Pocket-A4-by-StatMo.in_.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Aerotix Report File With Pocket A4.';
            $PRICE = 25;
        }



    //DIV 4
        if($BUTTON=='FOL_div4_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/11/Aerotix-Sheet-Protectors-A4-Size-SP100-by-Stat.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Aerotix Sheet Protectors A4 Size SP100 (Pack of 50)';
            $PRICE = 280;
        }
        if($BUTTON=='FOL_div4_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/11/Aerotix-Sheet-Protectors-A4-Size-SP100-by-Stat.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Aerotix Sheet Protectors A4 Size SP200 (Pack of 50)';
            $PRICE = 380;
        }
        

    //DIV 5
        if($BUTTON=='FOL_div5_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/11/Aerotix-Strip-File-Natural-Clear-Transparent-A4-Pac.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Aerotix Strip File Natural Clear Transparent A4 (Pack of 5)';
            $PRICE = 70;
        }
        if($BUTTON=='FOL_div5_item2')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2017/11/Aerotix-Strip-File-Clear-Natural-Transparent-A4-Pack-of.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Aerotix Strip File Clear Natural Transparent A4 (Pack of 5)';
            $PRICE = 80;
        }
        

    //DIV 6
        if($BUTTON=='FOL_div6_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2021/01/Securex-Executive-Bag-Twin-Pocketndle-FC.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Securex Executive Bag Twin Pocket+Handle FC';
            $PRICE = 160;
        }
        if($BUTTON=='FOL_div6_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2021/01/Securex-Zipper-Bag-Full-Net-andle.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Securex Zipper Bag Full Net w/Handle.';
            $PRICE = 50;
        }
        if($BUTTON=='FOL_div6_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2021/01/Securex-Fabio-Zipper-Bag-Full-Net-Set-of-2-by-Stat.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Securex Fabio Zipper Bag Full Net (Set of 2)';
            $PRICE = 50;
        }

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ INK ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    //DIV 1
        if($BUTTON=='INK_div1_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2017/01/Faber-Castell-Textliner-Ink-Automatic-Refill.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell Textliner Ink Automatic Refill';
            $PRICE = 36;
        }
        


    //DIV 2
        if($BUTTON=='INK_div2_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2019/02/Cello-Fountain-Ink-Super-Jumbo-Cartridges-Set-of.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Cello Fountain Ink Super Jumbo Cartridges Set of 12';
            $PRICE = 38;
        }
        if($BUTTON=='INK_div2_item2')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2018/03/Hauser-Tech-7-Liquid-Ink-Refill-Pack-of-5.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Hauser Tech 7 Liquid Ink Refill (Pack of 5)';
            $PRICE = 113;
        }
        if($BUTTON=='INK_div2_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/07/Cross-Fountain-Pen-Ink-Cartridges-Regular.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Cross Fountain Pen Ink Cartridges Regular';
            $PRICE = 248;
        }


    //DIV 3
        if($BUTTON=='INK_div3_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2016/12/Cello-5-Filler-Marker-Ink-by-StatMo.in_.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Cello 5 Filler Marker Ink';
            $PRICE = 22;
        }
        

    //DIV 4
        if($BUTTON=='INK_div4_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2018/03/Faber-Castell-Stamp-Pad-I.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell Stamp Pad Ink';
            $PRICE = 20;
        }
        

    //DIV 5
        if($BUTTON=='INK_div5_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2018/03/Faber-Castell-Whiteboard-Mark.jpg?resize=247%2C296&ssl=1"';
            $NAME = 'Faber Castell Whiteboard Marker Ink';
            $PRICE = 38;
        }
        if($BUTTON=='INK_div5_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2018/02/Hauser-White-Board-Marker-Jumb.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Hauser White Board Marker Jumbo';
            $PRICE = 25;
        }
        if($BUTTON=='INK_div5_item3')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2018/02/Cello-Fountain-Ink-Cartridges-Pack-of-5.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Cello White Board Marker Ink';
            $PRICE = 27;
        }

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ MARKERS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

//DIV 1
        if($BUTTON=='MAR_div1_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2020/05/Camlin-Brush-Pens-Colour-24-Shad.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Camlin Brush Pens Colour 24 Shades';
            $PRICE = 320;
        }
        if($BUTTON=='MAR_div1_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2020/05/Doms-Brush-Pens-Colour-14-Sha.jpg?resize=247%2C296&ssl=1';
            $NAME = ' Doms Brush Pens Colour 14 Shades';
            $PRICE = 199;
        }


//DIV 2
        if($BUTTON=='MAR_div2_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2019/04/Hauser-Permanent-Pen-CD-DVD-Pack-of.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Hauser Permanent Pen CD-DVD (Pack of 10)';
            $PRICE = 80;
        }
        if($BUTTON=='MAR_div2_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2018/03/Faber-Castell.jpg?resize=247%2C296&ssl=1';
            $NAME = ' Faber Castell CD/OHP Marker Pen Fine (Pack to 10)';
            $PRICE = 70;
        }
        if($BUTTON=='MAR_div2_item3')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/01/Multimark.jpg1_.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell 10 Multimark Fine';
            $PRICE = 125;
        }


//DIV 3
        if($BUTTON=='MAR_div3_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2020/02/Artline-Tshirt-Marker-Fluorescent-Set-of.jpg?resize=247%2C296&ssl=1';
            $NAME = ' Artline Tshirt Marker Fluorescent Set of 6';
            $PRICE = 432;
        }
        if($BUTTON=='MAR_div3_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2020/01/Artline-Tshirt-Marker-Set-of.jpg?resize=247%2C296&ssl=1';
            $NAME = ' Artline Tshirt Marker Set of 6';
            $PRICE = 435;
        }
    

//DIV 4
        if($BUTTON=='MAR_div4_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/03/artlien.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Artline Yoodle Fine Pens (Pack of 5).';
            $PRICE = 90;
        }
        if($BUTTON=='MAR_div4_item2')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2020/08/Uniball-Pin-Fine-Liner-Markers-Set-of.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Uniball Pin Fine Liner Markers Set of 6';
            $PRICE = 450;
        }
        if($BUTTON=='MAR_div4_item3')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2020/02/Artline-Supreme-Fine-Pen-10-Shad.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Artline Supreme Fine Pen 10 Shades';
            $PRICE = 350;
        }

//DIV5
        if($BUTTON=='MAR_div5_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2021/07/Faber-Castell-Textliner-Assorted-Pastel-Colour-Set.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell Textliner Assorted Pastel Colour Set';
            $PRICE = 100;
        }
        if($BUTTON=='MAR_div5_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2020/02/como-hs1.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Hauser Combo Hi-Lighter';
            $PRICE = 20;
        }
        if($BUTTON=='MAR_div5_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/03/Artline-Highlighter-Assorted-Pac.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Artline Highlighter Assorted Pack of 5';
            $PRICE = 80;
        }

//DIV6
        if($BUTTON=='MAR_div6_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/03/EK400XF4.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Artline Paint Marker';
            $PRICE = 44;
        }
        if($BUTTON=='MAR_div6_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2021/08/Pierre-Cardin-Zig-Painty-Paint-Marker.jpg?resize=768%2C777&ssl=1';
            $NAME = 'Pierre Cardin Zig Painty Paint Marker';
            $PRICE = 105;
        }


//DIV7
        if($BUTTON=='MAR_div7_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2016/12/Untitled-1444-510x600.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Cello Permanent Markers (Pack of 5)';
            $PRICE = 90;
        }
        if($BUTTON=='MAR_div7_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/03/marky-11.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Cello Marky Permanent Marker (Set of 8)';
            $PRICE = 110;
        }
    

//DIV8
        if($BUTTON=='MAR_div8_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/06/vivid.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Cello White Mate Whiteboard Markers VIVID Set of 4';
            $PRICE = 80;
        }
        if($BUTTON=='MAR_div8_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2016/12/jumbo-whit1.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Cello Whiteboard Marker Jumbo (Pack of 10)';
            $PRICE = 260;
        }
        if($BUTTON=='MAR_div8_item3')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/03/Artline-Whiteboard-Marker.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Artline Whiteboard Marker';
            $PRICE = 20;
        }

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ NOTEBOOKS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

//DIV 1
        if($BUTTON=='NB_div1_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2017/05/Solo-Executive-Notebooks.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Solo Executive Notebooks A5';
            $PRICE = 105;
        }
        if($BUTTON=='NB_div1_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2020/09/Notex-Wirebound-Spiral-5-Subject-Notebook-by-StatMo.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Notex Wirebound Spiral 5 Subject Notebook';
            $PRICE = 240;
        }
        


//DIV 2
        if($BUTTON=='NB_div2_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2017/05/Solo-5-Subjects.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Solo 5 Subjects Note Book';
            $PRICE = 180;
        }
        if($BUTTON=='NB_div2_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/05/Solo-3-Subjects-Note-B.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Solo 3 Subjects Note Book';
            $PRICE = 95;
        }
        if($BUTTON=='NB_div2_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/05/Solo-Note-Book-B.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Solo Note Book B5';
            $PRICE = 90;
        }


//DIV 3
        if($BUTTON=='NB_div3_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2021/01/Faber-Castell-Notebook-A4-Unruled-172-Pages-by-StatM.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell Notebook A4 Unruled 172 Pages';
            $PRICE = 68;
        }
        if($BUTTON=='NB_div3_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2018/03/Classmate-Notebook-180-Pages-Unrule.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Classmate Notebook 180 Pages Unruled.';
            $PRICE = 48;
        }
        if($BUTTON=='NB_div3_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2018/02/Classmate-Paperkraft-Signature-Series-Notebook-192.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Classmate Paperkraft Signature Series Notebook';
            $PRICE = 105;
        }

//DIV 4
        if($BUTTON=='NB_div4_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2018/07/Classmate-Notebook-Single-Line-180-Page.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Classmate Notebook Single Line 180 Page';
            $PRICE = 90;
        }
        if($BUTTON=='NB_div4_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2021/01/Faber-Castell-Notebook-A4-Single-Line-172-Pag.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell Notebook A4 Single Line 172 Page';
            $PRICE = 70;
        }
        if($BUTTON=='NB_div4_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2021/09/Apsara-Notebook-Single-Line-304-P.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Apsara Notebook Single Line 304 Pages';
            $PRICE = 100;
        }

//DIV 5
        if($BUTTON=='NB_div5_item1')
        {
            $IMAGE = 'https://images-eu.ssl-images-amazon.com/images/I/51jNezlRY1L._SY300_SX300_QL70_FMwebp_.jpg';
            $NAME = 'Classmate GSM Classmate A4 Drawing Book with 40 Pages';
            $PRICE = 90;
        }
        if($BUTTON=='NB_div5_item2')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2021/09/Apsara-Drawing-Notebook-40-Pag.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Apsara Drawing Notebook 40 Page';
            $PRICE = 35;
        }
        
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ OFFICE ITEMS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


//DIV 1
        if($BUTTON=='OI_div1_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2021/07/Nataraj-Handy-Cutter-Pack-of.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Nataraj Handy Cutter (Pack of 10)';
            $PRICE = 150;
        }
        if($BUTTON=='OI_div1_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/01/9mm.1.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Maped Universal Cutter 9mm';
            $PRICE = 55;
        }
        if($BUTTON=='OI_div1_item3')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2020/09/2038.1.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Deli Rio Cutter 9mm';
            $PRICE = 75;
        }


//DIV 2
        if($BUTTON=='OI_div2_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2021/01/Banko-22-Note-Counting-Machin.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Banko 22 Note Counting Machine';
            $PRICE = 11000;
        }
        


//DIV 3
        if($BUTTON=='OI_div3_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/11/Aerotix-Rubber-Band-1.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Aerotix Rubber Band Size 1/2.';
            $PRICE = 330;
        }
        if($BUTTON=='OI_div3_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/11/Aerotix-Rubber-Band-Size.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Aerotix Rubber Band Size 1';
            $PRICE = 330;
        }
        if($BUTTON=='OI_div3_item3')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/10/Aerotix-Rubber-Ban.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Aerotix Rubber Band.';
            $PRICE = 330;
        }

//DIV 4
        if($BUTTON=='OI_div4_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2018/03/Faber-Castell-Stamp-Pa.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell Stamp Pads.';
            $PRICE = 37;
        }
        if($BUTTON=='OI_div4_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/03/Artline-Stamp-Pad-Medium-Size.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Artline Stamp Pad Medium Size.';
            $PRICE = 31;
        }
        

//DIV5
        if($BUTTON=='OI_div5_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2020/10/Philips-61013-Breeze-LED-Desklight-White-1.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Philips 61013 Breeze LED Desklight (White).';
            $PRICE = 1080;
        }
        if($BUTTON=='OI_div5_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2020/10/lite.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Philips 61013 Air LED Desklight (Black)';
            $PRICE = 1080;
        }
        

//DIV6
        if($BUTTON=='OI_div6_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2018/02/Classmate-Paperkraft-Signature-Series-Notebook-Single-Lin.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Classmate Paperkraft Signature Series Notebook Single Line.';
            $PRICE = 190;
        }
        if($BUTTON=='OI_div6_item2')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2017/12/Classmate-Paperkraft-Signature-Notebook-224-Pages-by-StatMo.in_.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Classmate Paperkraft Signature Notebook 224 Pages.';
            $PRICE = 130;
        }
        if($BUTTON=='OI_div6_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2018/02/Classmate-Paperkraft-Signature-Series-Notebook-192.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Classmate Paperkraft Signature Series Notebook 192.';
            $PRICE = 110;
        }

//DIV7
        if($BUTTON=='OI_div7_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2021/11/Omega-Bamblio-Sticky-Notes-3-Colo.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Omega Bamblio Sticky Notes 3 Colors.';
            $PRICE = 40;
        }
        if($BUTTON=='OI_div7_item2')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2020/09/Deli-Sticky-Notes-Neon-Color-A0.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Deli Sticky Notes Neon Color 3X5 A025.';
            $PRICE = 70;
        }
        if($BUTTON=='OI_div7_item3')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2017/01/3m-hinghlan.jpg?resize=247%2C296&ssl=1';
            $NAME = '3M Highland Self Stick Removable Notes';
            $PRICE = 30;
        }

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ PAPERS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

//DIV 1
        if($BUTTON=='PPRS_div1_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2018/10/Classmate-Eco-Friendly-A4-Size-Pape.jpg?resize=247%2C296&ssl=1';
            $NAME = ' Classmate Eco Friendly A4 Size Paper';
            $PRICE = 80;
        }
        if($BUTTON=='PPRS_div1_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2020/12/Pidilite-Fevicryl-All-In-One-Canvas-Painting-Kit.jpg?resize=247%2C296&ssl=1';
            $NAME = 'JK Copier Paper Ream A4 Size 75 gsm';
            $PRICE = 280;
        }
        if($BUTTON=='PPRS_div1_item3')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2020/07/Double-A-Everyday-Copier-Paper-Ream-A4-Size.jpg?resize=247%2C296&ssl=';
            $NAME = ' Double A Everyday Copier Paper Ream A4 Size';
            $PRICE = 300;
        }


//DIV 2
        if($BUTTON=='PPRS_div2_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2018/05/1222-1.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Classmate Project Paper One Side Ruled';
            $PRICE = 45;
        }
        if($BUTTON=='PPRS_div2_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2018/05/Classmate-Project-Paper-Rule.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Classmate Project Paper Ruled 50 Sheets';
            $PRICE = 45;
        }
        if($BUTTON=='PPRS_div2_item3')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2018/05/Classmate-Project-Paper-One-Side-Rul.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Classmate Project Paper One Side Ruled';
            $PRICE = 23;
        }


//DIV 3
        if($BUTTON=='PPRS_div3_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2021/11/Omega-Bamblio-Sticky-Notes-3-Colo.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Omega Bamblio Sticky Notes 3 Colors';
            $PRICE = 40;
        }
        if($BUTTON=='PPRS_div3_item2')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2021/11/Omega-Bamblio-Sticky-Notes-4-Colo.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Omega Bamblio Sticky Notes 4 Colors';
            $PRICE = 40;
        }
        if($BUTTON=='PPRS_div3_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2021/10/Omega-Bamblio-Sticky-Notes-1.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Omega Bamblio Sticky Notes 3×5';
            $PRICE = 70;
        }

//DIV 4
        if($BUTTON=='PPRS_div4_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/07/Desmat-SA-White-A0-Labels-Data-64-x-26.7-x.jpg?resize=247%2C296&ssl=1';
            $NAME = ' Desmat SA White A4û 30 Labels-Data 64 x 26.7 x 3';
            $PRICE = 250;
        }
        if($BUTTON=='PPRS_div4_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/07/Desmat-SA-White-A4-8-Labels-Data-48-x-140-x-4.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Desmat SA White A4 8 Labels-Data 48 x 140 x 4';
            $PRICE = 250;
        }
        if($BUTTON=='PPRS_div4_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/07/Desmat-SA-White-A4-40-Labels-Data-52.5-X-29.7-x-4.jpg?resize=247%2C296&ssl=1';
            $NAME = ' Desmat SA White A4 40 Labels-Data 52.5 X 29.7 x 4';
            $PRICE = 250;
        }

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ PENCILS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

//DIV 1
        if($BUTTON=='PNC_div1_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2020/09/Faber-Castell-6-Castell-9000-Pencil.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Faber Castell Castell 9000 Graded Pencil Set Of 6';
            $PRICE = 360;
        }
        if($BUTTON=='PNC_div1_item2')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2019/04/Artline-Sketch-Pencil-Set-of.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Artline Love Art Sketch Pencil Set of 6';
            $PRICE = 63;
        }
        if($BUTTON=='PNC_div1_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2020/09/Pidilite-Fevicryl-Acrylic-Pouring-K.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Pidilite Fevicryl Acrylic Pouring Kit';
            $PRICE = 275;
        }


//DIV 2
        if($BUTTON=='PNC_div2_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2019/01/Classmate-Fine-Script-Mechanical-Penci.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Classmate Fine Script Mechanical Pencil (Pack of 10)';
            $PRICE = 45;
        }
        if($BUTTON=='PNC_div2_item2')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2018/08/Cello-Supreme-All-Stars-Mechanical-Pencil-by-Sta.jpg?resize=247%2C296&ssl=11';
            $NAME = 'Cello Supreme All Stars Mechanical Pencil (Pack of 10)';
            $PRICE = 90;
        }
        if($BUTTON=='PNC_div2_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2018/07/Hauser-Auto-Gear-Mechanical-Pencils-Set-of.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Hauser Auto Gear Mechanical Pencils Set of 2';
            $PRICE = 63;
        }


//DIV 3
        if($BUTTON=='PNC_div3_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2021/09/Apsara-Glass-Marking-Pencil-White-Pack-of.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Apsara Glass Marking Pencil White (Pack of 10)';
            $PRICE = 54;
        }
        if($BUTTON=='PNC_div3_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2021/09/Apsara-Glass-Marking-Pencil-Black-Pack-of.jpg?resize=247%2C296&ssl=1';
            $NAME = ' Apsara Glass Marking Pencil Black (Pack of 10)';
            $PRICE = 54;
        }
        if($BUTTON=='PNC_div3_item3')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2021/09/Nataraj-Checking-Pencils-Red-Pack-of-10.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Nataraj Checking Pencils Red (Pack of 10)';
            $PRICE = 70;
        }

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ PENS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

//DIV 1
        if($BUTTON=='PEN_div1_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2021/09/Nataraj-Grip-Write-Ball-Pens-Pack-of.jpg?resize=247%2C296&ssl=1';
            $NAME = ' Nataraj Grip Write Ball Pens (Pack of 10)';
            $PRICE = 90;
        }
        if($BUTTON=='PEN_div1_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2021/02/Hauser-Xo-Ball-Pen-Pack-of-20-1.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Hauser XO Ball Pen (Pack of 10)';
            $PRICE = 90;
        }
        if($BUTTON=='PEN_div1_item3')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2021/09/Nataraj-Dew-Ball-Pens-Pack-of.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Nataraj Dew Ball Pens (Pack of 10)';
            $PRICE = 48;
        }


//DIV 2
        if($BUTTON=='PEN_div2_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2021/08/Artline-Supreme-Metallic-Marker-Pen-Set-of.jpg?resize=247%2C296&ssl=1';
            $NAME = ' Artline Supreme Metallic Marker Pen Set of 4';
            $PRICE = 290;
        }
        if($BUTTON=='PEN_div2_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2021/08/Artline-Supreme-Brush-Marker-Pen-Set-o.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Artline Supreme Brush Marker Pen Set of 4';
            $PRICE = 240;
        }
        if($BUTTON=='PEN_div2_item3')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2021/02/Artline-Decorite-Colour-Brush-Pen-Set-of-4.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Artline Decorite Colour Brush Pen Set of 4';
            $PRICE = 335;
        }


//DIV 3
        if($BUTTON=='PEN_div3_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2021/01/cali.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Artline Calligraphy Pen Set of 4';
            $PRICE = 345;
        }
        if($BUTTON=='PEN_div3_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2020/01/Artline-Calligraphy-Pastel-Colour-Pen-by.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Artline Calligraphy Pastel Colour Pen';
            $PRICE = 63;
        }
        if($BUTTON=='PEN_div3_item3')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2017/03/Artline-Ergoline-Calligraphy-Set-of-3.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Artline Ergoline Calligraphy Set of 3';
            $PRICE = 200;
        }

//DIV 4
        if($BUTTON=='PEN_div4_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2018/10/Hauser-Correction-Pen-CP25.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Hauser Correction Pen CP251';
            $PRICE = 25;
        }
        if($BUTTON=='PEN_div4_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/03/Correction-Pen2.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Artline Correction Pen';
            $PRICE = 25;
        }
        if($BUTTON=='PEN_div4_item3')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2017/01/faver-castell1.jpg?resize=247%2C296&ssl=1';
            $NAME = ' Faber Castell Correction Pen';
            $PRICE = 28;
        }

//DIV5
        if($BUTTON=='PEN_div5_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2021/08/Artline-Drawing-System-Assorted-Pack-o.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Artline Drawing System Assorted (Pack of 4)';
            $PRICE = 540;
        }
        if($BUTTON=='PEN_div5_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2020/08/Uniball-Pin-Fine-Liner-Markers-Set-of-1.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Uniball Pin Fine Liner Markers Set of 12';
            $PRICE = 990;
        }
        if($BUTTON=='PEN_div5_item3')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/03/Artline-Drawing-System-Assorted-Pack-of-6.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Artline Drawing System Assorted (Pack of 6)';
            $PRICE = 540;
        }

//DIV6
        if($BUTTON=='PEN_div6_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2021/06/Unomax-Disney-Fountain-Slim-Pen-by-StatMo.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Unomax Disney Fountain Slim Pen';
            $PRICE = 50;
        }
        if($BUTTON=='PEN_div6_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2020/08/Flair-Inky-Lava-Grey-Liquid-Ink-Fountain-Pe.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Flair Inky Lava Grey Liquid Ink Fountain Pen';
            $PRICE = 90;
        }
        if($BUTTON=='PEN_div6_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2020/08/Flair-Inky-Planets-Liquid-Ink-Fountain-Pen.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Flair Inky Planets Liquid Ink Fountain Pen';
            $PRICE = 50;
        }

//DIV7
        if($BUTTON=='PEN_div7_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2021/09/Cello-Aqua-Gel-Pen-Pack-of.jpg?resize=247%2C296&ssl=1s';
            $NAME = 'Cello Aqua Gel Pen (Pack of 10)';
            $PRICE = 45;
        }
        if($BUTTON=='PEN_div7_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2021/07/Nataraj-Itip-Gel-Pens-Pack-of.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Nataraj Itip Gel Pens (Pack of 10)';
            $PRICE = 100;
        }
        if($BUTTON=='PEN_div7_item3')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2021/07/Montex-Winner-Jumbo-Gel-Pen-Pack-of.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Montex Winner Jumbo Gel Pen (Pack of 10)';
            $PRICE = 100;
        }

//DIV8
        if($BUTTON=='PEN_div8_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2016/12/Cello-Fun-Glitter-Gel-Pens-Set.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Cello Geltech Fun Glitter Gel Pens Set of 10';
            $PRICE = 90;
        }
        if($BUTTON=='PEN_div8_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2018/01/Classmate-Octane-Colour-Burst-Pack-of-1.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Classmate Octane Colour Burst (Pack of 10)';
            $PRICE = 90;
        }
        if($BUTTON=='PEN_div8_item3')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2016/12/colouful-storins1.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Cello Butterflow Colors Ball Pen (Pack to 10)';
            $PRICE = 135;
        }

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ REFILS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


//DIV 1
        if($BUTTON=='REF_div1_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2016/12/butflow1.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Cello Butterflow Ball Pen Refill (Pack of 10)';
            $PRICE = 45;
        }
        if($BUTTON=='REF_div1_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2016/12/finegrip-refill1.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Cello Finegrip Ball Pen Refill (Pack of 10)';
            $PRICE = 36;
        }
        if($BUTTON=='REF_div1_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2016/12/lp-8000.2.jpg?resize=247%2C296&ssl=1';
            $NAME = '  Cello LP 8000 Ball Pen Ink Refill (Pack of 10)';
            $PRICE = 90;
        }


//DIV 2
        if($BUTTON=='REF_div2_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2020/08/Hauser-Sonic-Gel-Pen-Refills-Pack-of-10.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Hauser Sonic Gel Pen Refills (Pack of 10)';
            $PRICE = 45;
        }
        if($BUTTON=='REF_div2_item2')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2018/04/Pilot-HI-Tecpoint-V.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Pilot HI-Tecpoint V7 RT Refill';
            $PRICE = 60;
        }
        if($BUTTON=='REF_div2_item3')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2017/08/Classmate-Octane-Gel-Pen-Refill-Pack-of-10.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Classmate Octane Gel Pen Refill (Pack of 10)';
            $PRICE = 54;
        }


//DIV 3
        if($BUTTON=='REF_div3_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/07/Cross-Rollerball-Refill-for-Spire-Click-Classic-Century.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Cross Rollerball Refill for Spire Click & Classic Century';
            $PRICE = 440;
        }
        if($BUTTON=='REF_div3_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/02/Parker-Vector-Stainless-Steel-GT-Roller-Ball.jpg?resize=247%2C296&ssl=1';
            $NAME = ' Parker Vector Stainless Steel GT Roller Ball Pen';
            $PRICE = 540;
        }
        if($BUTTON=='REF_div3_item3')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2016/12/free_flo1.jpg?resize=247%2C296&ssl=1';
            $NAME = ' Cello Freeflo Gel Ink Roller Pen Refill (Pack of 10)';
            $PRICE = 90;
        }

//DIV 4
        if($BUTTON=='REF_div4_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2018/10/Hauser-Correction-Pen-CP25.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Hauser Correction Pen CP251';
            $PRICE = 25;
        }
        if($BUTTON=='REF_div4_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/03/Correction-Pen2.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Artline Correction Pen';
            $PRICE = 25;
        }
        if($BUTTON=='REF_div4_item3')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2017/01/faver-castell1.jpg?resize=247%2C296&ssl=1';
            $NAME = ' Faber Castell Correction Pen';
            $PRICE = 28;
        }

//DIV5
        if($BUTTON=='REF_div5_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2021/08/Artline-Drawing-System-Assorted-Pack-o.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Artline Drawing System Assorted (Pack of 4)';
            $PRICE = 540;
        }
        if($BUTTON=='REF_div5_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2020/08/Uniball-Pin-Fine-Liner-Markers-Set-of-1.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Uniball Pin Fine Liner Markers Set of 12';
            $PRICE = 990;
        }
        if($BUTTON=='REF_div5_item3')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/03/Artline-Drawing-System-Assorted-Pack-of-6.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Artline Drawing System Assorted (Pack of 6)';
            $PRICE = 540;
        }

//DIV6
        if($BUTTON=='REF_div6_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2021/06/Unomax-Disney-Fountain-Slim-Pen-by-StatMo.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Unomax Disney Fountain Slim Pen';
            $PRICE = 50;
        }
        if($BUTTON=='REF_div6_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2020/08/Flair-Inky-Lava-Grey-Liquid-Ink-Fountain-Pe.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Flair Inky Lava Grey Liquid Ink Fountain Pen';
            $PRICE = 90;
        }
        if($BUTTON=='REF_div6_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2020/08/Flair-Inky-Planets-Liquid-Ink-Fountain-Pen.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Flair Inky Planets Liquid Ink Fountain Pen';
            $PRICE = 50;
        }

//DIV7
        if($BUTTON=='REF_div7_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2021/09/Cello-Aqua-Gel-Pen-Pack-of.jpg?resize=247%2C296&ssl=1s';
            $NAME = 'Cello Aqua Gel Pen (Pack of 10)';
            $PRICE = 45;
        }
        if($BUTTON=='REF_div7_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2021/07/Nataraj-Itip-Gel-Pens-Pack-of.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Nataraj Itip Gel Pens (Pack of 10)';
            $PRICE = 100;
        }
        if($BUTTON=='REF_div7_item3')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2021/07/Montex-Winner-Jumbo-Gel-Pen-Pack-of.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Montex Winner Jumbo Gel Pen (Pack of 10)';
            $PRICE = 100;
        }

//DIV8
        if($BUTTON=='REF_div8_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2016/12/Cello-Fun-Glitter-Gel-Pens-Set.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Cello Geltech Fun Glitter Gel Pens Set of 10';
            $PRICE = 90;
        }
        if($BUTTON=='REF_div8_item2')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2018/01/Classmate-Octane-Colour-Burst-Pack-of-1.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Classmate Octane Colour Burst (Pack of 10)';
            $PRICE = 90;
        }
        if($BUTTON=='REF_div8_item3')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2016/12/colouful-storins1.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Cello Butterflow Colors Ball Pen (Pack to 10)';
            $PRICE = 135;
        }

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ SCHOOL BAGS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


//DIV 1
        if($BUTTON=='SB_div1_item1')
        {
            $IMAGE = 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSobvBfyJndpPYiDwm5JWN1_0D1MEfh6PURhtXHRWGmcs2G6LXeF3N9N1Isa5BrHP6nuN-1SW88yXP6pSPLTkeblI68lLkjRwgp8O3S54msTTBADRKx8E7h&usqp=CAE';
            $NAME = 'Tracker Unisex Nylon 45 L Travel Laptop Backpack.';
            $PRICE = 890;
        }
        if($BUTTON=='SB_div1_item2')
        {
            $IMAGE = 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTvhDhSRa5VazMQ_w4VoLEumbaese4ItGnISOoshT0-QLyZrQq880v8p0WLGoJWARFOncWq_v_SW0h-msSM2pFRd5ljF7SuRecGLxdR6_CJk02j4jolmbRO&usqp=CAE';
            $NAME = 'Capriff 32 L Casual Waterproof Laptop Bag/Backpack.';
            $PRICE = 499;
        }
        if($BUTTON=='SB_div1_item3')
        {
            $IMAGE = 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcT85oEsyFa0GvRRlA8vLM8YjOfTFefLcFJ_UgipuhY2D6TadMf3byaHulnEfNcP0By0ZxzBKepzCWKKHvPz1AhCCLX9YL-noNsahuCH6_pOuK-J7qCHAGJlow&usqp=CAE';
            $NAME = 'Genie 22 Ltrs Black School Backpack (SWING18SBBLK)';
            $PRICE = 920;
        }


//DIV 2
        if($BUTTON=='SB_div2_item1')
        {
            $IMAGE = 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRo9wnjU53UnY5kBhpO8LSgFdfXnFsqE2XvupPJu4O-vSAK11yTHt-cWB20JzEQuOut2suisdLB_U3Gs2L3SmwvAkIrvacuqgPFKCT2AxalVVh5BqfBb6Xj&usqp=CAE';
            $NAME = 'Grear Waterproof 15.6 inch Bag.';
            $PRICE = 380;
        }
        if($BUTTON=='SB_div2_item2')
        {
            $IMAGE = 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSaZ8OYFf8NnPxeTc592S9-5ypprMJimJjpeYetlPWMobHEOwm2h1m1gkeHCFE9AwkOxDs3x8nmXXZRknlBUoTJ4-gzri2WO_mF3UTPOpgYF6la1q4McS5I&usqp=CAE';
            $NAME = 'Universal Multi-Function Canvas Cloth Shoulders Bag Leisurely';
            $PRICE = 830;
        }
        if($BUTTON=='SB_div2_item3')
        {
            $IMAGE = 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQPQY7oIjWMLxxrIcgMsoLLjSa8cd1FbPL1cZvGqLs8k0z5S0nbRVFgqxqM1p6xrShnOkkyfJno5ivi7is8t0iJ-88HnlXYaJB8kNTopfvW&usqp=CAE';
            $NAME = 'President Canvas Casual Backpack School/College.';
            $PRICE = 650;
        }


//DIV 3
        if($BUTTON=='SB_div3_item1')
        {
            $IMAGE = 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcS2vhudt0wIvt_mTryjr0lsaYE1ITx_QJVy8WDMCT68ejzPZUf5MELcGKhuCabQPwuibxJzFkDpDWkzHZsNFsoiZOOeYsKbXwPPv_2l4060tgZH2gs5O9CZ&usqp=CAE';
            $NAME = 'JAPSBAG Medium 25 L Laptop Backpack.';
            $PRICE = 449;
        }
        if($BUTTON=='SB_div3_item2')
        {
            $IMAGE = 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQ6Nhc1aevy5L0lxI1OsJ-XST7gWTYcnOgBgd7UxTWkbUHBI9rLbLI1CGKkZPcbTNr0uIFWHNHdn19p-qMmD2jF2oTp8zxKYdu1X9qkaT3RPD2VYIW2xFg6&usqp=CAE';
            $NAME = 'Veneer Medium 20 L Laptop Backpack.';
            $PRICE = 599;
        }
        if($BUTTON=='SB_div3_item3')
        {
            $IMAGE = 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcS8J4FPUUt8W4JkNuv6etdj6ToCqEmuWab0-GyDIChawLk07T9O2wCVrSwzAlgEMW28ixQyPjYDf3a3-sp8dYDXq1511KDSw9SVYvCNTlhpTybcpuHWLiG0pA&usqp=CAE';
            $NAME = 'Oma Ze Students Backpack/Waterproof Bag';
            $PRICE = 300;
        }

//DIV 4
        if($BUTTON=='SB_div4_item1')
        {
            $IMAGE = 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQu7QtosI3qkffdyNcxBKoMMDCrScw_LKRe_Z-yygScxkHqFK_ve8kB6PMx6n3-kr6QwHezCw8mh0GEJVDhjqxwS0QmZBf--OUk4wa4zU2N&usqp=CAE';
            $NAME = 'Natty Urban Classic School Bags for Men';
            $PRICE = 699;
        }
        if($BUTTON=='SB_div4_item2')
        {
            $IMAGE = 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQ3rilx-hX_LFB4q2H4hogDpWtXeyoHvJYUYf9sn6XBhHk39pZSHaR1lLLcbspanGqcPFS3wB9y23mTpXgEdB0VT7vpVPuF8q77JBaYoVAj_RYlE2UF_xBYeg&usqp=CAE';
            $NAME = 'PUMA Phase Backpack II in Black';
            $PRICE = 950;
        }
        if($BUTTON=='SB_div4_item3')
        {
            $IMAGE = 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcS5ArfPUYsBoO847iGL8LcLUNmtzzmlhM0ZYDbckEqszEx8vtTz-Ryye9PeiU8D1uJHRyr4BKpFQMHWEEAJ4qc96d99_R0p6WeY0_OAYmxjDeBPiCjnWeJn&usqp=CAE';
            $NAME = 'Hang It Backpacks - Bags For Men 40 L';
            $PRICE = 499;
        }

//DIV5
        if($BUTTON=='SB_div5_item1')
        {
            $IMAGE = 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRwHodoDPWoWfnsaEZCbI_u0NuKlUIiqwSqTLE7EoCtlNJ6G6Pm4Hkl1UfmAxhhpAfLvzc9sgn93jkPtJ58UEA7u9rrtRLddfId_4LeaYNkflOhWef1gX_O&usqp=CAE';
            $NAME = 'Tinytot 30 Ltrs Navy Blue School Bag for Boys & Girls';
            $PRICE = 390;
        }
        if($BUTTON=='SB_div5_item2')
        {
            $IMAGE = 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQ4jFONgOPns2voR-iZ8aa2A1WRbTr9CLMGfxgusleRBrqhpx7CK79d5WhUhc64qZWL8c7Y5A9cvCo5cG_vDPrlaQnr-rM8DPAeDnK_SmJzmKJivd9Lp32-Fw&usqp=CAE';
            $NAME = 'Qips H.M.International High Quality Solid Colour Backpack';
            $PRICE = 499;
        }
        if($BUTTON=='SB_div5_item3')
        {
            $IMAGE = 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSrl8AvL-f-6LQHAAO26byknAvLdnO7hD8Jgu9msXg5UmkYOaggFyQN-X2T46FYGOA850SSsdduUIR1f1Iepx3sef4JmEs5EX8sqQSZRKPKo6z-2s3W9APp4g&usqp=CAE';
            $NAME = 'Tinytot 30 Ltrs Blue School Bag For Girls';
            $PRICE = 740;
        }

//DIV6
        if($BUTTON=='SB_div6_item1')
        {
            $IMAGE = 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSIvxgCEbHZLO4feME5VugYNA_pOU_yU4v3hxUPZqzoEqMWaCuRNR4XFm6JsmPUi7UagMiw0UJzjgCwl-1PXCdlrwdi4GY-b721UN3olTG8xGeQXpOXscS56w&usqp=CAE';
            $NAME = 'Phase Backpack Black';
            $PRICE = 799;
        }
        if($BUTTON=='SB_div6_item2')
        {
            $IMAGE = 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRtGLO8o7q3aUUMbTwiCW0KUqZ48Fx4AD50yGN3GLYL-VMcseUF37de-DZnbvI5dxmesOULheG_pBFVsWnYf-ocO5yrzqWfHXcAp4uG9co&usqp=CAE';
            $NAME = 'Nike Elemental Backpack One Size';
            $PRICE = 1995;
        }
        if($BUTTON=='SB_div6_item3')
        {
            $IMAGE = 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTFRwtyhM22C2PHNxRNfwxXRXG8mJrrsRYHZzSvjEVmyHHeb6DiaDtMSe2W5646pDESHKn8VJwy82vLiIbQq3y0d-LFxlPuAtAOqrt6h0aMyD26mvwHsBPT&usqp=CAE';
            $NAME = 'Volcom School Pack Backpack One Size';
            $PRICE = 3800;
        }

//DIV7
        if($BUTTON=='SB_div7_item1')
        {
            $IMAGE = 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRM4HbNz4hbO8icPL3oORlaLdqfExkehYvFUpImyyL_sDBMJUIyA176JAx1ryq0mUBFcaV-qQ0limD6GR4K7nFayBWtGFU1cuZ2L-dOo5GATn_0m9w6EaKeeg&usqp=CAE';
            $NAME = 'WIKI CHAMP 1';
            $PRICE = 745;
        }
        if($BUTTON=='SB_div7_item2')
        {
            $IMAGE = 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSAjtro_ccqdoMm5FSJnl84nwCiGuQEzRdzhPlDXRqRQITP91bWB3481r5kQ2t0JgyHIYVQlSDYcOKlHoPAsxxs_Ycdfwizl3YGr3t4F59GGYUT_dpkB_Wn&usqp=CAE';
            $NAME = 'Lavie Sport Backpack 22 L Backpack';
            $PRICE = 1045;
        }
        if($BUTTON=='SB_div7_item3')
        {
            $IMAGE = 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcS6J-CU9TLJ7fTkK9R1e6kcHbFz7MC30qUi5pWTzwgLoWpdbeSm10UOO2f1KuQyPiEzLbkLvBDe5D_tOCvblgO6E-5rZkih2TTuHL75ZDb8Oz9djVFVoyhp&usqp=CAE';
            $NAME = 'Lavie Sport Daisy Red & White Polyester Small Backpack';
            $PRICE = 1050;
        }

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ TAPE~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  

//DIV 1
        if($BUTTON=='TAP_div1_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2020/12/bron.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Apex Pack 365 Tape Brown 48mm x 35mt (2inch)';
            $PRICE = 20;
        }
        if($BUTTON=='TAP_div1_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2020/12/Apex-Pack-365-Tape-72mm-x-50m.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Apex Pack 365 Tape Transparent 72mm x 50mt';
            $PRICE = 42;
        }
        if($BUTTON=='TAP_div1_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/01/3M-Scotch-BOPP-Packaging-Tape-Clea.jpg?resize=247%2C296&ssl=1';
            $NAME = '3M Scotch BOPP Packaging Tape-Clear';
            $PRICE = 65;
        }


//DIV 2
        if($BUTTON=='TAP_div2_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/01/3M-Scotch-BOPP-Packaging-Tape-Tan.jpg?resize=247%2C296&ssl=1';
            $NAME = '3M Scotch BOPP Packaging Tape-Tan';
            $PRICE = 45;
        }


//DIV 3
        if($BUTTON=='TAP_div3_item1')
        {
            $IMAGE = 'https://i0.wp.com/www.statmo.in/wp-content/uploads/2020/09/Deli-Correction-Tape-7264.jpg?resize=247%2C296&ssl=1';
            $NAME = ' Deli Correction Tape 7264';
            $PRICE = 50;
        }
        if($BUTTON=='TAP_div3_item2')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/01/3M-Scotch-Permanet-Glue-S.jpg?resize=247%2C296&ssl=1';
            $NAME = '3M Scotch Magic Tape';
            $PRICE = 160;
        }
        if($BUTTON=='TAP_div3_item3')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2017/01/19mm-x-4.jpg?resize=247%2C296&ssl=1';
            $NAME = '3M Scotch Magic Tape (With Dispenser)';
            $PRICE = 150;
        }

//DIV 4
        if($BUTTON=='TAP_div4_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2017/10/Aerotix-Masking-Tape-by-Stat.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Aerotix Masking Tape';
            $PRICE = 290;
        }
    
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ CLIPS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

//DIV 1
        if($BUTTON=='CLIP_div1_item1')
        {
            $IMAGE = 'https://i2.wp.com/www.statmo.in/wp-content/uploads/2020/09/Deli-Binder-Clips-S.jpg?resize=247%2C296&ssl=1';
            $NAME = 'DELI BINDER CLIPS (Set of 12)';
            $PRICE = 150;
        }
       

//DIV 2
        if($BUTTON=='CLIP_div2_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2021/06/Premier-Push-Pin-Multi-Color.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Premier Push Pin Multi Color';
            $PRICE = 40;
        }


//DIV 3
        if($BUTTON=='CLIP_div3_item1')
        {
            $IMAGE = 'https://i1.wp.com/www.statmo.in/wp-content/uploads/2021/06/Premier-U-Clip-Multi-Color.jpg?resize=247%2C296&ssl=1';
            $NAME = 'Premier U Clip Multi Color';
            $PRICE = 35;
        }

        $ITEM_NO = 1;
        $QUANTITY = 1;
        $connection=mysqli_connect("localhost","root","") or die("Couldn't connect ot server");
	
        $query="CREATE DATABASE IF NOT EXISTS SM";
        
        $result=mysqli_query($connection , $query) or die("Query failed : " . mysqli_error ($connection));
        
        $db=mysqli_select_db($connection,"SM") or die("Couldn't connect to database");
        
        $query="CREATE TABLE IF NOT EXISTS Product ( Item_No INT(10) , Image VARBINARY(100) , Name VARCHAR(110) , Price INT(50), Quantity INT(3))";
        
        $result=mysqli_query($connection , $query) or die("Query failed : " . mysqli_error ($connection));
        
        $query="INSERT INTO Product (Item_No , Image , Name , Price, Quantity) VALUES ($ITEM_NO , '$IMAGE' , '$NAME' , '$PRICE' , $QUANTITY)";
        $ITEM_NO = $ITEM_NO + 1;

        $result=mysqli_query($connection , $query) or die("Query failed : " . mysqli_error ($connection));
        
        $query="SELECT * FROM Product";
        
        $result=mysqli_query($connection,$query) or die("Query Failed:".mysqli_error());

   
    

        header("Location: CART.php"); 
        exit();

?>


    






</body>



</html>