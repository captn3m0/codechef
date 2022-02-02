---
{"category_name":"school","problem_code":"CHEFARRP","problem_name":"Chef and Subarrays","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"9-12-2015","tags":{"0":"ad","1":"cook65","2":"mgch","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CHEFARRP","time":{"view_start_date":1450636200,"submit_start_date":1450636200,"visible_start_date":1450636200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK65/mandarin/CHEFARRP.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK65/russian/CHEFARRP.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK65/vietnamese/CHEFARRP.pdf">Vietnamese</a> as well.</h3>


<p>
Chef likes problems involving arrays. Unfortunately, the last one he tried to solve didn't quite get solved.
</p>

<p>
Chef has an array <b>A</b> of <b>N</b> positive numbers. He wants to find the number of subarrays for which the sum and product of elements are equal.
</p>

<p>
Please help Chef find this number.
</p>

<h3>Input</h3>
The first line of input contains an integer <b>T</b> denoting the number of test cases. <b>T</b> test cases follow. The first line of each test contains the integer <b>N</b>. The next line contains <b>N</b> integers — <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> — denoting the array.

<h3>Output</h3>
For each test case, output a single line with the answer for the instance.

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 50</li>
<li>1 ≤ <b>n</b> ≤ 50</li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9<sup></li>
<li><b>A<sub>1</sub></b> * <b>A<sub>2</sub></b> * ... * <b>A<sub>n</sub></b> ≤ 10<sup>9<sup> </li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
<tt>3
3
1 3 2
4
4 1 2 1
6
1 2 2 2 2 1
</tt>
<b>Output:</b>
<tt>4
5
9</tt>
</pre>

<h3>Explanation:</h3>
<p>
<b>Example case 1.</b> There are 4 such subarrays: <b>A</b>[1..1], <b>A</b>[2..2], <b>A</b>[3..3], <b>A</b>[1..3]. Consider <b>A</b>[1..3], sum = 1 + 3 + 2 = 6, product = 1 * 3 * 2 = 6.
</p>