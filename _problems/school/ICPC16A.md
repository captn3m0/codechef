---
{"category_name":"school","problem_code":"ICPC16A","problem_name":"Help Lost Robot!","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"18-10-2016","tags":{"0":"admin3"},"time":{"view_start_date":1477153800,"submit_start_date":1477153800,"visible_start_date":1477153800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Robot Bunny is lost. It wants to reach its home as soon as possible. Currently it is standing at coordinates <b>(x<sub>1</sub>, y<sub>1</sub>)</b> in 2-D plane. Its home is at coordinates <b>(x<sub>2</sub>, y<sub>2</sub>)</b>. Bunny is extremely worried. Please help it by giving a command by telling the direction in which it should to go so as to reach its home. If you give it a direction, it will keep moving in that direction till it reaches its home. There are four possible directions you can give as command - <b>"left", "right", "up", "down"</b>. It might be possible that you can't instruct the robot in such a way that it reaches its home. In that case, output <b>"sad"</b>.
</p>

<h3>Input</h3>
<p>First line of the input contains an integer <b>T</b> denoting the number of test cases. <b>T</b> test cases follow.</p>
<p>First line of each test case contains four space separated integers <b>x<sub>1</sub>, y<sub>1</sub>, x<sub>2</sub>, y<sub>2</sub></b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing <b>"left"</b> or <b>"right"</b> or <b>"up"</b> or <b>"down"</b> or <b>"sad"</b> (without quotes).</p>


<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 5000</b></li>
<li><b>0</sup></b> ≤  <b>x<sub>1</sub>, y<sub>1</sub>, x<sub>2</sub>, y<sub>2</sub></b>. ≤ <b>100</b></li>
<li>It's guaranteed that the initial position of robot is not his home.</li>
</ul>

<h3>Example</h3>
<pre><b>Input</b>
3
0 0 1 0
0 0 0 1
0 0 1 1

<b>Output:</b>
right
up
sad
</pre>


<h3>Explanation</h3>
<p><b>Test case 1.</b> If you give Bunny the command to move to the right, it will reach its home.</p>