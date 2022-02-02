---
{"category_name":"school","problem_code":"CHN09","problem_name":"Malvika is peculiar about color of balloons","languages_supported":{"0":"C","1":"CPP14","2":"JAVA"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"15-01-2016","tags":{"0":"acm15chn","1":"admin2","2":"loops","3":"strings"},"time":{"view_start_date":1453545000,"submit_start_date":1453545000,"visible_start_date":1453545000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Little Malvika is very peculiar about colors. On her birthday, her mom wanted to buy balloons for decorating the house. So she asked her about her color preferences. The sophisticated little person that Malvika is, she likes only two colors — amber and brass. Her mom bought <b>n</b> balloons, each of which was either amber or brass in color. You are provided this information in a string <b>s</b> consisting of characters 'a' and 'b' only, where 'a' denotes that the balloon is amber, where 'b' denotes it being brass colored.
</p>
<p>
When Malvika saw the balloons, she was furious with anger as she wanted all the balloons of the same color. In her anger, she painted some of the balloons with the opposite color (i.e., she painted some amber ones brass and vice versa) to make all balloons appear to be the same color. As she was very angry, it took her a lot of time to do this, but you can probably show her the right way of doing so, thereby teaching her a lesson to remain calm in difficult situations, by finding out the minimum number of balloons needed to be painted in order to make all of them the same color.
</p>
<h3>Input</h3>
<ul>
<li>The first line of input contains a single integer <b>T</b>, denoting the number of test cases.</li>
<li>The first and only line of each test case contains a string <b>s</b>.</li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing an integer — the minimum number of flips required.</li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> &le; <b>T</b> &le; <b>100</b></li>
<li><b>1</b> &le; <b>n</b> &le; <b>100</b>, where <b>n</b> denotes to the length of the string <b>s</b>.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
ab
bb
baaba

<b>Output:</b>
1
0
2
</pre><h3>Explanation</h3>
<p><b>In the first example</b>,<br />
you can change amber to brass or brass to amber. In both the cases, both the balloons will have same colors. So, you will need to paint 1 balloon. So the answer is 1.
</p>
<p><b>In the second example</b>,<br />
As the color of all the balloons is already the same, you don't need to paint any of them. So, the answer is 0.
</p>
