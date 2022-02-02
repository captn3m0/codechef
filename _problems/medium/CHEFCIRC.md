---
{"category_name":"medium","problem_code":"CHEFCIRC","problem_name":"Chef and Circle","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"iscsi","date_added":"29-12-2016","tags":{"0":"binary","1":"geometry","2":"jan17","3":"line","4":"medium","5":"mgch"},"editorial_url":"https://discuss.codechef.com/problems/CHEFCIRC","time":{"view_start_date":1484731800,"submit_start_date":1484731800,"visible_start_date":1484731800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/mandarin/CHEFCIRC.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/russian/CHEFCIRC.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/vietnamese/CHEFCIRC.pdf">Vietnamese</a> as well.</h3>

<p>You are given <b>N</b> points on 2-D plane. You have to find out minimal radius of a circle which contains at least <b>M</b> of these points. </p>

<h3>Input</h3>
<p>First line of the input contains two space separated integer <b>N</b> and <b>M</b>.</p>
<p>Each of the next <b>N</b> lines contains two space separated real numbers denoting the <b>x</b> and <b>y</b> coordinates of <b>i</b>-th point, i.e. <b>x<sub>i</sub></b>, <b>y<sub>i</sub></b>. These numbers with not contain more than 5 digits after decimal point.

<h3>Output</h3>
<p>Output a single floating point number corresponding to the minimal radius of a circle with at least <b>M</b> of the above points. Your answer will be considered correct iff its absolute error does not exceed more than 10<sup>-2</sup>.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>M</b> ≤ <b>N</b> ≤ 500</li> 
<li>-10<sup>3</sup> ≤ <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b> ≤ 10<sup>3</sup></li> 
</ul>

<h3>Subtasks</h3>
<ul>
 <li><b>Subtask #1 (35 points):</b> 1 ≤ <b>N</b> ≤ 200</li>
 <li><b>Subtask #2 (65 points):</b> 1 ≤ <b>N</b> ≤ 500</li>
</ul>

<h3>Example</h3>
<pre>
 <b>Input:</b>
3 3
-1 -1
0 1
1 -1

<b>Output:</b>
1.250000