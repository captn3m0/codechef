---
{"category_name":"medium","problem_code":"AHWORK","problem_name":"Akhil And Pending Homework","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"amitpandeykgp","problem_tester":"prateekg603","date_added":"7-05-2016","tags":{"0":"amitpandeykgp","1":"dynamic","2":"ltime36","3":"strings"},"editorial_url":"http://discuss.codechef.com/problems/AHWORK","time":{"view_start_date":1464454800,"submit_start_date":1464454800,"visible_start_date":1464454800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME36/mandarin/AHWORK.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME36/russian/AHWORK.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME36/vietnamese/AHWORK.pdf">Vietnamese</a> as well.</h3>


<p>Akhil is a professor at University of Alexia. This semester, he is taking a course on Algorithms. One day after teaching about palindrome and related algorithms, he gave the following task to his students. Students found it very easy and solved it quickly. Can you solve it too?
 </p>

<p>You are given <b>N</b> strings. Each of them will have size equal to one or two, with their characters belonging to the character set <b>{‘a’,’b’}</b>. You have to delete minimum number of strings from the above given strings such that the string obtained after concatenating the remaining strings (in the original order of appearance in the <b>N</b> strings) is a palindrome. Find out the minimum number of deletions required. 
</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows:</li>
<li>First line of each test case will contain a single integer number <b>N</b> denoting number of strings.</li>
<li>Next line of each test case will contain <b>N</b> space separated strings.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output a single integer corresponding to the the minimum number of strings to be deleted. </li>
</ul>

<h3>Constraints</h3>

<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
</ul>

<h3>Subtasks</h3>
<li>Subtask #1 (20 points) : <b>1</b> ≤ <b>N</b> ≤ <b>16</b></li>
<li>Subtask #2 (80 points) : <b>1</b> ≤ <b>N</b> ≤ <b>10<sup>3</sup></b></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
1
4
ab a b ba

<b>Output:</b>
1
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> You need to delete strings either "a" or "b" (one of them), rest of the strings can be concatenated to form a palindrome, i.e. "abbba" and "ababa" respectively. </p>