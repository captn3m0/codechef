---
{"category_name":"easy","problem_code":"CHEFTMA","problem_name":"Chef and Time Machine","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"antoniuk1","date_added":"8-12-2015","tags":{"0":"berezin","1":"greedy","2":"jan16","3":"simple","4":"stl"},"editorial_url":"http://discuss.codechef.com/problems/CHEFTMA","time":{"view_start_date":1452504600,"submit_start_date":1452504600,"visible_start_date":1452504600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/mandarin/CHEFTMA.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/russian/CHEFTMA.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/vietnamese/CHEFTMA.pdf">Vietnamese</a> as well.</h3>
<p>Chef spent <b>N</b> days working really hard! He planned loads of tasks: as many as <b>A<sub>i</sub></b> tasks to do on the <b>i<sub>th</sub></b> day! Chef's work was brutal, so he only managed to finish <b>B<sub>i</sub></b> tasks on the <b>i<sub>th</sub></b> day.</p>
<p>The good news is that Chef has a Time Machine! </p>
<p>The Time Machine has <b>K</b> white buttons and <b>M</b> black buttons. Each button has a positive integer printed on it. Now Chef goes through all <b>N</b> days consequently and presses buttons. Each day Chef can only press <b>one</b> button (either white or black). After using a button once, it becomes inactive.</p>
<p>Pressing a white button with integer <b>x</b> printed on it reduces the number of planned tasks on the day it was pressed by exactly <b>x</b>. Note that this white button can only be pressed if number of planned tasks on the day are greater than or equal to x.</p>
<p>Pressing a black button with integer <b>x</b> printed on it increases the number of completed tasks on the day it was pressed by exactly <b>x</b>. Note that this black button can only be pressed if after pressing it, number of completed tasks don't exceed the number of tasks.</p>
<p>Chef is interested in finding the minimum possible amount of <b>total</b> uncompleted tasks he will still be left with after <b>N</b> days using the Machine in the best way?</p>
<p>Be careful! Time is sensitive! Chef <b>cannot</b> make a day when he completed more tasks then planned, as this may result in a more-work-than-planned paradox, killing all lazy people on the planet!</p>
<h3>Input</h3>
<ul>
<li>The first line of input contains a single integer <b>T</b>, denoting the number of test cases. Description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains three integers — <b>N, K, M</b> — denoting the number of days, white and black buttons appropriately.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, … , <b>A<sub>N</sub></b>, denoting the number of planned tasks.</li>
<li>The third line contains <b>N</b> space-separated integers <b>B<sub>1</sub></b>, <b>B<sub>2</sub></b>, … , <b>B<sub>N</sub></b>, denoting the number of completed tasks.</li>
<li>The fourth line contains <b>K</b> space-separated integers <b>C<sub>1</sub></b>, <b>C<sub>2</sub></b>, … , <b>C<sub>K</sub></b>, denoting the integers on white buttons.</li>
<li>The fifth and last line contains <b>M</b> space-separated integers <b>D<sub>1</sub></b>, <b>D<sub>2</sub></b>, … , <b>D<sub>M</sub></b>, denoting the integers on black buttons.</li>
</ul>
<h3>Output</h3>
<ul>
<li>In a single line, output an integer — the minimum possible amount of uncompleted tasks.</li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>4</b></li>
<li><b>1</b> ≤ <b>N, K, M</b> ≤ <b>10^5</b></li>
<li><b>1</b> ≤ <b>B<sub>i</sub></b> ≤ <b>A<sub>i</sub></b>  ≤ <b>10^5</b></li>
<li><b>1</b> ≤ <b>C<sub>i</sub></b>, <b>D<sub>i</sub></b>  ≤ <b>10^5</b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask <b>N</b> ≤ <b>10</b>, <b>K, M</b> ≤ <b>5</b>. Points: <b>30</b> </li>
<li>Subtask <b>Original constraints</b>. Points: <b>70</b> </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
4 2 2 
5 7 6 1
3 3 1 1
6 3
1 4

<b>Output:</b>
3
</pre><h3>Explanation</h3>
<pre><b>Example case 1.</b>
In this example Chef goes through the following steps:
Use black button <b>1</b> on the first day.
Use black button <b>4</b> on the second day.
Use white button <b>3</b> on the third day.
The arrays <b>A</b> and <b>B</b> are now effectively changed to:
5 7 3 1
4 7 1 1
So he will have <b>3</b> uncompleted tasks.</pre>