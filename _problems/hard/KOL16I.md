---
{"category_name":"hard","problem_code":"KOL16I","problem_name":"Roads","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":null,"date_added":"26-12-2016","tags":{"0":"kevinsogo"},"time":{"view_start_date":1482831600,"submit_start_date":1482831600,"visible_start_date":1482831600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Sarah is an engineer assigned to build roads between the <b>N</b> towns of Evoland. Towns are assigned IDs from <b>1</b> to <b>N</b>. A road connects exactly one pair of towns, and is bidirectional.</p>

<p>The mayor of Evoland allocated a very small budget for this project. Thus, Sarah is forced to build <em>as few roads as possible</em> while still keeping all <b>N</b> towns connected via roads. Note that this is an <strong>absolute requirement</strong>; any network not satisfying this will not be accepted by the mayor.</p>

<p>On top of this absolute requirement, Sarah still can't just build the roads however she wants. She has to consider the visiting habits of tourists, who are very picky with which towns they visit. She found out that tourists don't visit towns which are "too similar".</p>

<p>For example, consider <b>N = 4</b> towns. Suppose Sarah builds three roads connecting the pairs of towns <b>(1, 2)</b>, <b>(2, 3)</b> and <b>(2, 4)</b>. Then as you can see, town <b>2</b> will be the busiest town because all towns are adjacent to it by a single road. On the other hand, from the point of view of the roads, towns <b>1</b>, <b>3</b> and <b>4</b> will be pretty much the same, so tourists will tend to visit only one of them.</p>

<p>Sarah has formalized this notion of "sameness" of towns. For a given network of roads, she defines two towns <b>a</b> and <b>b</b> to be <b>indistinguishable</b> if there exists a permutation of the towns <b>[p<sub>1</sub>, p<sub>2</sub>, p<sub>3</sub>, ..., p<sub>N</sub>]</b> such that <b>p<sub>a</sub> = b</b>, and for every pair of nodes <b>(i, j)</b>, there is a road between <b>(i, j)</b> if and only if there is a road between <b>(p<sub>i</sub>, p<sub>j</sub>)</b>.</p>

<p>On the other hand, Sarah calls a pair of towns <b>distinguishable</b> if they are not indistinguishable. (Unsurprisingly.)</p>

<p>She also defined the <b>attractiveness</b> of the network of roads as the size of the largest set of towns that are pairwise distinguishable from each other. For example, the network above has an attractiveness of <b>2</b>, because there are at most two distinguishable towns.</p>

<p>Sarah's goal is to build the roads in such a way that the attractiveness becomes exactly <b>A</b>. Can you help her achieve this by coming up with the road plan?</p>

<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>Each test case consists of a single line containing two integers <b>N</b> and <b>A</b> separated by a space.</p>


<h3>Output</h3>
<p>For each test case, first output <b>R</b> in a single line. <b>R</b> denotes the number of roads to build. Then, output <b>R</b> lines, each containing two integers <b>i</b> and <b>j</b>, meaning that a road exists between <b>i</b> and <b>j</b>. There can be multiple possible correct outputs; any one will be accepted.</p>

<p>If it's not possible to make such a network of roads at all, just output <b>-1</b> in a single line.</p>


<h3>Constraints</h3>

<ul>
<li><b>1 ≤ T, A, N ≤ 300</b></li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
4 2
5 234
</tt>
<b>Output:</b>
<tt>3
1 2
2 3
2 4
-1</tt>
</pre>

<h3>Explanation</h3>

<p>The first case corresponds to the network described in the problem statement. In the second case, it is impossible to find a network for <b>5</b> towns such that the attractiveness is equal to <b>234</b>, so we output <b>-1</b>.</p>
