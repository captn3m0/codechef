---
{"category_name":"medium","problem_code":"MOREFB","problem_name":"Another Fibonacci","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"amitpandeykgp","problem_tester":null,"date_added":"29-03-2015","tags":{"0":"amitpandeykgp","1":"fft","2":"june15","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/MOREFB","time":{"view_start_date":1434360600,"submit_start_date":1434360600,"visible_start_date":1434360600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE15/mandarin/MOREFB.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE15/russian/MOREFB.pdf">Russian</a>.</h3>
<p>
Apurva is obsessed with Fibonacci numbers. She finds Fibonacci numbers very interesting. Fibonacci numbers can be defined as given below. </p>
<p>
Fib(1) = 1 , Fib(2) = 1.</p>
<p>
Fib(n) = Fib(n-1) + Fib(n-2) for  n > 2 .
</p>
<p> Given a set  <b> S </b> having <b>N</b> elements and an integer <b>K</b>, She wants to find out the value of <b>FIBOSUM(S)</b>.
</p>
<p><img src="https://s3.amazonaws.com/codechef_shared/download/JUNE15/FIBOSUM.JPG" width="480" height="70" /></p>
<p>
Where <b>sum(s)</b> represents the sum of elements  in set <b>s</b>.
</p>
<p>
<b>Note</b>  that values might be repeated in the set, two subsets will be called different if there is an index <b>i</b> such that <b>S[i]</b> is occurring in one of the subset and not in another.
</p>
<p>
As the value of <b>FIBOSUM(S)</b> can be very large, print it modulo <b>99991</b>.
</p>
<h3>Input</h3>
<ul>
<li>First line of input contains two integer <b>N</b>  and <b>K</b> sepeated by a space. </li>
<li> Next line contains <b>N</b> space separated integers denoting the set <b>S</b>. </li>
</ul>
<h3>Output</h3>
<p>Print a single integer representing the answer.</p>
<h3>Constraints</h3>
<p>
<b> 1 ≤ K ≤ N </b>
</p>
<p>
<b>Subtask #1: 10 points</b></p>
<ul>
<li><b>1 ≤ N  ≤ 20,  1 ≤ value in set ≤ 10<sup>9</sup></b></li>
</ul>

<p>
<b>Subtask #2: 30 points</b></p>
<ul>
<li><b>1 ≤ N  ≤ 2000,  1 ≤ value in set ≤ 10<sup>9</sup></b></li>
</ul>

<p>
<b>Subtask #3: 60 points</b></p>
<ul>
<li><b>1 ≤ N  ≤ 50000,  1 ≤ value in set ≤ 10<sup>9</sup></b></li>
</ul>

<p><h3>Example</h3>
</p><p><pre><b>Input:</b>
3 1
1 2 3

<b>Output:</b>
4
</pre></p>
<h3>Explanation</h3>
<p>
<b>FIBOSUM(S) </b> = Fib(1) + Fib(2) + Fib(3) = 4.
</p>
