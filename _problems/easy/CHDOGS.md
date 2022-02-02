---
{"category_name":"easy","problem_code":"CHDOGS","problem_name":"Chef and Three Dogs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":"alex_2oo8","date_added":"12-02-2016","tags":{"0":"antoniuk1","1":"oct16","2":"simple","3":"symmetry","4":"trigonometry"},"editorial_url":"http://discuss.codechef.com/problems/CHDOGS","time":{"view_start_date":1476696600,"submit_start_date":1476696600,"visible_start_date":1476696600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/mandarin/CHDOGS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/russian/CHDOGS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/vietnamese/CHDOGS.pdf">Vietnamese</a> as well.</h3>

<p>Chef has three dogs sitting at the vertices of an equilateral triangle. The length of each side of the triangle equals to <b>s</b> meters. Chef gives the command "Start!" and each dog starts to run with constant speed <b>v</b> meters per second. At each moment, each dog is running towards the dog just right to him (in counter-clockwise direction). Therefore, their trajectories are forming some spirals that converging to one point as illustrated below.</p>

<p>
<img src="https://s3.amazonaws.com/codechef_shared/download/upload/mice3.gif" style="width:150px;height:130px;">
</p>

<p>How long does it takes dogs to meet each other after the command "Start!"?  </p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The only line of each test case contains two space-separated integers <b>s</b> and <b>v</b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing a real number corresponding to the answer of the problem. The answer will be considered correct if its absolute or relative error does not exceed 10<sup>-6</sup>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>s, v</b> ≤ <b>10<sup>9</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (40 points): <b>1</b> ≤ <b>s, v</b> ≤ <b>10</b></li>
<li>Subtask #2 (60 points): <b>original constraints</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
2 5
1 1000000000

<b>Output:</b>
0.266667
0.0000001
</pre>

<h3>Explanation</h3>
<p>Due to the triangle being very small, but the dogs running extremely fast, they will meet after less than 1e-6 seconds. Thus, due to remark about absolute or relative error in the output section, any answer within [0, 1e-6] will be considered correct.</p>