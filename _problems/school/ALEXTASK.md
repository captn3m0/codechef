---
{"category_name":"school","problem_code":"ALEXTASK","problem_name":"Task for Alexey","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":" - 1","source_sizelimit":50000,"problem_author":"rubanalexey","problem_tester":"xcwgf666","date_added":"11-10-2016","tags":{"0":"basic","1":"lcm","2":"nov16","3":"rubanalexey","4":"simple"},"editorial_url":"http://discuss.codechef.com/problems/ALEXTASK","time":{"view_start_date":1479115800,"submit_start_date":1479115800,"visible_start_date":1479115800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/mandarin/ALEXTASK.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/russian/ALEXTASK.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/vietnamese/ALEXTASK.pdf">Vietnamese</a> as well.</h3>


<p> Alexey is trying to develop a program for a very simple microcontroller. It makes readings from various sensors over time, and these readings must happen at specific regular times. Unfortunately, if two of these readings occur at the same time, the microcontroller freezes and must be reset. </p>

<p>
There are <b>N</b> different sensors that read data on a regular basis. For each <b>i</b> from <b>1</b> to <b>N</b>, the reading from sensor <b>i</b> will occur every <b>A<sub>i</sub></b> milliseconds with the first reading occurring exactly <b>A<sub>i</sub></b> milliseconds after the microcontroller is powered up. Each reading takes precisely one millisecond on Alexey's microcontroller.
</p>

<p>
Alexey wants to know when the microcontroller will freeze after he turns it on.
</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
</p>
<p>The first line contains single integer <b>N</b> denoting the number of sensors.</p>
<p>
The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b> denoting frequency of measurements. Namely, sensor <b>i</b> will be read every <b>A<sub>i</sub></b> milliseconds with the first reading occurring <b>A<sub>i</sub></b> milliseconds after the microcontroller is first turned on.
</p>

<p> </p>
<h3>Output</h3>

<p>For each test case, output a single line containing the number of milliseconds until the microcontroller freezes.</p>

<p> </p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>500</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<p> </p>
<h3>Subtasks</h3>
<li>Subtask #1 (10 points) <b>1 </b> ≤ <b>T</b> ≤ <b>10,</b> <b>2</b> ≤ <b>N</b> ≤ <b>9</b>, <b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>500</b></li>
<li>Subtask #2 (20 points) <b>1 </b> ≤ <b>T</b> ≤ <b>10,</b> <b>2</b> ≤ <b>N</b> ≤ <b>500,</b> <b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b> 1000</b></li>
<li>Subtask #3 (70 points)  <b>original constraints</b></li>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>3
3
2 3 5
4
1 8 7 11
4
4 4 5 6</tt>

<b>Output:</b>
<tt>6
7
4</tt>
</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Case 1: in 6 milliseconds, the third reading will be attempted from the 1st sensor and the second reading will be attempted from the 2nd sensor</b>.</p>
<p><b>Case 2: in 7 milliseconds the seventh reading will be attempted from the 1st sensor and the first reading will be attempted from the 3rd sensor</b>.</p>
<p><b>Case 3: in 4 milliseconds, the first readings from the first two sensors will be attempted</b>.</p>