---
{"category_name":"medium","problem_code":"CHGLSTGT","problem_name":"Girl Friend and String Gift","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"vineetpaliwal","problem_tester":null,"date_added":"6-10-2013","tags":{"0":"dynamic","1":"ltime05","2":"palindromes","3":"programming","4":"simple","5":"strings","6":"vineetpaliwal"},"editorial_url":"http://discuss.codechef.com/problems/CHGLSTGT","time":{"view_start_date":1382862600,"submit_start_date":1382862600,"visible_start_date":1382862600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/LTIME05/russian/CHGLSTGT.pdf">here</a></h3>
<p>Chef's Girl Friend has given him a unique gift. She has given him a string <strong>S</strong>. Chef being a gentleman wants to return her gift in a unique way. He wants to break the string he has received into some number of substrings so that each substring is a palindrome. However he does not want break the string into too many substrings, otherwise the average size of his strings will become small. What is the minimum number of substrings in which the given string can be broken so that each substring is a palindrome.</p>
<h3>Tips: </h3>
<p>Refer <a href="http://en.wikipedia.org/wiki/Palindrome">http://en.wikipedia.org/wiki/Palindrome</a> for the definition of a "palindrome" </p>
<h3>Input</h3>
<p>Input description.</p>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows:</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of alphabets in the given string. The second line contains the given string. </li>
</ul>
<h3>Output</h3>
<p>For each test case output a single integer the answer to the given test case. Print answer for each test case on a separate line. </p>
<h3>Constraints</h3>
<p>All characters in the given string are upper case English alphabets.</p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>5000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<p>1 
7
ABCCBDA <br />
<b>Output:</b>
4</p></pre><h3>Explanation</h3>
<p><b>Example case 1.</b> The given string can be broken into <strong>"A" , "BCCB" , "D" , "A"</strong>. It can be verified that you can't break the given string into less than 4 substrings such that each substring in a palindrome.</p>
<h3> Scoring </h3>
<p> <b> Subtask 1: (15 points):</b></p>
<ul>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>20</b></li>
</ul>
<p> <b> Subtask 2: (25 points):</b></p>
<ul>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>250</b></li>
</ul>
<p> <b> Subtask 1: (60 points):</b></p>
<ul>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>5000</b></li>
</ul>

