---
{"category_name":"medium","problem_code":"REFUELS","problem_name":"Racing Refuels","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":null,"date_added":"20-06-2017","tags":{"0":"errichto"},"time":{"view_start_date":1498908900,"submit_start_date":1498908900,"visible_start_date":1498908900,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKFL17/mandarin/REFUELS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL17/russian/REFUELS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL17/vietnamese/REFUELS.pdf">Vietnamese</a> as well.</h3>

<p>In racing, you refuel your car in the pitstops, and it’s very important to carefully plan pit stops.</p>

<p>1 unit of fuel is enough for exactly 1 lap. At the beginning of each lap, the number of units of fuel in your car must be a positive integer that doesn't exceed the tank capacity <b>N</b>, and it will decrease by 1 during a lap.
After each lap, you can spend <b>P</b> seconds to visit a pit stop and refuel your car (add some fuel).
It's allowed to start a lap with only 1 unit of fuel and thus finish it with 0 units — but you have to visit a pit stop right after that, unless it was the last lap of the race.
You can start the race with any allowed (positive integer that doesn't exceed <b>N</b>) number of units of fuel.</p>

<p>The more fuel your car contains, the slower it is.
If you start a lap with x units of fuel, you will finish this lap in <b>t</b><sub>x</sub> seconds.
You can assume that <b>t</b><sub>x</sub> ≤ <b>t</b><sub>x+1</sub>.</p>

<p>There are <b>Q</b> independent races, each described by two integers <b>K</b> and <b>P</b>, denoting the number of laps and the time needed to visit a pit stop in that race (let's say that in some races the pit stop crew is lazy and works slower).
For each race, find the minimum possible number of seconds in which you can finish that race.</p>



<h3>Input</h3>

<p>The first line of the input contains two integers <b>N</b> and <b>Q</b>, denoting the tank capacity and the number of races respectively.</p>

<p>The second line contains <b>N</b> integers <b>t</b><sub>1</sub>, <b>t</b><sub>2</sub>, ..., <b>t</b><sub><b>N</b></sub>, where <b>t</b><sub>x</sub> denotes the time needed to finish a lap if you start it with x units of fuel.</p>

<p>Each of the next <b>Q</b> lines contains two integers <b>K</b> and <b>P</b>, denoting the number of laps and the number of seconds needed to visit a pit stop in one race.</p>



<h3>Output</h3>

<p>For each of the <b>Q</b> races, in a separate line, print a single integer — the minimum possible number of seconds needed to finish the race.
Please note the unusual constraint about the answer.</p>




<h3>Constraints</h3>

<ul>
<li>1 ≤ <b>N</b>, <b>Q</b> ≤ 300,000</li>
<li>1 ≤ <b>K</b>, <b>P</b>, <b>t</b><sub>i</sub> ≤ 10<sup>13</sup></li>
<li><b>t</b><sub>i</sub> ≤ <b>t</b><sub>i+1</sub></li>
<li>It's guaranteed that the answer fits in the signed 64-bit type.</li>
</ul>



<h3>Example</h3>

<pre><b>Input:</b>
3 14
5 7 20
5 60
5 3
1 1
1 2
1 3
2 1
2 2
2 3
3 1
3 2
3 3
7 60
999999999 60
1000 123456789123

<b>Output:</b>
104
35
5
5
5
11
12
12
17
19
20
176
30666666576
41111110788607</pre>



<h3>Explanation</h3>

<p>Your car fits up to <b>N</b> = 3 units of fuel.
Let's take a look at the first two races.</p>

<p><b>Race #1.</b>  This race consists of <b>K</b> = 5 laps and you need <b>P</b> = 60 seconds to visit a pit stop.
One optimal scenario is:</p>

<ol>
<li>Start the race with 3 units of fuel.</li>
<li>Spend <b>t</b><sub>3</sub> = 20 seconds on the first lap. Now you have 2 units of fuel.</li>
<li>Spend <b>t</b><sub>2</sub> = 7 seconds on the second lap. Now you have 1 unit of fuel.</li>
<li>Spend <b>t</b><sub>1</sub> = 5 seconds on the third lap. Now you have 0 units of fuel.</li>
<li>Spend 60 seconds to visit a pit stop.
Add 2 units of fuel there.</li>
<li>Spend <b>t</b><sub>2</sub> = 7 seconds on the 4-th lap.</li>
<li>Spend <b>t</b><sub>1</sub> = 5 seconds on the 5-th lap.</li>
</ol>

<p>This total time is 20 + 7 + 5 + 60 + 7 + 5 = 104 seconds and it turns out to be the optimal answer.</p>

<p><b>Race #2.</b>  This race also consists of <b>K</b> = 5 laps, but this time you need only <b>P</b> = 3 seconds to visit a pit stop, so it might be better to visit a pit stop more often.</p>