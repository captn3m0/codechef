---
{"category_name":"hard","problem_code":"ZUBPALK","problem_name":"G - Palace of King","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":8,"source_sizelimit":50000,"problem_author":"zubaerkh","problem_tester":null,"date_added":"20-11-2017","tags":{"0":"zubaerkh"},"time":{"view_start_date":1517085000,"submit_start_date":1517085000,"visible_start_date":1517085000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
A king in a distant land wants to build a new palace for himself. There are some plots of land in the country. Some of them don't have any owner, some of the plots are owned by the citizens of the country. Being a good person, the king wants to pay the appropriate amount of money for the land he uses. If he uses some portion of a plot, he needs to buy the whole plot. Also, this is a weird country where the plots owned by the citizens may overlap. For an area, the king needs to buy all the overlapping plots to use that area. To use some area not owned by any citizen, the king doesn't need to spend any money.
</p>

<p>
Formally, the country is an <b>M × N</b> grid with <b>L</b> plots owned by the citizens. Each of these plots is rectangular in shape. The <b>i<sup>th</sup></b> plot has its lower left corner at <b>(x<sub>i</sub>, y<sub>i</sub>)</b>, length <b>l<sub>i</sub></b> (along with the <i>x</i>-axis), width <b>w<sub>i</sub></b> (along with the <i>y</i>-axis), and price <b>p<sub>i</sub></b>. The palace the king is going to build should be rectangular in shape as well. Please help him to find the rectangular place with the largest area which he can use without spending more than <b>C</b> amount of money.
</p>

<p>
<b>(0,0)</b> is the lower left corner of the country and <b>(M, N)</b> is the upper right corner. All the plots owned by the citizens are inside this area. The palace should be inside this area as well. The sides of the palace should be axis-parallel.
</p>

<h3>Input</h3>
<ul>
<li>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. Description of each test case is given below.
</li>
<li>
The first line of each test case contains three integers <b>M</b>, <b>N</b>, and <b>C</b>.</li>

<li>The second line contains <b>L</b>.</li>

<li>Each of next <b>L</b> lines contains the description of a plot owned by a citizen. <b>i<sup>th</sup></b> of these line has five integers: <b>x<sub>i</sub>, y<sub>i</sub>, l<sub>i</sub>, w<sub>i</sub></b>, and <b>p<sub>i</sub></b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print "Case i: ", and then the answer (mod 10<sup>9</sup> + 7), where i is the testcase number, 1-indexed. The answer should be the largest area of the rectangular shaped land that can be used without spending more than <b>C</b> amount of money.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>M, N</b> ≤ 1000</li>
<li>0 ≤ <b>C</b> ≤ 1000000000</li>
<li>0 ≤ <b>x<sub>i</sub></b> ≤ <b> M - l<sub>i</sub> </b></li>
<li>0 ≤ <b>y<sub>i</sub></b> ≤ <b> N - w<sub>i</sub> </b></li>
<li>1 ≤ <b>l<sub>i</sub>, w<sub>i</sub></b> </li>
<li>1 ≤ <b>p<sub>i</sub></b> ≤ 100000</li>
<li>1 ≤ <b>L</b> ≤ 1000</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
4 4 6
3
1 0 2 1 2
2 0 1 4 2
0 3 3 1 4

<b>Output:</b>
Case 1: 12
</pre>

<h3>Explanation</h3>
<p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/ACM17KOL/ZUBPALK/palace_of_king.png"/><br/>
The image above shows the lands owned by the citizens and the palace with area <b>12</b> (lower left corner at <b>(0,0)</b> and upper right corner at <b>(4,3)</b>).
</p>