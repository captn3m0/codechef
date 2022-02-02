---
{"category_name":"medium","problem_code":"RAWPOWER","problem_name":"K - Raw Power","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"architk","problem_tester":null,"date_added":"22-12-2017","tags":{"0":"architk"},"time":{"view_start_date":1517085000,"submit_start_date":1517085000,"visible_start_date":1517085000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>The University of Geo Tech, Riga has a new doctoral student on the block who calls himself Raw Power. He has <b>N</b> meetings lined up today and wants to avoid them all.</p>

<p>The i<sup>th</sup> meeting takes place from time units <b>s<sub>i</sub></b> to <b>t<sub>i</sub></b>. Raw power wants to move meetings around so that the amount of time for which all meetings are simultaneously scheduled is maximized. Once he does this, he will send an email to his advisor citing this number to justify the cancellation.</p>

<p>Of course moving meetings around affects a student's credibility. Specifically moving a meeting from time period [<b>s<sub>i</sub></b>, <b>t<sub>i</sub></b>] to [<b>s<sub>i</sub></b> + a, <b>t<sub>i</sub></b> + a] is possible for any <i>integer</i> a but reduces credibility by |a| (|x| denotes absolute value of x). Raw Power currently has a credibility of <b>K</b> and is willing to sacrifice it all. He needs your help to know the maximum possible intersection of all meeting times that he can achieve whilst keeping his credibility non-negative.</p>

<p> Formalizing intersection: Given a set of meetings each with a start and end time, let the maximum start time over all meetings be s and the minimum end time over all meetings be e. The intersection time of all meetings is 0 if s>=e and e-s otherwise.</p>

<h3>Input</h3>
<ul>
<li>The first line contains a single integer <b>N</b>, the total number of meetings scheduled. </li>
<li><b>N</b> lines follow, the i<sup>th</sup> of which contains integers <b>s<sub>i</sub></b> and <b>t<sub>i</sub></b>, the start time and end time of the i<sup>th</sup> meeting.</li>
<li>The next line contains a single integer <b>Q</b>, denoting the number of queries.</li>
<li><b>Q</b> lines follow, the i<sup>th</sup> of which contains an integer <b>K</b> denoting the available credibility. Note that all the queries are indepedent.
</ul>

<h3>Output</h3>
<ul>
<li>Output <b>Q</b> lines, the i<sup>th</sup> of which should contain a single integer, the answer for test case i. This value denotes the maximum attainable intersection of all meetings under the constraint of available credibility.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤  <b>N</b>  ≤ 300000</li>
<li>0  ≤ <b>s<sub>i</sub></b>  ≤  <b>t<sub>i</sub></b>  ≤  10<sup>9</sup></li>
<li>1 ≤ <b>Q</b> ≤ 20</li>
<li>0 ≤ <b>K</b> ≤ 10<sup>18</sup></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4
5 10
2 12
14 25
7 19
7
100000
4
5
6
7
8
9

<b>Output:</b>
5
0
1
2
3
4
5
</pre>
<p> </p>

<b>Explanation:</b>
<p>If the total credibility is 6, one way to obtain an intersection of 2 is to move the meeting [14, 25] to [8, 19] so that all meetings intersect in the time range [8, 10].</p>
