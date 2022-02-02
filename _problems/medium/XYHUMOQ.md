---
{"category_name":"medium","problem_code":"XYHUMOQ","problem_name":"A humongous Query","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"include_sajal","problem_tester":null,"date_added":"17-11-2017","tags":{"0":"euclidean","1":"include_sajal","2":"jan18","3":"medium"},"editorial_url":"https://discuss.codechef.com/problems/XYHUMOQ","time":{"view_start_date":1516008600,"submit_start_date":1516008600,"visible_start_date":1516008600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/mandarin/XYHUMOQ.pdf">Mandarin chinese</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/vietnamese/XYHUMOQ.pdf">Vietnamese</a> as well.</h3>


<p>Let's define a <i>10-string</i> as a string that contains only characters '1' and '0', starts with '1' and ends with '0'. For example, <b>"10101010"</b>, <b>"100"</b> or <b>"1010"</b> are 10-strings, while <b>"011"</b>, <b>"11120"</b> or <b>"10101"</b> are not.</p>

<p>A subsequence of any 10-string is called <i>humongous</i> if it is of the form "1010...10" ("10" concatenated an arbitrary number of times).</p>

<p>For example, the 10-string <b>"110"</b> contains exactly 2 humongous subsequences and <b>"1010"</b> contains exactly 4 humongous subsequences (formed using indices <b>{1, 2}</b>, <b>{3, 4}</b>, <b>{1, 4}</b>, <b>{1, 2, 3, 4}</b>).</p>

<p>You should process some really humongous queries. Each query is as follows:
<ul>
<li>You're given a 10-string <b>S</b> and an integer <b>X</b>.</li>
<li>You should convert <b>S</b> into another 10-string <b>U</b> by flipping a number of characters (possibly zero; a flip means changing a '1' to '0' or '0' to '1') of <b>S</b>.</li>
<li>The string <b>U</b> should contain exactly <b>X</b> humongous subsequences.</li>
<li>The answer to the query is the <b>minimum</b> number of flips that need to be performed. If it's impossible to convert <b>S</b> into a valid string <b>U</b>, the answer doesn't exist.</li>
</ul>
</p>

<p>Note that <b>U</b> has to be a 10-string.</p>

<p>For each query, compute the minimum possible number of flips or determine that there is no answer.</p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single string <b>S</b>.</li>
<li>The second line contains a single integer <b>X</b>.</li>
</ul></p>

<h3>Output</h3>
<p>For each test case:
<ul>
<li>If there is no answer, print a single line containing one string <tt>"NO"</tt> (without quotes).</li>
<li>If an answer exists, print two lines.</li>
<li>The first line should contains a single string <tt>"YES"</tt> (without quotes).</li>
<li>The second line should contain a single integer denoting the minimum necessary number of flips.</li>
</ul>
</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>2 ≤ <b>|S|</b> ≤ 32</li>
<li>1 ≤ <b>X</b> ≤ 10<sup>6</sup></li>
<li><b>S</b> will be a 10-string</li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1 (15 points):</b>
<ul>
<li><b>|S|</b> ≤ 20</li>
<li><b>X</b> ≤ 10<sup>3</sup></li>
</ul>
</p>

<p><b>Subtask #2 (85 points):</b> original constraints</p>

<h3>Example</h3>
<pre><b>Input:</b>

2
1110
4
110
1

<b>Output:</b>

YES
1
NO
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> We can convert the given 10-string into <b>U</b> = "1010" using only one flip; this string has exactly 4 humongous subsequences. This is the minimum possible number of flips.</p>
<p><b>Example case 2:</b> The only 10-strings we can obtain after any number of flips are "100" and "110". Each of them contains exactly 2 humongous subsequences, so there is no answer.</p>
