---
{"category_name":"easy","problem_code":"ICPC16D","problem_name":"Good Sets","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"18-10-2016","tags":{"0":"admin3"},"time":{"view_start_date":1477153800,"submit_start_date":1477153800,"visible_start_date":1477153800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given array <b>a</b> consisting of <b>n</b> distinct integers. A set <b>s</b> of numbers is called <i>good</i> if you can rearrange the elements in such a way that each element divides the next element in the order, i.e. <b>s<sub>i</sub> | s<sub>i + 1</sub></b>, such that <b>i < |s|</b>, where <b>|s|</b> denotes size of set <b>|s|</b>.
</p>


<p>Find out number of distinct <i>good</i> sets that you can create using the values of the array. You can use one value only once in a particular set; ie. a set cannot have duplicate values. Two sets are said to be different from each other if there exists an element in one set, which does not exist in the other.</p>

<p>As the answer could be large, print your answer modulo <b>10<sup>9</sup> + 7</b>.</p> 

<h3>Input</h3>
<p>First line of the input contains an integer <b>T</b> denoting the number of test cases. <b>T</b> test cases follow.</p>
<p>First line of each test case contains an integer <b>n</b> denoting number of elements in array <b>a</b>.</p>
<p>Next line contains <b>n</b> space separated integers denoting the elements of array <b>a</b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the corresponding answer.</p>


<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 3</b></li>
<li><b>1 ≤ n ≤ 7.5 * 10<sup>5</sup></b></li>
<li><b>1 ≤ a<sub>i</sub> ≤ 7.5 * 10<sup>5</sup></b></li>
<li>All the elements of array <b>a</b> are distinct.</li>
</ul>

<h3>Example</h3>
<pre><b>Input</b>
2
2
1 2
3
6 2 3

<b>Output:</b>
3
5
</pre>


<h3>Explanation</h3>
<p><b>Test case 1.</b> There are three sets which are good <b>{1}</b>, <b>{2}</b>, <b>{1, 2}</b>.</p>
<p><b>Test case 2.</b> There are five sets which are good <b>{6}</b>, <b>{2}</b>, <b>{3}</b>, <b>{6 2}</b>, <b>{6, 3}</b>.</p>
