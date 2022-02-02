---
{"category_name":"school","problem_code":"SEGM01","problem_name":"Bear and Segment 01","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":"lg5293","date_added":"29-04-2017","tags":{"0":"cakewalk","1":"errichto","2":"linear","3":"ltime47"},"time":{"view_start_date":1493485200,"submit_start_date":1493485200,"visible_start_date":1493485200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME47/mandarin/SEGM01.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME47/russian/SEGM01.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME47/vietnamese/SEGM01.pdf">Vietnamese</a> as well.</h3>

<p>Bear Limak has a string <b>S</b>.
Each character of <b>S</b> is a digit '0' or '1'.</p>

<p>Help Limak and check if all the '1' digits form a single non-empty segment (consecutive subsequence) in the string. For each test case, print "YES" or "NO" accordingly.</p>


<h3>Input</h3>

<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>The only line of each test case contains one string <b>S</b>, consisting of digits '0' and '1' only.</p>


<h3>Output</h3>

<p>For each test case, output a single line containing the answer — "YES" if all the '1' digits form a single non-empty segment, and "NO" otherwise. Don't print the quotes.</p>


<h3>Constraints</h3>

<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ |<b>S</b>| ≤ 10<sup>5</sup> (here, |<b>S</b>| denotes the length of <b>S</b>)</li>
</ul>


<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (50 points): 1 ≤ |<b>S</b>| ≤ 50</li>
<li>Subtask #2 (50 points): Original constraints.</li>
</ul>


<h3>Example</h3>

<pre><b>Input:</b>
6
001111110
00110011
000
1111
101010101
101111111111

<b>Output:</b>
YES
NO
NO
YES
NO
NO
</pre>


<h3>Explanation</h3>

<p>The answer is "YES" for strings 001111110 and 1111.</p>

<p>The answer is "NO" for 00110011 because the '1' digits form two disjoint segments (while they should all be consecutive, with no '0' digits between them).</p>

<p>The answer is "NO" for 000 because the segment formed by the '1' digits must be non-empty (as written in the statement).</p>