---
{"category_name":"hard","problem_code":"PALPROB","problem_name":"Palindromeness","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"karanaggarwal","date_added":"10-03-2015","tags":{"0":"dfs","1":"ltime23","2":"medium","3":"palindrome","4":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/PALPROB","time":{"view_start_date":1430037000,"submit_start_date":1430037000,"visible_start_date":1430037000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME23/mandarin/PALPROB.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME23/russian/PALPROB.pdf">Russian</a>.</h3>
<p>Let us define the palindromeness of a string in the following way:</p>
<p><ul>
<li>If the string is not a palindrome, its' palindromeness is zero.</li>
<li>The palindromeness of an one-letter string is <b>1</b>.</li>
<li>The palindromness of a string <b>S</b> of the length greater than one is <b>1</b> + "palindromeness of the string that is formed by the first [|<b>S</b>|/2] symbols of <b>S</b>".</li>
</ul>
</p>
<p>Let us consider some examples for better understanding:</p>
<p><ul>
<li>The palindromeness of the string <b>zxqfd</b> is <b>0</b>, since the string is not a palindrome.</li>
<li>The palindromeness of the string <b>a</b> is <b>1</b>, by definition.</li>
<li>The palindromeness of the string <b>aa</b> is <b>2</b>, beucase for "aa" we get <b>1</b> + palindromeness of "a", that is one, so we get <b>2</b>.</li>
<li>The palindromeness of the string <b>abacaba</b> is <b>3</b>.</li>
</ul>
</p>
<p>You are given a string <b>S</b>. Find the sum of the palindromenesses of all the non empty substrings of <b> S</b> (i.e. <b>S[i..j]</b>, where <b>i</b> &lt;= <b>j</b>). In other words, you have to calculate the sum of palindromenesses of <b>N * (N + 1) / 2</b> substrings of <b>S</b>, where <b>N</b> is the length of <b>S</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first and only line of every test case contains a single string <b>S</b> for the corresponding test case.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing an integer corresponding to the answer to the problem.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>3</b></li>
<li><b>S</b> consists only of lower-case Latin letters.</li>
</ul>
</p>
<p>Subtask 1 (15 points):</p>
<ul>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>100</b></li>
</ul>

<p>Subtask 2 (23 points):</p>
<ul>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>1000</b></li>
</ul>

<p>Subtask 3 (62 points):</p>
<ul>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
zxqfd
aba

<b>Output:</b>
5
5
</pre>
<h3>Explanation</h3>
<p><b>Example case 1:</b> There is no palindrome that occurs as the substring of <b>zxqfd</b> and has the length more than <b>1</b>. The individual characters are palindromes of the palindromeness of <b>1</b>.</p>
<p><b>Example case 2:</b> The palindromeness of <b>aba</b> is <b>2</b> and the sum of the palindromenesses of single characters is <b>3</b>.</p>
