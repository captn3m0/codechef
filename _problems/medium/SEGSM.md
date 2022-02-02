---
{"category_name":"medium","problem_code":"SEGSM","problem_name":"Subsegment Sum","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"kr_abhinav","problem_tester":null,"date_added":"26-03-2018","tags":{"0":"kr_abhinav"},"time":{"view_start_date":1522873800,"submit_start_date":1522873800,"visible_start_date":1522873800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Given an array A  = <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>L</sub></b> and queries of 2 types:</p>
<ul>
<li><b>Type 1</b> - represented as 1 <b>i</b> <b>v</b> meaning that you have to change <b>A<sub>i</sub></b> = <b>v</b> (change is carried on for further queries too)</li>
<li><b>Type 2</b> - represented as 2 and explained below</li>
</ul>

<p></p>

<p>A subsegment <b>A<sub>l</sub></b>, <b>A<sub>l+1</sub></b>, ..., <b>A<sub>r</sub></b>, is called <i>interesting</i>, if for all i, such that l < i ≤ r, <b>A<sub>i</sub></b> is either equal to <b>A<sub>i-1</sub></b>, or it is equal to <b>A<sub>i-1</sub></b> + 1. A subsegment of length 1 is also considered to be interesting.</p>

<p>Consider another new array B, which has the elements of A, but in sorted, increasing order. Partition the array B into minimum number of interesting subsegments. You can prove that there is an unique way to do so. In each of those interesting subsegments, find the minimum frequency of an existing element, and add this minimum frequency over all the interesting subsegments in the partition. Output this sum as the answer to the query of Type 2.</p>


<p>Note: Since the input is large, it is recommended to use Fast I/O techniques.</p>

<h3>Input</h3>
<ul>
<li>The first line contains a single integer, <b>L</b>, which is the length of the array</li>
<li>The second line contains <b>L</b> space separated integers: <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>L</sub></b>, which are the original values in the array.</li>
<li>The third line contains a single integer, <b>Q</b>, which is the number of queries.</li>
<li>The next <b>Q</b> lines denote queries as described above</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each query of type 2 print the answer in a new line.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>L</b> ≤ 10<sup>5</sup></li>
<li>0 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>Q</b> ≤ 5*10<sup>5</sup></li>
<li>1 ≤ <b>i</b> ≤ <b>L</b></li>
<li>1 ≤ <b>v</b> ≤ 10<sup>9</sup></li>
<li>1 ≤ Number of queries of type 2 ≤ 3*10<sup>5</sup></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
7
2 7 2 7 1 2 3
4
1 5 2
2
1 7 2
2

<b>Output:</b>
3 
7
</pre>

<h3>Explanation</h3>
<ul>
<li>Initially, array A = {2,7,2,7,1,2,3}.</li>
<li>After the first query array A = {2,7,2,7,2,2,3}.</li>

<li>For the second query, B = {2, 2, 2, 2, 3, 7, 7}. The way to break it into minimum number of interesting subsegments is to partition it into {2,2,2,2,3} and {7,7}. The minimum frequency in the first subsegment is 1 (because 3 appears once), and in the second subsegment, there is only one frequency, which is 2. Therefore, the answer for the second query is 1 + 2 = 3.</li>

<li>After third query array A ={2,7,2,7,2,2,2}.</li>

<li>For the second query, B = {2, 2, 2, 2, 2, 7, 7}. The way to break it into minimum number of interesting subsegments is to partition it into {2,2,2,2,2} and {7,7}. The minimum frequency in the first subsegment is 5 (it is the only frequency), and in the second subsegment, there is only one frequency, which is 2. Therefore, the answer for the second query is 5 + 2 = 7.</li>
</ul>