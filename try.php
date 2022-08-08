<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="age" placeholder="Age">
        <select name="gender" id="">
            <option value="0">Male</option>
            <option value="1">Female</option>
        </select>
        <input type="text" name="weight" placeholder="Weight">
        <input type="text" name="height" placeholder="Height">
        <select name="actlevel" id="">
            <option value="1">Sedentary</option>
            <option value="2">Low Active</option>
            <option value="3">Active</option>
            <option value="4">Very Active</option>
        </select>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $height = (float)$_POST['height'];
    $weight = $_POST['weight'];
    $actlevel = $_POST['actlevel'];

    if($actlevel == 1){
        $actLevel_ = number_format(rand(1.0*10,1.39*10)/10,2);
    }else if($actlevel == 2){
        $actLevel_ = number_format(rand(1.4*10,1.59*10)/10,2);
    }else if($actlevel == 3){
        $actLevel_ = number_format(rand(1.6*10,1.89*10)/10,2);
    }else if($actlevel == 4){
        $actLevel_ = number_format(rand(1.9*10,2.5*10)/10,2);
    }else{
        echo "Invalid Input";
    }
    
    if($gender == 0 && $age >= 3 && $age <= 8){ // Boys 3-8 Years old
        $eer = 88.5;
        $weight_ = 26.7 * $weight;
        $height_ = 903 * $height;
        $height_and_weight_ = $weight_ + $height_;
        $PAL_and_HW = $actLevel_ * $height_and_weight_;
        $age_ = 61.9 * $age;
        $PAL_HW = $PAL_and_HW + 20;
        $age_PAL_HW = $age_ + $PAL_HW;
        $total = number_format($age_PAL_HW - $eer,4);
    }else if($gender == 0 && $age >= 9 && $age <= 18){ // Boys 9-18 Years old
        $eer = 88.5;
        $weight_ = 26.7 * $weight;
        $height_ = 903 * $height;
        $height_and_weight_ = $weight_ + $height_;
        $PAL_and_HW = $actLevel_ * $height_and_weight_;
        $age_ = 61.9 * $age;
        $PAL_HW = $PAL_and_HW + 25;
        $age_PAL_HW = $age_ + $PAL_HW;
        $total = number_format($age_PAL_HW - $eer,4);
    }else if($gender == 1 && $age >= 3 && $age <= 8){ // Girls 3-8 Years old
        $eer = 135.3;
        $weight_ = 10.0 * $weight;
        $height_ = 934 * $height;
        $height_and_weight_ = $weight_ + $height_;
        $PAL_and_HW = $actLevel_ * $height_and_weight_;
        $age_ = 30.8 * $age;
        $PAL_HW = $PAL_and_HW + 20;
        $age_PAL_HW = $age_ + $PAL_HW;
        $total = number_format($age_PAL_HW - $eer,4);
    }else if($gender == 1 && $age >= 9 && $age <= 18){ // Girls 9-18 Years old
        $eer = 135.3;
        $weight_ = 10.0 * $weight;
        $height_ = 934 * $height;
        $height_and_weight_ = $weight_ + $height_;
        $PAL_and_HW = $actLevel_ * $height_and_weight_;
        $age_ = 30.8 * $age;
        $PAL_HW = $PAL_and_HW + 25;
        $age_PAL_HW = $age_ + $PAL_HW;
        $total = number_format($age_PAL_HW - $eer,4);
    }
}

?>