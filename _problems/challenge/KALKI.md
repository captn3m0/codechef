---
{"category_name":"challenge","problem_code":"KALKI","problem_name":"Kali and Devtas","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"nssprogrammer","problem_tester":"xiaodao","date_added":"23-09-2014","tags":{"0":"challenge","1":"dec14","2":"graph","3":"nssprogrammer","4":"optimization","5":"radio","6":"tree"},"editorial_url":"http://discuss.codechef.com/problems/KALKI","time":{"view_start_date":1418643478,"submit_start_date":1418643478,"visible_start_date":1418643000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="/download/translated/DEC14/mandarin/KALKI.pdf" target="_blank">Mandarin Chinese </a> and <a href="/download/translated/DEC14/russian/KALKI.pdf" target="_blank">Russian</a>.</h3>
<p>The apocalyptic demon <b><a href="http://en.wikipedia.org/wiki/Kali_%28demon%29">Kali</a></b> is on a rampage. The ground shudders under his feet, trees shrivel and animals and birds scurry away from his path. In order to save the universe from devastation, all the devtas led by devraj <b><a href="http://en.wikipedia.org/wiki/Indra">Indra</a></b> decide to meditate to please Lord <b><a href="http://en.wikipedia.org/wiki/Vishnu">Vishnu</a></b> so that he appears in the form of <b><a href="http://en.wikipedia.org/wiki/Kalki">Kalki</a></b>, his last avatar, and kill the demon.</p>
<p>Each devta can sit in meditation at a particular place on <b><a href="http://en.wikipedia.org/wiki/Svarga">Swarglok</a></b> (the heaven). Considering Swarglok as a 2-dimensional plane, the position of each devta is a fixed point with integer coordinates. The positions of all the devtas are distinct from each other.</p>
<p>While meditating the devtas connect to each other by means of astral projections - metaphysical threads that connect one devta to another. They must do so in such a way to satisfy two criteria:</p>
<ul>
<li>Each devta must be able to connect to every other devta by following a path of astral projections.</li>
<li>No subgroup of devtas may be connected by a cycle of astral projections.</li>
</ul>
<p>In simple terms, the astral projections must form a tree connecting all devtas.</p>
<p><b>What needs to be optimized ?</b></p>
<p>Once the devtas have taken their positions and are connected as a single group to start meditation, a <em>ring of influence</em> is formed around each devta. This ring is centered at the position of the devta, and has a radius equal to the Euclidean distance from this devta to the furthest devta directly connected via an astral projection.</p>
<p>Since different devtas have their own supernatural powers (<b><a href="http://en.wikipedia.org/wiki/Indra">Indra</a></b> is the rain god, <b><a href="http://en.wikipedia.org/wiki/Agni">Agni</a></b> is the fire god,<b><a href="http://en.wikipedia.org/wiki/Varuna">Varuna</a></b> is the water god, <b><a href="http://en.wikipedia.org/wiki/Vayu">Vayu</a></b> is the air god , etc), the influence ring of each devta has an adverse effect on all other devtas which lie within or on this ring. In other words, the efficiency of a devta to perform meditation decreases as the number of influence rings that include him increases.</p>
<p>For each devta <b>D<sub>i</sub></b>, define <b>C<sub>i</sub></b> as the number of influence rings that include or touch <b>D<sub>i</sub></b> (including their own). Now devraj Indra wants the devtas to connect in such a manner so as to minimize the maximum value of <b>C<sub>i</sub></b> over all devtas. So he has sent a message to <b><a href="http://en.wikipedia.org/wiki/Prithvi">Bhulok</a></b> (the earth) and he needs help from the best programmers on the planet.</p>
<h3>Input</h3>
<p>The first line contains the number of test cases <b>T</b>.</p>
<p>Each test case starts with an integer <b>N</b>, where <b>N</b> denotes the number of devtas.</p>
<p>Then <b>N</b> lines follow - the <b>i</b>-th such line consists of two integers <b>x<sub>i</sub></b> and <b>y<sub>i</sub></b>, specifying the coordinates of the <b>i</b>-th devta.</p>
<h3>Output</h3>
<p>For each test case output exactly <b>N-1</b> lines. Each line should consist of two integers, specifying a pair of devtas between whom an astral projection should be formed.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 100</b></li>
<li><b>3 ≤ N ≤ 400</b></li>
<li><b>-2000 ≤ x <sub>i</sub> ≤ 2000</b></li>
<li><b>-2000 ≤ y <sub>i</sub> ≤ 2000</b></li>
</ul>
<h3>Scoring and test data generation</h3>
<p>The score is <b>C</b>, where <b>C = max(C<sub>i</sub>)</b> for <b>1 &lt;= i &lt;= N</b>. The sequence of positions for devtas is generated randomly and the positions are distributed uniformly.</p>
<h3>Example</h3>
<pre><b>Input:</b>
1
5
-3 0
-1 0
0 1
1 0
2 0

<b>Example of a valid output:</b>
1 2
2 3
3 4
4 5</pre>
<h3>Explanation</h3>
<p>The second devta is connected to two other devtas: the first devta (a distance of 2 away), and the third devta (a distance of sqrt(2) away). The larger of these distances is 2, so the radius of the second devta's ring of influence is 2. We can calculate the other rings similarly.</p>
<p>Here is a diagram with the astral projections represented in red, and all of the influence rings represented in blue.</p>
<p><img height="188" width="285" src="/download/extimages/90e2169eaaad51f55db34d4304de99b5.png" /></p>
<p>The second devta lies within three rings of influence - the first devta's, the second devta's himself, and the third devta's. We can calculate the other values similarly:</p>
<p><b>C<sub>1</sub> = 2; C<sub>2</sub> = 3; C<sub>3</sub> = 3; C<sub>4</sub> = 4; C<sub>5</sub> = 2.</b></p>
<p>The maximum of these values is 4, so you would get a score of 4.</p>
<p>Other possible outputs may result in higher or lower scores. Your objective is to minimize your score.</p>