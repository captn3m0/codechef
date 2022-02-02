---
{"category_name":"school","problem_code":"TWOSTR","problem_name":"Chef and the Wildcard Matching","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rustinpiece","problem_tester":"iscsi","date_added":"5-08-2015","tags":{"0":"basic","1":"cakewalk","2":"cook61","3":"implementation","4":"rustinpiece","5":"strings"},"editorial_url":"http://discuss.codechef.com/problems/TWOSTR","time":{"view_start_date":1440357574,"submit_start_date":1440357574,"visible_start_date":1440357574,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK61/mandarin/TWOSTR.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK61/russian/TWOSTR.pdf">Russian</a> as well.</h3>


<p> 
Chef wants to implement wildcard pattern matching supporting only the wildcard '?'. The wildcard character '?' can be substituted by any single lower case English letter for matching. He has two strings <b>X</b> and <b>Y</b> of equal length, made up of lower case letters and the character '?'. He wants to know whether the strings <b>X</b> and <b>Y</b> can be matched or not.

<h3>Input</h3>
<p>The first line of input contain an integer <b>T</b> denoting the number of test cases. Each test case consists of two lines, the first line contains the string <b>X</b> and the second contains the string <b>Y</b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line with the word <b>Yes</b> if the strings can be matched, otherwise output <b>No</b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li>Both <b>X</b> and <b>Y</b> have equal length and the length is between 1 and 10.</li>
<li>Both <b>X</b> and <b>Y</b> consist of lower case letters and the character '?'.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
s?or?
sco??
stor?
sco??

<b>Output:</b>
Yes
No
</pre>

<h3>Explanation</h3>
<p>
<b>First Example: </b> There are several ways the two strings can be matched, one of those is "score".
</p>
<p>
<b>Second Example: </b> There is no way to match the strings.
</p>