---
{"category_name":"easy","problem_code":"CO92REST","problem_name":"Chef Restores an Array","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kefaa","problem_tester":null,"date_added":"15-03-2018","tags":{"0":"cook92","1":"datastructure","2":"easy","3":"kefaa"},"editorial_url":"https://discuss.codechef.com/problems/CO92REST","time":{"view_start_date":1521397800,"submit_start_date":1521397800,"visible_start_date":1521397800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK92/mandarin/CO92REST.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK92/russian/CO92REST.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK92/vietnamese/CO92REST.pdf">Vietnamese</a> as well.</h3>

<p>Chef had an array <b>A</b> with length <b>N</b>, but some of its elements got lost. Now, each element of this array is either unknown (denoted by -1) or a positive integer not exceeding <b>K</b>.</p>

<p>Chef decided to restore the array <b>A</b> by replacing each unknown element by a positive integer not exceeding <b>K</b>.</p>

<p>However, Chef has <b>M</b> restrictions that must hold for the restored array. There are two types of restrictions:
<ul>
<li>I <b>L</b> <b>R</b>, meaning that for each <b>i</b> such that <b>L</b> < <b>i</b> ≤ <b>R</b>, the condition <b>A<sub>i</sub> - A<sub>i-1</sub></b> = 1 should be satisfied.</li>
<li>D <b>L</b> <b>R</b>, meaning that for each <b>i</b> such that <b>L</b> < <b>i</b>  ≤ <b>R</b>, the condition <b>A<sub>i</sub> - A<sub>i-1</sub></b> = -1 should be satisfied.</li>
</ul></p>

<p>Chef would like to know the number of ways to restore the array while satisfying all restrictions, modulo 10<sup>9</sup>+7.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains three space-separated integers <b>N</b>, <b>M</b> and <b>K</b>.</li>
<li>The second line contains <b>N</b> integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>.</li>
<li>Each of the following <b>M</b> lines contains one restriction in the form I <b>L</b> <b>R</b> or D <b>L</b> <b>R</b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing one integer - the number of ways to restore the array modulo 10<sup>9</sup>+7.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N</b>, <b>M</b> ≤ 100,000</li>
<li>1 ≤ <b>K</b> ≤ 1,000,000,000</li>
<li>1 ≤ <b>L</b> < <b>R</b> ≤ <b>N</b></li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ <b>K</b> or <b>A<sub>i</sub></b> = -1 for each valid <b>i</b></li>
<li>1 ≤ sum of <b>N</b> over all test cases ≤ 500,000</li>
<li>1 ≤ sum of <b>M</b> over all test cases ≤ 500,000</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>

3
4 2 10
2 3 5 4
I 1 2 
D 3 4
5 2 10
-1 -1 -1 -1 -1
I 1 3
D 3 5
6 2 2
-1 -1 -1 -1 -1 -1
I 1 4
D 4 6

<b>Output:</b>

1
8
0
</pre>
