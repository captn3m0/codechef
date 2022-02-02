---
{"category_name":"easy","problem_code":"CHEFSIGN","problem_name":"Chef and Sign Sequences","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":null,"date_added":"18-11-2015","tags":{"0":"ad","1":"berezin","2":"cakewalk","3":"greedy","4":"july17"},"editorial_url":"https://discuss.codechef.com/problems/CHEFSIGN","time":{"view_start_date":1500283800,"submit_start_date":1500283800,"visible_start_date":1500283800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY17/mandarin/CHEFSIGN.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JULY17/russian/CHEFSIGN.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY17/vietnamese/CHEFSIGN.pdf">Vietnamese</a> as well.</h3>


<p>Chef found a strange string yesterday - a string of signs <b>s</b>, where each sign is either a <b>'<'</b>, <b>'='</b> or a <b>'>'</b>. Let N be the length of this string. Chef wants to insert N + 1 positive integers into this sequence and make it valid. A valid sequence is a sequence where every sign is preceded and followed by an integer, and the signs are correct. That is, if a sign '<' is preceded by the integer <i>a</i> and followed by an integer <i>b</i>, then <i>a</i> should be less than <i>b</i>. Likewise for the other two signs as well. </p>

<p>Chef can take some positive integers in the range <b>[1, P]</b> and use a number in the range as many times as he wants.</p>

<p>Help Chef find the minimum possible <b>P</b> with which he can create a valid sequence.</p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The only line of each test case contains the string of signs <b>s</b>, where each sign is either <b>'<'</b>, <b>'='</b> or a <b>'>'</b>. </p>

<h3>Output</h3>
<p>For each test case, output a single line containing an integer corresponding to the minimum possible <b>P</b>. </p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T, |s|</b> ≤ 10<sup>5<sup></li>
<li>1 ≤ Sum of <b>|s|</b> over all test cases in a single test file ≤ 10<sup>6</sup></li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1 (30 points)</b>
<ul>
<li>1 ≤ <b>T, |s|</b> ≤ 10<sup>3<sup></li>
<li>1 ≤ Sum of <b>|s|</b> over all test cases in a single test file ≤ 10<sup>4</li>
</ul>
</p>

<p><b>Subtask #2 (70 points)</b>
<ul>
<li>Original constraints</li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
4
<<<
<><
<=>
<=<

<b>Output:</b>
4
2
2
3
</pre>

<h3>Explanation</h3>
<p>Here are some possible valid sequences which can be formed with the minimum <b>P</b> for each of the test cases:</p>
<pre>
1 < 2 < 3 < 4
1 < 2 > 1 < 2
1 < 2 = 2 > 1
1 < 2 = 2 < 3
</pre>