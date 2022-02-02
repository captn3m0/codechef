---
{"category_name":"easy","problem_code":"LRQUER","problem_name":"L-R queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":"1 - 4","source_sizelimit":50000,"problem_author":"mgch","problem_tester":"alex_2oo8","date_added":"20-11-2017","tags":{"0":"easy","1":"ltime54","2":"mgch","3":"segment"},"editorial_url":"https://discuss.codechef.com/problems/LRQUER","time":{"view_start_date":1511629200,"submit_start_date":1511629200,"visible_start_date":1511629200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME54/mandarin/LRQUER.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME54/russian/LRQUER.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME54/vietnamese/LRQUER.pdf">Vietnamese</a> as well.</h3>
Chef has an array <b>A</b> of size <b>N</b>. His friend Chuwi playing with this array in a next way: he chooses a continuous subarray <b>A</b>[<b>L</b>..<b>R</b>] and finds the maximum of (<b>A</b>[<b>M</b>] - <b>A</b>[<b>L</b>]) * (<b>A</b>[<b>R</b>] - <b>A</b>[<b>M</b>]) over all values of <b>M</b> where <b>L</b> ≤ <b>M</b> ≤ <b>R</b>. Chef wants to hopple Chuwi and changes elements of his array sometimes. Please help Chuwi to solve this easy problem.

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.
The first line of each test case contains two positive integers <b>N</b> denoting the number of elements in Chef's array and <b>Q</b> denoting the number of operations performed by Chef and Chuwi. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the Chef's array. Next <b>Q</b> contains three integers - <b>type</b> = 1 <b>L</b> <b>R</b> denoting that Chuwi takes subarray <b>A</b>[<b>L</b>..<b>R</b>] and finds the maximum of his function. <b>type</b> = 2 <b>X</b> <b>Y</b> denoting that Chef changes element <b>A</b>[<b>X</b>] by <b>Y</b>.
</ul>
<p> </p>

<h3>Output</h3>
For every Chuwi's performed operation output the maximal value in a single line.
<p> </p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N</b>, <b>Q</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b>, <b>Y</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b> </li>
<li><b>1</b> ≤ <b>X</b> ≤ <b>N</b> </li>
<li><b>1</b> ≤ <b>type</b> ≤ <b>2</b></li>
<li> Sum of <b>N</b> over all test cases ≤ <b>2*10<sup>5</sup></b></li>
<li> Sum of <b>Q</b> over all test cases ≤ <b>2*10<sup>5</sup></b></li>
</ul>
<p> </p>
<h3>Subtasks</h3>
<ul>
 <li><b>Subtask #1: (20 points) </b> sum of <b>N</b> over all test cases ≤ <b>5*10<sup>3</sup></b> and sum of <b>Q</b> over all test cases ≤ <b>5*10<sup>3</sup></b> and <b>TL</b> = <b>1</b> sec</li>
 <li><b>Subtask #2: (30 points) </b> <b>1</b> ≤ <b>A<sub>i</sub></b>, <b>Y</b> ≤ <b>10<sup>2</sup></b></li>
 <li><b>Subtask #3: (50 points) </b> Original constraints</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
4 3
2 1 4 3
1 1 4
2 2 3
1 1 3

<b>Output:</b>
0
1

</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> For Chuwi's subarray [2, 1, 4, 3] there are 4 possible values of (<b>A</b>[<b>M</b>] - <b>A</b>[<b>L</b>]) * (<b>A</b>[<b>R</b>] - <b>A</b>[<b>M</b>]) - {0, -2, -2, 0} correspondingly, maximal value will be 0. After the second operation array will be [2, 3, 4, 3]. And for Chuwi's subarray [2, 3, 4] possible 3 values - {0, 1, 0}, hence answer is 1. </p>