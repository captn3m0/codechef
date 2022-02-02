---
{"category_name":"easy","problem_code":"TAPALIN","problem_name":"Palindrome","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":"anton_lunyov","date_added":"26-01-2013","tags":{"0":"cook32","1":"matrix","2":"modulo","3":"simple","4":"simple","5":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/TAPALIN","time":{"view_start_date":1364150220,"submit_start_date":1364150220,"visible_start_date":1364150220,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Do you know that The Chef has a special interest in palindromes? Yes he does! Almost all of the dishes in his restaurant is named by a palindrome strings. The problem is that a name of a dish should not be too long, so The Chef has only limited choices when naming a new dish.
</p>
<p>
For the given positive integer <b>N</b>, your task is to calculate the number of palindrome strings of length not exceeding <b>N</b>, that contain only lowercase letters of English alphabet (letters from 'a' to 'z', inclusive). Recall that a palindrome is a string that reads the same left to right as right to left (as in "radar").
</p>
<p>
For example:</p>
<ul>
<li>For <b>N = 1</b>, we have <b>26</b> different palindromes of length not exceeding <b>N</b>:<br/> "a", "b", ..., "z".</br/></li>
<li>For <b>N = 2</b> we have <b>52</b> different palindromes of length not exceeding <b>N</b>:<br/> "a", "b", ..., "z",<br/> "aa", "bb", ..., "zz".</br/></br/></li>
<li>For <b>N = 3</b> we have <b>728</b> different palindromes of length not exceeding <b>N</b>:<br/> "a", "b", ..., "z",<br/> "aa", "bb", ..., "zz",<br/> "aaa", "aba", ..., "aza",<br/> "bab", "bbb", ..., "bzb",<br/> ...,<br/> "zaz", "zbz", ..., "zzz".</br/></br/></br/></br/></br/></br/></li>
</ul>

<p>
Since the answer can be quite large you should output it modulo <b>1000000007</b> (<b>10<sup>9</sup> + 7</b>). Yes, we know, most of you already hate this modulo, but there is nothing we can do with it :)
</p>
<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The only line of each test case contains a single integer <b>N</b>.
</p>
<h3>Output</h3>
<p>
For each test case, output a single line containing the answer for the corresponding test case.
</p>
<h3>Constrains</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>9</sup></b></li>
</ul>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
1
2
3
4
100

<b>Output:</b>
26
52
728
1404
508533804
</pre><h3>Explanation</h3>
<p>
The first three examples are explained in the problem statement above.
</p>
