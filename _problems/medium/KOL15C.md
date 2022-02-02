---
{"category_name":"medium","problem_code":"KOL15C","problem_name":"Just Update and Print the array","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"devuy11","problem_tester":null,"date_added":"11-10-2015","tags":{"0":"acmkol15","1":"devuy11","2":"medium","3":"offline","4":"range","5":"sqrt"},"editorial_url":"http://discuss.codechef.com/problems/KOL15C","time":{"view_start_date":1446296400,"submit_start_date":1446296400,"visible_start_date":1446296400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
You are given a 1-indexed array of size <b>N</b>. Initially, all elements of the array are zeros. You need to perform <b>U</b> updates to the array.
</p>
<p>
Each Update asks you to add <b>1</b> to the elements of the array at the indices specified by '<b>a</b>x+<b>b</b>' for all non-negative integers x, where <b>a</b> and <b>b</b> are positive integers which specify an update query.
</p>
<p>
After performing all the updates to the array, print the array with every entry separated by space.
</p>

<h3>Input</h3>
<p>First Line of the input contains 2 space separated integers <b>N, U</b>.</p>
<p>Each of the next <b>U</b> lines contains 2 space-separated integers: <b>a</b> and <b>b</b>, specifying an update.</p>

<h3>Output</h3>
<p>Output the array in a single line after all updates.</p>


<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>a, b</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>U</b> ≤ <b>2*10<sup>5</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
7 4
1 3
7 7
7 3
2 2

<b>Output:</b>
0 1 2 2 1 2 2
</pre>

<h3>Explanation</h3>
Array after first update : [0,0,1,1,1,1,1]<br/>
Array after second update : [0,0,1,1,1,1,2]<br/>
Array after third update : [0,0,2,1,1,1,2]<br/>
Array after fourth update : [0,1,2,2,1,2,2]<br/>