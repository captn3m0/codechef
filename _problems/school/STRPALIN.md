---
{"category_name":"school","problem_code":"STRPALIN","problem_name":"Palindromic substrings","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"kevinsogo","date_added":"4-11-2015","tags":{"0":"cakewalk","1":"ma5termind","2":"march16","3":"string","4":"string"},"editorial_url":"http://discuss.codechef.com/problems/STRPALIN","time":{"view_start_date":1458034200,"submit_start_date":1458034200,"visible_start_date":1458034200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/mandarin/STRPALIN.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/russian/STRPALIN.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/vietnamese/STRPALIN.pdf">Vietnamese</a> as well.</h3>
<p>Chef likes strings a lot but he likes palindromic strings more. Today, Chef has two strings <b>A</b> and <b>B</b>, each consisting of lower case alphabets.
</p>
<p>
Chef is eager to know whether it is possible to choose some <b>non empty</b> strings <b>s1</b> and <b>s2</b> where <b>s1</b> is a substring of <b>A</b>, <b>s2</b> is a substring of <b>B</b> such that <b>s1 + s2</b> is a palindromic string. Here <b>'+'</b> denotes the concatenation between the strings.</p>
<p><b>Note:</b></p>
<p>A string is a palindromic string if it can be read same both forward as well as backward. To know more about palindromes click <a href="https://en.wikipedia.org/wiki/Palindrome">here</a>.</p>
<h3>Input</h3>
<ul>
<li>First line of input contains a single integer <b>T</b> denoting the number of test cases.</li>
<li>For each test case:
<ul>
<li>First line contains the string <b>A</b></li>
<li>Second line contains the string <b>B</b>.</li>
</ul>
</li>
</ul>
<h3>Output</h3>
<p>For each test case, Print <b>"Yes"</b> (without quotes) if it possible to choose such strings <b>s1 &amp; s2</b>. Print <b>"No"</b> (without quotes) otherwise.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10 </b></li>
<li><b>1 ≤ |A|, |B| ≤ 1000 </b></li>
</ul>
<h3>Subtasks
<ul>
<li> <b>Subtask 1:</b> <b>1 ≤ |A|, |B| ≤ 10</b> : ( 40 pts )</li>
<li> <b>Subtask 2:</b> <b>1 ≤ |A|, |B| ≤ 1000</b> : ( 60 pts )</li>
</ul>
<h3>Example</h3>
<p><b>Input</b></p>
<pre>
3
abc
abc
a
b
abba
baab

</pre><p><b>Output</b></p>
<pre>
Yes
No
Yes
</pre><h3>Explanation</h3>
<ul>
<li><b>Test 1:</b> One possible way of choosing <b>s1 &amp; s2</b> is <b>s1 = "ab"</b>, <b>s2 = "a"</b> such that <b>s1 + s2</b> i.e <b>"aba"</b> is a palindrome.</li>
<li><b>Test 2:</b> There is no possible way to choose <b>s1 &amp; s2</b> such that <b>s1 + s2</b> is a palindrome.</li>
<li><b>Test 3:</b> You can figure it out yourself.</li>
</ul>
</h3>