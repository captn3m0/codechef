---
{"category_name":"medium","problem_code":"HILLJUMP","problem_name":"Hill Jumping","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"20-10-2016","tags":{"0":"aug17","1":"bruteforce","2":"kingofnumbers","3":"medium","4":"sqrt"},"editorial_url":"https://discuss.codechef.com/problems/HILLJUMP","time":{"view_start_date":1503048600,"submit_start_date":1503048600,"visible_start_date":1503048600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/mandarin/HILLJUMP.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/russian/HILLJUMP.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/vietnamese/HILLJUMP.pdf">vietnamese</a> as well.</h3>

<p>Chef is going to organize a hill jumping competition and he is going to be one of the judges in it. In this competition there are <b>N</b> hills in a row, and the initial height of i-th hill is <b>A<sub>i</sup></b>. Participants are required to demonstrate their jumping skills by doing what the judges tell them.</p>

<p>Judges will give each participant a card which has two numbers, <b>i</b> and <b>k</b>, which means that the participant should start at the <b>i</b>-th hill and jump <b>k</b> times, where one jump should be from the current hill to the nearest hill to the right which is strictly higher (in height) than the current one. If there is no such hill or its distance (i.e. difference between their indices)  is more than 100 then the participant should remain in his current hill.</p>

<p>Please help Chef by creating a program to use it during the competitions. It should read the initial heights of the hill and should support two kinds of operations:</p>

<p>Type 1: Given a two numbers: <b>i</b> and <b>k</b>, your program should output the index of the hill the participant is expected to finish if he starts from the i-th hill (as explained above).</p>

<p>Type 2: Given three numbers: <b>L</b>, <b>R</b>, <b>X</b>, the heights of all the hills between <b>L</b> and <b>R</b>, both end points inclusive, should be increased by <b>X</b> (if <b>X</b> is negative then their height is decreased).</p>


<h3>Input</h3>
<ul>
<li>First line contains two integers <b>N</b> and <b>Q</b>, denoting the number of hills and number of operations respectively.</li>

<li>Second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the initial heights of the hills.</li>

<li>Each of the next <b>Q</b> lines describes an operation. If the first integer is equal to 1, it means that the operation is of Type 1, and it will be followed by two integers <b>i</b> and <b>k</b>. Otherwise the first number will be equal to 2, and it means that the operation is of Type 2, and so it will be followed by three integers <b>L</b>, <b>R</b> and <b>X</b>.</li>
</ul>


<h3>Output</h3>
<p>For each operation of Type 1, output the index of the hill in which the participant will finish.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N, Q</b> ≤ 100,000</li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 1,000,000</li>
<li>1 ≤ <b>L</b> ≤ <b>R</b> ≤ N</li>
<li>-1,000,000 ≤ <b>X</b> ≤ 1,000,000</li>
<li>1 ≤ <b>i</b>, <b>k</b> ≤ N</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1</b> (20 points) : 1 ≤ <b>N, Q</b> ≤ 1,000 </li>
<li><b>Subtask 2</b> (80 points) : Original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
5 3
1 2 3 4 5
1 1 2
2 3 4 -1
1 1 2

<b>Output:</b>
3
4
</pre>

<h3>Explanation</h3>
<p>The initial heights are (1, 2, 3, 4, 5). The first operation is of Type 1 and starts from Hill 1 and wants to jump twice. The first jump will be to Hill 2, and the second jump will be to Hill 3. Hence the output for this is 3.</p>
<p>The second operation changes the heights to (1, 2, 2, 3, 5).</p>
<p>The last operation starts from Hill 1. The first jump is to Hill 2. But the next jump will skip Hill 3 (because it's height is not strictly greater than the current hill's height), and will go to Hill 4. Hence the output is 4.</p>