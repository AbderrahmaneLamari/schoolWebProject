<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Development</title>
    <link rel="stylesheet" href="../css/headerStyle.css">
    <link rel="stylesheet" href="../css/course-description-style.css">

    <style>
        body{
            height: 350vh;
        }
        .transition-item{
            margin-bottom: 14vh;
        }
        #content{
            margin-top: 5vh;
        }
        .backlay{
            width: 100%;
            position: absolute;
            bottom: -255vh;
            height: 260vh;
            z-index: -1;
            background: linear-gradient(to right, transparent 50%, #686e76 50%), linear-gradient(to right, #f4cc70, #20948b);
            background-size: 16px 2px, 100% 2px;

        }   
    </style>
</head>
<body background="../images/course-images/telecommunication-background.jpg">

    <?php include('header.php')?>




    <div class="course-title">
        <h1>Telecommunications</h1>
        <span class="disc">
            Learn Telecommunications with the best teachers in the field!
        </span>
        <a href="../inscript.php">Start Now!</a>
    </div>

    <div class="transition-item">

        <div class="level">
            <img src="../images/course-images/course-icons/level.png" alt="level" width="32" height="32">
            <span class="level">
                Level:  Beginner
            </span>
        </div>
        <div class="time-taken">
            <img src="../images/course-images/course-icons/time-needed.png" alt="time" srcset="" width="32" height="32">
            <span class="time-needed">
                Time Needed:  4wk
            </span>
        </div>
        <div class="prerquisites">
            <img src="../images/course-images/course-icons/checklist.png" alt="prerequisites" srcset="" width="32" height="32">
            <span class="prerequisites">
                Prior skills:  None
            </span>
        </div>
    </div>

    <div class="backlay">

    </div>
    <div id="content">
    <article id="what-is-course">
        <h2>What is Telecommunications?</h2>
        <p id="def-paragraph-one">
        Telecommunications is the science and technology of transmitting information over long distances through various means such as wires, radio waves, or optical fibers. 
        It encompasses a wide range of communication methods, including telephone networks, internet connections, and satellite systems.
        At its core, telecommunications enables people to communicate and exchange data in real-time, regardless of geographical distances. 
        It involves the design, implementation, and maintenance of communication infrastructure, 
        ensuring reliable and efficient transmission of voice, video, and data signals between individuals, businesses, and organizations worldwide.
        </p>

        <p id="def-paragraph-two">
        Moreover, telecommunications plays a vital role in connecting the global community and driving economic growth and innovation. 
        It facilitates instant communication and collaboration, enabling businesses to operate efficiently across borders and individuals to stay connected with friends and family around the world. 
        Telecommunications also serves as the backbone of modern technology, supporting essential services such as banking, healthcare, 
        and transportation. With the advent of 5G technology and the Internet of Things (IoT), 
        telecommunications continues to evolve, offering exciting opportunities for connectivity and innovation in various sectors.
        </p>
    </article>
    
    <article class="why-learn-it">
        <h2>Why you should learn Telecommunications?</h2>

        <p id="learn-paragraph-one">
        Learning telecommunications is like gaining access to the digital nervous system of the modern world. 
        It equips individuals with the knowledge and expertise to design, deploy, and manage communication networks that connect people, devices, and systems globally. 
        Proficiency in telecommunications opens doors to diverse career opportunities in telecommunications companies, internet service providers, government agencies, 
        and multinational corporations. Whether you're interested in network engineering, 
        cybersecurity, or emerging technologies like 5G and IoT, telecommunications expertise is in high demand and offers competitive salaries and job security.
        </p>

        <p id="learn-paragraph-two">
        Furthermore, telecommunications expertise enables individuals to play a crucial role in driving technological innovation and advancing society. 
        By understanding how communication networks function and evolve, telecommunications professionals can contribute to the development of faster, 
        more reliable, and secure communication systems. They can also help bridge the digital divide by expanding access to broadband internet in underserved communities and rural areas. 
        As telecommunications continues to shape the future of connectivity and digital transformation, 
        acquiring skills in this field provides a pathway to making a meaningful impact on the world.
        </p>
    </article>

    <div class="skills-to-learn">
        <div>Skills that will be covered in the course.</div>
    <ul>
        <li>Network Protocols and Standards</li>
        <li>Wireless Communication Technologies</li>
        <li>Fiber Optic Transmission Systems</li>
        <li>Telecommunication Network Design and Optimization</li>
        <li>Cybersecurity in Telecommunications</li>
        </ul>

    </div>
    </div>
    

    <div id="inscript">
        <a href="../inscript.php">Inscript</a>
    </div>


    
</body>
</html>