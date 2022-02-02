---
{"category_name":"medium","problem_code":"AMRACES","problem_name":"Longest Races","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"balajiganapath","problem_tester":null,"date_added":"21-12-2017","tags":{"0":"balajiganapath"},"time":{"view_start_date":1517693400,"submit_start_date":1517693400,"visible_start_date":1517693400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>The city of Drais once was a capital of bicycle races. The city contained several junctions. Some pairs of junctions are directly connected by a bidirectional road which does not pass through any intermediate junction. In Drias there was a unique simple path to get from any junction to any other. Note that in a simple path, junctions should not be repeated. Also, there is at most one bidirectional road between a pair of junctions. The races were being held annually. Two junctions are said to be <i>farthest apart</i> if the number of roads in the unique simple path between them is maximum possible. Each year the organizers chose a pair of distinct junctions as the start and the finish of the race such that they are a <i>farthest apart</i> pair of junctions. No unordered pair of junctions was chosen more than once. After <b>k</b> years the organizers ran out of pairs of <i>farthest apart</i> junctions, and decided to move the races to a different city.
</p>

<p>These competitions described above occurred a long time ago, it is now impossible to reconstruct the road network which existed at that time. But now you are given the responsibility of building a new city which would meet those properties. And you want to have the minimum number of junctions so as to reduce cost. So, your job is build a road network with the least number of junctions so that if the race were to be held on this road network, it would last for exactly <b>k</b> years. Note that from the earlier description it is clear that every year the race must occur between an unique unordered pair of junctions.
</p>

<h3>Input</h3>
<ul>
	<li>The first line contains the number of test cases <b>T</b></li>
	<li>Each of the next <b>T</b> lines contains a single integer <b>k</b> for the respective test case</li>
</ul>

<h3>Output</h3>
<ul>
	<li>Print answers for the test cases one by one. If there is no network with exactly <b>k</b> pairs of junctions with largest distance, print  -1.</li>

<li>Otherwise, on the first line print an integer <b>n</b>, which should be the smallest number of junctions in a network that satisfies this condition.</li>
</li>On the next <b>n</b> - 1 lines print the description of the road network. Each of these lines should contain two integers, which should be the 1 -  based indices of junctions connected by the respective road.</li>
<li>If there are several possible answers, print any of them.  
	</li>
</ul>

<h3>Constraints</h3>
<ul>
	<li>1 ≤ <b>T</b> ≤ 500</li>
	<li>1 ≤ <b>k</b> ≤ 500</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
3
1
3
4

<b>Output:</b>
2
1 2
4
1 2
1 3
1 4
6
1 2
1 3
1 4
2 5
2 6
</pre>

<h3>Explanation</h3>
<p><b>Testcase 1</b>: The longest path in the output graph is the path between 1 and 2, and there is no other path of that length. Having a tree with size 1 wouldn't work and hence this is the minimum we can get. Hence this is a valid output.

<p><b>Testcase 2</b>: The longest paths in the output graph are the paths between 2 and 3, 3 and 4, and 2 and 4. Each of them are of length 2. This is the minimum number of junctions for which this works. Hence this is a valid output.</p>

<p><b>Testcase 3</b>: The longest paths in the output graph are the paths between 3 and 5, 3 and 6, 4 and 5, and 4 and 6. Each of them are of length 3. This is the minimum number of junctions for which this works. Hence this is a valid output.</p>