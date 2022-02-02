---
{"category_name":"medium","problem_code":"PP","problem_name":"Palindrome Pairs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"shangjingbo","problem_tester":null,"date_added":"9-10-2015","tags":{"0":"cook63","1":"medium","2":"palindrome","3":"rolling","4":"shangjingbo","5":"strings","6":"trie"},"editorial_url":"http://discuss.codechef.com/problems/PP","time":{"view_start_date":1445193000,"submit_start_date":1445193000,"visible_start_date":1445193000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK63/mandarin/PP.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK63/russian/PP.pdf">Russian</a> as well.</h3>
<p>
Given a list of strings <b>S</b>[ 1..<b>N</b> ], you need to count how many ordered pairs of strings are awesome. Given two integers i and j, such that 1 ≤ i, j ≤ n and i ≠ j, an ordered pair ( <b>S</b>[ <b>i</b> ], <b>S</b>[ <b>j</b> ] ) is called awesome if and only if concatenating <b>S</b>[ <b>i</b> ] and <b>S</b>[ <b>j</b> ] gives a palindrome.</p>
<h3>Input</h3>
<p>The first line contains an integer <b>T</b> denoting the total number of test cases.</p>
<p>In each test case, the first line contains an integer <b>N</b> denoting the total number of strings.</p>
<p>Then, there are <b>N</b> strings, each in a separate line. They only consist of lower case characters.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the answer.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> &lt;= <b>T</b> &lt;= <b>5</b></li>
<p>In each test case,</p>
<li><b>1</b> &lt;= <b>N</b> &lt;= <b>10^6</b></li>
<li>Sum of lengths of <b>N</b> strings &lt;= <b>10^6</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
3
a
ab
abb

<b>Output:</b>
2
</pre><h3>Explanation</h3>
<p>ab|a and abb|a</p>
