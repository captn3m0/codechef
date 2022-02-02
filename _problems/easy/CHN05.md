---
{"category_name":"easy","problem_code":"CHN05","problem_name":"Malvika conducts a Programming Camp","languages_supported":{"0":"C","1":"CPP14","2":"JAVA"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"15-01-2016","tags":{"0":"acm15chn","1":"admin2","2":"greedy"},"time":{"view_start_date":1453546800,"submit_start_date":1453546800,"visible_start_date":1453546800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
After acquiring an extraordinary amount of knowledge through programming contests, Malvika decided to harness her expertise to train the next generation of Indian programmers. So, she decided to hold a programming camp. In the camp, she held a discussion session for <b>n</b> members (<b>n-1</b> students, and herself). They are sitting in a line from left to right numbered through <b>1</b> to <b>n</b>.
</p>

<p>
Malvika is sitting in the <b>n</b><sup>th</sup> spot. She wants to teach <b>m</b> topics of competitive programming to the students. As the people taking part in the camp are all newbies, they know none of the topics being taught, i.e., initially, the first <b>n - 1</b> people in the line know none of the topics, while the <b>n</b><sup>th</sup> knows all of them.
</p>

<p>
It takes one hour for a person to learn a topic from his neighbour. Obviously, one person cannot both teach a topic as well as learn one during the same hour. That is, in any particular hour, a person can either teach a topic that he knows to one of his neighbors, or he can learn a topic from one of his neighbors, or he can sit idly. It is also obvious that if person x is learning from person y at a particular hour, then person y must be teaching person x at that hour.

Also, note that people can work parallely too, i.e., in the same hour when the 4<sup>th</sup> person is teaching the 3<sup>rd</sup> person, the 1<sup>st</sup> person can also teach the 2<sup>nd</sup> or learn from 2nd.
</p>

<p>
Find out the minimum number of hours needed so that each person learns all the <b>m</b> topics.
</p>

<h3>Input</h3>
<ul>
<li>The first line of input contains a single integer <b>T</b> denoting number of test cases.</li>
<li>The only line of each test case contains two space separated integers <b>n, m</b> as defined in the statement.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output a single integer in a line corresponding to the answer of the problem.</li>
</ul>
</ul>


<h3>Constraints</h3>
<ul>
<li>1 &le; <b>T, n, m</b> &le; <b>100</b></li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
2
2 1
3 2

<b>Output:</b>
1
4
</pre>

<h3>Explanation</h3>
<p><b>In the first example</b>, there are two people. Second person is Malvika and she has to teach only one topic to the first person. It will take only one hour to do so.
</p>

<p><b>In the second example</b>, there are three people. The 3rd person is Malvika and she has to teach only two topics to 1st and 2nd person. In the 1st hour, she teaches the 1st topic to the 2nd person. Now, in the 2nd hour, the 2nd person will teach the 1st topic to the 1st person. In the 3rd hour, Malvika will teach the 2nd topic to the 2nd person. Now the 2nd person will teach that topic to the 1st in the 4th hour. So, it takes a total of 4 hours for all the people to know all the topics.
</p>