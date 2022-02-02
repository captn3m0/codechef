---
{"category_name":"easy","problem_code":"KTHMAX","problem_name":"Kth Max Subarray","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"kevind","problem_tester":"kevinsogo","date_added":"30-08-2016","tags":{"0":"kevind"},"time":{"view_start_date":1481535000,"submit_start_date":1481535000,"visible_start_date":1481535000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/mandarin/KTHMAX.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/russian/KTHMAX.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/vietnamese/KTHMAX.pdf">Vietnamese</a> as well.</h3>

<p> 
You are given an array <b>A</b> of size <b>N</b>. Let us list down all the subarrays of the given array. There will be a total of <b>N * (N + 1) / 2</b> subarrays of the given array. Let us sort each of the subarrays in descending order of the numbers in it. 
</p>

<p>
Now you want to sort these subarrays in descending order. You can compare two subarrays <b>B</b>, <b>C</b>, as follows.</p>

<pre>
<code>
    <b>compare</b>(B, C):
        Append <b>N</b> - |B| zeros at the end of the array B.
        Append <b>N</b> - |C| zeros at the end of the array C.
        <b>for</b> i = 1 <b>to</b> <b>N</b>:
            <b>if</b> B[i] < C[i]:
                <b>return</b> B is less than C
            <b>if</b> B[i] > C[i]:
                <b>return</b> B is greater than C
        <b>return</b> B and C are equal.
</code>
</pre>

<p>
You are given <b>M</b> queries asking for the maximum element in the <b>p<sup>th</sup></b> subarray (1-based indexing).
</p>

<h3>Input</h3>
<p>The first line of input contains <b>T</b>, the number of test cases.</p>

<p>The first line of each test case contains two space separated integers <b>N</b> and <b>M</b>, denoting the array size and the number of queries respectively.</p>
<p>The next line contains <b>N</b> space-separated integers denoting the array elements.

<p>Each of the next <b>M</b> lines contains a single integer - <b>p</b>.</p>

<h3>Output</h3>
<p>Output a single integer corresponding to the maximum element in the <b>p<sup>th</sup></b> subarray.</p>

<h3>Constraints</h3>

<ul>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>p</b> ≤ <b><sup><b>N+1</b></sup><b>C</b><sub><b>2</b></sub></b></li>
</ul>

<h3>Subtasks</h3>
<b>Subtask #1 (20 points):</b>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>200</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10<sup>4</sup></b></li>
</ul> 
<p></p>
<b>Subtask #2 (30 points):</b>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>3000</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10<sup>4</sup></b></li>
</ul> 
<p></p>
<b>Subtask #3 (50 points):</b>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10<sup>5</sup></b></li>
</ul> 

<h3>Example</h3>
<pre><b>Input:</b>
<tt>1
4 2
3 1 2 4
1
5</tt>

<b>Output:</b>
<tt>4
3</tt>
</pre>
