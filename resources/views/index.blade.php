<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>

    <style>
        body {
    background-color: #e1e1e1;
    width: 100%;
    height: 100%;
    overflow-x: hidden;
    text-align: center;


}

.maincard{
    margin-top: 15px;
    width: 50%;
    height: 900px;
    background-color: white;
    border-radius: 8px;
    display: inline-block;

}

.header{
    display: grid;
    grid-template-columns: 1fr 1fr;
    margin-top: 28px;
}

.fName{
    text-align: left;
    padding-left: 15%;

}

.fName>h4{
    font-size: 19px;
    font-family: 'Open Sans', sans-serif;
    color: #5b5b5b;
    font-weight: bold;
    line-height: 1;
    vertical-align: top;
    margin-bottom: 8px;
}
.date{
    font-size: 14px;
    font-family: 'Open Sans', sans-serif;
    color: #5b5b5b;
    font-weight:  400;
    line-height: 1;
    vertical-align: top;
}

.logo{

    text-align: center;
    padding-right: 15%;

}
.logo>h4{
    font-size: 19px;
    font-family: 'Open Sans', sans-serif;
    color: #5b5b5b;
    font-weight: bold;
    line-height: 1;
    vertical-align: top;
    margin-bottom: 8px;
}

.infos{
    margin-top: 42px;
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.titlel{
    text-align: left;
    padding-left: 15%;
    font-size: 12px;
    font-family: 'Open Sans', sans-serif;
    color: #5b5b5b;
    line-height: 1;
    vertical-align: top;
    font-weight: bold;
    text-transform: uppercase;
}
.titler{
    text-align: left;
    padding-left: 29%;
    font-size: 12px;
    font-family: 'Open Sans', sans-serif;
    color: #5b5b5b;
    line-height: 1;
    vertical-align: top;
    font-weight: bold;
    text-transform: uppercase;
}

.para1{
    padding-left: 15%;
    text-align: left;
    font-size: 12px;
    font-family: 'Open Sans', sans-serif;
    color: #5b5b5b;
    line-height: 12px;
    vertical-align: top;
}
.para2{
  
    padding-left: 30%;
    text-align: left;
    font-size: 12px;
    font-family: 'Open Sans', sans-serif;
    color: #5b5b5b;
    line-height: 12px;
    vertical-align: top;
}

.titlet{
    padding-top: 30px;
    text-align: left;
    padding-left: 15%;
    font-size: 12px;
    font-family: 'Open Sans', sans-serif;
    color: #5b5b5b;
    line-height: 1;
    vertical-align: top;
    font-weight: bold;
    text-transform: uppercase;
}



table{
    margin-top: 30px;
}

.table3{
    margin-right: 55px;
}

.titlec{
    padding-bottom: 5px;
    padding-top: 30px;
    text-align: left;
    padding-left: 8%;
    font-size: 12px;
    font-family: 'Open Sans', sans-serif;
    color: #5b5b5b;
    line-height: 1;
    vertical-align: top;
    font-weight: bold;
    text-transform: uppercase;
}
.condi1{
    text-align: left;
    padding-left: 8%;
    font-size: 12px;
    font-family: 'Open Sans', sans-serif;
    color: #5b5b5b;
    line-height: 1;
    vertical-align: top;
    font-weight: 400;
    text-transform: lowercase;
}

#S1{

    font-size: 10px;
    text-transform: uppercase;
}

#title{
    font-size: 19px;
    font-family: 'Open Sans', sans-serif;
    color: #5b5b5b;
    font-weight: bold;
    line-height: 1;
    vertical-align: top;
    margin-bottom: 8px;
}
#date{
    font-size: 14px;
    font-family: 'Open Sans', sans-serif;
    color: #5b5b5b;
    font-weight: 400;
    line-height: 1;
    vertical-align: top;
    margin: 0px;
}

.table2{
    margin: 0px;
    margin-bottom: 75px;
}
#detail{
    text-align: left;
    padding-left: 15%;
    font-size: 13px;
    font-family: 'Open Sans', sans-serif;
    color: #5b5b5b;
    line-height: 1;
    vertical-align: top;
    font-weight: bold;
    text-transform: uppercase;
}

#conditions{
    text-align: left;
    font-size: 12px;
    font-family: 'Open Sans', sans-serif;
    color: #5b5b5b;
    line-height: 1;
    vertical-align: top;
    font-weight: bold;
    text-transform: uppercase;
}
    </style>
</head>
<body>
    <div class="maincard">
        @yield('content')
    </div>
</body>
</html>