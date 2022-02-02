---
{"category_name":"easy","problem_code":"CONSESNK","problem_name":"Consecutive Snakes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":"kingofnumbers","date_added":"26-05-2017","tags":{"0":"admin3","1":"easy","2":"snackdown","3":"snckpa17","4":"ternary"},"editorial_url":"https://discuss.codechef.com/problems/CONSESNK","time":{"view_start_date":1495992600,"submit_start_date":1495992600,"visible_start_date":1495992600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPA17/mandarin/CONSESNK.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPA17/russian/CONSESNK.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPA17/vietnamese/CONSESNK.pdf">Vietnamese</a> as well.</h3>

<p>It's the annual military parade, and all the soldier snakes have arrived at the parade arena, But they aren't standing properly. The entire parade must be visible from the main podium, and all the snakes must be in a line. But the soldiers are lazy, and hence you must tell the soldiers to move to their new positions in such a manner that the total movement is minimized.</p>

<p> Formally, the entire parade strip can be thought of as the integer line. There are <b>N</b> snakes, where each snake is a line segment of length <b>L</b>. The i-th snake is initially at the segment [<b>S<sub>i</sub>, S<sub>i</sub></b> + <b>L</b>]. The initial positions of the snakes can overlap. The only segment of the strip visible from the podium is [<b>A, B</b>], and hence all the snakes should be moved so that all of them are visible from the podium. They should also all be in a line without gaps and every consecutive pair touching each other. In other words, they should occupy the segments [X, X + <b>L</b>], [X + <b>L</b>, X + 2*<b>L</b>], ... , [X + (<b>N</b>-1)*<b>L</b>, X + <b>N</b>*<b>L</b>], for some X, such that <b>A</b> ≤ X ≤ X + <b>N</b>*<b>L</b> ≤ <b>B</b>. You are guaranteed that the visible strip is long enough to fit all the snakes.
</p>

<p>If a snake was initially at the position [<b>X<sub>1</sub>, X<sub>1</sub></b> + <b>L</b>] and finally is at the position [<b>X<sub>2</sub>, X<sub>2</sub></b> + <b>L</b>], then the snake is said to have moved a distance of |<b>X<sub>2</sub></b> - <b>X<sub>1</sub></b>|. The total distance moved by the snakes is just the summation of this value over all the snakes. You need to move the snakes in such a manner that it satisfies all the conditions mentioned above, as well as minimize the total distance. You should output the minimum total distance achievable.
</p>

<h3>Input</h3>
<ul>
<li>The first line contains a single integer, <b>T</b>, the number of testcases. The description of each testcase follows.</li>
<li>The first line of each testcase contains four integers, <b>N, L, A</b> and <b>B</b>, where <b>N</b> denotes the number of snakes, <b>L</b> denotes the length of each snake, and [<b>A, B</b>] is the segment visible from the podium.</li>
<li>The next line contains <b>N</b> integers, the i-th of which is <b>S<sub>i</sub></b>. This denotes that the i-th snake is initially in the segment [<b>S<sub>i</sub>, S<sub>i</sub></b> + <b>L</b>].</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each testcase, output a single integer in a new line: the minimum total distance achievable.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>S<sub>i</sub></b> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>L</b> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>A</b> ≤ <b>B</b> ≤ 10<sup>9</sup></li>
<li><b>N</b> * <b>L</b> ≤ <b>B</b> - <b>A</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
3 4 11 23
10 11 30
3 4 11 40
10 11 30

<b>Output:</b>
16
16
</pre>

<h3>Explanation</h3>
<p>In the first testcase, the three snakes are initially at segments [10, 14], [11, 15], and [30, 34]. One optimal solution is to move the first snake which was at [10, 14] to [15, 19] and the third snake which was at [30, 34] to [19, 23]. After this, the snakes would form a valid parade because they will be from [11, 15], [15, 19] and [19, 23]. Hence they are all in a line without any gaps in between them, and they are all visible, because they all lie in the visible segment, which is [11, 23].</p>
<p>The distance traveled by the first snake is |15 - 10| = 5, by the second snake is |11 - 11| = 0 and by the third snake is |19 - 30| = 11. Hence the total distance traveled is 5 + 0 + 11 = 16. This is the best that you can do, and hence the answer is 16.</p>

<p>In the second testcase, only the visible segment has increased. But you can check that the same final configuration as in the first subtask is still optimal here. Hence the answer is 16.</p>