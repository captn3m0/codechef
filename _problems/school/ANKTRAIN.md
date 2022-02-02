---
{"category_name":"school","problem_code":"ANKTRAIN","problem_name":"Train Partner","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"code_master01","problem_tester":"kevinsogo","date_added":"20-05-2015","tags":{"0":"code_master01"},"time":{"view_start_date":1481535000,"submit_start_date":1481535000,"visible_start_date":1481535000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/mandarin/ANKTRAIN.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/russian/ANKTRAIN.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/vietnamese/ANKTRAIN.pdf">Vietnamese</a> as well.</h3>

<p>Rahul and Rashi are off to the wedding of a close relative. This time they have to travel without their guardians. Rahul got very interested in the arrangement of seats inside the train coach.</p>

<p>The entire coach could be viewed as an arrangement of consecutive blocks of size 8.  
<pre><code>
Berth Number   	Compartment

 1 -  8               1  
 9 - 16               2  
17 - 24               3  
... and so on
</code></pre>
</p>

<p>Each of these size-8 blocks are further arranged as:
<pre><code>
 1LB,  2MB,  3UB,  4LB,  5MB,  6UB,  7SL,  8SU  
 9LB, 10MB, ...
 ...   
 ...
</code></pre>

Here <code>LB</code> denotes lower berth, <code>MB</code> middle berth and <code>UB</code> upper berth.
</p>

<p>The following berths are called <strong>Train-Partners</strong>:</p>
<pre><code>
3UB   |  6UB  
2MB   |  5MB  
1LB   |  4LB  
7SL   |  8SU  
</code></pre>
<p>and the pattern is repeated for every set of 8 berths.</p>

<p>Rahul and Rashi are playing this game of finding the train partner of each berth. Can you write a program to do the same?</p>

<h3>Input</h3>
<p>The first line of input contains a single integer <b>T</b>, denoting the number of test cases to follow.</p>
<p>Each of the next <b>T</b> lines contain a single integer <b>N</b>, the berth number whose neighbor is to be found out.</p>

<h3>Output</h3>
<p>The output should contain exactly <b>T</b> lines each containing the berth of the neighbor of the corresponding seat.</p>

<h3>Constraints</h3>

<h3>Subtasks</h3>
<p>
<b>Subtask #1 (50 points):</b>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>8</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>8</b></li>
</ul> 
</p>

<p>
<b>Subtask #2 (50 points):</b>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>500</b></li>
</ul> 
</p>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>3
1
5
3</tt>

<b>Output:</b>
<tt>4LB
2MB
6UB</tt>
</pre>