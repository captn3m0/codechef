---
{"category_name":"hard","problem_code":"KOL15D","problem_name":"Seats","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"balajiganapath","problem_tester":null,"date_added":"11-10-2015","tags":{"0":"acmkol15","1":"balajiganapath","2":"maps","3":"medium","4":"tree","5":"tree"},"editorial_url":"http://discuss.codechef.com/problems/KOL15D","time":{"view_start_date":1446296400,"submit_start_date":1446296400,"visible_start_date":1446296400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
There are <b>N</b> seats in a theatre, all of them in a single row. The seats are numbered from 1 to <b>N</b>. You are given two types of events:
</p>
<ul>
<li><b>1</b> — A person arrives. Persons are numbered from 1 in order of their arrival.</li>
<li><b>2 i</b> — Person <b>i</b> leaves the theatre.</li>
</ul>
<p>
A person arriving in the theatre chooses a seat according to the following algorithm:<br/>
If the entire theatre is empty, the person will occupy seat 1.<br/>
Otherwise, he will occupy the seat which is farthest possible from any nearest seated persons. In other words, in the seat which maximizes the minimum distance to any other person currently seated. If there are many such seats, the person will occupy the leftmost of them.
</p>

<h3>Input</h3>
The first line of input contains 2 space-separated integers: the first is <b>N</b>, denoting the number of seats, and the second is <b>Q</b>, denoting the number of events.
Then <b>Q</b> events follow in the format described above.

<h3>Output</h3>
For each person arriving, output the seat number that he occupies.

<h3>Constraints</h3>
<ul>
<li>1 ≤ N ≤ 10<sup>18</sup></li>
<li>1 ≤ Q ≤ 2 * 10<sup>5</sup></li>
<li>Each query is valid.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2 7
1
1
2 1
1
2 2
2 3
1

<b>Output:</b>
1
2
1
1
</pre>

<br><b>Explanation:</b><br>
Initially both seats are empty (x denotes empty seat and number denotes id of person occupying it):<br>
xx<br><br>

Query 1: Person #1 arrives and takes seat 1 (so output 1):<br>
1x<br><br>

Query 2: Person #2 arrives and takes seat 2 (so output 2):<br>
12<br><br>

Query 3: Person #1 leaves:<br>
x2<br><br>

Query 4: Person #3 arrives and takes seat 1 (so output 1):<br>
32<br><br>

Query 5: Person #2 leaves:<br>
3x<br><br>

Query 6 Person #3 leaves:<br>
xx<br><br>

Query 7: Person #4 arrives and takes seat 1 (so output 1):<br>
4x<br><br>


