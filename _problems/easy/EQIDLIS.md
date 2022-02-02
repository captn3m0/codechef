---
{"languages_supported":{"0":"NA"},"title":"EQIDLIS","category":"NA","old_version":true,"problem_code":"EQIDLIS","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p align="justify">Did you know that Chwee kueh, a cuisine of Singapore, means water rice cake ? Its a variety of the most popular South Indian savory cake, only that we call it here idli :). The tastiest idlis are made in Chennai, by none other than our famous chef, Dexter Murugan. Being very popular, he is flown from Marina to Miami, to serve idlis in the opening ceremony of icpc world finals ( which is happening right now ! ).
</p><p align="justify">There are <b>N</b> students and they are initially served with some idlis. Some of them are angry because they got less idlis than some other. Dexter decides to redistribute the idlis so they all get equal number of idlis finally. He recollects his father's code, "Son, if you ever want to redistribute idlis, follow this method. While there are two persons with unequal number of idlis, repeat the following step. Select two persons A and B,  A having the maximum and B having the minimum number of idlis, currently. If there are multiple ways to select A (similarly B), select any one randomly. Let A and B have P and Q number of idlis respectively and R = ceil( ( P - Q ) / 2 ), Transfer R idlis from A to B."
</p><p align="justify">Given the initial number of idlis served to each student, find the number of times Dexter has to repeat the above step. If he can not distribute idlis equally by following the above method, print -1.

<h3>Notes</h3><ul><li> ceil(x) is the smallest integer that is not less than x.</li></ul>
<br />
<h3>Input</h3>
</p><p>First line contains an integer T ( number of test cases, around 20 ). T cases follows. Each case starts with an integer N ( 1 &lt;= N &lt;= 3000 ). Next line contains an array A of N integers separated by spaces, the initial number of idlis served ( 0 &lt;= A[i] &lt;= N )

<h3>Output</h3>
</p><p>For each case, output the number of times Dexter has to repeat the given step to distribute idlis equally or -1 if its not possible.

<h3>Example</h3>

<pre>
<b>Input:</b>
3
4
1 2 2 3
2
1 2
7
1 2 3 4 5 6 7
<b>Output:</b>
1
-1
3
</pre><br />
<b>Explanation:</b><br /><br />
Case 1 : { 1, 2, 2, 3}. Maximum 3, Minimum 1. R = ceil((3-1)/2) = 1. Transfer 1 idli from person having 3 idlis to the person having 1 idli. Each of them has 2 idlis now, so just 1 step is enough.<br /><br />
Case 2 : {1,2} R = ceil((2-1)/2) = 1. {1,2} -&gt; {2,1} -&gt; {1,2} .... they can never get equal idlis :(<br /><br />
Case 3 : Sorted arrays, in the order encountered {1, 2, 3, 4, 5, 6, 7} -&gt; {2, 3, 4, 4, 4, 5, 6} -&gt; {3, 4, 4, 4, 4, 4, 5} -&gt; {4, 4, 4, 4, 4, 4, 4}
<br /><br />
<i><b>Note</b>There are multiple test sets, and the judge shows the sum of the time taken over all test sets of your submission, if Accepted. Time limit on each test set is 3 sec</i></p>    