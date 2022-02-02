---
{"category_name":"easy","problem_code":"CHEFPDIG","problem_name":"Chef and Pick Digit","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"jingbo_adm","date_added":"4-12-2015","tags":{"0":"berezin","1":"sept17","2":"simple"},"editorial_url":"https://discuss.codechef.com/problems/CHEFPDIG","time":{"view_start_date":1505122200,"submit_start_date":1505122200,"visible_start_date":1505122200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/mandarin/CHEFPDIG.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/russian/CHEFPDIG.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/vietnamese/CHEFPDIG.pdf">vietnamese</a> as well.</h3>

<p>Chef likes to play with big numbers. Today, he has a big positive integer <b>N</b>. He can select any two digits from this number (the digits can be same but their positions should be different) and orders them in any one of the two possible ways. For each of these ways, he creates a two digit number from it (might contain leading zeros). Then, he will pick a character corresponding to the ASCII value equal to this number, i.e. the number 65 corresponds to 'A', 66 to 'B' and so on till 90 for 'Z'. Chef is only interested in finding which of the characters in the range 'A' to 'Z' can possibly be picked this way. </p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>The first line of the input contains an integer <b>N</b>. </p>

<h3>Output</h3>
<p>For each test case, output a string containing characters Chef can pick <b>in sorted order</b> If the resulting size of string is zero, you should output a new line.
</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>100000</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><i>Subtask #1 (40 points)</i> <b>N</b> ≤ <b>10<sup>10</sup></b></li>
<li><i>Subtask #2 (60 points)</i> <b>Original Constraints</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4
65
566
11
1623455078

<b>Output:</b>
A
AB

ACDFGHIJKLNPQRSTUVW
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> Chef can pick digits <b>6</b> and <b>5</b> and create integers 56 and 65. The integer 65 corresponds to 'A'.</p>
<p><b>Example case 2.</b> Chef can pick digits <b>6</b> and <b>5</b> and create <b>'A'</b> as it equals <b>65</b>. He can pick 6 and 6 (they are picked from position 2 and position 3, respectively) to create 'B' too. Hence answer is "AB".</p>
<p><b>Example case 3.</b> It's not possible to create any character from 'A' to 'Z'. Hence, we just print a new line.
</p>