---
{"category_name":"easy","problem_code":"CHCUBE","problem_name":"Chef and Cube","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":"mugurelionut","date_added":"8-04-2015","tags":{"0":"antoniuk1","1":"cakewalk","2":"implementation","3":"july15"},"editorial_url":"http://discuss.codechef.com/problems/CHCUBE","time":{"view_start_date":1436779800,"submit_start_date":1436779800,"visible_start_date":1436779800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="/download/translated/JULY15/mandarin/CHCUBE.pdf" target="_blank">Mandarin Chinese </a> and <a href="/download/translated/JULY15/russian/CHCUBE.pdf" target="_blank">Russian</a>.</h3>
<p>One day, Chef found a cube which has each of its sides painted in some color out of black, blue, red, green, yellow and orange.</p>
<p>Now he asks you to check if he can choose three sides such that they are pairwise adjacent and painted in the same color.</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</li>
<li>A single line of each test case contains six words denoting the colors of painted sides in the order: front, back, left, right, top and bottom, respectively.</li>
</ul>
<h3>Output</h3>
<p>For each test case, output a single line containing the word "YES" or "NO" (without quotes) corresponding to the answer of the problem.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 50000 </b></li>
<li>Each color will be from the list {"black", "blue", "red", "green", "yellow", "orange"}</li>
</ul>
<h3>Subtasks</h3>
<p><b>Subtask 1: (25 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 12000 </b></li>
<li>For each test case there will be at most three different colors</li>
</ul>
<p> </p>
<p><b>Subtask 2: (75 points)</b></p>
<ul>
<li>Original constraints</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
blue yellow green orange black green
green yellow green orange black green
 
<b>Output:</b>
NO
YES
</pre>
<h3>Explanation</h3>
<p> </p>
<p><b>Example case 1.</b></p>
<p>There are no three sides with the same color.</p>
<p><img alt="explanation" height="300" width="400" src="/download/JULY15/CHCUBE1.jpg" /></p>
<p><b>Example case 2.</b></p>
<p>In this test case, the front, bottom and left sides are green (see picture).</p>
<p><img alt="explanation" height="300" width="400" src="/download/JULY15/CHCUBE2.jpg" /></p>