---
{"category_name":"easy","problem_code":"CLOST","problem_name":"Churu and lost string","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"amitpandeykgp","problem_tester":"minimario","date_added":"2-08-2015","tags":{"0":"amitpandeykgp","1":"dynamic","2":"greedy","3":"ltime27","4":"medium","5":"sorting"},"editorial_url":"http://discuss.codechef.com/problems/CLOST","time":{"view_start_date":1440923400,"submit_start_date":1440923400,"visible_start_date":1440923400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME27/mandarin/CLOST.pdf">Mandarin Chinese </a> , <a target="_blank" href="http://www.codechef.com/download/translated/LTIME27/russian/CLOST.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME27/vietnamese/CLOST.pdf">Vietnamese</a></h3>


<p>
Churu is taking the course called “Introduction to Data Structures”. Yesterday, he learned how to use a stack to check is a given parentheses expression is balanced or not. He finds it intriguing, and more importantly, he was given an assignment. The professor gave him a string <b>S</b> containing characters “(” and “)”, and asked him numerous queries of the form <b>(x, y)</b>, i.e., if the substring <b>S[x, y]</b> represents a balanced parentheses expression or not. Here, <b>S[x, y]</b> refers to the substring of <b>S</b> from index <b>x</b> to <b>y</b> (both inclusive), assuming 0-based indexing. Diligently working through his assignment, our ace student Churu finds that all the queries given by the professor represented balanced substrings. Later, Churu lost his original string but he has all the queries. 
</p>
<p>
Churu wants to restore his original string. As there can be many valid strings, print any one among them.
</p>

<h3>Input</h3>
<ul>
<li>First line of input contains an integer <b>T</b> denoting the number of test cases.</li>
<li>First line of each of test case contains two space-separated integers: <b>N</b>, <b>K</b> representing the length of the string and number of queries asked by professor, respectively.</li>
<li>Each of the next <b>K</b> lines contains a space-separated pair of integers: <b>x</b> and <b>y</b>, denoting a query.</li>
</ul>

<h3>Output</h3>
Print <b>T</b> lines, with the <b>i</b><sup>th</sup> one containing the solution string for the <b>i</b><sup>th</sup> test case.

<h3>Constraints</h3>
<p>
<b>Subtask #1: 20 points</b>
<ul>
	<li><b>1 ≤ T  ≤ 5, 2 ≤ N ≤ 16, 1 ≤ K ≤ 20,  x ≤ y</b></li>
</ul>
</p>
<p>
<b>Subtask #2: 80 points</b>
<ul>
	<li><b>1 ≤ T  ≤ 5,  2 ≤ N ≤ 2000, 1 ≤ K ≤ 30,  x ≤ y</b></li>
</ul>
</p>
<pre><b>Input:</b>
2
4 1
0 3
4 2
0 3
1 2

<b>Output:</b>
()()
(())
</pre>
</p>

<h3>Explanation</h3>
<p>
For the first sample case, "(())" are "()()" are two possible outputs. Printing anyone will do. 
</p>