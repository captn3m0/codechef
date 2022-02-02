---
{"languages_supported":{"0":"NA"},"title":"BB","category":"NA","old_version":true,"problem_code":"BB","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>There is a long long highway leading to Chef's new restaurant. But the problem is that almost no one stops in it, hence it's even unprofitable to hold it now. The only idea Chef has is that the restaurant has not been very well advertised, so it has no clients just because nobody knows about it! In order to change the situation Chef has decided to use some billboards along the highway for advertising.<br /><br /> There are exactly N billboards along the highway. Chef may place advertisements at any subset of billboards. To prevent casual drivers from forgetting about how good the restaurant is, there should be at least K restaurant's advertisement among every M consecutive billboards. But still each billboard's time costs some money, and Chef would like to pay the least amount possible (after all, he has already spent a lot of money for the restaurant at no profit). Now you are to help Chef count the number of different ways to place the minimal number of advertisements still meeting the condition above.</p>
<h3>Input</h3>
<p>The first line of the input contains a single integer T -- the number of test cases (no more than 25). Each of the next T lines describes one test case and contains three integers N, M and K(1 &lt;= K &lt;= M &lt;= 50, M &lt;= N &lt;= 10^9).</p>
<h3>Output</h3>
<p>For each test case output a single line containing the requested number of ways modulo 1 000 000 007.</p>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 2 1
4 2 1
6 3 2

<b>Output:</b>
1
3
6

</pre>
<p><b>Explanation:</b><br /> In the second test case there are 3 ways to place the advertisements: using the 1st and the 3rd, the 2nd and the 3rd, or the 2nd and the 4th billboards.</p>    