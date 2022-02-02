---
{"category_name":"easy","problem_code":"EGRCAKE","problem_name":"Chef and cakes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"egor_bobyk","problem_tester":"iscsi","date_added":"20-09-2015","tags":{"0":"egor_bobyk","1":"gcd","2":"nov15","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/EGRCAKE","time":{"view_start_date":1447666200,"submit_start_date":1447666200,"visible_start_date":1447666200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/mandarin/EGRCAKE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/russian/EGRCAKE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/vietnamese/EGRCAKE.pdf">Vietnamese</a> as well.</h3>
<p>Chef has bought <b>N</b> robots to transport cakes for a large community wedding. He has assigned unique indices, from 1 to <b>N</b>, to each of them. How it will happen?</p>
<p>Chef arranges the <b>N</b> robots in a row, in the (increasing) order of their indices. Then, he chooses the first <b>M</b> robots and moves them to the end of the queue. Now, Chef goes to the robot at the first position in the row and hands it one cake. He then notes this robot's index (say k) in his notebook, and goes to the k<sup>th</sup> position in the row. If the robot at this position does not have a cake, he give him one cake, notes his index in his notebook, and continues the same process. If a robot visited by Chef already has a cake with it, then he stops moving and the cake assignment process is stopped.</p>
<p>Chef will be satisfied if all robots have a cake in the end. In order to prepare the kitchen staff for Chef's wrath (or happiness :) ), you must find out if he will be satisfied or not? If not, you have to find out how much robots have a cake, so that the kitchen staff can prepare themselves accordingly.</p>
<h3>Input</h3>
<ul>
<li>The first line of input contains a single integer <b>T</b> denoting the number of test cases.</li>
<li>The single line of each test cases contains two space separated integers <b>N</b> and <b>M</b>.</li>
</ul>
<h3>Output</h3>
<p>For each of the <b>T</b> test cases, output a single line:</p>
<ul>
<li>If all <b>N</b> robots have a cake, output <b>"Yes"</b> (without quotes).</li>
<li>Otherwise, output <b>"No"</b> (without quotes) followed by a space and the <b>number of robots</b> which have a cake.</li>
</ul>
<h3>Constraints and Subtasks</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>0</b> ≤ <b>M</b> &lt; <b>N</b></li>
</ul>
<p><b>Subtask 1: 25 points</b></p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^5</b></li>
</ul>
<p><b>Subtask 3: 75 points</b></p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^9</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
2 0
2 1
4 2

<b>Output:</b>
No 1
Yes
No 2

</pre><h3>Explanation</h3>
<p>In test case 1, we have two robots indexed 1 and 2. They are arranged as (1 2). Chef goes to the first robot, gives him a cake, and moves to position 1. In the next step, he sees that robot at this position already has a has cake. So Chef stops moving, and our <b>answer</b> is <b>"No 1"</b>.</p>
<p>In test case 2, we again have two robots indexed 1 and 2. Initially, they are arranged as (1 2). Then, Chef moves robot#1 to the end of the row, and thus the arrangement becomes (2 1). Chef goes to the robot at the first position, which is robot#2. Chef hands him a cake, and moves to position 2. Then, he hands a cake to robot#1 at position 2, and moves back to the first position. Since, robot#2 at the first position already ahs a cake, Chef stops moving. All <b>N</b> robots have cakes, so Chef is satisfied, and our <b>answer</b> is <b>"Yes"</b>.</p>
<p>In the 3<sup>rd</sup> test case, we have the following arrangement of robots: (3 4 1 2). Only robots with indices 3 and 1 will get cakes. So our <b>answer</b> is <b>"No 2"</b>.</p>
