---
{"category_name":"hard","problem_code":"ZUBSPOIL","problem_name":"H - Unpredictable Array","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"zubaerkh","problem_tester":null,"date_added":"24-11-2017","tags":{"0":"zubaerkh"},"time":{"view_start_date":1517085000,"submit_start_date":1517085000,"visible_start_date":1517085000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Value of an array is defined as the sum of the absolute differences between pairs of consecutive elements in the array. Formally, for a given array <b>A = {A<sub>1</sub>, A<sub>2</sub>, A<sub>3</sub>, ... , A<sub>n</sub>}</b>,
value(<b>A</b>) = <b>|A<sub>1</sub> - A<sub>2</sub>|</b> + <b>|A<sub>2</sub> - A<sub>3</sub>|</b> + <b>|A<sub>3</sub> - A<sub>4</sub>|</b> + ... + <b>|A<sub>n-1</sub> - A<sub>n</sub>|</b>, where |<b>x</b>| means the absolute value of <b>x</b>.
</p>

<p>
You will be given an array <b>A</b> of <b>n</b> integers and <b>q</b> updates. Each update will have two integers <b>x</b> and <b>y</b>. For this update, you should replace <i>all</i> the occurrences of element <b>x</b> in the array with <b>y</b> and output the value of the new array.
</p>

<h3>Input</h3>
<p>
Input starts with an integer <b>T</b>, denoting the number of test cases.
</p>
<p>
The first line of each case contains two integers <b>n</b> and <b>q</b>. The next line contains <b>n</b> space separated integers <b>A<sub>1</sub>, A<sub>2</sub>, A<sub>3</sub>, ... , A<sub>n</sub></b> forming the initial array.
</p>
<p>
Each of next <b>q</b> lines contains two space-separated integers <b>x</b> and <b>y</b>.
</p>

<h3>Output</h3>
<p>For each test case, print <b>"Case t:"</b> (without quotes. <b>t</b> is the test case number) in the first line. Then print <b>q</b> lines. The <b>i<sup>th</sup></b> line should contain the value of the array after the <b>i<sup>th</sup></b> update.

<h3>Constraints</h3>
<p>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>n, q</b> ≤ 100000</li>
<li>1 ≤ <b>A<sub>i</sub>, x, y</b> ≤ 100000</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
5 3
1 2 3 4 5
1 3
3 4
5 1

<b>Output:</b>
Case 1:
4
5
7
</pre>

<h3>Explanation</h3>
<p>
After the first update,</p>
<p><b>A</b> ={3, 2, 3, 4, 5}, Value(<b>A</b>) = |3-2| + |2-3| + |3-4| + |4-5| = 4</p>

<p>
After the second update, </p>
<p><b>A</b> ={4, 2, 4, 4, 5}, Value(<b>A</b>) = |4-2| + |2-4| + |4-4| + |4-5| = 5 </p>

<p>
After the third update, </p>
<p><b>A</b> ={4, 2, 4, 4, 1}, Value(<b>A</b>) = |4-2| + |2-4| + |4-4| + |4-1| = 7</p>
