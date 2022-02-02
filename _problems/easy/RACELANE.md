---
{"languages_supported":{"0":"NA"},"title":"RACELANE","category":"NA","old_version":true,"problem_code":"RACELANE","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
You are in charge of painting the lanes on a 500 meter race track for a forthcoming amateur track event. There are 9 lanes in total which means you must paint 10 lines around the track to delimit these lanes. Fortunately, you have special equipment that will help you paint these lanes very quickly.

</p><p>
This equipment has 10 paint nozzles arranged in a line and the spacing between consecutive nozzles is exactly equal to the width of a lane. So, all you have to do is drag this equipment around the track once while all 10 nozzles are spraying to paint all of the lines that delimit the lanes.

</p><p>
Unfortunately, the equipment is a old and the paint doesn't apply evenly. Specifically, an air bubble can appear in a nozzle's paint supply line causing the nozzle to spray air instead of paint for a while. Since this event is not professional, it is ok to have some parts of the lines missing as long as each racer always has one of its two sides painted at any point on the track.

</p><p>
You only realized this after you finished dragging the equipment around the track. The equipment has some basic computing power and sensors and it was able to record when a nozzle was not working properly due to a paint bubble. So, instead of walking over the entire track, you can analyze the data. Your boss wants to know precisely how many meters out of the 500 meters of the race track are such that every lane has at least one of its sides painted along that meter.

<h3>Input</h3>
</p><p>
The first line contains a single integer T ≤ 30 indicating the number of test cases. Each test case begins with a single integer B indicating the number of bubbles that were recorded by the equipment's computer.

</p><p>
Then B lines follow with 0 ≤ B ≤ 300, each describing a single bubble. A bubble is described by three integers S, E, L where S is the meter of the track where the bubble first appeared and E is the meter of the track when the bubble disappeared. This means that paint is not applied from meter S through to, and including, meter E. This bubble appears on paint line L. Here, 1 ≤ S ≤ E ≤ 500 and 0 ≤ L ≤ 9.

</p><p>
For example, if a bubble starts at meter 12 and ends at meter 15 on paint line 3, then there is no paint appearing on line number 3 over meters 12, 13, 14, and 15. In total, 4 meters of the line are not painted due to this particular bubble.

</p><p>
Say the lanes are numbered from 1 to 9. Then lane 1 is delimited by lines 0 and 1, lane 2 by lines 1 and 2, lane 3 by lines 2 and 3, and so on. Also, the input will be such that no two bubbles in the same paint line share a common meter of the track. That is, if S,E and S',E' are the start and endpoints of two different bubbles on a common line L, then either E &lt; S' or E' &lt; S.

<h3>Output</h3>
</p><p>
The output for each test case consists of a single integer on a single line. This integer is the number of meters (out of 500) are such that every one of the 9 lanes on the track has at least one of the lines delimiting that lane fully painted throughout that meter.

<h3>Example</h3>

<pre>
<b>Input:</b>
3
2
1 3 1
2 5 2
2
1 3 1
2 5 3
5
60 60 4
60 61 5
61 61 6
100 100 8
100 100 9

<b>Output:</b>
498
500
497
</pre></p>    