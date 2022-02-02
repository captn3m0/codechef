---
{"category_name":"hard","problem_code":"WAYPA","problem_name":"Trip and Palindromes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"gomelfk","problem_tester":"xcwgf666","date_added":"1-11-2015","tags":{"0":"binary","1":"centroid","2":"dec15","3":"gomelfk","4":"hard","5":"hashing"},"editorial_url":"http://discuss.codechef.com/problems/WAYPA","time":{"view_start_date":1450085400,"submit_start_date":1450085400,"visible_start_date":1450085400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/mandarin/WAYPA.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/russian/WAYPA.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/vietnamese/WAYPA.pdf">Vietnamese</a> as well.</h3>


<p>Serega is an avid traveller. He has already visited numerous exotic places, and now wants to embark on a journey to Treeland. There are <b>N</b> cities in Treeland that Serega wants to visit. Also, roads have been laid between some <b>N-1</b> pairs of cities in Treeland. Roads are bidirectional, and there exists a unique path between any two Treeland cities.
</p>
<p>Each of Treeland's roads has its own class, wich is specified using a single digit. Serega's journey is a path between some cities, i.e. he never visits one city more than once. But Serega wants to select a path such that the sequence of classes on the path is a palindrome. Of course, Serega wants to visit as many cities as possible. Please help Him.
</p>


<h3>Input</h3>
The first line of input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.
<p>The first line of each case contains a single integer <b>N</b>. The next <b>N-1</b> lines contain the roads. Each line contains three integers <b>v</b>, <b>u</b> and <b>c</b>, meaning that there is a road of class <b>c</b> between the <b>v</b><sup>th</sup> and <b>u</b><sup>th</sup> (assuming 1-indexing) cities of Treeland.</p>

<h3>Output</h3>
<p>For each test case, you should output the maximum number of cities that Serega can visit.</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 3*10<sup>5</sup></b></li>
<li><b>1 ≤ N ≤ 10<sup>5</sup></b></li>
<li>Sum of N over all test cases in a single file will not be greater then <b>3*10<sup>5</sup></b></li>
<li><b>0 ≤ c ≤ 9</b></li>
<li><b>1 ≤ u, v ≤ N</b></li>
<li>The roads form a tree.</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (15 points): <b>1 ≤ N ≤ 10<sup>2</sup></b> </li>
<li>Subtask #2: (85 points): <b>1 ≤ N ≤ 10<sup>5</sup></b> </li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
8
1 2 1
1 3 0
3 4 1
4 5 2
1 6 0
6 7 1
7 8 2

<b>Output:</b>
7
</pre>
<p> </p>
<h3>Explanation</h3>
<p>Sequence of classes on the path between the cities <b>5</b> and <b>8</b> is <b>210012</b>.</p>