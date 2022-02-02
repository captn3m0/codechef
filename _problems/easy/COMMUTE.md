---
{"languages_supported":{"0":"NA"},"title":"COMMUTE","category":"NA","old_version":true,"problem_code":"COMMUTE","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>The Chef commutes to work every day using the city's underground metro. The schedule for the trains has recently been changed and he wants to know how long it will take to travel from the station nearest to his house and the station nearest to his restaurant.</p>
<p>The Chef doesn't want to change the route he took before, so he simply has to find out how long it will take to reach his restaurant along his usual route. This route is given by a sequence of stations s<sub>0</sub>, s<sub>1</sub>, ..., s<sub>n</sub> where s<sub>0</sub> is the station where the Chef enters the metro and s<sub>n</sub> is the station where the Chef exits the metro.</p>
<p>Trains are scheduled to run between every two consecutive stations s<sub>i-1</sub> and s<sub>i</sub>. Such a schedule is specified by three integers x<sub>i</sub>, l<sub>i</sub>, and f<sub>i</sub>. This means that the first train on this line starts operating at time x<sub>i</sub>. The time it takes this train to travel from s<sub>i-1</sub> and s<sub>i</sub> is exactly l<sub>i</sub> units. Finally, a train departs from station s<sub>i-1</sub> every f<sub>i</sub> minutes following the previous train. That is, a train departs at time x<sub>i</sub>, x<sub>i</sub>+f<sub>i</sub>, x<sub>i</sub>+2f<sub>i</sub>, and so on.</p>
<p>The Chef is very experienced at navigating the metro so the time it takes him to transfer between trains at a given station  is essentially zero. Thus, if the Chef arrives at a station, say s<sub>i</sub>, the moment that the train from s<sub>i</sub> to s<sub>i+1</sub> is scheduled to depart, he skillfully hops on this next train. However, if the Chef arrives when no train to s<sub>i+1</sub> is scheduled to depart, he must wait until the scheduled departure time.</p>
<p>Help the Chef figure out how long it will take him to travel from station s<sub>0</sub> to station s<sub>n</sub>. You may assume that the Chef is already at station s<sub>0</sub> at time 0.</p>
<h3>Input</h3>
<p>The first line consists of a single integer denoting the number of test cases (at most 50). Each test case begins with a line containing a single integer n between 1 and 1000 indicating the number of lines the Chef must traverse (so there are n+1 stations s<sub>0</sub>, s<sub>1</sub>, ..., s<sub>n</sub>). The next n lines describe the train schedules between stations, one per line. The i'th such line gives the values x<sub>i</sub>, l<sub>i</sub>, and f<sub>i</sub> for the train that travels between stations s<sub>i-1</sub> and s<sub>i</sub>.</p>
<p>The x<sub>i</sub> values will be between 0 and 1000 and the l<sub>i</sub> and f<sub>i</sub> values will be between 1 and 1000.</p>
<h3>Output</h3>
<p>For each test case you are to output a single integer denoting the minimum time t for which the Chef can reach station s<sub>n</sub> using the given route. Remember, the Chef starts at s<sub>0</sub> at time 0.</p>
<h3>Example</h3>
<pre><b>Input:</b>
3
2
0 4 7
0 6 5
2
0 1 2
6 2 10
2
1 2 3
0 2 3


<b>Output:</b>
11
8
5
</pre>
<p></p>    