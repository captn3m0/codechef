---
{"category_name":"medium","problem_code":"AMDRUNK","problem_name":"Drunk Man in Large City","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":8,"source_sizelimit":50000,"problem_author":"balajiganapath","problem_tester":null,"date_added":"21-12-2017","tags":{"0":"balajiganapath"},"time":{"view_start_date":1517693400,"submit_start_date":1517693400,"visible_start_date":1517693400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
A city consists of <b>n</b> junctions that are connected by <b>m</b> bidirectional roads. The junctions are numbered from 1 to <b>n</b>. It is known that each junction has at least two roads incident on it. Also, one can walk from any junction to any other junction using these roads. Moreover, no pair of junctions is connected by more than one road.
</p>

<p>A very drunk man has just walked out of a bar which is situated at junction <b>s</b> and wants to get to his home which is located at junction <b>t</b>. His current junction is <b>s</b>. In every minute the following happens:
</p>
<p>
<ul>
	<li>Step 1: He rationally thinks and chooses one of the roads incident on the current junction and walks along this road.</li>
	<li>Step 2: If he reaches the junction <b>t</b>, he immediately gets home and goes to sleep.</li>
	<li>Step 3: Otherwise, influenced by the desire for adventure, he picks some random road incident on the current junction and walks along this road. The only limitation is that he never picks the road he used to get to this junction at the beginning of the current minute (ie. in Step 1 of this minute).</li>
	<li>Step 4: Now, if he has reached junction <b>t</b>, he sees his home and goes there directly and sleeps.</li>
<li>Step 5: If not, then we go to the next minute, and this repeats.</li>
</ul>
</p>

<p>
Given a description of the city and indices of junctions <b>s</b> and <b>t</b> you have to compute whether the drunk man will surely get home in a finite number of minutes, if he makes optimal choices in all the Step 1's. If so, what is the minimum number of minutes <b>x</b>, such that the man can get home in no more than <b>x</b> minutes whatever his random choices at step 3 of each minute are. That is, what is the minimum <b>x</b>, such that there is a strategy which the man can follow in his Step 1 choices, so that no matter what adversarial choice he makes in the Step 3's, he is guaranteed to reach his home within <b>x</b> minutes?
</p>


<h3>Input</h3>
<ul>
	<li>The first line of the input contains a single integer <b>T</b>  — the number of test cases in this input. Then follow <b>T</b> descriptions of individual test cases.</li>
	<li>The first line of the input contains four integers <b>n</b>, <b>m</b>, <b>s</b> and <b>t</b>  — the number of intersections and the number of roads in the city, the index of the intersection where the bar is located and the index of the intersection where the drunk man's house is, respectively.</li>
	<li>The i<sup>th</sup> of the following <b>m</b> lines contains two integers <b>u<sub>i</sub></b> and <b>v<sub>i</sub></b>  — indices of the junctions connected by the i<sup>th</sup> road.</li>
</ul>

<h3>Output</h3>
<ul>
	<li>If there is no strategy for him to reach home definitely, output -1 in a new line.</li>
<li>Otherwise, print how many minutes the drunk man needs to get home in the worst possible scenario if he always behaves optimally in the Step 1 of every minute.</li>
</ul>


<h3>Constraints</h3>
<ul>
	<li>1 ≤ <b>T</b> ≤ 100000</li>
	<li>3 ≤ <b>n</b>, <b>m</b> ≤ 300000</li>
	<li>1 ≤ <b>s</b>, <b>t</b> ≤ <b>n</b></li>
	<li><b>s</b> ≠ <b>t</b></li>
	<li>1 ≤ <b>u<sub>i</sub></b>, <b>v<sub>i</sub></b> ≤ <b>n</b></li>
	<li><b>u<sub>i</sub></b> ≠ <b>v<sub>i</sub></b></li>
	<li> It is guaranteed that it is possible to get from any junction to any other junction moving along the roads, each junction has at least two incident roads and no two roads connect the same pair of junctions.</li>
	<li>It is guaranteed that both the total number of intersections and the total number of roads over all test cases in one input file won't exceed 1000000</li
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
2
4 5 1 2
1 3
1 4
3 4
2 4
2 3
6 9 1 6
1 2
1 3
2 3
2 4
2 5
3 4
3 5
4 6
5 6

<b>Output:</b>
2
-1
</pre>

<h3>Explanation</h3>
<p><b>Testcase 1</b>: Consider the strategy where the drunk man first moves to junction 3 in Step 1 of the first minute. Then in Step 3 of the first minute, he randomly picks the road to junction 2 or the road to junction 4. In case he had picked the road to junction 2, he reaches home in just 1 minute. If not, he ends up at junction 4 at the end of the first minute. Then, in Step 1 of the second minute, he picks the road between 4 and 2, and goes to junction 2, thus reaching his home in the second minute. Thus, no matter what random choices he makes in the Step 3's, he is guaranteed to reach his house within the first two minutes.</p>

<p><b>Testcase 2</b>: You can show that in the worst case, the drunk man will could be stuck between among the junctions {1, 2, 3, 4, 5} forever.</p>