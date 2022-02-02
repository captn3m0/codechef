---
{"category_name":"medium","problem_code":"MAKPALIN","problem_name":"Make Palindrome","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"amitpandeykgp","problem_tester":"minimario","date_added":"10-08-2015","tags":{"0":"amitpandeykgp"},"editorial_url":"http://discuss.codechef.com/problems/MAKPALIN","time":{"view_start_date":1440923400,"submit_start_date":1440923400,"visible_start_date":1440923400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME27/mandarin/MAKPALIN.pdf">Mandarin Chinese </a> , <a target="_blank" href="http://www.codechef.com/download/translated/LTIME27/russian/MAKPALIN.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME27/vietnamese/MAKPALIN.pdf">Vietnamese</a></h3>


<p>

Divyam is teaching his student Amit about palindromes. A palindrome is a word, phrase, number, or other sequence of characters which reads the same backward or forward. For example, the string “abcba” is a palindrome. After teaching about it, Divyam gave a puzzle for Amit to solve:
</p>

<p>
Given a string <b>S</b>. Find the number of positions in <b>S</b> where we can insert a character to convert it into a palindrome. Character can be inserted in the beginning or the end, so there will be <b>(N+1)</b> possible positions for the insertion in a string having original length <b>N</b>. For example, if <b>S</b> = “aaa”, then there are four positions where we can insert a character so that the converted string is a palindrome. Converted palindromes are “<b>a</b>aaa”, “a<b>a</b>aa”, “aa<b>a</b>a” and “aaa<b>a</b>”. Inserted character is shown in boldface.
</p>
<p>
Amit finds the puzzle too difficult. Can you help him in solving it?
</p>

<h3>Input</h3>
<ul>
<li>First line of input contains an integer <b>T</b> denoting the number of test cases.</li>
<li>First line of each test case will contain a string <b>S</b> containing lowercase letters only. </li>
</ul>

<h3>Output</h3>
Print <b>T</b> lines, each containing an integer: the solution for the corresponding test case.

<h3>Constraints</h3>
<p>
<b>Subtask #1: 20 points</b>
<ul>
	<li><b>1 ≤ T  ≤ 5, 1 ≤ length of string ≤ 1000</b></li>
</ul>
</p>
<p>
<b>Subtask #2: 80 points</b>
<ul>
	<li><b>1 ≤ T  ≤ 5,  1 ≤ length of string ≤ 10<sup>5</sup></b></li>
</ul>
</p>
<pre><b>Input:</b>
2
aaa
aca

<b>Output:</b>
4
2
</pre>
</p>

<h3>Explanation</h3>
<p>
First sample has been explained in the problem statement.
</p>