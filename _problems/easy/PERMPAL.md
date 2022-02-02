---
{"category_name":"easy","problem_code":"PERMPAL","problem_name":"Permutation and Palindrome","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"2-02-2018","tags":{"0":"admin2","1":"constructive","2":"feb18","3":"palindrome","4":"simple","5":"string"},"editorial_url":"https://discuss.codechef.com/problems/PERMPAL","time":{"view_start_date":1518427800,"submit_start_date":1518427800,"visible_start_date":1518427800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/mandarin/PERMPAL.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/russian/PERMPAL.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/vietnamese/PERMPAL.pdf">Vietnamese</a> as well.</h3>

<p>You are given a string <b>s</b> with length <b>n</b>. You should find a <a href="https://en.wikipedia.org/wiki/Permutation">permutation</a> <b>P</b> of numbers 1 through <b>n</b> such that if you apply this permutation on the string <b>s</b>, you will get a <a href="https://en.wikipedia.org/wiki/Palindrome">palindromic</a> string.</p>

<p>The result of applying a permutation <b>P</b> on the string <b>s</b> is a string <b>t</b> with length <b>n</b> such that for each <b>i</b> (1 ≤ <b>i</b> ≤ <b>n</b>), the <b>i</b>-th character of <b>t</b> is given as as <b>t</b>[<b>i</b>] = <b>s</b>[<b>P<sub>i</sub></b>].</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first and only line of each test case contains the string <b>s</b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line. If it is impossible to find a valid permutation <b>P</b>, this line should contain a single integer -1. Otherwise, it should contain <b>n</b> space-separated integers <b>P<sub>1</sub>, P<sub>2</sub>, ..., P<sub>n</sub></b>.</p>

<p>If there are multiple valid permutations, you may print any one.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>n</b> ≤ 10<sup>5</sup></li>
<li><b>s</b> will consist only of lowercase English letters (i.e. characters 'a' through 'z')</li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1 (20 points)</b>: 1 ≤ <b>T</b>, <b>n</b> ≤ 10</p>
<p><b>Subtask #2 (20 points)</b>: 1 ≤ <b>T</b>, <b>n</b> ≤ 100</p>
<p><b>Subtask #3 (60 points)</b>: 1 ≤ <b>T</b> ≤ 10</p>

<h3>Example</h3>
<pre>
<b>Input</b>

4
aa
baa
abc
abab

<b>Output</b>

1 2
2 1 3
-1
1 2 4 3
</pre>


<h3>Explanation</h3>
<p><b>Example case 1:</b> The string <b>t</b> obtained using the identity permutation will have <b>t</b>[1] = <b>s</b>[1] and <b>t</b>[2] = <b>s</b>[2]. That means <b>t</b> = "aa", which is a palindrome.</p>

<p><b>Example case 2:</b> The characters of the string <b>t</b> obtained by applying the permutation <b>2, 1, 3</b> are <b>t</b>[1] = <b>s</b>[2], <b>t</b>[2] = <b>s</b>[1] and <b>t</b>[3] = <b>s</b>[3]. Therefore, <b>t</b> = "aba", which is a palindrome.</p>

<p><b>Example case 3:</b> There is no way to find a permutation <b>P</b> such that we can obtain a palindrome from <b>s</b> using it.</p>

<p><b>Example case 4:</b> Applying the permutation <b>1, 2, 4, 3</b> on <b>s</b> results in <b>t</b> = "abba", which is a palindrome. Another permutation that you may apply is <b>2, 1, 3, 4</b>; this results in <b>t</b> = "baab", which is also a palindrome.</p>
