---
{"category_name":"easy","problem_code":"UASEQ","problem_name":"Chef and sequence","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"furko","problem_tester":"xcwgf666","date_added":"24-06-2014","tags":{"0":"ad","1":"easy","2":"furko","3":"sept14"},"editorial_url":"http://discuss.codechef.com/problems/UASEQ","time":{"view_start_date":1410773400,"submit_start_date":1410773400,"visible_start_date":1410773400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/mandarin/UASEQ.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/russian/UASEQ.pdf">Russian</a>.</h3>
<p>        You are given an array that consists of <b>n</b> integer numbers. You have to change at most <b>K</b> elements of this array, so that the resulting array will be a arithmetic progression. From all the possible arithmetic progressions, you should choose most <i>beautiful</i>. </p>
<p>You can uniquely define the arithmetic progression by two numbers <b>a<sub>0</sub></b> and <b>d</b> - the first element of the given progression and the step that defines next element. (<b>a<sub>i</sub> = a<sub>0</sub>+i * d</b>). The progression <b>A(a<sub>0</sub> , d<sub>0</sub>)</b> is more <i>beautiful</i> than the progression <b>B(b<sub>0</sub>, d<sub>1</sub>)</b> iff <b>(a<sub>0</sub> &lt; b<sub>0</sub> or (a<sub>0</sub> = b<sub>0</sub> and d<sub>0</sub> &lt; d<sub>1</sub>))</b>  </p>
<h3>Input</h3>
<p>  The first line contains two integers <b>N</b> and <b>K</b> denoting the number of elements in the given array and the number of elements that you can change</p>
<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the given array.</p>
<h3>Output</h3>
<p>Output a single line containing the resulting array with at most <b>K</b> changes. Mind that among all the arithmetic sequences you have to choose the most <i>beautiful</i>.
</p>
<p>In the given test data, it is always possible to recover at least one arithmetic progression under the constraints of the problem.</p>
<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>0</b> ≤ <b>K</b> ≤ <b>min(10, N-2)</b></li>
<li><b>-10<sup>9</sup></b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4 2
1 2 1 4

<b>Output:</b>
-5 -2 1 4 
</pre><p> </p>
