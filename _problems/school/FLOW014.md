---
{"category_name":"school","problem_code":"FLOW014","problem_name":"Grade The Steel","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vicky002","problem_tester":null,"date_added":"27-04-2015","tags":{"0":"vicky002"},"time":{"view_start_date":1436519986,"submit_start_date":1436519986,"visible_start_date":1436519986,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
A certain grade of steel is graded according to the following conditions.</p>
<li>Hardness must be greater than 50.</li>
<li>Carbon content must be less than 0.7. </li>
<li>Tensile strength must be greater than 5600. </li>
<p><br/><br/><br />
The grades are as follows:</br/></br/></p>
<li>Grade is 10 if all three conditions are met. </li>
<li>Grade is 9 if conditions (i) and (ii) are met. </li>
<li>Grade is 8 if conditions (ii) and (iii) are met. </li>
<li>Grade is 7 if conditions (i) and (iii) are met. </li>
<li>Garde is 6 if only one condition is met. </li>
<li>Grade is 5 if none of three conditions are met. </li>
<p> <br/><br />
Write a program, if the user gives values of hardness, carbon content and tensile strength of the steel under consideration and display the grade of the steel.
</br/></p>
<h3>Input</h3>
<p>
The first line contains an integer <b>T</b>, total number of testcases. Then follow <b>T</b> lines, each line contains three numbers <b>hardness</b>, <b>carbon content</b> and <b>tensile strength</b> of the steel.
</p>
<h3>Output</h3>
<p>Print Grade of the steel depending on Conditions.</p>
<h3>Constraints</h3>
<ul>
<li>1 <b>≤</b> <b>T</b> <b>≤</b> 1000</li>
<li>1<b>≤</b> <b>hardness, carbon content, tensile strength</b> <b>≤</b> 10000</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input</b>

3 
53 0.6 5602
45 0 4500
0 0 0 
<b>Output</b>

10
6
6
</pre>