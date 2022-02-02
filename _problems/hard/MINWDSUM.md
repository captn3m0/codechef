---
{"category_name":"hard","problem_code":"MINWDSUM","problem_name":"Minimal Weighted Digit Sum","languages_supported":{"0":"C","1":"CPP 4.9.2","2":"CPP14","3":"JAVA"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"anton_lunyov","problem_tester":"laycurse","date_added":"9-02-2013","tags":{"0":"anton_lunyov","1":"bfs","2":"cook31","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/MINWDSUM","time":{"view_start_date":1361126651,"submit_start_date":1361126651,"visible_start_date":1361126539,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Let <b>M</b> be a fixed positive integer. Your task is for each <b>R</b> from <b>0</b> to <b>M − 1</b>, inclusive, find the minimal non-negative integer having residue <b>R</b> modulo <b>M</b> and having the minimal weighted digit sum.</p>
<p>Namely, let <b>W[0], W[1], ..., W[9]</b> be the sequence of weights assigned to the decimal digits. For positive integer <b>N</b> having decimal representation <b>D<sub>1</sub>D<sub>2</sub>...D<sub>K</sub></b> the weighted digit sum of <b>N</b> is the number <b>WS(N) = W[D<sub>1</sub>] + W[D<sub>2</sub>] + ... + W[D<sub>K</sub>]</b>. We set <b>WS(0) = 0</b> by definition.</p>
<p>For each <b>R</b> from <b>0</b> to <b>M − 1</b>, inclusive, denote <b>S<sub>min</sub>(R) = min{WS(R + K * M) : K = 0, 1, 2, 3, ...}</b>. Therefore, <b>S<sub>min</sub>(R)</b> is the minimal weighted digit sum over all non-negative integers having residue <b>R</b> modulo <b>M</b>. Next, denote by <b>N<sub>min</sub>(R)</b> the minimum non-negative integer having residue <b>R</b> modulo <b>M</b> and having weighted digit sum equal to <b>S<sub>min</sub>(R)</b>. So, formally, <b>N<sub>min</sub>(R) = min{N ≥ 0 : N mod M = R, WS(N) = S<sub>min</sub>(R)}</b>. Note, that <b>S<sub>min</sub>(0) = N<sub>min</sub>(0) = 0</b> for any <b>M</b> and any sequence of weights.</p>
<p>As mentioned above, your task is for the given <b>M</b> and <b>W[0], W[1], ..., W[9]</b> find the sequence <b>N<sub>min</sub>(0), N<sub>min</sub>(1), ..., N<sub>min</sub>(M − 1)</b>. Since the output could be quite large output the following sum instead:<br/><b>F(N<sub>min</sub>(0)) + F(N<sub>min</sub>(1)) + ... + F(N<sub>min</sub>(M − 1))</b>,<br/>where <b>F(0) = 0</b> and for positive integer <b>N</b> with decimal representation <b>D<sub>1</sub>D<sub>2</sub>...D<sub>K</sub></b>:<br/><b>F(N) = (D<sub>1</sub> * 3141<sup>K−1</sup> + D<sub>2</sub> * 3141<sup>K−2</sup> + ... + D<sub>K−1</sub> * 3141 + D<sub>K</sub>) mod 2<sup>32</sup></b>.</br/></br/></br/></p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains an integer <b>M</b>. The second line contains ten space separated integers <b>W[0], W[1], ..., W[9]</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the required sum.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>3141</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>3141592</b></li>
<li><b>0</b> ≤ <b>W[0], W[1], ..., W[9]</b> ≤ <b>314</b></li>
<li>The sum of <b>M</b> in one test file does not exceed <b>3141592</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
6
1
3 1 4 1 5 9 2 6 5 3
2
0 2 9 9 9 9 9 9 9 1
3
0 10 2 3 4 5 6 7 8 9
4
99 99 99 1 99 99 2 99 99 99
5
1 1 1 1 1 1 1 1 1 1
3141
31 41 59 26 53 58 97 93 23 0

<b>Output:</b>
0
9
6
9435
10
6500672892792
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Here <b>M = 1</b>. So we need to find <b>F(N<sub>min</sub>(0))</b>. Since <b>S<sub>min</sub>(0) = N<sub>min</sub>(0) = 0</b> and <b>F(0) = 0</b>, the answer is <b>0</b>.</p>
<p><b>Example case 2.</b> Here <b>M = 2</b> and <b>W[0] = 0</b>, <b>W[1] = 2</b>, <b>W[9] = 1</b>, while all remaining <b>W[D] = 9</b>. As mentioned above <b>S<sub>min</sub>(0) = N<sub>min</sub>(0) = 0</b>. For <b>R = 1</b> we have <b>S<sub>min</sub>(1) = 1</b> and <b>N<sub>min</sub>(1) = 9</b> since <b>W[9] = 1</b>. Therefore, the answer is <b>F(0) + F(9) = 0 + 9 = 9</b>.</p>
<p><b>Example case 3.</b> Here values of <b>S<sub>min</sub>(R)</b> are <b>{0, 4, 2}</b> and values of <b>N<sub>min</sub>(R)</b> are <b>{0, 4, 2}</b>. Therefore, the answer is <b>F(0) + F(4) + F(2) = 0 + 4 + 2 = 6</b>.</p>
<p><b>Example case 4.</b> Here values of <b>S<sub>min</sub>(R)</b> are <b>{0, 2, 2, 1}</b> and values of <b>N<sub>min</sub>(R)</b> are <b>{0, 33, 6, 3}</b>. Since <b>F(33) = (3 * 3141 + 3) mod 2<sup>32</sup> = 9426</b>, the answer is <b>F(0) + F(33) + F(6) + F(3) = 0 + 9426 + 6 + 3 = 9435.</b></p>
<p><b>Example case 5.</b> Here <b>S<sub>min</sub>(R) = N<sub>min</sub>(R) = R</b> for all <b>R</b> from <b>0</b> to <b>M − 1</b>, inclusive.</p>
<p><b>Example case 6.</b> Make sure that you calculates <b>F(N)</b> properly here. Also note that <b>N<sub>min</sub>(666) = 10<sup>106</sup> − 1</b> and <b>N<sub>min</sub>(3140) = 10<sup>116</sup> − 2</b> for <b>M = 3141</b> and given sequence of weights. It means that brute force solution is not applicable even for such relatively small value of <b>M</b>.</p>
