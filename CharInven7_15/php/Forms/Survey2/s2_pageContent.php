<?php
    class s2_pageContent {
        function opening() {
            return '</div>
                <div class="col-sm-2"></div>
                <div class="col-sm-8" style="margin-top: 100px; margin-bottom: 50px; background-color: white;">
                    <p style="font-size: 18pt;">Thank you for your interest in taking the multi-dimensional survey. The survey will take about 45 minutes to complete. Please fill in responses to all the questions as it will allow more accurate scoring of your character strengths.</p>
                    <div class="theButtons" style="padding-bottom: 25px;">
                        <div class="button" onclick="begin();">Begin</div>
                    </div>
                </div>
                <div class="col-sm-2"></div>';
        }
        function headerContainer($s2, $completeWidth, $incompleteWidth) {
            if ($s2 == 1) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I think through all the outcomes of a certain course of action before moving forward with it.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I am willing to listen to people whose opinions differ from mine.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I don&rsquo;t think about the good things people have done for me.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 2) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I have a knack for knowing what people are really after.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I think that people who do not share my point of view are generally not worth getting to know.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I thoughtfully consider the potential long-term consequences of my actions.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 3) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I keep pushing to reach my goals even when things get difficult.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>It&rsquo;s hard to be grateful because I have so very little.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I try to learn something new every day.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 4) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I do not find learning to be fun.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I believe there is more to life than what we can perceive with our five senses.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>It is easy for me to see things to be grateful for.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 5) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I always enjoy learning new things.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I don&rsquo;t typically feel like I am faking who I am.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I am able to change my mind about an issue when new information / arises.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 6) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I don&rsquo;t typically feel like I am faking who I am.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I look for ways to increase my knowledge.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I can figure out how to act in a new social setting without being told.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 7) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I present myself in a genuine way.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I weigh all evidence fairly, even when it contradicts one of my beliefs.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I keep pushing to reach my goals even when things get difficult.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 8) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I can figure out how to act in a new social setting without being told.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I don&rsquo;t think life has meaning besides what we decide it has.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I often notice new things to be thankful for.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 9) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I don&rsquo;t judge people negatively just because they have different / views and beliefs.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I like discussing spiritual topics.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I persist through difficult problems rather than giving up and / feeling discouraged.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 10) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I always enjoy learning new things.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I don&rsquo;t deliberately misrepresent myself to others.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I think about potential harms and risks when making decisions.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 11) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I desire spiritual growth.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I don&rsquo;t assume a person&rsquo;s beliefs are wrong without hearing their reasons.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I make an effort to learn and develop new skills.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 12) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I act without thinking about the consequences of my actions.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I believe there is more to life than what we can perceive with our five senses.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I am deeply aware that I have been blessed by the generosity of others.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 13) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I understand what is expected of me in most social situations.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I try to learn something new every day.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I dislike people who don&rsquo;t share my beliefs.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 14) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I am not a quitter.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I don&rsquo;t deliberately misrepresent myself to others.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I generally consider how my words and actions might affect my future.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 15) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I am aware that I have many things to be thankful for.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I can figure out how to act in a new social setting without being / told.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I am good at listening to people who have different opinions than / me.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 16) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I am a reliable friend.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>My immediate happiness is more important than any potential future happiness.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I believe there is more to life than what we can perceive with our / five senses.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 17) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I overcome obstacles that interfere with getting things done.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I seldom succeed in keeping my promises.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I have a good sense for what others are feeling.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 18) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I don&rsquo;t pretend to be someone I&rsquo;m not.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I always consider potential risks before taking actions.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I think there is greater meaning in the apparent randomness in / life.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 19) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I make an effort to learn and develop new skills.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I can figure out how to act in a new social setting without being / told.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I think about potential harms and risks when making decisions.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 20) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I am constantly aware of things to be grateful for.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I am willing to listen to people whose opinions differ from mine.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I have been put on this earth for a reason.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 21) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I don&rsquo;t leave important projects unfinished.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>If someone expresses an idea that is different than mine I dismiss it very quickly.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I am deeply aware that I have been blessed by the generosity of / others.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 22) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I understand the motives of people around me.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I only believe in what my five senses can perceive.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I try to learn something new every day.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 23) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I usually finish what I have started.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I tend to think before I act.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I look for ways to increase my knowledge.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 24) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I am quick to recognize other peoples&rsquo; motives.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I hide my true intentions and feelings to gain an advantage over others.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I am constantly aware of things to be grateful for.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 25) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I don&rsquo;t enjoy the process of learning.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I try to act in ways that will benefit me for years to come.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I feel grateful for the positive things in my life.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 26) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I usually give up on a goal if it is too challenging.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I often consider the future consequences of how I spend my time / today.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I feel connected to a higher power.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 27) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I am not a quitter.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I have a good sense for what others are feeling.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I think through all the outcomes of a certain course of action / before moving forward with it.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 28) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I take a long time to figure people out.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I get satisfaction from learning something new.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I appreciate the things I have.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 29) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I switch to another task when the task at hand is difficult.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I feel my time on earth is part of some larger plan for mankind.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I don&rsquo;t dismiss people just because they disagree with me on / important issues.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
            else if ($s2 == 30) return '<div id="progressBar">
                    <div id="completeBar" style="width: '.$completeWidth.'%;"></div>
                    <div id="incompleteBar" style="width: '.$incompleteWidth.'%;"></div>
                </div>
                <div class="row" id="instructionRow">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Please rank these statements from what describes you the most to the least.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="surveyContainer">
                <div id="alert_placeholder"></div>
                <div class="col-sm-5">
                    <div class="col-sm-11" style="border-style: solid; border-width: 2px;">
                        <center><h3 class="modalHeader">Statements</h3></center>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag1"><p>I am not very good at completing my work.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag2"><p>I am true to my word.</p></div>
                        </div>
                        <div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <div class="modalBtn" draggable="true" ondragstart="drag(event)" id="drag3"><p>I feel my time on earth is part of some larger plan for mankind.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="col-sm-7" style="background-color: gray;">
                    <center><h3 class="modalHeader">Most like me</h3></center>
                    <div class="div1" id="rank1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <div class="div1" id="rank3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <center><h3 class="modalHeader" style="padding-bottom: 0px;">Least like me</h3></center>
                </div>
            </div>
            <div class="theButtons col-sm-12" style="padding-bottom: 25px;">
                <div class="button" onclick="back();">Back</div>
                <div class="button" onclick="next();">Next</div>
            </div>
        </div>';
        }
    }
?>