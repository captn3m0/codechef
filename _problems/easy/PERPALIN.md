---
{"category_name":"easy","problem_code":"PERPALIN","problem_name":"Periodic Palindrome Construction","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"27-10-2017","tags":{"0":"admin2","1":"nov17","2":"simple"},"editorial_url":"https://discuss.codechef.com/problems/PERPALIN","time":{"view_start_date":1510579800,"submit_start_date":1510579800,"visible_start_date":1510579800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/mandarin/PERPALIN.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/russian/PERPALIN.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/vietnamese/PERPALIN.pdf">Vietnamese</a> as well.</h3>


<p>Chef recently learned about concept of periodicity of strings. A string is said to have a period <b>P</b>, if <b>P</b> divides <b>N</b> and for each i, the i-th of character of the string is same as <b>i-P</b><sup>th</sup> character (provided it exists), e.g. "abab" has a period <b>P = 2</b>, It also has a period of <b>P = 4</b>, but it doesn't have a period of 1 or 3.</p>

<p>Chef wants to construct a string of length <b>N</b> that is a palindrome and has a period <b>P</b>. It's guaranteed that <b>N</b> is divisible by <b>P</b>. This string can only contain character 'a' or 'b'. Chef doesn't like the strings that contain all a's or all b's.</p>

<p>Given the values of <b>N, P</b>, can you construct one such palindromic string that Chef likes? If it's impossible to do so, output "impossible" (without quotes)</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>The only line of each test case contains two space separated integers <b>N, P</b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the answer of the problem, i.e. the valid string if it exists otherwise "impossible"  (without quotes). If there are more than possible answers, you can output any.</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 20</b></li>
<li><b>1 ≤ P, N ≤ 10<sup>5</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1</b> (25 points) : <b>P = N</b></li>
<li><b>Subtask #2</b> (75 points) : No additional constraints</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
5
3 1
2 2
3 3
4 4
6 3

<b>Output</b>
impossible
impossible
aba
abba
abaaba
</pre>

<h3>Explanation</h3>
<p><b>Example 1</b>: The only strings possible are either aaa or bbb, which Chef doesn't like. So, the answer is impossible.</p>
<p><b>Example 2</b>: There are four possible strings, aa, ab, ba, bb. Only aa and bb are palindromic, but Chef doesn't like these strings. Hence, the answer is impossible.</p>
<p><b>Example 4</b>: The string abba is a palindrome and has a period of 4.</p>
<p><b>Example 5</b>: The string abaaba is a palindrome and has a period of length 3.</p>