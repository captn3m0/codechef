---
{"category_name":"hard","problem_code":"ZUBSECRT","problem_name":"I - Secrets","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"zubaerkh","problem_tester":null,"date_added":"19-11-2017","tags":{"0":"zubaerkh"},"time":{"view_start_date":1517085000,"submit_start_date":1517085000,"visible_start_date":1517085000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
There are <b>n</b> people who call themselves <i>friends</i>. However, you can't trust people blindly these days! Not each of these people trusts all the other people. The good thing is, still there are some pairs of people who trust each other and consider each other as <i>true friend</i>s. Also, each person has a <i>best friend</i>. Note that a <i>best friend</i> is also a <i>true friend</i>.
</p>

<p>
These relations are symmetric. Formally, person <b>A</b> has several <i>true friend</i>s who also consider <b>A</b> as a <i>true friend</i>. Person <b>A</b> has exactly one <i>best friend</i>, <b>B</b>, and <b>A</b> is also the <i>best friend</i> of <b>B</b>.
</p>

<p>
Each person has a secret. Those <b>n</b> secrets are written on <b>n</b> pieces of papers. Those papers are sealed inside <b>n</b> envelopes. The name of the person, whose secret is written on the paper inside an envelop, is written on the envelope. These <b>n</b> envelopes are distributed among the <b>n</b> people. At each step, one person exchanges the envelope (without opening it) he/she is holding with one of his/her <i>true friend</i>s. Your job is to determine the minimum number of steps (exchanges) required to end up at an arrangement where secret about each person reaches the hand of that person or the best friend of that person, i.e. finally after these exchanges when the envelopes are opened, the secrets of a particular person is either seen by himself or his best friend.
</p>

<h3>Input</h3>
<ul>
<li>
The first line of the input is the number of test cases, <b>T</b>. Description of each test case is given below.
</li>
<li>
The first line of each test case will contain the number of people <b>n</b>.</li>

<li>The second line will contain <b>n</b> space-separated numbers <b>e<sub>1</sub>, e<sub>2</sub>, ... , e<sub>n</sub></b> which is a permutation of <b>1, 2, ... , n</b>. Initially, the <b>i<sup>th</sup></b> person will hold the secret for <b>e<sub>i</sub><sup>th</sup></b> person.</li>

<li>The third line will contain <b>n</b> space-separated numbers <b>f<sub>1</sub>, f<sub>2</sub>, ... , f<sub>n</sub></b> which is a permutation of <b>1, 2, ... , n</b>. The <b>f<sub>i</sub><sup>th</sup></b> person is the best friend of the <b>i<sup>th</sup></b> person.
</li>
<li>The fourth line will contain a number <b>m</b>.</li>

<li>Each of next <b>m</b> lines will contain two space-separated integers <b>a<sub>i</sub></b> and <b>b<sub>i</sub></b> denoting that <b>a<sub>i</sub></b> and <b>b<sub>i</sub></b> are <i>true friend</i>s. Note that <i>best friend</i>s are <i>true friend</i>s by definition. They will not be explicitly listed as <i>true friend</i>s.
</li>
<li>
An empty line will be printed after each test case.
</li>
</ul>

<h3>Output</h3>
<p>For each test case, print "Case i: ", and then the answer, where i is the testcase number, 1-indexed. The answer should be the required number of steps.  If it's not possible to make all the secrets (envelopes) reach in safe hands, the answer should be <b>"IMPOSSIBLE"</b> (without quotes)</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>n</b> ≤ 10</li>
<li><b>n</b> will be even</li>
<li>0 ≤ <b>m</b> ≤ 10</li>
<li>1 ≤ <b>e<sub>i</sub></b>, <b>f<sub>i</sub></b>, <b>a<sub>i</sub></b>, <b>b<sub>i</sub></b> ≤ <b>n</b>
<li>The answer, if it exists, will be less than or equal to 18.
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
4
2 3 4 1
3 4 1 2
1
2 3

4
2 1 4 3
3 4 1 2
0

<b>Output:</b>
Case 1: 4
Case 2: IMPOSSIBLE
</pre>