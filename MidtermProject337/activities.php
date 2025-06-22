<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities Page</title>
    <style>
        body {
            background-color: rgb(252, 204, 211);
            text-align: center; 
        }

        h1 {
            margin: 40px; 
            color: rgb(0, 0, 0);
        }

        ul {
            list-style-type: none; 
            padding: 25; 
        }

        .image-container {
            display: center;
            justify-content: center; 
        }

        .image-container img:nth-child(1) {
            height: 400px;
        }

        .image-container img:nth-child(2) {
            height: 350px;
        }

        #a,#b,#c,#d {
            width: 600px; 
            cursor: pointer;
            margin-bottom: 2%;
        }

    </style>
</head>

<body>
    <div class="menu"><?php include 'navbar.php';?></div>

    <h1>Activities Page</h1>
        
    <div class="image-container">
        <a href="https://th.bing.com/th/id/R.18f7a0da9b02fd66cbee85c612e9ac2a?rik=XKMBd83t%2bWnK4A&riu=http%3a%2f%2fwww.shangri-la.com%2fuploadedImages%2fShangri-La_Resorts%2fShangri-La%e2%80%99s_Fijian_Resort_and_Spa%2c_Yanuca%2c_Fiji%2f1300x950px+-+For+Kids+background+-+Inflatable+Waterpark+with+Family.jpg&ehk=%2bwzgMOGTjE%2frX%2bxj2taNSRaj%2bSLkRTjlGZi4KffKPHs%3d&risl=&pid=ImgRaw&r=0" target="_blank">
        <img id="d" src="https://th.bing.com/th/id/R.18f7a0da9b02fd66cbee85c612e9ac2a?rik=XKMBd83t%2bWnK4A&riu=http%3a%2f%2fwww.shangri-la.com%2fuploadedImages%2fShangri-La_Resorts%2fShangri-La%e2%80%99s_Fijian_Resort_and_Spa%2c_Yanuca%2c_Fiji%2f1300x950px+-+For+Kids+background+-+Inflatable+Waterpark+with+Family.jpg&ehk=%2bwzgMOGTjE%2frX%2bxj2taNSRaj%2bSLkRTjlGZi4KffKPHs%3d&risl=&pid=ImgRaw&r=0" alt="Clickable Image">
    </a>
    
    <a href="https://www.sandals.com/blog/content/images/2019/05/surf-simulator-beaches-turks-caicos.jpg" target="_blank">
        <img id="a" src="https://www.sandals.com/blog/content/images/2019/05/surf-simulator-beaches-turks-caicos.jpg" alt="Clickable Image">
    </a>
    </div>

    <div>
    <a href="https://temeculablogs.com/wp-content/uploads/2018/07/schweitzer-mt.jpg" target="_blank">
        <img id="b" src="https://temeculablogs.com/wp-content/uploads/2018/07/schweitzer-mt.jpg" alt="Clickable Image">
    </a>
    
    <a href="https://www.magicalvacationhomes.com/wp-content/uploads/2020/09/reunion_resort_water_park_1.jpg" target="_blank">
        <img id="c" src="https://www.magicalvacationhomes.com/wp-content/uploads/2020/09/reunion_resort_water_park_1.jpg" alt="Clickable Image">
    </a>
    </div>
   
</body>


</html>
