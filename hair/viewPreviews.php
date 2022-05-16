<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>View product's reviews page</title>
<link href="reviews.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include("header.php"); ?>

<?php 
// Initialize the session
// session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    // header("location: UserLogin.php");
    // exit;
} 
@$user_id = $_SESSION["id"];
@$email = $_SESSION["email"];
@$uname = $_SESSION["name"];
@$product_id = $_GET['id']; 
 ?>
<body>
<!-- <header> -->
<?php 
include("config.php");
$sql = "SELECT * FROM `products` WHERE id='$product_id'";
    $result = $conn->query($sql);
    foreach ($result as $val) {
        // code...
        $pname = $val['name'];
        $desc = $val['description'];
        $img = $val['image'];
    }
 ?> 
<!-- <div class="topnav">

            <img alt="logo" src="images/Logo.jpeg" class="logo">
					
  <div class="search-container">
    <form action="action.php">
    <input type="text" placeholder="Search.." name="search">
    <button type="submit"><image alt="search button" src="images/search-icon.png" class="fa fa-search" width="10" height="10"></button>
    </form>
  </div>
            <a class="active" href="logout.php">Logout</a>
            <a class="active" href="category.php">Hair categories</a>
            <a class="active" href="index.php">Home</a>
         </div> -->
<!-- </header> -->


<main>

<!-- <br>
<br>
<div class="dropdown">
  <button class="dropbtn">Categories</button>
  <div class="dropdown-content">
  <a href="StraightHair.php">Straight Hair</a>
  <a href="CurlyHair.php">Curly Hair</a>
  <a href="WavyHair.php">Wavy Hair</a>  
</div>
</div> -->
<h1> Product reviews </h1>
<br>
<br>

<table>
<tbody>
  <tr class="img">
      <td> <img src="uploads/<?php echo $img ?>" alt=""  width="300" height="300" > </td>
    <td>Name: <?php echo $pname; ?> 
<br>
<br>
Description: <?php echo $desc; ?>
</td>
</tr>
</tbody>
</table>
	
<?php 
$query = mysqli_query($conn,"SELECT AVG(rating) as overall_rating from reviews where page_id=$product_id");
$row = mysqli_fetch_array($query);
$overall_rating=$row['overall_rating'];
$query = mysqli_query($conn,"SELECT count(rating) as Total from reviews where page_id=$product_id");
$row = mysqli_fetch_array($query);
$Total=$row['Total'];
$query = mysqli_query($conn,"SELECT count(content) as Totalreview from  reviews where page_id=$product_id");
$row = mysqli_fetch_array($query);
$Total_review=$row['Totalreview'];
$review = mysqli_query($conn,"SELECT content,rating,name,id from reviews where page_id=$product_id order by id desc ");
$rating = mysqli_query($conn,"SELECT count(*) as Total,rating from reviews group by rating order by rating desc");


 ?>


    <input type="hidden" id="name" value="<?php echo $uname; ?>">	  
<?php if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    ?>

    <p>To rate and write a review you must need to login.. <span><a href="Login.php">Click to Login</a></span></p>

    <?php
} else
{
    ?>

<div class="reviews"></div>
    <?php
} ?>

<script> 
const reviews_page_id = <?php echo $product_id; ?>;
var name = document.getElementById("name").value;
fetch("review.php?page_id=" + reviews_page_id + "&name="+ name).then(response => response.text()).then(data => {
    document.querySelector(".reviews").innerHTML = data;
    document.querySelector(".reviews .write_review_btn").onclick = event => {
        event.preventDefault();
        document.querySelector(".reviews .write_review").style.display = 'block';
        // document.querySelector(".reviews .write_review input[name='name']").focus();
    };
    document.querySelector(".reviews .write_review form").onsubmit = event => {
        event.preventDefault();
        fetch("review.php?page_id=" + reviews_page_id + "&name="+ name, {
            method: 'POST',
            body: new FormData(document.querySelector(".reviews .write_review form"))
        }).then(response => response.text()).then(data => {
            document.querySelector(".reviews .write_review").innerHTML = data;

        });

        document.querySelector(".reviews .edit_review_btn").onclick = event => {
        event.preventDefault();
        document.querySelector(".reviews .edit_review").style.display = 'block';
    };


    };
});
</script>
<div class="row container">
<div class="col-md-4 ">
    <br>
    <br>
<h3>Rating & Reviews</h3>
    <!-- <div class="row">
    
        <div class="col-md-6">
            <h3 align="center"><b><?php echo round($overall_rating,1);?></b> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:#ff9f00;"></i></h3>
            <p><?=$Total;?> ratings and <?=$Total_review;?> reviews</p>
        </div>
        
    </div> -->
<br>
<br>
<br>
<div class="row">
        <div class="col-md-12"> 
        <?php
            while($db_review= mysqli_fetch_array($review)){
        ?>
                <h4 style="    font-size: 16px;"><?php echo $db_review['rating'];?> <i class="fa fa-star" data-rating="2" style="letter-spacing: 3px;
    font-size: 32px;
    color: #F5A624;
    padding: 0 5px 0 10px;;"></i> by <span style="font-size:14px;"><?php echo $db_review['name'];?></span></h4>
                <h2><?php echo $db_review['content'];?></h2>
                <hr>
                <?php if ($uname == $db_review['name']) {
                    ?>
                    <td><input type='button' class="btn btn-primary" id="save_button<?php echo $db_review['id']; ?>" value="Edit" onclick="edit('<?php echo $db_review['id']; ?>');">
                    <input type='button' class="btn btn-danger" id="save_button<?php echo $db_review['id']; ?>" value="Delete" onclick="del('<?php echo $db_review['id']; ?>');">
                </td><br><br>
                    <?php


                } ?>
                
                
                <input type="hidden" value="<?php echo $db_review['name']; ?>" id="uname">

            <?php   
            }
                
        ?>
        <br>
        <input type="hidden" id="get_id">
        </div>
    </div>

</div>
</div>

<br>






<script>
    function edit(id)
    {
        
        var inputF = document.getElementById("get_id");
        inputF.value = id;
        document.querySelector("#edit").style.display = 'block';
        // 
    }


   function del(id) { 
    $.ajax({
        url: "delete-preview.php",
        type: "POST",
        data:{id: id},
        success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            if(dataResult.statusCode==200){
                // $ele.fadeOut().remove();
                alert("Review Deleted!");
                location.reload();
            }else{alert("Having issue, try again!");location.reload();}
        }
    });
}
</script>

<div class="write_review" id="edit">
    
        <input name="name" type="hidden" value="" >
        <input name="rating" id="rate" type="number" min="1" max="5" placeholder="Rating (1-5)" required>
        <textarea name="content" id="comment" placeholder="Write your review here..." required></textarea>
        <button onclick="edit_row();">Update Review</button>
    
</div>
<script>
    function edit_row ()
{
    const id = $('#get_id').val();
    const rate = $('#rate').val();
    const comment = $('#comment').val();
if (rate !== '' && comment !== '') {
    
    $.ajax({
            url: "edit-data.php",
            type: "POST",
            cache: false,
            data:{
                id: id,
                rate: rate,
                comment: comment,
            },
            success: function(dataResult){
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==200){
                    // $('#update_country').modal().hide();
                    alert('Data updated successfully !');
                    location.reload();                  
                }else
                {
                   alert('Data not updated, try latter !');
                    location.reload();   
                }
            }
        });

    }
    else
        {
            alert("Fill Rate & comment fields to update review!");
        }

     
}
</script>


<style>
    .write_review_btn, .write_review button {
    display: inline-block;
    background-color: #565656;
    color: #fff;
    text-decoration: none;
    margin: 10px 0 0 0;
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 600;
    border: 0;
}
.write_review_btn:hover, .write_review button:hover {
    background-color: #636363;
}
.write_review {
    display: none;
    padding: 20px 0 10px 0;
}
.write_review textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    height: 150px;
    margin-top: 10px;
}
.write_review input {
    display: block;
    width: 250px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-top: 10px;
}
.write_review button {
    cursor: pointer;
}
</style>		 
</main>



<?php include("footer.php"); ?>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>