<?php
    class s1_pageContent {
        function opening() {
            return '</nav>
                <div class="col-sm-2"></div>
                <div id="beginHeader" class="col-sm-8">
                    <p class="text1">Thank you for your interest in assessing your character strengths.</p>
                    <p class="text3"> The survey will take about 45 minutes to complete. Please fill in responses to all the questions as it will allow more accurate scoring of your character strengths.</p>
                    <div class="theButtons" style="padding-bottom: 25px;">
                        <div class="buttonDark" onclick="begin();">Begin</div>
                    </div>
                </div>
                <div class="col-sm-2"></div>';
        }
        function headerContainer($s1, $completeWidth, $incompleteWidth) {
            if ($s1 == 1 || $s1 == "") return '
                <div id="progressBar">
                    <div id="completeBar" style="width: 0%;"></div>
                    <div id="incompleteBar" style="width: 100%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please read each statement and select how much it is like or unlike you.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </nav>
            <div class="surveyContainer">
                <div class="alert_placeholder"></div>
                <div class="headerContainer">
                <!-- <div class="headerBG"></div>-->
                    <div class="headerRow">
                        <div class="inline number"><p>#</p></div>
                        <div class="inline statement"><p>Statement</p></div>
                        <div class="inline optionH"><p>Very much like me</p></div>
                        <div class="inline optionH"><p>Like me</p></div>
                        <div class="inline optionH"><p>Unlike me</p></div>
                        <div class="inline optionH"><p>Very unlike me</p></div>
                    </div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>1</p></div>
                    <div class="inline statement"><p>I am deeply aware that I have been blessed by the generosity of others.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>2</p></div>
                    <div class="inline statement"><p>I am constantly aware of things to be grateful for.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>3</p></div>
                    <div class="inline statement"><p>I often notice new things to be thankful for.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>4</p></div>
                    <div class="inline statement"><p>I appreciate the things I have.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>5</p></div>
                    <div class="inline statement"><p>I feel grateful for the positive things in my life.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>6</p></div>
                    <div class="inline statement"><p>I am aware that I have many things to be thankful for.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>7</p></div>
                    <div class="inline statement"><p>It is easy for me to see things to be grateful for.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>8</p></div>
                    <div class="inline statement"><p>I care deeply about certain people in my life.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>9</p></div>
                    <div class="inline statement"><p>I cherish my close relationships.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>10</p></div>
                    <div class="inline statement"><p>I know there are people who care deeply for me despite my imperfections.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>11</p></div>
                    <div class="inline statement"><p>I feel closely connected to certain people in my life.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>12</p></div>
                    <div class="inline statement"><p>I frequently appreciate the natural beauty of the earth.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>13</p></div>
                    <div class="inline statement"><p>I feel strong emotions in the presence of beautiful things.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>14</p></div>
                    <div class="inline statement"><p>I never pass up an opportunity to stop and savor the beauty in nature.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>15</p></div>
                    <div class="inline statement"><p>I am frequently awed by the beauty of the world around me.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>16</p></div>
                    <div class="inline statement"><p>I don&rsquo;t overlook beautiful things in my surroundings.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>17</p></div>
                    <div class="inline statement"><p>I am inspired by beautiful art and music.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>18</p></div>
                    <div class="inline statement"><p>I appreciate beautiful things.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>19</p></div>
                    <div class="inline statement"><p>I can see beauty in nature.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>20</p></div>
                    <div class="inline statement"><p>I am moved by seeing something beautiful.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
            </div>
            <div class="theButtons" style="padding-bottom: 25px;">
                <div class="buttonDark" onclick="back();">Back</div>
                <div class="buttonDark" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s1 == 2) return '
                <div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please read each statement and select how much it is like or unlike you.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </nav>
            <div class="surveyContainer">
                <div class="alert_placeholder"></div>
                <div class="headerContainer">
                <!-- <div class="headerBG"></div>-->
                    <div class="headerRow">
                        <div class="inline number"><p>#</p></div>
                        <div class="inline statement"><p>Statement</p></div>
                        <div class="inline optionH"><p>Very much like me</p></div>
                        <div class="inline optionH"><p>Like me</p></div>
                        <div class="inline optionH"><p>Unlike me</p></div>
                        <div class="inline optionH"><p>Very unlike me</p></div>
                    </div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>21</p></div>
                    <div class="inline statement"><p>I often notice the beautiful things around me.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>22</p></div>
                    <div class="inline statement"><p>I constantly generate creative ideas.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>23</p></div>
                    <div class="inline statement"><p>I am known for my creativity.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>24</p></div>
                    <div class="inline statement"><p>I am a creative thinker.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>25</p></div>
                    <div class="inline statement"><p>I am able to generate creative solutions to problems.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>26</p></div>
                    <div class="inline statement"><p>I often explore new topics of interest.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>27</p></div>
                    <div class="inline statement"><p>I am constantly discovering new interests.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>28</p></div>
                    <div class="inline statement"><p>I am curious about many subjects.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>29</p></div>
                    <div class="inline statement"><p>I am interested in many subjects.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>30</p></div>
                    <div class="inline statement"><p>I am intrigued by new ideas.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>31</p></div>
                    <div class="inline statement"><p>I am eager to master new skills.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>32</p></div>
                    <div class="inline statement"><p>I always enjoy learning new things.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>33</p></div>
                    <div class="inline statement"><p>I look for opportunities to improve my talents and skills.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>34</p></div>
                    <div class="inline statement"><p>I am always trying to expand my knowledge.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>35</p></div>
                    <div class="inline statement"><p>I look for ways to increase my knowledge.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>36</p></div>
                    <div class="inline statement"><p>I get satisfaction from learning something new.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>37</p></div>
                    <div class="inline statement"><p>I am motivated to learn new things on my own.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>38</p></div>
                    <div class="inline statement"><p>I make an effort to learn and develop new skills.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>39</p></div>
                    <div class="inline statement"><p>I try to learn something new every day.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>40</p></div>
                    <div class="inline statement"><p>I enjoy the process of learning.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
            </div>
            <div class="theButtons" style="padding-bottom: 25px;">
                <div class="buttonDark" onclick="back();">Back</div>
                <div class="buttonDark" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s1 == 3) return '    <div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please read each statement and select how much it is like or unlike you.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </nav>
            <div class="surveyContainer">
                <div class="alert_placeholder"></div>
                <div class="headerContainer">
                <!-- <div class="headerBG"></div>-->
                    <div class="headerRow">
                        <div class="inline number"><p>#</p></div>
                        <div class="inline statement"><p>Statement</p></div>
                        <div class="inline optionH"><p>Very much like me</p></div>
                        <div class="inline optionH"><p>Like me</p></div>
                        <div class="inline optionH"><p>Unlike me</p></div>
                        <div class="inline optionH"><p>Very unlike me</p></div>
                    </div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>41</p></div>
                    <div class="inline statement"><p>I think the future may hold positive outcomes for me.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>42</p></div>
                    <div class="inline statement"><p>I am always optimistic about my future.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>43</p></div>
                    <div class="inline statement"><p>I remain hopeful about the future despite challenges.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>44</p></div>
                    <div class="inline statement"><p>I have positive expectations about my future.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>45</p></div>
                    <div class="inline statement"><p>I tend to view my future with a sense of optimism.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>46</p></div>
                    <div class="inline statement"><p>I am typically confident that good things are coming.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>47</p></div>
                    <div class="inline statement"><p>I am hopeful about my future.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>48</p></div>
                    <div class="inline statement"><p>I can conquer many obstacles on the way to achieving my goals.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>49</p></div>
                    <div class="inline statement"><p>I tirelessly pursue my goals.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>50</p></div>
                    <div class="inline statement"><p>I don&rsquo;t let obstacles prevent me from reaching my goals.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>51</p></div>
                    <div class="inline statement"><p>I am not a quitter.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>52</p></div>
                    <div class="inline statement"><p>I don&rsquo;t leave important projects unfinished.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>53</p></div>
                    <div class="inline statement"><p>I don&rsquo;t get sidetracked by unanticipated difficulties on the way to reaching a goal.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>54</p></div>
                    <div class="inline statement"><p>I persist through difficult problems rather than giving up and feeling discouraged.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>55</p></div>
                    <div class="inline statement"><p>I usually finish what I have started.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>56</p></div>
                    <div class="inline statement"><p>I overcome obstacles that interfere with getting things done.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>57</p></div>
                    <div class="inline statement"><p>I keep pushing to reach my goals even when things get difficult.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>58</p></div>
                    <div class="inline statement"><p>I don&rsquo;t readily give up on difficult tasks.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>59</p></div>
                    <div class="inline statement"><p>I can force myself to stick with difficult tasks.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>60</p></div>
                    <div class="inline statement"><p>I have the self-discipline needed to accomplish difficult goals.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
            </div>
            <div class="theButtons" style="padding-bottom: 25px;">
                <div class="buttonDark" onclick="back();">Back</div>
                <div class="buttonDark" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s1 == 4) return '    <div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please read each statement and select how much it is like or unlike you.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </nav>
            <div class="surveyContainer">
                <div class="alert_placeholder"></div>
                <div class="headerContainer">
                <!-- <div class="headerBG"></div>-->
                    <div class="headerRow">
                        <div class="inline number"><p>#</p></div>
                        <div class="inline statement"><p>Statement</p></div>
                        <div class="inline optionH"><p>Very much like me</p></div>
                        <div class="inline optionH"><p>Like me</p></div>
                        <div class="inline optionH"><p>Unlike me</p></div>
                        <div class="inline optionH"><p>Very unlike me</p></div>
                    </div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>61</p></div>
                    <div class="inline statement"><p>I don&rsquo;t have trouble sustaining motivation towards my goals.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>62</p></div>
                    <div class="inline statement"><p>I am a highly determined person.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>63</p></div>
                    <div class="inline statement"><p>I approach my goals with great commitment.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>64</p></div>
                    <div class="inline statement"><p>I will not give up once I resolve to do something.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>65</p></div>
                    <div class="inline statement"><p>I don&rsquo;t give up easily when tasks get difficult.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>66</p></div>
                    <div class="inline statement"><p>I am willing to do more than my fair share of work to ensure that my team succeeds.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>67</p></div>
                    <div class="inline statement"><p>I often go beyond what I am responsible for to ensure the success of my team or group.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>68</p></div>
                    <div class="inline statement"><p>I always feel a strong sense of commitment to team goals.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>69</p></div>
                    <div class="inline statement"><p>I care deeply about the success of the groups and communities I am a part of.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>70</p></div>
                    <div class="inline statement"><p>I am willing to sacrifice my time to help achieve team goals.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>71</p></div>
                    <div class="inline statement"><p>I am considered a good "team player".</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>72</p></div>
                    <div class="inline statement"><p>I give extra effort when necessary to help my groups or teams succeed.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>73</p></div>
                    <div class="inline statement"><p>I typically look forward to each new day.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>74</p></div>
                    <div class="inline statement"><p>I feel excited to start each day.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>75</p></div>
                    <div class="inline statement"><p>I am brimming with excitement about life.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>76</p></div>
                    <div class="inline statement"><p>I always look forward to what the day brings.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>77</p></div>
                    <div class="inline statement"><p>I have great enthusiasm for life.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>78</p></div>
                    <div class="inline statement"><p>I eagerly anticipate each day&rsquo;s activities.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>79</p></div>
                    <div class="inline statement"><p>I try to live each day to the fullest.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>80</p></div>
                    <div class="inline statement"><p>I typically feel ready to take on what life has in store for me.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
            </div>
            <div class="theButtons" style="padding-bottom: 25px;">
                <div class="buttonDark" onclick="back();">Back</div>
                <div class="buttonDark" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s1 == 5) return '    <div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please read each statement and select how much it is like or unlike you.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </nav>
            <div class="surveyContainer">
                <div class="alert_placeholder"></div>
                <div class="headerContainer">
                <!-- <div class="headerBG"></div>-->
                    <div class="headerRow">
                        <div class="inline number"><p>#</p></div>
                        <div class="inline statement"><p>Statement</p></div>
                        <div class="inline optionH"><p>Very much like me</p></div>
                        <div class="inline optionH"><p>Like me</p></div>
                        <div class="inline optionH"><p>Unlike me</p></div>
                        <div class="inline optionH"><p>Very unlike me</p></div>
                    </div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>81</p></div>
                    <div class="inline statement"><p>I hardly ever feel halfhearted about my activities.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>82</p></div>
                    <div class="inline statement"><p>I typically don&rsquo;t dread starting my daily activities.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>83</p></div>
                    <div class="inline statement"><p>I generally approach my daily activities with energy.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>84</p></div>
                    <div class="inline statement"><p>I have enthusiasm for my daily activities.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>85</p></div>
                    <div class="inline statement"><p>I am good at making other people laugh.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>86</p></div>
                    <div class="inline statement"><p>I am good at using humor to lighten serious situations.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>87</p></div>
                    <div class="inline statement"><p>I am frequently told that I am hilarious.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>88</p></div>
                    <div class="inline statement"><p>I frequently cause other people to laugh.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>89</p></div>
                    <div class="inline statement"><p>I can motivate a group to unite towards a common goal.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>90</p></div>
                    <div class="inline statement"><p>I can effectively direct the actions of a group.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>91</p></div>
                    <div class="inline statement"><p>I can get a group to function effectively.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>92</p></div>
                    <div class="inline statement"><p>I am often picked to represent my team or group in meetings. </p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>93</p></div>
                    <div class="inline statement"><p>I am able to get people to work together more effectively.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>94</p></div>
                    <div class="inline statement"><p>I can get team members to put forth their best efforts when working on a project.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>95</p></div>
                    <div class="inline statement"><p>I am good at helping people function well as a group.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>96</p></div>
                    <div class="inline statement"><p>I feel confident in my ability to give good advice.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>97</p></div>
                    <div class="inline statement"><p>I hardly ever give advice that proves to be unwise.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>98</p></div>
                    <div class="inline statement"><p>I consider myself to be a good source of wisdom.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>99</p></div>
                    <div class="inline statement"><p>I am good at directing others toward wise actions.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>100</p></div>
                    <div class="inline statement"><p>I have been a helpful resource to many people in need of wise advice.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
            </div>
            <div class="theButtons" style="padding-bottom: 25px;">
                <div class="buttonDark" onclick="back();">Back</div>
                <div class="buttonDark" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s1 == 6) return '    <div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please read each statement and select how much it is like or unlike you.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </nav>
            <div class="surveyContainer">
                <div class="alert_placeholder"></div>
                <div class="headerContainer">
                <!-- <div class="headerBG"></div>-->
                    <div class="headerRow">
                        <div class="inline number"><p>#</p></div>
                        <div class="inline statement"><p>Statement</p></div>
                        <div class="inline optionH"><p>Very much like me</p></div>
                        <div class="inline optionH"><p>Like me</p></div>
                        <div class="inline optionH"><p>Unlike me</p></div>
                        <div class="inline optionH"><p>Very unlike me</p></div>
                    </div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>101</p></div>
                    <div class="inline statement"><p>I feel my life experiences have taught me a great deal about living wisely.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>102</p></div>
                    <div class="inline statement"><p>I give good advice.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>103</p></div>
                    <div class="inline statement"><p>I have a knack for giving helpful advice.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>104</p></div>
                    <div class="inline statement"><p>I can navigate any social situation with ease.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>105</p></div>
                    <div class="inline statement"><p>I can figure out how to act in a new social setting without being told.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>106</p></div>
                    <div class="inline statement"><p>I understand what is expected of me in most social situations.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>107</p></div>
                    <div class="inline statement"><p>I can easily fit into almost any social situation.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>108</p></div>
                    <div class="inline statement"><p>I have a knack for knowing what people are really after.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>109</p></div>
                    <div class="inline statement"><p>I have good insights about the reasons behind others&rsquo; actions.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>110</p></div>
                    <div class="inline statement"><p>I am quick to recognize other peoples&rsquo; motives.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>111</p></div>
                    <div class="inline statement"><p>I have a good sense for what others are feeling.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>112</p></div>
                    <div class="inline statement"><p>I understand the motives of people around me.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>113</p></div>
                    <div class="inline statement"><p>I am generally honest with others.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>114</p></div>
                    <div class="inline statement"><p>I don&rsquo;t deliberately misrepresent myself to others.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>115</p></div>
                    <div class="inline statement"><p>I refuse to misrepresent myself to others.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>116</p></div>
                    <div class="inline statement"><p>I present myself in a genuine way.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>117</p></div>
                    <div class="inline statement"><p>I don&rsquo;t pretend to be someone I&rsquo;m not.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>118</p></div>
                    <div class="inline statement"><p>I don&rsquo;t typically feel like I am faking who I am.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>119</p></div>
                    <div class="inline statement"><p>I refuse to let fear stop me from doing what is right.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>120</p></div>
                    <div class="inline statement"><p>I consistently stand up for what I believe in even when I am afraid.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
            </div>
            <div class="theButtons" style="padding-bottom: 25px;">
                <div class="buttonDark" onclick="back();">Back</div>
                <div class="buttonDark" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s1 == 7) return '    <div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please read each statement and select how much it is like or unlike you.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </nav>
            <div class="surveyContainer">
                <div class="alert_placeholder"></div>
                <div class="headerContainer">
                <!-- <div class="headerBG"></div>-->
                    <div class="headerRow">
                        <div class="inline number"><p>#</p></div>
                        <div class="inline statement"><p>Statement</p></div>
                        <div class="inline optionH"><p>Very much like me</p></div>
                        <div class="inline optionH"><p>Like me</p></div>
                        <div class="inline optionH"><p>Unlike me</p></div>
                        <div class="inline optionH"><p>Very unlike me</p></div>
                    </div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>121</p></div>
                    <div class="inline statement"><p>I defend what is right even if I am in the minority.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>122</p></div>
                    <div class="inline statement"><p>I try to stand up for what is right even if there are negative results.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>123</p></div>
                    <div class="inline statement"><p>I do not back down from doing the right thing even when people will disagree with me.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>124</p></div>
                    <div class="inline statement"><p>I don&rsquo;t seek attention for my accomplishments.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>125</p></div>
                    <div class="inline statement"><p>I don&rsquo;t brag about my successes.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>126</p></div>
                    <div class="inline statement"><p>I am very reserved when talking about my achievements.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>127</p></div>
                    <div class="inline statement"><p>I don&rsquo;t brag about myself to get attention.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>128</p></div>
                    <div class="inline statement"><p>I don&rsquo;t seek out compliments from others.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>129</p></div>
                    <div class="inline statement"><p>I am humble about my accomplishments.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>130</p></div>
                    <div class="inline statement"><p>I don&rsquo;t like to show off.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>131</p></div>
                    <div class="inline statement"><p>I try not to talk too much about my successes.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>132</p></div>
                    <div class="inline statement"><p>I try my best to keep my promises.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>133</p></div>
                    <div class="inline statement"><p>I am very dependable.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>134</p></div>
                    <div class="inline statement"><p>I can be relied on to follow through on my commitments.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>135</p></div>
                    <div class="inline statement"><p>I am a reliable friend.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>136</p></div>
                    <div class="inline statement"><p>I am true to my word.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>137</p></div>
                    <div class="inline statement"><p>I keep my promises even if it costs me.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>138</p></div>
                    <div class="inline statement"><p>I always consider potential risks before taking actions.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>139</p></div>
                    <div class="inline statement"><p>I think about potential harms and risks when making decisions.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>140</p></div>
                    <div class="inline statement"><p>I think through all the outcomes of a certain course of action before moving forward with it.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
            </div>
            <div class="theButtons" style="padding-bottom: 25px;">
                <div class="buttonDark" onclick="back();">Back</div>
                <div class="buttonDark" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s1 == 8) return '    <div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please read each statement and select how much it is like or unlike you.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </nav>
            <div class="surveyContainer">
                <div class="alert_placeholder"></div>
                <div class="headerContainer">
                <!-- <div class="headerBG"></div>-->
                    <div class="headerRow">
                        <div class="inline number"><p>#</p></div>
                        <div class="inline statement"><p>Statement</p></div>
                        <div class="inline optionH"><p>Very much like me</p></div>
                        <div class="inline optionH"><p>Like me</p></div>
                        <div class="inline optionH"><p>Unlike me</p></div>
                        <div class="inline optionH"><p>Very unlike me</p></div>
                    </div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>141</p></div>
                    <div class="inline statement"><p>I tend to think before I act.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>142</p></div>
                    <div class="inline statement"><p>I can make sense of my emotional experiences.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>143</p></div>
                    <div class="inline statement"><p>I can usually figure out why I am feeling a certain emotion.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>144</p></div>
                    <div class="inline statement"><p>I recognize my emotions and their underlying causes.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>145</p></div>
                    <div class="inline statement"><p>I have a good understanding of my motives and feelings.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>146</p></div>
                    <div class="inline statement"><p>I exercise self-restraint from time to time.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>147</p></div>
                    <div class="inline statement"><p>I can control impulses to do things that may be unwise or wrong.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>148</p></div>
                    <div class="inline statement"><p>I can resist temptation.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>149</p></div>
                    <div class="inline statement"><p>I am good at exercising self-control.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>150</p></div>
                    <div class="inline statement"><p>I often practice self-restraint.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>151</p></div>
                    <div class="inline statement"><p>I generally consider how my words and actions might affect my future.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>152</p></div>
                    <div class="inline statement"><p>I try to act in ways that will benefit me for years to come.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>153</p></div>
                    <div class="inline statement"><p>I often consider the future consequences of how I spend my time today.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>154</p></div>
                    <div class="inline statement"><p>I thoughtfully consider the potential long-term consequences of my actions.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>155</p></div>
                    <div class="inline statement"><p>I feel whatever happens in my life is part of some greater purpose.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>156</p></div>
                    <div class="inline statement"><p>I think there is greater meaning in the apparent randomness in life.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>157</p></div>
                    <div class="inline statement"><p>I feel sustained by my belief that my life fits into a larger purpose.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>158</p></div>
                    <div class="inline statement"><p>I feel a strong sense of meaning in my life.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>159</p></div>
                    <div class="inline statement"><p>I feel my time on earth is part of some larger plan for mankind.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>160</p></div>
                    <div class="inline statement"><p>I have been put on this earth for a reason.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
            </div>
            <div class="theButtons" style="padding-bottom: 25px;">
                <div class="buttonDark" onclick="back();">Back</div>
                <div class="buttonDark" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s1 == 9) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please read each statement and select how much it is like or unlike you.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </nav>
            <div class="surveyContainer">
                <div class="alert_placeholder"></div>
                <div class="headerContainer">
                <!-- <div class="headerBG"></div>-->
                    <div class="headerRow">
                        <div class="inline number"><p>#</p></div>
                        <div class="inline statement"><p>Statement</p></div>
                        <div class="inline optionH"><p>Very much like me</p></div>
                        <div class="inline optionH"><p>Like me</p></div>
                        <div class="inline optionH"><p>Unlike me</p></div>
                        <div class="inline optionH"><p>Very unlike me</p></div>
                    </div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>161</p></div>
                    <div class="inline statement"><p>I believe that life has a larger purpose.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>162</p></div>
                    <div class="inline statement"><p>I think there is meaning in the universe.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>163</p></div>
                    <div class="inline statement"><p>I feel my life has a greater purpose than I am capable of understanding.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>164</p></div>
                    <div class="inline statement"><p>I feel I am on earth for a reason that in this life I cannot know.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>165</p></div>
                    <div class="inline statement"><p>I consider myself a spiritual person.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>166</p></div>
                    <div class="inline statement"><p>I use my spirituality as a source of support and guidance.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>167</p></div>
                    <div class="inline statement"><p>I feel connected to a higher power.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>168</p></div>
                    <div class="inline statement"><p>I seek out spiritual experiences.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>169</p></div>
                    <div class="inline statement"><p>I desire spiritual growth.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>170</p></div>
                    <div class="inline statement"><p>I like discussing spiritual topics.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>171</p></div>
                    <div class="inline statement"><p>I set aside time daily for prayer or meditation.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>172</p></div>
                    <div class="inline statement"><p>I believe we are more than just our physical bodies.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>173</p></div>
                    <div class="inline statement"><p>I believe there is more to life than what we can perceive with our five senses.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>174</p></div>
                    <div class="inline statement"><p>I try not to let stereotypes or prejudices affect my judgments about other people.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>175</p></div>
                    <div class="inline statement"><p>I treat people fairly even when it does not benefit me.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>176</p></div>
                    <div class="inline statement"><p>I think that all people involved in a situation should be able to voice their opinions.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>177</p></div>
                    <div class="inline statement"><p>I try to prevent potential biases towards people from affecting how I treat them.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>178</p></div>
                    <div class="inline statement"><p>I make it a point to treat everyone fairly.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>179</p></div>
                    <div class="inline statement"><p>I try to be fair in every decision I make.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>180</p></div>
                    <div class="inline statement"><p>I strive to treat everyone equally.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
            </div>
            <div class="theButtons" style="padding-bottom: 25px;">
                <div class="buttonDark" onclick="back();">Back</div>
                <div class="buttonDark" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s1 == 10) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please read each statement and select how much it is like or unlike you.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </nav>
            <div class="surveyContainer">
                <div class="alert_placeholder"></div>
                <div class="headerContainer">
                <!-- <div class="headerBG"></div>-->
                    <div class="headerRow">
                        <div class="inline number"><p>#</p></div>
                        <div class="inline statement"><p>Statement</p></div>
                        <div class="inline optionH"><p>Very much like me</p></div>
                        <div class="inline optionH"><p>Like me</p></div>
                        <div class="inline optionH"><p>Unlike me</p></div>
                        <div class="inline optionH"><p>Very unlike me</p></div>
                    </div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>181</p></div>
                    <div class="inline statement"><p>I am opposed to decisions that give some people an unfair advantage.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>182</p></div>
                    <div class="inline statement"><p>I am supportive of decision-making processes that give everyone a fair chance.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>183</p></div>
                    <div class="inline statement"><p>I can eventually forgive someone for wronging me.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>184</p></div>
                    <div class="inline statement"><p>I am almost always willing to give people a second chance when they make a mistake.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>185</p></div>
                    <div class="inline statement"><p>I don&rsquo;t hold grudges against others.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>186</p></div>
                    <div class="inline statement"><p>I don&rsquo;t want to hurt those who have wronged me.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>187</p></div>
                    <div class="inline statement"><p>I forgive people who wrong me.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>188</p></div>
                    <div class="inline statement"><p>I forgive people who sincerely apologize for their mistakes and wrongdoings.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>189</p></div>
                    <div class="inline statement"><p>I can sometimes give a person a second chance when they have hurt me.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>190</p></div>
                    <div class="inline statement"><p>I forgive people for making small mistakes.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>191</p></div>
                    <div class="inline statement"><p>I try to forgive others when they hurt me.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>192</p></div>
                    <div class="inline statement"><p>I go out of my way to help people who are suffering.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>193</p></div>
                    <div class="inline statement"><p>I am generous towards people in need of help.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>194</p></div>
                    <div class="inline statement"><p>I offer my support to people who are in need of help. </p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>195</p></div>
                    <div class="inline statement"><p>I feel compelled to help people who are less fortunate than me.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>196</p></div>
                    <div class="inline statement"><p>I feel compassion towards people in need.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>197</p></div>
                    <div class="inline statement"><p>I frequently help people in need.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>198</p></div>
                    <div class="inline statement"><p>I enjoy taking care of people that need help.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>199</p></div>
                    <div class="inline statement"><p>I find it easy to change my views when presented with convincing evidence.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>200</p></div>
                    <div class="inline statement"><p>I weigh all evidence fairly, even when it contradicts one of my beliefs.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
            </div>
            <div class="theButtons" style="padding-bottom: 25px;">
                <div class="buttonDark" onclick="back();">Back</div>
                <div class="buttonDark" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s1 == 11) return '    <div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please read each statement and select how much it is like or unlike you.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </nav>
            <div class="surveyContainer">
                <div class="alert_placeholder"></div>
                <div class="headerContainer">
                <!-- <div class="headerBG"></div>-->
                    <div class="headerRow">
                        <div class="inline number"><p>#</p></div>
                        <div class="inline statement"><p>Statement</p></div>
                        <div class="inline optionH"><p>Very much like me</p></div>
                        <div class="inline optionH"><p>Like me</p></div>
                        <div class="inline optionH"><p>Unlike me</p></div>
                        <div class="inline optionH"><p>Very unlike me</p></div>
                    </div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>201</p></div>
                    <div class="inline statement"><p>I am comfortable reading information that challenges some of my core beliefs.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>202</p></div>
                    <div class="inline statement"><p>I am willing to consider new evidence that challenges my beliefs about the world.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>203</p></div>
                    <div class="inline statement"><p>I am able to change my mind about an issue when new information arises.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>204</p></div>
                    <div class="inline statement"><p>I am willing to revise my beliefs in light of new evidence.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>205</p></div>
                    <div class="inline statement"><p>I am willing to listen to people whose opinions differ from mine.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>206</p></div>
                    <div class="inline statement"><p>I don&rsquo;t judge people negatively just because they have different views and beliefs.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>207</p></div>
                    <div class="inline statement"><p>I am considerate toward people who express views that conflict with mine.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>208</p></div>
                    <div class="inline statement"><p>I don&rsquo;t dismiss people just because they disagree with me on important issues.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>209</p></div>
                    <div class="inline statement"><p>I don&rsquo;t assume a person&rsquo;s beliefs are wrong without hearing their reasons.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>210</p></div>
                    <div class="inline statement"><p>I am good at listening to people who have different opinions than me.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
                <div class="surveyRow">
                    <div class="inline number"><p>211</p></div>
                    <div class="inline statement"><p>I see the merits of opinions and beliefs that differ from my own.</p></div>
                    <div class="inline option"><p>Very much like me</p></div>
                    <div class="inline option"><p>Like me</p></div>
                    <div class="inline option"><p>Unlike me</p></div>
                    <div class="inline option"><p>Very much unlike me</p></div>
                </div>
            </div>
            <div class="theButtons" style="padding-bottom: 25px;">
                <div class="buttonDark" onclick="back();">Back</div>
                <div class="buttonDark" onclick="next();">Finish</div>
            </div>
        </div>';
        }
    }
?>