---
{"category_name":"school","problem_code":"PPSUM","problem_name":"Puppy and Sum","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"kostya_by","date_added":"12-02-2016","tags":{"0":"basic","1":"cakewalk","2":"cook67","3":"implementation","4":"pavel1996"},"editorial_url":"http://discuss.codechef.com/problems/PPSUM","time":{"view_start_date":1456081200,"submit_start_date":1456081200,"visible_start_date":1456081200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK67/mandarin/PPSUM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK67/russian/PPSUM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK67/vietnamese/PPSUM.pdf">Vietnamese</a> as well.</h3>


<p>Yesterday, puppy Tuzik learned a magically efficient method to find the sum of the integers from <b>1</b> to <b>N</b>. He denotes it as <b>sum(N)</b>. But today, as a true explorer, he defined his own new function: <b>sum(D, N)</b>, which means the operation <b>sum</b> applied <b>D</b> times: the first time to <b>N</b>, and each subsequent time to the result of the previous operation.</p>

<p>For example, if <b>D = 2</b> and <b>N = 3</b>, then <b>sum(2, 3)</b> equals to <b>sum(sum(3)) = sum(1 + 2 + 3) = sum(6) = 21</b>.</p>

<p>Tuzik wants to calculate some values of the <b>sum(D, N)</b> function. Will you help him with that?</p>

<h3>Input</h3>
<p>The first line contains a single integer <b>T</b>, the number of test cases. Each test case is described by a single line containing two integers <b>D</b> and <b>N</b>.</p>

<h3>Output</h3>
<p>For each testcase, output one integer on a separate line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>16</b></li>
<li><b>1</b> ≤ <b>D, N</b> ≤ <b>4</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
1 4
2 3

<b>Output:</b>
10
21
</pre>

<h3>Explanation:</h3>
<p>
The first test case: sum(1, 4) = sum(4) = 1 + 2 + 3 + 4 = 10.
</p>
<p>
The second test case: sum(2, 3) = sum(sum(3)) = sum(1 + 2 + 3) = sum(6) = 1 + 2 + 3 + 4 + 5 + 6 = 21.
</p>