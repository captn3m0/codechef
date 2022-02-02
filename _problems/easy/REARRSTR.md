---
{"category_name":"easy","problem_code":"REARRSTR","problem_name":"Devu and decorating birthday cake","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"12-05-2015","tags":{"0":"admin2","1":"cook58","2":"easy","3":"greedy"},"editorial_url":"http://discuss.codechef.com/problems/REARRSTR","time":{"view_start_date":1432492200,"submit_start_date":1432492200,"visible_start_date":1432492200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK58/mandarin/REARRSTR.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK58/russian/REARRSTR.pdf">Russian</a> as well.</h3>


<p>
Today is Devu's birthday. He has obtained few colored balloons from his friends. You are given this information by a string <b>s</b> consisting of lower case English Latin letters. Each letter (from 'a' to 'z')  denotes a color. e.g. if s = "aab", then it means that he has received two balloons of color 'a' whereas one balloon of color 'b'.
</p>

<p>Now, Devu wants to decorate the cake by arranging all the balloons linearly from left to right on the cake such that no same colored balloons are nearby/ adjacent to each other.
</p>

<p>
Now Devu wonders whether it is possible to do so or not? Please help him in this. If it is not possible to do so, print -1. Otherwise, print any one of arrangements of the balloons on the cake. If there are more than one possible ways of doing so, you can print any one of them. </p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>First line of each test case will contain string <b>s</b>
</ul>

<h3>Output</h3>
<p>Print a single line corresponding to the answer of the problem.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ size of string <b>s</b> <b> ≤ 10<sup>5</sup></b></li>
<li>Sum of size of string <b>s</b> over all test cases will be less than or equal to ≤ 10<sup>6</sup> </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
aab
ab
aa
<b>Output:</b>
aba
ab
-1
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> He can arrange the balloons in the order given by the following string "aba". </p>
<p><b>Example case 2.</b> He can arrange the balloons in the order given by the following string "ab"</p>
<p><b>Example case 3.</b> There is no valid way of decorating cakes with balloon in the desired way. So we print -1. </p>