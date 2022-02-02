---
{"category_name":"easy","problem_code":"PPTEST","problem_name":"Polo the Penguin and the Test","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"rustinpiece","date_added":"23-09-2013","tags":{"0":"cook39","1":"dynamic","2":"easy","3":"witua"},"editorial_url":"http://discuss.codechef.com/problems/PPTEST","time":{"view_start_date":1382293800,"submit_start_date":1382293800,"visible_start_date":1382293800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/COOK39/russian/PPTEST.pdf">here</a></h3>
<p>Polo, the Penguin, has a lot of tests tomorrow at the university.</p>
<p>He knows that there are <b>N</b> different questions that will be on the tests. For each question <b>i</b> (<b>i = 1..N</b>), he knows <b>C[i]</b> - the number of tests that will contain this question, <b>P[i]</b> - the number of points that he will get for correctly answering this question on each of tests and <b>T[i]</b> - the amount of time (in minutes) that he needs to spend to learn this question.</p>
<p>Unfortunately, the amount of free time that Polo has is limited to <b>W</b> minutes. Help him to find the maximal possible total number of points he can get for all tests if he studies for no more than <b>W</b> minutes.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains the pair of integers <b>N</b> and <b>W</b>, separated by a space. The following <b>N</b> lines contain three space-separated integers <b>C[i]</b>, <b>P[i]</b> and <b>T[i]</b> (<b>i = 1..N</b>).</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the answer to the corresponding test case.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>C[i], P[i], T[i]</b> ≤ <b>100</b>
</li><li><b>1</b> ≤ <b>W</b> ≤ <b>100</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
3 7
1 2 3
2 3 5
3 3 3

<b>Output:</b>
11
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> The best choice is to learn the first and the third questions and get <b>1*2 + 3*3 = 11</b> points.</p>
<p> </p>
