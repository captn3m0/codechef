---
{"category_name":"hard","problem_code":"WTHINGS","problem_name":"Where the Wild Things Are","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"rustinpiece","date_added":"30-05-2014","tags":{"0":"binary","1":"cook47","2":"kostya_by","3":"medium","4":"polygons"},"editorial_url":"http://discuss.codechef.com/problems/WTHINGS","time":{"view_start_date":1403464500,"submit_start_date":1403464500,"visible_start_date":1403464500,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK47/mandarin2/WTHINGS.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK47/russian/WTHINGS.pdf">Russian</a> as well.</h3>
<p>Recently, Max has visited the place where the Wild Things are again. He was very happy to know, that the monsters are living in peace now.</p>
<p>His friend Carol was so excited about Max's coming back, that he proposed everyone a brand new game. Unfortunately, all the Wild Things refused to play the game, except Max and K.W., so there were only three players playing the game.</p>
<p><img src="/download/extimages/4e92b0bc21bd247da871da4a6fb7eb79.jpg" height="200" /></p>
<p>The area, where the game takes place, is the Cartesian plane(<a href="http://en.wikipedia.org/wiki/Cartesian_plane">link</a>).</p>
<p>There are <b>N</b> <i>interesting</i> points on the plane.  Each <i>interesting</i> point has integer coordinates. Also, all the <i>interesting</i> points form a strictly convex polygon(<a href="http://en.wikipedia.org/wiki/Convex_polygon#Strict_convexity">link</a>). </p>
<p>There is no need to explain the rules of the game, but it's quite important to mention the preparation process:</p>
<p>In order to play the game, the players(Max, K.W. and Carol) must choose three different <i>interesting</i> points<br />
and plant  themselves there. Also, they must choose some positive integer <b>S</b>.</p>
<p>
Let's assume, that Max's <i>interesting</i> point is <b>A</b>, K.W.'s - <b>B</b> and Carol's - <b>C</b>.<br />
If the area of triangle <b>ABC</b> is greater than or equal to <b>S</b>, then the game will be <i>awesome</i>.<br />
 Otherwise, it will be <i>awful</i>.
</p>
<p>
Now Max is on his way home. His head is filled up with the memories about the wonderful game he used to play with<br />
his friends. But there's the thing, that annoys him: he remembers, that he played the game <b>Q</b> times, but<br />
he can't recall any <i>interesting</i> point chosen by him!
</p>
<p>
Max exactly remembers, that in the beginning of <b>i</b>'th game K.W. chose point <b>B</b> = <b>B<sub>i</sub></b>,<br />
Carol chose point <b>C</b> = <b>C<sub>i</sub></b> and <b>S</b> was equal to <b>S<sub>i</sub></b>.<br />
Also, he remembers, that all the games were awesome.<br />
So, you are to calculate the number of different <i>interesting</i> points,<br />
that could be chosen by Max as <b>A</b> in the beginning of <b>i</b>'th game. This number can be equal to zero(in that case we can conclude, that <b>i</b>'th game wasn't awesome - anyway, just output zero).
</p>
<h3>Input</h3>
<p>The first line of a test case contains two integers <b>N</b> and <b>Q</b>,<br />
denoting the number of the <i>interesting</i> points and the number of times Max played the game.</p>
<p>The next <b>N</b> lines contain two integers <b>X<sub>i</sub></b> and <b>Y<sub>i</sub></b> each, denoting coordinates of <b>i</b>'th <i>interesting</i> point. The points are 1-indexed.</p>
<p>The next <b>Q</b> lines contain three integers <b>B<sub>i</sub></b>, <b>C<sub>i</sub></b> and <b>S<sub>i</sub></b> each. In the beginning of <b>i</b>'th game K.W. chose point <b>B<sub>i</sub></b>'th <i>interesting</i> point, Carol chose <b>C<sub>i</sub></b>'th <i>interesting</i> point and <b>S</b> was equal to <b>S<sub>i</sub></b>.</p>
<p>It's guaranteed, that the <i>interesting</i> points form a strictly convex polygon and are given in clockwise or counterclockwise order.</p>
<p>It's also guaranteed, that there are no three vertices in the input that lie on one line and no point is given twice.</p>
<h3>Output</h3>
<p>For each round of the game, output a single line containing the number of different <i>interesting</i> points, that could be chosen by Max as <b>A</b> in the beginning of the corresponding game.</p>
<h3>Constraints</h3>
<p>3 ≤ <b>N</b> ≤ 60000;</p>
<p>1 ≤ <b>Q</b> ≤ 250000;</p>
<p><b>|X|</b>, <b>|Y|</b> ≤ 10<sup>8</sup>, for each <i>interesting</i> point;</p>
<p>1 ≤ <b>B </b> != <b>C</b> ≤ <b>N</b>, <b>S</b> ≤ 10<sup>18</sup>, for each game.</p>
<h3>Example</h3>
<pre><b>Input:</b>
4 2
0 0
4 0
7 3
7 7
1 4 1
1 4 100

<b>Output:</b>
2
0
</pre><h3>Explanations</h3>
<p>
For the first query, <b>A</b> could be equal to both 2 and 3;<br /><br />
For the second query, there are no possible variants for <b>A</b>.
</p>
