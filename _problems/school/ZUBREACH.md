---
{"category_name":"school","problem_code":"ZUBREACH","problem_name":"J - Reached Safely Or Not","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"zubaerkh","problem_tester":null,"date_added":"5-11-2017","tags":{"0":"zubaerkh"},"time":{"view_start_date":1517085000,"submit_start_date":1517085000,"visible_start_date":1517085000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Everybody is worried about Rakesh as the boy does not have much knowledge about the real world. He can not go from one place to another on his own. It's high time he learned to explore the city. He is going to a relative's house situated on the other side of the city on his own. As this is his first time, he is carrying a GPS tracker of a special kind. The tracker continuously sends information to the family of Rakesh about his movement. The information is sent using the following four letters: <b>U, D, R,</b> and <b>L</b>. Those letters indicate the moves taken by Rakesh. 
</p>
<p>
The city can be considered as a grid. Rakesh starts his journey from <b>(0, 0)</b> position of the grid. His relative's house is situated at <b>(Rx, Ry)</b>. Rakesh can move in four directions: up, down, right, or left indicated by <b>U, D, R,</b> and <b>L</b> respectively. 
</p>
<p>
Any position of the city with <i>x</i> ordinate negative or greater than <b>M</b> is considered as dangerous. Also, any position of the city with <i>y</i> ordinate negative or greater than <b>N</b> is considered as dangerous. You will be given the total sequence of Rakesh's movement. You need to determine if Rakesh ended up being at his relative's house, at a dangerous place, or at a random place in the city.
</p>
<p>
To make things clear,
<ul>
    <li> <b>U</b> indicates a move that increases position along <i>y</i>-axis by 1 </li>
    <li> <b>D</b> indicates a move that decreases position along <i>y</i>-axis by 1 </li>
    <li> <b>R</b> indicates a move that increases position along <i>x</i>-axis by 1 </li>
    <li> <b>L</b> indicates a move that decreases position along <i>x</i>-axis by 1 </li>
</ul>
</p>
<p>
Note that we are interested in the position of Rakesh at the end of his journey only. He may visit some dangerous place or his relative's house at some intermediate point but that won't affect the answer.
</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of each test case follows.
</li>

<li>The first line of each test case contains two integers <b>M</b> and <b>N</b>.</li>

<li>The second line contains two integers <b>Rx</b> and <b>Ry</b>.</li>

<li>The third line contains the length of Rakesh's move sequence.</li>

<li>The next line contains the move sequence containing letters <b>U, D, R,</b> and <b>L</b> only with no space.</li>
</ul>


<h3>Output</h3>
<p>For each test case, print "Case i: ", and then the answer, where i is the testcase number, 1-indexed. The answer should be any of the following three strings:</p>
<ul>
	<li> <b>"REACHED"</b> if Rakesh could reach his relative's house </li>
	<li> <b>"DANGER"</b> if Rakesh ended up being in a dangerous place </li>
	<li> <b>"SOMEWHERE"</b> if Rakesh ended up being in somewhere safe place in the city other than his relative's place </li>
</ul>
<p>Don't print any quotation mark. Check the sample output.</p>


<h3>Constraints</h3>
<p>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>0 ≤ <b>M, N</b> ≤ 10000</li>
<li>0 ≤ <b>Rx</b> ≤ <b> M </b></li>
<li>0 ≤ <b>Ry</b> ≤ <b> N </b></li>
<li>0 ≤ Sum of the lengths of all sequences ≤ 10000</li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
2
20 20
4 5
13
LLUUUUURRRRRR
10 10
3 4
7
UDUDDRR

<b>Output:</b>
Case 1: REACHED
Case 2: DANGER
</pre>

