---
{"languages_supported":{"0":"NA"},"title":"HAUNTED","category":"NA","old_version":true,"problem_code":"HAUNTED","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Chef is trapped in a haunted maze. There are ghosts that patrol the maze by following fixed paths. Chef is trying to escape the maze, but must avoid the ghosts or he will become frightened and faint. Additionally, Chef needs to escape within a certain amount of time, or he will faint from hunger. Your task is to determine if Chef can escape the maze without fainting, and if so the minimum time it will take.</p>
<p>You will be given the layout of the maze, including Chef's starting position, the position of the exit, and the patrol paths of the ghosts. There is a timer that keeps track of how long Chef has been in the maze.  The timer starts at 0. Each second, the following happens (in order):</p>
<ul>
<li>If the timer is equal to the maximum time Chef is allowed to spend in the maze, he will faint from hunger.</li>
<li>Chef may move to one of the adjacent cells of the maze (north, east, south, or west of his current position), provided that cell is neither a wall nor occupied by a ghost. Chef also has the option of standing still. </li>
<li>All of the ghosts move to the next cell in their repsective patrol paths. If any ghost moves into the cell now occupied by Chef, Chef will faint.</li>
<li>The timer is incremented by 1.</li>
<li>If Chef is now standing at the location of the exit, Chef successfully escapes the maze.</li>
</ul>
<p> </p>
<p>Ghost patrol paths will be given as a list of waypoints. Each waypoint will be in-line either horizontally or vertically with the next waypoint in the list, and the final waypoint will similarly be in-line with the first waypoint. Ghosts will move from waypoint to waypoint, one square at a time, using the shortest possible path. Once a ghost reaches its final waypoint, it will travel back to the first waypoint and repeat the cycle. For example, if a patrol path were given as the waypoints:<br /> (2,3) (1,3) (1,0) (0,0) (0,1) (2,1)<br /> Then the ghost's complete path would be:<br /> (2,3) (1,3) (1,2) (1,1) (1,0) (0,0) (0,1) (1,1) (2,1) (2,2)<br /> After which the sequence would repeat.</p>
<h3>Input:</h3>
<p>Input will begin with T, the number of test cases. Each test case begins with 4 integers: M, N, C, and K, where M is the height of the maze, N is the width of the maze, C is the number of ghosts, and K is the number of seconds before Chef will faint from hunger. C lines follow, each describing the patrol path of a ghost. Each patrol path begins with an integer L, the number of waypoints in the path, followed by L pairs of integers giving the (x,y) coordinates of a waypoint on the path, where (0,0) is the top-left corner and (N-1, M-1) is the bottom-right corner. Finally, M lines of N characters each describe the maze itself.  A '.' character indicates a passable square, and a '#' character indicates an impassable wall (although the ghosts may pass through walls).  A '@' character indicates the starting position of Chef (it is guaranteed that no ghost will begin here), and a '$' character indicates the exit of the maze (there will be exactly one '@' character and one '$' character in each test case).</p>
<h3>Output:</h3>
<p>For each test case, if Chef can escape without fainting, print the minimum number of seconds it will take him to escape. Otherwise, print -1.</p>
<h3>Constraints:</h3>
<p>T≤10<br /> 1≤M,N≤30<br /> 0≤C≤30<br /> 0≤K≤100000<br /> 2≤L≤10</p>
<h3>Sample Input:</h3>
<pre><code>
4
10 10 0 200
##.$......
@#.######.
.#...#..#.
.###....#.
....###.#.
#.#.....#.
....#.###.
.####.#.#.
.#....#...
..........
3 10 1 18
2 1 1 7 1
###.######
@........$
######.###
5 5 2 13
2 2 4 2 1
3 4 2 3 2 2 2
##@##
##.##
$..##
#####
#####
2 2 1 1000
2 1 1 1 0
@$
..
</code></pre>
<h3>Sample Output:</h3>
<pre>22
18
-1
-1
</pre>
<p></p>    