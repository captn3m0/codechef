---
{"category_name":"medium","problem_code":"STRAB","problem_name":"How to Write a Message","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"iscsi","date_added":"4-03-2015","tags":{"0":"cook56","1":"dynamic","2":"easy","3":"recursion","4":"witua"},"editorial_url":"http://discuss.codechef.com/problems/STRAB","time":{"view_start_date":1427049000,"submit_start_date":1427049000,"visible_start_date":1427049000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK56/mandarin/STRAB.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK56/russian/STRAB.pdf">Russian</a> as well.</h3>
<p>One day, you decided to write a message to your girl friend consisting of <b>N</b> uppercase English letters.</p>
<p>Your girlfriend's alphabet is limited to only two letters: 'A' and 'B'. She recognizes only the words that are of length <b>M</b> containing letters from her alphabet.</p>
<p>
There are some words that your girlfriend hates. You are given two strings <b>X</b> and <b>Y</b>, which represent some two words she recognizes. Your girlfriend hates words <b>X</b>, <b>Y</b> and also each word that she recognizes and is lexicographically greater than <b>X</b> and smaller than <b>Y</b> .
</p>
<p>For example, if <b>M</b> = 3, <b>X</b> = "ABA" and <b>Y</b> = "BBA" then all words the girlfriend hates are: "ABA", "ABB", "BAA", "BAB" and "BBA". Note that she doesn't hate words "AAA", "BB", "AC" or "BCAD". </p>
<p>The message that you will send to the girlfriend should not contain any of words she hates as a substring. Note that the message <b>can</b> contain letters the girl doesn't recognize. The message will contain <b>N</b> uppercase English letters. Find the number of different messages you can send. Since the answer can be large, output it modulo <b>(10<sup>9</sup> + 7)</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two integers <b>N</b> and <b>M</b>.</p>
<p>The second line contains the string <b>X</b> and the third line contains the string <b>Y</b>, both of length <b>M</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the answer to the corresponding test case, modulo <b>(10<sup>9</sup> + 7)</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b>, <b>M</b> ≤ <b>19</b></li>
<li><b>X</b> and <b>Y</b> will consist only of letters 'A' and 'B'.</li>
<li><b>X</b> will not be lexicographically greater than <b>Y</b>.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
1 1
A
B

<b>Output:</b>
24
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Out of all <b>26</b> possible messages in this case only two are invalid (i.e. "A" and "B"). Thus, the answer is <b>26 - 2 = 24</b>.</p>
