---
{"category_name":"easy","problem_code":"CHNGFUNC","problem_name":"Chang and the Perfect Function","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"prateekg603","problem_tester":null,"date_added":"25-06-2017","tags":{"0":"cook84","1":"easy","2":"maths","3":"number","4":"prateekg603"},"editorial_url":"https://discuss.codechef.com/problems/CHNGFUNC","time":{"view_start_date":1500834600,"submit_start_date":1500834600,"visible_start_date":1500834600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK84/mandarin/CHNGFUNC.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK84/russian/CHNGFUNC.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK84/vietnamese/CHNGFUNC.pdf">vietnamese</a> as well.</h3>

<p>
Chang's new maths teacher is very enthusiastic about making sure that students understand the concept rather than remembering it. On her first day at teaching, she gives an assignment to all the students to test their potential. Chang wants to demonstrate that he understands the concept rather than rote learning. Help Chang in doing this by solving the hardest problem in the assignment. The problem is written as follows. </p>

<p>
A perfect function is defined in the following manner.
<ul>
<li><b>F(x, y) = x<sup>2</sup> + y</b> for <b>1 ≤ x ≤ A, 1 ≤ y ≤ B</b></li>
<li><b>F(x, y) = 2</b> otherwise</li>
</ul>
</p>

<p>Find the number of integral pairs <b>(x, y)</b> such that <b>F(x, y)</b> is a perfect square.</p>

<h3>Input</h3>
<p>First and the only line of the input contains two single space separated integers <b>A</b> and <b>B</b>.</p>

<h3>Output</h3>
<p>Output a single integer indicating the output to the only test case.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>A, B</b> ≤ <b>10<sup>6</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4 4

<b>Output:</b>
1
</pre>

<h3>Explanation</h3>
<p>
<b>Example case 1.</b>
(1, 3) is the only pair such that x = 1, y = 3 satisfying x <= 4 and y <= 4. 1^2 + 3 = 4 which is a perfect square.
</p>