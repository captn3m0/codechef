---
{"category_name":"medium","problem_code":"AMSEQT","problem_name":"Sequence Transmission","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"satej ","problem_tester":"gamabunta","date_added":"17-05-2013","tags":{"0":"bit","1":"cook34","2":"dynamic","3":"easy","4":"satej"},"editorial_url":"http://discuss.codechef.com/problems/AMSEQT","time":{"view_start_date":1368988200,"submit_start_date":1368988200,"visible_start_date":1368988200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p style="text-align:justify"><b>WARNING: This problem has large input / output files. Use of faster I/O methods is recommended.</b></p>
<p style="text-align:justify">Chef has encrypted the super secret recipe for his bitsoup into a sequence of <b>N</b> unsigned integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ... <b>A<sub>N</sub></b>. Each of these are <b>M bit integers</b> - meaning, their binary representation will only have at most <b>M</b> bits.</p>
<p style="text-align:justify">Chef is now transmitting this recipe to the Sous Chef. He <b>partitions the sequence</b> into several <b>disjoint</b>, <b>contiguous</b> groups and sends them one by one. Each partition may contain one or more integers which are contiguous in the sequence. Chef can partition a sequence of <b>N</b> integers in many ways, but the receiving program of the Sous Chef has a constraint.</p>
<p style="text-align:justify">For each group of integers it receives, let <b>S</b> represent the sum of the integers in the group. The receiver program only accepts the group of integers if the <b>M<sup>th</sup> least significant bit</b> of <b>S</b> is <b>0</b>. See the explanation section for clarity.</p>
<p style="text-align:justify">Chef wants to know how many ways exist to partition the recipe such that the Sous Chef can receive it completely.</p>
<h3>Input</h3>
<p style="text-align:justify">The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains two integers <b>N</b> and <b>M</b> denoting the length of Chef's sequence and the number of bits that are adequate to represent each number in the sequence. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ... <b>A<sub>N</sub></b> denoting the sequence.</p>
<h3>Output</h3>
<p style="text-align:justify">For each test case, output a single integer denoting the number ways you can partition Chef's sequence such that the Sous Chef's receiving program will accept each partition. Since this number can be very large output this number modulo <b>1000000009</b>.</p>
<h3>Constraints</h3>
<p><b>1 &le; T &le; 10</b><br />
<b>1 &le; N &le; 200000</b><br />
<b>1 &le; M &le; 18</b><br />
<b>1 &le; A<sub>i</sub> &lt; 2<sup>M</sup></b></p>
<h3>Sample</h3>
<pre>
<b>Input:</b>
4
6 10
4 4 4 4 4 4
6 3
4 4 4 4 4 4
5 8
1 1 1 1 128
7 4
4 5 6 7 8 9 10

<b>Output:</b>
32
4
0
3

</pre><h3>Explanation</h3>
<p style="text-align:justify"><b>Test Case 1.</b> You can partition the sequence in 32 ways. Note that the sum of all the numbers in the sequence is 24. The 10<sup>th</sup> bit in 24 is already 0. Any partition's sum will be less than or equal to 24 anyway, thus each partitioning way is valid. Thus the answer is 32.</p>
<p style="text-align:justify">If you don't see why the answer is 32, consider the following</p>
<p>
<ul>
<li>There is only 1 partition of { 4 }</li>
<li>There are 2 partitions of { 4, 4 } =&gt; { {4}, {4} } and { {4,4} }</li>
<li>There are 4 partitions of { 4, 4, 4 } =&gt; { {4}, {4}, {4} }, { {4}, {4,4} }, { {4,4}, {4} } and { {4,4,4} }</li>
<li>There are 8 partitions of { 4, 4, 4, 4 } and so on..</li>
</ul>
</p>
<p style="text-align:justify"><b>Test Case 2.</b>The following 4 ways are the only ways to partition the sequence so that the Sous Chef's program accepts all the partitions.</p>
<p>
<ul>
<li>{ {4,4}, {4,4}, {4,4} } =&gt; The 3<sup>rd</sup> bit is 0 in 8, which is the sum of values in each of the partitions.</li>
<li>{ {4,4}, {4,4,4,4} } =&gt; The 3<sup>rd</sup> bit is 0 in 8 as well as 16, which is the sum of values in the two partitions respectively.</li>
<li>{ {4,4,4,4}, {4,4} }</li>
<li>{ {4,4,4,4,4,4} }</li>
</ul>
</p>
<p style="text-align:justify"><b>Test Case 3.</b> There is no way you can put 128 in any partition with the given sequence such that the Sous Chef's receiver would accept the partition.</p>
<p style="text-align:justify"><b>Test Case 4.</b> The following 3 partitions are valid.</p>
<p>
<ul>
<li>{ {4}, {5}, {6}, {7,8,9,10} }</li>
<li>{ {4}, {5}, {6,7,8}, {9,10} }</li>
<li>{ {4,5,6,7,8,9,10} }</li>
</ul>
</p>
