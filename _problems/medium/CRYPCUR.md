---
{"category_name":"medium","problem_code":"CRYPCUR","problem_name":"Crypto Trading","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY"},"max_timelimit":6,"source_sizelimit":50000,"problem_author":"wittyceaser","problem_tester":null,"date_added":"23-12-2017","tags":{"0":"wittyceaser"},"time":{"view_start_date":1517693400,"submit_start_date":1517693400,"visible_start_date":1517693400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>AMRExchange is the latest cryptocurrency exchange that has become very popular among cryptocurrency traders.</p>
<p>
On AMRExchange, there are <b>N</b> cryptocurrencies - let us denote the i<sup>th</sup> currency by <b>C<sub>i</sub></b>. 
<b>M</b> pairs of these cryptocurrencies are tradable - one unit of currency <b>C<sub>x</sub></b> can be converted to one unit of currency <b>C<sub>y</sub></b> with risk <b>C<sub>xy</sub></b>.
</p>
<p>
Mr. X, an avid cryptocurrency collector, wants to start with 1 unit of <b>any</b> of the <b>N</b> cryptocurrencies and perform a sequence of trades. He wants to do it in such a way that for each of the <b>N</b> cryptocurrencies, there was at least one point during the trading sequence during which he held one unit of that cryptocurrency.</p>

<p>The overall risk of the sequence of trades is the <b>maximum risk</b> in the sequence of trades. Minimize the overall risk with which Mr. X can achieve this. Print "Impossible" if no such sequence of trades is possible.
</p>

<h3>Input</h3>
<ul>
	<li>
		The first line contains a single integer <b>T</b> - the total number of testcases.
	</li>
	<li>
		Each testcase is of the following format:
		<ul>
			<li>
				First line contains 2 space-separated integers - <b>N</b> and <b>M</b>. <b>N</b> denotes the number of cryptocurrencies, <b>M</b> denotes the number of tradable ordered cryptocurrency pairs.
			</li>
			<li>
				<b>M</b> lines follow. Each line contains 3 space-separated positive integers - <b>C<sub>x</sub></b>, <b>C<sub>y</sub></b> and <b>C<sub>xy</sub></b>. This line denotes that one unit of currency <b>C<sub>x</sub></b> can be converted into one unit of currency <b>C<sub>y</sub></b> with risk <b>C<sub>xy</sub></b>.
			</li>
		</ul>
	</li>
</ul>

<h3>Output</h3>
<ul>
	<li>
		For each testcase, print the minimum overall risk with which Mr. X can own at least one unit of each cryptocurrency at some point in time.
	</li>
	<li>
		If it is not possible for Mr. X to achieve this, then print “Impossible”.
	</li>
</ul>

<h3>Constraints</h3>
<ul>
	<li>
		1 ≤ <b>T</b> ≤ 5</li>
	<li>
		1 ≤ <b>N</b>, <b>M</b> ≤  10<sup>5</sup></li>
	<li>
		1 ≤ <b>C<sub>x</sub></b>, <b>C<sub>y</sub></b> ≤ <b>N</b>
	</li>
	<li>
		1 ≤ <b>C<sub>xy</sub></b> ≤ 10<sup>9</sup></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
2
3 6
1 2 1
2 3 3
3 1 3
1 3 1
3 2 1
3 2 5
4 3
1 2 1
2 3 1
2 4 1

<b>Output</b>
1
Impossible
</pre>

<h3>Explanation</h3>
<p><b>Testcase 1</b>: Mr. X can start with cryptocurrency <b>C<sub>1</sub></b> and follow the following sequence to minimize overall risk:
<ul>
	<li>
		Convert <b>C<sub>1</sub></b> to <b>C<sub>3</sub></b> with risk 1.
	</li>
	<li>
		Convert <b>C<sub>3</sub></b> to <b>C<sub>2</sub></b> with risk 1.
	</li>
</ul>
</p>

<p>
	The overall risk would be 1.
</p>

<p><b>Testcase 2</b>: There are a total of 6 sequences of trades are possible, and none of them satisfy our property. We list them here:
</p>

<p>
	Starting with <b>C<sub>1</sub></b>:
</p>
<ul>
	<li>
		<b>C<sub>1</sub></b> -> <b>C<sub>2</sub></b> -> <b>C<sub>3</sub></b>
	</li>
	<li>
		<b>C<sub>1</sub></b> -> <b>C<sub>2</sub></b> -> <b>C<sub>4</sub></b>
	</li>
</ul>

<p>
	In the first sequence, Mr. X won't be able to own <b>C<sub>4</sub></b> because units of <b>C<sub>3</sub></b> cannot be converted to units of <b>C<sub>4</sub></b>.
	Similarly, in the second sequence,  Mr. X won't be able to own <b>C<sub>3</sub></b> because units of <b>C<sub>4</sub></b> cannot be converted to units of <b>C<sub>3</sub></b>.
</p>

<p>
	Starting with <b>C<sub>2</sub></b>:
</p>
<ul>
	<li>
		<b>C<sub>2</sub></b> -> <b>C<sub>3</sub></b>
	</li>
	<li>
		<b>C<sub>2</sub></b> -> <b>C<sub>4</sub></b>
	</li>
</ul>

<p>
Starting with <b>C<sub>3</sub></b>:
</p>
<ul>
	<li>
		<b>C<sub>3</sub></b> (cannot be converted to any other cryptocurrency)
	</li>
</ul>

<p>
Starting with <b>C<sub>4</sub></b>:
</p>
<ul>
	<li>
		<b>C<sub>4</sub></b> (cannot be converted to any other cryptocurrency)
	</li>
</ul>

<p>
Hence, there is no possible sequence using which Mr. X can own one unit of all cryptocurrencies at some point in time.
</p>