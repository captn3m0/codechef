---
{"category_name":"easy","problem_code":"QHOUSE","problem_name":"Bear and House Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":"errichto","date_added":"20-02-2017","tags":{"0":"binary","1":"easy","2":"errichto","3":"ltime45"},"editorial_url":"https://discuss.codechef.com/problems/QHOUSE","time":{"view_start_date":1488042300,"submit_start_date":1488042300,"visible_start_date":1488042300,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME45/mandarin/QHOUSE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME45/russian/QHOUSE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME45/vietnamese/QHOUSE.pdf">Vietnamese</a> as well.</h3>

<p>This is an interactive problem.
It means that every time you output something, you must finish with a newline character and flush the output.
For example, in C++ use the fflush(stdout) function, in Java — call System.out.flush(), in Python — sys.stdout.flush(), and in Pascal — flush(output).
Only after flushing the output will you be able to read from the input again.</p>

<p>Limak is a little bear.
He has made a drawing of his house for you!
To get it, you must first play a game with him (little bears love playing games).</p>

<p>The drawing shows a building with a roof on the top. The building is represented by a square and the roof by an isosceles triangle in the coordinate system.
Formally, the following conditions are guaranteed:</p>

<ul>
<li>Both the square and the triangle are non-degenerate, i.e their areas are positive, and not zero.</li>
<li>The bottom side of the triangle is its base.</li>
<li>The bottom side of the square lies on the x-axis, while the top side is a part of the base of the triangle.</li>
<li>The base of the triangle is longer that the side of the square.</li>
<li>The whole drawing is symmetric with respect to the y-axis.</li>
<li>All vertices of the square and the triangle have integer coordinates, and their absolute values do not exceed 1000.
All y-coordinates are non-negative.</li>
</ul>
</p>

<p>An example of a valid drawing: </p>

<img src="https://www.codechef.com/download/upload/LTIME45/1YdgYQi.png" height="280" width="440"/>

<p>
Your task is to find the total area of the house (the sum of areas of the square and the triangle).
To achieve that, you are allowed to ask at most 100 queries.
In each query you choose some point with integer coordinates and the system will tell you if this point is in the house (including its boundary).
</p>

<h3>Interaction</h3>

<p>At most 100 times, you can ask a query by printing "? x y" (without the quotes) in a singe line.
Coordinates x and y should be integers such that -1000 ≤ x ≤ 1000 and 0 ≤ y ≤ 1000.
After flushing the output you should read a response that is a string "YES" or "NO" (without the quotes) in a single line.
A response "YES" means that the point (x, y) is inside the house or on its boundary, while "NO" means that it's outside.</p>

<p>Finally you should print the answer in the form "! S" (without the quotes) where S is an integer denoting the area of the house (it can be proved that it must be integer).
Then terminate your program.</p>



<h3>Notes</h3>

<ul>
<li>For each test the house is fixed and it doesn't change during queries.
It's even allowed to guess the area and print the answer as "! S" without asking any queries.
But obviously asking queries first might be useful.</li>
<li>After submitting your program you will see which tests it passes.
The first test there ("task # 0") matches the example test and drawings from this statement.</li>
<li>Asking more than 100 queries or printing invalid coordinates (not from allowed range) results in the verdict WA (wrong answer).</li>
<li>Printing the answer doesn't count as asking a query.
In particular, you can ask exactly 100 queries and print the answer after that .</li>
<li>You can't ask more queries after printing the answer.</li>
<li>You can ask the same query more than once.</li>
</ul>



<h3>Subtasks</h3>

<ul>
<li>Subtask #1 (35 points) The absolute values of the coordinates of vertices don't exceed 10.</li>
<li>Subtask #2 (65 points) Original constraints (absolute values of coordinates can be up to 1000)</li>
</ul>



<h3>Example</h3>

<table border="1">
<tr>
<td>you</td>     <td>system</td>
</tr>

<tr>
<td>? 1 0 </td> <td></td>
</tr>
<tr>
<td></td> <td>YES</td>
</tr>

<tr>
<td>? 2 2 </td> <td></td>
</tr>
<tr>
<td></td> <td>YES</td>
</tr>

<tr>
<td>? -3 0 </td> <td></td>
</tr>
<tr>
<td></td> <td>NO</td>
</tr>

<tr>
<td>? -1 3</td> <td></td>
</tr>
<tr>
<td></td> <td>YES</td>
</tr>

<tr>
<td>? -1 4</td> <td></td>
</tr>
<tr>
<td></td> <td>YES</td>
</tr>

<tr>
<td>? 7 4</td> <td></td>
</tr>
<tr>
<td></td> <td>NO</td>
</tr>

<tr>
<td>? -3 6</td> <td></td>
</tr>
<tr>
<td></td> <td>NO</td>
</tr>



<tr>
<td>? 2 6</td> <td></td>
</tr>
<tr>
<td></td> <td>YES</td>
</tr>

<tr>
<td>! 34</td> <td></td>
</tr>
</table>

<h3>Explanation</h3>

<p>The example test matches the drawing from the statement.
The square has side 4, while the triangle has base 12 and height 3.
The answer is 4 * 4 + 12 * 3 / 2 = 16 + 18 = 34.</p>

<p>Above you can see an example of communication with the system.
For example, the first query asks about the point (1, 0).
It is on the boundary so the response is "YES".
On the drawing below, blue and red points denote queries with response "YES" and "NO" respectively. </p>

<img src="https://s3.amazonaws.com/codechef_shared/download/upload/LTIME45/QoJ5ejY.png" height="280" width="440"/>