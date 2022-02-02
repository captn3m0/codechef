---
{"category_name":"medium","problem_code":"JTREE","problem_name":"JosephLand","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"nurbakhyt","problem_tester":"dpraveen","date_added":"29-06-2016","tags":{"0":"list","1":"medium","2":"nurbakhyt","3":"sept16"},"time":{"view_start_date":1473931800,"submit_start_date":1473931800,"visible_start_date":1473931800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/mandarin/JTREE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/russian/JTREE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/vietnamese/JTREE.pdf">Vietnamese</a> as well.</h3>

<p>Nick lives in a country named JosephLand. JosephLand consists of <b>N</b> 
cities. City <b>1</b> is the capital city. There are <b>N - 1</b> <b>directed</b> roads. It's guaranteed that it is possible to reach capital city from any city, and in fact there is a unique path from any city to the capital city.</p>

<p>Besides, you can't cross roads for free. To pass a road, you must have a ticket. There are total <b>M</b> tickets. You can not have more than <b>one</b> ticket at a time! Each ticket is represented by three integers:
<ul>
<li><b>v</b> <b>k</b> <b>w</b> : you can buy a ticket with cost <b>w</b> in the city <b>v</b>. This ticket can be used at max <b>k</b> times. That means, after using this ticket for <b>k</b> roads ticket can't be used!</li>
</ul>
</p>

<p>By the way, you can tear your ticket any time and buy a new one. But you are not allowed to buy a ticket if you are still having a ticket with you!</p>

<p>Nick's home is located in the capital city. He has <b>Q</b> friends, and he wants to invite all of them for dinner! So he is interested in knowing about how much each of his friends is going to spend in the journey! His friends are quite smart and always choose a route to capital city that <b>minimizes</b> his/her spending! Nick has to prepare dinner, so he doesn't have time to figure out himself, Can you please help him?
</p>

<p>Please note that it's guaranteed that, one can reach the capital from any city using the tickets!</p>


<h3>Input</h3>
<p>The first line of input contains two space separated integers <b>N</b> and <b>M</b>, denoting the number of cities in JosephLand, and the number of tickets, respectively.</p>
<p>The next <b>N - 1</b> lines contain two integers <b>a<sub>i</sub></b>, <b>b<sub>i</sub></b>, denoting that there is a road from city <b>a<sub>i</sub></b> to <b>b<sub>i</sub></b>.</p>
<p>The next <b>M</b> lines contain three integers <b>v<sub>i</sub></b>, <b>k<sub>i</sub></b>, <b>w<sub>i</sub></b> denoting the ticket described above.</p>
<p>The next line contains a single integer <b>Q</b> denoting the number of Nick's friends.</p>
<p>The next <b>Q</b> lines contain a single integer each, <b>h<sub>i</sub></b> denoting city, where Nick's <b>i<sup>th</sup></b> friend lives.</p>

<h3>Output</h3>
<p>Output <b>Q</b> lines: the answer for each friend.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, M, Q</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>v<sub>i</sub></b>, <b>k<sub>i</sub></b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>w<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>h<sub>i</sub></b> ≤ <b>N</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b><tt>
7 7
3 1
2 1
7 6
6 3
5 3
4 3
7 2 3
7 1 1
2 3 5
3 6 2
4 2 4
5 3 10
6 1 20
3
5
6
7
</tt>
<b>Output:</b><tt>
10
22
5</tt>
</pre>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (10 points) : N, M, Q ≤ 10<sup>2</sup>, w<sub>i</sub> ≤ 10<sup>5</sup></b></li>
<li><b>Subtask #2 (15 points) : N, M, Q ≤ 10<sup>3</sup>, w<sub>i</sub> ≤ 10<sup>8</sup></b></li>
<li><b>Subtask #3 (25 points) : N, M, Q ≤ 5*10<sup>4</sup>, w<sub>i</sub> ≤ 10<sup>9</sup></b></li>
<li><b>Subtask #4 (50 points)</b> : Original constraints</li>
</ul>

<h3>Explanation</h3>
<p><b>Example #1:</b></p>
<p><i>Query 1.</i> There is only one ticket he/she can purchase in city 5 and it can be used 3 times. It's enough to reaching capital, thus overall cost is 10.</p>
<p><i>Query 2.</i> There is only one ticket he/she can purchase in city 6 and it can be used only one time. Thus, he/she have to purchase another ticket in city 3 with cost 2. Overall cost is 22.</p>
<p><i>Query 3.</i> There are two tickets he/she can purchase in city 7. One can buy either <b>2<sup>nd</sup></b> ticket or <b>1</b>st ticket. He/She can buy the first ticket and travel, and buy one more ticket at city 3 by paying a cost of 2. Total cost for this combination is 5. For all other combination of buying tickets, he/she will have to spend at least 5 cost.</p>
