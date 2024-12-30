<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Library Management System</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sacramento&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Cardo&display=swap');
*{
    padding: 0; margin: 0;
    box-sizing: border-box;
    user-select: none;
}
body, button{
    font-family: 'Cardo', serif;
}
.nav{
    display: flex;
    align-items: center;
    min-height: 50px;
    justify-content: space-evenly;
    background-color: #e6e9f0;
    z-index: 1000;
    position: fixed;
    width: 100%;
    box-shadow: 0 0 2px 2px rgba(0,0,0,0.1);
}
.navList{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 500px;
    height: 50px;
}
.navList ul{
    display: flex;
    width: 100%;
    height: 100%;
    align-items: center;
    justify-content: space-evenly;
}
.navList ul li{
    list-style: none;
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    border-bottom: 4px solid transparent;
    transition: 0.2s linear;
}
.navList ul li:hover{
    border-bottom: 4px solid #431c5d;
}
.navList ul li a{
    color: #431c5d;
    font-weight: bolder;
    font-size: 15px;
}
a{
    text-decoration: none;
}
.logo{
    font-family: 'Sacramento', cursive;
}
.logo h1{
    color: #431c5d;
    font-size: 35px;
    font-weight: bolder;
}
.login{
    display: flex; align-items: center;
    justify-content: space-evenly;
    width: 300px;
}
.button{
    width: 120px;
    height: 40px;
    cursor: pointer;
    color: #431c5d;
    font-weight: bolder;
    border: 2px solid transparent;
    border-radius: 100px;
    transition: 0.2s linear;
    font-size: 15px;
}
.but1{
    background-color: white;
    border: 2px solid #431c5d;
}
.but2{
    background-color: #0ab727;
    color: white;
}
.but1:hover{
    background-color: rgba(0,0,0,0.01);
}
.but2:hover{
    background-color: #7cf991;
    color: black;
}
.main{
    width: 100%;
    height: 800px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(320deg, #e05915 50%, #e6e9f0 50%);
    box-shadow: 0 0 10px 10px rgba(0,0,0,0.1);
}
.mainContent{
    width: 1200px;
    height: 650px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    background-image: linear-gradient(0, rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url("https://images.pexels.com/photos/2253839/pexels-photo-2253839.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
    box-shadow: 0 0 10px 5px rgba(0,0,0,0.1);
    animation: changeBackground 20s infinite;
    animation-timing-function: linear;
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100% 100%;
    background-attachment: fixed;
}
@keyframes changeBackground {
    0%{background-image: linear-gradient(0, rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url("https://www.shutterstock.com/image-photo/many-open-books-260nw-381527992.jpg");}
    20%{background-image: linear-gradient(0, rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url("https://img.freepik.com/free-vector/library-with-books-shelves-laptop-table_107791-1758.jpg");}
    40%{background-image: linear-gradient(0, rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url("https://media.getmyuni.com/assets/images/articles/1ss10hp39y642c10i.jpg");}
    60%{background-image: linear-gradient(0, rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url("https://cdn.pixabay.com/photo/2016/02/16/21/07/books-1204029_640.jpg");}
    80%{background-image: linear-gradient(0, rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url("https://repository-images.githubusercontent.com/463341664/fbad3e61-f2da-4abe-ad7b-f24cdc33bc8d");}
    100%{background-image: linear-gradient(0, rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url("https://www.theinsaneapp.com/wp-content/uploads/2021/01/Free-Programming-Books-PDF-For-Beginners-Intermediate-and-Advanced-Developers.png");}
}
.btn{
    width: 150px;
    height: 50px;
    border: 2px solid transparent;
    background-color: white;
    font-size: 20px;
    font-weight: bolder;
    cursor: pointer;
    margin-left: 10px;
    color: #431c5d;
    box-shadow: 0 0 2px 2px rgba(0,0,0,0.1);
    z-index: 900;
    transition: 0.2s linear;
}
.btn2{
    background-color: #e05915;
    color: white;
}
.btn1:hover{
    background-color: black;
    color: white;
}
.btn2:hover{
    background-color: black;
}
.deals{
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 500px;
    justify-content: space-evenly;
    background: linear-gradient(28deg, #431c5d 50%, white 50%);
    box-shadow: 0 0 5px 5px rgba(0,0,0,0.1);
}
.itemDetails{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-evenly;
    text-align: center;
    width: 100%;
}
.product{
    width: 300px; height: 340px;
    background-color: white;
    cursor: pointer;
    transition: 0.2s linear;
    box-shadow: 0 0 5px 5px rgba(0,0,0,0.1);
    margin: 10px 0 10px 0;
}
.product:hover{
    transform: scale(1.05) translateY(-10px);
}
.details h2{
    font-size: 15px;
    color: #431c5d;
}
.image img{
    width: 300px; height: 300px;
}
.discount h1{
    font-size: 40px;
}
.footer{
    width: 100%;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #e6e9f0;
}
.footer1 p{
    font-size: 15px;
    font-weight: bolder;
}
.footer2{
    display: flex;
    width: 200px;
    justify-content: space-evenly;
    cursor: pointer;
}
.footer2 img{
    width: 30px; height: 30px;
}
.footer2 img:hover{
    transform: scale(1.1);
}
@media only screen and (max-width: 900px) {
    .nav{
        flex-direction: column;
    }
    .navList{
        width: 100vw;
    }
    .login{
        display: none;
    }
}
    </style>
</head>
<body>
    

<div class="nav">
        <div class="logo">
            <h1>BookQuest</h1>
        </div>
        <div class="lists">
            <div class="navList" id=""list>
            
                <ul >

                    <li ><a>HOME</a></li>
                    <li><a href="#">SERVICES</a></li>&nbsp;&nbsp;
                    <li><a href="#">ABOUT US</a></li>&nbsp;&nbsp;
                    <li><a href="#">CONTACT US</a></li>
                    
                </ul>
                
            </div>
        </div>
        <div class="login">
            <button class="button but1"><a href="login.php" style="color: black;">Login</a></button>
            <button class="button but2"><a href="signup.php" style="color: black;">SignUp</a></button>
        </div>
    </div>
    <section id="home">
    <div class="main">
        <div class="mainContent">
            <!-- <div class="left">
                <button class="btn1 btn">+ Explore More</button>
                <button class="btn2 btn">Shop Now</button>
            </div> -->
        </div>
    </div>
</secction>
    
    <div class="deals">
        <div class="discount">

            <h1>Available With Us!!!</h1>
        </div>
        <div class="itemDetails">
            <div class="product">
                <div class="image">
                    <img src="https://prodimage.images-bn.com/pimages/9781421598505_p0_v1_s1200x630.jpg">
                </div>
                <div class="details">
                    <h2>Upto 50% discount on Watches</h2>
                </div>
            </div>
            <div class="product">
                <div class="image">
                    <img src="https://animeuknews.net/app/uploads/2020/05/Black-Clover-cover.jpg">
                </div>
                <div class="details">
                    <h2>Book Now</h2>
                </div>
            </div> 
           
            <div class="product">
                <div class="image">
                    <img src="https://images.booksense.com/images/166/675/9798422675166.jpg">
                </div>
                <div class="details">
                    <h2>40% discount on Fashion products</h2>
                </div>
            </div>
            <div class="product">
                <div class="image">
                    <img src="https://m.media-amazon.com/images/M/MV5BYTIxNjk3YjItYmYzMC00ZTdmLTk0NGUtZmNlZTA0NWFkZDMwXkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_FMjpg_UX1000_.jpg">
                </div>
                <div class="details">
                    <h2>Enjoy heavy discount on electronic items</h2>
                </div>
            </div>
        </div>
    </div> 
<br> <br> <br> <br>



    <div class="deals">
        <div class="discount">
        <section id="services">
            <h1 class="text-center">Our Services</h1>
            <div class="row">
              <div class="col-3">
              <div class="card">
  <img src="bookcarying.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><b>Borrow Book</b></h5>
    <p class="card-text">Apart from reading inside the library, we also provide facility to borrow and returns the book in time.</p>
   
  </div>
</div>
            
              </div>
              <div class="col-3">
              <div class="card">
  <img src="booksearch.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><b>Search For Book</b></h5>
    <p class="card-text">You can search your favourite book.</p>

  </div>
</div>
            
              </div>
              

              <div class="col-3">
              <div class="card">
  <img src="back123.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><b>Categorized Book Collection</b></h5>
    <p class="card-text">We have excellent collection of books categorized under children, fiction ,IT, cookbooks and many others field.</p>
    
  </div>
</div>
            
              </div>

              <div class="col-3">
              <div class="card">
  <img src="https://www.theasianschool.net/blog/wp-content/uploads/2023/01/Importance-of-Library-in-School-Education.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><b>Silent Reading</b></h5>
    <p class="card-text">One needs silence to read books or to study, our library has special arrangements for silence zone.</p>
    
  </div>
</div>
            
              </div>
            </div>
        </div>
            </section>
        </div>
    </div>

  
    <div class="deals ">
        <div class="discount">
        <section id="about">
            <div class="row">
              <div class="col-6">
              <div class="card">

  <div class="card-body">
  <h1 class="text-center">About Us</h1>
    <p class="card-text">Learning is the life time journey.To make this journey enjoyable, our BookQuest library system, which provides list of books that you will find informative and mind changing all at once.</p>
    <p><b>Key Features</b></p>
            <ul>
                <li>Easy management of books, including adding, updating, and deleting book records.</li>
                <li>comprehensive borrower management, allowing you to maintain borrower details and track their borrowing history.</li>
                <li>Efficient transaction handling, enabling you to record book checkouts, returns, and overdue fines.</li>
                <li>Search functionality for quick access to book and member information.</li>
                <li>User-friendly interface with intuitive navigation for seamless system interaction.</li>
            </ul>
    
  </div>
</div>
            
              </div>
              <div class="col-6">
              <div class="card">
  <img src="librarybook.jpg" class="card-img-top" alt="..." height="20%">
  <div class="card-body">
</div>
</div>
              </div>
              </div>
            </div>
            </section>
        </div>
    </div>

<section id="contact">
    <div class="container">
        <h1 class= "text-center">Contact Us</h1>
        <p>Contact Information: 123 Library Street, City, Country</p>
            <p>Email: library@example.com | Phone: +1234567890</p>
</div>
</section>


    <div class="footer">
        <div class="footer1">
            <p>Get in touch with us</p>
        </div>
        <div class="footer2">
            <div class="media">
                <img src="https://storage.googleapis.com/koloicons/png/line/48-origin-size/48/39%20Logos/Facebook.png">
            </div>
            <div class="media">
                <img src="https://storage.googleapis.com/koloicons/png/line/60-origin-size/48/39%20Logos/Instagram.png">
            </div>
            <div class="media">
                <img src="https://storage.googleapis.com/koloicons/png/line/48-origin-size/48/98%20Social%20media/Twitter.png">
            </div>
            <div class="media">
                <img src="https://storage.googleapis.com/koloicons/png/line/48-origin-size/48/98%20Social%20media/YouTube.png">
            </div>
        </div>
    </div>

    </body>
    <script>
    // Smooth scroll function
    function smoothScroll(target, duration) {
        var targetElement = document.querySelector(target);
        var targetPosition = targetElement.offsetTop;
        var startPosition = window.pageYOffset;
        var distance = targetPosition - startPosition;
        var startTime = null;

        function animation(currentTime) {
            if (startTime === null) startTime = currentTime;
            var timeElapsed = currentTime - startTime;
            var scrollY = ease(timeElapsed, startPosition, distance, duration);
            window.scrollTo(0, scrollY);
            if (timeElapsed < duration) requestAnimationFrame(animation);
        }

        function ease(t, b, c, d) {
            t /= d / 2;
            if (t < 1) return c / 2 * t * t + b;
            t--;
            return -c / 2 * (t * (t - 2) - 1) + b;
        }

        requestAnimationFrame(animation);
    }

    // Smooth scroll event listeners
    var homeLink = document.querySelector('.navList ul li:nth-child(1) a');
    var servicesLink = document.querySelector('.navList ul li:nth-child(2) a');
    var contactLink = document.querySelector('.navList ul li:nth-child(3) a');
    var aboutLink = document.querySelector('.navList ul li:nth-child(4) a');

    homeLink.addEventListener('click', function(event) {
        event.preventDefault();
        smoothScroll('#home', 1000);
    });

    servicesLink.addEventListener('click', function(event) {
        event.preventDefault();
        smoothScroll('#services', 1000);
    });

    contactLink.addEventListener('click', function(event) {
        event.preventDefault();
        smoothScroll('#contact', 1000);
    });

    aboutLink.addEventListener('click', function(event) {
        event.preventDefault();
        smoothScroll('#about', 1000);
    });


        </script>
</html>