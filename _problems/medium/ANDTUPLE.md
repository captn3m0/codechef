---
{"category_name":"medium","problem_code":"ANDTUPLE","problem_name":"And Tuples","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"piyushkumar","problem_tester":"xiaodao","date_added":"1-10-2014","tags":{"0":"bit","1":"dynamic","2":"easy","3":"ltime17","4":"memoization","5":"piyushkumar","6":"recursion"},"editorial_url":"http://discuss.codechef.com/problems/ANDTUPLE","time":{"view_start_date":1414312200,"submit_start_date":1414312200,"visible_start_date":1414312200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME17/mandarin/ANDTUPLE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME17/russian/ANDTUPLE.pdf">Russian</a>.</h3>
<p>A pair of non-negative integers (A,B) is called <i>and-pair</i> if <b>A &amp; B = B</b>, i.e., bitwise-and of A and B is equal to B. Similarly, a tuple of K non-negative integers (A<sub>1</sub>,A<sub>2</sub>,A<sub>3</sub> .. A<sub>K</sub>) is called <i>and-tuple</i> if <b>A<sub>i</sub> &amp; A<sub>i+1</sub> = A<sub>i+1</sub></b> for 1≤i≤K-1.</p>
<p>Given two integers <b>N</b> and <b>K</b>, how many <i>and-tuples</i> of size K exist such that the sum of the elements of the tuple is N?</p>
<h3>Input</h3>
<p>First line contains <b>T</b>, the number of testcases, then T lines follow. Each of the following lines contain two space-separated integers K and N.<br />
<h3>Output</h3>
</p><p>For each testcase, print a single line containing the answer. Since the number can be quite large, print the answer modulo <b>1000000009</b>.<br />
<h3>Constraints</h3>
<ul>
<pre><li><b>For 20 points: </b>1 ≤ T ≤ 10000, K = 3, 1 ≤ N ≤ 10<sup>18</sup><br /></li><li><b>For 80 points: </b>1 ≤ T ≤ 10000, 3 ≤ K ≤ 4, 1 ≤ N ≤ 10<sup>18</sup></li></pre></ul>
<h3>Example</h3>
</p><p><b>Input:</b></p>
<pre>2<br />3 2<br />4 2<br /></pre><p><br /><b>Output:</b></p>
<pre>2<br />2<br /></pre><p><br /><b>Explanation:</b>
<ul>
<li>In the first case, the two <i>and-tuples</i> are (2,0,0) and (1,1,0).
</li><li>In the second case they are (2,0,0,0) and (1,1,0,0).</li></ul>
</p>