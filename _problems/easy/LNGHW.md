---
{"category_name":"easy","problem_code":"LNGHW","problem_name":"Long Homework","languages_supported":{"0":"C","1":"CPP 4.3.2","2":"CPP 6.3","3":"CPP14","4":"JAVA","5":"PYTH","6":"PYTH 3.5"},"max_timelimit":"1 - 2","source_sizelimit":50000,"problem_author":"adhyyan1252","problem_tester":null,"date_added":"10-11-2017","tags":{"0":"adhyyan1252"},"time":{"view_start_date":1510331400,"submit_start_date":1510331400,"visible_start_date":1510331400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p> </p>
<p>Your teacher is very evil and gives you a lot of homework. In fact, the homework she gives you takes so much time that you get barely anytime to sleep. Today, she gave an extra-long homework:
The teacher has given you a list <b>A</b> of <b>N distinct</b> integers, <b>Q</b> queries and an integer <b>M</b>. Each query will have two integers, <b>i</b> and <b>R</b>. You have to find j, such that a[j] is the i<sup>th</sup> smallest element for which <b>a[j]%M = R</b>. 
.</p>
<p> </p>


<h3>Input</h3>
The first line of each test case contains three integer <b>N</b>, <b>Q</b> and <b>M</b> denoting the number of elements in the array, number of queries and the modulus respectively The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the elements in the array. 
The next <b>Q</b> contains two integers: <b>i</b> and <b>R</b>. 

<h3>Output</h3>
For each query output one integer, <b>j</b>(1-indexed), which is the index such that a[j] is the i<sup>th</sup> smallest element for which <b>a[j]%M = R</b>.  If it doesn't exist then print <b>-1</b>
<p> </p>

<h3>Constraints</h3>
<li><b>1</b> ≤ <b>N, Q, M</b> ≤ <b>2*10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>R</b> ≤ <b>M</b></li>
<li><b>1</b> ≤ <b>A[i]</b> ≤ <b>2*10<sup>8</sup></b></li>
</ul>
<p> </p>
<h3>Subtasks</h3>
<li><b>Subtask 1</b>(20 points): <b>N*Q ≤ 10<sup>6</sup>,</b></li>
<li><b>Subtask 2</b>(80 points): Original constraints
<h3>Example</h3>
<pre><b>Input:</b>
8 5 4
1 5 7 3 9 11 0 4
1 1
2 1
3 1
1 3
5 3

<b>Output:</b>
1
2
5
4
-1
</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> For the first query the answer is 1 because a[1] is 1, which is the smallest element in the array with remainder 1. </p>