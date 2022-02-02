---
{"category_name":"school","problem_code":"ELEVSTRS","problem_name":"From heaven to earth","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"melnik","problem_tester":"kingofnumbers","date_added":"17-08-2017","tags":{"0":"cakewalk","1":"cook85","2":"math","3":"melnik"},"editorial_url":"https://discuss.codechef.com/problems/ELEVSTRS","time":{"view_start_date":1503253800,"submit_start_date":1503253800,"visible_start_date":1503253800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK85/mandarin/ELEVSTRS.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK85/russian/ELEVSTRS.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK85/vietnamese/ELEVSTRS.pdf">vietnamese</a> as well.</h3>

<p> </p>

<p>Chef has been working in a restaurant which has <b> N </b> floors. He wants to minimize the time it takes him to go from the <b>N</b>-th floor to ground floor. He can either take the elevator or the stairs. </p>

<p>The stairs are at an angle of <b>45</b> degrees and Chef's velocity is <b>V<sub>1</sub></b> m/s when taking the stairs down. The elevator on the other hand moves with a velocity <b>V<sub>2</sub></b> m/s. Whenever an elevator is called, it always starts from ground floor and goes to <b>N</b>-th floor where it collects Chef (collecting takes no time), it then makes its way down to the ground floor with Chef in it. </p> 

The elevator cross a total distance equal to <b>N</b> meters when going from <b>N</b>-th floor to ground floor or vice versa, while the length of the stairs is <b>sqrt(2) * N</b> because the stairs is at angle <b>45</b> degrees.

<p>Chef has enlisted your help to decide whether he should use stairs or the elevator to minimize his travel time. Can you help him out?</p>



<h3>Input</h3>
<p>The first line contains a single integer <b>T</b>, the number of test cases. Each test case is described by a single line containing three space-separated integers <b>N</b>, <b>V<sub>1</sub></b>, <b>V<sub>2</sub></b>. </p>

<h3>Output</h3>
<p>For each test case, output a single line with string <b>Elevator</b> or <b>Stairs</b>, denoting the answer to the problem.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 1000 </b></li>
<li><b>1</b> ≤ <b>N</b>, <b>V<sub>1</sub></b>, <b>V<sub>2</sub></b> ≤ <b> 100 </b></li>
</ul>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         <p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
5 10 15
2 10 14
7 14 10

<b>Output:</b>
Elevator
Stairs
Stairs
</pre>
<p> </p>
