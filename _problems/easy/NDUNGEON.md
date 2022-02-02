---
{"languages_supported":{"0":"NA"},"title":"NDUNGEON","category":"NA","old_version":true,"problem_code":"NDUNGEON","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p> Nikhil has designed the following game. The game is played in a
set of rooms in a dungeon, arranged in an <em>M    N</em>
rectangular grid. In one of the rooms, the evil wazir has imprisoned
the princess. The noble prince is on his way to rescue the
princess.</p>

<p>The prince starts in the room at the top left corner of the grid,
which is labelled (1,1).  Each room contains some guards.  It takes a
certain amount of time before the prince can kill all the guards in
the room he is in.  The time taken to kill the guards varies from room
to room.  Once he has killed all the guards in a room, he can move on
to any one of its neighbours by going left, right, up or down,
provided, of course, that there is a neighbouring room in the
corresponding direction.</p>

<p>The wazir, knowing that the prince is on his way, has set a time
bomb that will kill the princess after <em>T</em> seconds.  You will
be given the position of the princess, the time left for the bomb to
go off and the time it takes for the prince to kill the guards in each
of the rooms in the dungeon.  Your task is to determine if it is
possible for the prince to reach the princess and save her by defusing
the bomb before the <em>T</em> seconds expire.</p>

<p> For example, suppose the dungeon is described by the following
grid of numbers.</p>

<pre>2 3 2
2 5 1
5 3 1
3 1 1
</pre>

<p>The number at position <em>(i,j)</em> indicates the time taken for
the prince to overpower the guards in room <em>(i,j)</em>. Suppose the
princess is in the room at position (4,2). If <em>T</em> = 10.  there
is no way the prince can reach the princess in time. However, if
<em>M</em> = 15, the prince can reach the princess with 4 seconds to
spare, as follows.  Starting from (1,1), he moves right to (1,2) and
then (1,3), comes down all the way to (4,3) and then moves (4,2).  This
takes 11 seconds (note that he must also overpower the guard in the
room where the princess is incarcerated). You can check that he cannot
reach the princess with more than 4 seconds to spare by any route.</p>

<h3>Input</h3>
<p>
The first line contains two integers M and N indicating the number of rows and columns in the rectangular dungeon. Lines 2,3,   ,M+1 contain N positive integers. The jth integer on line i+1 is the time taken to overpower the guards at room (i,j). The last line in the input, line M+2, contains three integers a, b and T, where (a,b) is the position of the cell where the princess is held and T is the amount of time before the bomb goes off.

</p>

<h3>Output</h3>
<p>
If it is not possible for the prince to save the princess then print a single line with the answer NO. Otherwise, print two lines. The first line should say YES. The second line should contain a single integer indicating the maximum possible time to spare when the prince rescues the princess.

</p>
<h3>Constraints</h3>
<p>
You may assume that 1     N,K     70.</p>
<h3>Example</h3>

<pre>
<b>Input:</b>
4 3 
2 3 2
2 5 1
5 3 1
3 1 1
4 2 15

<b>Output:</b>
YES
4
</pre>    