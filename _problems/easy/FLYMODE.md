---
{"category_name":"easy","problem_code":"FLYMODE","problem_name":"Fly height mode","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"pkacprzak","problem_tester":null,"date_added":"28-12-2016","tags":{"0":"line","1":"ltime43","2":"pkacprzak","3":"simple","4":"sorting"},"time":{"view_start_date":1483203600,"submit_start_date":1483203600,"visible_start_date":1483203600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME43/mandarin/FLYMODE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME43/russian/FLYMODE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME43/vietnamese/FLYMODE.pdf">Vietnamese</a> as well.</h3>

<p>You like tracking airplane flights a lot. Specifically, you maintain history of an airplane’s flight at several instants and record them in your notebook. Today, you have recorded <b>N</b> such records <b>h<sub>1</sub>, h<sub>2</sub>, ..., h<sub>N</sub></b>, denoting the heights of some airplane at several instants. These records mean that airplane was first flying on height <b>h<sub>1</sub></b>, then started changing its height to <b>h<sub>2</sub></b>, then from <b>h<sub>2</sub></b> to <b>h<sub>3</sub></b> and so on. The airplanes are usually on cruise control while descending or ascending, so 
you can assume that plane will smoothly increase/decrease its height from <b>h<sub>i</sub></b> to <b>h<sub>i + 1</sub></b> with a constant speed. You can see that during this period, the airplane will cover all possible heights in the range <b>[min(h<sub>i</sub>, h<sub>i+1</sub>), max(h<sub>i</sub>, h<sub>i+1</sub>)]</b> (both inclusive). It is easy to see that the plane will be at all possible heights in the range exactly a single instant of time during this ascend/descend.
</p>

<p>You are interested in finding the maximum integer <b>K</b> such that the plane was at some height exactly <b>K</b> times during the flight.</p>


<h3>Input</h3>
<p>There is a single test case.</p>
<p>First line of the input contains an integer <b>N</b> denoting the number of records of heights of the plane.</p>
<p>Second line contains <b>N</b> space separated integers denoting <b>h<sub>1</sub>, h<sub>2</sub>, ..., h<sub>N</sub></b>.</p>

<h3>Output</h3>
<p>Output a single maximum integer <b>K</b> in one line, such that the plane was at some height exactly <b>K</b> times during the flight.</p>
</p>

<h3>Constraints</h3>
<ul>
<li><b>h<sub>i</sub> ≠ h<sub>i+1</sub></b></li>
</ul>

<h3>Subtasks</h3>
<p>
<b>Subtask #1: (30 points)</b>
<ul>
<li><b>1 ≤ N ≤ 1000</b></li>
<li><b>1 ≤ h<sub>i</sub> ≤ 1000</b></li>
</ul>
</p>

<p>
<b>Subtask #2: (70 points)</b>
<ul>
<li><b>1 ≤ N ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ h<sub>i</sub> ≤ 10<sup>9</sup></b></li>
</ul>
</p>


<h3>Example</h3>
<pre><b>Input:</b>
5
1 2 3 2 3

<b>Output:</b>
3
</pre>

<h3>Explanation</h3>
<p>
The flight can be draw as:
</p>

<pre>
3  /\/
2 /
1
</pre>

<p>
There are infinitely many heights at which the plane was 3 times during the flight, for example 2.5, 2.1. Notice that the plane was only 2 times at height 2. Moreover, there are no height at which the plane was more than 3 times, so the answer is 3.
</p>