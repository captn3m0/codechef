---
{"category_name":"easy","problem_code":"FIBQ","problem_name":"Fibonacci Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"xcwgf666","date_added":"12-01-2016","tags":{"0":"april16","1":"fibonacci","2":"ma5termind","3":"medium","4":"segment"},"editorial_url":"http://discuss.codechef.com/problems/FIBQ","time":{"view_start_date":1460374200,"submit_start_date":1460374200,"visible_start_date":1460374200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/mandarin/FIBQ.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/russian/FIBQ.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/vietnamese/FIBQ.pdf">Vietnamese</a> as well.</h3>
<p>Chef's love for Fibonacci numbers helps him to design following interesting problem.</p>
<p>He defines a function <b>F</b> for an array <b>S</b> as follows:</p>
<p><img src="https://s3.amazonaws.com/hr-challenge-images/19693/1459283019-4876ee08cd-image.JPG" title="image.JPG" /></p>
<p>
where</p>
<ul>
<li><b>S<sub>i</sub></b> denotes a <b>non-empty</b> subset of multiset <b>S</b>.</li>
<li><b>sum(S<sub>i</sub>)</b> denotes the sum of all element of multiset <b>S<sub>i</sub></b>.</li>
<li><b>Fibonacci(x)</b> denotes the <b>x<sup>th</sup></b> Fibonacci number.</li>
</ul>

<p>Given an array <b>A</b> consisting of <b>N</b> elements. Chef asked you to process following two types of queries on this array accurately and efficiently.</p>
<ul>
<li><b>C X Y:</b> Change the value of <b>X<sup>th</sup></b> element of array to <b>Y</b> i.e <b>A<sub>X</sub> = Y</b>.</li>
<li><b>Q L R:</b> Compute function <b>F</b> over the subarray defined by the elements of array <b>A</b> in the range <b>L</b> to <b>R</b>, both inclusive.</li>
</ul>

<p>
Please see the Note section if you need details regarding Fibonacci function.
</p>
<h3>Input</h3>
<p>First line of input contains <b>2</b> space separated integer <b>N</b> and <b>M</b> denoting the size of array <b>A</b> and the number of queries to be performed. Next line of input contains <b>N</b> space separated integers denoting the elements of array <b>A</b>. Each of next <b>M</b> lines of input contains a query having one of the mentioned two types.</p>
<h3>Output</h3>
<p>For each query of type <b>Q</b>, output the value of function <b>F</b> for the given range of array <b>A</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ N, M ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ A<sub>i</sub>, Y ≤ 10<sup>9</sup></b></li>
<li><b>1 ≤ L, R, X ≤ N</b></li>
<li> type = <b>{'C', 'Q'} </b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask 1 (20 points) : <b>1 ≤ N, M ≤ 1000, 1 ≤ A<sub>i</sub>, Y ≤ 10<sup>6</sup>, type = { 'Q' }</b> </li>
<li>Subtask 2 (20 points) : <b>1 ≤ N, M ≤ 50000, 1 ≤ A<sub>i</sub>, Y ≤ 10<sup>9</sup>, type = { 'C', Q' }</b> </li>
<li>Subtask 3 (30 points) : <b>1 ≤ N, M ≤ 10<sup>5</sup>, 1 ≤ A<sub>i</sub>, Y ≤ 10<sup>9</sup>, type = { 'Q' } </b></li>
<li>Subtask 4 (30 points) : <b>1 ≤ N, M ≤ 10<sup>5</sup>, 1 ≤ A<sub>i</sub>, Y ≤ 10<sup>9</sup>, type = { 'C', Q' }</b></li>
</ul>
<h3>Example</h3>
<p><b>Input</b></p>
<pre>
3 5
1 2 3
Q 1 2
Q 2 3
C 1 2
Q 1 2
Q 1 3

</pre><p><b>Output</b></p>
<pre>
4
8
5
30
</pre><h3>Explanation:</h3>
<ul>
<li><b>Q<sub>1</sub></b> : F = Fibonacci(1) + Fibonacci(2) + Fibonacci(1+2) = 4 % 1000000007 = 4</li>
<li><b>Q<sub>2</sub></b> : F = Fibonacci(2) + Fibonacci(3) + Fibonacci(2+3) = 8 % 1000000007 = 8</li>
<li><b>Q<sub>3</sub></b> : A = {2, 2, 3}</li>
<li><b>Q<sub>4</sub></b> : F = Fibonacci(2) + Fibonacci(2) + Fibonacci(2+2) = 5 % 1000000007 = 5</li>
<li><b>Q<sub>5</sub></b> : F = Fibonacci(2) + Fibonacci(2) + Fibonacci(3) + Fibonacci(2+2) + Fibonacci(2+3) + Fibonacci(2+3) + Fibonacci(2+2+3) = 30 % 1000000007 = 30</li>
</ul>
<h3>Note</h3>
<p><b>Fibonacci<sub>K</sub></b> denotes the <b>K<sup>th</sup></b> Fibonacci number. Fibonacci series is defined as follows:</p>
<ul>
<li>For <b>1 ≤ K ≤ 2</b>, <b>Fibonacci<sub>K</sub> = 1</b></li>
<li>Otherwise, <b>Fibonacci<sub>K</sub> = Fibonacci<sub>K-1</sub> + Fibonacci<sub>K-2</sub></b></li>
<p>Please check this <a href="https://en.wikipedia.org/wiki/Fibonacci_number">link</a> for more details about Fibonacci numbers.
</p></ul>
