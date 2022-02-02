---
{"category_name":"hard","problem_code":"BIKE","problem_name":"Chef and Bike","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":7,"source_sizelimit":50000,"problem_author":"wwwwodddd","problem_tester":"xcwgf666","date_added":"15-09-2016","tags":{"0":"hard","1":"maths","2":"matrix","3":"nov16","4":"wwwwodddd"},"editorial_url":"http://discuss.codechef.com/problems/BIKE","time":{"view_start_date":1479115800,"submit_start_date":1479115800,"visible_start_date":1479115800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/mandarin/BIKE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/russian/BIKE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/vietnamese/BIKE.pdf">Vietnamese</a> as well.</h3>


<p>
In Chefland, there are <b>n</b> cities and <b>m</b> one-way roads between cities. The chef will travel between cities along these roads using a very unusual bike.
The circumference of the front wheel is <b>n</b> (the same as the number of cities) yet the circumference of its rear wheel is only <b>n - 1</b>. We think of the circumference of each wheel as being broken up into equal-spaced <i>positions</i>. So the front wheel has positions <b>0, 1, ..., n-1</b> and the rear wheel has positions <b>0, 1, ..., n-2</b>. Each unit of distance travelled will advance each wheel 1 position.
</p>

<p>
For example, when the chef travels a distance of <b>d</b> when both wheels start at position <b>0</b>, 
the position of the front wheel is  left at <b>d (mod n)</b> and the position of the rear wheel is left at <b>d (mod (n - 1))</b>.
</p>

<p>
Furthermore, the chef bikes very fast and the roads are very bumpy. Quite frequently at least one wheel is not touching the ground. When this happens, the wheel does not turn at all (the bike needs some lubrication). So the front and rear wheel may not even rotate the same total number of positions when travelling along a road.
</p>

<p>
For each road <b>i</b>, we are given the start city <b>s[i]</b>,
the end city <b>e[i]</b>, the distance the front wheel travels <b>f[i]</b>, and the distance of the rear wheel <b>r[i]</b>.
</p>


<p>
Both wheels start at position <b>0</b> at the beginning of the chef's trip. After traveling a sequence of roads <b>i<sub>1</sub>,i<sub>2</sub>, ..., i<sub>k</sub></b> the front wheel is in position <b>F := f[i<sub>1</sub>] + f[i<sub>2</sub>] + ... + f[i<sub>k</sub>] (mod n)</b>.
Similarly, the rear wheel is in position <b>R := r[i<sub>1</sub>] + r[i<sub>2</sub>] + ... + r[i<sub>k</sub>] (mod n-1)</b>.
</p>


<p>
The chef wants to start and end in the same city, but is ok starting in any city. The chef is also ok visiting a city more than once; it is the journey that counts, not the destinations.
</p>

<p>
The chef is also interested in calculating the number of paths where the final positions <b>F</b> and <b>R</b> equal certain values and the number of roads traversed equals a certain value (if he uses an road twice, it counts twice).
Since the answer is quite large, you only need to output the answer mod 1163962801.
</p>


<h3>Input</h3>
<p>
The first line contains three integers, indicating <b>n</b> and <b>m</b> and <b>t</b>. Here, <b>n</b> is the number of cities (and the circumference of the front wheel, and one more than the circumference of the rear wheel), <b>m</b> is the number of roads, and <b>t</b> is the number of roads the chef wants to travel over. Remember, if the chef travels over the same road twice, it counts twice.

</p>
<p>
The following <b>m</b> lines describe a road.
The <b>i</b>'th such line contains 4 integers, namely <b>s[i], e[i], f[i], r[i]</b> that describe the road as specified above.
</p>


<h3>Output</h3>
<p>
Output is arranged into <b>n</b> blocks. The <b>k</b>'th block (1 ≤ <b>k</b> ≤ <b>n</b>) will itself contain <b>n</b> lines, each consisting of <b>n-1</b> integers. 
</p>

<p>
The <b>j</b>'th number on the <b>i</b>'th line of the <b>k</b>'th block should describe the number of different ways the chef can start and end a bike tour at city <b>k</b> that crosses precisely <b>t</b> roadss and leaves the front wheel at position <b>F = i</b> and the rear wheel at position <b>R = j</b>. Each number in this output should be reduced modulo 1163962801.
</p>


<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>t</b> ≤ <b>1000000000</b></li>
<li><b>2</b> ≤ <b>n</b> ≤ <b>22</b></li>
<li><b>2</b> ≤ <b>m</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>s[i]</b> ≤ <b>n</b></li>
<li><b>1</b> ≤ <b>t[i]</b> ≤ <b>n</b></li>
<li><b>990</b> ≤ <b>0.99 f[i]</b> ≤ <b>r[i]</b> ≤ <b>f[i]</b> ≤ <b>10000000</b></li>
<li>There might be several roads between two cities</li>
<li>There might be roads from a city to itself</li>
<li>Subtask #1 [10 points]: <b>n</b> ≤ <b>5</b>, <b>t</b> ≤ <b>100</b></li>
<li>Subtask #2 [20 points]: <b>n</b> ≤ <b>5</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3 6 6
1 2 0 0
2 1 1 1
1 3 1 2
3 1 2 1
2 3 5 5
3 2 10 10

<b>Output:</b>
1 5
0 10
1 5
1 5
0 10
1 5
1 8
0 10
1 2
</pre>

<h3>Explanation</h3>
<p>I have discovered a truly marvellous enumeration of this, which this margin is too narrow to contain.</p>