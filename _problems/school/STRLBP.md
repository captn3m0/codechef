---
{"category_name":"school","problem_code":"STRLBP","problem_name":"Uniform Strings","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"8-12-2017","tags":{"0":"acm17kgp","1":"admin2","2":"cakewalk","3":"kgp17rol"},"editorial_url":"https://discuss.codechef.com/problems/STRLBP","time":{"view_start_date":1515875400,"submit_start_date":1515875400,"visible_start_date":1515875400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given a string <b>s</b> of length 8 consisting solely of '0's and '1's. Assume that the characters of the string are written in a circular fashion. You need to find the number of 0-1 or 1-0 transitions that one has to make while making a single traversal over the string. ie. start from any character and go circularly until you get back to the same character, and find the number of transitions that you made. The string is said to be said to be <i>uniform</i> if there are at most two such transitions. Otherwise, it is called <i>non-uniform</i>.</p>

<p>Given the string <b>s</b>, tell whether the string is <i>uniform</i> or not.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The only line of input contains the string <b>s</b>.</p>

<h3>Output</h3>
<p>For each test case, output "uniform" if the given string is <i>uniform</i> and "non-uniform" otherwise.</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 256</b></li>
<li>Length of <b>s</b> is 8</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
4
00000000
10101010
10000001
10010011

<b>Output</b>
uniform
non-uniform
uniform
non-uniform
</pre>

<h3>Explanation</h3>
<p>The number of transitions are 0, 8, 2 and 4 for the respective cases. So, the first and third one are uniform while the second and fourth one are non-uniform.</p>