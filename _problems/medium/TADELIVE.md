---
{"category_name":"medium","problem_code":"TADELIVE","problem_name":"Delivery Man","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":"stzgd","date_added":"6-12-2014","tags":{"0":"dynamic","1":"greedy","2":"ltime19","3":"simple","4":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/TADELIVE","time":{"view_start_date":1419755400,"submit_start_date":1419755400,"visible_start_date":1419755400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME19/mandarin/TADELIVE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME19/russian/TADELIVE.pdf">Russian</a>.</h3>


<p>Andy and Bob are the only two delivery men of Pizza-chef store. Today, the store received <b>N</b> orders. 
It's known that the amount of tips may be different when handled by different delivery man. 
More specifically, if Andy takes the <b>i</b><sup>th</sup> order, he would be tipped <b>A<sub>i</sub></b> dollars and if Bob takes this order, 
the tip would be <b>B<sub>i</sub></b> dollars. 
</p>
<p>
They decided that they would distribute the orders among themselves to maximize the total tip money. One order will be handled by only
one person. Also, due to time constraints Andy cannot take more than <b>X</b> orders and Bob cannot take more than 
<b>Y</b> orders. It is guaranteed that <b>X</b> + <b>Y</b> is greater than or equal to <b>N</b>, which means that all the orders can be handled 
by either Andy or Bob.
</p>	

<p>
Please find out the maximum possible amount of total tip money after processing all the orders.
</p>

<h3>Input</h3>
<ul>
  <li>The first line contains three integers <b>N</b>, <b>X</b>, <b>Y</b>.</li>
  <li>The second line contains <b>N</b> integers. The <b>i</b><sup>th</sup> integer represents <b>A<sub>i</sub></b>.</li>
  <li>The third line contains <b>N</b> integers. The <b>i</b><sup>th</sup> integer represents <b>B<sub>i</sub></b>.</li>
</ul>

<h3>Output</h3>
<ul>
  <li>Print a single integer representing the maximum tip money they would receive.</li>
</ul>

<h3>Constraints</h3>

<b>All test:</b>
<p>
<ul>
  <li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sub></b></li>
  <li><b>1</b> ≤ <b>X</b>, <b>Y</b> ≤ <b>N</b>; <b>X</b> + <b>Y</b> ≥ <b>N</b> </li>
  <li><b>1</b> ≤ <b>A<sub>i</sub></b>, <b>B<sub>i</sub></b> ≤ <b>10<sup>4</sup></b></li>
</ul>
</p>

<p>
<b>10 points:</b>
<ul>
  <li><b>1</b> ≤ <b>N</b> ≤ <b>20</b></li>
</ul>
</p>
<p>
<b>30 points:</b>
<ul>
  <li><b>1</b> ≤ <b>N</b> ≤ <b>5000</b></li>
</ul>
</p>

<b>60 points:</b>
<ul>
  <li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sub></b></li>
</ul>

<h3>Example</h3>

<pre><b>Input:</b>
5 3 3
1 2 3 4 5
5 4 3 2 1

<b>Output:</b>
21
</pre>

<h3>Explanation</h3>
<p>Bob will take the first three orders (or the first two) and Andy will take the rest (of course).</p>