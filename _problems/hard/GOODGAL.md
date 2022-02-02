---
{"category_name":"hard","problem_code":"GOODGAL","problem_name":"Good galaxy","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"xiaodao","date_added":"9-11-2014","tags":{"0":"dec14","1":"graph","2":"hard","3":"pavel1996"},"editorial_url":"http://discuss.codechef.com/problems/GOODGAL","time":{"view_start_date":1418643542,"submit_start_date":1418643542,"visible_start_date":1418643000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="/download/translated/DEC14/mandarin/GOODGAL.pdf" target="_blank">Mandarin Chinese </a> and <a href="/download/translated/DEC14/russian/GOODGAL.pdf" target="_blank">Russian</a>.</h3>
<p>
<meta charset="utf8" />
</p>
<p>A galaxy is a set of planets with some connections between pairs of planets. Connections between planets are mutual and no planet can be connected with itself. The distance between a pair of planets is the least number of connections that you have to pass through while travelling from the first planet to the second.</p>
<p>Now let's consider how good galaxies are formed.</p>
<p>Initially there is a galaxy that consists of exactly one planet. At any moment, the galaxy grows by first making a copy of itself; then connecting each planet in the first copy to the corresponding planet in the second copy. Thus a galaxy which has <b>P</b> planets and <b>M</b> connections would grow into a new galaxy with <b>2P</b> planets and <b>2M+P</b> connections.</p>
<p>This diagram shows how the galaxy grows over the first two iterations. Dark grey shows the copy of the galaxy; light grey shows the additional connections.</p>
<p><img height="123" width="329" src="/download/extimages/a32212069d65c14f3c9b4a1cfbbb3571.png" /></p>
<p>However, galaxies do not continue growing forever. Why? The answer is simple: comets. At any point after the galaxy has started growing, a comet may pass through the galaxy. When it does, it changes the connections between planets by the following rule:</p>
<p><em>Two planets are connected after the comet arrives if and only if the distance between the planets was equal to 2 before the comet arrives.</em></p>
<p>It can be shown that a comet will split a growing galaxy into two disconnected galaxies with identical structures.</p>
<p>After a comet has arrived, the galaxy stops growing. Researchers have discovered that each of the two identical galaxies formed by the comet are 'good galaxies' - fit for living. In fact, galaxies formed in this way are the <em>only</em> good galaxies that exist.</p>
<p>This diagram shows the result when a comet arrives after each of the first three iterations. In each one the red and blue colours show the two equivalent good galaxies.</p>
<p><img height="123" width="329" src="/download/extimages/55bf4f46313dbc1cff5ebbd214e35142.png" /></p>
<p>Unfortunately, nothing lasts forever. For many reasons, such as a second comet appearing, new planets or connections between them may be created or destroyed, resulting in galaxies with many other structures and causing the galaxy to lose its 'good' status.</p>
<p>You are given a galaxy with <b>N</b> planets and <b>M</b> connections. Your task is to determine whether this galaxy is a good galaxy - ie can be created by a comet passing through a growing galaxy.</p>
<h3>Input</h3>
<p>The first line of the input contains one integer <b>T</b> denoting the number of test cases.</p>
<p>The first line of each test case contains two integers <b>N</b> and <b>M</b> - the number of planets in the galaxy and the number of connections. All planets are enumerated from 1 to <b>N</b>.</p>
<p>The following <b>M</b> lines each contain a pair of different integers - two planets which are connected in the galaxy. It's guaranteed that there won't be multiple connections between any pair of planets.</p>
<h3>Output</h3>
<p>For each test case output one word per line: "YES" if the galaxy is a good galaxy, or "NO" if it is not.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>1024</b></li>
<li><b>0</b> ≤ <b>M</b> ≤ <b>40 000</b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<b>Subtask #1 </b> [22 points]: <b>N</b> ≤ <b>32</b> 
</ul>
<ul>
<b>Subtask #2</b> [78 points]: maximum constraints 
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5
2 1
1 2

2 0

3 3
1 2
2 3
1 3

4 6
1 2
1 3
1 4
2 3
2 4
3 4

4 5
1 2
1 3
1 4
2 3
2 4

<b>Output:</b>
YES
NO
NO
YES
NO
</pre>
<h3>Explanation</h3>
<p><b>Test case 1.</b> This galaxy is equivalent to the red (or blue) galaxy in step 2 in the above image.</p>
<p><b>Test case 2.</b> This galaxy is similar to test case 1, but the connection has been destroyed, so the galaxy is no longer good.</p>
<p><b>Test case 3.</b> There are no good galaxies with 3 planets; some planets must have been destroyed.</p>