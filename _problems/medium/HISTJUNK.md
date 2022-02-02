---
{"category_name":"medium","problem_code":"HISTJUNK","problem_name":"Historical Junctions","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":null,"date_added":"27-04-2015","tags":{"0":"central","1":"eccentricity","2":"graphs","3":"snck151a","4":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/HISTJUNK","time":{"view_start_date":1432379700,"submit_start_date":1432379700,"visible_start_date":1432379700,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151A/mandarin/HISTJUNK.pdf">Mandarin Chinese </a> , <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151A/russian/HISTJUNK.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151A/vietnamese/HISTJUNK.pdf">Vietnamese</a></h3>


<p>After the Great ChefLand War, ChefTown consisted of <b>N</b> historical junctions with a sightseeing place in each of them and <b>M</b> cobbled roads, connecting them. It is possible to reach any junction from any other one, possibly, via intermediate junctions. The ChefTown Restoration Committee (CTRC) now wants to make the town more convenient, thus, attractive, for the tourists. </p>

<p>The essential requirement for the old town is to be "in the center of the city". For this purpose, each junction <b>V</b> has a parameter  <b>d(V)</b> denoting to the maximal shortest distance (in number of roads taken) you need to pass in order to reach some other junction, introduced by the CTRC.</p>

<p>
<center><img src = "http://codechef.com/download/histjunk_pic.jpg"></img></center>
</p>
<p>Let us take an example. Here you have 5 junctions with 5 roads, connecting them. Inside the circle, there is a number of a junction (in black), near the circle, there is a number <b>d(V)</b> (in yellow) corresponding to this junction.</p>

<p>Consider the junction, numbered <b>1</b>. We have <b>d(1) = 2</b> because, you can reach any other junction, passing no more than two roads. In fact, you can reach the junctions <b>2</b> and <b>3</b> directly, thus, the distance to them is <b>1</b>. In order to reach the junction <b>4</b> you need to go to the junction <b>2</b> and then directly to the junction <b>4</b>. The same way you can reach the junction <b>5</b> using <b>2</b> roads. Of course, you could have travelled to the junction number <b>4</b> another way: you could moved to the junction number <b>3</b>, then to the junction number <b>2</b> and then, finally, to the junction number <b>4</b> and that would have taken three roads. But we are interested only in the shortest distances, thus, we have <b>d(1) = 2</b>.</p>

<p>If we consider the junction <b>5</b>, it will take one road to go to the junction <b>3</b>, two roads to go to the junctions <b>1</b> and <b>2</b> and three roads to go to the junction <b>4</b>. So we have <b>d(5) = 3</b>.</p>

<p>Let's call the junction a <b>central</b> one in case its' parameter of <b>d(V)</b> is minimal among all the junctions in the town. On the example above, the junctions numbered <b>1, 2, 3</b> are central, and the junctions numbered <b>4, 5</b> are not.</p>

<p>Now, CTRC wants to build some new junctions (possibly none) with brand new shops and fast food and new asphalt roads connecting them in such a way that all the historical junctions are <b>central</b> in the town. In order to avoid the mess, none of newly built "non-historical" junctions should be central. Moreover, by the regulations of CTRC itself, it is prohibited to build an asphalt road between two historical junctions because it violates the spirit of old times.</p>

<p>All the roads in ChefTown, namely those that were built initially and those that will be built by CTRC are bi-directional.</p>

<p>The CTRC is now short in terms of money. It has sufficient funds only to build no more than <b>2N</b> new junctions and no more than <b>N * (N - 1)</b> new roads. Please help them to find an appropriate road-building plan or state that it is impossible.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>The first line of each test case contains integers <b>N</b> and <b>M</b> denoting the number of historical junctions and the number of roads between them.</p> 

<p>The following <b>M</b> lines contain pairs of space-separated integers <b>X</b> and <b>Y</b> denoting that there is a road between the junction numbered <b>X</b> and the junction numbered <b>Y</b>.</p>

<h3>Output</h3>
<p>For each test case, please use the following output format: 
</p>
<p>
If it is impossible to accomplish the requirement, print "-1 -1" (without quotes) in a single line. </br>
Otherwise, </br>
<ul>
<li>First output a line with two space separated integers: <b>J</b> and <b>A</b> denoting the number of added junctions and the number of added roads. They should not exceed <b>2 * N</b> and <b>N * (N - 1)</b> respectively.</li> </br>
<li>Then, output <b>A</b> integers denoting the newly built roads. Each of these integers should denote a road by a pair of space-separated junction numbers. The newly built junctions hold the numbers <b>N+1</b> <b>N+2</b> ... <b>N+J</b>. After adding the roads, it should be possible to reach any junction from any other junction (possible, via the intermediate ones). There should not be more than one road between any pair of junctions and no junction should be connect to itself.</li>
</ul> 
</p>

<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>N - 1</b> ≤ <b>M</b> ≤ <b>N * (N - 1) / 2</b></li>
<li><b>1</b> ≤ <b>X, Y</b> ≤ <b>N</b></li>
<li>In the given junction-road system, any junction is connected with any other by no more than one road and there is no road that connects the junction to itself. Also, this condition should also be satisfied for the newly constructed junctions and roads between them.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
4 4
1 2
2 3
3 4
4 1
4 6
1 2
2 3
3 4
4 1
1 3
2 4

<b>Output:</b>
4 4
1 5
2 6
3 7
4 8
0 0
</pre>

<h3>Explanation</h3>
<p><b>In the first example</b>, the obtained road system satisfies the required constraints. Please note that you don't need to minimize the number of added roads and junctions.</p>
<p><b>In the second example</b>, you can leave everything as it is because the given graph already satisfies the constraints.</p>