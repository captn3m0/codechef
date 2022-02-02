---
{"category_name":"easy","problem_code":"LCPESY","problem_name":"Longest Common Pattern","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shiplu","problem_tester":"gerald","date_added":"19-12-2013","tags":{"0":"cakewalk","1":"feb14","2":"shiplu"},"editorial_url":"http://discuss.codechef.com/problems/LCPESY","time":{"view_start_date":1392629400,"submit_start_date":1392629400,"visible_start_date":1392629400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB14/mandarin/LCPESY.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB14/russian/LCPESY.pdf">Russian</a>.</h3>
<p>As we all know, Chef is cooking string for long days, his new discovery on string is the <i>longest common pattern length</i>. The <i>longest common pattern length</i> between two strings is the maximum number of characters that both strings have in common. Characters are case sensitive, that is, lower case and upper case characters are considered as different. Note that characters can repeat in a string and a character might have one or more occurrence in common between two strings. For example, if Chef has two strings <b>A = "Codechef"</b> and <b>B = "elfedcc"</b>, then the <i>longest common pattern length</i> of <b>A</b> and <b>B</b> is <b>5</b> (common characters are <b>c</b>, <b>d</b>, <b>e</b>, <b>e</b>, <b>f</b>).</p>
<p>Chef wants to test you with the problem described above. He will give you two strings of Latin alphabets and digits, return him the <i>longest common pattern length</i>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. Then the description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a string <b>A</b>. The next line contains another character string <b>B</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing a single integer, the <i>longest common pattern length</i> between <b>A</b> and <b>B</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 100</b></li>
<li><b>1 ≤ |A|, |B| ≤ 10000 (10<sup>4</sup>)</b>, where <b>|S|</b> denotes the length of the string <b>S</b></li>
<li>Both of <b>A</b> and <b>B</b> can contain only alphabet characters (both lower and upper case) and digits</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
abcd
xyz
abcd
bcda
aabc
acaa
Codechef
elfedcc

<b>Output:</b>
0
4
3
5
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> There is no common character.</p>
<p><b>Example case 2.</b> All the characters are same.</p>
<p><b>Example case 3.</b> Three characters (<b>a</b>, <b>a</b> and <b>c</b>) are same.</p>
<p><b>Example case 4.</b> This sample is mentioned by the statement.</p>
