---
{"category_name":"easy","problem_code":"CHEFFED","problem_name":"Chef and Numbers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"karanaggarwal","date_added":"10-07-2016","tags":{"0":"ad","1":"cook72","2":"easy","3":"mgch"},"editorial_url":"http://discuss.codechef.com/problems/CHEFFED","time":{"view_start_date":1469385000,"submit_start_date":1469385000,"visible_start_date":1469385000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK72/mandarin/CHEFFED.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK72/russian/CHEFFED.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK72/vietnamese/CHEFFED.pdf">Vietnamese</a> as well.</h3>
<p>Chef likes problems related to numbers a lot. He is generally quite good at solving these kinds of problems, but today he got stuck at one number theory problem, and so he asks your help to solve it.</p>
<p>
Given a positive integer <b>N</b>, find out how many positive integers <b>X</b> satisfy the equation <b>X</b> + S(<b>X</b>) + S(S(<b>X</b>)) = <b>N</b>, where S(<b>X</b>) denoting sum of digits of <b>X</b> in decimal (base 10) representation.
</p>
<h3>Input</h3>
<p>
The only line of the input contains one integer number - <b>N</b>.</p>
<h3>Output</h3>
<p>Output single integer in a line denoting the count of number of positive integers <b>X</b> satisfying the above given equation.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Example 1</h3>
<pre><b>Input:</b>
6

<b>Output:</b>
1
</pre><h3>Example 2</h3>
<pre><b>Input:</b>
9939

<b>Output:</b>
4
</pre><h3>Explanation</h3>
<p><b>Example 1</b>. Only one positive integer <b>X = 2</b> satisfies the equation <b>X + S(X) + S(S(X)) = 6</b>, as <b>X + S(X) + S(S(X)) = 2 + 2 + 2 = 6</b>.</p>
<p><b>Example 2</b>.<b>X</b> can be 9898, 9907, 9910 and 9913. </p>
<p>9898 + S(9898) + S(S(9898)) = 9898 + 34 + 7 = 9939</p>
<p>9907 + S(9907) + S(S(9907)) = 9907 + 25 + 7 = 9939</p>
<p>9910 + S(9910) + S(S(9910)) = 9910 + 19 + 10 = 9939</p>
<p>9913 + S(9913) + S(S(9913)) = 9913 + 22 + 4 = 9939</p>
<p>You can verify that there is not other positive value of <b>X</b> satisfying the given equation.</p>
