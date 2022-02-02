---
{"category_name":"easy","problem_code":"MFREQ","problem_name":"Most Frequent Element","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kevind","problem_tester":null,"date_added":"7-02-2017","tags":{"0":"kevind"},"time":{"view_start_date":1487496600,"submit_start_date":1487496600,"visible_start_date":1487496600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/mandarin/MAKETRI.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/russian/MAKETRI.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/vietnamese/MAKETRI.pdf">Vietnamese</a> as well.</h3>

<p><br>
Given an array of size <b>n</b>, you have to answer queries of the form :  <b>L R k </b>. For each query, you have to find an element which occurs <b>consecutively</b> in the subarray <b>[L,R]</b> more than or equal to <b>k</b> times. <b>k</b> will always be greater than<b> floor((R-L+1)/2)</b>. If no such element exists, print -1.
</p>

<h3>Input</h3>
<p>First line of the input contains 2 space separated <b>N</b> and <b>M</b>, denoting the size of the array and the number of queries. </p>
<p>The next line contains <b>N</b> space separated integers, where the <b>i</b>-th integer <b>A<sub>i</sub></b> denotes the <b>ith</b> element of the array.</p>
<p>Each of the next M lines contains 3 integers space separated integers <b>L, R and k</b>.</p>


<h3>Output</h3>
<p>Output M lines where each line contains the answer to the <b>i</b>-th query.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, M</b><b> ≤ 10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b></li>
<li><b>floor((R-L+1)/2)</b> < <b>k</b> ≤ <b>R-L+1</b></li>    
<li><b>0</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>

<h3>Subtasks</h3>
<p>
<b>Subtask #1 (10 points):</b>
<ul>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>3</b></li> 
<li><b>1</b> ≤ <b>M</b> ≤ <b>10</b></li>    
</ul>
</p>

<p>
<b>Subtask #2 (30 points):</b>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
</ul> 
</p>

<p>
<b>Subtask #3 (60 points):</b>
<ul>
<li><b>No other constraints</b></li>
</ul> 
</p>


<h3>Example</h3>
<pre><b>Input:</b>
<tt>5 1
1 2 2 2 2
1 5 3
</tt>

<b>Output:</b>
<tt>2</tt>
</pre>

<h3>Explanation</h3>
<p>The element 2 occurs more than 3 times in the range [1,5].</p>