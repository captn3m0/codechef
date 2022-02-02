---
{"category_name":"easy","problem_code":"EQUALIZ","problem_name":"Equalization","languages_supported":{"0":"C","1":"CPP 4.9.2","2":"CPP14","3":"JAVA"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"gennady.korotkevich","problem_tester":"gamabunta","date_added":"4-10-2012","tags":{"0":"cook27","1":"gennady","2":"simple"},"time":{"view_start_date":1350845084,"submit_start_date":1350845084,"visible_start_date":1350845041,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p style="text-align:justify">Bob has an array consisting of <b>N</b> integers. He wants to perform a sequence of operations after which all the numbers in the array will be equal.</p>
<p style="text-align:justify">Each operation consists of choosing any <b>prime</b> integer <b>P</b>. Bob then chooses any <b>P</b> numbers from the array and replaces each of them by the <b>arithmetic mean</b> of these <b>P</b> numbers (leaving them at the same places in the array as before this operation). Note that the resulting numbers may not be integer.</p>
<p style="text-align:justify">Help Bob, find a sequence of operations which achieves his goal. It is guaranteed that this goal is always achievable. The sequence is <b>not</b> required to be the shortest, but it should consist of <b>no more than 1000</b> operations.</p>
<h3>Input</h3>
<p style="text-align:justify">The first line of the input contains a single integer <b>T</b>, the number of test cases (no more than 20). Each test case is described by two lines. The first line contains a single integer <b>N</b> (2 ≤ <b>N</b> ≤ 30). The second line contains <b>N</b> integers <b>A<sub>i</sub></b> (1 ≤ <b>A<sub>i</sub></b> ≤ 1000) separated by single spaces.</p>
<h3>Output</h3>
<p style="text-align:justify">For each test case output a line containing a single integer <b>K</b> (0 ≤ <b>K</b> ≤ 1000), the number of operations in your sequence, followed by <b>K</b> lines describing the operations in the order of execution. In the <b>i<sup>th</sup></b> of these lines, print a prime integer <b>P<sub>i</sub></b> (2 ≤ <b>P<sub>i</sub></b> ≤ <b>N</b>) followed by <b>P<sub>i</sub></b> distinct space-separated integers <b>B<sub>i, j</sub></b> (1 ≤ <b>B<sub>i, j</sub></b> ≤ <b>N</b>), the <b>1-based indices</b> of the elements in the array which are chosen for this operation. See the Example Section below for clarity.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
6
4
5 6 7 8
7
9 5 4 9 4 2 11
6
42 42 42 42 42 42
6
9 1 8 2 7 3
12
7 2 6 9 3 9 11 2 5 1 4 13
9
12 10 5 14 16 3 2 1 9

<b>Output:</b>
2
2 2 3
2 1 4
1
7 3 1 7 4 6 2 5
0
5
3 1 2 3
3 4 5 6
2 1 4
2 2 5
2 3 6
16
3 1 2 3
3 4 5 6
2 1 4
2 2 5
2 3 6
3 7 8 9
3 10 11 12
2 7 10
2 8 11
2 9 12
2 1 7
2 2 8
2 3 9
2 4 10
2 5 11
2 6 12
6
3 1 2 3
3 4 5 6
3 7 8 9
3 1 4 7
3 2 5 8
3 3 6 9
</pre><h3>Explanation</h3>
<p style="text-align:justify">In the first test case, the initial array is (5, 6, 7, 8). The array after the first operation is (5, 6.5, 6.5, 8). The array after the second operation is (6.5, 6.5, 6.5, 6.5).</p>
<p style="text-align:justify">In the second test case, all the elements of the array become equal to 44/7 after the only operation.</p>
<p style="text-align:justify">In the third test case, all the elements of the array are already equal, so no operations are needed.</p>
<p style="text-align:justify">In the last test case, after the first 3 operations the array becomes (9, 9, 9, 11, 11, 11, 4, 4, 4). After all the operations are complete, the array looks like (8, 8, 8, 8, 8, 8, 8, 8, 8).</p>
