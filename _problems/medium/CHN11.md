---
{"category_name":"medium","problem_code":"CHN11","problem_name":"Animesh has a war with tribal leader Malvika","languages_supported":{"0":"C","1":"CPP14","2":"JAVA"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"16-01-2016","tags":{"0":"acm15chn","1":"admin2","2":"combinatorics","3":"sorting"},"time":{"view_start_date":1453546800,"submit_start_date":1453546800,"visible_start_date":1453546800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Malvika is the leader of a large tribal army, with soldiers from multiple tribes. There are a total of <b>n</b> soldiers in the army. You are given an array <b>a</b> of length <b>n</b>, where <b>a[i]</b> denotes the tribe number of the <b>i</b><sup>th</sup> soldier.
</p>

<p>
Now Animesh, the leader of the neighboring tribe and staunch enemy of Malvika, has attacked her army and declared a war which would later be regarded as the greatest tribal war of the contemporary world. For this soon-to-be-lengendry war, Malvika wanted to evaluate the strength of her army. Malvika's army's strength is based on love, i.e., the pairwise strength of two people from the different tribes would be zero, while for those from the same tribe, it will be the distance between their positions in the line. The more the distance, the lonelier they feel. The lonelier they feel, the more they love each other. As their love grows, so does the strength of the army.
</p>

<p>
Formally, strength of an army denoted by an array <b>a</b> will be the sum of pairwise strengths of each pair of people from the same tribe, i.e. sum of all <b>|i - j|</b> for <b>1 &le; i &le; j &le; n</b> such that <b>a[i] = a[j]</b>.
</p>

<p>
Malvika wants to rearrange her army to maximize the strength. Let <b>M</b> denote the maximum strength of her army after rearranging the soldiers.  You have to help her find out the number of rearrangements of her army having the maximum strength. The more the rearrangements are, there are more chances of her winning the battle. As they say, you can win the battle with a lot of strength, but you need rearrangements of that strength to win the war. Since the battle is expected to be long drawn, the answer could be very large. So, print your answer modulo <b>10<sup>9</sup> + 7</b>.
</p>

<p>
Two arrangements of the army — <b>A</b> and <b>B</b> — are said to be distinct if there is an index <b>i</b> from <b>1</b> to <b>n</b>, such that <b>A[i] &ne; B[i]</b>. That is, if some position in the army is occupied by soldiers from different tribes in the two arrangements.
</p>

<h3>Input</h3>
<ul>
<li>The first line of input contains a single integer <b>T</b> denoting the number of test cases.</li>
<li>The first line of each test case contains a single integer <b>n</b> as defined in the statement.</li>
<li>The second line of each test case will contain <b>n</b> space separated integers denoting the array <b>a</b>.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output a single integer in a line corresponding to the answer of the problem.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li><b>1</b> &le; <b>T</b> &le; <b>10</b></li>
<li><b>1</b> &le; <b>n</b> &le; <b>10<sup>5</sup></b></li>
<li><b>1</b> &le; <b>a[i]</b> &le; <b>10<sup>9</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
2
1 2
4
1 2 2 1
3
1 1 2

<b>Output:</b>
2
4
1
</pre>

<h3>Explanation</h3>
<p><b>In the first example</b>, the strength of the army is zero irrespective of the way she arranges her army. There are two ways of arranging the army, namely {1, 2} and {2, 1}.
</p>

<p><b>In the second example</b>, she can arrange a maximum strength army in four ways. Those are {1, 2, 1, 2}, {1, 2, 2, 1}, {2, 1, 1, 2}, {2, 1, 2, 1}. Strength of her army in all the four cases will be 4, the maximum possible strength of the army that she can get.
</p>