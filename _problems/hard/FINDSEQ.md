---
{"languages_supported":{"0":"NA"},"title":"FINDSEQ","category":"NA","old_version":true,"problem_code":"FINDSEQ","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Given an array <b>A</b> of <b>N</b> integers <b>A[0], A[1], ..., A[N-1]</b> and a string <b>B</b> which is a permutation of <b>"12345"</b>. <br />You have to find a subsequence of 5 elements from <b>A</b> having <b>distinct values</b> such that their relative order is same as <b>B</b>. <br /> Meaning that, if <b>(i<sub>0</sub>, i<sub>1</sub>, i<sub>2</sub>, i<sub>3</sub>, i<sub>4</sub>)</b> are the indexes of such a subsequence <b> (0 &lt;= i<sub>0</sub> &lt; i<sub>1</sub> &lt; i<sub>2</sub> &lt; i<sub>3</sub> &lt; i<sub>4</sub> &lt; N)</b> then:</p>
<li> A[i<sub>0</sub>] is the B[0]-th smallest element among the 5 numbers.</li>
<li> A[i<sub>1</sub>] is the B[1]-th smallest element among the 5 numbers.</li>
<li> A[i<sub>2</sub>] is the B[2]-th smallest element among the 5 numbers.</li>
<li> A[i<sub>3</sub>] is the B[3]-th smallest element among the 5 numbers.</li>
<li> A[i<sub>4</sub>] is the B[4]-th smallest element among the 5 numbers. </li>
<p> </p>
<h3>Input</h3>
<p>The first line of input contains <b>T(&lt;=60)</b> which is the number of tests cases.  The first line of each test case will be an integer <b>N (5&lt;=N&lt;=1000)</b> and a string<b> B</b> containing a permutation of<b> "12345"</b>. Next line will contain <b>N</b> integers <b>A[0], A[1], ..., A[N-1]</b>.  Each of them will be between <b>-10<sup>9</sup> and +10<sup>9</sup></b> (inclusive).</p>
<h3>Output</h3>
<p>For each test case output five space separated integers in ascending order which are the indexes <b>(i<sub>0</sub>, i<sub>1</sub>, i<sub>2</sub>, i<sub>3</sub>, i<sub>4</sub>)</b> of a five length subsequence described before. You may output any solution. If there is no solution just output "-1" without quotes.</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
7 32145
6 17 5 3 13 8 10
7 12345
10 20 30 40 40 20 10

<b>Output:</b>
0 2 3 5 6
-1
</pre>
<p><br /><br /> <b>Explanation of 1st sample:</b> {0, 2, 3, 5, 6} is a valid solution because the values of those indexes {6, 5, 3, 8, 10} will have ranks {3, 2, 1, 4, 5} after sorting. But {0, 2, 3, 4, 5} is not a solution as the values {6, 5, 3, 13, 8} will have ranks {3, 2, 1, 5, 4} after sorting. <br /> <b>Explanation of 2nd sample:</b> There is no five length subsequence in the array that will have ranks {1, 2, 3, 4, 5}  after sorting.</p>    