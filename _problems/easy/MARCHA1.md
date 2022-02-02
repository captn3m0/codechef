---
{"languages_supported":{"0":"NA"},"title":"MARCHA1","category":"NA","old_version":true,"problem_code":"MARCHA1","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>
<p><b>A tutorial for this problem is available <a title="here" href="/wiki/tutorial-paying">here</a></b></p>
<p><b>The following problem appeared in the <a href="/MARCH09/">CodeChef March '09 Challenge</a></b></p>
<p>In the mysterious country of Byteland, everything is quite different from what you'd   normally expect. In most places, if you were approached by two mobsters in a dark alley, they would   probably tell you to give them all the money that you have. If you refused, or didn't have any -   they might even beat you up.</p>
<p>In Byteland the government decided that even the slightest chance of someone getting injured has to be ruled out. So, they introduced a strict policy. When a mobster approaches you in a dark   alley, he asks you for a specific amount of money. You are obliged to show him all the money that   you have, but you only need to pay up if he can find a subset of your banknotes whose total value   matches his demand. Since banknotes in Byteland can have any positive integer value smaller than   one thousand you are quite likely to get off without paying.</p>
<p>Both the citizens and the gangsters of Byteland have very positive feelings about the system. No one ever   gets hurt, the gangsters don't lose their jobs, and there are quite a few rules that minimize that  probability of getting mugged (the first one is: don't go into dark alleys - and this one is said to work in other places also).</p>
<h3>Input</h3>
<p>The first line contains integer <i>t</i>, the number of test cases (about 100). Then <i>t</i> test cases follow. Each test case starts with <i>n</i>, the   number of banknotes in your wallet, and <i>m</i>, the amount of money the muggers asked of you. Then <i>n</i> numbers follow, representing values of your banknotes. Your wallet does not hold more than 20 banknotes, and the value of a single banknote is never more than 1000.</p>
<h3>Output</h3>
<p>For each test case output a single line with the word 'Yes' if there is a subset of your banknotes that sums  to <i>m</i>, and 'No' otherwise.</p>
<h3>Example</h3>
<pre><b>Input:</b>
5
3 3
1
1
1
5 11
1
2
4
8
16
5 23
1
2
4
8
16
5 13
1
5
5
10
10
20 132
17
6
4
998
254
137
259
153
154
3
28
19
123
542
857
23
687
35
99
999

<b>Output:</b>
Yes
Yes
Yes
No
Yes
</pre><p> </p>
<p><b>Explanation:</b> For example, in the last case you have to pay up, since: 6+3+123=132.</p>
    