---
{"category_name":"school","problem_code":"SEBIHWY","problem_name":"Sebi and the highway","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"iscsi ","problem_tester":"kevinsogo","date_added":"2-11-2016","tags":{"0":"ad","1":"cakewalk","2":"cook76","3":"iscsi"},"editorial_url":"http://discuss.codechef.com/problems/SEBIHWY","time":{"view_start_date":1479666600,"submit_start_date":1479666600,"visible_start_date":1479666600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK76/mandarin/SEBIHWY.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK76/russian/SEBIHWY.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK76/vietnamese/SEBIHWY.pdf">Vietnamese</a> as well.</h3>

<p>Sebi goes to school daily with his father. They cross a big highway in the car to reach to the school. Sebi sits in front seat beside his father at driving seat. To kill boredom, they play a game of guessing speed of other cars on the highway. Sebi makes a guess of other car's speed being <b>SG</b> kph, his father <b>FG</b> kph. 
</p>

<p>The highway is usually empty, so the drivers use cruise control, i.e. vehicles run at a constant speed. There are markers on the highway at a gap of 50 meters. Both father-son duo wants to check the accuracy of their guesses. For that, they start a timer at the instant at which their car and the other car (which speed they are guessing) are parallel to each other (they need not to be against some marker, they can be in between the markers too). After some <b>T</b> seconds, they observe that both the cars are next to some markers and the number of markers in between the markers of their car and the other car is <b>D - 1</b> (excluding the markers next to both the cars). Also, they can observe these markers easily because the other car is faster than their. Speed of Sebi's father's car is <b>S</b>. Using this information, one can find the speed of the other car accurately.
</p>

<p>
An example situation when Sebi's father starts the timer. Notice that both the car's are parallel to each other.</p>
<p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/sehwy_1.JPG" alt="HTML5 Icon" width="400" height="100">
</p>
<p>
Example situation after <b>T</b> seconds. The cars are next to the markers. Here the value of <b>D</b> is 1. The green car is Sebi's and the other car is of blue color.</p>
<p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/sehwy_2.JPG" alt="HTML5 Icon" width="400" height="100">
</p>

<p>
Sebi's a child, he does not know how to find the check whose guess is close to the real speed of the car. He does not trust his father as he thinks that he might cheat. Can you help to resolve this issue between them by telling whose guess is closer. If Sebi's guess is better, output "SEBI". If his father's guess is better, output "FATHER". If both the guess are equally close, then output "DRAW".
</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. </p>
<p>Each of the next <b>T</b> lines contain five space separated integers <b>S, SG, FG, D, T</b> corresponding to the Sebi's car speed, Sebi's guess, his father's guess, <b>D</b> as defined in the statement and the time at which both the cars at against the markers (in seconds), respectively.</p>


<h3>Output</h3>
<p>Output description.</p>
<p>For each test case, output a single line containing "SEBI", "FATHER" or "DRAW" (without quotes) denoting whose guess is better.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10000</b></li>
<li><b>0</b> ≤ <b>S</b> ≤ <b>130</b></li>
<li><b>0</b> ≤ <b>SG, FG</b> ≤ <b>300</b></li>
<li><b>1</b> ≤ <b>D</b> ≤ <b>30</b></li>
<li><b>1</b> ≤ <b>T</b> ≤ <b>300</b></li>
<li> The other car speed doesn't exceed 300 kph.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
100 180 200 20 60
130 131 132 1 72

<b>Output:</b>
SEBI
FATHER
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b></p>
<p>There are total <b>20 - 1 = 19</b> markers in between the Sebi's car and the other car. So, the distance between those cars at time <b>T</b> is 20 * 50 = 1000 meters = 1 km.</p>

<p>As <b>T = 60</b> seconds, i.e. 1 minutes. So, the other car goes 1 km more than Sebi's car in 1 minute. So, the other car will go 60 km more than Sebi's car in 1 hour. So, its speed is 60 kmph more than Sebi's car, i.e. 160 kmph.</p>

<p>Sebi had made a guess of 180 kmph, while his father of 200 kmph. Other car's real speed is 160 kmph. So, Sebi's guess is better than his father. Hence he wins the game.</p>

<p><b>Example case 2.</b><p>

<p>The situation of this example is depicted in the image provided in the statement. You can find the speed of other car and see that Father's guess is more accurate.</p>