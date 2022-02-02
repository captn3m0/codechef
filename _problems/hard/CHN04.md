---
{"category_name":"hard","problem_code":"CHN04","problem_name":"Malvika gets bored along with her Cats","languages_supported":{"0":"C","1":"CPP14","2":"JAVA"},"max_timelimit":"4 - 5","source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"17-01-2016","tags":{"0":"acm15chn","1":"admin2","2":"dynamic","3":"sqrt"},"time":{"view_start_date":1453546800,"submit_start_date":1453546800,"visible_start_date":1453546800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Malvika's cats, Chingam and Jimma are also bored of solving problems. Fortunately, Chingam has found <b>n</b> bars of dark chocolate. They all have the same width, but differ in their lengths. In fact, no two chocolate bars have the same length. All the <b>n</b> bars are kept in a row. Let's say that their lengths are given by <b>L[1], L[2], … , L[n]</b> from left to right. That is, length of bar <b>i</b> is <b>L[i]</b>.
</p>

<p>
Chingam decided to play a little game with Jimma. In one step, Jimma has to choose some bar which has not been eaten yet. Chingam hates inversions, so he will instantaneously eat that bar, along with every other Bar with which it forms an <b>Inversion Pair</b>. We say that bars <b>i</b> and <b>j</b> form an <b>Inversion Pair</b>, if the bar to the left is longer than the bar to the right.
</p>

<p>
That is, if Jimma selects bar <b>i</b>, whose length is <b>L[i]</b>, then Chingam will eat this, as well as every bar <b>j</b> such that <b>j &gt; i</b> and <b>L[j] &lt; L[i]</b>, as well as every bar <b>k</b> such that <b>k &lt; i</b> and <b>L[k] &gt; L[i]</b>.
After this, the step ends, they proceed to the next step, where Jimma selects another bar and the whole process repeats. The game ends when all the <b>n</b> chocolate bars are eaten.
</p>

<p>
Jimma doesn't like this game because she does not get any chocolate. So, she wants to finish it as soon as possible and go back to sleep. Please help her find the minimum number of steps needed for the game to end.
</p>

<h3>Input</h3>
<ul>
<li>The first line of input contains a single integer <b>T</b> denoting number of test cases</li>
<li>The first line of each test case contains one integer: <b>n</b>.</li>
<li>The second line contains <b>n</b> space separated integers, which correspond to <b>L[1], L[2], … , L[n]</b>.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output a single integer in a line corresponding to the answer of the problem.</li>
</ul>
</ul>


<h3>Constraints</h3>
<ul>
<li>1 &le; <b>T</b> &le; <b>5</b></li>
<li>1 &le; <b>n</b> &le; <b>10<sup>5</sup></b></li>
<li>1 &le; <b>L[i]</b> &le; <b>n</b> </li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
1
4
3 1 4 2

<b>Output:</b>
2
</pre>

<h3>Explanation</h3>
<p>
In the first step, Jimma can choose bar 4, which is of length 2. Bar 3 and bar 1 form <b>Inversion Pairs</b> with bar 4. So Chingam eats all these 3 bars. In the second step, Jimma chooses bar 2, and she's done. You can check that Jimma cannot get rid of all the four bars in one step.
</p>