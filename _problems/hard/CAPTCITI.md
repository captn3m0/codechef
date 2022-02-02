---
{"category_name":"hard","problem_code":"CAPTCITI","problem_name":"Snakes capturing the Mongoose Cities","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":"kingofnumbers","date_added":"30-05-2017","tags":{"0":"admin3","1":"medium","2":"snckpb17","3":"sorting","4":"tree"},"time":{"view_start_date":1496331000,"submit_start_date":1496331000,"visible_start_date":1496331000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPB17/mandarin/CAPTCITI.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPB17/russian/CAPTCITI.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPB17/vietnamese/CAPTCITI.pdf">Vietnamese</a> as well.</h3>

<p>The Mongoose Land consists of <b>N</b> cities and they are connected by <b>N</b> - 1 bidirectional roads in such a manner that you can travel from one city to another city in exactly one path. In other words, the map looks like a tree. The cities are numbered from 1 to <b>N</b>.</p>

<p>King Cobra has decided that he wants to eliminate the mongooses, and is hence preparing to wage a war. The snakes have recently procured airplanes, and thus they can parachute their soldiers onto some of the Mongoose Land cities. Suppose on Day 0, these soldiers are parachuted. You know that to capture City i, you need to parachute in <b>P<sub>i</sub></b> soldiers. By end  of Day 0, they would have captured their respective cities.</p>

<p>Each city depends on its neighbors for some of its supplies, and so, if a certain number of its neighbors are captured, then this city will fall as well. In particular, for every City i, you know that if City i was uncaptured on Day d, and at least <b>C<sub>i</sub></b> of its neighbors are captured on Day d, then this city will be captured on Day d+1, where d ≥ 0. A city which has been captured will forever remain captured.</p>

<p>King Cobra doesn't mind waiting for however long it takes to capture the entire Mongoose kingdom, but he wants to do it with the least number of soldiers. Help him find the least number of soldiers he should send so that the entire Mongoose kingdom can be captured eventually.</p>

<p>Formally, you need to find a subset of cities, S, such that the sum of <b>P<sub>i</sub></b> over these cities is minimized, and the entire kingdom will be captured eventually, if soldiers are parachuted into exactly these cities. You need to output this minimum sum.</p>


<h3>Input</h3>
<ul>
<li>The first line contains a single integer, <b>T</b>, denoting the number of testcases. The description of each testcase follows.</li>
<li>The first line of each testcase contains a single integer, <b>N</b>, the number of cities in Mongoose Land,</li>
<li>The i-th of the next <b>N</b> - 1 lines contain two integers each, <b>u<sub>i</sub></b> and <b>v<sub>i</sub></b>, which denote that there is an edge between Cities <b>u<sub>i</sub></b> and <b>v<sub>i</sub></b>.</li>
<li>The next line contains <b>N</b> integers, <b>P<sub>1</sub>, P<sub>2</sub></b>, ..., <b>P<sub>N</sub></b>. <b>P<sub>i</sub></b> denotes the number of soldiers which have to parachuted in, so as to capture City i on Day 0.</li>
<li>The next line contains <b>N</b> integers, <b>C<sub>1</sub>, C<sub>2</sub></b>, ..., <b>C<sub>N</sub></b>. <b>C<sub>i</sub></b> denotes the number of neighbors of City i that have to be captured for City i to be captured on the next day.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each testcase, output a single integer which is the minimum total number of soldiers who have to be parachuted in, on Day 0.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 5</li>
<li>1 ≤ <b>N</b> ≤ 5 * 10<sup>4</sup></li>
<li>1 ≤ <b>u<sub>i</sub>, v<sub>i</sub></b> ≤ <b>N</b></li>
<li>1 ≤ <b>P<sub>i</sub></b> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>C<sub>i</sub></b> ≤ degree of City i </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
8
1 2
1 3
4 2
6 5
2 5
7 5
5 8
2 8 10 5 200 4 100 1
2 1 1 1 3 1 1 1

<b>Output:</b>
7
</pre>

<h3>Explanation</h3>
<p>One of the optimal solutions is to parachute into Cities 1, 6 and 8 on Day 0. So the total number of soldiers needed = <b>P<sub>1</sub></b> + <b>P<sub>6</sub></b> + <b>P<sub>8</sub></b> = 2 + 4 + 1 = 7.</p>

<p>Now, we will show that this is indeed a valid solution. For that, we need to show that eventually all the cities will be captured. We will show the cities captured on every day in sequence:</p>
<ul>
<li><b>Day 0</b>: The cities captured are the ones parachuted into, and they are {1, 6, 8}.</li>
<li><b>Day 1</b>: City 2 has one of its neighbors (City 1) captured. And since <b>C<sub>2</sub></b> = 1, this is enough for City 2 to be captured. Similarly, since <b>C<sub>3</sub></b> = 1, and City 1 is a neighbor of City 3, City 3 is also captured. So, cities captured on day 1 = {1, 2, 3, 6, 8}.</li>
<li><b>Day 2</b>: City 4 has <b>C<sub>4</sub></b> = 1, and one of its neighbors is captured (City 2). Hence it is captured now. City 5 has <b>C<sub>5</sub></b> = 3, and three of its neighbors, Cities 2, 6 and 8, have been captured. Hence it is also captured. Therefore the cities captured at the end of Day 2 are {1, 2, 3, 4, 5, 6, 8}.</li>
<li><b>Day 3</b>: City 7 has <b>C<sub>7</sub></b> = 1 and since City 5 has been captured, it is also captured now. So, by the end of Day 3, all 8 cities have been captured.</li>
</ul>
<p></p>
<p>This cannot be achieved with fewer soldiers, and hence the answer is 7.</p>