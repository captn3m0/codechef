---
{"languages_supported":{"0":"NA"},"title":"FLYDIST","category":"NA","old_version":true,"problem_code":"FLYDIST","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>The chef is stuck at the airport since all flights are grounded because of a blizzard. He is trying to pass the time by analyzing a chart of distances between cities where the Spaghetti airline is flying and he noticed something strange about it. Sometimes the distance of a direct flight from city A to city B is longer than a flight with intermediate stops in some other cities. This should be impossible under assumption that the flights always take the shortest path from start to destination. The chef is determined to fix this.</p>

<p>There are N cities numbered from 0 to N-1 and M flights between these cities. Each flight is characterized by its two destination points (it is always possible to fly in both directions) and the distance of the flight. The chef will change (increase or decrease) the distance of the flight i by d<sub>i</sub> (d<sub>i</sub> can be any rational number provided that the distance covered by this flight remains positive). After he makes all the changes, there should not exist a pair of cities A and B such that it is possible to fly through intermediate cities and reach the destination by covering less distance than with a direct flight. He is looking for a valid set of changes with minimum sum.</p>

<h3>Input</h3>
<p>The number of cities N and the number of flights M are given on the first line of the input. The following M lines describe the flights with endpoints A<sub>i</sub>, B<sub>i</sub> and the distance D<sub>i</sub> covered by this flight. No flight will connect a city to itself and there will be at most one flight between any pair of cities.

<h3>Output</h3>
</p><p>Output the minimum sum of modifications as a reduced fraction "X/Y" - greatest common divisor of X and Y must be 1.

<h3>Constraints</h3>
<ul>
<li>2 &lt;= N &lt;= 10</li>
<li>1 &lt;= M &lt;= 45</li>
<li>1 &lt;= D<sub>i</sub> &lt;= 20</li>
</ul>

<h3>Example</h3>

<pre>
<b>Input:</b>
4 4
0 1 1
1 2 1
2 3 1
0 3 8

<b>Output:</b>
5/1

</pre>

<h3>Explanation</h3>
One possible scenario is to decrease the length of flight (0,3) by 1, increase (0,1) by 3 and (1,2) by 1.</p>    