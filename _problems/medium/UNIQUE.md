---
{"category_name":"medium","problem_code":"UNIQUE","problem_name":"Chef and Uniqueness","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shiplu","problem_tester":"rustinpiece‎","date_added":"31-01-2014","tags":{"0":"cook43","1":"hard","2":"lcp","3":"segment","4":"shiplu","5":"string","6":"suffix"},"editorial_url":"http://discuss.codechef.com/problems/UNIQUE","time":{"view_start_date":1392575400,"submit_start_date":1392575400,"visible_start_date":1392575400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK43/mandarin/UNIQUE.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK43/russian/UNIQUE.pdf">Russian</a> as well.</h3>
<p>Today chef has decided to cook a string <b>S</b> of length <b>N</b>. But he will not just cook the whole string, but a unique substring of the given string <b>S</b>. A substring is unique if it occurs in the string <b>S</b> only once.  Chef also does not like all the indices of a string. He wants a special index <b>i</b> to be in the unique substring. But the length of the unique substring should be minimized.</p>
<p>Chef wants your help to find an unique substring of minimum possible length which contains the index <b>i</b>. If there are several such substrings, chef will take the lexicographically smallest one. But chef has not told you the value of <b>i</b> yet. So you have to find the answer for all <b>i</b> (<b>1</b> to <b>N</b>).</p>

<h3>Input</h3>
<p>Input contains a single line containing the string <b>S</b> of length <b>N</b> and it consists of lower case letters only.</p>

<h3>Output</h3>
<p>Print <b>N</b> lines, where <b>i</b>-th line will contain two space separated integers <b>P<sub>i</sub></b> and <b>L<sub>i</sub></b>. <b>P<sub>i</sub></b> is the starting position (<b>1</b>-indexed) and <b>L<sub>i</sub></b> is the length of the shortest unique substring which contains the index <b>i</b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>S</b> contains only lower case letters.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
abcab

<b>Output:</b>
1 3
2 2
3 1
3 2
3 3

</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b> <br /><br />
i = 1, shortest unique substring is "abc"<br /><br />
i = 2, shortest unique substring is "bc"<br /><br />
i = 3, shortest unique substring is "c"<br /><br />
i = 4, shortest unique substring is "ca"<br /><br />
i = 5, shortest unique substring is "cab"<br />
</p>
