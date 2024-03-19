
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        section{
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            top:50px;
        }
        h1 {
            color: #45a049;
            font-family: "Kdam Thmor Pro", sans-serif;
            font-size: 3rem;
            position: absolute;

        }
        .courses {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;

        }
        .course {
            width: 48%;
            margin-bottom: 20px;
            background-color: #ecf0f1;
            border-radius: 5px;
            overflow: hidden;

        }
        .course-info {
            padding: 15px;
            
            
        }
        button{
            background-color: #4caf50;
            color: black;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;

            text-decoration: none;

            margin: auto;
            display:inline-flex;
            position: relative;
            top: 10px;


        }
        .button{
            background-color: #4caf50;
            color: black;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;

            text-decoration: none;

            margin: auto;
            display:inline-flex;
            position: relative;
            top: 10px;
        }
        .button:hover{
            background-color: #45a049;
            color: #e2e8f0;
        }
        button:hover{
            background-color: #45a049;
            color: #e2e8f0;
        }
        footer{
            background-color: #45a049;

            padding: 1em;
            position: fixed;
            display: inline-flex;
            bottom: 0;
            width: 100%;
        }
        .button1{
            background-color: #1a202c;
            color: #e2e8f0;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;

            text-decoration: none;

            margin: auto;
            display:inline-flex;
            position: relative;
            top: 10px;
        }
        .button1:hover{
            background-color: #e2e8f0;
            color: #718096;
        }
    </style>
</head>
<header>
    <h1> Courses</h1>
</header>
<section>
    <div class="courses">
        <div class="course">
            <div class="course-info">
                <h3>Introduction to Web Development</h3>
                <p>Learn the basics of HTML, CSS, and JavaScript.</p>
                <img src="https://miro.medium.com/v2/resize:fit:1200/1*V-Jp13LvtVc2IiY2fp4qYw.jpeg" height= 100px width=100%  alt="">
                <div class="date-time-stamp">
<ul>
<li><i class="fa fa-calendar-o" aria-hidden="true"></i>
19 Mar - 20 Jun 2024 </li>
<li><i class="fa fa-clock-o" aria-hidden="true"></i>Total Hours : 108</li>
</ul>
</div>
<div class="price">TK. 25,000</div>
<a href="{{route('login')}}"class="button" >Enroll</a></button>


        </div>
    </div>
        <div class="course">
            <div class="course-info">
                <h3>Data Science Fundamentals</h3>
                <p>Explore the world of data and analytics.</p>
               <img src= "https://www.compasslexecon.com/wp-content/uploads/2022/12/Data-Science-Image.jpg"  height= 100px width=100%>
                <div class="date-time-stamp">
<ul>
<li><i class="fa fa-calendar-o" aria-hidden="true"></i>
20 Mar - 5 May 2024 </li>
<li><i class="fa fa-clock-o" aria-hidden="true"></i>Total Hours : 30</li>
</ul>
</div>
<div class="price">TK. 30,000</div>
                
                <a href="{{route('login')}}"class="button" >Enroll</a></button>
            </div>
        </div>
        <div class="course">
            <div class="course-info">
                <h3>Python</h3>
                <p>Learn the basics of Python Language</p>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEM2m4kS0Hr1YkJftNHoOtw2_qKw5vmeESQw&usqp=CAU"height= 100px width=100%>
                <div class="date-time-stamp">
<ul>
<li><i class="fa fa-calendar-o" aria-hidden="true"></i>
5 May - 4 June 2024 </li>
<li><i class="fa fa-clock-o" aria-hidden="true"></i>Total Hours : 56</li>
</ul>
</div>
</div>
<div class="price-block">
<div class="price">TK. 10,000</div>
<a href="{{route('login')}}"class="button" >Enroll</a></button>
            </div>
        </div>
        <div class="course">
        <div class="course-info">
            <h3> Machine Learning </h3>
            <p>Learn Machine Learning with Python</p>
            <img src="https://emeritus.org/in/wp-content/uploads/sites/3/2023/03/types-of-machine-learning.jpg.optimal.jpg"height= 100px width=100% alt="">
            <ul>
<li><i class="fa fa-calendar-o" aria-hidden="true"></i>
5 May - 4 Jul 2024 </li>
<li><i class="fa fa-clock-o" aria-hidden="true"></i>Total Hours : 66</li>
</ul>
<div class="price">TK. 15,000</div>

<a href="{{route('login')}}"class="button" >Enroll</a></button>
</div>
</div>

        </div>
    </div>

    </div>
</section>

<footer>
    <a href="{{route('e_learning_home')}}" class="button1">Back</a>
</footer>

