---
{"category_name":"medium","problem_code":"CHEFCODE","problem_name":"Chef and Subsequences","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"prateekg603","problem_tester":null,"date_added":"5-05-2017","tags":{"0":"long","1":"may17","2":"prateekg603"},"editorial_url":"https://discuss.codechef.com/problems/CHEFCODE","time":{"view_start_date":1495099800,"submit_start_date":1495099800,"visible_start_date":1495099800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/MAY17/mandarin/CHEFCODE.pdf">mandarin chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MAY17/russian/CHEFCODE.pdf">russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY17/vietnamese/CHEFCODE.pdf">vietnamese</a> as well.</h3>


<p>Though our Head Chef retired from sport programming long back, but that did not affect his passion to contribute to the programming community. He still remains engaged by creating new problems and passing it on to the online judges. Last Night, he thought of a following problem for which he could not figure out a solution. You being his friend from the older days of programming decide to help him.</p>

<p>
Find the number of non-empty subsequences in the given list of <b>N</b> integers such that the product of the values in the subsequences does not exceed <b>K</b>
</p>

<h3>Input</h3>
<p>First line of the input will contain two space separated integers <b>N</b> and <b>K</b>. Next and last line of the input contains <b>N</b> space separated integers</p>

<h3>Output</h3>
<p>Print the answer to the given test case in a separate line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>30</b></li>
<li><b>1</b> ≤ <b>K, A<sub>i</sub></b> ≤ <b>10^18</b></li>
</ul>

<h3>Subtasks</h3>
<p>
<b>Subtask #1 : (30 points)</b>
<ul>
<li><b>1 ≤ N ≤ 10</b></li>
</ul>
</p>

<p>
<b>Subtask #2 : (70 points) </b>
<ul>
<li><b>1 ≤ N ≤ 30</b></li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
3 4
1 2 3

<b>Output:</b>
5
</pre>

<h3>Explanation</h3>
<p>
For the given sample case, there are <b>7</b> non-empty subsequences out of which <b>2</b> have their product > <b>4</b>. Those include {<b>2</b>, <b>3</b>} and {<b>1</b>, <b>2</b>, <b>3</b>}. Hence, the answer is <b>7</b> - <b>2</b> = <b>5</b>.
</p>