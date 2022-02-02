---
{"category_name":"easy","problem_code":"CHN03","problem_name":"Animesh practices some programming contests","languages_supported":{"0":"C","1":"CPP14","2":"JAVA"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"15-01-2016","tags":{"0":"acm15chn","1":"admin2","2":"dynamic"},"time":{"view_start_date":1453546800,"submit_start_date":1453546800,"visible_start_date":1453546800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
As you know, Malvika has created some <b>n</b> programming contests. Each of the contests has three problems, categorized as easy, medium and hard on difficulty level. For the <b>i</b><sup>th</sup> contest, easy problem takes <b>TE[i]</b> hours and gives you <b>PE[i]</b> pleasure. Similarly, medium problem takes <b>TM[i]</b> hours, gives <b>PM[i]</b> pleasure, and a hard one has the values <b>TH[i]</b>, <b>PH[i]</b>.
</p>

<p>
Today, Animesh wanted to practice some of them. Animesh has a really bad habit of trying problems for only a few minutes and saying to Malvika "I am a noob, you are a pro. It's some weird shit I don't know. Please, tell me the solution, bro!" Having been irritated by this behaviour numerous times in the past, she granted him <b>K</b> special powers he can use before starting the practice session. By using a single power, Animesh can pick any two problems irrespective of their difficulty from two different contests and swap them. 
</p>

<p>
Animesh has at max <b>time</b> hours before he gets frustrated by his noobness and ends the practice session. He wants to make the maximum use of it by getting as much pleasure out of this activity as possible. Animesh also gets bored with the contest themes fairly quickly, so he does not want to solve more than one problem from any contest. Can you help Animesh in estimating the maximum amount of pleasure he can achieve out of this activity?
</p>

<h3>Input</h3>
<ul>
<li>The first line of input contains a single integer <b>T</b> denoting number of test cases</li>
<li>For each test case : </li>
<ul>
	<li>The first line contains three space separated integers <b>n, k, time</b>.</li>
	<li>Each of the next <b>n</b> lines contain three space separated integers denoting <b>TE[i], TM[i], TH[i]</b>.</li>
	<li>Each of the next <b>n</b> lines contain three space separated integers denoting <b>PE[i], PM[i], PH[i]</b>.</li>
</ul>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output a single integer in a separate line corresponding to the answer of the problem.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ <b>10</b></li>
<li>1 ≤ <b>n</b> ≤ <b>50</b></li>
<li>0 ≤ <b>k</b> ≤ <b>n * n</b></li>
<li>1 ≤ <b>time</b> ≤ <b>50</b></li>
<li>1 ≤ <b>TE[i], TM[i], TH[i]</b> ≤ <b>50</b></li>
<li>1 ≤ <b>PE[i], PM[i], PH[i]</b> ≤ <b>100000</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
1 0 5
1 2 3
5 3 6
2 1 6
1 2 1
2 3 3
5 3 3
4 6 5

<b>Output:</b>
6
11
</pre>

<h3>Explanation</h3>
<p><b>In the first example</b>, 
Malvika has prepared only one programming contest, its easy problem takes 1 hour and gives 5 units of pleasure. The medium one takes 2 hours and gives 3 units of pleasure whereas the same values for hard are 3 hours and 6 units of pleasure. Animesh has only 5 hours and can select at max one problems out of these to solve. The hard problem is the best candidate to choose for him, it will him give him 6 units of pleasure and take his 5 hours. So, the answer is 6.
</p>

<p><b>In the second example</b>, 
Malvika has prepared two programming contests.
<ul>
	<li>First programming contest:
		<ul>
			<li> Easy problem — 1 hour and 5 units of pleasure.</li>
			<li> Medium problem — 2 hours and 3 units of pleasure.</li>
			<li> Hard problem — 1 hours and 3 units of pleasure.</li>
		</ul>
	</li>
	<li>Second programming contest:
		<ul>
			<li> Easy problem — 2 hours and 4 units of pleasure.</li>
			<li> Medium problem — 3 hours and 6 units of pleasure.</li>
			<li> Hard problem — 3 hours and 5 units of pleasure.</li>
		</ul>
	</li>
</ul>

Animesh has 6 hours and can use at max one swapping power. He can select the easy problem of the first programming contest and the medium problem of the second one. It will take him 4 hours and give him 11 units of pleasure.
</p>