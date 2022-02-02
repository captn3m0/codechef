---
{"category_name":"hard","problem_code":"KILLKTH","problem_name":"Killjee and k-th letter ","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"killjee","problem_tester":null,"date_added":"8-12-2017","tags":{"0":"jan18","1":"killjee","2":"killjee","3":"medium","4":"suffix"},"editorial_url":"https://discuss.codechef.com/problems/KILLKTH","time":{"view_start_date":1516008600,"submit_start_date":1516008600,"visible_start_date":1516008600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/mandarin/KILLKTH.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/russian/KILLKTH.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/vietnamese/KILLKTH.pdf">Vietnamese</a> as well.</h3>

<p>Killjee is trying to unlock a treasure. The key to the treasure is encrypted using a string <b>S</b> and <b>Q</b> queries. In each query, you need to find the <b>K</b>-th letter of a hidden string which is formed from the string <b>S</b>.</p>
<p>To form the hidden string, you should sort all substrings of <b>S</b> in lexicographical order and concatenate them. For example, if <b>S</b> = "abc", the hidden string would be "aababcbbcc". (See the sample explanation for details.)</p>
<p>In each query, the value of <b>K</b> is encoded in the following way:
<ul>
<li>You're given two integers <b>P</b> and <b>M</b>.</li>
<li>Let's define <b>G</b> as the sum of ASCII values of answers to all previous queries (therefore, <b>G</b> = 0 for the first query).</li>
<li>The value of <b>K</b> for the current query is <b>( P ·  G ) % M + 1</b>, where <b>%</b> denotes the modulo operator.</li>
</ul>
</p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single string <b>S</b>.</li>
<li>The second line contains a single integer <b>Q</b>.</li> 
<li><b>Q</b> lines follow. Each of these lines contains two space-separated integers <b>P</b> and <b>M</b>.</li>
</ul></p>

<h3>Output</h3>
<p>For each query, print a single line containing one character — the <b>K</b>-th letter of the hidden string.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>|S|</b> ≤ 2 · 10<sup>5</sup></li>
<li>1 ≤ <b>Q</b> ≤ 2 · 10<sup>5</sup></li>
<li>1 ≤ <b>K,M</b> ≤ length of hidden string</li>
<li>1 ≤ <b>P</b> ≤ 10<sup>9</sup></li>
<li><b>S</b> will consist only of lowercase English letters</li>
</ul>

<h3>Subtasks</h3>

<p><b>Subtask #1 (5 points):</b> 1 ≤ <b>|S|</b> ≤ 50</p>

<p><b>Subtask #2 (15 points):</b>
<ul>
<li>1 ≤ <b>|S|</b> ≤ 2000</li>
<li>1 ≤ <b>Q</b> ≤ 25000</li>
</ul>
</p>

<p><b>Subtask #3 (20 points):</b> 1 ≤ <b>Q</b> ≤ 10</p>

<p><b>Subtask #4 (60 points):</b> original constraints</p>

<h3>Example</h3>
<pre><b>Input:</b>

abc
3
1 1
2 3
5 6

<b>Output:</b>

a
b
a
</pre>

<h3>Explanation</h3>
<p>The substrings of <b>S</b> are "a", "b", "c", "ab", "abc", "bc". The lexicographical order of these strings is "a", "ab", "abc", "b", "bc", "c", so the hidden string is "a"+"ab"+"abc"+"b"+"bc"+"c" = "aababcbbcc".</p>

<p>For query 1, <b>G</b> = 0, so <b>K = ( P · G ) % M + 1 = ( 1 · 0 ) % 1 + 1 = 1</b>. The 1-st character of the hidden string is <b>'a'</b>. We add the ASCII value of 'a' (97) to <b>G</b>.</p>

<p>For query 2, <b>G</b> = 97, so <b>K = ( 2 · 97 ) % 3 + 1 = 3</b>. The 3-rd character of the hidden string is <b>'b'</b>. We add the ASCII value of 'b' (98) to <b>G</b>.</p>

<p>For query 3, <b>G</b> = 195, so <b>K = ( 5 · 195 ) % 6 + 1 = 4</b>. The 4-th character of the hidden string is <b>'a'</b>. We add the ASCII value of 'a' (97) to <b>G</b>.</p>