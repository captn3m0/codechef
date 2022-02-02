---
{"category_name":"medium","problem_code":"TASTR","problem_name":"Level Of Difference","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":"anton_lunyov","date_added":"27-01-2013","tags":{"0":"cook32","1":"easy","2":"lcp","3":"string","4":"suffix","5":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/TASTR","time":{"view_start_date":1364150220,"submit_start_date":1364150220,"visible_start_date":1364150220,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
How to measure the difference between two strings? This is a midnight question of biological scientists. The number of pairs of different characters in the same position may be a good indicator. However, it will not work well in the case when two strings have different lengths. The longest common subsequence will also fail when strings are too long.
</p>
<p>
Recently, Professor of Math L.P.C. has invented the special method to deal with this problem. His invention has been known as a simple but creative solution: the difference is based on the number of substrings (a non-empty group of consecutive characters) of one string that are not substrings of the other string.
</p>
<p>
Let's learn about his invention. Call the first string as <b>A</b> and the second string as <b>B</b>. Let <b>S</b> be the set of all different substrings of <b>A</b>, and <b>T</b> be the set of all different substrings of <b>B</b>. We then define another set <b>P</b> which consists of all the strings that belongs to <b>S</b> or <b>T</b>, but not both. According to the Professor L.P.C. method, the size of <b>P</b> is a good indicator to measure the difference between <b>A</b> and <b>B</b>.
</p>
<p>
For example, let <b>A = aacd</b> and <b>B = cdaa</b>. We can see that:<br/> <b>S = {a, aa, aac, aacd, ac, acd, c, cd, d}</b>,<br/> <b>T = {c, cd, cda, cdaa, d, da, daa, a, aa}</b>,<br/> <b>P = {aac, aacd, ac, acd, cda, cdaa, da, daa}</b>.<br/> Size of <b>P</b> is <b>8</b> and we can say the level of difference between <b>A</b> and <b>B</b> is <b>8</b>.
</br/></br/></br/></br/></p>
<p>
Your task is to find this indicator.
</p>
<h3>Input</h3>
<p>
The first line of the input contains the string <b>A</b>. The second line contains the string <b>B</b>.
</p>
<h3>Output</h3>
<p>
Output a single line containing the level of difference between strings <b>A</b> and <b>B</b> according to definition above.
</p>
<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> &le; <b>|A|</b> &le; <b>100000</b>, where <b>|A|</b> denotes the length of the string <b>A</b></li>
<li><b>1</b> &le; <b>|B|</b> &le; <b>100000</b></li>
<li>Both <b>A</b> and <b>B</b> consist only of lowercase English letters (from 'a' to 'z')</li>
</ul>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
aacd
cdaa

<b>Output:</b>
8
</pre><h3>Explanation</h3>
<p>
Example is explained in the problem statement above.
</p>
