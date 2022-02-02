---
{"category_name":"easy","problem_code":"LEXOPAL","problem_name":"Faded Palindromes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"dpraveen","date_added":"4-02-2016","tags":{"0":"ad","1":"easy","2":"ma5termind","3":"sept16","4":"string"},"editorial_url":"http://discuss.codechef.com/problems/LEXOPAL","time":{"view_start_date":1473931800,"submit_start_date":1473931800,"visible_start_date":1473931800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/mandarin/LEXOPAL.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/russian/LEXOPAL.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/vietnamese/LEXOPAL.pdf">Vietnamese</a> as well.</h3>


<p>Chef likes strings a lot but he likes palindromic strings even more. Today he found an old string <b>s</b> in his garage. The string is so old that some of its characters have faded and are unidentifiable now. Faded characters in the string are represented by '.' whereas other characters are lower case Latin alphabets i.e ['a'-'z'].<p>

<p>Chef being the palindrome lover decided to construct the lexicographically smallest palindrome by filling each of the faded character ('.') with a lower case Latin alphabet. Can you please help him completing the task?</p>


<h3>Input</h3>
<p>First line of input contains a single integer <b>T</b> denoting the number of test cases. <b>T</b> test cases follow.</p>
<p>First and the only line of each case contains string <b>s</b> denoting the old string that chef has found in his garage.</p>

<h3>Output</h3>
<p>For each test case, print lexicographically smallest palindrome after filling each faded character - if it possible to construct one. Print -1 otherwise.</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 50</b></li>
<li><b>1 ≤ |s| ≤ 12345</b></li>
<li>String <b>s</b> consists of ['a'-'z'] and '.' only.</li>
</ul>

<h3>Subtasks</h3>
<b>Subtask #1 (47 points)</b>
<ul>
<li><b>1 ≤ T ≤ 50, 1 ≤ |S| ≤ 123</b></li>
</ul></br>

<b>Subtask #2 (53 points)</b>
<ul>
<li><b>1 ≤ T ≤ 50, 1 ≤ |S| ≤ 12345</b></li>
</ul>

<h3>Example</h3>
<b>Input</b>
<pre>
3
a.ba
cb.bc
a.b

</pre>

<b>Output</b>
<pre>
abba
cbabc
-1
</pre>

<h3>Explanation</h3>
<p><b>In example 1</b>, you can create a palindrome by filling the faded character by 'b'.</p>
<p><b>In example 2</b>, you can replace the faded character by any character from 'a' to 'z'. We fill it by 'a', as it will generate the lexicographically smallest palindrome.</p>
<p><b>In example 3</b>, it is not possible to make the string <b>s</b> a palindrome.</p>