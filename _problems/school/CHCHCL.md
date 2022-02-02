---
{"category_name":"school","problem_code":"CHCHCL","problem_name":"Chef and Chocolate","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":"xcwgf666","date_added":"13-02-2016","tags":{"0":"antoniuk1","1":"aug16","2":"cakewalk"},"editorial_url":"http://discuss.codechef.com/problems/CHCHCL","time":{"view_start_date":1471253400,"submit_start_date":1471253400,"visible_start_date":1471253400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/mandarin/CHCHCL.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/russian/CHCHCL.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/vietnamese/CHCHCL.pdf">Vietnamese</a> as well.</h3>

<p>Chef has a standard chocolate of <b>n</b> by <b>m</b> pieces. More formally, chocolate is a rectangular plate consisting of <b>n</b> rows and <b>m</b> columns. </p>
<p>Here you can see an example of a standard 5 by 7 chocolate.  </p>

<div style="text-align:center">
<img src="https://s3.amazonaws.com/codechef_shared/download/upload/AUG16/choco.jpg"  width="215" height="135">
</div>
</p>

<p>He has two friends and they will play with this chocolate. First friend takes the chocolate and cuts it into two parts by making either a horizontal or vertical cut. Then, the second friend takes one of the available pieces and divides into two parts by either making a horizontal or vertical cut. Then the turn of first friend comes and he can pick any block of the available chocolates and do the same thing again. The player who cannot make a turn loses. </p>

<p>Now Chef is interested in finding which of his friends will win if both of them play optimally. Output <tt>"Yes"</tt>, if the friend who plays first will win, otherwise print <tt>"No"</tt>.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The only line of each test case contains two space separated integers <b>n</b> and <b>m</b> - the sizes of the chocolate.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing one word <tt>"Yes"</tt> (without quotes) if there is a sequence of moves leading to the winning of the person who moves first and <tt>"No"</tt> (without quotes) otherwise.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>n, m</b> ≤ <b>10<sup>9</sup></b></li>
</ul>

<h3>Subtasks</h3>
<b>Subtask #1 (10 points):</b>
<ul>
<li><b>1 ≤ <b>n</b>, <b>m</b> ≤ 10</b></li>
</ul> </br>

<b>Subtask #2 (30 points):</b>
<ul>
<li><b>n</b> = <b>1</b> or <b>m</b> = <b>1</b></li>
</ul> </br> 

<b>Subtask #3 (60 points): </b> No additional constraints</b>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
1 2
1 3</tt>

<b>Output:</b>
<tt>Yes
No</tt>
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> There is only one possible move, so the second player even won't have a chance to make move.</p>
<p><b>Example case 2.</b> There are only two ways first player can make first move, after each of them only one move left, so the first player cannot win.</p>