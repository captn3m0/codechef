---
{"category_name":"medium","problem_code":"BRKTREE","problem_name":"Breaking the Tree","languages_supported":{"0":"C","1":"CPP 4.3.2","2":"CPP 6.3","3":"CPP14","4":"JAVA","5":"PYTH","6":"PYTH 3.5"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"adhyyan1252","problem_tester":null,"date_added":"10-11-2017","tags":{"0":"adhyyan1252"},"time":{"view_start_date":1510331400,"submit_start_date":1510331400,"visible_start_date":1510331400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p> </p>
<p>You are given a tree with N vertices where each vertex has an associated weight <b>A[i]</b>. Let’s call the sum of all weights in a tree <b>W</b>. Removing any edge from the tree will result in two trees, with the sums of each tree being, W<sub>1</sub> and W<sub>2</sub>. 
You will be given <b>Q</b> queries. Each query will have an integer <b>D</b>-short for difference. You should output whether it is possible to remove an edge from the tree, breaking it into two different trees so that<b>|W<sub>1</sub> - W<sub>2</sub>| = D</b> where |x| is the absolute value of x. If this is possible then output “Yes”, otherwise “No”. All queries are independent of each other.
 
.</p>
<p> </p>


<h3>Input</h3>
The first line of each test case contains two integer <b>N</b>, <b>Q</b>  denoting the number of vertices in the trees and number of queries respectively. The next line has <b>N</b> integers, <b>A</b>, the values associated to the node.The next <b>N-1</b> lines each contain 2 integers <b>u</b> and <b>v</b> denoting an edge between vertex u and v.
The next <b>Q</b> lines have 1 integer <b>D</b>.

<h3>Output</h3>
For each query output "Yes" or "No" in a new line(without quotes). 

<h3>Constraints</h3>
<li><b>1</b> ≤ <b>N</b> ≤ <b>2*10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>2*10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A[i]</b> ≤ <b>2*10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>D</b> ≤ <b>2*10<sup>18</sup></b></li>
<p> </p>
<h3>Subtasks</h3>
<li><b>Subtask 1</b>(20 points): <b>N ≤ 2*10<sup>3</sup>,
 Q ≤ 2*10<sup>3</sup></b></li>
<li><b>Subtask 2</b>(20 points): Sum of all <b>A[i]</b> is less than <b>2*10<sup>6</sup></b>. 
<li><b>Subtask 2</b>(60 points): Original constraints

<h3>Example</h3>
<pre><b>Input:</b>
6 4
1 5 7 3 9 2
1 2
1 3
3 4
3 5
5 6
5
27
40
21
<b>Output:</b>
Yes
No
No
Yes
</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> For the first query the answer is "Yes" because the edge between 5 and 6 can be removed. For the second query, it is not possible to remove an edge and get a difference of 27.