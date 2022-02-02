---
{"category_name":"easy","problem_code":"ZUBRIDER","problem_name":"C - Club of Riders","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"zubaerkh","problem_tester":null,"date_added":"6-11-2017","tags":{"0":"zubaerkh"},"time":{"view_start_date":1517085000,"submit_start_date":1517085000,"visible_start_date":1517085000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
At a shopping mall, every now and then, a naughty kid steals some chocolates from different chocolate shops and runs away. The guards in the shopping mall were unable to catch the kid as he has got a fast scooter.
</p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/ACM17KOL/ZUBRIDER/club_of_riders.png">
<p>
Each scooter has a performance value. Also, this kind of scooter needs a skilled rider to perform well. The total performance of a rider is measured by the value of scooter performance multiplied by rider’s skill. A rider <b>X</b> can catch a rider <b>Y</b> only if <b>X</b>’s total performance is more than <b>Y</b>’s.The shopping mall manager has bought one scooter for each guard. However, as he has bought them from an wholesale offer, their performance values need not be the same.
</p>
<p>
Each guard gets a scooter and of course, a scooter can be assigned to only one guard. Now, the manager wants to assign the scooters to the guards. Everyday the guards are on duty in different places and that's why each has to be able to catch the kid and only then an assignment will be valid.
</p>
<p>
So in short, given the skill of that kid, his scooter’s performance value, each guard’s skill, and each scooter’s performance value, find out the number of valid assignments possible. In a valid assignment, each guard will be able to catch the kid. As the result can be very large, find the mod 10<sup>9</sup> + 7 of the result.
</p>


<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of each test case follows.</li>

<li>The first line of each test case contains two integers <b>K<sub>p</sub></b> and <b>K<sub>s</sub></b> denoting the kid's performance value and his scooter's performance value respectively.</li>

<li>The next line contains a single integer <b>N</b> denoting the number of guards.</li>

<li>The third line contains <b>N</b> integers <b>G<sub>1</sub>, G<sub>2</sub>, G<sub>3</sub>, ... , G<sub>N</sub></b> denoting the performance values of the guards.</li>

<li>The fourth line of each test case contains <b>N</b> integers <b>S<sub>1</sub>, S<sub>2</sub>, S<sub>3</sub>, ... , S<sub>N</sub></b> denoting the performance values of the scooters.</li>

<h3>Output</h3>
<p>For each test case, print "Case i: ", and then the answer (mod 10<sup>9</sup> + 7), where i is the testcase number, 1-indexed.</p>

<h3>Constraints</h3>
<p>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N, K<sub>p</sub>, K<sub>s</sub>, G<sub>i</sub>, S<sub>i</sub></b> ≤  10<sup>6</sup></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
2 3
3
3 1 3
7 3 4
2 3
3
3 1 3
2 7 4

<b>Output:</b>
Case 1: 2
Case 2: 0
</pre>

<h3>Explanation</h3>
<p>
<b>Testcase 1:</b> The valid arrangements are the following:
<ul>
	<li>[1<sup>st</sup> guard, 2<sup>nd</sup> scooter], [2<sup>nd</sup> guard, 1<sup>st</sup> scooter], [3<sup>rd</sup> guard, 3<sup>rd</sup> scooter]</li>
	<li>[1<sup>st</sup> guard, 3<sup>rd</sup> scooter], [2<sup>nd</sup> guard, 1<sup>st</sup> scooter], [3<sup>rd</sup> guard, 2<sup>nd</sup> scooter]</li>
</ul>
</p>

<p><b>Testcase 2:</b> There is no valid arrangement.</p>