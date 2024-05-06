<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database design</title>
    <link rel="stylesheet" href="../css/headerStyle.css">
    <link rel="stylesheet" href="../css/course-description-style.css">

    <style>
        .transition-item{
            margin-bottom: 14vh;
        }
        #content{
            margin-top: 5vh;
        }
        .backlay{
            width: 100%;
            position: absolute;
            bottom: -224vh;
            height: 240vh;
            z-index: -1;
            background: linear-gradient(to right, transparent 50%, #02273b 50%), linear-gradient(to right, #f4cc70, #20948b);
            background-size: 16px 2px, 100% 2px;

        }   
    </style>

</head>
<body background="../images/course-images/database-design-background.jpg">

    <?php include('header.html')?>




    <div class="course-title">
        <h1>Database Design</h1>
        <span class="disc">
            Learn Database Design alongside leading professionals in the field!
        </span>
        <a href="../inscript.php">Start Now!</a>
    </div>

    <div class="transition-item">

        <div class="level">
            <img src="../images/course-images/course-icons/level.png" alt="level" width="32" height="32">
            <span class="level">
                Level:  Intermediate
            </span>
        </div>
        <div class="time-taken">
            <img src="../images/course-images/course-icons/time-needed.png" alt="time" srcset="" width="32" height="32">
            <span class="time-needed">
                Time Needed:  12w
            </span>
        </div>
        <div class="prerquisites">
            <img src="../images/course-images/course-icons/checklist.png" alt="prerequisites" srcset="" width="32" height="32">
            <span class="prerequisites">
                Prior skills: <br>Algorithms & <br>Data Structures
            </span>
        </div>
    </div>

    <div class="backlay">

    </div>
    <div id="content">
    <article id="what-is-course">
        <h2>What is Database Design?</h2>
        <p id="def-paragraph-one">
        Database design is like organizing your collection of trading cards or action figures, but for storing and managing information on a computer. 
        It's all about creating a system where you can easily find and keep track of important stuff, like your favorite cards or toys. 
        Instead of sorting them randomly, you arrange them in a way that makes sense, maybe by type, color, or rarity. 
        Similarly, in database design, you organize data into tables and rows, making it easy to retrieve and update information whenever you need it.
        </p>

        <p id="def-paragraph-two">
        Moreover, database designers are like the architects of digital libraries, designing the layout and structure of how information is stored and accessed. 
        They create the blueprints for storing data efficiently, ensuring that everything is organized neatly and can be found quickly when needed. 
        Just like how a well-organized library makes it easy to find the book you're looking for, 
        good database design helps computers find and retrieve data without any fuss, making everything run smoothly and efficiently.
        </p>
    </article>
    
    <article class="why-learn-it">
        <h2>Why you should learn Web Dev?</h2>

        <p id="learn-paragraph-one">
        Learning database design is like becoming a master librarian of the digital world. With this skill, 
        you can create systems that store and manage information for all sorts of purposes, from tracking inventory in a store to managing customer information for a business. 
        Imagine being the person who designs the system that keeps track of all your favorite online purchases or organizes your school's student records. 
        That's the power of database design! Plus, as more and more businesses rely on digital systems to store and manage their data, the demand for skilled database designers is only growing. 
        It's like being part of a team that helps businesses run smoothly and effectively in the digital age.
        </p>

        <p id="learn-paragraph-two">
        What's even more exciting is that database design lets you be creative while solving real-world problems. 
        You get to decide how to organize and structure information in a way that makes sense for a specific project or application. It's like being an artist, 
        creating a masterpiece of data organization that makes life easier for everyone who uses it. So, if you enjoy organizing things and solving puzzles, 
        learning database design could be the perfect fit for you. It's a valuable skill that opens up a world of opportunities in the ever-expanding digital landscape
        </p>
    </article>

    <div class="skills-to-learn">
        <div>Skills that will be covered in the course.</div>
    <ul>
        <li>Data Modeling</li>
        <li>Normalization</li>
        <li>SQL (Structured Query Language)</li>
        <li>Indexing</li>
        <li>Data Security</li>
        </ul>

    </div>
    </div>
    

    <div id="inscript">
        <a href="../inscript.php">Inscript</a>
    </div>

    
</body>
</html>