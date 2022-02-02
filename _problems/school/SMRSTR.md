---
{"category_name":"school","problem_code":"SMRSTR","problem_name":"Smart Strategy","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"alex_2oo8","date_added":"20-11-2017","tags":{"0":"cakewalk","1":"ltime54","2":"mgch"},"editorial_url":"https://discuss.codechef.com/problems/SMRSTR","time":{"view_start_date":1511629200,"submit_start_date":1511629200,"visible_start_date":1511629200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME54/mandarin/SMRSTR.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME54/russian/SMRSTR.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME54/vietnamese/SMRSTR.pdf">Vietnamese</a> as well.</h3>
Chef found a very useful open-source code for the current problem. Unfortunately, one fragment of code isn't optimized. Consider that problem: given an array <b>D</b> of size <b>N</b> and <b>Q</b> queries <b>X</b> to the following open-source code:
<p></p>
<b><code><Br>
read X<Br>
for i = 1..N:<Br>
    X = floor(X / D[i])<Br>
print X<Br>
</code></b>
<p></p>
Help Chef to optimize that code for all possible <b>X</b>, he will be very thankful :)

<h3>Input</h3>
<ul>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.  The first line of each test case contains two integers - <b>N</b> and <b>Q</b>. The second line contains array <b>D</b>. The third line contains <b>Q</b> queries - <b>X<sub>1</sub></b>, <b>X<sub>2</sub></b>, ..., <b>X<sub>Q</sub></b>. 
</ul>
<p> </p>

<h3>Output</h3>
<ul>
For every test case in single line output <b>Q</b> integers - for each <b>X<sub>i</sub></b> output result for this query.
</ul>
<p> </p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>X<sub>i</sub></b>, <b>D<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li> Sum of <b>N</b> over all test cases ≤ <b>3*10<sup>5</sup></b></li>
<li> Sum of <b>Q</b> over all test cases ≤ <b>3*10<sup>5</sup></b></li>
</ul>
<p> </p>
<h3>Subtasks</h3>
<ul>
 <li><b>Subtask #1: (25 points) </b> sum of <b>N</b> over all test cases ≤ <b>3*10<sup>3</sup></b> and sum of <b>Q</b> over all test cases ≤ <b>3*10<sup>3</sup></b> </li>
 <li><b>Subtask #2: (75 points) </b> Original constraints</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 3
2 3
5 100 8
3 2
2 2 2
16 8
<b>Output:</b>
0 16 1
2 1
</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> [[5 / 2] / 3] = 0, [[100 / 2] / 3] = 16, [[8 / 2] / 3] = 1</p>