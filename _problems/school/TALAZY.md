---
{"category_name":"school","problem_code":"TALAZY","problem_name":"Lazy Jem","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":"errichto","date_added":"8-09-2016","tags":{"0":"ad","1":"cakewalk","2":"cook74","3":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/TALAZY","time":{"view_start_date":1474223400,"submit_start_date":1474223400,"visible_start_date":1474223400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK74/mandarin/TALAZY.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK74/russian/TALAZY.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK74/vietnamese/TALAZY.pdf">Vietnamese</a> as well.</h3>



<p>
Jem is famous for his laziness at school. He always leaves things to last minute. Now Jem has <b>N</b> problems in the assignment of "Advanced topics in algorithm" class to solved. The assignment is due tomorrow and as you may guess he hasn't touch any of the problems. Fortunately he got a plan as always.
</p>

<p>
The first step will be buying a pack of Red Bull and then to work as hard as he can. Here is how he is going to spend the remaining time:
</p>

<p>
Jem will not take a break until he finishes at least half of the remaining problems. Formally, if <b>N</b> is even then he will take he first break after finishing <b>N</b> / 2 problems. If <b>N</b> is odd then the break will be after he done (<b>N</b> + 1) / 2 problems. Each of his break will last for <b>B</b> minutes. Initially, he takes <b>M</b> minutes in solving a problem, after each break he will take twice more time in solving a problem, i.e. <b>2 * M</b> minutes per problem after the first break.
</p>

<p>
Jem will start working soon and ask you to help him calculate how much time it will take until he finish the last problem!
</p>

<h3>Input</h3>
<p>
The first line contains a single integer <b>T</b> represents the number of test cases in the input.</p>
Each line in the next <b>T</b> line contains three integers <b>N</b>, <b>B</b> and <b>M</b> represents a test case.
</p>

<h3>Output</h3>
<p>
For each test case output a single line containing an integer represent how much time Jem will need (in minutes).
</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ <b>T</b> ≤ 100</b></li>
<li><b>1 ≤ <b>N</b>, <b>B</b>, <b>M</b> ≤ 10<sup>8</sup></b></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>:
2
9 1 2
123456 123456 123456

<b>Output</b>:
45
131351258112
</pre>

<h3>Explanation</h3>
<p>
In the first test case, Jem will proceed as below:
</p>
<p>
<ul>
<li>Initially, Jem has 9 problems to solve. since it is an odd number, Jem will finish the first (9 + 1) / 2 = 5 problems with speed of 2 minutes/problem.</li>
<li>After that, Jem takes 1 minute break.</li>
<li>Now he has 4 problems to solve, which is an even number, so Jem will solve the next 4 / 2 = 2 problems. his speed after the first break has now became 4 minutes/problem.
</li>
<li>Again, he takes a 1 minute break.</li>
<li>he has now 2 problems left so he do one more problem in 8 minutes.</li>
<li>He takes 1 minute break.</li>
<li>he solves the last problem in 16 minutes.</li>
</ul>
</p>

<p>
So, Jem will need time = 5 × 2 + 1 + 2 × 4 + 1 + 8 + 1 + 16  = 45
</p>
