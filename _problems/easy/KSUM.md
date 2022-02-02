---
{"category_name":"easy","problem_code":"KSUM","problem_name":"Maximum K Sums","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"xcwgf666","date_added":"12-03-2016","tags":{"0":"data","1":"data","2":"greedy","3":"implementation","4":"ltime35","5":"ma5termind","6":"sorting"},"editorial_url":"http://discuss.codechef.com/problems/KSUM","time":{"view_start_date":1462036200,"submit_start_date":1462036200,"visible_start_date":1462036200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME35/mandarin/KSUM.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME35/russian/KSUM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME35/vietnamese/KSUM.pdf">Vietnamese</a> as well.</h3>

<p>Chef likes arrays a lot. Today, he found an array <b>A</b> consisting of <b>N</b> positive integers.</p>

<p>Let <b>L</b> denote the sorted (in non-increasing order) list of size <b>N*(N+1)/2</b> containing the sums of all possible contiguous subarrays of <b>A</b>. Chef is interested in finding the first <b>K</b> elements from the list <b>L</b>. Can you help him in accomplishing this task?</p>

<h3>Input</h3>
<p>There is only a single test case per input file.</p>

<p>The first line of input contains two space separated integer numbers <b>N</b> and <b>K</b> denoting the size of the array and the number of the maximal sums you need to find.</p>

<p>The following line contains <b>N</b> space separated integer numbers denoting the array <b>A</b>.</p>

<h3>Output</h3>
<p>Output <b>K</b> space separated integers where the <b>i<sup>th</sup></b> integer denotes the <b>i<sup>th</sup></b> element of <b>L</b>.</p>

<h3>Constraints</h3>
<ul>
<b><li>1 ≤ N ≤ 10<sup>5</sup></li></b>
<b><li>1 ≤ K ≤ min(N*(N+1)/2, 10<sup>5</sup>)</li></b>
<b><li>1 ≤ A<sub>i</sub> ≤ 10<sup>9</sup></li></b>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask 1 (47 pts) : <b>1 ≤ N ≤ 1000, 1 ≤ K ≤ min{N*(N+1)/2, 10<sup>5</sup>}</li></b>
<li>Subtask 2 (53 pts) : <b>1 ≤ N ≤ 10<sup>5</sup>, 1 ≤ K ≤ min{N*(N+1)/2, 10<sup>5</sup>}</li></b>
</ul>

<h3>Example</h3>
<pre>
<b>Input 1</b>
<tt>3 4
1 3 4</tt>

<b>Output 1</b>
<tt>8 7 4 4</tt>

<b>Input 2</b>
<tt>3 3
10 2 7</tt>

<b>Output 2</b>
<tt>19 12 10</tt>
</pre>

<h3>Explanation</h3>
<p><b>Test 1:</b><br/>
<img src="https://s3.amazonaws.com/hr-challenge-images/15909/1461161918-8d79d8843c-B.png" title="B.png" />
</p>
<p>The first <b>4</b> elements of it are <b>[8, 7, 4, 4]</b>.</p>