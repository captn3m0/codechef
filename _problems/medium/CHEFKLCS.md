---
{"category_name":"medium","problem_code":"CHEFKLCS","problem_name":"Chef and LCS","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"9-12-2015","tags":{"0":"cook65","1":"dp","2":"dynamic","3":"lcs","4":"medium","5":"mgch"},"editorial_url":"http://discuss.codechef.com/problems/CHEFKLCS","time":{"view_start_date":1450636200,"submit_start_date":1450636200,"visible_start_date":1450636200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK65/mandarin/CHEFKLCS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK65/russian/CHEFKLCS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK65/vietnamese/CHEFKLCS.pdf">Vietnamese</a> as well.</h3>


<p>
Recently, Chef learned how to solve the <a href="https://en.wikipedia.org/wiki/Longest_common_subsequence_problem">Longest common subsequence</a> problem. Being a fan of <a href="https://en.wikipedia.org/wiki/Ekta_Kapoor">Ekta Kapoor</a><sup>1</sup>, he really likes problems which require finding something <b>k</b><sup>th</sup>. Please help him solve one such problem he encountered.
</p>
<p>
Chef wants to know the lexicographically <b>k</b><sup>th</sup> longest common subsequence of any two given strings <b>A</b> and <b>B</b>. In other words, let <b>L</b> be the length of <tt>LCS</tt>(<b>A</b>, <b>B</b>), <b>S</b> be the sorted <b>set</b> of all common sequences of <b>A</b> and <b>B</b> with length <b>L</b>, you should find <b>S<sub>k</sub></b>. Keep in mind that all elements of a <a href="https://en.wikipedia.org/wiki/Set_(mathematics)">set</a> are <b>distinct</b>.
</p>

<h3>Input</h3>
The first line of input contains two integers <b>n</b> and <b>k</b>. The second line contains the string <b>A</b>, and the third contains the string <b>B</b>. Lengths of both <b>A</b> and <b>B</b> equal <b>n</b>. 

<h3>Output</h3>
Output lexicographically <b>k</b><sup>th</sup> longest common subsequence. If such a sequence doesn't exist, output <b>-1</b>.

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>n</b> ≤ 1000</li>
<li>1 ≤ <b>k</b> ≤ 10<sup>9</sup></li>
<li>Each character of <b>A</b> and <b>B</b> is a lowercase Latin letter.</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
<tt>3 3
abc
cba
</tt>
<b>Output:</b>
<tt>c
</tt>

<b>Input:</b>
<tt>5 5
abcba
bacab
</tt>
<b>Output:</b>
<tt>-1</tt>


<b>Input:</b>
<tt>2 2
aa
ab
</tt>
<b>Output:</b>
<tt>-1</tt>
</pre>

<h3>Explanation:</h3>
<p>
<b>Example case 1.</b>
L = LCS(<b>A</b>, <b>B</b>) = 1. There are three common sequences with length L, S = {"a", "b", "c"}. Answer is "c".
</p>
<p>
<b>Example case 2.</b>
L = LCS(<b>A</b>, <b>B</b>) = 3. There are four common sequences with length L, S = {"aca", "acb", "bca", "bcb"}. Answer is "-1".
</p>
<p>
<b>Example case 3.</b>
L = LCS(<b>A</b>, <b>B</b>) = 1. There is only one distinct common sequence with length L, S = {"a"}. Answer is "-1".
</p>

<b>Note:</b> <sup>1</sup>Chef is not really a fan of Ekta Kapoor.