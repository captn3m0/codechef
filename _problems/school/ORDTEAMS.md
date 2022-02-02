---
{"category_name":"school","problem_code":"ORDTEAMS","problem_name":"Ordering teams","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"30-10-2017","tags":{"0":"acmind17","1":"admin2","2":"simple","3":"sorting"},"time":{"view_start_date":1509900600,"submit_start_date":1509900600,"visible_start_date":1509900600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>In ACM-ICPC contests, there are usually three people in a team. For each person in the team, you know their scores in three skills - hard work, intelligence and persistence.</p>

<p>You want to check whether it is possible to order these people (assign them numbers from 1 to 3) in such a way that for each <b>1 ≤ i ≤ 2</b>, <b>i+1</b>-th person is stricly <em>better</em> than the <b>i</b>-th person.</p>

<p>A person <b>x</b> is said to be <em>better</em> than another person <b>y</b> if <b>x</b> doesn't score less than <b>y</b> in any of the skills and scores more than <b>y</b> in at least one skill.</p>

<p>Determine whether such an ordering exists.</p>

<h3>Input</h3>
<p>The first line fo the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>Each test consists of three lines. Each of these lines contains three space separated integers <b>s<sub>1</sub>, s<sub>2</sub></b> and <b>s<sub>3</sub></b> denoting the scores of one member of the team in each of the three skills, in the given order.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing "yes" if such an ordering exists or "no" if doesn't exist (without quotes).

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 1000</b></li>
<li><b>1 ≤ s<sub>1</sub>, s<sub>2</sub>, s<sub>3</sub> ≤ 100</b></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
3
1 2 3
2 3 4
2 3 5
1 2 3
2 3 4
2 3 4
5 6 5
1 2 3
2 3 4

<b>Output</b>
yes
no
yes
</pre>

<h3>Explanation</h3>
<p><b>Test Case 1</b>: We can order them as (3, 2, 1). Person 3 is <i>better</i> than Person 2 because his scores in the first two skills are not lesser than Person 2's. And in skill 3, Person 3 scores higher. Similarly, Person 2 is <i>better</i> than Person 1. He scores more than Person 1 in every skill, in fact.</p>