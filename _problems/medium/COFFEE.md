---
{"category_name":"medium","problem_code":"COFFEE","problem_name":"Coffee Breaks","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"logic_iu","date_added":"23-08-2015","tags":{"0":"dynamic","1":"ltime28","2":"medium","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/COFFEE","time":{"view_start_date":1440923400,"submit_start_date":1440923400,"visible_start_date":1440923400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME28/mandarin/COFFEE.pdf">Mandarin Chinese </a> , <a target="_blank" href="http://www.codechef.com/download/translated/LTIME28/russian/COFFEE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME28/vietnamese/COFFEE.pdf">Vietnamese</a></h3>


<p>Sergey works as a programmer. Like all programmers, he is a coffee fan. He likes coffee so much that has <b>K</b> cups of coffee daily. However, having more than <b>K</b> cups doesn't suit him, because the excess caffeine won't allow him to sleep at night.</p>

<p>Sergey's working day is divided into <b>N</b> periods. For every period, he knows how many kilobytes of code he can produce.</p>

<p>During each of the periods, Sergey can either have or not to have one cup of coffee. If he is having a cup of coffee in some period, the amount of code he writes in this period drops to zero. But he also gets a productivity boost — if he decides to skip coffee during a period and the last cup of coffee he had was no more than <b>D</b> periods ago, the amount of code he writes during such a period is <b>M</b> times the usual.</p>

<p>As his productivity advisor (congrats on your new job!), help Sergey plan his coffee breaks optimally. Please find the maximum number of lines of code he can write, provided that he has <b>exactly K</b> coffee breaks during the day.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>The first line of each test case contains four space separated integers <b>N</b>, <b>K</b>, <b>D</b> and <b>M</b> denoting the number of the working periods, the number of coffee-breaks and two more parameters as described in the statement.</p> 

<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ... , <b>A<sub>N</sub></b> denoting the number of kilobytes of code that Sergey writes during each period.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the maximum number of kilobytes of code that Sergey can produce if he takes <b>exactly K</b> coffee breaks.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>200</b></li>
<li>In subtasks <b>1-3</b> it holds that <b>1</b> ≤ sum of all <b>N</b> over the test case ≤ <b>1000</b></li>
<li>Subtask 1 (15 points): <b>K</b> = <b>1</b>, <b>1</b> ≤ <b>D</b> < <b>N</b> ≤ <b>18</b></li>
<li>Subtask 2 (25 points): <b>1</b> ≤ <b>K</b>, <b>D</b> < <b>N</b> ≤ <b>18</b></li>
<li>Subtask 3 (30 points): <b>1</b> ≤ <b>K, D</b> < <b>N</b> ≤ <b>200</b></li>
<li>Subtask 4 (30 points): <b>1</b> ≤ <b>K, D</b> < <b>N</b> ≤ <b>5000</b>, <b>1</b> ≤ sum of all <b>N</b> over the test case ≤ <b>5000</b></li>
<li><b>1</b> ≤ <b>M, A<sub>i</sub></b> ≤ <b>1000</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>1
5 2 2 10
1 2 3 4 5</tt>

<b>Output:</b>
<tt>110</tt>

</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> Sergey will have coffee during the periods numbered <b>1</b> and <b>3</b>. In these periods, the amount of code he produces will be zero, but during the rest, his code production quantities will get multiplied by <b>10</b>. Thus, we will write <b>(2 + 4 + 5) * 10</b> KB of code.</p>