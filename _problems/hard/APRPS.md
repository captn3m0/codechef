---
{"category_name":"hard","problem_code":"APRPS","problem_name":"Irrational Root","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"chemthan","problem_tester":null,"date_added":"7-02-2017","tags":{"0":"chemthan","1":"fft","2":"hard","3":"july17","4":"math","5":"ntt"},"editorial_url":"https://discuss.codechef.com/problems/APRPS","time":{"view_start_date":1500283800,"submit_start_date":1500283800,"visible_start_date":1500283800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY17/mandarin/APRPS.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY17/vietnamese/APRPS.pdf">Vietnamese</a> as well.</h3>

<p>It is well-known that <b>∑sqrt(a<sub>i</sub>), a<sub>i</sub> ∈ N</b> is a root of some <b>integer-coefficient</b> polynomial. For example: <b>sqrt(2)</b> is a root of polynomial: <b>x<sup>2</sup> − 2</b>. Now, your task is to find not only such polynomial but also the minimal one. When comparing two polynomials, firstly, we consider their degree and then the coefficient of the highest term, and then the second highest term and so on.</p> (Note that we consider only polynomial with the coefficient of highest term is positive)

<h3>Input</h3>
<p>First line contains an integer <b>T</b> denotes the number of testcases. Each testcase is described by an integer <b>n</b> and followed by <b>n</b> space-seperated integers <b>a<sub>i</sub></b>.</p>

<h3>Output:</h3>
<p>Each testcase print an integer <b>k</b> denotes the degree of polynomial in a single line. Then next line print <b>k + 1 </b> space-seperated integers modolo <b>10<sup>9</sup> + 7</b>, coefficients from lowest to highest term.</p>

<h3>Constraints</h3>
<p><b>1 ≤ T ≤ 5, 1 ≤ n ≤ 15</b></p>
<p><b>a<sub>i</sub></b> are <b>n</b> distinct primes, <b>1 ≤ a<sub>i</sub> ≤ 10<sup>9</sup></b></p>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1: <b>(10 points)</b>:  n ≤ 3</li>
<li>Subtask #2: <b>(20 points)</b>:  n ≤ 5</li>
<li>Subtask #3: <b>(30 points)</b>:  n ≤ 10</li>
<li>Subtask #4: <b>(40 points)</b>:  n ≤ 15</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<p>
2
1
2
2
2 3
</p>
<b>Output:</b>
<p>
2
1000000005 0 1
4
1 0 999999997 0 1
</p>
</pre>

<h3>Explanation</h3>
<p>The first polynomial is <b>x<sup>2</sup> − 2</b>, and the second one is <b>x<sup>4</sup> − 10x<sup>2</sup> + 1</b>.</p>