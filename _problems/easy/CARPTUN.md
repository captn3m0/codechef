---
{"category_name":"easy","problem_code":"CARPTUN","problem_name":"Car-pal Tunnel","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"abizerl123","problem_tester":"r_64","date_added":"30-01-2018","tags":{"0":"abizerl123","1":"dynamic","2":"feb18","3":"math","4":"simple"},"editorial_url":"https://discuss.codechef.com/problems/CARPTUN","time":{"view_start_date":1518427800,"submit_start_date":1518427800,"visible_start_date":1518427800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/mandarin/CARPTUN.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/russian/CARPTUN.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/vietnamese/CARPTUN.pdf">Vietnamese</a> as well.</h3>

<p>There is a straight road that passes through <b>N</b> short tunnels. At the entrance to the first tunnel, there are <b>C</b> cars lined up in a row waiting to enter the series of tunnels. The distance between each pair of consecutive tunnels is <b>D</b> metres (the lengths of each tunnel and each car are negligible) and the velocity of each car is <b>S</b> metres per second.</p>

<p>Each tunnel contains a toll booth. In the <b>i</b>-th tunnel (1 ≤ <b>i</b> ≤ <b>N</b>), processing a car at the toll booth takes <b>A<sub>i</sub></b> seconds. Only one car can be processed at the same time. If there are multiple cars in the tunnel, they all have to wait for the first car to be processed; afterwards, the first car exits the tunnel, the second car starts being processed and all remaining cars have to wait again, etc. Whenever a car arrives in a tunnel, it has to wait at that tunnel's toll booth until all previous cars have been processed and then get processed itself.</p>

<p>The road and the tunnels are too narrow, so cars can't overtake each other at any time during the journey.</p>

<p>Chef is after Reziba once again. Reziba's car is the first car to enter the tunnels, while Chef's car is the last car to enter the tunnels.</p>

<p>Compute the final delay (in seconds) between the first (Reziba's) car and the last (Chef's) car immediately after Chef's car exits the last tunnel, i.e. after all the cars have passed through the tunnels. This delay is equal to the distance between the first and the last car divided by the cars' velocity, or equivalently to the difference between the times when the last car and the first car exit the last tunnel.</p>


<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of tunnels.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b> denoting the time taken for processing a car at each toll booth.</li>
<li>The third line contains three space-separated integers <b>C</b>, <b>D</b> and <b>S</b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing one real number — the time delay between the first and last car after all the cars have passed through all the tunnels. Your answer will be considered correct if its absolute error is less than 10<sup>-6</sup>.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup> for each valid <b>i</b></li>
<li>2 ≤ <b>C</b> ≤ 10<sup>6</sup></li>
<li>1 ≤ <b>D, S</b> ≤ 10<sup>9</sup></li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1:</b>
<ul>
<li>1 ≤ <b>N</b> ≤ 1,000</li>
<li><b>C</b> = 2</li>
</ul>
</p>
<p><b>Subtask #2:</b> Original Constraints</p>

<h3>Example</h3>
<pre><b>Input:</b>

2
3
2 2 2
3 5 5
2
3 2
2 1 1

<b>Output:</b>

4.000000000
3.000000000
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> Each car takes 5/5 = 1 second to go from one tunnel to the next tunnel.</p>

<p>Since each car has to wait for equally long (2 seconds) in each tunnel, the delay between every two consecutive cars exiting each tunnel is 2 seconds.</p>

<p>As there are 3 cars, the total time delay between the first and the last car after the last tunnel is 4 seconds.</p>
