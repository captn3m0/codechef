---
{"category_name":"easy","problem_code":"ORACLCS","problem_name":"Oracle Devu and Longest Common Subsequence","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"xcwgf666","date_added":"3-10-2015","tags":{"0":"admin2","1":"dec15","2":"lcs","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/ORACLCS","time":{"view_start_date":1450085400,"submit_start_date":1450085400,"visible_start_date":1450085400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/mandarin/ORACLCS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/russian/ORACLCS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/vietnamese/ORACLCS.pdf">Vietnamese</a> as well.</h3>


<p>
Devu is a disastrous oracle: his predictions about various events of your life are horrifying. Instead of providing good luck, he "blesses" you with bad luck. The secret behind his wickedness is a hidden omen which is a string of length <b>m</b>. On your visit to him, you can ask a lot of questions about your future, each of which should be a string of length <b>m</b>. In total you asked him <b>n</b> such questions, denoted by strings <b>s<sub>1</sub></b>, <b>s<sub>2</sub></b>, ... , <b>s<sub>n</sub></b> of length <b>m</b> each. Each of the question strings is composed of the characters 'a' and 'b' only.
</p>

<p>
Amount of bad luck this visit will bring you is equal to the length of longest common subsequence (<a href="https://en.wikipedia.org/wiki/Longest_common_subsequence_problem">LCS</a>) of all the question strings and the hidden omen string. Of course, as the omen string is hidden, you are wondering what could be the least value of bad luck you can get.
</p>

<p>
Can you find out what could be the least bad luck you can get? Find it fast, before Devu tells you any bad omens.
</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>First line of each test case contains a single integer <b>n</b> denoting number of strings.</p>
<p>For each of next <b>n</b> lines, the <b>i</b><sup>th</sup> line contains the string <b>s<sub>i</sub></b>.</p>

<h3>Output</h3>
For each test case, output a single integer corresponding to the answer of the problem. 

<p>
<h3>Constraints</h3>
<ul>
<li>All the strings (including the hidden omen) contain the characters 'a' and 'b' only.</li>
</ul>
</p>

<p>
<b> Subtask #1:</b> (40 points) </br>
<ul>
<li><b>1</b> ≤ <b>T, n, m</b> ≤ <b>14</b></li>
</ul>
</p>

<p>
<b> Subtask #2:</b> (60 points) </br>
<ul>
<li><b>1</b> ≤ <b>T, n, m</b> ≤ <b>100</b></li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>3
2
ab
ba
2
aa
bb
3
aabb
abab
baab</tt>

<b>Output:</b>
<tt>1
0
2</tt>
</pre>

<h3>Explanation</h3>
<p><b>In the first example</b>, the minimum value of LCS of all the strings is 1, the string by oracle can be one of these {aa, ab, ba, bb}. 
</p>

<p><b>In the second example</b>, whatever string oracle has does not matter, LCS will always be zero.  
</p>