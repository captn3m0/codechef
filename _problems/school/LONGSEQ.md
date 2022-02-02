---
{"category_name":"school","problem_code":"LONGSEQ","problem_name":"Chef and digits of a number","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"chandubaba","problem_tester":"dpraveen","date_added":"24-01-2016","tags":{"0":"ad","1":"cakewalk","2":"chandubaba","3":"sept16","4":"string"},"editorial_url":"http://discuss.codechef.com/problems/LONGSEQ","time":{"view_start_date":1473931800,"submit_start_date":1473931800,"visible_start_date":1473931800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/mandarin/LONGSEQ.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/russian/LONGSEQ.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/vietnamese/LONGSEQ.pdf">Vietnamese</a> as well.</h3>


<p>Chef has a number <b>D</b> containing only digits 0's and 1's. He wants to make the number to have all the digits same. For that, he will change <b>exactly</b> one digit, i.e. from 0 to 1 or from 1 to 0. If it is possible to make all digits equal (either all 0's or all 1's) by flipping exactly 1 digit then output "Yes", else print "No" (quotes for clarity)</p>

<h3>Input</h3>
<p> The first line will contain an integer <b>T</b> representing the number of test cases.</p>
<p>Each test case contain a number made of only digits 1's and 0's on newline</p>

<h3>Output</h3>
<p> Print T lines with a "Yes" or a "No", depending on whether its possible to make it all 0s or 1s or not. </p>

<h3>Constraints</h3>
<b>Subtask #1: (40 points)</b>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>Length of the number D</b> ≤ <b>50</b></li>
</ul> </br>

<b>Subtask #2: (60 points)</b>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>Length of the number D</b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
101
11
<b>Output:</b>
Yes
No
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> In 101, the 0 can be flipped to make it all 1..</p>
<p><b>Example case 2.</b> No matter whichever digit you flip, you will not get the desired string.</p>