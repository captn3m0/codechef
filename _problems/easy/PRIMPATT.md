---
{"languages_supported":{"0":"NA"},"title":"PRIMPATT","category":"NA","old_version":true,"problem_code":"PRIMPATT","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p><b>The problem statement (Input Para) has been updated at 11:00 pm Indian Standard Time on 1st June, 2010. </b></p>
<p> </p>
<div id="prime_patt" align="center"><img src="https://www.spoj.pl/content/spookycookie:spiral" /></div>
<p>There is a very large field, colored white and divided into squares. There is a coordinate system attached to the field: y-axis goes from south to north and x-axis goes from west to east. Sides of the squares are parallel to the axes. There is a robot in the (0, 0) square. Robot starts to move in spiral as depicted. First it moves one step east and one step north. Then two steps west and two steps south. Then three steps east and three steps north, four steps west and four steps south and so on. It moves to a new square with each step. As it moves it counts squares it passes and, if the number of the square is the prime number, then the robot fills this square with black color. The (0, 0) square has the number 0. Given the coordinates of a square you are to calculate the distance from this square to the nearest to it black square. For two squares with coordinates (x1, y1) and (x2, y2) the distance between those squares is |x1-x2|+|y1-y2|.</p>
<p> </p>
<div></div>
<h3>Input</h3>
<p>Input file consists of a set of tests. The first line of the file is number T – the number of tests (T &lt;= 500). Following T lines contains two integers each separated with a space: x and y – the coordinates of the square (-2000001 &lt; x &lt; 2000001, -2000001 &lt; y &lt; 2000001).</p>
<h3>Output</h3>
<p>For each coordinate pair in the input file you are to output the distance between this square and the nearest to it black square.</p>
<h3>Example</h3>
<pre><b>Input:</b><br />8<br />0 0<br />1 0<br />1 1<br />0 1<br />3 3<br />-3 -3<br />-1 2<br />0 -3<br /><br /><b>Output:</b><br />1<br />1<br />0<br />0<br />1<br />1<br />2<br />2<br /><br /></pre>
<p></p>    