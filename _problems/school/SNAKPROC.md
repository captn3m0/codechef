---
{"category_name":"school","problem_code":"SNAKPROC","problem_name":"Snake Procession","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":"kingofnumbers","date_added":"18-05-2017","tags":{"0":"admin3"},"editorial_url":"https://discuss.codechef.com/problems/SNAKPROC","time":{"view_start_date":1495625400,"submit_start_date":1495625400,"visible_start_date":1495625400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL17/mandarin/SNAKPROC.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL17/russian/SNAKPROC.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL17/vietnamese/SNAKPROC.pdf">Vietnamese</a> as well.</h3>

<p>The annual snake festival is upon us, and all the snakes of the kingdom have gathered to participate in the procession. Chef has been tasked with reporting on the procession, and for this he decides to first keep track of all the snakes. When he sees a snake first, it'll be its Head, and hence he will mark a 'H'. The snakes are long, and when he sees the snake finally slither away, he'll mark a 'T' to denote its tail. In the time in between, when the snake is moving past him, or the time between one snake and the next snake, he marks with '.'s.</p>

<p>Because the snakes come in a procession, and one by one, a valid report would be something like "..H..T...HTH....T.", or "...", or "HT", whereas "T...H..H.T", "H..T..H", "H..H..T..T" would be invalid reports (See explanations at the bottom).</p>

<p>Formally, a snake is represented by a 'H' followed by some (possibly zero) '.'s, and then a 'T'. A valid report is one such that it begins with a (possibly zero length) string of '.'s, and then some (possibly zero) snakes between which there can be some '.'s, and then finally ends with some (possibly zero) '.'s.
</p>

<p>Chef had binged on the festival food and had been very drowsy. So his report might be invalid. You need to help him find out if his report is valid or not.</p>

<h3>Input</h3>
<ul>
<li>The first line contains a single integer, <b>R</b>, which denotes the number of reports to be checked. The description of each report follows after this.</li>
<li>The first line of each report contains a single integer, <b>L</b>, the length of that report.</li>
<li>The second line of each report contains a string of length <b>L</b>. The string contains only the characters '.', 'H', and 'T'.</li>
</ul>


<h3>Output</h3>
<ul>
<li>For each report, output the string "Valid" or "Invalid" in a new line, depending on whether it was a valid report or not.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>R</b> ≤ 500</li>
<li>1 ≤ length of each report ≤ 500</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
6
18
..H..T...HTH....T.
3
...
10
H..H..T..T
2
HT
11
.T...H..H.T
7
H..T..H

<b>Output:</b>
Valid
Valid
Invalid
Valid
Invalid
Invalid
</pre>

<h3>Explanation</h3>
<p>"H..H..T..T" is invalid because the second snake starts before the first snake ends, which is not allowed.</p>
<p>".T...H..H.T" is invalid because it has a 'T' before a 'H'. A tail can come only after its head.</p>
<p>"H..T..H" is invalid because the last 'H' does not have a corresponding 'T'.</p>