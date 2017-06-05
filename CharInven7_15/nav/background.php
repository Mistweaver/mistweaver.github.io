<?php
    session_start();
    require_once('../php/User/membership.php');
    $membership = new membership();
    if ($_POST && !empty($_POST['email']) && !empty($_POST['password'])) {
        $badLogin = $membership->validate_user($_POST['email'], $_POST['password']);
        if ($badLogin != false) {
            print '<script>location.href = "'.$badLogin.'"</script>';
        }
    } else if ($_POST && !empty($_POST['send'])) {
        $send = explode(", ", $_POST['send']);
        $badSignup = $membership->create_user($send[0], $send[1], $send[2]);
    }
    // User already logged in and hits "log out" button, any page has a logout
    // else user is an admin and hits "log out"
    if (isset($_GET['status']) && $_GET['status'] == 'loggedout') {
        $_SESSION['status'] = $_GET['status'];
        $membership->log_out();
    } else if (isset($_GET['adStat']) && $_GET['adStat'] == 'loggedout') {
        $_SESSION['adStat'] = $_GET['adStat'];
        $membership->log_out_admin();
    }
    // Handles number of visitors
    if (!($file = fopen("../visits/visits.txt", "r"))) {
        echo "could not open the file";
    } else {
        $visits = (int) fread($file, 20);
        fclose($file);
        $visits++;
        $file = fopen("../visits/visits.txt", "w");
        fwrite($file, $visits);
        fclose($file);
    }
?><!DOCTYPE html>

<html lang="en">
    <head>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <link rel="stylesheet" href="../font-awesome-4.3.0/css/font-awesome.min.css">
        <?php
            if (!(isset($_SESSION['status']) && $_SESSION['status'] == 'authorized'))
                print '
        <script src="https://www.google.com/recaptcha/api.js"></script>';
        ?>
        <title>Background | CI</title>
        <link rel="stylesheet" type="text/css" href="../css/style3.css">
        <link rel="stylesheet" type="text/css" href="../css/style4.css">
        <link rel="stylesheet" type="text/css" href="../css/navs.css">
    </head>
    <body>
        <div id="contentHeight" class="container">
            <nav id="mainNav2" class ="navbar navbar-default nav see-through"  role = "navigation">
                <div class = "navbar-header">
                    <a href="http://www.characterinventory.org"><img id="navLogo"  src="../images/virtueLogo.png"></a>

                    <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#navList" id="datatoggle">
                        <span class = "sr-only">TEST navigation</span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                    </button>
                </div>
                <div class = "collapse navbar-collapse" id ="navList">
                    <ul class = "navbar-nav navbar-right" id="navListContain">
                        <li><a href="background.php">Background</a></li>
                        <li><a href="resources.php">Resources</a></li>
                        <li><a href="about_us.php">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <?php
                            if (isset($_SESSION['status']) && $_SESSION['status'] == 'authorized') {
                                print '
                        <li id="profPage"><a href="../profile">Profile</a></li>
                                <li id="logout"><a href="../?status=loggedout">Log Out</a></li>';
                            } else {
                                print '
                        <li><a href="#" data-toggle="modal" data-target="#myModal">Login/Sign Up</a>
                        </li>';
                            }
                        ?>
                    </ul>
                </div>
            </nav>
            <main class="cd-main-content">
                <div id="backgroundBG1" class="row cd-fixed-bg">
                        <div id="headText">
                                <p>Background</p>
                        </div>
                </div>
                <div class="cd-scrolling-bg row info">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <p><leadtext>The past few decades</leadtext>have witnessed increased interest in virtues and the more fine-grained character traits that are exemplars or instances of virtues. Scientists have made immense strides in identifying, understanding, and measuring virtues and have generated tools to empower individuals to pursue virtues. However, a central limitation of current scientific knowledge about virtues is the challenge of measuring virtues accurately. Specifically, current self-report measures of virtues are prone to self-presentation biases, which occur when people give inaccurate or exaggerated reports of their characteristics due to intentional or unconscious tendencies to construct a positive image. Due to these biases, it is unclear to what degree virtue measures scores reflect desired positive images of individuals rather than actual levels of virtues.<br /><br />Our project addresses this fundamental issue by developing and validating a measure of virtues that minimizes such biases. We draw upon recent innovations in the measurement of psychological characteristics to overcome self-presentation biases that are inherent in existing virtue measures.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div id="backgroundBG2" class="row cd-fixed-bg">
                    <div id="bodyText">
                                <p>What are virtues?</p>
                    </div>
                </div>
                <div class="cd-scrolling-bg row info">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                       <p><leadtext>Virtues are characteristics</leadtext> that have been widely endorsed by philosophies and religions across time and cultures. They have been valued for their proposed ability to be beneficial, specifically for those who have them as well as for the community in which they live. Ultimately, virtues are thought to be beneficial because they both engender and constitute eudaimonia, the full flourishing of the individual or the realization of one&rsquo;s capabilities and potential. In other words, virtues are practically beneficial because they aid in the fulfillment of good outcomes that lead to indications of well-being (e.g., happiness), but are ends unto themselves because they are representations and aspects of well-being. Thus, virtues are grounded in an account of human flourishing, which attempts to address the central question of how to live the best life and the pragmatic concerns that question entails. This orientation emphasizes the excellences of character–the traits or habitual tendencies to think, feel, and act in certain ways–that would be ideal to cultivate, rather than ways one ought to behave.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="cd-scrolling-bg row info3">
                    <div class="col-sm-1"></div>
                    <div id="virtueBox" class="col-sm-10">
                        <div>
                            <p class="text2"> Our research shows that there are eight broad categories of virtues. Each category forms that the virtue takes—character traits—that represent specific aspects or manifestations of the virtue.<br /><br /></p>
                        </div>
                    </div>
                </div>
                <div id="backgroundBG3" class="row cd-fixed-bg">
                    <div id="virtueSelectTitle">
                                <p>Click on each virtue to learn more.</p>
                    </div>
                    <div>
                        <div class="col-sm-1"></div>
                        <div id="virtueTextBox" class="col-sm-10">
                            <span class="virtueSelect" style="cursor: pointer;" onclick="virt(0);">Appreciation</span><span> | </span>
                            <span class="virtueSelect" style="cursor: pointer;" onclick="virt(1);">Intellectual Engagement</span><span> | </span>
                            <span class="virtueSelect" style="cursor: pointer;" onclick="virt(2);">Fortitude</span><span> | </span>
                            <span class="virtueSelect" style="cursor: pointer;" onclick="virt(3);">Interpersonal Consideration</span><span> | </span>
                            <span class="virtueSelect" style="cursor: pointer;" onclick="virt(4);">Sincerity</span><span> | </span>
                            <span class="virtueSelect" style="cursor: pointer;" onclick="virt(5);">Temperance</span><span> | </span>
                            <span class="virtueSelect" style="cursor: pointer;" onclick="virt(6);">Transcendance</span><span> | </span>
                            <span class="virtueSelect" style="cursor: pointer;" onclick="virt(7);">Empathy</span>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-1"></div>
                        <div id="virtue" class="col-sm-10"></div>
                        <div class="col-sm-1"></div>
                    </div>
                </div>
                <div class="preFooter cd-scrolling-bg row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <div id="prefContainer">
                            <p>Find your character strengths.</p>
                            <a class="buttonLink" href="#" data-toggle="modal" data-target="#myModal">
                                <div class="button" id="preFooterBtn">TAKE FREE TEST</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="footer cd-scrolling-bg row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 footerInterior">
                        <a href="mailto:contact@characterinventory.org"><p>contact@characterinventory.org</p></a>
                        <a href="#"><i class="fa fa-facebook fa-3x"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-3x"></i></a>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="footer2 cd-scrolling-bg row">
                    <div class="col-sm 2"></div>
                    <div class="col-sm 8 footer2Interior">
                        <img id ="jtf" src="../images/jtfLogo.jpg" />
                        <p>Character Inventory is maintained by Purdue University and is supported by a generous grant from the John Templeton Foundation.</p>
                    </div>
                    <div class="col-sm 2"></div>
                </div>
            </main>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="container-fluid" style="min-height: 50px;"><?php
                            if (isset($_SESSION['status']) && $_SESSION['status'] == 'authorized') {
                                print '
                            <a href="../surveys/survey1.php" style="padding-top: 10px;"><!--<div class="button" style="color: rgb(0,0,0);">--><p style="color: black; font-size: 24pt;">Likert-type Character Inventory</p><!--</div>--></a>
                        ';
                            } else print '
                            <div id="alert_placeholder"></div>
                            <div class="col-md-6">
                                <form method="POST" action="">
                                    <h3 class="modalHeader">Sign In</h3>
                                    <span id="confirmMember" class="confirmMember"></span>
                                    <div class="form-group">
                                        <label class="sr-only" for="email">Email</label>
                                        <input name="email" type="email" class="form-control" placeholder="Email" />
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="password">Password</label>
                                        <input name="password" type="password" class="form-control" placeholder="Password" />
                                    </div>
                                    <button type="submit" class="modalBtn">SUBMIT</button>
                                </form>
                            </div>
                            <div class="col-md-6 rightSide">
                                <h3 class="modalHeader">Sign Up</h3>
                                <div class="form-group">
                                    <label class="sr-only" for="name">Full Name</label>
                                    <input name="name" type="text" class="form-control" id="fname" placeholder="Full Name" />
                                </div>
                                <span id="alreadyUser" class="alreadyUser"></span>
                                <div class="form-group">
                                    <label class="sr-only" for="email">Email</label>
                                    <input name="email2" type="email" class="form-control" id="address" placeholder="Email" />
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="password">Password</label>
                                    <input name="pwd" type="password" class="form-control" id="pass1" placeholder="Password" />
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="confirmpassword">Confirm Password</label>
                                    <input name="confirmpwd" type="password" class="form-control" id="pass2" placeholder="Confirm Password" onkeyup="checkPass(); return false;" />
                                    <span id="confirmPass" class="confirmPass"></span>
                                </div>
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6LcxtxMTAAAAAGU4T69ZHfDj2m0SVFmFoiHYPcKm"></div>
                                </div>
                                <button onclick="subm()" class="modalBtn">SUBMIT</button>
                            </div>
                        ';?></div><!-- /.container-fluid -->
                    </div><!-- /.modal-body -->
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
        <script src="../js/jquery-2.1.4.min.js"></script>
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/background.js"></script>
<!-- 
        <script type="text/javascript">
            $(document).ready(function() {
                $('.virtueSelect').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');
                });
                $(window).scroll(function() {
                    var scroll = $(window).scrollTop();
                    if (scroll >= 1) {
                        $(".nav").addClass("dark");
                    } else {
                        $(".nav").removeClass("dark");
                    }
                });
            });
            function virt(x) {
                $("#virtue").removeClass("virtuehidden");
                $("#virtue").addClass("virtuedisplayed");
                if (x == 0) {
                    document.getElementById("virtue").innerHTML = "<p><leadtext>Appreciation</leadtext> is the tendency to savor and value life.<br /><br />Aspects of Appreciation<br /><br />The two key aspects of appreciation are gratitude and love.<br /><br />Gratitude is the tendency to notice and appreciate the positive things in life. This aspect of appreciation helps us become aware of what is currently worth being thankful for, but also positively orients us towards seeking out new things in our lives that deserve our acknowledgment, such as benefits received by other people. Thus, gratitude has been proposed to be moral emotion since it signals when we have had our well-being enhanced by others and motivates reciprocation from that position rather than a sense of indebtedness and obligation.<br /><br />Love is the tendency to cultivate and value close relationships. This person-centered character trait denotes an inclination towards valuing people in one’s life and having a sense of being secure in how we’re regarded by our loved ones. Dispositional love has been shown to be associated with valuing all human beings equally and to positively predict moral behavior toward what could be perceived of as out-group members (e.g., the amount of money donated to international non-profits).</p>";
                } else if (x == 1) {
                    document.getElementById("virtue").innerHTML = "<p><leadtext>Intellectual Engagement</leadtext> is the tendency to be proactively engaged with the world – both intellectually and emotionally.<br /><br />Aspects of intellectual engagement<br /><br />The four key aspects of intellectual engagement are curiosity, love of learning, creativity, and appreciation of beauty.<br /><br />Curiosity is marked by a tendency to proactively seek out information. Curious people are cognitively engaged in everyday life. They have a large variety of new interests and are open to new ideas and ways of thinking.<br /><br />Love of learning captures the enjoyment and satisfaction that drives people to eagerly master skill, develop abilities, and acquire knowledge for their own sake. This character trait is very closely aligned with curiosity, but emphasizes the affective experience of learning itself.<br /><br />Creativity is about frequently generating novel solutions to problems and easily coming up with good ideas<br /><br />Appreciation of beauty is about a tendency to take the time to stop, become aware of our surroundings, and finding beauty in the mundane. It also speaks to the tendency to feel inspired or in awe of the beauty that lies beneath everyday life. Like dispositional love, appreciation of beauty has been associated with being morally concerned about out-group members, but also environmental well-being as well.</p>";
                } else if (x == 2) {
                    document.getElementById("virtue").innerHTML = "<p><leadtext>Fortitude</leadtext> is determination marked by the optimism and energy needed to support staying power.<br /><br />Aspects of fortitude<br /><br />The three key aspects of fortitude are hope, persistence, and zest.<br /><br />Hope taps into the future expectations of success. People who tend to be high on hope have positive expectations about their ability and likelihood of attaining important life goals. This is grounded both in past experience of feeling as though one was the primary cause of one’s past successes as well as considerations about the number of ways important goals can be realized.<br /><br />Persistence is the drive to overcome obstacles in the pursuit of our goals and persevere in the face of difficulties. It embodies a commitment to important goals that is supported by a sense of self-determination and the ability keep oneself on task. It is further characterized by a refusal to feel defeated when experiencing failure and perceiving oneself as a “finisher.”<br /><br />Zest is the enthusiasm and excitement that propels people out of bed and to tackle the day. People who have high zest for life feel vigorous and energetic and look forward to each day with anticipation.</p>";
                } else if (x == 3) {
                    document.getElementById("virtue").innerHTML = "<p><leadtext>Interpersonal Consideration</leadtext> is the capacity to skillfully get along well with others. It is fundamentally about the traits that facilitate group coordination and the ultimate achievement of group goals.<br /><br />The five key aspects of interpersonal consideration are leadership, social perceptiveness, perspective, teamwork, and humor.<br /><br />Leadership is the tendency and ability to be able to organize people, untie them under a common goal, and motivate group members towards the realization of that group goal. People high on leadership tend to be nominated by others to manage projects and take on leadership roles.<br /><br />Social perceptiveness is the predisposition towards being able to perceive the motivations of others’ behavior and to infer the goals they are trying to achieve. People high on social perceptiveness are good at “reading people.”<br /><br />Perspective is the tendency and ability to give wise counsel to others. This may take the form of advice to a friend or perhaps feedback to a collaborator. In either, case, people high on perspective have enough life experience to give meaningful and helpful direction to others in need of it.<br /><br />Humor represents the disposition toward bringing joy and laughter to other people’s lives, which is inherently enjoyable, but can also serve to take the edge off of the inevitable awkward moments of life. Humor can facilitate interpersonal interactions by creating the emotional context within which otherwise uncomfortable topics and issues can be broached and addressed without pretense or defensiveness.<br /><br />Teamwork is an inclination towards valuing the achievement of group goals. People high on teamwork are willing to work hard to help the attain team goals, are willing to work more than their fair share, and at times will sacrifice their own personal goals so that the team can succeed.</p>";
                } else if (x == 4) {
                    document.getElementById("virtue").innerHTML = "<p><leadtext>Sincerity</leadtext> is earnest and accurate self-perception and self-presentation,<br /><br />The four key aspects of sincerity are authenticity, trustworthiness, bravery, and humility.<br /><br />Authenticity speaks to representing yourself to others in a fair, accurate, and genuine way. People high on authenticity act with a sense of autonomy and self-acceptance and consequently feel no need to misrepresent themselves to garner favor from others.<br /><br />Trustworthiness means living up to one’s word and making good on promises made even if it means doing so incurs a personal cost. People high on trustworthiness value being reliable and dependable to others.<br /><br />Bravery is distinguished by the tendency to stand by one’s convictions, especially in the face of social disapproval or fear. More than that, bravery entails expressing one’s convictions and thus aids in overcoming the social and emotional pressures that would otherwise influence people to keep their authentic thoughts and feelings to themselves.<br /><br />Humility is the tendency to avoid undue or excessive attention. Getting credit for a job well done is part and parcel of good performance, but humility buffers against tendencies to desire, want, or need recognition, which are usually expressed as undesirable and at times immoral behavior. It is this desire or love of attention and admiration that humility guards against by grounding the conception of the self as ultimately no better or worse than others.</p>";
                } else if (x == 5) {
                    document.getElementById("virtue").innerHTML = "<p><leadtext>Temperance</leadtext> is the ability to control short-term impulses to attain long-term goals.<br /><br />The four key aspects of temperance are carefulness, strategy, self-control, and emotional awareness.<br /><br />Carefulness involves being measured and deliberate in decision-making by the inclination to think through the possible outcomes of a course of action. Considering the full range of outcomes aids in avoiding making impulsive decisions and simultaneously guides selecting the best course of action.<br /><br />Strategy is similar to carefulness in that it entails consideration of outcomes of different courses of action, but adds a temporal dimension. Those high in strategy will tend to think about long- vs. short-term outcomes and favor or more heavily weight the impact of long-term consequences.<br /><br />Self-control is the tendency to suppress and avoid triggering unhealthy impulses. These impulses may be pleasurable activities that, in excess, may derail long-term goal pursuits. People high on self-control have the ability to thwart temptation and overcome over-indulgence.<br /><br />Emotional awareness focuses a person on accurately perceiving and understanding the feelings, physical sensations, and emotions occurring within. This form of self-awareness has been implicated as being necessary as a first step in self-regulation. Controlling unhealthy impulses requires the recognition that these urges are occurring; the process is probably best served by early detection of the presence of these desires and keen awareness of the influence they are having on goal selection and behavior.</p>";
                } else if (x == 6) {
                    document.getElementById("virtue").innerHTML = "<p><leadtext>Transcendence</leadtext> is connection to something larger than the self.<br /><br />The two key aspects of transcendence are spirituality and meaning/purpose.<br /><br />Spirituality is the tendency to sense a relationship with a high power that gives direction and strength to oneself. It is at times manifested behaviorally in engaging in daily practices (e.g., meditation or prayer) that aid in developing this relationship, but is highly associated with and likely primarily based in hot cognition in nature. It is largely evidenced by beliefs about the existence of a higher power, non-physical properties of the self, and realities beyond what can currently be perceived using just our five senses.<br /><br />Meaning/purpose is the sense that one’s life fits into the grand scheme of things . Those high on meaning/purpose believe that there is a reason for their existence that fits into a larger plan, even if such a plan is not immediately or obviously clear. It has been suggested that the search for meaning and purpose in life is what primarily motivates individuals to dedicate themselves to groups, adhere to the shared system of ideals and values, and subjugate their own desires to live in accordance with group-level desires and goals that are expressions of those ideals and values.</p>";
                } else if (x == 7) {
                    document.getElementById("virtue").innerHTML = "<p><leadtext>Empathy</leadtext> is the capacity and tendency to deal with others humanely and compassionately.<br /><br />The five key aspects of empathy are perspective-taking, openness to evidence, fairness, kindness, and forgiveness.<br /><br />Perspective-taking is the tendency to actively try to understand people who hold beliefs or opinions different from one’s own by being open to the rationale behind the beliefs and being able to see both the pros and cons of their position as well as one’s own. What distinguishes this character trait is also the ability to separate judgments about the beliefs from judgments about the person who hold them.<br /><br />Openness to evidence is represented by the ease with which one can change one’s mind given new information. People high on openness to evidence are willing to seriously and impartially consider the basis for positions, are willing to seek out information supporting an opposing position to sincerely understand the rationale, and do not feel emotionally reactive or threatened when confronted with information that contradicts their belief systems.<br /><br />Fairness is the orientation towards treating people equally. This entails allowing giving people an equal chance in life, an equal say in matters, and preventing biases from affecting how individual people are treated.<br /><br />Kindness is the tendency to take a compassionate stance toward others. Those who are high on kindness find joy in helping those in need, are touched by and motivated to alleviate the suffering of others, and give generously without expectations of return.<br /><br />Forgiveness is the disposition to let go of past transgression committed by others. It involves no longer directly or indirectly punishing those who have wronged us. People high on forgiveness are willing to give past transgressor the opportunity to do right where they have done wrong in the past. Forgiveness is also self-regarding in that those high on forgiveness are willing to let go of the past as a necessary step in gaining closure and moving forward with one’s life.</p>";
                }
            }
        </script>
 -->
        <?php
                if (!(isset($_SESSION['status']) && $_SESSION['status'] == 'authorized'))
                	print '<script type="text/javascript" src="../js/register.js"></script>';
                if (!(isset($_SESSION['status']) && $_SESSION['status'] == 'authorized')) {
                    if (isset($badLogin) && $badLogin == false) {
                        print '
        <script type="text/javascript">
            document.getElementById(\'confirmMember\').style.color = "#ff0000";
            document.getElementById(\'confirmMember\').innerHTML = "Invalid email and/or password.";
            $(window).load(function(){
                $(\'#myModal\').modal(\'show\');
            });
        </script>';
                    } else if (isset($badSignup) && $badSignup == false) {
                        print '
        <script type="text/javascript">
            document.getElementById(\'alreadyUser\').style.color = "#ff0000";
            document.getElementById(\'alreadyUser\').innerHTML = "This username is already taken.";
            $(window).load(function(){
                $(\'#myModal\').modal(\'show\');
            });
        </script>
    ';
                    }
                    unset($badLogin, $badSignup);
                }
            ?>
    </body>
</html>
