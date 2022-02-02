---
{"category_name":"hard","problem_code":"ICPC16G","problem_name":"Robolympic Batons","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"18-10-2016","tags":{"0":"admin3"},"time":{"view_start_date":1477153800,"submit_start_date":1477153800,"visible_start_date":1477153800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Today is the Robolympics athletic event. <b>N</b> batons numbered 0 to <b>N - 1</b> are placed in a circular fashion where baton numbers increase in clockwise direction. Also, some of the batons are <i>special</i>. <b>M</b> robots start in the event by standing near a baton position and picking it up. Note that a baton cannot be held by more than one robot, therefore all robots have distinct positions in the circular array of batons.</p>

<p>Now, this event lasts for <b>N</b> seconds. In each second, each robot drops the baton currently in its hand and moves to next position in clockwise direction <i>i.e.</i> if a robot has baton <b>i</b> in its hand at <b>t = 0</b>, at <b>t = 1</b> he will be holding baton <b>(i + 1) % N</b>.
</p>

<p>Crowd goes berserk whenever there comes a moment when all robots have picked up <i>special</i> batons. Your aim is to count how many times it will happen during the whole race. Note that crowd can go berserk even at <b>t = 0</b>. But since race is over at <b>t = N</b>, crowd doesn't care anymore. e. The crowd will not go berserk at <b>t = N</b>.</p>


<h3>Input</h3>
<p>First line contains <b>N</b> and <b>M</b> denoting the number of batons and number of robots participating in the event. Next line contains <b>N</b> space separated integers where <b>i</b><sup>th</sup> integer is 0 or 1 denoting whether baton numbered <b>i - 1</b> is <i>special</i> or not. Next line contains <b>M</b> integers denoting the index(0 to N-1) of initial baton that robots have picked up.</p>

<h3>Output</h3>
<p>Output one and only integer denoting the required answer.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>5*10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>N</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input 1:</b>
3 1
1 0 1
0

<b>Output 1:</b>
2

<pre><b>Input 2:</b>
4 2
1 0 1 0
1 3

<b>Output 2:</b>
2
</pre>
<h3>Explanation</h3>
<p><b>Example input 1.</b> <br/>
Batons numbered 0 and 2 are <i>special</i>.
Batons held by robots at <b>t = 0</b>: [0]
Batons held by robots at <b>t = 1</b>: [1]
Batons held by robots at <b>t = 2</b>: [2]

Note that at <b>t = 0, 2</b> all robots have special batons held.
<br/>
<b>Example input 2.</b> <br/>
Batons numbered 0 and 2 are <i>special</i>.
Batons held by robots at <b>t = 0</b>: [1, 3]
Batons held by robots at <b>t = 1</b>: [2, 0]
Batons held by robots at <b>t = 2</b>: [3, 1]
Batons held by robots at <b>t = 3</b>: [0, 2]

Note that at <b>t = 1, 3</b> all robots have special batons held.
</p>